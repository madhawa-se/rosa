<?php

/***************** EXCERPT LENGTH ************/
function foodeez_lite_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'foodeez_lite_excerpt_length');

/***************** READ MORE ****************/
function foodeez_lite_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'foodeez_lite_excerpt_more');


/*********************************************
*   LIMIT WORDS
*********************************************/

function foodeez_lite_slider_limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}