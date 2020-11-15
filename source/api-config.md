## Class Config
Common methods for Gila CMS


### addLang ()
(static) Adds language translations from a json file.

**Parameters**
- $path:string Path to the folder/prefix of language json files

Example:
```
Config::addLang('mypackages/lang/');
```


### addList ()
(static) Adds en element in a global array.

- string $list: Name of the list
- mixed $el: Value

### getList ()
(static) Returns the array of a list.

**Parameters**
- $list:string Name of the list


### widgets ()
(static) Register new widgets.

**Parameters**
- $list:Array

Example: 
        
```
Config::widgets( [‘wdg’=>’my_package/widgets/wdg’] );
```


### content ()
(static) Register new content type.

**Parameters**
- String $key Name of content type
- String $path Path to the table file

Example:        
```
Config::content( 'mytable', 'package_name/content/mytable.php' );
```


### contentInit ()
(static) Make changes on an existing content type.

**Parameters**
- String $key: Name of content type
- Function $init: Function to run when initializes the content type object

Example:    
```
Config::contentInit( 'mytable', function(&$table){
    // unlist a column from content administration
    &$table['fields']['column1']['list] = false;
});
```


### packages ()
(static) Returns an array with the active packages names.


### amenu ()
(static) Add new elements on administration menu.

**Parameters**
- $items:Assoc menu items

Example:     
```     
Config::amenu([
  'item'=>['Item','controller/action','icon'=>'item-icon']
]);
```


### amenu_child ()
(static) Add a child element on administration menu.

**Parameters**
- $key:string Index of the parent item.
- $item:Array The iten

Example:    
```
Config::amenu_child('item', ['Child Item','controller/action','icon'=>'item-icon']);
```


### config ()
(static) Gets the value of configuration element.

**Parameters**
- $key:string Index of the element.


### setConfig ()
(static) Sets the value of configuration element.

**Parameters**
- $key:string Index of the element.
- $value:mixed The value to set.


### updateConfigFile ()
(static) Updates the config.php file.


### hash ()
(static) Generates a hash password from a string. Returns hashed password.

- $pass:string The string to be hashed.


### getOption ()
(static) Gets an option value.

**Parameters**
- string $option: Option name.
- string $default: (optional) The value to return if the option has not a saved value.


### setOption ()
(static) Sets an option value.

**Parameters**
- $option:string Option name.
- $default:string The value to set.


### dir ()
(static) Creates the folder if does not exist and returns the path.

**Parameters**
- $path:string Folder path.


### url ()
(static) Generates a url. Return the url path to print.

**Parameters**
- $str:string The path.
- $args:Array (optional) The query parameters in array.

Examples:
```
$url = Config::url('blog/post',['id'=>1]);`` returns mysite.com/blog/post?id=1
```

### base ()
(static) Generates a url. Returns the full url path to print.

**Parameters**
- $str:string The path.

Examples:
```
$url = Config::base('blog/post?id=1');`` returns https://mysite.com/blog/post?id=1
```


### mt ()
(static) Returns modification times in seconds.

**Parameters**
- string/Array $arg: Names of keys.
        :returns: string/Array

Example:
```
Config::mt('my-table')
```


### updateMt ()
(static) Updates modification time in seconds. You can use this function from your model classes. The *cm* controller runs *updateMt()* for any content type in update action.

**Parameters**
- string/Array $arg: Names of keys.
        :returns: string/Array

Example:
        
```
Config::updateMt('my-table')

```
