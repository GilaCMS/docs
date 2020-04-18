## Class view

Have methods that outputs the HTML

### set($param, $value)
(static) Sets a parameter from a controller action that can be used later from view file.

**Parameters**
- $param:string The parameter name.
- $value:(any) The value.


### meta($meta, $value)
(static) Sets a meta value that is printed later from view::head().

**Parameters**
- $meta:string The meta name.
- $value:string The value.


### stylesheet($href)
(static) Adds a new stylesheet link that is printed later from view::head().

**Parameters**
- $href:string The href attribute from the link.


### script($script, $prop = '')
(static) Adds a new script to be included in the output HTML.

**Parameters**
- $script:string The src attribute from the script.
- $prop:string (optional) A property for the script.


### getThemePath()
(static) Returns the path of the current theme.


### head($meta=[])
(static) Prints all the head information in <head> tag.

**Parameters**
- $file:Array (optional) Meta values to be printed.


### getViewFile($file, $package = 'core')
(static) Returns the path of a file inside theme or package folder. Return false if file is not found.

- $file:string The file path.
- $package:string (optional) The package folder where the file is located if is not found in theme folder.


### setViewFile($file, $package)
(static) Overrides the path of a view file.

**Parameters**
- $file:string The file path.
- $package:string The package folder where the file is located.

Example:
```
view::setViewFile('admin/settings.php','new-package');
/*
src/new-package/views/admin/settings.php
overrides
themes/my-theme/admin/settings.php
src/core/views/admin/settings.php
*/
```


### render($file, $package = 'core')
(static) Prints the view file adding the header.php and footer.php from theme.

**Parameters**
- $file:string The file path.
- $package:string (optional) The package folder where the file is located if is not found in theme folder.


### renderAdmin($file, $package = 'core')
(static) Prints the view file adding the admin/header.php and admin/footer.php from theme.

**Parameters**
- $file:string The file path.
- $package:string (optional) The package folder where the file is located if is not found in theme folder.


### renderFile($file, $package = 'core')
(static) Prints the view file alone from theme.

**Parameters**
- :string $file: The file path.
- :string $package: (optional) The package folder where the file is located if is not found in theme folder.


### includeFile($file, $package = 'core')
(static) Includes the view file without passing the.

**Parameters**
- $file:string Relative path of the view file.
- $package:string (optional) The package folder where the file is located if is not found in theme folder.


### setViewFile ($file, $package)
(static) Overrides a view file. Overrides file from any package or the theme.

**Parameters**
- $file:string Relative path of the view file.
- $package:string (optional) The package folder where the file is located if is not found in theme folder.


### menu ($menu='mainmenu', $tpl='tpl/menu.php')
(static) Displays a menu.

**Parameters**
- $menu:string (optional) Name of the menu.
- $tpl:string (optional) The view template to generate html.


### widget_area ($area, $div=true)
(static) Prints the widgets of a specific area.

**Parameters**
- $area:string The widget area name.
- $div:bool (optional) Also print or not the widget inside a <div> tag with its title.


### getWidgetArea ($area)
(static) Returns the widgets of a specific area.

**Parameters**
- $area:string The widget area name.


### getWidgetBody ($type, $widget_data=null, $widget_file=null)
(static) Returns the body of a widget type.

**Parameters**
- $type:string Name of the widget type
- $widget_data:array (optional) The data to be used
- $widget_file:string (optional) Alternative wiget view file


### img ($src, $prefix='', $max=180)
(static) Returns the html markup for an image or thumbnail image

**Parameters**
- $src:string The path of original image.
- $prefix:string (optional) The prefix name of the thumbnail.


### thumb ($area, $prefix, $max=180)
(static) Returns the path of a thumbnail image of specified dimensions. If thumbnail does not exist it will create one.

**Parameters**
- $src:string The path of original image.
- $prefix:string (optional) The prefix name of the thumbnail.
- $max:int (optional) The maximum width or height of thumbnail in pixels.

### thumb_stack ($src_array, $file, $max=180)
(static) Returns path to revisioned stucked image and the list of stucked photos. If image does not exist it will be created on the fly.

**Parameters**
- $src_array:Array The images to stack.
- $file:string The name of the stucked image. It must have png extension.
- $max:int (optional) The maximum width or height of thumbnails in pixels.

Example:

```
$img = ["image1.png","image2.png"];
list($file,$stacked) = view::thumb_stack($img, "tmp/stacked_file.png",80);

/* Returned values

$file: tmp/stacked_file.png?12

$stacked[0]: ["src"=>"image1.png","src_width"=>200,"src_height"=>1"width"=>80,"height"=>60,"type"=>2,"top"=>0]

$stacked[1]: false (2nd image was not stacked)
*/
```


### thumb_srcset ($src, $sizes = [1200,320])
(static) Returns an array of resized versions of an image

**Parameters**
- $src:string The image path
- $sizes:int array (optional) The maximum sizes in pixels
