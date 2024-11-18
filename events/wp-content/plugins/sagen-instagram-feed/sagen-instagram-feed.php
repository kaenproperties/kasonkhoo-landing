<?php
/*
Plugin Name: Sagen Instagram Feed
Description: Plugin that adds Instagram feed functionality to our theme
Author: Select Themes
Version: 2.0
*/
define('SAGEN_INSTAGRAM_FEED_VERSION', '2.0');
define('SAGEN_INSTAGRAM_ABS_PATH', dirname(__FILE__));
define('SAGEN_INSTAGRAM_REL_PATH', dirname(plugin_basename(__FILE__ )));
define( 'SAGEN_INSTAGRAM_URL_PATH', plugin_dir_url( __FILE__ ) );
define( 'SAGEN_INSTAGRAM_ASSETS_PATH', SAGEN_INSTAGRAM_ABS_PATH . '/assets' );
define( 'SAGEN_INSTAGRAM_ASSETS_URL_PATH', SAGEN_INSTAGRAM_URL_PATH . 'assets' );
define( 'SAGEN_INSTAGRAM_SHORTCODES_PATH', SAGEN_INSTAGRAM_ABS_PATH . '/shortcodes' );
define( 'SAGEN_INSTAGRAM_SHORTCODES_URL_PATH', SAGEN_INSTAGRAM_URL_PATH . 'shortcodes' );

include_once 'load.php';

if ( ! function_exists( 'sagen_instagram_theme_installed' ) ) {
    /**
     * Checks whether theme is installed or not
     * @return bool
     */
    function sagen_instagram_theme_installed() {
        return defined( 'SAGEN_SELECT_ROOT' );
    }
}

if ( ! function_exists( 'sagen_instagram_feed_text_domain' ) ) {
	/**
	 * Loads plugin text domain so it can be used in translation
	 */
	function sagen_instagram_feed_text_domain() {
		load_plugin_textdomain( 'sagen-instagram-feed', false, SAGEN_INSTAGRAM_REL_PATH . '/languages' );
	}
	
	add_action( 'plugins_loaded', 'sagen_instagram_feed_text_domain' );
}