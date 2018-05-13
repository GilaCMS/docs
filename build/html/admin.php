

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Administration &mdash; Gila CMS 24 Nov 2017 documentation</title>
  

  
  

  

  
  
    

  

  
  
    <link rel="stylesheet" href="_static/css/theme.css" type="text/css" />
  

  

  
        <link rel="author" title="About these documents"
              href="about.php"/>
    <link rel="top" title="Gila CMS 24 Nov 2017 documentation" href="index.php"/>
        <link rel="next" title="Structure" href="structure.php"/>
        <link rel="prev" title="Content" href="content.php"/>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92259816-1', 'auto');
  ga('send', 'pageview');

</script>


  
  <script src="_static/js/modernizr.min.js"></script>

</head>

<body class="wy-body-for-nav" role="document">

  <div class="wy-grid-for-nav">

    
    <nav data-toggle="wy-nav-shift" class="wy-nav-side">
      <div class="wy-side-scroll">
        <div class="wy-side-nav-search">
          

          
            <a href="index.php" class="icon icon-home"> Gila CMS
          

          
          </a>

          

          
<div role="search">
  <form id="rtd-search-form" class="wy-form" action="search.php" method="get">
    <input type="text" name="q" placeholder="Search docs" />
    <input type="hidden" name="check_keywords" value="yes" />
    <input type="hidden" name="area" value="default" />
  </form>
</div>

          
        </div>

        <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">
          
            
            
                <p class="caption"><span class="caption-text">User Manual</span></p>
<ul class="current">
<li class="toctree-l1"><a class="reference internal" href="about.php">About</a><ul>
<li class="toctree-l2"><a class="reference internal" href="about.php#why-choose-gila">Why choose Gila?</a></li>
<li class="toctree-l2"><a class="reference internal" href="about.php#spreading-the-word">Spreading the word!</a></li>
<li class="toctree-l2"><a class="reference internal" href="about.php#where-you-can-get-help">Where you can get help</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="install.php">Installation</a><ul>
<li class="toctree-l2"><a class="reference internal" href="install.php#preparation">Preparation</a></li>
<li class="toctree-l2"><a class="reference internal" href="install.php#installer">Installer</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="content.php">Content</a><ul>
<li class="toctree-l2"><a class="reference internal" href="content.php#pages">Pages</a></li>
<li class="toctree-l2"><a class="reference internal" href="content.php#posts">Posts</a></li>
<li class="toctree-l2"><a class="reference internal" href="content.php#categories">Categories</a></li>
<li class="toctree-l2"><a class="reference internal" href="content.php#media">Media</a></li>
</ul>
</li>
<li class="toctree-l1 current"><a class="current reference internal" href="">Administration</a><ul>
<li class="toctree-l2"><a class="reference internal" href="#users">Users</a></li>
<li class="toctree-l2"><a class="reference internal" href="#widgets">Widgets</a></li>
<li class="toctree-l2"><a class="reference internal" href="#packages">Packages</a></li>
<li class="toctree-l2"><a class="reference internal" href="#themes">Themes</a></li>
<li class="toctree-l2"><a class="reference internal" href="#settings">Settings</a></li>
</ul>
</li>
</ul>
<p class="caption"><span class="caption-text">Programmers Guide</span></p>
<ul>
<li class="toctree-l1"><a class="reference internal" href="structure.php">Structure</a><ul>
<li class="toctree-l2"><a class="reference internal" href="structure.php#packages">Packages</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="api.php">Api</a><ul>
<li class="toctree-l2"><a class="reference internal" href="api.php#core-classes">Core Classes</a></li>
</ul>
</li>
</ul>

            
          
        </div>
      </div>
    </nav>

    <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">

      
      <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        <a href="index.php">Gila CMS</a>
      </nav>


      
      <div class="wy-nav-content">
        <div class="rst-content">
          

 



<div role="navigation" aria-label="breadcrumbs navigation">
  <ul class="wy-breadcrumbs">
    <li><a href="index.php">Docs</a> &raquo;</li>
      
    <li>Administration</li>
      <li class="wy-breadcrumbs-aside">
        
          
            <a href="_sources/admin.txt" rel="nofollow"> View page source</a>
          
        
      </li>
  </ul>
  <hr/>
</div>
          <div role="main" class="document" itemscope="itemscope" itemtype="http://schema.org/Article">
           <div itemprop="articleBody">
            
  <div class="section" id="administration">
