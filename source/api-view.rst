Class View
============

Have methods that outputs the HTML

set ()
---
(static) Sets a parameter from a controller action that can be used later from View file.

**Parameters**
- $param:string The parameter name.
- $value:(mixed) The value.


meta ()
---
---
(static) Sets a meta value that is printed later from View::head ().

**Parameters**
- $meta:string The meta name.
- $value:string The value.


stylesheet ()
---
---
(static) Adds a new stylesheet link that is printed later from View::head ().

**Parameters**
- $href:string The href attribute from the link.


script ()
---
(static) Adds a new script to be included in the output HTML.

**Parameters**
- $script:string The src attribute from the script.
- $prop:string (optional) A property for the script.


getThemePath ()
---
(static) Returns the path of the current theme.


head()
---
(static) Prints all the head information in <head> tag.

**Parameters**
- $meta:Array (optional) Meta values to be printed.

Example

.. code-block:: bash

  View::head([
    'twitter:image:src'=> 'https://domain.com/img.jpg',
    'og:image'=> 'https://domain.com/img.jpg'
  ]);

getViewFile ()
---
(static) Returns the path of a file inside theme or package folder. Return false if file is not found.

- $file:string The file path.
- $package:string (optional) The package folder where the file is located if is not found in theme folder.


setViewFile ()
---
(static) Overrides the path of a View file.

**Parameters**
- $file:string The file path.
- $package:string The package folder where the file is located.

Example:
View::setViewFile('admin/settings.php','new-package');
/*
src/new-package/Views/admin/settings.php
overrides
themes/my-theme/admin/settings.php
src/core/Views/admin/settings.php
*/


render ()
---
(static) Prints the View file adding the header.php and footer.php from theme.

**Parameters**
- $file:string The file path.
- $package:string (optional) The package folder where the file is located if is not found in theme folder.


renderAdmin ()
---
(static) Prints the View file adding the admin/header.php and admin/footer.php from theme.

**Parameters**
- $file:string The file path.
- $package:string (optional) The package folder where the file is located if is not found in theme folder.


renderFile ()
---
(static) Prints the view file without header and footer.

**Parameters**
- $file:string The file path.
- $package:string (optional) The package folder where the file is located if is not found in theme folder.


includeFile ()
---
(static) Prints a partial view file.

**Parameters**
- $file:string Relative path of the View file.
- $package:string (optional) The package folder where the file is located if is not found in theme folder.


setViewFile ()
---
(static) Overrides a View file. Overrides file from any package or the theme.

**Parameters**
- $file:string Relative path of the View file.
- $package:string (optional) The package folder where the file is located if is not found in theme folder.


menu ()
---
(static) Displays a menu.

**Parameters**
- $menu:string (optional) Name of the menu.
- $tpl:string (optional) The View template to generate html.

Example

.. code-block:: bash

  View::menu('mainmenu', 'tpl/menu.php');


widgetArea ()
---
(static) Prints the widgets of a specific area.

**Parameters**
- $area:string The widget area name.
- $div:bool (optional) Also print or not the widget inside a <div> tag with its title. Default=true


getWidgetArea ()
---
(static) Returns the widgets of a specific area.

**Parameters**
- $area:string The widget area name.

Example

.. code-block:: bash

  View::getWidgetArea('sidebar');


getWidgetBody ()
---
(static) Returns the body of a widget type.

**Parameters**
- $type:string Name of the widget type
- $widget_data:array (optional) The data to be used
- $widget_file:string (optional) Alternative wiget View file


img ()
---
(static) Returns the html markup for an image or thumbnail image

**Parameters**
- $src:string The path of original image.
- $prefix:string (optional) The prefix name of the thumbnail. Default=''
- $max:integer (optional) The maximum dimension of the thumbnail in pixels. Default=180

Example

.. code-block:: bash

  View::img('assets/image.png', 'md/', 500);

// for images in private folders, preix is not used, so you can skip it
View::img('data/uploads/image.png', 500);


thumb ()
---
(static) Returns the path of a thumbnail image of specified dimensions. If thumbnail does not exist it will create one.

**Parameters**
- $src:string The path of original image.
- $prefix:string (optional) The prefix name of the thumbnail. Default=''
- $max:int (optional) The maximum width or height of thumbnail in pixels. Default=180


thumbStack ()
---
(static) Returns path to revisioned stucked image and the list of stucked photos. If image does not exist it will be created on the fly.

**Parameters**
- $src_array:Array The images to stack.
- $file:string The name of the stucked image. It must have png extension.
- $max:int (optional) The maximum width or height of thumbnails in pixels.

Example:

$img = ["image1.png","image2.png"];
list($file,$stacked) = View::thumbStack($img, "tmp/stacked_file.png",80);

/* Returned values

$file: tmp/stacked_file.png?12

$stacked[0]: ["src"=>"image1.png","src_width"=>200,"src_height"=>1"width"=>80,"height"=>60,"type"=>2,"top"=>0]

$stacked[1]: false (2nd image was not stacked)
*/


thumbSrcset ()
---
(static) Returns an array of resized versions of an image

**Parameters**
- $src:string The image path
- $sizes:int array (optional) The maximum sizes in pixels
