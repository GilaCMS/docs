

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Content &mdash; Gila CMS 24 Nov 2017 documentation</title>
  

  
  

  

  
  
    

  

  
  
    <link rel="stylesheet" href="_static/css/theme.css" type="text/css" />
  

  

  
        <link rel="author" title="About these documents"
              href="about.php"/>
    <link rel="top" title="Gila CMS 24 Nov 2017 documentation" href="index.php"/>
        <link rel="next" title="Administration" href="admin.php"/>
        <link rel="prev" title="Installation" href="install.php"/>

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
<li class="toctree-l1 current"><a class="current reference internal" href="">Content</a><ul>
<li class="toctree-l2"><a class="reference internal" href="#pages">Pages</a></li>
<li class="toctree-l2"><a class="reference internal" href="#posts">Posts</a></li>
<li class="toctree-l2"><a class="reference internal" href="#categories">Categories</a></li>
<li class="toctree-l2"><a class="reference internal" href="#media">Media</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="admin.php">Administration</a><ul>
<li class="toctree-l2"><a class="reference internal" href="admin.php#users">Users</a></li>
<li class="toctree-l2"><a class="reference internal" href="admin.php#widgets">Widgets</a></li>
<li class="toctree-l2"><a class="reference internal" href="admin.php#packages">Packages</a></li>
<li class="toctree-l2"><a class="reference internal" href="admin.php#themes">Themes</a></li>
<li class="toctree-l2"><a class="reference internal" href="admin.php#settings">Settings</a></li>
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
      
    <li>Content</li>
      <li class="wy-breadcrumbs-aside">
        
          
            <a href="_sources/content.txt" rel="nofollow"> View page source</a>
          
        
      </li>
  </ul>
  <hr/>
</div>
          <div role="main" class="document" itemscope="itemscope" itemtype="http://schema.org/Article">
           <div itemprop="articleBody">
            
  <div class="section" id="content">
<span id="content"></span><h1>Content<a class="headerlink" href="#content" title="Permalink to this headline">¶</a></h1>
<p>In the administration menu the Content option gives a submenu of the basic content types of Gila:</p>
<ul class="simple">
<li><a class="reference external" href="#pages"><strong>Pages</strong></a></li>
<li><a class="reference external" href="#posts"><strong>Posts</strong></a></li>
<li><a class="reference external" href="#categories"><strong>Categories</strong></a></li>
<li><a class="reference external" href="#media"><strong>Media</strong></a></li>
</ul>
<div class="section" id="pages">
<span id="pages"></span><h2>Pages<a class="headerlink" href="#pages" title="Permalink to this headline">¶</a></h2>
<p>Pages are the basic content type. A page can be just a text or have media. The information of a page is independent of time so you want them to be found by the visitor in the same place, like on the menu of the website.</p>
<p><img alt="alt text" src="_images/pages.png" />
Every page have four values:</p>
<ul class="simple">
<li><strong>ID</strong>: a unique identifier</li>
<li><strong>Title</strong>: the title of the page</li>
<li><strong>Slug</strong>: is the path of the page. For example the path of a page with title &#8216;My Page&#8217; will be <em>mysite.com/my-page</em></li>
<li><strong>Public</strong>: an on/off flag. If Public value is off for &#8216;My Page&#8217; then <em>mysite.com/my-page</em> wont be accessible from the browser.</li>
</ul>
<p>To <strong>create a new page</strong> click on button <strong>New</strong> that you see on the up-right corner of the table.
<img alt="alt text" src="_images/new-page.png" /></p>
</div>
<div class="section" id="posts">
<span id="posts"></span><h2>Posts<a class="headerlink" href="#posts" title="Permalink to this headline">¶</a></h2>
<p>The posts can be news or articles about your business or the interests of the website. They are organized in categories and are listed in chronological order.
<img alt="alt text" src="_images/posts.png" /></p>
<p>To <strong>create a new post</strong> click on button <strong>New</strong> that you see on the up-right corner of the table.
<img alt="alt text" src="assets/new-post.png" /></p>
</div>
<div class="section" id="categories">
<span id="categories"></span><h2>Categories<a class="headerlink" href="#categories" title="Permalink to this headline">¶</a></h2>
<p>Categories are used to categorize posts or maybe other popular content that you could use later.
You only add or edit the names of the categories.</p>
</div>
<div class="section" id="media">
<span id="media"></span><h2>Media<a class="headerlink" href="#media" title="Permalink to this headline">¶</a></h2>
<p>Media are the images that you want to use for your posts. They are saved as files and not in the database like the other content types. The root directory of media is <em>/assets</em>. The files and subfolders of <em>/assets</em> are visible in the public by the path <em>mysite.com/assets</em> so you should not upload files or images that you don&#8217;t want to be found from search engines.</p>
<p><img alt="alt text" src="_images/media.png" /></p>
</div>
</div>


           </div>
          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="admin.php" class="btn btn-neutral float-right" title="Administration" accesskey="n">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
        <a href="install.php" class="btn btn-neutral" title="Installation" accesskey="p"><span class="fa fa-arrow-circle-left"></span> Previous</a>
      
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