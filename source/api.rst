Api
===

Class gila
----------
.. class:: gila

    Common methods for Gila CMS

    .. method:: controller($c, $file, $name=null)

        (static) Register a new controller.

        :param String $c: Controllers name
        :param String $file: Controller's filepath without the php extension
        :param String $name: Optional. Controller's class name, $c is used by default

        Example: ``gila::controller('my-ctrl', 'my_package/controllers/ctrl','myctrl');``

    .. method:: route($r, $fn)

        (static) Registers a function call on a specific path.

        :param String $r The path
        :param Function $fn Callback for the route

        Example: ``gila::route('some.txt', function(){ echo 'Some text.'; });``

    .. method:: onController($c, $fn)

        (static) Registers a function to run right after the controller class construction.

        :param String $c The controller's class name
        :param Function $fn Callback

        Example: ``gila::route('blog', function(){ blog::ppp = 24; });``

    .. method:: action($c, $action, $fn)

        (static) Registers a new action or replaces an existing for a controller.

        :param String $c The controller's class name
        :param String $action The action
        :param Function $fn Callback

        Example: ``gila::action('blog', 'topics', function(){ blog::tagsAction(); });``

    .. method:: before($c, $action, $fn)

        (static) Registers a function to run before the function of a specific action.

        :param String $c The controller's class name
        :param String $action The action
        :param Function $fn Callback

        Example: ``gila::action('blog', 'topics', function(){ blog::tagsAction(); });``

    .. method:: addLang($path)

        (static) Adds language translations from a json file.

        :param String $path Path to the folder/prefix of language json files

        Example: ``gila::addLang('mypackages/lang/');``

    .. method:: widgets($list)

        (static) Register new widgets.

        :param Array $list

        Example: ``gila::widgets( [‘wdg’=>’my_package/widgets/wdg’] );``

    .. method:: content($key, $path)

        (static) Register new widgets.

        :param String $key Name of content type
        :param String $path Path to the table file

        Example: ``gila::content( 'mytable', 'package_name/content/mytable.php' );``

    .. method:: packages($list)

        (static) Returns the list of active packages.


    .. method:: amenu($key,$item)

        (static) Add new elements on administration menu.

        :param Array $key Index name
        :param Array $item

        Example: ``gila::amenu('item', ['Item','controller/action','icon'=>'item-icon']);``


    .. method:: amenu_child($key,$item)

        (static) Add a child element on administration menu.

        :param string $key: Index of the parent item.
        :param Array $item

        Example: ``gila::amenu_child('item', ['Child Item','controller/action','icon'=>'item-icon']);``

    .. method:: config($key, $value = null)

        (static) Sets or gets the value of configuration element.

        :param string $key: Index of the element.
        :param * $value: (optional) The value.
        :returns: The value if parameter $value is not sent.

    .. method:: updateConfigFile()

        (static) Updates the configuration file.

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
        :returns: The full url to print.

        Examples:

        ``$url1 = gila::make_url('blog','post',[1]);`` returns mysite.com/blog/post/1
        ``$url1 = gila::make_url('blog','',['page1']);`` returns mysite.com/blog/page1




Class event
-----------
.. class:: event

    Registers and fires events (hooks)

    .. method:: listen($event, $handler)

        (static) Sets a new function to run when an event is triggered later.

        :param string $event: The event name.
        :param function $handler: The function to call.

    .. method:: fire(string $event [,Array $params])

        (static) Fires an event and calls all handling functions.

        :param string $event: The event name.
        :param function $params: (optional) Parameters to send to handlers.



Class view
----------
.. class:: view

    Have methods that outputs the HTML

    .. method:: function set($param,$value)

        (static) Sets a parameter from a controller action that can be used later from a view file.

        :param string $param: The parameter name.
        :param (any) $handler: The value.


    .. method:: meta($meta,$value)

        (static) Sets a meta value that is printed later from view::head().

        :param string $meta: The meta name.
        :param string $value: The value.


    .. method:: stylesheet($href)

        (static) Adds a new stylesheet link that is printed later from view::head().

        :param string $href: The href attribute from the link.


    .. method:: script($script, $prop = '')

        (static) Adds a new script to be included in the output HTML.

        :param string $script: The src attribute from the script.
        :param string $prop: Optional. A property for the script.


    .. method:: getThemePath()

        (static) Returns the path of the current theme.

    .. method:: head($meta=[])

        (static) Prints all the head information in <head> tag.

        :param Array $file: (optional) Meta values to be printed.


    .. method:: getViewFile($file, $package = 'core')

        (static) Returns the path of a file inside theme or package folder.

        :param Array $file: The file path.
        :param string $package: (optional) The package folder where the file is located if is not found in theme folder.
        :returns: False if file is not found.


    .. method:: render($file, $package = 'core')

        (static) Prints the view file adding the header.php and footer.php from theme.

        :param string $file: The file path.
        :param string $package: (optional) The package folder where the file is located if is not found in theme folder.


    .. method:: renderAdmin($file, $package = 'core')

        (static) Prints the view file adding the admin/header.php and admin/footer.php from theme.

        :param string $file: The file path.
        :param string $package: (optional) The package folder where the file is located if is not found in theme folder.


    .. method:: renderFile($file, $package = 'core')

        (static) Prints the view file alone from theme.

        :param string $file: The file path.
        :param string $package: (optional) The package folder where the file is located if is not found in theme folder.


    .. method:: includeFile($file, $package = 'core')

        (static) Includes the view file without passing the.

        :param string $file: The file path.
        :param string $package: (optional) The package folder where the file is located if is not found in theme folder.

    .. method:: menu ($menu='mainmenu', $tpl='tpl/menu.php')

        (static) Displays a menu.

        :param string $menu: Optional. Name of the menu.
        :param string $tpl:  Optional. The view template to generate html.

    .. method:: widget_area ($area,$div=true)

        (static) Prints the widgets of a specific area.

        :param string $area: The widget area name.
        :param bool $div: (optional) Also print or not the widget inside a <div> tag with its title.


    .. method:: thumb ($area, $prefix, $max=180)

        (static) Returns the path of a thumbnail image of specified dimensions. If thumbnail does not exist it will create one.

        :param string $src: The path of original image.
        :param string $prefix: The prefix name of the thumbnail.
        :param int $max: (optional) The maximum width or height of thumbnail in pixels.

    .. method:: thumb_stack ($src_array, $file, $max=180)

        (static) Returns the path of a stacked image. If image does not exist it will be created on the fly.

        :param Array $src_array: The images to stack.
        :param string $file: The name of the stucked image. It must have png extension.
        :param int $max: (optional) The maximum width or height of thumbnails in pixels.
        :returns: The path to revisioned stucked image and the list of stucked photos.

        Example:

        ``$img = ["image1.png","image2.png"];``
        ``list($file,$stacked) = view::thumb_stack($img, "tmp/stacked_file.png",80);``

        $file: ``tmp/stacked_file.png?12``

        $stacked[0]: ``["src"=>"image1.png","src_width"=>200,"src_height"=>150,"width"=>80,"height"=>60,"type"=>2,"top"=>0],``

        $stacked[1]: ``false``
        2nd image was not stacked
