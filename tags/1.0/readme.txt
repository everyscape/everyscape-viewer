=== EveryScape Viewer ===
Contributors: EveryScape, Keno R. Mullings
Tags: everyscape, virtual tours
Requires at least: 4.0
Tested up to: 4.0
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enables user to add EveryScape viewers to a post or page using a shortcode.

== Description ==

Enables user to add EveryScape viewers to a post or page using a shortcode.

== Installation ==

1. Download the EveryScape Viewer plugin from http://everyscape.com/wp-plugin.html
2. Upload `everyscape-viewer.php` to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

== Usage ==

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

== Frequently Asked Questions ==

= What if I do not enter any parameters for the shorcode? =

A viewer will be displayed with width = 480px, height = 300 and a sample panorama ID = 248400.

== Screenshots ==

None at this time.

== Changelog ==

= 1.0.0 =

* First release.
