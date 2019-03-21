
# Themes

Themes change the look and style of your website. You can also change the theme from *Administration->Themes*. They are located in **themes/**.

**What themes do**
- They override the view files from the packages. View files in packages are placed in a **views/** folder, in themes are placed directly in their root folder. For example when a controller will try to render a view file from the package core it will call **view::renderFile('blog-post.php','core')**. If exists the file **themes/<selected-theme>/blog-post.php** it will rendered instead of **src/core/views/blog-post**
- They override the response files of the widgets. These files are placed in **widgets/** folder of the theme. For example, **themes/<selected-theme>/widgets/text.php** will replace **src/core/widgets/text/text.php** when a widget of text will be rendered. This is useful when you want to add styling to widgets similar to the theme. Note that you don't have to create folders for each widget.

**Structure**
Inside a theme folder we need to have the following files:
```
package.json
screenshot.png
load.php
widgets/
```  
- **package.json** has the basic information of the theme and uses a similar schema with the packages.
- **screenshot.png** can be an image of maximum width of 320 pixels. It is used to display the theme on the the themes selection.
- **load.php** registers new variables to the system, like the widget areas that offers, routes for static files or a parent theme.
- **widgets/** folder include the responses of the widgets that you want to override.

## New theme
**How to create new theme:**

Create a new folder inside **themes/** with name *my-new-theme*. Inside create a new *package.json* file:
```
{
    "name": "My New Theme",
    "version": "1.0.0",
    "author": "My Name"
}
```
Now you have a new but empty theme to choose in *Administration->Themes*. It is only missing is a *screenshot.png* file to display.

Although it has no view files of its own, when is selected, it will use the original view files of the **src/core/views/** folder.


## Child themes

Child themes is the easiest way to make a new theme by making just a few changes on an existing theme. Make changes directly on another theme is a bad idea, since it can be updated any time and you lose all the adjustments you made.

**How to create a child theme:**

We choose *gila-blog* as parent, first create a new folder inside **themes/** with name *my-child-theme* and a *package.json*:
```
{
    "name": "My Child Theme",
    "version": "1.0.0",
    "author": "My Name",
    "parent": "gila-blog"
}
```
We create *load.php* file:
```
<?php

view::$parent_theme = 'gila-blog';
... copy here the code of themes/gila-blog/load.php
```
We need to let view class know which is the parent theme, so first the rendering methods will try to find the view files in the parent theme when they fail to find theme in the selected(child) theme.

Now inside the folder of this theme you can edit the view files. Giving to the folder a name with prefix **my-** or **custom-** you make sure that the name will not conflict with a public theme from theme manager.

## Cloned themes

If you want to create a new theme based on another one you can just copy its files. In this way you dont have to keep installed the original theme.

**How to clone a theme:**

Make a copy of *gila-blog* and name it *my-clone-theme*. In *package.json* file change the name:
```
...
    "name": "My Clone Theme",
...
```

## load.php

Some use case of load.php
```
// add new widget areas that theme includes
array_push(gila::$widget_area, 'footer','sidebar','post.after');

// include stylesheet
view::stylesheet('lib/font-awesome/css/font-awesome.min.css');

```
