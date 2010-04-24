<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://opengraphprotocol.org/schema/"
      xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta property="fb:app_id" content="114720825217072"/>
  <meta property="fb:admins" content="122605446"/>
  <meta property="og:title" content="Three20.info"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="http://Three20.info/"/>
  <meta property="og:image" content="http://github.com/facebook/three20/raw/06cd0abe33ac39d1f509e278e286c6bf1e45e821/samples/Resources/Icon.png"/>
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
<?php include 'toc.php'; ?>

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
