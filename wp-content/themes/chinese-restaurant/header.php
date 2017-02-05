<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php if (get_theme_mod('chinese_favicon_upload', '') != ''): ?>
        <link rel="icon"
              href="<?php if (get_theme_mod('chinese_favicon_upload', '') != ''): echo esc_url
              (get_theme_mod('chinese_favicon_upload', '')); endif; ?> "
              type="image/x-icon">
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site-loader"></div>
<?php do_action('chinese_after_body_tag'); ?>


<header id="masthead" class="site-header clearfix">
    <div id="kt-header-area">
        <div class="container">
            <div class="row" id="kt-logo-area">

                <div class="col-md-4">
                    <div id="kt-logo-container">
                        <?php echo chinese_get_header_text(); ?>
                    </div>
                </div>

                <div class="col-md-8">

                    <nav role="navigation" class="clearfix"
                         id="kt-main-navigation">
                        <?php
                        $chinese_walker = new Chinese_Menu_With_Description();
                        $chinese_menu_args = array(
                            'theme_location' => 'main',
                            'fallback_cb' => 'chinese_fallback_menu',
                            'container' => false,
                            'menu_id' => 'kt-navigation',
                            'echo' => true,
                            'walker' => $chinese_walker);
                        wp_nav_menu($chinese_menu_args);
                        ?>
                    </nav>

                </div>
            </div>
            <!-- #kt-logo-area ends here -->
        </div>
    </div>

    <?php if(is_front_page()): ?>
    <div id="chinese_header_area">
        <?php echo chinese_get_header_image(); ?>
    </div>
    <?php endif; ?>

</header>
<!-- Header ends -->