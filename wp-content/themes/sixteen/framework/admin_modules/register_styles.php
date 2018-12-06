<?php
/**
 * Enqueue scripts and styles.
 */
function sixteen_scripts() {
    wp_enqueue_style( 'sixteen-fonts', '//fonts.googleapis.com/css?family=Roboto:500,400,300,700');

    wp_enqueue_style( 'sixteen-basic-style', get_stylesheet_uri() );

    if ( get_theme_mod('sixteen_left_sidebar') ) {
        wp_enqueue_style( 'sixteen-layout', get_template_directory_uri()."/assets/css/layouts/sidebar-content.css" );
    }
    else {
        wp_enqueue_style( 'sixteen-layout', get_template_directory_uri()."/assets/css/layouts/content-sidebar.css" );
    }

    wp_enqueue_style( 'sixteen-main-style', get_template_directory_uri()."/assets/theme-styles/css/default.css");

    wp_enqueue_script( 'sixteen-externaljs', get_template_directory_uri() . '/js/external.js', array('jquery'), '20120206', true );

    wp_enqueue_script( 'sixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

    wp_enqueue_style( 'sixteen-nivo-slider-default-theme', get_template_directory_uri()."/assets/css/nivo/themes/default/default.css" );

    wp_enqueue_style( 'sixteen-nivo-slider-style', get_template_directory_uri()."/assets/css/nivo/nivo.css" );

    wp_enqueue_script( 'sixteen-nivo-slider', get_template_directory_uri() . '/js/nivo.slider.js', array('jquery') );

    wp_enqueue_script('sixteen-timeago', get_template_directory_uri() . '/js/jquery.timeago.js', array('jquery') );

    wp_enqueue_script( 'sixteen-superfish', get_template_directory_uri() . '/js/superfish.js', array('jquery') );

    //wp_enqueue_script( 'sixteen-retina', get_template_directory_uri() . '/js/retina.min.js' );

    wp_enqueue_script( 'sixteen-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery','sixteen-nivo-slider','sixteen-timeago','sixteen-superfish','jquery-effects-core') );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'sixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }
}
add_action( 'wp_enqueue_scripts', 'sixteen_scripts' );