
Packages
==========

The source code of Gila CMS is split into packages, even the core files are part of the main package called *core*. The package folders are placed inside *src/* folder and desirably have a similar structure:

.. code-block:: bash
  assets/
  controllers/
  models/
  views/
  lang/
  package.json
  load.php
  logo.png
  update.php


The folders are optional but very useful to organize better the code. The only requires files are the **package.json** which has the basic information of the package, and the **load.php**

package.json
------------

A simple **package.json** file:

.. code-block:: bash

  {
    "name":"Package Name",
    "version":"1.0.0",
    "description":"A short descriptive text of your package for what it does.",
    "url":"package_url.com",
    "author":"Your Name"
  }



You can also add another index in the object called *options*. It will be an array of objects, the objects are the options to be stored. The index is the option name and it can have optional values with the following indexes:

* **title**  the option name to be displayed, if not specified, the index is used
* **type**  select | postcategory
* **options** array of {value:display_text}, it is required if is set type:select

.. code-block:: json

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



You can get the option values like that:

.. code-block:: bash

  // options are saved using as prefix the package's folder name
  // for example if the package has the folder my_package/
  $option1 = Config::option("my_package.option1");
  $lang = Config::option("my_package.lang","en"); // use default value 'en'

More information for [**package.json schema**](schemas.html##package-json).

load.php
--------

This file is excecuted in every request to the website, so instead of adding many lines of code we usually register to the system new controllers, new routes or include on more files only when is needed.
A simple **load.php** file could be:

.. code-block:: bash

  <?php
  // display text below any post
  Event::listen('post.after',function(){
    echo 'This is printed after post.';
  }


**IMPORTANT:** The first line of the load.php file should include only the opening tag *<?php* and not close with the closing tag.

Some things you can do in a load file:

.. code-block:: bash

  <?php
  // add menu item or menu sub item
  Config::amenu(['mymenuitem'=>['Item',"myctr",'icon'=>'link']]);
  Config::amenu_child('mymenuitem',['Sub Item',"myctr/sub",'icon'=>'link']);

  // add an event listener
  Event::listen('load', function() {
    // this function will run after all load.php from active packages
    if(Config::hasPrivilege('admin')==false) {
      View::renderFile('landing-page.php', 'mypackage');
      exit;
    }
  }

  // register new content type
  Config::content('mytable', 'mypackage/tables/mytable.php');

  // add new column on an existing content type
  Config::contentInit('mytable', function(&$table) {
      $table['fields']['newfield'] = [
          'title'=>"New Field",   // the label to display
          'qtype'=>'varchar(80)', // the column type at database schema
      ];
  });

  // register a controller
  // all /blog/* request are processed from class Blog in
  // blog/controllers/blogController.php
  Router::controller('blog', 'blog/controllers/blogController', 'Blog');

  // add a new action for blog controller (/blog/topics)
  Router::action('blog','topics',function(){
    View::render('blog-topics.php', 'mypackage');
  });



logo.png
--------
An optional small(120x120px) png file

update.php
----------
This file is excecuted when a package is activated or downloaded (while active). It serves to update the database schema if the package requires it.

assets/
-------
When package is activated, the files from this folder will be copied in a public folder *assets/{package-name}/*

views/
------
The view files are added here. they can be rendered like this:

.. code-block:: bash
  View::render('view-file.php', '[package-name]');