<span id="administration"></span><h1>Administration<a class="headerlink" href="#administration" title="Permalink to this headline">¶</a></h1>
<p>In the administration menu you the Administration option gives a submenu of the basic administation areas</p>
<ul class="simple">
<li><a class="reference external" href="#users"><strong>Users</strong></a></li>
<li><a class="reference external" href="#widgets"><strong>Widgets</strong></a></li>
<li><a class="reference external" href="#packages"><strong>Packages</strong></a></li>
<li><a class="reference external" href="#themes"><strong>Themes</strong></a></li>
<li><a class="reference external" href="#settings"><strong>Settings</strong></a></li>
</ul>
<div class="section" id="users">
<span id="users"></span><h2>Users<a class="headerlink" href="#users" title="Permalink to this headline">¶</a></h2>
<p>Users are the persons that you can grand access to website and give theme privileges to create or edit content.</p>
<p>....Under development....</p>
</div>
<div class="section" id="widgets">
<span id="widgets"></span><h2>Widgets<a class="headerlink" href="#widgets" title="Permalink to this headline">¶</a></h2>
<p>Widgets are some blocks that you can show them on the layout of the website and improve the user experiense of the visitors. Widgets can be for example <em>menus, comment sections, text blocks, lists of links</em>.</p>
<p>....Under development....</p>
</div>
<div class="section" id="packages">
<span id="packages"></span><h2>Packages<a class="headerlink" href="#packages" title="Permalink to this headline">¶</a></h2>
<p>Packages give new functionalities on your web application. They may add a specific widget, a few new links in the administration menu or add new content and new templates to show the content.
For example <em>Facebook Comments Plugin</em> add a facebook comments section below every page post. <em>Featured Posts Grid</em> show the thumbnails photos from featured posts in the front page of a blog theme.</p>
<p>You can administrate packages from Administration-&gt;Packages</p>
<p><img alt="Themes" src="_images/addons.png" /></p>
<p>The installed packages usually show an <strong>Options</strong> button. By clicking this button you can change some  parameters for the specific package. When you save the settings the changes will take effect by reloading the page.</p>
<p><img alt="Themes" src="_images/addon-options.png" /></p>
</div>
<div class="section" id="themes">
<span id="themes"></span><h2>Themes<a class="headerlink" href="#themes" title="Permalink to this headline">¶</a></h2>
<p>Themes change the look and style of your website. They use different colors and fonts and helps your visitors identify your website and improve their user experience (UX).</p>
<p>You can select the theme from Administration-&gt;Themes</p>
<p><img alt="Themes" src="_images/themes.png" /></p>
<p>The selected theme usually shows an <strong>Options</strong> button. By clicking this button you can change some  options for the theme like the header image (logo) of the website or the main color.</p>
</div>
<div class="section" id="settings">
<span id="settings"></span><h2>Settings<a class="headerlink" href="#settings" title="Permalink to this headline">¶</a></h2>
<p>On Administration-&gt;Settings page and we can make the following configurations</p>
<p><img alt="Themes" src="_images/settings.png" /></p>
<ul class="simple">
<li><strong>Title</strong> is the website title. It will appear up from the menu if we don&#8217;t use a logo from the theme options.</li>
<li><strong>Description</strong> is a small text that describes the website.</li>
<li><strong>Website URL</strong> the url path like &#8216;www.mysite.com&#8217; or &#8216;https://mysite.com&#8217;</li>
<li><strong>Theme</strong> changes the look and style of your website. You can select theme from <em>Administration-&gt;Themes</em></li>
<li><strong>Timezone</strong> The dates and times saved in posts, logs and the rest of the content will be based on the selected timezone.</li>
<li><strong>Default controller</strong> The controller that will be used if the calling path do not provide it as first parameter. For example the <strong>Admin</strong> controller is used when we call mysite.com/admin but when we call <em>mysite.com</em> or <em>mysite.com/my-post</em> the default controller will be used, which is <strong>Blog</strong>, so these paths are egual with <em>mysite.com</em> and <em>mysite.com/my-post</em>. There is not need to change the default controller unless you want to change how the website will be used.</li>
</ul>
</div>
</div>


           </div>
          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="structure.php" class="btn btn-neutral float-right" title="Structure" accesskey="n">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
        <a href="content.php" class="btn btn-neutral" title="Content" accesskey="p"><span class="fa fa-arrow-circle-left"></span> Previous</a>
      
    </div>
  

  <hr/>

  <div role="contentinfo">
    <p>
        &copy; Copyright 2017, Vasileios Zoumpourlis.

    </p>
  </div>
  Built with <a href="http://sphinx-doc.org/">Sphinx</a> using a <a href="https://github.com/snide/sphinx_rtd_theme">theme</a> provided by <a href="https://readthedocs.org">Read the Docs</a>. 

</footer>

        </div>
      </div>

    </section>

  </div>
  


  

    <script type="text/javascript">
        var DOCUMENTATION_OPTIONS = {
            URL_ROOT:'./',
            VERSION:'24 Nov 2017',
            COLLAPSE_INDEX:false,
            FILE_SUFFIX:'.php',
            HAS_SOURCE:  true
        };
    </script>
      <script type="text/javascript" src="_static/jquery.js"></script>
      <script type="text/javascript" src="_static/underscore.js"></script>
      <script type="text/javascript" src="_static/doctools.js"></script>

  

  
  
    <script type="text/javascript" src="_static/js/theme.js"></script>
  

  
  
  <script type="text/javascript">
      jQuery(function () {
          SphinxRtdTheme.StickyNav.enable();
      });
  </script>
   

</body>
</html>