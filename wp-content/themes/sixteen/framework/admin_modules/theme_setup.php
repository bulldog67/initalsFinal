<?php
/**
 * Sixteen functions and definitions
 *
 * @package Sixteen
 */


if ( !function_exists( 'sixteen_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function sixteen_setup() {


        load_theme_textdomain( 'sixteen', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_image_size('homepage-thumb',240,145,true);
        add_image_size('sixteen-pop-thumb',542, 340,true);


        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'sixteen' ),
        ) );

        add_theme_support( 'custom-background', apply_filters( 'sixteen_custom_background_args', array(
            'default-color' => 'E6E1C4',
            'default-image' => '',
        ) ) );
        add_editor_style( 'editor-style.css' );

        /**
         * Set the content width based on the theme's design and stylesheet.
         */
        global $content_width;
        if ( ! isset( $content_width ) )
            $content_width = 640; /* pixels */

        add_theme_support('woocommerce');

        add_theme_support( 'wc-product-gallery-lightbox' );


        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo');

    }
endif; // sixteen_setup
add_action( 'after_setup_theme', 'sixteen_setup' );