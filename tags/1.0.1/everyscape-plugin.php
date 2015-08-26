<?php
/*
 Plugin Name: EveryScape Viewer
 Plugin URI: http://everyscape.com/wp-plugin.html
 Description: Enables user to add EveryScape viewers to a post or page using a shortcode.
 Version: 1.0.1
 Author: EveryScape
 Author URI: http://EveryScape.com
 Text Domain: everyscape-viewer
 Domain Path: /locale
 License: GPL2

 Copyright 2015  EveryScape  (email : info@everyscape.com)

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License, version 2, as
 published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

defined('ABSPATH') or die("Don't Do That!");

if(!class_exists('EVERYSCAPE_VIEWER'))
{
    class EVERYSCAPE_VIEWER
    {
        /**
         * Construct the plugin object
         */
        public function __construct()
        {
            // Register shortcodes
          	require_once(sprintf("%s/shortcodes/everyscape-viewer-shortcode.php", dirname(__FILE__)));
          	$everyscape_viewer_shortcode = new EveryScape_Viewer_Shortcode();
		} // END public function __construct

        /**
         * Activate the plugin
         */
        public static function activate()
        {
            // Do nothing
        } // END public static function activate

        /**
         * Deactivate the plugin
         */
        public static function deactivate()
        {
            // Do nothing
        } // END public static function deactivate
	} // END class EVERYSCAPE_VIEWER
} // END if(!class_exists('EVERYSCAPE_VIEWER'))

if(class_exists('EVERYSCAPE_VIEWER'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('EVERYSCAPE_VIEWER', 'activate'));
	register_deactivation_hook(__FILE__, array('EVERYSCAPE_VIEWER', 'deactivate'));

	// instantiate the plugin class
	$everyscape_viewer = new EVERYSCAPE_VIEWER();
}
