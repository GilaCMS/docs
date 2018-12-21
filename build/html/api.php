

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Api &mdash; Gila CMS 24 Nov 2017 documentation</title>
  

  
  

  

  
  
    

  

  
  
    <link rel="stylesheet" href="_static/css/theme.css" type="text/css" />
  

  

  
        <link rel="author" title="About these documents"
              href="about.php"/>
    <link rel="top" title="Gila CMS 24 Nov 2017 documentation" href="index.php"/>
        <link rel="prev" title="Structure" href="structure.php"/>

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
<li class="toctree-l1"><a class="reference internal" href="structure.php">Structure</a><ul>
<li class="toctree-l2"><a class="reference internal" href="structure.php#packages">Packages</a></li>
</ul>
</li>
<li class="toctree-l1 current"><a class="current reference internal" href="">Api</a><ul>
<li class="toctree-l2"><a class="reference internal" href="#core-classes">Core Classes</a></li>
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
      
    <li>Api</li>
      <li class="wy-breadcrumbs-aside">
        
          
            <a href="_sources/api.txt" rel="nofollow"> View page source</a>
          
        
      </li>
  </ul>
  <hr/>
</div>
          <div role="main" class="document" itemscope="itemscope" itemtype="http://schema.org/Article">
           <div itemprop="articleBody">
            
  <div class="section" id="api">
<h1>Api<a class="headerlink" href="#api" title="Permalink to this headline">¶</a></h1>
<div class="section" id="core-classes">
<h2>Core Classes<a class="headerlink" href="#core-classes" title="Permalink to this headline">¶</a></h2>
<dl class="class">
<dt id="gila">
<em class="property">class </em><code class="descname">gila</code><a class="headerlink" href="#gila" title="Permalink to this definition">¶</a></dt>
<dd><p>Common methods for Gila CMS</p>
<dl class="method">
<dt id="gila.controllers">
<code class="descname">controllers</code><span class="sig-paren">(</span><em>$list</em><span class="sig-paren">)</span><a class="headerlink" href="#gila.controllers" title="Permalink to this definition">¶</a></dt>
<dd><p>(static) Register new controllers.</p>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><strong>Array $list</strong> (<em>Assoc</em>) &#8211; Example: <cite>{&#8216;ctrl&#8217;=&gt;&#8217;my_package/controllers/ctrl&#8217;}</cite></td>
</tr>
</tbody>
</table>
</dd></dl>

<dl class="method">
<dt id="gila.widgets">
<code class="descname">widgets</code><span class="sig-paren">(</span><em>$list</em><span class="sig-paren">)</span><a class="headerlink" href="#gila.widgets" title="Permalink to this definition">¶</a></dt>
<dd><p>(static) Register new widgets.</p>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><strong>$list</strong> (<em>Array</em>) &#8211; Example: <cite>{&#8216;wdg&#8217;=&gt;&#8217;my_package/widgets/wdg&#8217;}</cite></td>
</tr>
</tbody>
</table>
</dd></dl>

<dl class="method">
<dt id="gila.amenu">
<code class="descname">amenu</code><span class="sig-paren">(</span><em>$list</em><span class="sig-paren">)</span><a class="headerlink" href="#gila.amenu" title="Permalink to this definition">¶</a></dt>
<dd><p>(static) Add new elements on administration menu.</p>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><strong>$list</strong> (<em>Array</em>) &#8211; Example: <code class="docutils literal"><span class="pre">['Item','controller/action','icon'=&gt;'item-icon']</span></code></td>
</tr>
</tbody>
</table>
</dd></dl>

<dl class="method">
<dt id="gila.amenu_child">
<code class="descname">amenu_child</code><span class="sig-paren">(</span><em>$h</em>, <em>$item</em><span class="sig-paren">)</span><a class="headerlink" href="#gila.amenu_child" title="Permalink to this definition">¶</a></dt>
<dd><p>(static) Add a child element on administration menu item.</p>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first last simple">
<li><strong>$h</strong> (<em>string</em>) &#8211; Index of the parent item.</li>
<li><strong>$item</strong> (<em>Array</em>) &#8211; Example: <code class="docutils literal"><span class="pre">['SubItem','controller/action_1','icon'=&gt;'item-icon']</span></code></li>
</ul>
</td>
</tr>
</tbody>
</table>
</dd></dl>

<dl class="method">
<dt id="gila.config">
<code class="descname">config</code><span class="sig-paren">(</span><em>$key</em>, <em>$value = null</em><span class="sig-paren">)</span><a class="headerlink" href="#gila.config" title="Permalink to this definition">¶</a></dt>
<dd><p>(static) Sets or gets the value of configuration element.</p>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first simple">
<li><strong>$key</strong> (<em>string</em>) &#8211; Index of the element.</li>
<li><strong>$value</strong> (<em>*</em>) &#8211; (optional) The value.</li>
</ul>
</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body"><p class="first last">The value if parameter $value is not sent.</p>
</td>
</tr>
</tbody>
</table>
</dd></dl>

<dl class="method">
<dt id="gila.updateConfigFile">
<code class="descname">updateConfigFile</code><span class="sig-paren">(</span><span class="sig-paren">)</span><a class="headerlink" href="#gila.updateConfigFile" title="Permalink to this definition">¶</a></dt>
<dd><p>(static) Updats the configuration file.</p>
</dd></dl>

