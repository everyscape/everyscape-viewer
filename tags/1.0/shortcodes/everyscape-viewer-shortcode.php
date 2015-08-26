<?php
if(!class_exists('EveryScape_Viewer_Shortcode'))
{
	class EveryScape_Viewer_Shortcode
	{
        /**
         *
         */
		public function __construct()
		{
            // Register shortcode
            add_shortcode('everyscape_viewer', array($this, 'everyscape_viewer_shortcode'));
		} // END public function __construct


        /**
         *
         */
        public static function get_instance()
        {
            // Create an object
            NULL === self::$instance and self::$instance = new self;

            return self::$instance; // return the object
        }

         /**
         *
         */
        public function everyscape_viewer_shortcode($atts) {
            $a = shortcode_atts(array(
                    'width' => '480',
                    'height' => '300',
                    'script' => '',
                    'tour' => '',
                    'panorama' => '248400'
           ), $atts);

            $type = '';
            $html_a = "<script type='text/javascript' src='http://sapi.everyscape.com/api.js?key=embed&embedId=";
            $html_b = "&embedWidth={$a['width']}&embedHeight={$a['height']}'></script>";

            if ($a['script']) {
                $type = "script:{$a['script']}";
            }
            else if ($a['tour']) {
                $type = "tour:{$a['tour']}";
            }
            else if ($a['panorama']) {
                $note = '<p>panorama</p>';
                $type = "panorama:{$a['panorama']}";
            }
            else {
                $html_a = '';
                $html_b = '';
            }

            return "<div>" . $html_a . $type . $html_b . "</div>";
        }
    }
}