<?php
/**
 * Sample implementation of the Custom Footer feature.
 *
 * You can add an optional custom footer image to footer.php like so ...
 *
 * @package realwanaka
 */

/**
 * Set up the WordPress core custom footer feature.
 *
 * @uses realwanaka_footer_style()
 */

/*Customizer Code HERE*/
add_action('customize_register', 'footer_customizer');

function footer_customizer($wp_customize){
 	//adding section in wordpress customizer   
	$wp_customize->add_section('footer_settings_section', array(
  		'title'          => 'Footer Section'
 	));

	//adding setting for footer text area
 	$wp_customize->add_setting('social_media_setting', array(
 	));

 	$wp_customize->add_setting('email_setting', array(
 	));

 	$wp_customize->add_setting('textarea_setting', array(
 	));

	$wp_customize->add_control('social_media_setting', array(
 		'label'   => 'Facebook Link',
  		'section' => 'footer_settings_section',
 		'type'    => 'text field',
	));

	$wp_customize->add_control('email_setting', array(
 		'label'   => 'Email Address',
  		'section' => 'footer_settings_section',
 		'type'    => 'text field',
	));

	$wp_customize->add_control('textarea_setting', array(
 		'label'   => 'Footer Textarea',
  		'section' => 'footer_settings_section',
 		'type'    => 'textarea',
	));
}