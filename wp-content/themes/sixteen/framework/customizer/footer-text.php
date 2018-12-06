<?php
function sixteen_customize_register_custom_footer( $wp_customize ) {
$wp_customize-> add_section(
    'sixteen_custom_footer',
    array(
        'title'			=> __('Custom Footer Text','sixteen'),
        'description'	=> __('Enter your Own Copyright Text.','sixteen'),
        'priority'		=> 42,
        'panel'         => 'sixteen_designs_panel'

    )
);

$wp_customize->add_setting(
    'sixteen_footer_text',
    array(
        'default'		=> '',
        'sanitize_callback'	=> 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    'sixteen_footer_text',
    array(
        'section' => 'sixteen_custom_footer',
        'settings' => 'sixteen_footer_text',
        'type' => 'text'
    )
);
}
add_action( 'customize_register', 'sixteen_customize_register_custom_footer' );