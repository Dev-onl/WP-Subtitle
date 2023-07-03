<?php
/**
 * OM MAHA GANAPATHAY NAMAHA
 * Plugin Name: WordPress Subtitle
 * Description: Adds a subtitle field under the title of posts, pages, and custom post types.
 * Version: 1.0.0
 * Author: Bharath Kumar Reddy
 */ 

if (!function_exists('dev_onl_wp_subtitle')){
	

	// Add a menu item under "Settings"
	function dev_onl_wp_subtitle_plugin_menu() {
	    add_options_page(
	        'Custom Subtitle Plugin Settings',
	        'Custom Subtitle Plugin',
	        'manage_options',
	        'custom-subtitle-plugin',
	        'dev_onl_wp_subtitle_plugin_options_page'
	    );
	}
}
add_action('admin_menu', 'dev_onl_wp_subtitle_plugin_menu');