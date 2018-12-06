<?php
/**
* Enqueue Scripts for Admin
*/
function sixteen_custom_wp_admin_style() {
wp_enqueue_style( 'sixteen-admin_css', get_template_directory_uri() . '/assets/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'sixteen_custom_wp_admin_style' );