<?php
add_action('tgmpa_register', 'chinese_register_required_plugins');
function chinese_register_required_plugins()
{
    $plugins = array(

        array(
            'name' => 'Ketchup Restaurant Reservations',
            'slug' => 'ketchup-restaurant-reservations',
            'required' => false
        ),
        array(
            'name' => 'Contact Form 7',
            'slug' => 'contact-form-7',
            'required' => false,
        ),
        array(
            'name'      => 'Bootstrap 3 Shortcodes',
            'slug'      => 'bootstrap-3-shortcodes',
            'required'  => false,
        ),
        array(
            'name'      => 'Ketchup Shortcodes',
            'slug'      => 'ketchup-shortcodes-pack',
            'required'  => false,
        )

    );
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu' => 'tgmpa-install-plugins', // Menu slug.
        'has_notices' => true,                    // Show admin notices or not.
        'dismissable' => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message' => '',                      // Message to output right before the plugins table.
        'strings' => array(
            'page_title' => __('Install Required Plugins', 'chinese-restaurant'),
            'menu_title' => __('Install Plugins', 'chinese-restaurant'),
            'installing' => __('Installing Plugin: %s', 'chinese-restaurant'), // %s = plugin name.
            'oops' => __('Something went wrong with the plugin API.', 'chinese-restaurant'),
            'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'chinese-restaurant'), // %1$s = plugin name(s).
            'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'chinese-restaurant'), // %1$s = plugin name(s).
            'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'chinese-restaurant'), // %1$s = plugin name(s).
            'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'chinese-restaurant'), // %1$s = plugin
            // name(s).
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'chinese-restaurant'), // %1$s =
            // plugin name(s).
            'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'chinese-restaurant'), // %1$s = plugin name(s).
            'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.'), // %1$s = plugin name(s).
            'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'chinese-restaurant'), // %1$s = plugin name(s).
            'install_link' => _n_noop('Begin installing plugin', 'Begin
            installing plugins', 'chinese-restaurant'),
            'activate_link' => _n_noop('Begin activating plugin', 'Begin
            activating plugins', 'chinese-restaurant'),
            'return' => __('Return to Required Plugins Installer', 'chinese-restaurant'),
            'plugin_activated' => __('Plugin activated successfully.', 'chinese-restaurant'),
            'complete' => __('All plugins installed and activated successfully. %s', 'chinese-restaurant'), // %s = dashboard link.
            'nag_type' => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa($plugins, $config);
}

/** CUSTOMIZER **/

function chinese_customizer($wp_customize)
{

    /** GENERAL SECTION Options**/

    $wp_customize->add_section(
        'general_settings_section',
        array(
            'title' => __('General Settings', 'chinese-restaurant'),
            'description' => __('General Settings for this theme.', 'chinese-restaurant'),
            'priority' => 10,
        )
    );

    /** Register Settings **/

    $wp_customize->add_setting(
        'chinese_favicon_upload',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_setting(
        'chinese_logo_upload',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_setting(
        'chinese_no_image_upload',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );


    /** Register Controls **/

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'chinese_favicon',
            array(
                'label' => __('Upload a favicon', 'chinese-restaurant'),
                'section' => 'general_settings_section',
                'settings' => 'chinese_favicon_upload',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'chinese_logo',
            array(
                'label' => __('Upload a logo', 'chinese-restaurant'),
                'section' => 'general_settings_section',
                'settings' => 'chinese_logo_upload',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'chinese_no_image',
            array(
                'label' => __('Upload a no image ', 'chinese-restaurant'),
                'section' => 'general_settings_section',
                'settings' => 'chinese_no_image_upload',
            )
        )
    );


    /** HEADER IMAGES **/

    $wp_customize->add_section(
        'header_images_settings_section',
        array(
            'title' => __('Header Images', 'chinese-restaurant'),
            'description' => __('The header images that are visible in specific pages like
            category, archive, tag, etc.',
                'chinese-restaurant'),
            'priority' => 11,
        )
    );


    /** Settings **/
    $wp_customize->add_setting(
        'chinese_category_header_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_setting(
        'chinese_tag_header_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_setting(
        'chinese_archive_header_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_setting(
        'chinese_search_header_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );


    /** Controls **/

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'chinese_category_header',
            array(
                'label' => __('Category Header Image ', 'chinese-restaurant'),
                'section' => 'header_images_settings_section',
                'settings' => 'chinese_category_header_image',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'chinese_tag_header',
            array(
                'label' => __('Tag Header Image ', 'chinese-restaurant'),
                'section' => 'header_images_settings_section',
                'settings' => 'chinese_tag_header_image',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'chinese_archive_header',
            array(
                'label' => __('Archive Header Image ', 'chinese-restaurant'),
                'section' => 'header_images_settings_section',
                'settings' => 'chinese_archive_header_image',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'chinese_search_header',
            array(
                'label' => __('Search Header Image ', 'chinese-restaurant'),
                'section' => 'header_images_settings_section',
                'settings' => 'chinese_search_header_image',
            )
        )
    );

    /** STYLING OPTIONS  **/

    $wp_customize->add_panel('chinese_typography_panel', array(
        'priority' => 12,
        'title' => __('Styling', 'chinese-restaurant'),
        'description' => __('Description of what this panel does.', 'textdomain'),
    ));

    /** STYLING SECTIONS **/

    $wp_customize->add_section(
        'social_icon_styles',
        array(
            'title' => __('Social Icon Styles (Social Widget).', 'chinese-restaurant'),
            'description' => __('CSS styles of the social icons.',
                'chinese-restaurant'),
            'priority' => 11,
            'panel' => 'chinese_typography_panel'
        )
    );

    $wp_customize->add_section(
        'navigation_styles',
        array(
            'title' => __('Navigation Styles.', 'chinese-restaurant'),
            'description' => __('CSS styles of the navigation menus.Change link colors,
            hovers, sub-menu colors.',
                'chinese-restaurant'),
            'priority' => 12,
            'panel' => 'chinese_typography_panel'
        )
    );

    $wp_customize->add_section(
        'general_styles',
        array(
            'title' => __('General Element Styles.', 'chinese-restaurant'),
            'description' => __('CSS styles of the general elements like body colors,
            paragraph colors', 'chinese-restaurant'),
            'priority' => 13,
            'panel' => 'chinese_typography_panel'
        )
    );

    $wp_customize->add_section(
        'comment_styles',
        array(
            'title' => __('Comment Styles.', 'chinese-restaurant'),
            'description' => __('CSS styles of the comment section.',
                'chinese-restaurant'),
            'priority' => 14,
            'panel' => 'chinese_typography_panel'
        )
    );

    $wp_customize->add_section(
        'sidebars_styles',
        array(
            'title' => __('Sidebar Styles.', 'chinese-restaurant'),
            'description' => __('CSS styles of the main sidebar styles.',
                'chinese-restaurant'),
            'priority' => 15,
            'panel' => 'chinese_typography_panel'
        )
    );

    $wp_customize->add_section(
        'specific_widget_styles',
        array(
            'title' => __('Specific Widget styles.', 'chinese-restaurant'),
            'description' => __('CSS styles of specific widgets.',
                'chinese-restaurant'),
            'priority' => 16,
            'panel' => 'chinese_typography_panel'
        )
    );

    $wp_customize->add_section(
        'footer-area',
        array(
            'title' => __('Footer Area.', 'chinese-restaurant'),
            'description' => __('CSS style of the footer.',
                'chinese-restaurant'),
            'priority' => 17,
            'panel' => 'chinese_typography_panel'
        )
    );

    $wp_customize->add_section(
        'footer_widget_styles',
        array(
            'title' => __('Footer widget styles.', 'chinese-restaurant'),
            'description' => __('CSS styles of the footer styles.',
                'chinese-restaurant'),
            'priority' => 18,
            'panel' => 'chinese_typography_panel'
        )
    );

    $wp_customize->add_section(
        'copyright_styles',
        array(
            'title' => __('Copyright styles.', 'chinese-restaurant'),
            'description' => __('CSS styles of the copyright area.',
                'chinese-restaurant'),
            'priority' => 19,
            'panel' => 'chinese_typography_panel'
        )
    );

    $wp_customize->add_section(
        'other_styles',
        array(
            'title' => __('Other Styles.', 'chinese-restaurant'),
            'description' => __('CSS styles other elements.',
                'chinese-restaurant'),
            'priority' => 20,
            'panel' => 'chinese_typography_panel'
        )
    );


    /** STYLING SETTINGS **/

    /** Social Icons Widget */
    $wp_customize->add_setting(
        'chinese_social_icon_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_social_icon_background_color',
        array(
            'default' => '#d0d1d2',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_social_icon_hover_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_social_icon_background_hover_color',
        array(
            'default' => '#F28A0E',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );


    /** Navigation Styles Control  **/

    $wp_customize->add_setting(
        'chinese_current_menu_color',
        array(
            'default' => '#f28a0e',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_menu_link_color',
        array(
            'default' => '#999B9D',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_menu_link_hover_color',
        array(
            'default' => '#f28a0e',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_submenu_background',
        array(
            'default' => '#000000',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_submenu_hover_background',
        array(
            'default' => '#1C1C1C',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_submenu_links_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_submenu_links_hover_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    /** Main Elements Styling **/

    $wp_customize->add_setting(
        'chinese_headings_color',
        array(
            'default' => '#F28A0F',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_links_color',
        array(
            'default' => '#f28a0e',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_setting(
        'chinese_links_hover_color',
        array(
            'default' => '#ba6a0b',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_main_color',
        array(
            'default' => '#000000',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    /*** Comment STYLES **/

    $wp_customize->add_setting(
        'chinese_comment_headings_color',
        array(
            'default' => '#F28A0E',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_comment_links_color',
        array(
            'default' => '#F28A0E',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_comment_links_hover_color',
        array(
            'default' => '#ba6a0b',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_comment_button_color',
        array(
            'default' => '#F28A0E',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_comment_button_text_color',
        array(
            'default' => '#000000',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_comment_button_hover_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_comment_button_text_hover_color',
        array(
            'default' => '#F28A0E',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    /** SIDEBARS Styles **/

    $wp_customize->add_setting(
        'chinese_widget_headings',
        array(
            'default' => '#F28A0E',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_widget_links_color',
        array(
            'default' => '#F28A0E',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_widget_links_hover_color',
        array(
            'default' => '#ba6a0b',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_widget_body_color',
        array(
            'default' => '#000000',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    /** Specific Widget Settings **/

    $wp_customize->add_setting(
        'chinese_tag_bg_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_tag_text_color',
        array(
            'default' => '#f28a0e',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_tag_bg_hover_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_tag_text_hover_color',
        array(
            'default' => '#000000',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_calendar_header_color',
        array(
            'default' => '#f28a0e',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_calendar_header_text_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_calendar_link_backrground_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_calendar_link_hover_backrground_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );


    /*** Footer Area  ***/

    $wp_customize->add_setting(
        'chinese_footer_background_color',
        array(
            'default' => '#ebebeb',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    /** Footer Widgets **/

    $wp_customize->add_setting(
        'chinese_footerwidget_headings',
        array(
            'default' => '#f28a0e',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_footerwidget_links_color',
        array(
            'default' => '#f28a0e',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_footerwidget_links_hover_color',
        array(
            'default' => '#A7A7A7',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_footerwidget_body_color',
        array(
            'default' => '#000000',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_footer_tag_bg_color',
        array(
            'default' => '#f28a0e',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_footer_tag_text_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_footer_tag_bg_hover_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_footer_tag_text_hover_color',
        array(
            'default' => '#000000',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );


    /** Copyright settings **/

    $wp_customize->add_setting(
        'chinese_copyright_background_color',
        array(
            'default' => '#e0e0e0',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_copyright_links_color',
        array(
            'default' => '#f28a0e',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_copyright_links_hover_color',
        array(
            'default' => '#ba6a0b',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_setting(
        'chinese_copyright_text_color',
        array(
            'default' => '#939598',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );


    /*** Other Style settings **/

    $wp_customize->add_setting(
        'chinese_slide_title_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );


    $wp_customize->add_setting(
        'chinese_pager_background_color',
        array(
            'default' => '#F1890C',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );


    /*************************
     * STYLING CONTROLS
     *************************/

    /** Social Icons Widget **/

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_social_icon_color
            ',
            array(
                'label' => __('Color of the social icon.', 'chinese-restaurant'),
                'section' => 'social_icon_styles',
                'settings' => 'chinese_social_icon_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_social_icon_background_color',
            array(
                'label' => __('Background color of the icon.', 'chinese-restaurant'),
                'section' => 'social_icon_styles',
                'settings' => 'chinese_social_icon_background_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_social_icon_hover_color',
            array(
                'label' => __('Icon color - hover state.', 'chinese-restaurant'),
                'section' => 'social_icon_styles',
                'settings' => 'chinese_social_icon_hover_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'burger_social_icon_background_hover_color',
            array(
                'label' => __('Background color - hover state.', 'chinese-restaurant'),
                'section' => 'social_icon_styles',
                'settings' => 'chinese_social_icon_background_hover_color',
            )
        )
    );

    /** Main Navigation Controls  **/

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_current_menu_color',
            array(
                'label' => __('Current Menu item color.', 'chinese-restaurant'),
                'section' => 'navigation_styles',
                'settings' => 'chinese_current_menu_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_menu_link_color',
            array(
                'label' => __('Menu link color.', 'chinese-restaurant'),
                'section' => 'navigation_styles',
                'settings' => 'chinese_menu_link_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_menu_link_hover_color',
            array(
                'label' => __('Menu link color - hover state.', 'chinese-restaurant'),
                'section' => 'navigation_styles',
                'settings' => 'chinese_menu_link_hover_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_submenu_background',
            array(
                'label' => __('Submenu background color.', 'chinese-restaurant'),
                'section' => 'navigation_styles',
                'settings' => 'chinese_submenu_background',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_submenu_hover_background',
            array(
                'label' => __('Submenu background color - hover state.',
                    'chinese-restaurant'),
                'section' => 'navigation_styles',
                'settings' => 'chinese_submenu_hover_background',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_submenu_links_color',
            array(
                'label' => __('Submenu link color.',
                    'chinese-restaurant'),
                'section' => 'navigation_styles',
                'settings' => 'chinese_submenu_links_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_submenu_links_hover_color',
            array(
                'label' => __('Submenu link color - hover color',
                    'chinese-restaurant'),
                'section' => 'navigation_styles',
                'settings' => 'chinese_submenu_links_hover_color',
            )
        )
    );

    /** Main elements **/

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_headings_color',
            array(
                'label' => __('H1-H6 heading color',
                    'chinese-restaurant'),
                'section' => 'general_styles',
                'settings' => 'chinese_headings_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_links_color',
            array(
                'label' => __('Applies to page links',
                    'chinese-restaurant'),
                'section' => 'general_styles',
                'settings' => 'chinese_links_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_links_hover_color',
            array(
                'label' => __('Applies to page links - hover state',
                    'chinese-restaurant'),
                'section' => 'general_styles',
                'settings' => 'chinese_links_hover_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_main_color',
            array(
                'label' => __('Applies to main body text',
                    'chinese-restaurant'),
                'section' => 'general_styles',
                'settings' => 'chinese_main_color',
            )
        )
    );


    /** Comment Controls */

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_comment_headings_color',
            array(
                'label' => __('Headings in comment section',
                    'chinese-restaurant'),
                'section' => 'comment_styles',
                'settings' => 'chinese_comment_headings_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_comment_links_color',
            array(
                'label' => __('Links in comment section',
                    'chinese-restaurant'),
                'section' => 'comment_styles',
                'settings' => 'chinese_comment_links_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_comment_links_hover_color',
            array(
                'label' => __('Links in comment section - Hover state',
                    'chinese-restaurant'),
                'section' => 'comment_styles',
                'settings' => 'chinese_comment_links_hover_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_comment_button_color',
            array(
                'label' => __('Submit comment button background',
                    'chinese-restaurant'),
                'section' => 'comment_styles',
                'settings' => 'chinese_comment_button_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_comment_button_text_color',
            array(
                'label' => __('Submit comment button text color.',
                    'chinese-restaurant'),
                'section' => 'comment_styles',
                'settings' => 'chinese_comment_button_text_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_comment_button_hover_color',
            array(
                'label' => __('Submit comment button background color - hover state.',
                    'chinese-restaurant'),
                'section' => 'comment_styles',
                'settings' => 'chinese_comment_button_hover_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_comment_button_text_hover_color',
            array(
                'label' => __('Submit comment button text color - hover state.',
                    'chinese-restaurant'),
                'section' => 'comment_styles',
                'settings' => 'chinese_comment_button_text_hover_color',
            )
        )
    );


    /** Sidebar Styles **/

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_widget_headings',
            array(
                'label' => __('Widget headings color.',
                    'chinese-restaurant'),
                'section' => 'sidebars_styles',
                'settings' => 'chinese_widget_headings',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_widget_links_color',
            array(
                'label' => __('Widget link color.',
                    'chinese-restaurant'),
                'section' => 'sidebars_styles',
                'settings' => 'chinese_widget_links_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_widget_links_hover_color',
            array(
                'label' => __('Widget link color - hover state',
                    'chinese-restaurant'),
                'section' => 'sidebars_styles',
                'settings' => 'chinese_widget_links_hover_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_widget_body_color',
            array(
                'label' => __('Widget text body color',
                    'chinese-restaurant'),
                'section' => 'sidebars_styles',
                'settings' => 'chinese_widget_body_color',
            )
        )
    );

    /*** Specific Widgets ***/

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_tag_bg_color',
            array(
                'label' => __('Tagcloud tag background color.',
                    'chinese-restaurant'),
                'section' => 'specific_widget_styles',
                'settings' => 'chinese_tag_bg_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_tag_text_color',
            array(
                'label' => __('Tagcloud text color.',
                    'chinese-restaurant'),
                'section' => 'specific_widget_styles',
                'settings' => 'chinese_tag_text_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_tag_bg_hover_color',
            array(
                'label' => __('Tagcloud background color - hover',
                    'chinese-restaurant'),
                'section' => 'specific_widget_styles',
                'settings' => 'chinese_tag_bg_hover_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_tag_text_hover_color',
            array(
                'label' => __('Tagcloud text color - hover.',
                    'chinese-restaurant'),
                'section' => 'specific_widget_styles',
                'settings' => 'chinese_tag_text_hover_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_calendar_header_color',
            array(
                'label' => __('Calendar widget header background color.',
                    'chinese-restaurant'),
                'section' => 'specific_widget_styles',
                'settings' => 'chinese_calendar_header_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_calendar_header_text_color',
            array(
                'label' => __('Calendar widget header text color.',
                    'chinese-restaurant'),
                'section' => 'specific_widget_styles',
                'settings' => 'chinese_calendar_header_text_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_calendar_link_backrground_color',
            array(
                'label' => __('Calendar widget link background color.',
                    'chinese-restaurant'),
                'section' => 'specific_widget_styles',
                'settings' => 'chinese_calendar_link_backrground_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_calendar_link_hover_backrground_color',
            array(
                'label' => __('Calendar widget link hover background color.',
                    'chinese-restaurant'),
                'section' => 'specific_widget_styles',
                'settings' => 'chinese_calendar_link_hover_backrground_color',
            )
        )
    );

    /** Footer Area **/

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_footer_background_color',
            array(
                'label' => __('Footer Background color.',
                    'chinese-restaurant'),
                'section' => 'footer-area',
                'settings' => 'chinese_footer_background_color',
            )
        )
    );

    /** Footer Widgets  **/

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_footerwidget_headings',
            array(
                'label' => __('Footer widget heading color.',
                    'chinese-restaurant'),
                'section' => 'footer_widget_styles',
                'settings' => 'chinese_footerwidget_headings',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_footerwidget_links_color',
            array(
                'label' => __('Footer widget links color.',
                    'chinese-restaurant'),
                'section' => 'footer_widget_styles',
                'settings' => 'chinese_footerwidget_links_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_footerwidget_links_hover_color',
            array(
                'label' => __('Footer widget links color - hover state.',
                    'chinese-restaurant'),
                'section' => 'footer_widget_styles',
                'settings' => 'chinese_footerwidget_links_hover_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_footerwidget_body_color',
            array(
                'label' => __('Footer widget body text color.',
                    'chinese-restaurant'),
                'section' => 'footer_widget_styles',
                'settings' => 'chinese_footerwidget_body_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_footer_tag_bg_color',
            array(
                'label' => __('Footer widget tagcloud background color.',
                    'chinese-restaurant'),
                'section' => 'footer_widget_styles',
                'settings' => 'chinese_footer_tag_bg_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_footer_tag_text_color',
            array(
                'label' => __('Footer widget tagcloud text color.',
                    'chinese-restaurant'),
                'section' => 'footer_widget_styles',
                'settings' => 'chinese_footer_tag_text_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_footer_tag_bg_hover_color_control',
            array(
                'label' => __('Footer widget tagcloud background color. hover state',
                    'chinese-restaurant'),
                'section' => 'footer_widget_styles',
                'settings' => 'chinese_footer_tag_bg_hover_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_footer_tag_text_hover_color',
            array(
                'label' => __('Footer widget tagcloud text color - hover state',
                    'chinese-restaurant'),
                'section' => 'footer_widget_styles',
                'settings' => 'chinese_footer_tag_text_hover_color',
            )
        )
    );


    /** Copyright area **/

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_copyright_background_color',
            array(
                'label' => __('Copyright area background color.',
                    'chinese-restaurant'),
                'section' => 'copyright_styles',
                'settings' => 'chinese_copyright_background_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_copyright_links_color',
            array(
                'label' => __('Copyright area links color.',
                    'chinese-restaurant'),
                'section' => 'copyright_styles',
                'settings' => 'chinese_copyright_links_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_copyright_links_hover_color',
            array(
                'label' => __('Copyright area links color - hover state.',
                    'chinese-restaurant'),
                'section' => 'copyright_styles',
                'settings' => 'chinese_copyright_links_hover_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_copyright_text_color',
            array(
                'label' => __('Copyright area text color - hover state.',
                    'chinese-restaurant'),
                'section' => 'copyright_styles',
                'settings' => 'chinese_copyright_text_color',
            )
        )
    );

    /** Other style controls */

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_slide_title_color',
            array(
                'label' => __('Slide title color.',
                    'chinese-restaurant'),
                'section' => 'other_styles',
                'settings' => 'chinese_slide_title_color',
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'chinese_pager_background_color',
            array(
                'label' => __('Slider pager background color.',
                    'chinese-restaurant'),
                'section' => 'other_styles',
                'settings' => 'chinese_pager_background_color',
            )
        )
    );

    /*** Social Networks ***/

    $wp_customize->add_section(
        'chinese_social_section',
        array(
            'title' => __('Social Networks', 'chinese-restaurant'),
            'description' => __('Add your social networks.',
                'chinese-restaurant'),
            'priority' => 13,
        )
    );

    /** Social Settings **/

    $wp_customize->add_setting(
        'chinese_facebook_url',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_setting(
        'chinese_twitter_url',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_setting(
        'chinese_google_plus_url',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_setting(
        'chinese_pinterest_url',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_setting(
        'chinese_linkedin_url',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_setting(
        'chinese_rss_url',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_setting(
        'chinese_stumbleupon_url',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_setting(
        'chinese_instagram_url',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_setting(
        'chinese_youtube_url',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_setting(
        'chinese_vimeo_url',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );


    /** Social Controls **/
    $wp_customize->add_control(
        'chinese_facebook_url',
        array(
            'label' => __('Facebook URL', 'chinese-restaurant'),
            'section' => 'chinese_social_section',
            'settings' => 'chinese_facebook_url',
            'type' => 'text'
        )
    );

    $wp_customize->add_control(
        'chinese_twitter_url',
        array(
            'label' => __('Twitter URL', 'chinese-restaurant'),
            'section' => 'chinese_social_section',
            'settings' => 'chinese_twitter_url',
            'type' => 'text'
        )
    );

    $wp_customize->add_control(
        'chinese_google_plus_url',
        array(
            'label' => __('Google plus URL', 'chinese-restaurant'),
            'section' => 'chinese_social_section',
            'settings' => 'chinese_google_plus_url',
            'type' => 'text'
        )
    );

    $wp_customize->add_control(
        'chinese_pinterest_url',
        array(
            'label' => __('Pinterest URL', 'chinese-restaurant'),
            'section' => 'chinese_social_section',
            'settings' => 'chinese_pinterest_url',
            'type' => 'text'
        )
    );

    $wp_customize->add_control(
        'chinese_linkedin_url',
        array(
            'label' => __('Linkedin URL', 'chinese-restaurant'),
            'section' => 'chinese_social_section',
            'settings' => 'chinese_linkedin_url',
            'type' => 'text'
        )
    );

    $wp_customize->add_control(
        'chinese_rss_url',
        array(
            'label' => __('RSS URL', 'chinese-restaurant'),
            'section' => 'chinese_social_section',
            'settings' => 'chinese_rss_url',
            'type' => 'text'
        )
    );

    $wp_customize->add_control(
        'chinese_stumbleupon_url',
        array(
            'label' => __('Stumbleupon URL', 'chinese-restaurant'),
            'section' => 'chinese_social_section',
            'settings' => 'chinese_stumbleupon_url',
            'type' => 'text'
        )
    );

    $wp_customize->add_control(
        'chinese_instagram_url_control',
        array(
            'label' => __('Instagram URL', 'chinese-restaurant'),
            'section' => 'chinese_social_section',
            'settings' => 'chinese_instagram_url',
            'type' => 'text'
        )
    );

    $wp_customize->add_control(
        'chinese_youtube_url',
        array(
            'label' => __('Youtube URL', 'chinese-restaurant'),
            'section' => 'chinese_social_section',
            'settings' => 'chinese_youtube_url',
            'type' => 'text'
        )
    );

    $wp_customize->add_control(
        'chinese_vimeo_url',
        array(
            'label' => __('Vimeo URL', 'chinese-restaurant'),
            'section' => 'chinese_social_section',
            'settings' => 'chinese_vimeo_url',
            'type' => 'text'
        )
    );


    /*** Slider Section **/

    $wp_customize->add_section(
        'chinese_slider_section',
        array(
            'title' => __('Slider Settings', 'chinese-restaurant'),
            'description' => __('Slider Settings.',
                'chinese-restaurant'),
            'priority' => 14,
        )
    );


    /** Slider Settings **/
    $wp_customize->add_setting(
        'chinese_slider_disable',
        array(
            'default' => '1',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_setting(
        'chinese_slides_number',
        array(
            'default' => '5',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_setting(
        'chinese_slider_show_pager',
        array(
            'default' => '0',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_setting(
        'chinese_slider_show_arrows',
        array(
            'default' => '1',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_setting(
        'chinese_slider_transition',
        array(
            'default' => 'fade',
            'sanitize_callback' => 'wp_kses_post'
        )
    );

    $wp_customize->add_setting(
        'chinese_slide_speed',
        array(
            'default' => '800',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_setting(
        'chinese_slide_pause',
        array(
            'default' => '3000',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_setting(
        'chinese_slider_autoplay',
        array(
            'default' => '1',
            'sanitize_callback' => 'absint'
        )
    );


    $wp_customize->add_control(
        'chinese_slider_disable',
        array(
            'type' => 'radio',
            'label' => __('Disable Slider', 'chinese-restaurant'),
            'section' => 'chinese_slider_section',
            'settings' => 'chinese_slider_disable',
            'choices' => array(
                '1' => __('Yes', 'chinese-restaurant'),
                '0' => __('No', 'chinese-restaurant')
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'chinese_slides_number',
            array(
                'label' => __('Slides Number', 'chinese-restaurant'),
                'section' => 'chinese_slider_section',
                'settings' => 'chinese_slides_number',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        'chinese_slider_show_pager',
        array(
            'type' => 'radio',
            'label' => __('Show pager?', 'chinese-restaurant'),
            'section' => 'chinese_slider_section',
            'settings' => 'chinese_slider_show_pager',
            'choices' => array(
                '0' => __('No', 'chinese-restaurant'),
                '1' => __('Yes', 'chinese-restaurant')
            )
        )
    );

    $wp_customize->add_control(
        'chinese_slider_show_arrows',
        array(
            'type' => 'radio',
            'label' => __('Show arrow navigation ?', 'chinese-restaurant'),
            'section' => 'chinese_slider_section',
            'settings' => 'chinese_slider_show_arrows',
            'choices' => array(
                '0' => __('No', 'chinese-restaurant'),
                '1' => __('Yes', 'chinese-restaurant')
            )
        )
    );

    $wp_customize->add_control(
        'chinese_slider_transition',
        array(
            'type' => 'select',
            'label' => __('Transition Type ?', 'chinese-restaurant'),
            'section' => 'chinese_slider_section',
            'settings' => 'chinese_slider_transition',
            'choices' => array(
                'fade' => __('Fade', 'chinese-restaurant'),
                'horizontal' => __('Horizontal', 'chinese-restaurant'),
                'vertical' => __('Vertical', 'chinese-restaurant'),
            )
        )
    );

    $wp_customize->add_control(
        'chinese_slide_speed',
        array(
            'type' => 'text',
            'label' => __('Slide speed ?', 'chinese-restaurant'),
            'section' => 'chinese_slider_section',
            'settings' => 'chinese_slide_speed'
        )
    );


    $wp_customize->add_control(
        'chinese_slide_pause',
        array(
            'type' => 'text',
            'label' => __('Pause between slides ?', 'chinese-restaurant'),
            'section' => 'chinese_slider_section',
            'settings' => 'chinese_slide_pause'
        )
    );

    $wp_customize->add_control(
        'chinese_slider_autoplay',
        array(
            'type' => 'radio',
            'label' => __('Autoplay?', 'chinese-restaurant'),
            'section' => 'chinese_slider_section',
            'settings' => 'chinese_slider_autoplay',
            'choices' => array(
                '0' => __('No', 'chinese-restaurant'),
                '1' => __('Yes', 'chinese-restaurant')
            )
        )
    );


    /*** Page Templates Section **/

    $wp_customize->add_section(
        'chinese_page_templates_section',
        array(
            'title' => __('Contact Page', 'chinese-restaurant'),
            'description' => __('Settings for page templates in this theme.',
                'chinese-restaurant'),
            'priority' => 15,
        )
    );


    /*** Page template settings **/

    $wp_customize->add_setting(
        'chinese_contact_google_map',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_setting(
        'chinese_contact_form_title',
        array(
            'default' => 'Send Enquiry',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_setting(
        'chinese_contact_form_shortcode',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );


    $wp_customize->add_setting(
        'chinese_contact_details_title',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_setting(
        'chinese_contact_details_address',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_setting(
        'chinese_contact_details_phone',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_setting(
        'chinese_contact_details_email',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_email'
        )
    );

    $wp_customize->add_setting(
        'chinese_monday_time',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_setting(
        'chinese_tuesday_time',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_setting(
        'chinese_wednesday_time',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_setting(
        'chinese_thursday_time',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_setting(
        'chinese_friday_time',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_setting(
        'chinese_saturday_time',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_setting(
        'chinese_sunday_time',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );


    /** Contact Page Controls */

    $wp_customize->add_control(
        'chinese_contact_google_map',
        array(
            'type' => 'textarea',
            'label' => __('Google Map . Please write only the source (src) of the iframe',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_contact_google_map'
        )
    );

    $wp_customize->add_control(
        'chinese_contact_form_title',
        array(
            'type' => 'text',
            'label' => __('Contact Form title.',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_contact_form_title'
        )
    );

    $wp_customize->add_control(
        'chinese_contact_form_shortcode',
        array(
            'type' => 'text',
            'label' => __('Contact Form shortcode.Paste the shortcode from the  "Contact form
             7"
            plugin.',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_contact_form_shortcode'
        )
    );

    $wp_customize->add_control(
        'chinese_contact_details_title',
        array(
            'type' => 'text',
            'label' => __('Contact details title.',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_contact_details_title'
        )
    );

    $wp_customize->add_control(
        'chinese_contact_details_address',
        array(
            'type' => 'text',
            'label' => __('Write your address',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_contact_details_address'
        )
    );

    $wp_customize->add_control(
        'chinese_contact_details_phone',
        array(
            'type' => 'text',
            'label' => __('Write your phone',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_contact_details_phone'
        )
    );

    $wp_customize->add_control(
        'chinese_contact_details_email',
        array(
            'type' => 'text',
            'label' => __('Write your email',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_contact_details_email'
        )
    );

    $wp_customize->add_control(
        'chinese_monday_time',
        array(
            'type' => 'text',
            'label' => __('Monday Working hours',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_monday_time'
        )
    );

    $wp_customize->add_control(
        'chinese_tuesday_time',
        array(
            'type' => 'text',
            'label' => __('Tuesday Working hours',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_tuesday_time'
        )
    );

    $wp_customize->add_control(
        'chinese_wednesday_time',
        array(
            'type' => 'text',
            'label' => __('Wednesday Working hours',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_wednesday_time'
        )
    );

    $wp_customize->add_control(
        'chinese_thursday_time',
        array(
            'type' => 'text',
            'label' => __('Thursday Working hours',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_thursday_time'
        )
    );

    $wp_customize->add_control(
        'chinese_friday_time',
        array(
            'type' => 'text',
            'label' => __('Friday Working hours',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_friday_time'
        )
    );

    $wp_customize->add_control(
        'chinese_saturday_time',
        array(
            'type' => 'text',
            'label' => __('Saturday Working hours',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_saturday_time'
        )
    );

    $wp_customize->add_control(
        'chinese_sunday_time',
        array(
            'type' => 'text',
            'label' => __('Sunday Working hours',
                'chinese-restaurant'),
            'section' => 'chinese_page_templates_section',
            'settings' => 'chinese_sunday_time'
        )
    );


    /*** Copyright Section **/

    $wp_customize->add_section(
        'chinese_copyright_section',
        array(
            'title' => __('Copyright Text', 'chinese-restaurant'),
            'description' => __('Add your copyright. You can use HTML.',
                'chinese-restaurant'),
            'priority' => 16,
        )
    );

    $wp_customize->add_setting(
        'chinese_copyright_text',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'chinese_copyright_text',
        array(
            'type' => 'textarea',
            'label' => __('Copyright Area text',
                'chinese-restaurant'),
            'section' => 'chinese_copyright_section',
            'settings' => 'chinese_copyright_text'
        )
    );


}

add_action('customize_register', 'chinese_customizer');


function chinese_upsell_notice()
{
    // Enqueue the script
    wp_enqueue_script(
        'prefix-customizer-upsell',
        get_template_directory_uri() . '/js/upsell.js',
        array(), '1.0.0',
        true
    );

    wp_enqueue_script(
        'prefix-customizer-pro',
        get_template_directory_uri() . '/js/upsell_pro.js',
        array(), '1.0.0',
        true

    );

    // Localize the script
    wp_localize_script(
        'prefix-customizer-upsell',
        'prefixL10n',
        array(
            'prefixURL' => esc_url('http://ketchupthemes.com/chinese-restaurant-theme'),
            'prefixLabel' => __('Upgrade To Premium', 'chinese-restaurant'),
        )
    );

    wp_localize_script(
        'prefix-customizer-pro',
        'prefixL11n',
        array(
            'prefixURL' => esc_url('http://ketchupthemes.com/chinese-restaurant-theme'),
            'prefixLabel' => __('PRO', 'chinese-restaurant'),
        )
    );

}

add_action('customize_controls_enqueue_scripts', 'chinese_upsell_notice');


if (!function_exists('chinese_mod')):
    function chinese_mod($theme_mod)
    {

        $variable = get_theme_mod($theme_mod, '');

        return $variable;
    }
endif;

if (version_compare($GLOBALS['wp_version'], '4.1', '<')) :
    function chinese_wp_title($title,
                              $sep)
    {
        if (is_feed()) {
            return $title;
        }
        global $page, $paged;

        $title .= get_bloginfo('name', 'display');

        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            $title .= " $sep $site_description";
        }
        if (($paged >= 2 || $page >= 2) && !is_404()) {
            $title .= " $sep " . sprintf(__('Page %s', 'chinese-restaurant'), max($paged, $page));
        }
        return $title;
    }

    add_filter('wp_title', 'chinese_wp_title', 10, 2);

endif;


if (!function_exists('chinese_editor')):
    function chinese_editor($mce_buttons)
    {
        $pos = array_search('wp_more', $mce_buttons, true);
        if ($pos !== false) {
            $tmp_buttons = array_slice($mce_buttons, 0, $pos + 1);
            $tmp_buttons[] = 'wp_page';
            $mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons, $pos + 1));
        }
        return $mce_buttons;
    }
endif;
add_filter('mce_buttons', 'chinese_editor');


/**=== Get text for the logo container ===**/
if (!function_exists('chinese_get_header_text')):
    function chinese_get_header_text()
    {
        $logo = get_theme_mod('chinese_logo_upload', '');

        if (!empty($logo)):

            $logo_item = '<a href="' . esc_url(home_url('/')) . '"> <img src="' . $logo . '" alt="'
                . get_bloginfo('name') . '" role="banner"
             />
            </a>';
        else:
            $logo_item = '<h1 class="h3"><a href="' . esc_url(home_url()) . '">' . get_bloginfo('name') . '</a></h1>';
            $logo_item .= '<h4 class="h5">' . get_bloginfo('description') . '</h4>';

        endif;

        return $logo_item;


    }
endif;

if (!function_exists('chinese_get_header_image')):
    function chinese_get_header_image()
    {
        $html = '';
        if (get_header_image() != ''):
            $html .= '<img class="img-responsive" src="' . get_header_image() . '" height="' . get_custom_header()->height . '" width="' . get_custom_header()->width . '" alt=""/>';
        else:
            return false;
        endif;
        return $html;
    }
endif;


/**== Get page header image if any ==**/
if (!function_exists('chinese_get_page_header_image')):
    function chinese_get_page_header_image()
    {
        $page_id = get_queried_object_id();

        $page_header_image = get_post_meta($page_id, '_burger_page_header_image', true);

        return $page_header_image;
    }
endif;

/**== Numeric pagination ==**/
if (!function_exists('chinese_custom_pagination')):
    function chinese_custom_pagination($numpages = '',
                                       $pagerange = '',
                                       $paged = '')
    {

        if (empty($pagerange)) {
            $pagerange = 2;
        }
        global $paged;
        if (empty($paged)) {
            $paged = 1;
        }
        if ($numpages == '') {
            global $wp_query;
            $numpages = $wp_query->max_num_pages;
            if (!$numpages) {
                $numpages = 1;
            }
        }

        if (is_front_page()):
            $paged = 'page';
        else:
            $paged = 'paged';
        endif;

        $pagination_args = array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%',
            'total' => $numpages,
            'current' => max(1, get_query_var($paged)),
            'show_all' => False,
            'end_size' => 1,
            'mid_size' => $pagerange,
            'prev_next' => True,
            'prev_text' => __('&laquo;', 'chinese-restaurant'),
            'next_text' => __('&raquo;', 'chinese-restaurant'),
            'type' => 'plain',
            'add_args' => false,
            'add_fragment' => ''
        );

        $paginate_links = paginate_links($pagination_args);

        if ($paginate_links) {
            echo "<nav class='custom-pagination'>";

            " of
" . $numpages . "</span> ";
            echo $paginate_links;
            echo "</nav>";
        }

    }
endif;

/*** Walker to add descriptions ***/
class Chinese_Menu_With_Description extends Walker_Nav_Menu
{
    function start_el(&$output,
                      $item,
                      $depth = 0,
                      $args = array(),
                      $id = 0)
    {
        global $wp_query;
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array)$item->classes;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $value . $class_names . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '<p class="menu-description"><span class="sub">' . $item->description
            . '</span></p>';
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id);
    }
}

/**=== Footer Functions ===**/

if (!function_exists('chinese_has_active_footer')):
    function chinese_has_active_footer()
    {
        $active_footer_sidebars = 0;
        $active_sidebars = array();

        for ($i = 1; $i < 5; $i++) {
            if (is_active_sidebar('chinese_footer_' . $i . '_sidebar')):
                $active_footer_sidebars++;
            endif;
        }

        if ($active_footer_sidebars == 0):
            return false;

        elseif ($active_footer_sidebars == 1):

            $active_sidebars['class'] = 'col-md-12';
            $active_sidebars['sidebars_count'] = 1;
            return $active_sidebars;

        elseif ($active_footer_sidebars == 2):

            $active_sidebars['class'] = 'col-md-6';
            $active_sidebars['sidebars_count'] = 2;
            return $active_sidebars;

        elseif ($active_footer_sidebars == 3):

            $active_sidebars['class'] = 'col-md-4';
            $active_sidebars['sidebars_count'] = 3;
            return $active_sidebars;

        elseif ($active_footer_sidebars == 4):

            $active_sidebars['class'] = 'col-md-3';
            $active_sidebars['sidebars_count'] = 4;
            return $active_sidebars;

        endif;

    }
endif;