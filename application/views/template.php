<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="keywords" content="three20 iPhone api open source library uikit tt" />
  <meta name="description" content="API documentation, articles, and tutorials related to the three20 iPhone library." />
  <title><?php echo html::specialchars($title) ?></title>
<?
  echo three20html::stylesheet(array(
    'css/reset',
    'css/global.css',
    'css/shCore.css',
    'css/shTheme.css',
    'css/jquery.autocomplete.css'
  ), null, FALSE);
  echo three20html::stylesheet($css_files, null, FALSE);
  echo three20html::script(array(
    'js/shCore.js',
    'js/shBrushObjC.js',
    'js/shBrushBash.js'
  ), FALSE);
  echo three20html::inlinescript('SyntaxHighlighter.config.clipboardSwf = \'/swf/clipboard.swf\';
  SyntaxHighlighter.defaults.light = true;
  SyntaxHighlighter.defaults[\'tab-size\'] = 2;
  SyntaxHighlighter.defaults[\'auto-links\'] = false;
  SyntaxHighlighter.defaults.toolbar = false;
  SyntaxHighlighter.all();');
  echo three20html::script($js_head_files, FALSE);
  echo three20html::inlinescript($js_head_scripts);
?>
</head>
<body>
<div id="page-wrapper">
<div id="page">
<div id="pageheader">
  <div class="fixedwidth">
    <div class="title"><a href="/">three20<span class="subtitle">.info</span></a></div>
    <ul>
      <li><a href="http://api.Three20.info/">API</a></li>
      <li><a href="/news">News</a></li>
      <li><a href="/contribute">Contribute</a></li>
      <li><a href="/gallery">Gallery</a></li>
      <li><input type="text" id="globallookup" placeholder="Instant Class Lookup" /></li>
    </ul>
  </div>
</div>
<div id="pageheadershadow"></div>

<div class="fixedwidth">
<div id="toc">
  <div class="header">Getting Started</div>
  <ul>
    <li><a href="/overview">Three20 Overview</a></li>
    <li><a href="/setup/existing">Add it to your project</a></li>
    <li><a href="/setup/templates">Create projects with it</a></li>
    <li><a href="/faq">FAQ</a></li>
  </ul>

  <div class="header">Tutorials</div>
  <ul>
    <li><a href="/tutorials/github">Build a GitHub App</a></li>
  </ul>

  <div class="header">Core</div>
  <ul>
    <li><a href="/core/debugging">Xcode debug++</a></li>
  </ul>

  <div class="header">UI</div>
  <ul>
    <li><a href="/ui/navigation">URL-Based Navigation</a></li>
  </ul>

  <div class="header">Style</div>
  <ul>
    <li><a href="/style/overview">Overview</a></li>
  </ul>

  <div class="header">Three20 Timeline</div>
  <ul>
    <li><a href="/timeline/roadmap">Roadmap</a></li>
  </ul>

  <div class="advertisement">
  <!-- Beginning of Project Wonderful ad code: -->
  <!-- Ad box ID: 46488 -->
  <script type="text/javascript">
  <!--
  var pw_d=document;
  pw_d.projectwonderful_adbox_id = "46488";
  pw_d.projectwonderful_adbox_type = "4";
  pw_d.projectwonderful_foreground_color = "";
  pw_d.projectwonderful_background_color = "";
  //-->
  </script>
  <script type="text/javascript" src="http://www.projectwonderful.com/ad_display.js"></script>
  <noscript><map name="admap46488" id="admap46488"><area href="http://www.projectwonderful.com/out_nojs.php?r=0&amp;c=0&amp;id=46488&amp;type=4" shape="rect" coords="0,0,125,125" title="" alt="" target="_blank" /></map>
  <table cellpadding="0" border="0" cellspacing="0" width="125" bgcolor="#ffffff"><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=46488&amp;type=4" width="125" height="125" usemap="#admap46488" border="0" alt="" /></td></tr><tr><td bgcolor="#ffffff" colspan="1"><center><a style="font-size:10px;color:#0000ff;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=46488&amp;type=4" target="_blank">Ads by Project Wonderful!  Your ad here, right now: $0</a></center></td></tr></table>
  </noscript>
  <!-- End of Project Wonderful ad code. -->
  </div>

</div>

<div id="content">
<?php echo $content ?>

<? if (!isset($hideModificationDate) && isset($templateModifiedTime)) { ?>
<div class="lastmodified">Last modified: <?= date('l \t\h\e jS \of F Y h:i:s A', $templateModifiedTime); ?></div>
<? } ?>

<? if (!isset($hideDisqusThread)) { ?>
<div id="disqus_thread"></div>
<noscript><a href="http://disqus.com/forums/Three20/?url=ref">View the discussion thread.</a></noscript>
<? } ?>
</div>

<div class="clearfix"></div>

</div> <!-- fixedwidth -->

<div class="clearfix"></div>
<div id="page-footer"></div>
</div> <!-- page -->

</div> <!-- pagewrapper -->

<div id="footer">
  <div class="copyright">Copyright 2009-2010 All content licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License</a> unless otherwise noted.</div>
  <div class="attribution">
    <a href="http://github.com/jverkoey/Three20.info">Three20.info source hosted on github</a> -
    Made with the <a href="http://kohanaphp.com/">Kohana</a> framework.
    </div>
</div>

<noscript><p><img alt="Clicky" width="1" height="1" src="http://static.getclicky.com/155532ns.gif" /></p></noscript>

<?
echo three20html::script(array(
  'js/jquery.js',
  'js/jquery.placeholder.js',
  'js/jquery.autocomplete.js',
  'js/globallookup.js'
), FALSE);
echo three20html::script($js_foot_files, FALSE);

if (!IN_PRODUCTION) {
  echo three20html::inlinescript('var disqus_developer = 1;');
}

if (IN_PRODUCTION) {
  if (!isset($hideDisqusThread) || !$hideDisqusThread) {
    echo three20html::script('http://disqus.com/forums/Three20/embed.js', null, FALSE);
  }
  echo three20html::inlinescript('
    var is_ssl = ("https:" == document.location.protocol);
    var asset_host = is_ssl ? "https://s3.amazonaws.com/getsatisfaction.com/" : "http://s3.amazonaws.com/getsatisfaction.com/";
    document.write(unescape("%3Cscript src=\'" + asset_host + "javascripts/feedback-v2.js\' type=\'text/javascript\'%3E%3C/script%3E"));
  ');

  echo three20html::inlinescript('
    var feedback_widget_options = {};

    feedback_widget_options.display = "overlay";  
    feedback_widget_options.company = "Three20";
    feedback_widget_options.placement = "left";
    feedback_widget_options.color = "#FC9";
    feedback_widget_options.style = "idea";

    var feedback_widget = new GSFN.feedback_widget(feedback_widget_options);
  ');
}

if (IN_PRODUCTION) {
  echo three20html::inlinescript('
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
  ');

  echo three20html::script('http://static.getclicky.com/js');
  echo three20html::inlinescript('clicky.init(155532);');

  echo three20html::inlinescript('
  try {
  var pageTracker = _gat._getTracker("'.Kohana::config('core.google_analytics_key').'");
  pageTracker._setDomainName(".three20.info");
  pageTracker._trackPageview();
  } catch(err) {}');
}
?>

</body>
</html>
