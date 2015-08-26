=== EveryScape Viewer ===
Contributors: EveryScape, kmullings
Tags: everyscape, virtual tours
Requires at least: 4.0
Tested up to: 4.3
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enables user to add EveryScape viewers to a post or page using a shortcode.

== Description ==

Enables user to add EveryScape viewers to a post or page using a shortcode.

Attributes:

* width - Viewer width in pixels
* height - Viewer height in pixels
* script - VideoScape ID
* tour - Tour ID
* panorama - Panorama ID

 Example:

[everyscape_viewer width="680" height="500" script="19106233"]
[everyscape_viewer width="680" height="500" tour="39163705"]
[everyscape_viewer width="680" height="500" panorama="1228921"]

== Installation ==

1. Download the EveryScape Viewer plugin from http://everyscape.com/wp-plugin.html or from https://wordpress.org/plugins/everyscape-viewer
2. Upload the entire everyscape-viewer directory to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Use the shortcode in your post or page e.g. [everyscape_viewer width="680" height="500" script="19106233"]

== Frequently Asked Questions ==

= What if I do not enter any parameters for the shortcode? =

A viewer will be displayed with the following defaults: width = 480px, height = 300 and a sample panorama ID = 248400.

== Changelog ==

= 1.0.1 =

* Updated installation instructions and added plugin icons.

= 1.0.0 =

* First release.
