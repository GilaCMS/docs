
# Examples

Here are some examples to you get into the of package creation.

## Event: Post Tags

In this example we will list the tags of a post just after it. Create a folder inside *src/* and name it *post-tags*. Inside it create the following files
```
package.json
load.php
logo.png
```
**package.json**
```
{
	"name":"Post Tags",
	"version":"1.0.0",
	"description":"A package to show tags below the post."
}
```
**load.php** will run a code when the package is active. We will register a function to run right after the post display.
```
<?php

Event::listen('post.after', function(){
    global $g; // $g will give us the post id
    $tags = core\models\post::meta($g->id,'tag');     // get the tag list of post
    echo "<strong>TAGS:</strong> ";
    foreach ($tags as $tag) echo " <a href='tag/$tag'>#$tag</a>";
});
```
This function will run when the *post.after* event is dispatched. That happens with *Event::fire('post.after');* or *Event::widgetArea('post.after');* from *single-post.php* view file.

**logo.png** is the package's logo and is displayed in the package list.

Activate the package in */admin/packages*. After that you should see the list of TAGS below any blog post.

<br>
<br>

## Widget: Twitter Timeline

In this example we will create a widget that displays the last tweets of an account. Instead of using an event to run the code we let the user create instances of the widget choose in which widget area want to display the twitter plugin. Inside *src/* create a folder *twitter-timelines* and add the following files:
```
package.json
load.php
widgets/twitter-timeline/widget.php
widgets/twitter-timeline/twitter-timeline.php
```
**package.json**:
```
{
	"name":"Twitter Timelines",
	"version":"1.0.0",
	"description":"Installs a widget to display twitter timelines."
}
```
**load.php**:
```
<?php

// registers the widget name and its path
Config::widgets([
    'twitter-timeline'=>'twitter-timelines/widgets/twitter-timeline'
]);
```
**widgets/twitter-timeline/widget.php** will include the widget options we want to use. In this case we need the user account and the name to be displayed.
```
<?php

$options=[
    'accountID'=>[
        'title'=>'Twitter Account'
    ]
];
```
**widgets/twitter-timeline/twitter-timeline.php** is the view file of the widget, it will generate the html code. We use the embedding Twitter content from [here](https://publish.twitter.com)
```
<?php
$account = Config::option('twitter-timelines.accountID','gilacms');
?>
<a class="twitter-timeline" data-height="400" href="https://twitter.com/<?=$account?>">Tweets by <?=$account?></a>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
```
**Config::option()** gets the option of the package that we set up in the package settings. A default value can be used if the option is null.

Activate the package. Now in */admin/widgets* you can create a new widget with type *twitter-timeline* and set the widget area *sidebar* or *dashboard* to see it.

<br>
<br>

## User: Address

In this example we will add a new field for the users. Instead of adding a new column in the database table we will use the usermeta table to store new values that link to the users. Inside *src/* create a folder *user-address* and add the following files:
```
package.json
load.php
```
**package.json**:
```
{
	"name":"User Address",
	"version":"1.0.0",
	"description":"Adds a new field for the users."
}
```
**load.php**:
```
<?php

// make changes to the user content type

Config::contentInit('user', function(&$table){
    $table['fields']['useraddress'] = [
        'title'=>"Address",   //the label
        'type'=>'meta',       //the values of the field will be stored in a meta table
        'input-type'=>'text', //use the text input type
        'edit'=>true,         //is editable from user
        'values'=>1,          //this field gets only one value
        "mt"=>['usermeta', 'user_id', 'value'], //meta table, meta column that links to user table,meta column of the value
        'metatype'=>['vartype', 'address'] //meta column of the value type, value type
    ];
});
``` 
This package will add a new new Address field for users in *Administration->Users*
