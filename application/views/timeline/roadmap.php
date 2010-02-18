Roadmap
=======

Latest Three20 release: `1.0`

Version 1.1 Roadmap
-------------------

### Goals for v1.1

* Create new tutorials and improve the documentation
 * Created a TTTwitter sample app
* Begin trimming down the bug list
* Ensure support for the iPad
 * Began work on iPad support

<div class="progressbar"><div class="completed" style="width:5%"></div></div><div class="progressnum"><b>5%</b></div>
<div class="clearfix"></div>

### Tutorials + Documentation

Each of the controllers listed below needs documentation and/or an example project. If you'd be
interested in writing the documentation or making an example project, please email Jeff at
jverkoey@gmail.com with the controller you'd be interested in working with and the parts you'd like
to work on (either documentation or an example project).

A good example project will show a developer a set of examples that clearly demonstrate the use of
the controller in working code.

#### TTWebController
#### TTMessageController
#### TTPopupViewController
#### TTAlertViewController
#### TTActionSheetController
#### TTPostController
#### TTTextBarController

### Bugs

Below is a list of all issues reported on GitHub as of `February 18, 2010`.

#### [Bug Report #3](http://github.com/facebook/three20/issues#issue/3): TTStyledTextTableField in a UITableViewStyleGrouped table view does not have rounded corners
#### [Bug Report #5](http://github.com/facebook/three20/issues#issue/5): TTImageView - Landscape pinch amplification as per UIImageView
#### [Bug Report #6](http://github.com/facebook/three20/issues#issue/6): TTImageView - Landscape to Portrait rotation - When zoomed rotates the image Off-Axis
#### [Bug Report #15](http://github.com/facebook/three20/issues#issue/15): TTPositionAbsolute breaks link surrounding an image
#### [Bug Report #16](http://github.com/facebook/three20/issues#issue/16): Add -initWithCoder: method to TTView class and subclasses to minimally support Interface Builder XIB
#### [Bug Report #17](http://github.com/facebook/three20/issues#issue/17): TTBoxStyle.minSize only concerns height, not width.
#### [Bug Report #19](http://github.com/facebook/three20/issues#issue/19): TTURLRequestQueue does not respect Cache-Control header
#### [Bug Report #28](http://github.com/facebook/three20/issues#issue/28): TTMessageController / OS 3.0: Cannot switch fields
#### [Bug Report #29](http://github.com/facebook/three20/issues#issue/29): TTTextEditor becomeFirstResponder
#### [Bug Report #31](http://github.com/facebook/three20/issues#issue/31): TTMessageController - does not allow arbitrary recipient into TTMessageRecipientField
#### [Bug Report #46](http://github.com/facebook/three20/issues#issue/46): The hue in UIColorAdditions is in range [0, 360], while UIKit's hue is [0, 1]
#### [Bug Report #47](http://github.com/facebook/three20/issues#issue/47): (fix included): TTTableView switch from TTStyledTextTableItemCell to TTTableItemCell and back...needs layoutSubviews
#### [Bug Report #48](http://github.com/facebook/three20/issues#issue/48): Request for sender field in TTMessageController
#### [Bug Report #51](http://github.com/facebook/three20/issues#issue/51): -[TTLayout layoutSubviews:forView:] is too specific
#### [Bug Report #55](http://github.com/facebook/three20/issues#issue/55): Offscreen TTTextEditor becomeFirstResponder crashes
#### [Bug Report #57](http://github.com/facebook/three20/issues#issue/57): TTTableImageItemCell layout overflow
#### [Bug Report #59](http://github.com/facebook/three20/issues#issue/59): Keyboard resizing broken with tab controller
#### [Bug Report #60](http://github.com/facebook/three20/issues#issue/60): Resistance in TTPhotoViewController when zoomed in seems too high Options
#### [Bug Report #61](http://github.com/facebook/three20/issues#issue/61): TTPhotoViewController seems to have a problem zooming in *and* rotating
#### [Bug Report #62](http://github.com/facebook/three20/issues#issue/62): Flicking when zoomed in in a TTPhotoViewController doesn't seem to decelerate the image
#### [Bug Report #63](http://github.com/facebook/three20/issues#issue/63): TTStyledTextLabel does not support html special characters
#### [Bug Report #65](http://github.com/facebook/three20/issues#issue/65): suggest moving TTTabBar setSelectedTabIndex delegate call out of if statement
#### [Bug Report #69](http://github.com/facebook/three20/issues#issue/69): TTStyledText -- Trouble with newlines after bold/italic/span elements
#### <strike>[Bug Report #71](http://github.com/facebook/three20/issues#issue/71): navigationBarTintColor and toolbarTintColor issues for TTDefaultSheet and TTWebController</strike>
#### [Bug Report #72](http://github.com/facebook/three20/issues#issue/72): TTURLRequest doesn't work with file URLs
#### [Bug Report #73](http://github.com/facebook/three20/issues#issue/73): Request: Custom UILabel for TTTableLinkedItemCell or TTTableViewCell
#### [Bug Report #74](http://github.com/facebook/three20/issues#issue/74): TTNavigator is broken for "More..." controllers in Tab Bar
#### [Bug Report #76](http://github.com/facebook/three20/issues#issue/76): TTPhotoViewController shouldn't set UIView.title for each photo
#### [Bug Report #77](http://github.com/facebook/three20/issues#issue/77): Not able to remove TTURLCache from memory
#### [Bug Report #79](http://github.com/facebook/three20/issues#issue/79): left and right overflow view missed in TTTabStrip.
#### [Bug Report #80](http://github.com/facebook/three20/issues#issue/80): TTScrollView.m deviceOrientationDidChange commented out
#### [Bug Report #81](http://github.com/facebook/three20/issues#issue/81): Unable to delete rows/cells from table
#### [Bug Report #86](http://github.com/facebook/three20/issues#issue/86): Long links don't wrap properly in TTStyledTextLabels
#### [Bug Report #87](http://github.com/facebook/three20/issues#issue/87): TTStyledLayout adds descender height in breakLine method to height of TTStyledTextFrames which already include descender height
#### [Bug Report #89](http://github.com/facebook/three20/issues#issue/89): TTURLCache removeURL not removing
#### [Bug Report #90](http://github.com/facebook/three20/issues#issue/90): Cell Re-ue Cleanup
#### [Bug Report #91](http://github.com/facebook/three20/issues#issue/91): TTImageStyle and default currentMode
#### [Bug Report #94](http://github.com/facebook/three20/issues#issue/94): TTTableViewDelegate call to [_controller didSelectObject:object atIndexPath:indexPath]; creates an impossible situation to catch - (void)didSelectObject:(id)object atIndexPath:(NSIndexPath*)indexPath
#### [Bug Report #96](http://github.com/facebook/three20/issues#issue/96): Empty table views after memory warning (Oct 17 2009 code)
#### [Bug Report #97](http://github.com/facebook/three20/issues#issue/97): TTImageView + TTGridLayout
#### [Bug Report #101](http://github.com/facebook/three20/issues#issue/101): UITextAlignment not implemented on TTStyledTextLabel
#### [Bug Report #102](http://github.com/facebook/three20/issues#issue/102): TTLauncherItem.h needs newline at end (GCC_WARN_ABOUT_MISSING_NEWLINE)
#### [Bug Report #103](http://github.com/facebook/three20/issues#issue/103): setTableBannerView:animated: frame gets set to the overlayView's frame
#### [Bug Report #105](http://github.com/facebook/three20/issues#issue/105): previousViewController overwriting private SDK call?
#### [Bug Report #111](http://github.com/facebook/three20/issues#issue/111): Three20 accessing private variables of UIView
#### [Bug Report #113](http://github.com/facebook/three20/issues#issue/113): TTWebController should not persist itself when it loads an external URL
#### [Bug Report #115](http://github.com/facebook/three20/issues#issue/115): TTTableViewCell should have a flag if it is in a grouped table view
#### [Bug Report #116](http://github.com/facebook/three20/issues#issue/116): TTViewController and UIViewController's designated initializer
#### [Bug Report #117](http://github.com/facebook/three20/issues#issue/117): Centered, autoresizesToFit TTStyleText not respecting frame bounds
#### [Bug Report #118](http://github.com/facebook/three20/issues#issue/118): TTURLRequest doesn't appear to support conditional GET?
#### [Bug Report #121](http://github.com/facebook/three20/issues#issue/121): UIControls disappear from TTTableControlItemCells in some cases.
#### [Bug Report #122](http://github.com/facebook/three20/issues#issue/122): TTPhotoViewController + MockPhotoSource (database display)
#### [Bug Report #123](http://github.com/facebook/three20/issues#issue/123): TTPhotoViewController And MockPhotoSource (local Photos)
#### [Bug Report #124](http://github.com/facebook/three20/issues#issue/124): Following a path in TTWebController gives EXC_BAC_ACCESS
#### [Bug Report #125](http://github.com/facebook/three20/issues#issue/125): Loading Message does not appear
#### [Bug Report #126](http://github.com/facebook/three20/issues#issue/126): TTTexteditor strange with \n
#### [Bug Report #127](http://github.com/facebook/three20/issues#issue/127): Add the status bar style to TTDefaultStyleSheet
#### [Bug Report #128](http://github.com/facebook/three20/issues#issue/128): Disable the NavigationBAr
#### [Bug Report #129](http://github.com/facebook/three20/issues#issue/129): TTStyledTextLabel &lt;center> tag
#### [Bug Report #130](http://github.com/facebook/three20/issues#issue/130): TTRoundedLeftArrorShape Drawing Problem
#### [Bug Report #131](http://github.com/facebook/three20/issues#issue/131): TTTabGrid labels broken
#### [Bug Report #132](http://github.com/facebook/three20/issues#issue/132): TTTableMessageItemCell displays no title with timestamp set to nil
#### [Bug Report #133](http://github.com/facebook/three20/issues#issue/133): Navigation path is not persisted for view controllers under control of moreNavigationController
#### [Bug Report #135](http://github.com/facebook/three20/issues#issue/135): TTStyledTextLabel does not open hyperlink
#### [Bug Report #136](http://github.com/facebook/three20/issues#issue/136): TTPhotoViewController crops images
#### [Bug Report #137](http://github.com/facebook/three20/issues#issue/137): [UIDeviceRGBColor multiplyHue: saturation: value:] crash
#### [Bug Report #139](http://github.com/facebook/three20/issues#issue/139): setting autoresizesForKeyboard = YES makes some fields uneditable
#### [Bug Report #140](http://github.com/facebook/three20/issues#issue/140): TTTableHeaderView's background color should be stylable
#### [Bug Report #141](http://github.com/facebook/three20/issues#issue/141): Simplify URL handling with TTNavigator and TT tables
#### [Bug Report #142](http://github.com/facebook/three20/issues#issue/142): TTPageControl broken tracking
#### [Bug Report #143](http://github.com/facebook/three20/issues#issue/143): TTPhotoViewController + TTThumbsViewController in Landscape Mode not working
#### <strike>[Bug Report #144](http://github.com/facebook/three20/issues#issue/144): TTTableViewInterstialDataSource is misspelled</strike>
#### [Bug Report #145](http://github.com/facebook/three20/issues#issue/145): Crash using TTTableViewController as searchController after didReceiveMemoryWarning
#### [Bug Report #146](http://github.com/facebook/three20/issues#issue/146): Half of screen unresponsive to touch events when Three20 projects are started in landscape mode.
#### [Bug Report #149](http://github.com/facebook/three20/issues#issue/149): TTTableRightCaptionItem is displaying the caption on the left side
