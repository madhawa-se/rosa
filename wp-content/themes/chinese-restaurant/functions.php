<?php
/**=== Setup Theme == **/

add_action('after_setup_theme','chinese_setup_theme');
if( !function_exists('chinese_setup_theme')):
    function chinese_setup_theme(){
        /**== Set main content width ==**/
        if(!isset( $content_width ))
            $content_width = 750;

        /**== Add RSS links to the theme ==**/
        add_theme_support( 'automatic-feed-links' );

        /**== This theme is ready for translation ==**/
        load_theme_textdomain( 'chinese-restaurant', get_template_directory(). '/languages' );

        /**== Add HTML5 to some elements -galleries and captions ==**/
        add_theme_support('html5', array( 'gallery', 'caption' ));

        /**== Add newest title-tag support for wordpress version 4.1 and above ==**/
        global $wp_version;
        if (version_compare( $wp_version, '4.1', '>=' )):
            add_theme_support( 'title-tag' );
        endif;

        /**== Register the navigation menus and positions ==**/
        register_nav_menus( array(
            'main' =>       __( 'Main Navigation', 'chinese-restaurant' )
        ));

        /**== Custom Background ==**/
        $chinese_background_defaults = array(
            'default-color' => 'ffffff',
            'default-image' => '',
            'wp-head-callback' => 'chinese_background_callback',
        );
        add_theme_support( 'custom-background', $chinese_background_defaults );

        /**== Custom Header Image ==**/
        $chinese_header_defaults = array(
            'default-image'          => '',
            'random-default'         => false,
            'width'                  => '1920',
            'height'                 => '850',
            'flex-height'            => false,
            'flex-width'             => false,
            'default-text-color'     => '',
            'header-text'            => false,
            'uploads'                => true,
            'wp-head-callback'       => '',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
        );
        add_theme_support( 'custom-header', $chinese_header_defaults );

        /**== This adds an excerpt field for  pages ==**/
        add_post_type_support( 'page', 'excerpt' );

        /**== This theme uses featured images ==**/
        add_theme_support('post-thumbnails' );
        add_image_size('blog-image',768,600,true);

        add_image_size('chinese-page-image-col-md-12',1140,420,true);
        add_image_size('chinese-page-image-col-md-8',719,320,true);
        add_image_size('chinese-page-image-col-md-6',585,280,true);
        add_image_size('chinese-page-image-col-md-4',330,250,true);
        add_image_size('chinese-page-image-col-md-3',295,220,true);
        add_image_size('chinese-recent-posts-image',100,100,true);
    }
endif;

/**== Setup theme ends here ==**/

/**================================================**/
/** Fallback functions
 **  - Background Callback
 **  - Navigation Menu callback (when is not a
 *     menu set up)
/**================================================**/
if(!function_exists('chinese_background_callback')):

    function chinese_background_callback() {
        $background = set_url_scheme( get_background_image() );
        $color = get_theme_mod( 'background_color', get_theme_support( 'custom-background', 'default-color' ) );

        if ( ! $background && ! $color )
            return;

        $style = $color ? "background-color: #$color;" : '';

        if ( $background ) {
            $image = " background-image: url('$background');";

            $repeat = get_theme_mod( 'background_repeat', get_theme_support( 'custom-background', 'default-repeat' ) );
            if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
                $repeat = 'repeat';
            $repeat = " background-repeat: $repeat;";

            $position = get_theme_mod( 'background_position_x', get_theme_support( 'custom-background', 'default-position-x' ) );
            if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
                $position = 'left';
            $position = " background-position: top $position;";

            $attachment = get_theme_mod( 'background_attachment', get_theme_support( 'custom-background', 'default-attachment' ) );
            if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
                $attachment = 'scroll';
            $attachment = " background-attachment: $attachment;";

            $style .= $image . $repeat . $position . $attachment;
        }
        ?>
        <style type="text/css" id="custom-background-css">
            body.custom-background { <?php echo trim( $style ); ?> }
        </style>
    <?php
    }
endif;

