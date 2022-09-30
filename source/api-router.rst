Class Router
============

The class that manages the routes and request parameters

controller ()
-------------
(static) Register a new controller.

**Parameters**

* $c:string Controllers name
* $file:string Controller's filepath without the php extension

Example:

.. code-block:: bash

  Router::controller('my-ctrl', 'my_package/controllers/ctrl','myctrl');



add ()
------
(static) Registers a new route.

**Parameters**

* $r:string The path
* $fn:function Callback for the route
* $method:string (optional) GET|POST
* $permissions:string (optional) User persmissions that restrict access

Examples:

.. code-block:: bash

  Router::route('some.txt', function(){ echo 'Some text.'; });
  # route with regex
  Router::route('hello/(.*)', function($x){ echo 'Hello '.$x; });
  Router::route('edit_page_/(.*)', function($x){ ... }, 'POST', 'editor');


post ()
-------
(static) Registers a new route.

**Parameters**

* $r:string The path
* $fn:function Callback for the route
* $permissions:string (optional) User persmissions that restrict access


get ()
------
(static) Registers a new route.

**Parameters**

* $r:string The path
* $fn:function Callback for the route
* $permissions:string (optional) User persmissions that restrict access

auth ()
-------
(static) Registers a new route.

**Parameters**

* $callback: A function to run only if the user is logged in
* $permissions:string (optional) User persmissions that restrict access

Example:

.. code-block:: bash

  Router::auth(function(){
    Router::get('page-only-for-members', function() {
      ...
    });
  });


admin ()
--------
(static) Registers a new route.

**Parameters**

* $r:string  A function to run only if the user id at least level 1. (Level is given from he roles)
* $permissions:string (optional) User persmissions that restrict access

Example:

.. code-block:: bash

  Router::admin(function(){
    Router::get('manage-listing/(.*)', function($listingId) {
      ...
    });
  });


onController ()
---------------
(static) Registers a function to run right after the controller class construction.

**Parameters**

* $c:string The controller's class name
* $fn:function Callback

Example:

.. code-block:: bash

  Router::onController('blog', function(){ blog::ppp = 24; });



action ()
---------
(static) Registers a new action or replaces an existing for a controller.

**Parameters**

* $c:string The controller's class name
* $action:string The action
* $fn:function Callback

Example:

.. code-block:: bash

  Router::action('blog', 'topics', function(){ blog::tagsAction(); });



onAction ()
-----------
(static) Runs after an action and before the display of view file.

**Parameters**

* $c:string The controller's class name
* $action:string The action
* $fn:function Callback

Example:

.. code-block:: bash

  Router::onAction('blog', 'topics', function(){ View::set('new_variable', 'value'); });



before ()
---------
(static) Registers a function to run before the function of a specific action.

**Parameters**

* $c:string The controller's class name
* $action:string The action
* $fn:function Callback

getController ()
----------------
(static) Returns the name of the controller that runs. Default: as set in the settings

getAction ()
------------
(static) Returns the name of the action that runs. Default: 'index'

