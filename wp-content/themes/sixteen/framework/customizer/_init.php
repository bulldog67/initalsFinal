<?php
/**
 * sixteen Theme Customizer
 *
 * @package sixteen
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sixteen_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_section( 'header_image' )->panel  = 'sixteen_header_panel';
    $wp_customize->get_section( 'colors' )->panel  = 'sixteen_designs_panel';
    $wp_customize->get_section( 'background_image' )->panel  = 'sixteen_designs_panel';
    $wp_customize->get_setting('header_textcolor')->default = "ffffff";

}
add_action( 'customize_register', 'sixteen_customize_register' );



//Load All Individual Settings Based on Sections/Panels.

require_once get_template_directory().'/framework/customizer/_customizer_controls.php';
require_once get_template_directory().'/framework/customizer/_layouts.php';
require_once get_template_directory().'/framework/customizer/_sanitization.php';
require_once get_template_directory().'/framework/customizer/header.php';
require_once get_template_directory().'/framework/customizer/post-square.php';
require_once get_template_directory().'/framework/customizer/post-large-boxes.php';
require_once get_template_directory().'/framework/customizer/sidebar-loc.php';
require_once get_template_directory().'/framework/customizer/_slider-swiper.php';
require_once get_template_directory().'/framework/customizer/footer-text.php';
require_once get_template_directory().'/framework/customizer/social-icons.php';
require_once get_template_directory().'/framework/customizer/misc-scripts.php';






/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sixteen_customize_preview_js() {
    wp_enqueue_script( 'sixteen_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'sixteen_customize_preview_js' );
