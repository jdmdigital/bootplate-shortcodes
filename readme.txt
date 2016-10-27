=== Bootplate Shortcodes ===
Contributors: jdm-labs
Donate link: http://jdmdigital.co
Tags: bootplate, shortcodes, bootstrap, twitter bootstrap, shortcode, grid, button, responsive
Requires at least: 3.0.1
Tested up to: 4.6.2
Stable tag: 0.8

License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple Wordpress plugin to add shortcodes for Twitter Bootstrap v3.3.x (and some for Bootstrap v4).

== Description ==

Simple Bootstrap v3 (and v4) shortcodes for creating columns, buttons and other Bootstrap componants.

**Just the Shortcodes**
Lots of great plugins out there that do things like this, but Bootplate Shortcodes is just the good stuff.  We're assuming you've already included the Bootstrap CSS and JS in your theme.  Bootplate Shortcodes adds just the basic shortcodes needed to use all that great Bootstrap goodness, including:

* Buttons
* Basic Grid 
* Cards (from Bootstrap v4)
* Wells, Preformatted content
* Alerts, Asides
* and more...

This plugin is optimized for use with the [Bootplate theme](https://github.com/jdmdigital/bootplate), but works for just about any theme using Bootstrap v3 or later.  If you're missing any (special) CSS, there's a template file included called "special.css". 

**Light and Fast**
A lot of plugins out there enqueue a LOT of resources.  This plugin enqueues NONE.  If your theme's style.css file doesn't include the nessessary style, you'll need to copy any missing CSS from special.css.

More importantly, if you're all good on all that stuff, you don't need to worry about "plugin bloat."

== Installation ==


1. Download and unzip this plugin
1. Upload the "bootplate-shortcodes" folder to your site's /wp-content/plugins/ directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Create or edit a page or post and click the "B" button that appears above the editor insert a shortcode

**NOTE**: You must already have Twitter Bootstrap installed on your theme to use this plugin correctly.

== Frequently Asked Questions ==

= Does this plugin include Bootstrap 3? =
No, we assume you are already working with a WordPress theme that includes the Bootstrap libraries.

= Does it include Bootstrap 4? =
Nope, not really.  Bootstrap v4 is still in ALPHA and not ready for prime-time.  BUT there are a few Bootstrap 4 classes we've borrowed and placed in special.css for you to use with Bootplate Shortcodes.

== Screenshots ==

1. Coming soon...

== Changelog ==

= 0.7 =
* New MCE Icons

= 0.6 =
* Version Bump

= 0.1 =
* Initial Release.
