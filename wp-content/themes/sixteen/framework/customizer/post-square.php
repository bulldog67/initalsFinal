<?php

function sixteen_customize_square( $wp_customize ) {
    //Featured Posts Square
    $wp_customize->add_section(
        'sixteen_square_section',
        array(
            'title'     => __('Featured Posts Squares','sixteen'),
            'priority'  => 40,
            'panel'     => 'sixteen_farea_panel'

        )
    );

    $wp_customize->add_setting(
        'sixteen_square_enable',
        array( 'sanitize_callback' => 'sixteen_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'sixteen_square_enable', array(
            'settings' => 'sixteen_square_enable',
            'label'    => __( 'Enable Featured Posts on Homepage', 'sixteen' ),
            'section'  => 'sixteen_square_section',
            'type'     => 'checkbox',
        )
    );


    $wp_customize->add_setting(
        'sixteen_square_title',
        array( 'sanitize_callback' => 'sanitize_text_field' )
    );

    $wp_customize->add_control(
        'sixteen_square_title', array(
            'settings' => 'sixteen_square_title',
            'label'    => __( 'Title','sixteen' ),
            'section'  => 'sixteen_square_section',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting(
        'sixteen_square_cat',
        array( 'sanitize_callback' => 'sixteen_sanitize_category' )
    );

    $wp_customize->add_control(
        new Sixteen_WP_Customize_Category_Control(
            $wp_customize,
            'sixteen_square_cat',
            array(
                'label'    => __('Posts Category.','sixteen'),
                'settings' => 'sixteen_square_cat',
                'section'  => 'sixteen_square_section'
            )
        )
    );
}
add_action('customize_register', 'sixteen_customize_square');