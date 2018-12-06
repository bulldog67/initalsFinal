<?php
function sixteen_customize_register_layouts( $wp_customize ) {

    $wp_customize->add_panel('sixteen_designs_panel', array(
        'priority' => 35,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Design & Layout', 'sixteen')
    ));

    //site description color
    $wp_customize->add_setting('sixteen_header_desccolor', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            'sixteen_header_desccolor', array(
            'label' => __('Site Tagline Color','sixteen'),
            'section' => 'colors',
            'settings' => 'sixteen_header_desccolor',
            'type' => 'color'
        ) )
    );
}
add_action( 'customize_register', 'sixteen_customize_register_layouts' );