if(!function_exists('chinese_fallback_menu')):
    function chinese_fallback_menu($args){
        if ( ! current_user_can( 'manage_options' ) )
        {
            return;
        }
        extract( $args );
        $link = $link_before
            . '<a href="' .admin_url( 'nav-menus.php' ) . '">' . $before . __('Add a menu','chinese-restaurant') . $after . '</a>'
            . $link_after;
        if ( FALSE !== stripos( $items_wrap, '<ul' )
            or FALSE !== stripos( $items_wrap, '<ol' )
        )
        {
            $link = "<li>$link</li>";
        }

        $output = sprintf( $items_wrap, $menu_id, $menu_class, $link );
        if ( ! empty ( $container ) )
        {
            $output  = "<$container class='$container_class' id='$container_id'>$output</$container>";
        }
        if ( $echo )
        {
            echo $output;
        }

        return $output;
    }
endif;


/**================================================**/
/**
 * Enqueue CSS & JS for the theme.
 **
/**================================================**/

add_action('wp_enqueue_scripts','chinese_add_stylesheets');
function chinese_add_stylesheets(){

    wp_enqueue_style( 'chinese-bootstrap', get_template_directory_uri()
        .'/css/bootstrap.min.css','','','all' );

    wp_enqueue_style( 'chinese-bootstrap-theme', get_template_directory_uri()
        .'/css/bootstrap-theme.min.css','','','all' );

    wp_enqueue_style( 'chinese-fontawesome', get_template_directory_uri()
        .'/css/font-awesome.min.css','','','all' );

    wp_enqueue_style( 'chinese-lato', get_template_directory_uri()
        .'/fonts/Lato-Font/stylesheet.css','','','all' );

    wp_enqueue_style( 'chinese-fontello', get_template_directory_uri()
        .'/fonts/Ketchup-Font/css/fontello.css','','','all' );

    wp_enqueue_style( 'chinese-fontello-embedded', get_template_directory_uri()
        .'/fonts/Ketchup-Font/css/fontello-embedded.css','','','all' );

    wp_enqueue_style( 'chinese-fontello-codes', get_template_directory_uri()
        .'/fonts/Ketchup-Font/css/fontello-codes.css','','','all' );



    /*************************************************************************/

    wp_enqueue_style('chinese-animate',get_template_directory_uri()
        .'/css/animate.min.css','','all');

    wp_enqueue_style('chinese-tor-area',get_template_directory_uri()
        .'/css/chinese-top-area.css','','all');


    wp_enqueue_style('chinese-slider',get_template_directory_uri()
        .'/css/chinese-slider.css','','all');

    wp_enqueue_style('chinese-contact',get_template_directory_uri()
        .'/css/chinese-contact.css','','all');

    wp_enqueue_style('chinese-blog',get_template_directory_uri()
        .'/css/chinese-blog.css','','all');

    wp_enqueue_style('chinese-slicknav',get_template_directory_uri()
        .'/css/slicknav.css','','all');

    wp_enqueue_style('chinese-slippry',get_template_directory_uri()
        .'/css/slippry.css','','all');

    wp_enqueue_style('chinese-widgets',get_template_directory_uri()
        .'/css/chinese-widgets.css','','all');


    wp_enqueue_style('chinese-magnificpopupcss',get_template_directory_uri()
        .'/css/magnific-popup.css','','all');


    wp_enqueue_style('chinese-style',get_stylesheet_uri(),'','','all');

}


