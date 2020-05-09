## Class Gila
Common methods for Gila CMS

### controller ()
(static) Register a new controller.

**Parameters**
- $c:string Controllers name
- $file:string Controller's filepath without the php extension
- $name:string Optional. Controller's class name, $c is used by default

Example:
```
Gila::controller('my-ctrl', 'my_package/controllers/ctrl','myctrl');
```


### route($r, $fn)
(static) Registers a function call on a specific path.

**Parameters**
- $r:string The path
- $fn:function Callback for the route

Example:
```
Gila::route('some.txt', function(){ echo 'Some text.'; });
```


### onController ()
(static) Registers a function to run right after the controller class construction.

**Parameters**
- $c:string The controller's class name
- $fn:function Callback

Example:
```
Gila::route('blog', function(){ blog::ppp = 24; });
```


### action($c, $action, $fn)
(static) Registers a new action or replaces an existing for a controller.

**Parameters**
- $c:string The controller's class name
- $action:string The action
- $fn:function Callback

Example:
```
Gila::action('blog', 'topics', function(){ blog::tagsAction(); });
```


### onAction ()
(static) Runs after an action and before the display of view file.

**Parameters**
- $c:string The controller's class name
- $action:string The action
- $fn:function Callback

Example:
```
Gila::onAction('blog', 'topics', function(){ View::set('new_variable', 'value'); });
```


### before ()
(static) Registers a function to run before the function of a specific action.

**Parameters**
- $c:string The controller's class name
- $action:string The action
- $fn:function Callback

Example:
```
Gila::action('blog', 'topics', function(){ blog::tagsAction(); });
```


### addLang ()
(static) Adds language translations from a json file.

**Parameters**
- $path:string Path to the folder/prefix of language json files

Example:
```
Gila::addLang('mypackages/lang/');
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
Gila::widgets( [‘wdg’=>’my_package/widgets/wdg’] );
```


### content ()
(static) Register new content type.

**Parameters**
- String $key Name of content type
- String $path Path to the table file

Example:        
```
Gila::content( 'mytable', 'package_name/content/mytable.php' );
```


### contentInit ()
(static) Make changes on an existing content type.

**Parameters**
- String $key: Name of content type
- Function $init: Function to run when initializes the content type object

Example:    
```
Gila::contentInit( 'mytable', function(&$table){
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
Gila::amenu([
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
Gila::amenu_child('item', ['Child Item','controller/action','icon'=>'item-icon']);
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


### option ()
(static) Gets an option value.

**Parameters**
- string $option: Option name.
- string $default: (optional) The value to return if the option has not a saved value.


### setOption ()
(static) Sets an option value.

**Parameters**
- $option:string Option name.
- $default:string The value to set.


### hasPrivilege ()
(static) Checks if logged in user has at least one of the required privileges.
Return True or false.

**Parameters**
- $pri:string/Array The privilege(s) to check.


### dir ()
(static) Creates the folder if does not exist and returns the path.

**Parameters**
- $path:string Folder path.


### make_url ()
(static) Generates a url. Return the full url path to print.

**Parameters**
- $c:string The controller.
- $action:string The action.
- $args:Array (optional) The query parameters in array.

Examples:
```
$url1 = Gila::make_url('blog','post',[1]);`` returns mysite.com/blog/post/1
$url1 = Gila::make_url('blog','',['page1']);`` returns mysite.com/blog/page1
```


### mt ()
(static) Returns modification times in seconds.

**Parameters**
- string/Array $arg: Names of keys.
        :returns: string/Array

Example:
```
Gila::mt('my-table')
```


### updateMt ()
(static) Updates modification time in seconds. You can use this function from your model classes. The *cm* controller runs *updateMt()* for any content type in update action.

**Parameters**
- string/Array $arg: Names of keys.
        :returns: string/Array

Example:
        
```
Gila::updateMt('my-table')

```
