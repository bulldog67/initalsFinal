<?php
/*
* Plugin Name: TEDTalks Embedder
* Plugin URI: http://www.samuelaguilera.com
* Description: Embeds TEDTalks videos on your self hosted WordPress simply using same shortcode used for WordPress.com
* Version: 2.0
* Author: Samuel Aguilera
* Author URI: http://www.samuelaguilera.com
* License: GPL3
*/

// Check for activated Jetpack, and deactivate TEDTalks Embedder in that case.

function TTE_Check_Jetpack_Shortcodes_Module() {

  $TTE_plugin = plugin_basename( __FILE__ );
 
  if ( class_exists('Jetpack', false ) ) {

      if (Jetpack::init()->is_module_active( 'shortcodes' )) {

	      deactivate_plugins( $TTE_plugin );

	      function TTE_Jetpack_Found() {
	          ?>
	          <div class="error">
	              <p><?php _e( "TEDTalks Embedder <b>can't be used with Jetpack's shortcodes module activated</b>. TEDTalks Embedder has been deactivated!.", 'tedtalks' ); ?></p>
	          </div>
	          <?php
	      }
	      add_action( 'admin_notices', 'TTE_Jetpack_Found' );

  	}
  }
}

add_action( 'admin_init', 'TTE_Check_Jetpack_Shortcodes_Module' );

//Load translation file if any for the current language
load_plugin_textdomain('tedtalks', PLUGINDIR . '/' . plugin_basename(dirname(__FILE__)) . '/locale');

// Settings page

add_action( 'admin_init', 'TTE_Settings_init' );
function TTE_Settings_init() {
    register_setting( 'media', 'tte_settings' );
    add_settings_section( 'tte_section', 'TED Talks', 'TTE_settings_callback', 'media' );
    add_settings_field( 'tte_width', __('Width'), 'tte_width_field', 'media', 'tte_section' );
    add_settings_field( 'tte_height', __('Height'), 'tte_height_field', 'media', 'tte_section' );
    add_settings_field( 'tte_lang', __('Language', 'tedtalks'), 'tte_lang_field', 'media', 'tte_section' );
}

function TTE_settings_callback() {
	_e('These default settings are used <b>only</b> when you omit them in your TED Talk shortcode.', 'tedtalks');
}


function tte_width_field() {
	$options = get_option( 'tte_settings' );
	$width_value = $options['tte_width']; ?>

	<input name="tte_settings[tte_width]" type="number" step="1" min="0" id="tte_width" value="<?php echo $width_value ?>" class="small-text" /><br />

    <?php
}

function tte_height_field() {
	$options = get_option( 'tte_settings' );
	$height_value = $options['tte_height']; ?>

	<input name="tte_settings[tte_height]" type="number" step="1" min="0" id="tte_height" value="<?php echo $width_value ?>" class="small-text" /><br />

    <?php
}

function tte_lang_field() {
	$options = get_option( 'tte_settings' );
	$lang_value = $options['tte_lang']; ?>

    <input type="text" name="tte_settings[tte_lang]" value="<?php echo $lang_value ?>" class="small-text"/><br />
    <label for="tte_lang"><?php _e("Empty for english. If you don't know your language code, check an embed code at TED.com", 'tedtalks'); ?></label>

    <?php
}

// TED Player embed code from Jetpack 2.8. Credit goes to Jetpack authors.
require_once ('inc/ted.php');

?>