<?php
/*
*Plugin Name:user review
*Description:Add user review section
*version:1.0
*Author:Madhawa priyashantha 
*Text Domain:user-review
*/

require_once(plugin_dir_path(__FILE__)."/includes/user-review-scripts.php");
require_once(plugin_dir_path(__FILE__)."/includes/user-review-class.php");


function wpb_load_widget() {
	   register_widget( 'user_review_widget');
}
add_action('widgets_init','wpb_load_widget');