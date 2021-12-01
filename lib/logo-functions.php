<?php
/**
 * Adds custom logo functions to the Coaching Pro theme.
 *
 * @package Coaching Pro
 */

/**
 * Displays the custom logo if the "Show Logo Image" setting is enabled
 */
function course_maker_custom_logo() {
	$site_title_display_setting = get_theme_mod( 'site_title_display' );
	if ( 'display_logo' === $site_title_display_setting ) {
		the_custom_logo();
	}
}
add_filter( 'genesis_site_title', 'course_maker_custom_logo', 0 );

/**
 * Adds a custom body class if a custom logo is used.
 *
 * @param array $classes An array of body classes.
 * @return array A modified array of body classes.
 */
function course_maker_customlogo_body_class( $classes ) {

	$site_title_display_setting = get_theme_mod( 'site_title_display' );

	if ( 'display_logo' === $site_title_display_setting ) {

		$hascustomlogo = has_custom_logo();

		$classes[] = ( $hascustomlogo ? 'custom-logo' : null );

		return $classes;

	} else {

		$classes[] = 'text-logo';

		return $classes;

	}
}
add_filter( 'body_class', 'course_maker_customlogo_body_class' );

/**
 * Filters the custom logo output - add a custom class for the img element.
 *
 * @return string The modified html content.
 */
function add_custom_logo() {

	// Get the image ID.
	$custom_logo_id = get_theme_mod( 'custom_logo' );

	// Get the URL of the image.
	$image_path = wp_get_attachment_image_src( $custom_logo_id )[0];

	// Create the CSS class to assign to the image.
	$custom_class = 'custom-logo';

	// Add a CSS class if the file is an SVG.
	if ( strpos( $image_path, '.svg' ) !== false ) {
		$custom_class .= ' svg';
	}

	// Generate the HTML to output.
	$html = sprintf(
		'<a href="%1$s" class="custom-logo-link" rel="home" itemprop="url">%2$s</a>',
		esc_url( home_url( '/' ) ),
		wp_get_attachment_image(
			$custom_logo_id,
			'full',
			false,
			array(
				'class'    => $custom_class,
				'itemprop' => 'logo',
			)
		)
	);

	return $html;
}
add_filter( 'get_custom_logo', 'add_custom_logo' );
