<?php
/**
 * CSS related hooks.
 *
 * This file contains hook functions which are related to CSS.
 *
 * @package Photomania
 */

if ( ! function_exists( 'photomania_trigger_custom_css_action' ) ) :

	/**
	 * Do action theme custom CSS.
	 *
	 * @since 1.0.0
	 */
	function photomania_trigger_custom_css_action() {

		/**
		 * Hook - photomania_action_theme_custom_css.
		 *
		 * @hooked photomania_add_option_custom_css - 99
		 */
		do_action( 'photomania_action_theme_custom_css' );

	}

endif;

add_action( 'wp_head', 'photomania_trigger_custom_css_action', 99 );

if ( ! function_exists( 'photomania_add_option_custom_css' ) ) :

	/**
	 * Add custom CSS.
	 *
	 * @since 1.0.0
	 */
	function photomania_add_option_custom_css() {

		$custom_css = photomania_get_option( 'custom_css' );
		$output = '';
		if ( ! empty( $custom_css ) ) {
			$output = "\n" . '<style type="text/css">' . "\n";
			$output .= wp_strip_all_tags( $custom_css );
			$output .= "\n" . '</style>' . "\n" ;
		}
		echo $output;

	}

endif;

add_action( 'photomania_action_theme_custom_css', 'photomania_add_option_custom_css', 99 );
