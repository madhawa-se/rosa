<?php
/*
*Plugin Name:wp widget
*Description:Add user review section
*version:1.0
*Author:Madhawa priyashantha 
*Text Domain:wp-widget
*/
require_once(plugin_dir_path(__FILE__)."/wpd_class.php");

//Load scripts

function urev_add_scripts(){
	wp_enqueue_style("urev-main-style",plugins_url()."/wpb_widget/css/style.css");
	//wp_enqueue_script("ur-main-script",plugins_url()."/user-review/js/main.js");
}

add_action('wp_enqueue_scripts','urev_add_scripts');


// Register and load the widget
function wpb2_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb2_load_widget' );
