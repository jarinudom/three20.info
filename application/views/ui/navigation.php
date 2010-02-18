<?= $title ?>
=============

<div class="source">Source: <a href="http://wiki.github.com/facebook/three20/url-based-navigation">github</a></div>

Navigation in iPhone apps can be challenging - there is no single prescribed way to open a view
and pass data into it. Most applications rely on each view having a particular API that the
callers must know. This leads to a lot of boilerplate code to open the same view from multiple
locations in your application.

The URL-based navigation in `TTNavigator` provides a standard way to
navigate the user from one view to another, with built-in understanding of some of the standard
iPhone interfaces like UINavigationController, UITabBarController, and more.

### Table of Contents

<div class="toc" markdown="1">
* [Introduction](#intro)
* [Persistence](#persistence)
* [URL mapping methods](#urlmapping)
* [Native parameters](#nativeparams)
* [Troubleshooting](#troubleshooting)
</div>
<div class="clearfix"></div>

Introduction {#intro}
============

The concept behind `TTNavigator` is similar to
[Ruby on Rails' routing](http://api.rubyonrails.org/classes/ActionController/Routing.html)
in that you link URL patterns to code in a url _map_. Callers simply request a url, and
`TTNavigator` will find the appropriate code to run. This means that the url map makes a semantic
distinction between _what_ you want to display, and _how_ you want to display it. The most common
pattern is to have a single, shared navigator used across your whole application.

Here's an example to get started. Typically this appears in your Application Delegate's
`applicationDidFinishLaunching:` selector.

."brush: obj-c;"
    TTNavigator* navigator = [TTNavigator navigator];
    navigator.window = window;

    TTURLMap* map = navigator.URLMap;
    [map from:@"tt://restaurant/(initWithName:)"
    toViewController:[RestaurantController class]];

The above refers to a class, `RestaurantController`, with a selector,
`initWithName:`

."brush: obj-c;"
    -(void) initWithName: (NSString*)name {
      //...
    }

This establishes a simple map which recognizes one url. Imagine that you wanted to open the
restaurant controller for a given restaurant. For instance, Chotchkie's.

Typically you'd do it this way, if you were embedded in a UINavigationController:

."brush: obj-c;"
    RestaurantController* controller = [[RestaurantController alloc]
      initWithName:@"Chotchkie's"];
    [navigationController pushViewController:controller animated:YES];
    [controller release];

This is a lot of boilerplate. The only reason to keep `controller` around is to add it to the
UINavigationController, and release it. Really, you just want to "open this view in the current
context" and be done with it.

With TTNavigator, just open this url with:

."brush: obj-c;"
    [[TTNavigator navigator] openURL:@"tt://restaurant/Chotchkie's" animated:YES]

When `openURL:animated:` is called, an instance of `RestaurantController` will be allocated, and
then the `initWithName:` selector will be invoked with `@"Chotchkie's"` as the value of the first
parameter.

Persistence {#persistence}
===========

One huge advantage of using `TTNavigator` is the fact that the user's entire navigation state can
be persisted automatically based on these URLs. This means that if you have a tab bar with
navigation controllers, `TTNavigator` will remember the "stack" of urls that the user has navigated
using `openURL:animated:`. The next time the application is launched, the user will be shown exactly
the navigation state as the last time they launched the application.

`TTNavigator` is smart enough to only persist the URLs, and avoid re-instantiating a whole stack of
views on startup. So if the user is 10 levels deep into a UINavigationController, only the most
recent view will be instantated at startup. The user will, however, be able to navigate backwards
using UINavigationController's "back" button, and the views will be instantiated on demand.

Be careful with this though, because it is easy to accidentally write code where a view is dependent
on state that has been initialized in a previous view.

Enabling persistence
--------------------

The default persistence mode of TTNavigator is
`TTNavigatorPersistenceModeNone`. To enable persistence you will need
to choose one of the other two persistence modes before you call
`restoreViewControllers`. Within your
`applicationDidFinishLaunching:` method (or wherever you initialize
the navigator) you can set one of three persistence modes.

* `TTNavigatorPersistenceModeNone` - No persistence.
* `TTNavigatorPersistenceModeTop` - Persist only the first URL in the
  history.
* `TTNavigatorPersistenceModeAll` - Persist the entire history.

To set the persistence mode, set the `persistenceMode` property of
`TTNavigator`.

."brush: obj-c;"
    TTNavigator* navigator = [TTNavigator navigator];
    navigator.persistenceMode = TTNavigatorPersistenceModeAll;

URL mapping methods {#urlmapping}
===================

There are two methods of mapping that you should be aware of.  Mapping from URLs to Controllers,
and mapping from NSObjects to URLs (which are generally then mapped to controllers). We'll start
with the simpler case.

URLs to Controllers
-------------------

The first form is when you have a url, say "tt://menu/1", and this is being mapped to a
Controller. Let's say we have the following map (from TTNavigatorDemo):

."brush: obj-c;"
    [map from:@"tt://menu/(initWithMenu:)"
      toSharedViewController:[MenuController class]];

Opening "tt://menu/1" will call

."brush: obj-c;"
    [[MenuController alloc] initWithMenu:1]

This extends for multiple parameters, also. Let's say we want to display a specific page in
MenuController.

."brush: obj-c;"
    [map from:@"tt://menu/(initWithMenu:)/(page:)"
      toSharedViewController:[MenuController class]];

Opening "tt://menu/1/5" will call

."brush: obj-c;"
    [[MenuController alloc] initWithMenu:1 page:5]

### Other data types

Parameters will automatically map to the method's data types. In the above examples we've
assumed that `initWithMenu:` has this signature

."brush: obj-c;"
    - (id)initWithMenu:(MenuPage)page

Where `MenuPage` is an enum (effectively an int).

We could also map parameters to strings if we wanted.

."brush: obj-c;"
    - (id)initWithMenuName:(NSString*)name

The map:

."brush: obj-c;"
    [map from:@"tt://menu/(initWithMenuName:)"
      toSharedViewController:[MenuController class]];

Opening "tt://menu/lunch" will call

."brush: obj-c;"
    [[MenuController alloc] initWithMenuName:@"lunch"]

NSObjects to URLs
-----------------

NSObjects in three20 have the ability to be mapped to URLs via the
`URLValueWithName` addition in NSObjectAdditions.h.

This is an incredibly useful feature when populating a table with items. So how does it work?

First off, let's consider a basic NSObject:

."brush: obj-c;"
    @interface Contact : NSObject {

    }

    @property (nonatomic, retain) NSNumber* uid;
    @property (nonatomic, retain) NSString* firstName;
    @property (nonatomic, retain) NSString* lastName;

    @end

We want to populate a table controller with a list of Contacts. Upon tapping any contact in
the list, you should be taken to a view that shows the Contact details. Using TTTableItems we
can set a URL for each table item, but how do we generate this URL?

Introducing the NSObject TTURL map:

."brush: obj-c;"
    [map from:[Contact class] name:@"view" toURL:@"tt://contact/view/(uid)"];

Calling `[aContact URLValueWithName:@"view"]` will generate a URL
specifically for aContact.

."brush: obj-c;"
    Contact* aContact = [[Contact alloc]
      initWithFirstName:@"Johnny" lastName:@"Appleseed" uid:1];
    NSString* url = [aContact URLValueWithName:@"view"];
    // url = @"tt://contact/view/1"

This can then be mapped through a URL to Controller map as discussed above.

### Parameter substitution

You may have noticed from the example above that mapping an object to a URL allows you to use
properties from the NSObject to create the URL. Simply include the parameter name, surrounded by
(parenthesis), and `URLValueWithName` will automatically substitute
it. Any property of the NSObject can be used to generate the URL, allowing you to break the
object down into a unique URL representation.

Native parameters {#nativeparams}
=================

One of the first questions people ask about TTNavigator is how to pass native objects around,
rather than encoding them somehow in a URL. There is a simple pattern for this, using the
`query:` version of the `openURL:animated:`
selector, `openURL:query:animated:query:`. For example, imagine you
wanted to pass along an `NSArray` of items to show in the new view:

."brush: obj-c;"
    NSArray *arr = [...load up with data...];
    [[TTNavigator navigator] openURL:@"tt://restaurant/Chotchkie's" 
      query:[NSDictionary dictionaryWithObject:arr forKey:@"arraydata"],
      animated:YES]

In this example, the array is passed directly to the initWithName: but only if there is a
matching selector that accepts the query:

."brush: obj-c;"
    -(id) initWithName: (NSString*)name query:(NSDictionary*)query {
      for (MyObject* item in [query objectForKey:@"arrayData"])
        //... do something with item ...
      }

      // ...
    }

There is a catch to using this related to persistence. If the user quits the application
after this instance of the MenuController's view shows up on screen, then the next launch
of this application will load the url `@"tt://restaurant/Chotchkie's"` but the
`query:` argument will be `nil`.

A general solution to this problem is to encode a unique id into the URL.
This unique id can then be used to load the data in question whenever the controller loads and
with zero dependency upon previous controllers.

Troubleshooting {#troubleshooting}
===============

URL-based navigation leads to some powerful functionality, but there are aspects of three20's
url routing system that don't always work as expected.

Subtle differences between toViewController and toSharedViewController in tables
--------------------------------------------------------------------------------

There are multiple ways to map a URL to a controller.  Two such methods are
`toViewController` and
`toSharedViewController`. These two methods have a gotcha when used in
table items that do _not_ have a accessoryURL.

If the item's URL is mapped with `toViewController`, then the table
view will set the cell
`accessoryType` to
`UITableViewCellAccessoryDisclosureIndicator`. URLs mapped with
`toSharedViewController` will set the cell
`accessoryType` to
`UITableViewCellAccessoryNone`.
