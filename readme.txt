=== Quoter ===
Contributors: harishanker
Tags: quotes, custom posts, widgets, shortcodes, quote display
Requires at least: 3.0.1
Tested up to: 4.6.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Quoter displays a random quote (or a quote of your choice) anywhere in your website using shortcodes and/or widgets.

== Description ==

Quoter is a straightforward plugin. You can use this to create a database of quotes within WP-Admin and display it in your site using the shortcode `[showquotes]`. 

It also has  a handy widget that you can use to display it anywhere in your website. 

Features

*   Creates a separate section in WP-Admin, for quotes
*   You can arrange quotes based on quote categories and authors. 
*   Using the shortcode `[quotes]`, you can paste a random quote, from among the list of quotes, anywhere in your post/page. You can even add the qute in your template using the `do_shortcode()`.
*   You can even use a widget to display your quotes in random order.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/quoter` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Add your set of quotes in the `Quotes` section that now populates in your WP-Admin.
4. Add the Quote Widget to your sidebar, or, use the shortcode `[quotes]` to display a random quote from among the list of quotes, in your site. 
5. You can also use the shortcode `[quote id = "post_id"]` to display a particular quote, based on its post id. 

== Changelog ==

= 0.1 =
* Added Custom Post Type for Quotes.
* Added Taxonomy (Author names & Quote categories).
* Added shortcode `[quotes]` to display quote in any location. 
* Added shortcode `[quote id = 'post_id']` to display a quote of your choice at any location.
* Changed quote styling. 
* Added a Widget.