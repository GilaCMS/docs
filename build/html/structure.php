

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Structure &mdash; Gila CMS 24 Nov 2017 documentation</title>
  

  
  

  

  
  
    

  

  
  
    <link rel="stylesheet" href="_static/css/theme.css" type="text/css" />
  

  

  
        <link rel="author" title="About these documents"
              href="about.php"/>
    <link rel="top" title="Gila CMS 24 Nov 2017 documentation" href="index.php"/>
        <link rel="next" title="Api" href="api.php"/>
        <link rel="prev" title="Administration" href="admin.php"/>

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
<ul>
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
<ul class="current">
<li class="toctree-l1 current"><a class="current reference internal" href="">Structure</a><ul>
<li class="toctree-l2"><a class="reference internal" href="#packages">Packages</a></li>
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
      
    <li>Structure</li>
      <li class="wy-breadcrumbs-aside">
        
          
            <a href="_sources/structure.txt" rel="nofollow"> View page source</a>
          
        
      </li>
  </ul>
  <hr/>
</div>
          <div role="main" class="document" itemscope="itemscope" itemtype="http://schema.org/Article">
           <div itemprop="articleBody">
            
  <div class="section" id="structure">
<span id="structure"></span><h1>Structure<a class="headerlink" href="#structure" title="Permalink to this headline">¶</a></h1>
<p>In the main folder we can see these folders and files.</p>
<div class="highlight-python"><div class="highlight"><pre>assets/
install/
lib/
log/
tmp/
src/
themes/
index.php
config.php
</pre></div>
</div>
<p><strong>assets/</strong> A public folder where we upload our media files.</p>
<p><strong>install/</strong> A public folder used only for the installation.</p>
<p><strong>lib/</strong> A public folder. Third-party libraries are inside this folder.</p>
<p><strong>log/</strong> A private folder that save logs and the user sessions.</p>
<p><strong>tmp/</strong> A public folder with temporally files created.</p>
<p><strong>src/</strong> The folder of installed packages. Here is all the code of the system.</p>
<p><strong>themes/</strong> The folder of installed themes.</p>
<p><strong>index.html</strong> The main index file. For any call, execution starts from here.</p>
<p><strong>config.php</strong> The configuration file. It is generated after installation.</p>
<div class="section" id="packages">
<span id="packages"></span><h2>Packages<a class="headerlink" href="#packages" title="Permalink to this headline">¶</a></h2>
<p>The source code of Gila CMS is split into packages, even the core files are part of the main package called <em>core</em>. The package folders are placed inside <em>src/</em> folder and desirably have a similar structure:</p>
<div class="highlight-python"><div class="highlight"><pre>assets/
controllers/
models/
views/
package.json
load.php
</pre></div>
</div>
<p>The folders are optional but very useful to organize better the code. The file <strong>package.json</strong> is a must have as it has the basic information of the package -without it the package is invisible- and the <strong>load.php</strong> is the file that will register new values and events of the package.</p>
<p>A simple <strong>package.json</strong> file:</p>
<div class="highlight-python"><div class="highlight"><pre><span class="p">{</span>
    <span class="s2">&quot;name&quot;</span><span class="p">:</span><span class="s2">&quot;Package Name&quot;</span><span class="p">,</span>
    <span class="s2">&quot;version&quot;</span><span class="p">:</span><span class="s2">&quot;1.0.0&quot;</span><span class="p">,</span>
    <span class="s2">&quot;description&quot;</span><span class="p">:</span><span class="s2">&quot;A short descriptive text of your package for what it does.&quot;</span><span class="p">,</span>
    <span class="s2">&quot;url&quot;</span><span class="p">:</span><span class="s2">&quot;package_url.com&quot;</span><span class="p">,</span>
    <span class="s2">&quot;author&quot;</span><span class="p">:</span><span class="s2">&quot;Your Name&quot;</span>
<span class="p">}</span>
</pre></div>
</div>
<p>You can also add another index in the object called <em>options</em>. It will be an array of objects, the objects are the options to be stored. The index is the option name and it can have optional values with the following indexes:
<strong>title</strong>  the option name to be displayed, if not specified, the index is used
<strong>type</strong>  select | postcategory
<strong>options</strong> array of {value:display_text}, it is required if is set type:select</p>
<div class="highlight-python"><div class="highlight"><pre>{
    ...
    &quot;options&quot;:{
        &quot;option1&quot;:{},
        &quot;category&quot;:{
            &quot;type&quot;:&quot;postcategory&quot;
        },
        &quot;lang&quot;:{
            &quot;title&quot;:&quot;Language&quot;,
            &quot;type&quot;:&quot;select&quot;,
            &quot;options&quot;:{
                &quot;en_US&quot;:&quot;English&quot;,&quot;es_ES&quot;:&quot;Spanish&quot;,&quot;gr_GR&quot;:&quot;Greek&quot;
            }
        }
    }
}
</pre></div>
</div>
<p>You can get the option values like that:</p>
<div class="highlight-python"><div class="highlight"><pre>// options are saved using as prefix the package&#39;s folder name
// for example if the package has the folder my_package/

$option1 = gila::option(&quot;my_package.option1&quot;);
$lang = gila::option(&quot;my_package.lang&quot;,&quot;en_US&quot;); // use default value
</pre></div>
</div>
<p>A simple <strong>load.php</strong> file could be:</p>
<div class="highlight-python"><div class="highlight"><pre>&lt;?php
// display text below any post
event::listen(&#39;post.after&#39;,function(){
    echo &#39;The post has ended&#39;;
}
</pre></div>
</div>
<p><strong>IMPORTANT:</strong> The first line of the file should include only the opening tag, and not use later the closing tag.</p>
<p>For any question/feature proposal/help needed
<a class="reference external" href="https://github.com/GilaCMS/gila/issues/new">Make a new issue</a></p>
</div>
</div>


           </div>
          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="api.php" class="btn btn-neutral float-right" title="Api" accesskey="n">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
        <a href="admin.php" class="btn btn-neutral" title="Administration" accesskey="p"><span class="fa fa-arrow-circle-left"></span> Previous</a>
      
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