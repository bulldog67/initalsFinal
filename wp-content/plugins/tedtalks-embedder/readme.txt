=== TEDTalks Embedder ===
Contributors: samuelaguilera
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2UT9S9ACVEHHL
Tags: TED, Talks, TEDx, TEDTalks, oEmbed
Requires at least: 3.8.1
Tested up to: 4.2.1
Stable tag: 2.0
License: GPL3

Helps you to embed TED Talks videos on your self hosted WordPress simply using same shortcode used for WordPress.com

== Description ==

Helps you to embed TED Talks videos on your self hosted WordPress simply using same shortcode used for WordPress.com

**This plugin is not affiliated in any way with TED Conferences, LLC**.

IMPORTANT: **You can't use this plugin and Jetpack's shortcodes module at the same time**. But you can use this plugin and Jetpack if you deactivate first the Jetpack's shortcodes module.

= Features =

* Easy and simple usage
* Uses same shortcode used for WordPress.com
* You can set default values (in Settings -> Media) width, height, and language of TED Talks.
* Supports multiple TED Talks in the same post

= Requirements =

* WordPress 3.8.1 or higher.
* You can't have Jetpack's shortcodes module activated.

= Usage =

Follow the same [instructions](http://en.support.wordpress.com/videos/ted-talks/) that you can read for WordPress.com

Some shortcodes examples:

* [ted id="210" lang="eng"]
* [ted id="http://www.ted.com/talks/view/id/210" lang="eng"]
* [ted id=210 lang=fr width=560 height=315]
* [ted id="210"]

If you want to set default width, height and language values for your TED Talks, go to Settings --> Media to set the values and omit values defined in the shortcode (last example).

By the way, this plugin was specially made for TEDxZaragoza 'The Future of Happiness', an independently organized TED event that was held on November 5, 2011 in Zaragoza (Spain).
    	
== Installation ==

* Extract the zip file and just drop the contents in the <code>wp-content/plugins/</code> directory of your WordPress installation (or install it directly from your dashboard) and then activate the Plugin from Plugins page.

== Screenshots ==

1. TEDTalks Embedder settings in Settings --> Media settings page.

== Changelog ==

= 2.0 =

* Adopted Jetpack 2.8 TED shortcode source.
* Added settings for default width, height, and language values.
* Removed code for the cache function. Maybe will back in a future version. 

= 1.1 =

* Big rewrite of the plugin to use WordPress Shortcode API for better perfomance and compatibility.

= 1.0.2 =

* TED.com changes a little the code of the page, so updating the plugin is required to properly grab the embed code (previously TED Talks embbeded on your site are not affected).

= 1.0.1 =

* Fixed weird mistake in the SVN that was causing a bad plugin installation.

= 1.0 =

* First public release.
* Added support for multiple TED Talks in the same post.

= 0.9 =

* Some code cleanup and improvements.
* Added support for multilanguage codes.

= 0.7 =

* 99% rewriting of the plugin code.
* Now using totally different method. Instead of generating the embed code, I grab it completely from TED.com
* Changed shortcode to use same format as in WordPress.com

= 0.1 =

* Not released to the public.
* Originally based on TedTalks for WordPress by Robert Anselm.
* Updated ted.com embed code and made some little changes.
