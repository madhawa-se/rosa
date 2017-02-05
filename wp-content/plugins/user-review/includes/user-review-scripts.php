<?php
//echo("working");

function ur_add_scripts(){
	wp_enqueue_style("ur-main-style",plugins_url()."/user-review/css/style.css");
	wp_enqueue_script("ur-main-script",plugins_url()."/user-review/js/main.js");
}

add_action('wp_enqueue_scripts','ur_add_scripts');

