Class view
----------
.. class:: view

    Have methods that outputs the HTML

    .. method:: set($param,$value)

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

        :param string $file: The file path.
        :param string $package: (optional) The package folder where the file is located if is not found in theme folder.
        :returns: False if file is not found.


    .. method:: setViewFile($file, $package)

        (static) Overrides the path of a view file.

        :param string $file: The file path.
        :param string $package: The package folder where the file is located.

        Example

        .. code-block:: php

            view::setViewFile('admin/settings.php','new-package');
            /*
            src/new-package/views/admin/settings.php
            overrides
            themes/my-theme/admin/settings.php
            src/core/views/admin/settings.php
            */


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

        .. code-block:: php

            $img = ["image1.png","image2.png"];
            list($file,$stacked) = view::thumb_stack($img, "tmp/stacked_file.png",80);

            /* Returned values

            $file: tmp/stacked_file.png?12

            $stacked[0]: ["src"=>"image1.png","src_width"=>200,"src_height"=>150,"width"=>80,"height"=>60,"type"=>2,"top"=>0]

            $stacked[1]: false (2nd image was not stacked)
            */

