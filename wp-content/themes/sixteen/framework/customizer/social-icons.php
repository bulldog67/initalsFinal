<?php
// Social Icons
function sixteen_customize_register_social( $wp_customize ) {
$wp_customize->add_section('sixteen_social_section', array(
    'title' => __('Social Icons','sixteen'),
    'priority' => 2,
    'panel'      => 'sixteen_header_panel'

));

$social_networks = array( //Redefinied in Sanitization Function.
    'none' => __('-','sixteen'),
    'facebook' => __('Facebook','sixteen'),
    'twitter' => __('Twitter','sixteen'),
    'google-plus' => __('Google Plus','sixteen'),
    'instagram' => __('Instagram','sixteen'),
    'rss' => __('RSS Feeds','sixteen'),
    'flickr' => __('Flickr','sixteen'),
    'linkedin' => __('Linked In','sixteen'),
    'vimeo' => __('Vimeo','sixteen'),
    'youtube' => __('Youtube','sixteen'),
);

// Social Icons Effects
        $social_icon_styles = array( //Redefinied in Sanitization Function.
            'default' => __('Default','sixteen'),
            'style1' => __('Style 1','sixteen'),
            'style2' => __('Style 2','sixteen'),
            'style3' => __('Style 3','sixteen'),
        );

    $wp_customize->add_setting(
        'sixteen_social_styles', array(
        'sanitize_callback' => 'sixteen_sanitize_social_styles',
        'default' => 'default'
    ));

    $wp_customize->add_control( 'sixteen_social_styles', array(
        'settings' => 'sixteen_social_styles',
        'label' => __('Icon Effects','sixteen'),
        'section' => 'sixteen_social_section',
        'type' => 'select',
        'choices' => $social_icon_styles,
    ));

    function sixteen_sanitize_social_styles($input) {
        $social_icon_styles = array(
            'default',
            'style1',
            'style2',
            'style3'
        );
        if (in_array($input, $social_icon_styles)):
            return $input;
        else:
            return '';
        endif;
    }

$social_count = count($social_networks);

for ($x = 1 ; $x <= ($social_count - 3) ; $x++) :

    $wp_customize->add_setting(
        'sixteen_social_'.$x, array(
        'sanitize_callback' => 'sixteen_sanitize_social',
        'default' => 'none'
    ));

    $wp_customize->add_control( 'sixteen_social_'.$x, array(
        'settings' => 'sixteen_social_'.$x,
        'label' => __('Icon ','sixteen').$x,
        'section' => 'sixteen_social_section',
        'type' => 'select',
        'choices' => $social_networks,
    ));

    $wp_customize->add_setting(
        'sixteen_social_url'.$x, array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( 'sixteen_social_url'.$x, array(
        'settings' => 'sixteen_social_url'.$x,
        'description' => __('Icon ','sixteen').$x.__(' Url','sixteen'),
        'section' => 'sixteen_social_section',
        'type' => 'url',
        'choices' => $social_networks,
    ));

endfor;

function sixteen_sanitize_social( $input ) {
    $social_networks = array(
        'none' ,
        'facebook',
        'twitter',
        'google-plus',
        'instagram',
        'rss',
        'flickr',
        'linkedin',
        'vimeo',
        'youtube',
    );
    if ( in_array($input, $social_networks) )
        return $input;
    else
        return '';
}
}
add_action( 'customize_register', 'sixteen_customize_register_social' );