<dl class="method">
<dt id="gila.equal">
<code class="descname">equal</code><span class="sig-paren">(</span><em>$v1</em>, <em>$v2</em><span class="sig-paren">)</span><a class="headerlink" href="#gila.equal" title="Permalink to this definition">¶</a></dt>
<dd><p>(static) Checks if two values are set and have the same value.</p>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first simple">
<li><strong>$v1</strong> (<em>*</em>) &#8211; First value.</li>
<li><strong>$v2</strong> (<em>*</em>) &#8211; Second value.</li>
</ul>
</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body"><p class="first last">True or false.</p>
</td>
</tr>
</tbody>
</table>
</dd></dl>

<dl class="method">
<dt id="gila.hash">
<code class="descname">hash</code><span class="sig-paren">(</span><em>$pass</em><span class="sig-paren">)</span><a class="headerlink" href="#gila.hash" title="Permalink to this definition">¶</a></dt>
<dd></dd></dl>

<p>(static) Generates a hash passwrd from a string.</p>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><strong>$pass</strong> (<em>string</em>) &#8211; The string to be hashed.</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body">Hashed password.</td>
</tr>
</tbody>
</table>
<dl class="method">
<dt id="gila.option">
<code class="descname">option</code><span class="sig-paren">(</span><em>$option</em>, <em>$default=''</em><span class="sig-paren">)</span><a class="headerlink" href="#gila.option" title="Permalink to this definition">¶</a></dt>
<dd><p>(static) Gets an option value.</p>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first simple">
<li><strong>$option</strong> (<em>string</em>) &#8211; Option name.</li>
<li><strong>$default</strong> (<em>string</em>) &#8211; (optional) The value to return if there option has not saved value.</li>
</ul>
</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body"><p class="first last">The option value.</p>
</td>
</tr>
</tbody>
</table>
</dd></dl>

<dl class="method">
<dt id="gila.hasPrivilege">
<code class="descname">hasPrivilege</code><span class="sig-paren">(</span><em>$pri</em><span class="sig-paren">)</span><a class="headerlink" href="#gila.hasPrivilege" title="Permalink to this definition">¶</a></dt>
<dd><p>(static) Checks if logged in user has at least one of the required privileges.</p>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><strong>$pri</strong> (<em>string/Array</em>) &#8211; The privilege(s) to check.</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body">True or false.</td>
</tr>
</tbody>
</table>
</dd></dl>

<dl class="method">
<dt id="gila.make_url">
<code class="descname">make_url</code><span class="sig-paren">(</span><em>$c</em>, <em>$action=''</em>, <em>$args=[]</em><span class="sig-paren">)</span><a class="headerlink" href="#gila.make_url" title="Permalink to this definition">¶</a></dt>
<dd><p>(static) Generates a url.</p>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first simple">
<li><strong>$c</strong> (<em>string</em>) &#8211; The controller.</li>
<li><strong>$action</strong> (<em>string</em>) &#8211; The action.</li>
<li><strong>$args</strong> (<em>Array</em>) &#8211; The parameters in array.</li>
</ul>
</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body"><p class="first last">The full url to print.</p>
</td>
</tr>
</tbody>
</table>
<p>Examples:</p>
<p><code class="docutils literal"><span class="pre">$url1</span> <span class="pre">=</span> <span class="pre">gila::make_url('blog','post',[1]);</span></code> returns mysite.com/blog/post/1
<code class="docutils literal"><span class="pre">$url1</span> <span class="pre">=</span> <span class="pre">gila::make_url('blog','',['page1']);</span></code> returns mysite.com/blog/page1</p>
</dd></dl>

</dd></dl>

<dl class="class">
<dt id="event">
<em class="property">class </em><code class="descname">event</code><a class="headerlink" href="#event" title="Permalink to this definition">¶</a></dt>
<dd><p>Registers and fires events (hooks)</p>
<dl class="method">
<dt id="event.listen">
<code class="descname">listen</code><span class="sig-paren">(</span><em>event</em>, <em>$handler</em><span class="sig-paren">)</span><a class="headerlink" href="#event.listen" title="Permalink to this definition">¶</a></dt>
<dd><p>(static) Sets a new function to run when an event is triggered later.</p>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first last simple">
<li><strong>$event</strong> (<em>string</em>) &#8211; The event name.</li>
<li><strong>$handler</strong> (<em>function</em>) &#8211; The function to call.</li>
</ul>
</td>
</tr>
</tbody>
</table>
</dd></dl>

<dl class="method">
<dt id="event.fire">
<code class="descname">fire</code><span class="sig-paren">(</span><em>string $event</em><span class="optional">[</span>, <em>Array $params</em><span class="optional">]</span><span class="sig-paren">)</span><a class="headerlink" href="#event.fire" title="Permalink to this definition">¶</a></dt>
<dd><p>(static) Fires an event and calls all handling functions.</p>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first last simple">
<li><strong>$event</strong> (<em>string</em>) &#8211; The event name.</li>
<li><strong>$params</strong> (<em>function</em>) &#8211; (optional) Parameters to send to handlers.</li>
</ul>
</td>
</tr>
</tbody>
</table>
</dd></dl>

</dd></dl>

</div>
</div>


           </div>
          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
      
        <a href="structure.php" class="btn btn-neutral" title="Structure" accesskey="p"><span class="fa fa-arrow-circle-left"></span> Previous</a>
      
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