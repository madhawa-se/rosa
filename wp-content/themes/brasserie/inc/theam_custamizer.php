<?php

function md_custimize_register( $wp_customize ) {

	$wp_customize->add_panel( 'panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'sub theam options', 'mytheme' ),
		'description' => __( 'Several settings pertaining my theme', 'mytheme' ),
	) );
	$wp_customize->add_panel( 'panel_id2', array(
		'priority' => 11,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'pricing options', 'mytheme' ),
		'description' => __( 'Several settings pertaining my theme', 'mytheme' ),
	) );

	//fields

	$wp_customize->add_setting( 'header_bg_color', array(
		'default' => '#4285f4',
		'transport' => 'refresh'
	) );

	$wp_customize->add_setting( 'mad_theam_contact_email', array(
		'default' => 'your.email.xmail.com',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_theam_contact_address1', array(
		'default' => 'address 1',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_theam_contact_address2', array(
		'default' => 'address 2',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_theam_contact_address3', array(
		'default' => 'address 3',
		'transport' => 'refresh'
	) );

	$wp_customize->add_setting( 'mad_theam_contact_phone1', array(
		'default' => '07x - xxx xxx x',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_theam_contact_phone2', array(
		'default' => '+94x - xxx xxx x',
		'transport' => 'refresh'
	) );


	$wp_customize->add_setting( 'mad_pricing_block1_title', array(
		'default' => 'Title',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_pricing_block1_price', array(
		'default' => '1000',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_pricing_block1_description', array(
		'default' => 'two rooms + pool',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_pricing_block1_color', array(
		'default' => '#F55353',
		'transport' => 'refresh'
	) );

	$wp_customize->add_setting( 'mad_pricing_block2_title', array(
		'default' => 'Title',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_pricing_block2_price', array(
		'default' => '1000',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_pricing_block2_description', array(
		'default' => 'two rooms + pool',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_pricing_block2_color', array(
		'default' => '#F55353',
		'transport' => 'refresh'
	) );

	$wp_customize->add_setting( 'mad_pricing_block3_title', array(
		'default' => 'Title',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_pricing_block3_price', array(
		'default' => '1000',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_pricing_block3_description', array(
		'default' => 'two rooms + pool',
		'transport' => 'refresh'
	) );
	$wp_customize->add_setting( 'mad_pricing_block3_color', array(
		'default' => '#F55353',
		'transport' => 'refresh'
	) );
	// end fields

	//begin settings
	$wp_customize->add_section( 'ju_color_theam_section', array(
		'title' => __( 'color', 'mad' ),
		'priority' => 30,
		'panel' => 'panel_id',

	) );
	$wp_customize->add_section( 'mad_section_email', array(
		'title' => __( 'email', 'mad' ),
		'priority' => 31,
		'panel' => 'panel_id',

	) );

	$wp_customize->add_section( 'mad_section_address', array(
		'title' => __( 'address', 'mad' ),
		'priority' => 31,
		'panel' => 'panel_id',

	) );

	$wp_customize->add_section( 'mad_section_phone', array(
		'title' => __( 'phone', 'mad' ),
		'priority' => 31,
		'panel' => 'panel_id',

	) );

	$wp_customize->add_section( 'mad_section_pricing1', array(
		'title' => __( 'plan 1', 'mad' ),
		'priority' => 31,
		'panel' => 'panel_id2',

	) );

	$wp_customize->add_section( 'mad_section_pricing2', array(
		'title' => __( 'plan 2', 'mad' ),
		'priority' => 31,
		'panel' => 'panel_id2',

	) );

	$wp_customize->add_section( 'mad_section_pricing3', array(
		'title' => __( 'plan 3', 'mad' ),
		'priority' => 31,
		'panel' => 'panel_id2',

	) );


	// end settings

	//begin controls

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_colors', array(
		'lable' => __( 'Header color', 'udemy' ),
		'section' => 'ju_color_theam_section',
		'settings' => 'header_bg_color'

	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mad_lable_contact_email', array(
		'label' => 'email address',
		'type' => 'text',
		'section' => 'mad_section_email',
		'settings' => 'mad_theam_contact_email'
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mad_lable_contact_address1', array(
		'label' => 'address 1',
		'type' => 'text',
		'section' => 'mad_section_address',
		'settings' => 'mad_theam_contact_address1'
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mad_lable_contact_address2', array(
		'label' => 'address 2',
		'type' => 'text',
		'section' => 'mad_section_address',
		'settings' => 'mad_theam_contact_address2'
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mad_lable_contact_address3', array(
		'label' => 'address 3',
		'type' => 'text',
		'section' => 'mad_section_address',
		'settings' => 'mad_theam_contact_address3'
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mad_lable_contact_phone1', array(
		'label' => 'phone 1',
		'type' => 'text',
		'section' => 'mad_section_phone',
		'settings' => 'mad_theam_contact_phone1'
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mad_lable_contact_phone2', array(
		'label' => 'phone 2',
		'type' => 'text',
		'section' => 'mad_section_phone',
		'settings' => 'mad_theam_contact_phone2'
	) ) );


	///////////////////////////////////////////////////////////
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pricing_block1_color', array(
		'lable' => __( 'color', 'udemy' ),
		'section' => 'mad_section_pricing1',
		'settings' => 'mad_pricing_block1_color'

	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pricing_block1_title', array(
		'label' => 'title',
		'type' => 'text',
		'section' => 'mad_section_pricing1',
		'settings' => 'mad_pricing_block1_title'
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pricing_block1_price', array(
		'label' => 'price',
		'type' => 'text',
		'section' => 'mad_section_pricing1',
		'settings' => 'mad_pricing_block1_price'
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pricing_block1_description', array(
		'label' => 'description',
		'type' => 'text',
		'section' => 'mad_section_pricing1',
		'settings' => 'mad_pricing_block1_description'
	) ) );

	////////////////////////////////////////////////
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pricing_block2_color', array(
		'lable' => __( 'color', 'udemy' ),
		'section' => 'mad_section_pricing2',
		'settings' => 'mad_pricing_block2_color'

	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pricing_block2_title', array(
		'label' => 'title',
		'type' => 'text',
		'section' => 'mad_section_pricing2',
		'settings' => 'mad_pricing_block2_title'
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pricing_block2_price', array(
		'label' => 'price',
		'type' => 'text',
		'section' => 'mad_section_pricing2',
		'settings' => 'mad_pricing_block2_price'
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pricing_block2_description', array(
		'label' => 'description',
		'type' => 'text',
		'section' => 'mad_section_pricing2',
		'settings' => 'mad_pricing_block2_description'
	) ) );
	////////////////////////////////////////////////
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pricing_block3_color', array(
		'lable' => __( 'color', 'udemy' ),
		'section' => 'mad_section_pricing3',
		'settings' => 'mad_pricing_block3_color'

	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pricing_block3_title', array(
		'label' => 'title',
		'type' => 'text',
		'section' => 'mad_section_pricing3',
		'settings' => 'mad_pricing_block3_title'
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pricing_block3_price', array(
		'label' => 'price',
		'type' => 'text',
		'section' => 'mad_section_pricing3',
		'settings' => 'mad_pricing_block3_price'
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pricing_block3_description', array(
		'label' => 'description',
		'type' => 'text',
		'section' => 'mad_section_pricing3',
		'settings' => 'mad_pricing_block3_description'
	) ) );


}