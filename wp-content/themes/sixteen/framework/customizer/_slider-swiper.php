<?php
// SLIDER PANEL
function sixteen_customize_register_slider_swiper( $wp_customize ) {
$wp_customize->add_panel( 'sixteen_slider_panel', array(
    'priority'       => 35,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Main Slider',
) );

$wp_customize->add_section(
    'sixteen_sec_slider_options',
    array(
        'title'     => __('Enable/Disable','sixteen'),
        'priority'  => 0,
        'panel'     => 'sixteen_slider_panel'
    )
);


$wp_customize->add_setting(
    'sixteen_main_slider_enable',
    array( 'sanitize_callback' => 'sixteen_sanitize_checkbox' )
);

$wp_customize->add_control(
    'sixteen_main_slider_enable', array(
        'settings' => 'sixteen_main_slider_enable',
        'label'    => __( 'Enable Slider.', 'sixteen' ),
        'section'  => 'sixteen_sec_slider_options',
        'type'     => 'checkbox',
    )
);

$wp_customize->add_setting(
    'sixteen_main_slider_count',
    array(
        'default' => '0',
        'sanitize_callback' => 'sixteen_sanitize_positive_number'
    )
);

// Select How Many Slides the User wants, and Reload the Page.
$wp_customize->add_control(
    'sixteen_main_slider_count', array(
        'settings' => 'sixteen_main_slider_count',
        'label'    => __( 'No. of Slides(Min:0, Max: 5)' ,'sixteen'),
        'section'  => 'sixteen_sec_slider_options',
        'type'     => 'number',
        'description' => __('Save the Settings, and Reload this page to Configure the Slides.','sixteen'),

    )
);



if ( get_theme_mod('sixteen_main_slider_count') > 0 ) :
    $slides = get_theme_mod('sixteen_main_slider_count');

    for ( $i = 1 ; $i <= $slides ; $i++ ) :

        //Create the settings Once, and Loop through it.

        $wp_customize->add_setting(
            'sixteen_slide_img'.$i,
            array( 'sanitize_callback' => 'esc_url_raw' )
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'sixteen_slide_img'.$i,
                array(
                    'label' => '',
                    'section' => 'sixteen_slide_sec'.$i,
                    'settings' => 'sixteen_slide_img'.$i,
                )
            )
        );


        $wp_customize->add_section(
            'sixteen_slide_sec'.$i,
            array(
                'title'     => 'Slide '.$i,
                'priority'  => $i,
                'panel'     => 'sixteen_slider_panel'
            )
        );

        $wp_customize->add_setting(
            'sixteen_slide_title'.$i,
            array( 'sanitize_callback' => 'sanitize_text_field' )
        );

        $wp_customize->add_control(
            'sixteen_slide_title'.$i, array(
                'settings' => 'sixteen_slide_title'.$i,
                'label'    => __( 'Slide Title','sixteen' ),
                'section'  => 'sixteen_slide_sec'.$i,
                'type'     => 'text',
            )
        );

        $wp_customize->add_setting(
            'sixteen_slide_desc'.$i,
            array( 'sanitize_callback' => 'sanitize_text_field' )
        );

        $wp_customize->add_control(
            'sixteen_slide_desc'.$i, array(
                'settings' => 'sixteen_slide_desc'.$i,
                'label'    => __( 'Slide Description','sixteen' ),
                'section'  => 'sixteen_slide_sec'.$i,
                'type'     => 'text',
            )
        );


        $wp_customize->add_setting(
            'sixteen_slide_url'.$i,
            array( 'sanitize_callback' => 'esc_url_raw' )
        );

        $wp_customize->add_control(
            'sixteen_slide_url'.$i, array(
                'settings' => 'sixteen_slide_url'.$i,
                'label'    => __( 'Target URL','sixteen' ),
                'section'  => 'sixteen_slide_sec'.$i,
                'type'     => 'url',
            )
        );

    endfor;


endif;
}
add_action( 'customize_register', 'sixteen_customize_register_slider_swiper' );