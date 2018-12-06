<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 3/22/2018
 * Time: 1:39 PM
 */

function sixteen_custom_css_mods() {

    $custom_css = "";

    if ( get_header_textcolor() ) :
        $custom_css .= "#masthead h1.site-title a { color: #".get_header_textcolor()."; }";
    endif;

    if ( get_theme_mod('sixteen_header_desccolor') ) :
        $custom_css .= "#masthead h2.site-description { color: ".esc_html(get_theme_mod('sixteen_header_desccolor','#ffffff'))."; }";
    endif;

    //Modify CSS a little if Slider is disabled.
    if ( !get_theme_mod('sixteen_main_slider_enable' ) && !is_home() ) :
        $custom_css .= ".main-navigation {	margin-bottom: -5px;}";
    endif;

    if ( !get_theme_mod('sixteen_main_slider_enable' ) && is_front_page() ) :
        $custom_css .= ".main-navigation {	margin-bottom: 15px;}";
    endif;

    wp_add_inline_style( 'sixteen-main-style', wp_strip_all_tags($custom_css) );

}

add_action('wp_enqueue_scripts', 'sixteen_custom_css_mods');