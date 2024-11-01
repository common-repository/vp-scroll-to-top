<?php 

/*
Plugin Name: VP Scroll to Top
Plugin URI:http://virtualproducts.org/pluginscrolltotop/
Description: This plugin will be show  Just another  scroll to top plugin that displays a back to top button at the lower right corner of your current page. 
Author: Virtual Products
Version:1.0
Author URI:www.virtualproducts.org
*/

/* Adding Latest jQuery from Wordpress */
function vp_scroll_to_top_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'vp_scroll_to_top_latest_jquery');

/*Some Set-up*/

define ('vp_PLUGIN_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );

wp_enqueue_script('vp_jquary_easing', vp_PLUGIN_URL.'js/jquery.easing.min.js', array('jquery') );
wp_enqueue_script('vp_jquary_main_scrollup', vp_PLUGIN_URL.'js/jquery.scrollUp.min.js', array('jquery') );
wp_enqueue_script('vp_jquary_active', vp_PLUGIN_URL.'js/active.js', array('jquery') );



wp_enqueue_style('vp_scroll_plugin_css', vp_PLUGIN_URL.'css/style.css' );




?>