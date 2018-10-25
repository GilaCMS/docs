
# Packages

The source code of Gila CMS is split into packages, even the core files are part of the main package called *core*. The package folders are placed inside *src/* folder and desirably have a similar structure:
```
assets/
controllers/
models/
views/
lang/
package.json
load.php
```

The folders are optional but very useful to organize better the code. The file **package.json** is a must have as it has the basic information of the package -without it the package is invisible- and the **load.php** is the file that will register new values and events of the package.

A simple **package.json** file:
```
{
	"name":"Package Name",
	"version":"1.0.0",
	"description":"A short descriptive text of your package for what it does.",
	"url":"package_url.com",
    "author":"Your Name"
}
```


You can also add another index in the object called *options*. It will be an array of objects, the objects are the options to be stored. The index is the option name and it can have optional values with the following indexes:
- **title**  the option name to be displayed, if not specified, the index is used
- **type**  select | postcategory
- **options** array of {value:display_text}, it is required if is set type:select

```
{
    ...
	"options":{
        "option1":{},
		"category":{
			"type":"postcategory"
		},
		"lang":{
            "title":"Language",
            "type":"select",
			"options":{
				"en":"English","es":"Spanish","el":"Greek"
			}
		}
	}
}

```

You can get the option values like that:
```
// options are saved using as prefix the package's folder name
// for example if the package has the folder my_package/

$option1 = gila::option("my_package.option1");
$lang = gila::option("my_package.lang","en"); // use default value 'en'
```

A simple **load.php** file could be:
```
<?php
// display text below any post
event::listen('post.after',function(){
	echo 'This is printed after post.';
}

```
**IMPORTANT:** The first line of the load.php file should include only the opening tag *<?php* and not close with the closing tag.


