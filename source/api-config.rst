Class Config
==============

Common methods for Gila CMS


addLang ()
----------
(static) Adds language translations from a json file.

**Parameters**

* $path:string Path to the folder/prefix of language json files

Example:

.. code-block:: bash

  Config::addLang('mypackages/lang/');


addList ()
----------
(static) Adds en element in a global array.

* string $list: Name of the list
* mixed $el: Value

getList ()
----------
(static) Returns the array of a list.

**Parameters**

* $list:string Name of the list


widgets ()
----------
(static) Register new widgets.

**Parameters**

* $list:Array

Example: 

.. code-block:: bash

  Config::widgets( [‘wdg’=>’my_package/widgets/wdg’] );


content ()
----------
(static) Register new content type.

**Parameters**

* String $key Name of content type
* String $path Path to the table file

Example:        

.. code-block:: bash

  Config::content( 'mytable', 'package_name/content/mytable.php' );


contentInit ()
--------------
(static) Make changes on an existing content type.

**Parameters**

* String $key: Name of content type
* Function $init: Function to run when initializes the content type object

Example:    

.. code-block:: bash

  Config::contentInit( 'mytable', function(&$table){
    // unlist a column from content administration
    &$table['fields']['column1']['list] = false;
});


packages ()
-----------
(static) Returns an array with the active packages names.


amenu ()
--------
(static) Add new elements on administration menu.

**Parameters**

* $items:Assoc menu items

Example:     
```     
Config::amenu([
  'item'=>['Item','controller/action','icon'=>'item-icon']
]);


amenu_child ()
--------------
(static) Add a child element on administration menu.

**Parameters**

* $key:string Index of the parent item.
* $item:Array The iten

Example:    

.. code-block:: bash

  Config::amenu_child('item', ['Child Item','controller/action','icon'=>'item-icon']);


get ()
------
(static) Gets the value of configuration/option element.

**Parameters**

* $key:string Index of the element.


set ()
------
(static) Sets the value of configuration/option element.

**Parameters**

* $key:string Index of the element.
* $value:mixed The value to set.


updateConfigFile ()
-------------------
(static) Updates the config.php file.


hash ()
-------
(static) Generates a hash password from a string. Returns hashed password.

* $pass:string The string to be hashed.


getArray ()
-----------
(static) Gets an option value in array form if it was saved in json format.

**Parameters**

* string $option: Option name.


dir ()
------
(static) Creates the folder if does not exist and returns the path.

**Parameters**

* $path:string Folder path.


url ()
------
(static) Generates a url. Return the url path to print.

**Parameters**

* $str:string The path.
* $args:Array (optional) The query parameters in array.

Examples:

.. code-block:: bash

  $url = Config::url('blog/post',['id'=>1]);`` returns mysite.com/blog/post?id=1

base ()
-------
(static) Generates a url. Returns the full url path to print.

**Parameters**

* $str:string The path.

Examples:

.. code-block:: bash

  $url = Config::base('blog/post?id=1');`` returns https://mysite.com/blog/post?id=1


mt ()
-----
(static) Returns modification times in seconds.

**Parameters**

* string/Array $arg: Names of keys.
        :returns: string/Array

Example:

.. code-block:: bash

  Config::mt('my-table')


updateMt ()
-----------
(static) Updates modification time in seconds. You can use this function from your model classes. The *cm* controller runs *updateMt()* for any content type in update action.

**Parameters**

* string/Array $arg: Names of keys.
        :returns: string/Array

Example:
        

.. code-block:: bash

  Config::updateMt('my-table')

  