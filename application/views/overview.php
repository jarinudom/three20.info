<?= $title ?>
=========================

Three20 is conceptually split into four parts. At the center of everything is the [Core](#Core).
Surrounding it are [Network](#Network), [UI](#UI), and [Style](#Style).

<div class="image" markdown=1>![Nuclear Diagram](/gfx/overview/nuclear.png 500x467)</div>

Core {#Core}
----

Think of core as your swiss-army knife of Objective-C development. You should take some time to
familiarize yourself with its features.

With the Three20 Core you can

* generate md5 hashes from NSData objects,
* extend the logging and debug capabilities of Xcode,
* compare two version strings (is 3.0 older than 3.1?),
* create non-retaining NSArrays and NSDictionaries for delegate use,
* strip HTML tags from strings,
* safely add non-empty, non-nil strings to NSDictionaries,
* and format dates in relative time (5 hours ago).

You'll find all of these methods in the Three20 Xcode project in the  
`Global => Core` and `Global => Additions => Core` groups.

Network {#Network}
-------

If you're building an app that uses a web-based API, Three20's Network component is going to make
your job easier. Three20 supports disk and memory network caching. There is also a layer built upon
requests that makes it easy to process the response data.

UI {#UI}
--

A growing set of common views and controllers is available within the Three20 UI. The well-known
Facebook photo browser/thumbnail viewer is one such controller.

<span class="image" markdown=1>![](/gfx/overview/photobrowser.png 320x480)</span>
<span class="image" markdown=1>![](/gfx/overview/photothumbs.png 320x480)</span>

You can easily mimic the Mail app's message composer using TTMessageController. If you want to
post messages like the Facebook app, you can use the TTPostController.

<span class="image" markdown=1>![](/gfx/overview/mailcomposer.png 320x480)</span>
<span class="image" markdown=1>![](/gfx/overview/messagecomposer.png 320x480)</span>

There are also view controllers supporting Safari and YouTube.

<div class="image" markdown=1>![](/gfx/overview/browser.png 320x480)</div>

Three20 includes a powerful table cell/item architecture that comes with a number of extra table
cell types in addition to the standard Apple cell types. You can easily create a table controller
with controls inline, for example.

<span class="image" markdown=1>![](/gfx/overview/tablecontrols.png 320x480)</span>
<span class="image" markdown=1>![](/gfx/overview/tableitems.png 320x480)</span>
<span class="image" markdown=1>![](/gfx/overview/tableimages.png 320x480)</span>
<span class="image" markdown=1>![](/gfx/overview/tablesearch.png 320x480)</span>

If you want to show activity in your app with a little more style than just an activity indicator,
you can use one of the Three20 activity labels which provide the indicator + text + progress.

<div class="image" markdown=1>![](/gfx/overview/activitylabels.png 320x480)</div>

Emulate the iPhone's springboard controller using TTLauncherView.

<div class="image" markdown=1>![](/gfx/overview/launcher.png 320x480)</div>

There's also support for top-oriented tabs.

<div class="image" markdown=1>![](/gfx/overview/tabs.png 320x480)</div>

Style {#Style}
-----

Three20's Style component is a powerful way to declare and reuse styles. By
defining "stylesheets", you can create rounded buttons, drop shadows, gradients, and borders with
a few simple declarations. Below are just a few examples of styled elements in Three20.

<span class="image" markdown=1>![](/gfx/overview/styledbuttons.png 320x480)</span>
<span class="image" markdown=1>![](/gfx/overview/styledtableitems.png 320x480)</span>
<span class="image" markdown=1>![](/gfx/overview/styledtext.png 320x480)</span>
<span class="image" markdown=1>![](/gfx/overview/styledviews.png 320x480)</span>

Is Three20 right for your project?
----------------------------------

If you're building a native app that talks to web APIs or accesses images from the web, then
Three20 will undoubtedly save you a lot of time. If you're not doing any of that, then you'll
probably still find a lot of code within Three20 that you'll find useful. And heck, it's all
licensed under the Apache 2.0 license anyway. Pick and choose at your pleasure.

The short of it: yes, it is.

Now that you've gotten a basic idea about what Three20 is, go ahead and play with it.

* [Add Three20 to your existing project](/setup/existing)
* [Xcode templates for new projects](/setup/templates)
