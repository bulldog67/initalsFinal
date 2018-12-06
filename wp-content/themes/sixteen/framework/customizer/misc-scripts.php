<?php

function sixteen_customize_register_misc( $wp_customize ) {
    //Upgrade to Pro
    $wp_customize->add_section(
        'sixteen_sec_pro',
        array(
            'title'     => __('Important Links','sixteen'),
            'priority'  => 2,
        )
    );

    $wp_customize->add_setting(
        'sixteen_pro',
        array( 'sanitize_callback' => 'esc_textarea' )
    );

    $wp_customize->add_control(
        new Sixteen_WP_Customize_Upgrade_Control(
            $wp_customize,
            'sixteen_pro',
            array(
                'description'	=> '<a class="sixteen-important-links" href="https://inkhive.com/contact-us/" target="_blank">'.__('InkHive Support Forum', 'sixteen').'</a>
                                    <a class="sixteen-important-links" href="http://demo.inkhive.com/sixteen-plus/" target="_blank">'.__('Sixteen Plus Live Demo', 'sixteen').'</a>
                                    <a class="sixteen-important-links" href="https://inkhive.com/documentation/sixteen/" target="_blank">'.__('Sixteen Documentation', 'sixteen').'</a>
                                    <a class="sixteen-important-links" href="https://www.facebook.com/inkhivethemes/" target="_blank">'.__('We Love Our Facebook Fans', 'sixteen').'</a>
                                    <a class="sixteen-important-links" href="https://wordpress.org/support/theme/sixteen/reviews" target="_blank">'.__('Review Sixteen on WordPress', 'sixteen').'</a>',
                'section' => 'sixteen_sec_pro',
                'settings' => 'sixteen_pro',
            )
        )
    );
}
add_action('customize_register', 'sixteen_customize_register_misc');