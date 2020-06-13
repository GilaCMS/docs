## Class Router
The class that manages the routes and request parameters

### controller ()
(static) Register a new controller.

**Parameters**
- $c:string Controllers name
- $file:string Controller's filepath without the php extension
- $name:string Optional. Controller's class name, $c is used by default

Example:
```
Router::controller('my-ctrl', 'my_package/controllers/ctrl','myctrl');
```


### add ()
(static) Registers a new route.

**Parameters**
- $r:string The path
- $fn:function Callback for the route
- $method:string (optional)

Examples:
```
Router::route('some.txt', function(){ echo 'Some text.'; });
# route with regex
Router::route('hello/(.*)', function($x){ echo 'Hello '.$x; });
```


### onController ()
(static) Registers a function to run right after the controller class construction.

**Parameters**
- $c:string The controller's class name
- $fn:function Callback

Example:
```
Router::onController('blog', function(){ blog::ppp = 24; });
```


### action ()
(static) Registers a new action or replaces an existing for a controller.

**Parameters**
- $c:string The controller's class name
- $action:string The action
- $fn:function Callback

Example:
```
Router::action('blog', 'topics', function(){ blog::tagsAction(); });
```


### onAction ()
(static) Runs after an action and before the display of view file.

**Parameters**
- $c:string The controller's class name
- $action:string The action
- $fn:function Callback

Example:
```
Router::onAction('blog', 'topics', function(){ View::set('new_variable', 'value'); });
```


### before ()
(static) Registers a function to run before the function of a specific action.

**Parameters**
- $c:string The controller's class name
- $action:string The action
- $fn:function Callback

Example:
```
Router::action('blog', 'topics', function(){ blog::tagsAction(); });
```

