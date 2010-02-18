<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="keywords" content="three20 iPhone api open source library uikit tt" />
  <meta name="description" content="API documentation, articles, and tutorials related to the three20 iPhone library." />
  <title><?php echo html::specialchars($title) ?></title>
<?
  echo three20html::stylesheet(array('css/reset', 'css/common'), null, FALSE);
  echo three20html::stylesheet($css_files, null, FALSE);
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
      <li><a href="/issues">Issues</a></li>
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
  </ul>

  <div class="header">Core</div>
  <ul>
    <li><a href="/core/debugging">Xcode debug++</a></li>
  </ul>

  <div class="header">Tutorials</div>
  <ul>
    <li><a href="/tutorials/githubintro">Build a GitHub App</a></li>
  </ul>

  <div class="header">UI</div>
  <ul>
    <li><a href="/ui/navigation">URL-Based Navigation</a></li>
  </ul>

  <div class="header">Three20 Timeline</div>
  <ul>
    <li><a href="/timeline/roadmap">Roadmap</a></li>
  </ul>

  <div class="header">Suggested Reading</div>
  <a class="nohighlight" href="http://www.amazon.com/gp/product/1430224592?ie=UTF8&amp;tag=three20-20&amp;linkCode=as2&amp;camp=1789&amp;creative=9325&amp;creativeASIN=1430224592"><img border="0" src="/gfx/amazon/41kABLZh1ZL._SL160_.jpg"></a><img src="http://www.assoc-amazon.com/e/ir?t=three20-20&amp;l=as2&amp;o=1&amp;a=1430224592" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
</div>

<div id="content">
<?php echo $content ?>

<? if ((!isset($hideModificationDate) || !$hideModificationDate)
       && isset($templateModifiedTime) && $templateModifiedTime) { ?>
<div class="lastmodified">Last modified: <?= date('l \t\h\e jS \of F Y h:i:s A', $templateModifiedTime); ?></div>
<? } ?>

<? if (!isset($hideDisqusThread) || !$hideDisqusThread) { ?>
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
    <a href="http://github.com/jverkoey/Three20.info">Source hosted on github</a> -
    Made with the <a href="http://github.com/jverkoey/Keystone">Keystone</a> framework.
    </div>
</div>

<noscript><p><img alt="Clicky" width="1" height="1" src="http://static.getclicky.com/155532ns.gif" /></p></noscript>

<?
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

  $this->addJsFootFile('http://static.getclicky.com/js');
  $this->addJsFootScript('clicky.init(155532);');

  $this->addJsFootScript('
  try {
  var pageTracker = _gat._getTracker("'.ANALYTICS_KEY.'");
  pageTracker._setDomainName(".three20.info");
  pageTracker._trackPageview();
  } catch(err) {}');
}
?>

<? echo three20html::script($js_foot_files, FALSE); ?>

</body>
</html>
