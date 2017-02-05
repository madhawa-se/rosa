<?php			

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */

function reception_customizer( $wp_customize ) {

	$wp_customize->add_section(
		'reception_section_general',
		array(
			'title' => __('General Settings','reception'),
			'description' => __('This controls various general theme settings.','reception'),
			'priority' => 5,
		)
	);

	$wp_customize->add_section(
		'reception_section_homepage',
		array(
			'title' => __('Homepage Settings','reception'),
			'description' => __('This controls various homepage theme settings. Create or edit a static page and set it to use the "Homepage" custom page template. Then go to Settings > Reading and set this page as your homepage.','reception'),
			'priority' => 25,
		)
	);

	$wp_customize->add_setting( 
		'reception_logo_upload',
		array(
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Upload_Control(
			$wp_customize,
			'file-upload',
			array(
				'label' => __('Logo File Upload','reception'),
				'section' => 'reception_section_general',
				'settings' => 'reception_logo_upload'
			)
		)
	);

	$wp_customize->add_setting(
		'reception_display_contacts', 
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_html',
			'default' => '0',
	));
	
	$wp_customize->add_control(
		'reception_display_contacts', 
		array(
			'label'      => __('Display Contacts in Header', 'reception'),
			'section'    => 'reception_section_general',
			'type'    => 'checkbox',
	));

	$wp_customize->add_setting(
		'reception_header_telephone',
		array(
			'default' => '',
			'sanitize_callback' => 'esc_html',
		)
	);

	$wp_customize->add_control(
		'reception_header_telephone',
		array(
			'label' => __('Contact: Telephone','reception'),
			'section' => 'reception_section_general',
			'type' => 'text',
		)
	);
	
	$wp_customize->add_setting(
		'reception_header_address',
		array(
			'default' => '',
			'sanitize_callback' => 'esc_html',
		)
	);

	$wp_customize->add_control(
		'reception_header_address',
		array(
			'label' => __('Contact: Address','reception'),
			'section' => 'reception_section_general',
			'type' => 'text',
		)
	);
	
	$wp_customize->add_setting(
		'reception_header_email',
		array(
			'default' => '',
			'sanitize_callback' => 'esc_html',
		)
	);

	$wp_customize->add_control(
		'reception_header_email',
		array(
			'label' => __('Contact: Email','reception'),
			'section' => 'reception_section_general',
			'type' => 'text',
		)
	);

	$copyright_default = __('Copyright &copy; ','reception') . date("Y",time()) . ' ' . get_bloginfo('name') . '. ' . __('All Rights Reserved', 'reception');
	$wp_customize->add_setting(
		'reception_copyright_text',
		array(
			'default' => $copyright_default,
			'sanitize_callback' => 'esc_html',
		)
	);

	$wp_customize->add_control(
		'reception_copyright_text',
		array(
			'label' => __('Copyright text in Footer','reception'),
			'section' => 'reception_section_general',
			'type' => 'text',
		)
	);

	$wp_customize->add_setting(
		'reception_display_slideshow', 
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_html',
			'default' => '0',
	));
	
	$wp_customize->add_control(
		'reception_display_slideshow',
		array(
			'label'      => __('Display Slideshow', 'reception'),
			'section'    => 'reception_section_homepage',
			'type'    => 'checkbox',
	));

	$wp_customize->add_setting(
		'reception_slideshow_autoplay', 
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_html',
			'default' => '0',
	));
	
	$wp_customize->add_control(
		'reception_slideshow_autoplay', 
		array(
			'label'      => __('Autoplay Slideshow', 'reception'),
			'section'    => 'reception_section_homepage',
			'type'    => 'checkbox',
	));

	$wp_customize->add_setting(
		'reception_page_slideshow', 
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'reception_sanitize_integer',
	));
	
	$wp_customize->add_control(
		'reception_page_slideshow', 
		array(
			'label'      => __('Slideshow Page (with images)', 'reception'),
			'section'    => 'reception_section_homepage',
			'type'    => 'dropdown-pages',
	));

	$wp_customize->add_setting(
		'reception_slideshow_number',
		array(
			'default' => '5',
			'sanitize_callback' => 'reception_sanitize_integer',
		)
	);

	$wp_customize->add_control(
		'reception_slideshow_number',
		array(
			'label' => __('Number of Images to Display','reception'),
			'section' => 'reception_section_homepage',
			'type' => 'text',
		)
	);	

	$wp_customize->add_setting(
		'reception_slideshow_speed',
		array(
			'default' => '5000',
			'sanitize_callback' => 'reception_sanitize_integer',
		)
	);

	$wp_customize->add_control(
		'reception_slideshow_speed',
		array(
			'label' => __('Slideshow Autoplay Speed (in milliseconds)','reception'),
			'section' => 'reception_section_homepage',
			'type' => 'text',
		)
	);	

	$wp_customize->add_setting(
		'reception_display_feat_pages', 
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_html',
			'default' => '0',
	));
	
	$wp_customize->add_control(
		'reception_display_feat_pages', 
		array(
			'label'      => __('Display Featured Pages', 'reception'),
			'section'    => 'reception_section_homepage',
			'type'    => 'checkbox',
	));

	$wp_customize->add_setting(
		'reception_page_feat_1', 
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'reception_sanitize_integer',
	));
	
	$wp_customize->add_control(
		'reception_page_feat_1', 
		array(
			'label'      => __('Featured Page #1', 'reception'),
			'section'    => 'reception_section_homepage',
			'type'    => 'dropdown-pages',
	));
	
	$wp_customize->add_setting(
		'reception_page_feat_2', 
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'reception_sanitize_integer',
	));
	
	$wp_customize->add_control(
		'reception_page_feat_2', 
		array(
			'label'      => __('Featured Page #2', 'reception'),
			'section'    => 'reception_section_homepage',
			'type'    => 'dropdown-pages',
	));
	
	$wp_customize->add_setting(
		'reception_page_feat_3', 
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'reception_sanitize_integer',
	));
	
	$wp_customize->add_control(
		'reception_page_feat_3', 
		array(
			'label'      => __('Featured Page #3', 'reception'),
			'section'    => 'reception_section_homepage',
			'type'    => 'dropdown-pages',
	));

}
add_action( 'customize_register', 'reception_customizer' );

function reception_sanitize_integer( $input ) {
	if( is_numeric( $input ) ) {
		return intval( $input );
	}
}