add_action('wp_enqueue_scripts','chinese_add_scripts');
function chinese_add_scripts(){

    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );


    wp_enqueue_script('chinese-bootstrap', get_template_directory_uri()
        .'/js/bootstrap .min.js',
        array('jquery'),'',true);

    /******************************************************************
    *******************----- Scripts ----******************************/


    wp_enqueue_script('chinese-slicknav', get_template_directory_uri()
        .'/js/jquery.slicknav.min.js',
        array('jquery'),'',true);

    wp_enqueue_script('chinese-tiled', get_template_directory_uri()
        .'/js/stylehatch.js',
        array('jquery'),'',true);

    wp_enqueue_script('chinese-imagesloaded', get_template_directory_uri()
        .'/js/imageloaded.pkgd.min.js',
        array('jquery'),'',true);


    wp_enqueue_script('burger-matchHeight', get_template_directory_uri()
        .'/js/jquery.matchHeight-min.js',
        array('jquery'),'',true);


    wp_enqueue_script('burger-magnificpopupjs', get_template_directory_uri()
        .'/js/jquery.magnific-popup.min.js',
        array('jquery'),'',true);


    wp_enqueue_script('burger-theme-js', get_template_directory_uri()
        .'/js/init.js',
        array('jquery'),'',true);
}

add_action('wp_head', 'chinese_add_html5shiv');

function chinese_add_html5shiv () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="'.get_template_directory_uri().'/js/html5shiv.min.js"></script>';
    echo '<![endif]-->';
}

/**====================== 
 Sidebars.
 ======================**/

/**== Add some sidebars ==**/
add_action('widgets_init','chinese_register_sidebars');
function chinese_register_sidebars(){

    /**== Right sidebar ==**/
    register_sidebar( array(
        'name'              => __( 'Sidebar', 'chinese-restaurant' ),
        'id'                => 'sidebar',
        'description'       => __( 'This is the main sidebar.It is in every page - post and
        in the blog page. However you can override this setting from within each post.',
            'chinese-restaurant' ),
        'before_widget'     => '<div id="%1$s" class="widget %2$s">',
        'after_widget'      => '</div>',
        'before_title'      => '<h3 class="widget-title">',
        'after_title'       => '</h3>'
    ));



    /**== Footer Sidebar 1 ==**/
    register_sidebar( array(
        'name'              => __( 'Footer Sidebar 1', 'chinese-restaurant' ),
        'id'                => 'chinese_footer_1_sidebar',
        'description'       => __( 'This is the sidebar in the footer, on the left', 'chinese-restaurant' ),
        'before_widget'     => '<aside id="%1$s" class="footerwidget %2$s">',
        'after_widget'      => '</aside>',
        'before_title'      => '<h3 class="widget-title">',
        'after_title'       => '</h3>'
    ));
    /**== Footer Sidebar 1 ==**/
    register_sidebar( array(
        'name'              => __( 'Footer Sidebar 2', 'chinese-restaurant' ),
        'id'                => 'chinese_footer_2_sidebar',
        'description'       => __( 'This is the sidebar in the footer, on the right.',
            'chinese-restaurant' ),
        'before_widget'     => '<aside id="%1$s" class="footerwidget %2$s">',
        'after_widget'      => '</aside>',
        'before_title'      => '<h3 class="widget-title">',
        'after_title'       => '</h3>'
    ));

}

/**=====================
 * Comments
 *=====================/
/**== Post Comment Callback ==**/
if(!function_exists('chinese_comment')):
    function chinese_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        extract($args, EXTR_SKIP);

        if ( 'div' == $args['style'] ) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
        ?>
        <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
        <?php if ( 'div' != $args['style'] ) : ?>
            <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <?php endif; ?>
        <div class="comment-author vcard">
            <?php
            if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
            <?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>

            <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                    <?php
                    printf( __('%1$s at %2$s','chinese-restaurant'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)','chinese-restaurant' ), '  ', '' );
                ?>
            </div>
        </div>

        <?php if ( $comment->comment_approved == '0' ) : ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.','chinese-restaurant' ); ?></em>
            <br />
        <?php endif; ?>
        <div class="beyond_comment_body">
            <?php comment_text(); ?>
        </div>
        <div class="reply">
            <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </div>
        <?php if ( 'div' != $args['style'] ) : ?>
            </div>
        <?php endif; ?>
    <?php
    }
endif;
/**=====================
 * Requires
 *==================== */

 require_once(get_template_directory().'/framework/ketchup-functions.php');
 require_once(get_template_directory().'/framework/libs/class-tgm-plugin-activation.php');
