<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package realwanaka
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses realwanaka_header_style()
 */

/**
* Create Logo Setting and Upload Control
*/
function header_settings($wp_customize) {
	// add a setting for the site logo
	$wp_customize->add_setting('site_logo');
	// Add a control to upload the logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_logo',
		array(
			'label' => 'Upload Logo',
			'section' => 'title_tagline',
			'settings' => 'site_logo',
		) 
	));
}

add_action('customize_register', 'header_settings');
