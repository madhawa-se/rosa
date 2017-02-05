jQuery(window).load(function () {
    jQuery('.site-loader').fadeOut('slow');
});

function chinese_nice_menu_height() {

    var logo_height = jQuery('#kt-logo-container').height();

    var nav_height = jQuery('#kt-navigation ul li').height();
    var logo_area_height = jQuery('#kt-logo-area').height();
    if (logo_height > nav_height) {

        jQuery('#kt-logo-container').css('line-height', logo_height + 'px');
        jQuery('#kt-main-navigation').css('line-height', logo_height + 15 + 'px');
        jQuery('#kt-main-navigation').css('height', logo_height + 'px');
        jQuery('ul.sub-menu').css('top', logo_height + 25 + 'px');
        //jQuery('#kt-navigation').css('top',logo_area_height+10);
    }
    else {

        if (nav_height >= 52) {
            var extra_height = 30;
        } else {
            var extra_height = 0;
        }
        jQuery('#kt-logo-container').css('line-height', nav_height + extra_height + 'px');
        jQuery('#kt-main-navigation').css('line-height', nav_height + 'px');
        jQuery('ul.sub-menu').css('top', logo_height + 25 + 'px');

    }
}

function chinese_responsive_menu_add() {
    jQuery('#kt-navigation').slicknav({
        label: ''
    });
}

function chinese_same_height() {
    jQuery('.matchHeight').matchHeight();
}
function chinese_add_lightbox_to_galleries() {
    jQuery('.gallery').magnificPopup({
        delegate: '.gallery-item > div > a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
}

jQuery(document).ready(function ($) {

    'use-strict';
    chinese_nice_menu_height();
    chinese_responsive_menu_add();
    chinese_same_height();
    chinese_add_lightbox_to_galleries();

    $('.kt-post-meta-body').hide();
    jQuery('.kt-blog-post').hover(function(){
       jQuery(this).find('.kt-post-meta-body').show(400).addClass('animated slideInUp');
    },
    function(){
        jQuery(this).find('.kt-post-meta-body').hide(300);
    });

});