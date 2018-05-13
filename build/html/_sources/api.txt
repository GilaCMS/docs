Api
===

Core Classes
------------

.. class:: gila

    Common methods for Gila CMS

    .. method:: controllers($list)

        (static) Register new controllers.

        :param Assoc Array $list: Example: `{'ctrl'=>'my_package/controllers/ctrl'}`

    .. method:: widgets($list)

        (static) Register new widgets.

        :param Array $list: Example: `{'wdg'=>'my_package/widgets/wdg'}`

    .. method:: amenu($list)

        (static) Add new elements on administration menu.

        :param Array $list: Example: ``['Item','controller/action','icon'=>'item-icon']``


    .. method:: amenu_child($h,$item)

        (static) Add a child element on administration menu item.

        :param string $h: Index of the parent item.
        :param Array $item: Example: ``['SubItem','controller/action_1','icon'=>'item-icon']``

    .. method:: config($key, $value = null)

        (static) Sets or gets the value of configuration element.

        :param string $key: Index of the element.
        :param * $value: (optional) The value.
        :returns: The value if parameter $value is not sent.

    .. method:: updateConfigFile()

        (static) Updats the configuration file.

    .. method:: equal($v1,$v2)

        (static) Checks if two values are set and have the same value.

        :param * $v1: First value.
        :param * $v2: Second value.
        :returns: True or false.


    .. method:: hash($pass)

    (static) Generates a hash passwrd from a string.

    :param string $pass: The string to be hashed.
    :returns: Hashed password.

    .. method:: option($option,$default='')

        (static) Gets an option value.

        :param string $option: Option name.
        :param string $default: (optional) The value to return if there option has not saved value.
        :returns: The option value.

    .. method:: hasPrivilege ($pri)

        (static) Checks if logged in user has at least one of the required privileges.

        :param string/Array $pri: The privilege(s) to check.
        :returns: True or false.

    .. method:: make_url($c, $action='', $args=[])

        (static) Generates a url.

        :param string $c: The controller.
        :param string $action: The action.
        :param Array $args: The parameters in array.
        :returns: The full url to print.

        Examples:

        ``$url1 = gila::make_url('blog','post',[1]);`` returns mysite.com/blog/post/1
        ``$url1 = gila::make_url('blog','',['page1']);`` returns mysite.com/blog/page1


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


    .. method:: script($script)

        (static) Adds a new script to be included in the output HTML.

        :param string $script: The src attribute from the script.


    .. method:: getThemePath()

        (static) Returns the path of the current theme.

    .. method:: head($meta=[])

        (static) Prints all the head information in <head> tag.

        :param Array $file: (optional) Meta values to be printed.


    .. method:: findPath($file, $package = 'core')

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


    .. method:: widget_area ($area,$div=true)

        (static) Prints the widgets of a specific area.

        :param string $area: The widget area name.
        :param bool $div: (optional) Also print or not the widget inside a <div> tag with its title.


    .. method:: widget_area ($area,$id,$max=180)

        (static) Returns the path of a thumbnail image of specified dimensions. If thumbnail does not exist it will create one.

        :param string $src: The path of original image.
        :param string $id: The name of the thumbnail.
        :param int $max: (optional) The maximum width or height of thumbnail in pixels.
