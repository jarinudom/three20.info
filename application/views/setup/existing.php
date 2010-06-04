<?= $title ?>
=============
<div class="source">Source: <a href="http://github.com/facebook/Three20">github</a></div>

!> !* Hey, listen!
!>
!> Starting a new project with Three20?  
!> Skip these steps with the [Three20 Xcode project templates](/setup/templates).

Three20 is compiled as a static library and the easiest way to add it to your project is to use
Xcode's "dependent project" facilities. Here's how:

* Clone the Three20 git repository:  
  `git clone git://github.com/facebook/three20.git`
* Locate the "Three20.xcodeproj" file under "three20/src/Three20".  Drag Three20.xcodeproj and drop it onto
  the root of your Xcode project's "Groups and Files"  sidebar.  A dialog will appear -- make sure 
  "Copy items" is unchecked and "Reference Type" is "Relative to Project" before clicking "Add".    
  <div class="image" markdown=1>![Add to existing project](/gfx/setup/existing/addtoproject.png 380x156)</div>

* Open the Three20 Xcode Project that you just added to your app and expand the "Dependencies"
  group. Select all of the projects listed there and drag them to your app as well. You should
  now have the following list of Three20 projects added to your app:
    * Three20Core
    * Three20Network
    * Three20Style
    * Three20UICommon
    * Three20UINavigator
    * Three20UI
    * Three20
  <div class="image" markdown=1>![Add the Three20 libraries](/gfx/setup/existing/adddependencies.png 227x121)</div>

* Now you need to link the Three20 static libraries to your project.  Select all of the
  project items that you just added to the sidebar.  Under the "Details" table, you will see
  a number of items, such as libThree20.a and libThree20Core.a.  Check the checkbox on the
  far right for each of the `lib` files (not the UnitTests). This will link each part of the
  Three20 framework to your app.
  <div class="image" markdown=1>![Link the static library](/gfx/setup/existing/linkit.png 357x258)</div>

* Now you need to add Three20 as a dependency of your project, so Xcode compiles it whenever
  you compile your project.  Expand the "Targets" section of the sidebar and double-click your
  application's target.  Under the "General" tab you will see a "Direct Dependencies" section. 
  Click the "+" button, select "Three20" and each of the other libs, and click "Add Target".
  You do *not* need to add the `UnitTests` target for each lib.
  <div class="image" markdown=1>![Add Three20 as a dependency](/gfx/setup/existing/dependency.png 302x440)</div>

* Now you need to add the bundle of images and strings to your app.  Locate "Three20.bundle" under
  "Three20/src" and drag and drop it into your project.  A dialog will appear -- make sure 
  "Create Folder References" is selected,  "Copy items" is unchecked, and "Reference Type" is 
  "Relative to Project" before clicking "Add".
  <div class="image" markdown=1>![Add the Three20 bundle](/gfx/setup/existing/bundle.png 389x162)</div>

* Now you need to add the Core Animation framework to your project.  Right click on the
  "Frameworks" group in your project (or equivalent) and select Add > Existing Frameworks. 
  Then locate `QuartzCore.framework` and add it to the project.
* Finally, we need to tell your project where to find the Three20 headers.  Open your
  "Project Settings" and go to the "Build" tab. Be sure to select the appropriate active configuration 
  (eg, Release vs. Debug -- eventually you'll need to change both). Look for "Header Search Paths" and 
  double-click it.  Add the relative path from your project's directory to the
  "`three20/Build/Products/three20`" directory. 
  If your project and the Three20 source are in the same parent, you would enter
  "`../three20/Build/Products/three20`".
* While you are in Project Settings, go to "Other Linker Flags" under the "Linker" section, and
  add "`-ObjC`" and "`-all_load`" to the list of flags.
* You're ready to go.  Just `#import "Three20/Three20.h"` anywhere you want to use Three20 classes
  in your project.
