<?php
//Sidebar Location
function sixteen_customize_register_sidebar_loc( $wp_customize ) {
$wp_customize->add_section(
    'sixteen_sidebar_options',
    array(
        'title'     => __('Sidebar Locations','sixteen'),
        'priority'  => 41,
        'panel'         => 'sixteen_designs_panel'

    )
);


$wp_customize->add_setting(
    'sixteen_left_sidebar',
    array( 'sanitize_callback' => 'sixteen_sanitize_checkbox' )
);

$wp_customize->add_control(
    'sixteen_left_sidebar', array(
        'settings' => 'sixteen_left_sidebar',
        'label'    => __( 'Switch Sidebar to Left Side', 'sixteen' ),
        'section'  => 'sixteen_sidebar_options',
        'type'     => 'checkbox',
    )
);
}
add_action( 'customize_register', 'sixteen_customize_register_sidebar_loc' );