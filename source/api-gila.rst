Class gila
----------
.. class:: gila

    Common methods for Gila CMS

    .. method:: controller($c, $file, $name=null)

        (static) Register a new controller.

        :param string $c: Controllers name
        :param string $file: Controller's filepath without the php extension
        :param string $name: Optional. Controller's class name, $c is used by default

        Example: 
        
        .. code-block:: php

            gila::controller('my-ctrl', 'my_package/controllers/ctrl','myctrl');

    .. method:: route($r, $fn)

        (static) Registers a function call on a specific path.

        :param string $r: The path
        :param Function $fn: Callback for the route

        Example: 
        
        .. code-block:: php
        
            gila::route('some.txt', function(){ echo 'Some text.'; });

    .. method:: onController($c, $fn)

        (static) Registers a function to run right after the controller class construction.

        :param string $c: The controller's class name
        :param Function $fn: Callback

        Example: 
        
        .. code-block:: php
        
            gila::route('blog', function(){ blog::ppp = 24; });

    .. method:: action($c, $action, $fn)

        (static) Registers a new action or replaces an existing for a controller.

        :param string $c: The controller's class name
        :param string $action: The action
        :param Function $fn: Callback

        Example: 
        
        .. code-block:: php
        
            gila::action('blog', 'topics', function(){ blog::tagsAction(); });

    .. method:: onAction($c, $action, $fn)

        (static) Runs after an action and before the display of view file.

        :param string $c: The controller's class name
        :param string $action: The action
        :param Function $fn: Callback

        Example: 
        
        .. code-block:: php
        
            gila::onAction('blog', 'topics', function(){ view::set('new_variable', 'value'); });

    .. method:: before($c, $action, $fn)

        (static) Registers a function to run before the function of a specific action.

        :param string $c: The controller's class name
        :param string $action: The action
        :param Function $fn: Callback

        Example: 
        
        .. code-block:: php
        
            gila::action('blog', 'topics', function(){ blog::tagsAction(); });

    .. method:: addLang($path)

        (static) Adds language translations from a json file.

        :param string $path: Path to the folder/prefix of language json files

        Example: 
        
        .. code-block:: php
        
            gila::addLang('mypackages/lang/');

    .. method:: addList($list, $el)

        (static) Adds en element in a global array.

        :param string $list: Name of the list
        :param mixed $el: Value

    .. method:: getList($list)

        (static) Returns the array of a list.

        :param string $list: Name of the list

    .. method:: widgets($list)

        (static) Register new widgets.

        :param Array $list:

        Example: 
        
        .. code-block:: php
        
            gila::widgets( [‘wdg’=>’my_package/widgets/wdg’] );

    .. method:: content($key, $path)

        (static) Register new content type.

        :param String $key Name of content type
        :param String $path Path to the table file

        Example: 
        
        .. code-block:: php
        
            gila::content( 'mytable', 'package_name/content/mytable.php' );

    .. method:: contentInit($key, $init)

        (static) Make changes on an existing content type.

        :param String $key: Name of content type
        :param Function $init: Function to run when initializes the content type object

        Example: 
        
        .. code-block:: php
        
            gila::contentInit( 'mytable', function(&$table){
                // unlist a column from content administration
                &$table['fields']['column1']['list] = false;
            } );

    .. method:: packages($list)

        (static) Returns an array with the active packages names.


    .. method:: amenu($items)

        (static) Add new elements on administration menu.

        :param Assoc Array $items: menu items

        Example: 
        
        .. code-block:: php
        
            gila::amenu([
              'item'=>['Item','controller/action','icon'=>'item-icon']
            ]);


    .. method:: amenu_child($key,$item)

        (static) Add a child element on administration menu.

        :param string $key: Index of the parent item.
        :param Array $item:

        Example: 
        
        .. code-block:: php
        
            gila::amenu_child('item', ['Child Item','controller/action','icon'=>'item-icon']);


    .. method:: config($key, $value = null)

        (static) Sets or gets the value of configuration element.

        :param string $key: Index of the element.
        :param * $value: (optional) The value.
        :returns: The value if parameter $value is not sent.


    .. method:: setConfig($key,$value='')

        (static) Sets the value of configuration element.

        :param string $key: Index of the element.
        :param * $value: The value to set.


    .. method:: updateConfigFile()

        (static) Updates the config.php file.


    .. method:: equal($v1,$v2)

        (static) Checks if two values are set and have the same value.

        :param * $v1: First value.
        :param * $v2: Second value.
        :returns: True or false.


    .. method:: hash($pass)

    (static) Generates a hash password from a string.

    :param string $pass: The string to be hashed.
    :returns: Hashed password.


    .. method:: option($option,$default='')

        (static) Gets an option value.

        :param string $option: Option name.
        :param string $default: (optional) The value to return if there option has not saved value.
        :returns: The option value.


    .. method:: setOption($option,$value='')

        (static) Sets an option value.

        :param string $option: Option name.
        :param string $default: The value to set.


    .. method:: hasPrivilege ($pri)

        (static) Checks if logged in user has at least one of the required privileges.

        :param string/Array $pri: The privilege(s) to check.
        :returns: True or false.


    .. method:: dir ($path)

        (static) Creates the folder if does not exist and return the path.

        :param string $path: Folder path.
        :returns: string


    .. method:: make_url($c, $action='', $args=[])

        (static) Generates a url.

        :param string $c: The controller.
        :param string $action: The action.
        :param Array $args: The parameters in array.
        :returns: The full url path to print.

        Examples:

        .. code-block:: php

            $url1 = gila::make_url('blog','post',[1]);`` returns mysite.com/blog/post/1
            $url1 = gila::make_url('blog','',['page1']);`` returns mysite.com/blog/page1


    .. method:: mt ($arg)

        (static) Returns modification times in seconds.

        :param string/Array $arg: Names of keys.
        :returns: string/Array

        Example:
        
        .. code-block:: php

            gila::mt('my-table')


    .. method:: updateMt ($arg)

        (static) Updates modification time in seconds. You can use this function from your model classes. The *cm* controller runs *updateMt()* for any content type in update action.

        :param string/Array $arg: Names of keys.
        :returns: string/Array

        Example:
        
        .. code-block:: php

            gila::updateMt('my-table')

