<?php
/*
Plugin Name: Flexible Captcha - Ninja Forms Add-On
Plugin URI: http://www.jsterup.com
Description: A plugin to integrate Flexible Captcha with Ninja Forms.
Version: 0.1
Author: Jeff Sterup
Author URI: http://www.jsterup.com
License: GPL2
*/

function register_flexible_captcha_field() {
	$args = array(
		'name' => 'Flexible Captcha',
		'display_function' => 'flexible_captcha_ninja_forms_display',
		'sidebar' => 'template_fields',
		'pre_process' => 'flexible_captcha_ninja_forms_pre_process'
	);

	if( function_exists( 'ninja_forms_register_field' ) ) {
		ninja_forms_register_field('FC_captcha_input', $args);
	}
}

add_action( 'init', 'register_flexible_captcha_field' );

/*
 * This function only has to output the specific field element. The wrap is output automatically.
 *
 * $field_id is the id of the field currently being displayed.
 * $data is an array the possibly modified field data for the current field.
 *
*/
function flexible_captcha_ninja_forms_display( $field_id, $data ){
	global $FlexibleCaptcha;
	print $FlexibleCaptcha->get_captcha_fields_display(get_option('FC_default_width'), get_option('FC_default_height'));
}

function flexible_captcha_ninja_forms_pre_process() {
	global $FlexibleCaptcha, $ninja_forms_processing;
	if (!$FlexibleCaptcha->check_captcha_val()) {
		$ninja_forms_processing->add_error('5646456456', 'The entered text did not match the captcha image.', 11);
	}
}
?>