<?php

function sixteen_customize_large_boxes( $wp_customize ) {
    //Featured Posts Square
    $wp_customize->add_panel('sixteen_farea_panel', array(
        'priority' =>5,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Featured Areas', 'sixteen')
    ));

    $wp_customize->add_section(
        'sixteen_boxes_section',
        array(
            'title'     => __('Featured Posts Boxes','sixteen'),
            'priority'  => 40,
            'panel'     => 'sixteen_farea_panel'
        )
    );

    $wp_customize->add_setting(
        'sixteen_boxes_enable',
        array( 'sanitize_callback' => 'sixteen_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'sixteen_eta_enable', array(
            'settings' => 'sixteen_boxes_enable',
            'label'    => __( 'Enable Featured Posts on Homepage', 'sixteen' ),
            'section'  => 'sixteen_boxes_section',
            'type'     => 'checkbox',
        )
    );


    $wp_customize->add_setting(
        'sixteen_boxes_title',
        array( 'sanitize_callback' => 'sanitize_text_field' )
    );

    $wp_customize->add_control(
        'sixteen_eta_title', array(
            'settings' => 'sixteen_boxes_title',
            'label'    => __( 'Title','sixteen' ),
            'section'  => 'sixteen_boxes_section',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting(
        'sixteen_boxes_cat',
        array( 'sanitize_callback' => 'sixteen_sanitize_category' )
    );

    $wp_customize->add_control(
        new Sixteen_WP_Customize_Category_Control(
            $wp_customize,
            'sixteen_eta_cat',
            array(
                'label'    => __('Posts Category.','sixteen'),
                'settings' => 'sixteen_boxes_cat',
                'section'  => 'sixteen_boxes_section'
            )
        )
    );
}
add_action('customize_register', 'sixteen_customize_large_boxes');