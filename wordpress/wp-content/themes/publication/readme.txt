=== Publication ===

Contributors: automattic
Tags: black, orange, white, dark, light, three-columns, right-sidebar, responsive-layout, custom-menu, featured-images, rtl-language-support, sticky-post, translation-ready

Requires at least: 4.1
Tested up to: 4.2.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Publication is an elegant blog and magazine theme that features full-screen Featured Images. It’s perfect for sites about fashion, food, travel, or design. With balanced typography, colors, and attention to detail, Publication helps you create visually stunning posts.

* Responsive layout.
* Social menu.
* Jetpack.me compatibility for Infinite Scroll, Responsive Videos, Site Logo.
* The GPL v2.0 or later license. :) Use it to make something cool.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Where can I add widgets? =

Publication offers two sidebar widget areas, which can be configured in Appearance → Widgets.

= How do I add the Social Links? =

Publication allows you display links to your social media profiles, like Twitter and Facebook, with icons.

1. Create a new Custom Menu, and assign it to the Social Links Menu location.
2. Add links to each of your social services using the Links panel.
3. Icons for your social links will automatically appear if it's available.

Available icons: (Linking to any of the following sites will automatically display its icon in your social menu).

* CodePen
* Digg
* Dribbble
* Dropbox
* Email (mailto: links)
* Facebook
* Flickr
* Foursquare
* GitHub
* Google+
* Instagram
* LinkedIn
* Path
* Pinterest
* Polldaddy
* Reddit
* RSS Feed (urls with /feed/)
* Spotify
* StumbleUpon
* Tumblr
* Twitch
* Twitter
* Vimeo
* Vine
* WordPress
* YouTube

Social networks that aren't currently supported will be indicated by a generic share icon.

== Quick Specs (all measurements in pixels) ==

1. The main column width is 612.
2. A widget is 234 wide.
3. Featured Images are 2000 wide by 1500 high.

== Credits ==

* Based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc., licensed under [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, licensed under [MIT](http://opensource.org/licenses/MIT)
* Genericons: font by Automattic (http://automattic.com/), licensed under [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)
* Menucon: font by Automattic (http://automattic.com/), licensed under [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)
* Images: images licensed under [CC0](http://creativecommons.org/choose/zero/)
** Our trip to Mount Cook: https://pixabay.com/en/aoraki-mount-cook-mountain-90388/
** Vegetable stir fry: https://stock.tookapic.com/photos/6424

== Changelog ==

= 4 February 2016 =
* Update screenshot

= 1 February 2016 =
* Removing extra spaces in CSS calc() function, which should fix display issues in Chrome on Androind. See #3647;

= 20 January 2016 =
* Remove custom PollDaddy styles

= 14 December 2015 =
* Restore rating message.

= 13 August 2015 =
* Make sure images aren't being displayed in .entry-summary

= 12 August 2015 =
* Improve "Continue reading" link and make sure it's being displayed even when user uses a manual excerpt

= 11 August 2015 =
* Remove JS fallback for CSS's calc and vw. Both are well supported by browsers.
* Publication. Attempt to fix window width variable
* Revert previous typo
* Fix typo in jQuery variable.

= 10 August 2015 =
* correcting comment after closing tag;

= 1 August 2015 =
* use `innerWidth` to account for scrollbars and CSS3 to set more accurate initial states in browsers that support.

= 23 July 2015 =
* Tweak Twitter widget iframe margin bottom
* Duplicated the sidebar in order to avoid issues with iframes/jQuery.appendTo.

= 21 July 2015 =
* Fix RTL padding
* Remove flexible-header tag
* Remove custom-header tag
* Remove custom header
* Add rtl to Social Media Icons
* Fix box-shadow links
* Fix tags padding
* Remove box-shadow from linked images
* Tweak widget author grid
* Add style for Social Media Icons
* Fix padding/margin of list items
* Make sure to remvoe link style from videos

= 16 July 2015 =
* Move custom header to .site-header and simplify its use
* Remove leftover code
* Update readme
* Update screenshot
* Update theme desc

= 15 July 2015 =
* Multiple changes due to rtl

= 14 July 2015 =
* Clean stylesheet for better color annotations and fix sharedaddy official buttons height

= 13 July 2015 =
* Fix header height when no title
* Add some break-word to make sure long words don't break the grid
* Multiple changes:

= 7 July 2015 =
* use https to load Google Fonts

= 3 July 2015 =
* Tweak primary menu sub items
* Fix no-comment wrong padding on large screens
* Tweak comment form style
* Add style for wpcom comment form
* Fix comments ratings/likes
* Reorganise sharedaddy style for a better readability

= 2 July 2015 =
* add style for related posts
* Add style for PollDaddy
* Increase border-width for blockquote and add proper styling to the reblogger
* Add style for wpcom widgets

= 1 July 2015 =
* Fix margin of embed elements direclty within a paragraph
* Remove widont -- There is a known bug in Chromium and Neuton with the &nbsp; so in the meantime I'm disabeling it
* Fix navigation  right border when site doesn't have a sidebar
* Add wpcom.php and style-wpcom.css (rough version)
* Make sure to only target links in span in .entry-footer
* Initial import of the .org version of the Publication theme
