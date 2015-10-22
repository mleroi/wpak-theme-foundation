<!--
Theme Name: Foundation Demo Theme
Description: WP-AppKit demo theme using the Foundation Front End Framework
Version: 0.1
Theme URI: https://github.com/mleroi/wpak-theme-foundation
Author: UncatCrea			
Author URI: http://uncategorized-creations.com		
-->

# WP-AppKit Foundation Demo Theme

This WP-AppKit theme is based on the <a href="http://foundation.zurb.com/">Foundation</a> Front End Framework.

# Installation
**WP-AppKit plugin install**

* Download WP-AppKit: https://github.com/uncatcrea/wp-appkit
* Install WP-AppKit as you would do for any other WordPress plugins (ie. drop the plugin folder in */wp-content/plugins*)
* Activate WP-AppKit using the _Plugins_ WordPress admin panel. (Browse the *Installed Plugins* list and click the *Activate* link of WP-AppKit.)
* Now you should have a brand new */wp-content/themes-wp-appkit* folder (yes, this is where app themes are stored)

**Ratchet theme install**

* Create a new folder "ratchet" in the */wp-content/themes-wp-appkit* directory
* Download the Ratchet theme from this repository and drop the source files to your "ratchet" folder
* **OR** clone this repository in your "ratchet" folder : "git clone https://github.com/mleroi/wpak-theme-ratchet ." (don't forget the final dot so that it's not cloned in a subfolder!)
* In WordPress, use the *WP-AppKit* admin panel to create a new app and choose the Ratchet theme in the *Appearance* box
* From there you're free to test in your browser (using the Chrome's Emulation Mode) or directly try to compile and run on your device.

If new to WP-AppKit, you might want to read this <a href="http://www.uncategorized-creations.com/1212/compiling-app-using-wp-appkit-phonegap-build/">article about compiling WP-AppKit apps with PhoneGap Build</a>.

# Note
Ratchet's Javascript components are not fully compatible with WP-AppKit themes because Ratchet's Javascript implementation :
- uses href anchors to target its elements which is not compatible with WP-AppKit (Backbone) routing.
- does not use separated modules for each component : once the Ratchet's JS is included,
all Ratchet's components are on, binding their touch events to the whole DOM,
which lead to bugs with the "single page app" logic.

In this theme we only use the "popover" Ratchet component http://goratchet.com/components/#popovers so
we extracted this one module only from the Ratchet's javascript lib (see js/ratchet-wpak.js).
