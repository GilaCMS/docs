

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Installation &mdash; Gila CMS 24 Nov 2017 documentation</title>
  

  
  

  

  
  
    

  

  
  
    <link rel="stylesheet" href="_static/css/theme.css" type="text/css" />
  

  

  
        <link rel="author" title="About these documents"
              href="about.php"/>
    <link rel="top" title="Gila CMS 24 Nov 2017 documentation" href="index.php"/>
        <link rel="next" title="Content" href="content.php"/>
        <link rel="prev" title="About" href="about.php"/>

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
<li class="toctree-l1 current"><a class="current reference internal" href="">Installation</a><ul>
<li class="toctree-l2"><a class="reference internal" href="#preparation">Preparation</a></li>
<li class="toctree-l2"><a class="reference internal" href="#installer">Installer</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="content.php">Content</a><ul>
<li class="toctree-l2"><a class="reference internal" href="content.php#pages">Pages</a></li>
<li class="toctree-l2"><a class="reference internal" href="content.php#posts">Posts</a></li>
<li class="toctree-l2"><a class="reference internal" href="content.php#categories">Categories</a></li>
<li class="toctree-l2"><a class="reference internal" href="content.php#media">Media</a></li>
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
      
    <li>Installation</li>
      <li class="wy-breadcrumbs-aside">
        
          
            <a href="_sources/install.txt" rel="nofollow"> View page source</a>
          
        
      </li>
  </ul>
  <hr/>
</div>
          <div role="main" class="document" itemscope="itemscope" itemtype="http://schema.org/Article">
           <div itemprop="articleBody">
            
  <div class="section" id="installation">
<span id="installation"></span><h1>Installation<a class="headerlink" href="#installation" title="Permalink to this headline">¶</a></h1>
<div class="section" id="preparation">
<span id="preparation"></span><h2>Preparation<a class="headerlink" href="#preparation" title="Permalink to this headline">¶</a></h2>
<p>Before beginning with installation make sure that your web host or local server meets these requirements:</p>
<ul class="simple">
<li>Apache 2 server</li>
<li>MySQL / MariaDB server</li>
<li>PHP 5.4+ with the following extensions <em>mysqli, zip, mysqlnd, json</em> and <em>mod_rewrite</em> enabled</li>
</ul>
<p>If you want to install gila cms in your local machine and not sure how to prepare your server don&#8217;t hesitate to ask for help on <a class="reference external" href="https://gilacms.slack.com">Slack</a></p>
<p>First unzip gila in a public html folder e.g <em>/var/www/html/gila</em> and make sure that the folder is writable from the application.</p>
<p>In order to proceed with the installation, you will need your database settings. If you do not know your database settings, please contact your host and ask for them. You will not be able to continue without them. More precisely you need the database hostname, the database name, the database username and password.</p>
</div>
<div class="section" id="installer">
<span id="installer"></span><h2>Installer<a class="headerlink" href="#installer" title="Permalink to this headline">¶</a></h2>
<p>We access in installation page with the browser e.g <em>http://localhost/gila/install</em></p>
<p><img alt="Install" src="_images/install.jpg" /></p>
<p>In the installation page we must fill all the fields</p>
<p><strong>Hostname:</strong> the hostname of the database, usually it is <em>localhost</em></p>
<p><strong>Database:</strong> name of the database</p>
<p><strong>DB Username, DB Password:</strong> the username and the password in order to connect to the mysql</p>
<p><strong>Admin Username, Admin Email, Admin Password:</strong> a user will be created for the website as administrator with these data</p>
<p><strong>Base Url:</strong> the web address of the website must finish with &#8216;/&#8217; e.g. <em>mywebsite.com/</em></p>
<p>After filling the data and submit them, we wait a few seconds untill the installation is finished.</p>
<p><img alt="alt text" src="_images/installed.jpg" /></p>
<p>When installation is finished we can enter on the admin panel using the admin email and password that we wrote before.</p>
<p><img alt="alt text" src="_images/login.jpg" /></p>
<p>We can always access in the login page from these links
<em>mysite.com/</em> <strong>login</strong> it redirects to the front page of the website
<em>mysite.com/</em> <strong>/admin</strong> it redirects to the administration</p>
<p>We enter in the administration dashboard.</p>
<p><img alt="alt text" src="_images/dash.jpg" /></p>
<p>From the administation menu we choose Administration-&gt;Settings in order to fill more information about the website.</p>
<p><img alt="alt text" src="_images/settings.jpg" /></p>
</div>
</div>


           </div>
          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="content.php" class="btn btn-neutral float-right" title="Content" accesskey="n">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
        <a href="about.php" class="btn btn-neutral" title="About" accesskey="p"><span class="fa fa-arrow-circle-left"></span> Previous</a>
      
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