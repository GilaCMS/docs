
# Structure


In the main folder we can see these folders and files.
```
assets/
install/
lib/
log/
tmp/
src/
themes/
index.php
config.php
```
**assets/** A public folder where we upload our media files.

**install/** A public folder used only for the installation.

**lib/** A public folder. Third-party libraries are inside this folder.

**log/** A private folder that save logs and the user sessions.

**tmp/** A public folder with temporally files created.

**src/** The folder of installed packages. Here is all the code of the system.

**themes/** The folder of installed themes.

**index.html** The main index file. For any call, execution starts from here.

**config.php** The configuration file. It is generated after installation.


### Packages

The source code of Gila CMS is split into packages, even the core files are part of the main package called *core*. The package folders are placed inside *src/* folder and desirably have a similar structure:
```
assets/
controllers/
models/
views/
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
**title**  the option name to be displayed, if not specified, the index is used
**type**  select | postcategory
**options** array of {value:display_text}, it is required if is set type:select

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
				"en_US":"English","es_ES":"Spanish","gr_GR":"Greek"
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
$lang = gila::option("my_package.lang","en_US"); // use default value
```

A simple **load.php** file could be:
```
<?php
// display text below any post
event::listen('post.after',function(){
	echo 'The post has ended';
}

```
**IMPORTANT:** The first line of the file should include only the opening tag, and not use later the closing tag.



For any question/feature proposal/help needed
[Make a new issue](https://github.com/GilaCMS/gila/issues/new)
