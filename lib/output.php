<?php
/**
 * Coaching Pro Theme Front Page Images
 *
 * This file adds the required CSS to the front end to the Coaching Pro Theme
 *
 * @package Coaching Pro
 * @author  BrandiD
 * @license GPL-2.0+
 * @link    https://thebrandid.com
 */

add_action( 'wp_enqueue_scripts', 'coaching_pro_css_output' );
/**
 * Checks the settings for the home page images.
 * If any of these value are set the appropriate CSS is output.
 *
 * @since 2.2.3
 */
function coaching_pro_css_output() {

	if ( ! is_front_page()) {
		return;
	}

	$handle  = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? sanitize_title_with_dashes( CHILD_THEME_NAME ) : 'child-theme';

	$opts = apply_filters( 'coaching_pro_images', array( '1', '2', '3' ) );

	$settings = array();

	foreach ( $opts as $opt ) {

		$settings[ $opt ]['image'] = preg_replace( '/^https?:/', '', get_theme_mod( $opt .'-coach-image', sprintf( '%s/images/bg-%s.jpg', CHILD_THEME_URI, $opt ) ) );
		if ('3' === $opt ) {
			$settings[ $opt ]['image'] = preg_replace( '/^https?:/', '', get_theme_mod( $opt .'-coach-image', sprintf( '%s/images/bg-%s.png', CHILD_THEME_URI, $opt ) ) );

		}
		$settings[ $opt ]['image-repeat'] = get_theme_mod( $opt .'-coach-image-repeat' );
		$settings[ $opt ]['image-size'] = get_theme_mod( $opt .'-coach-image-size' );
		$settings[ $opt ]['image-coach-image-position-x'] = get_theme_mod( $opt .'-coach-image-position-x' );
		$settings[ $opt ]['image-coach-image-position-y'] = get_theme_mod( $opt .'-coach-image-position-y' );
		$settings[ $opt ]['image-coach-image-overlay'] = get_theme_mod( $opt .'-coach-image-overlay' );
		$settings[ $opt ]['image-coach-image-overlay-color'] = get_theme_mod( $opt .'-coach-image-overlay-color' );
	}

	$css = '';

	foreach ( $settings as $section => $value ) {
		$background_repeat = $value['image-repeat'] ? $value['image-repeat'] : 'no-repeat' ;
		$background_size = $value['image-size'] ? $value['image-size'] : 'cover' ;
		$background_pos_x = $value['image-coach-image-position-x'] ? $value['image-coach-image-position-x'] : 'center' ;
		$background_pos_y = $value['image-coach-image-position-y'] ? $value['image-coach-image-position-y'] : 'center' ;
		$background = $value['image'] ? sprintf( 'background: url(%s) %s %s %s/%s;', $value['image'], $background_repeat, $background_pos_x, $background_pos_y ,  $background_size ) : '';
		if (null === $value['image-coach-image-overlay'] ) {
			if ( 1 === $section || 2 === $section ) {
				$value['image-coach-image-overlay'] = '0.4';
			} else {
				$value['image-coach-image-overlay'] = '0.1';
			}
		}
		$background_overlay = $value['image-coach-image-overlay'];
		$background_overlay_color = $value['image-coach-image-overlay-color'] ? $value['image-coach-image-overlay-color'] : '#333333' ;
		$background_overlay_rgba = coaching_pro_convert_hex2rgba( $background_overlay_color, $background_overlay );

		if ( is_front_page() ) {

			if ( 1 === $section  ) {
				$css .= ( ! empty( $section ) && ! empty( $background ) ) ? sprintf( '.front-page-welcome { %s }', $background ) : '';
				$css .= ( ! empty( $section ) && ! empty( $background_overlay ) ) ? '.front-page-welcome:before { background: ' . $background_overlay_rgba . '}' : '';
			} elseif ( 2 === $section ) {

				$css .= ( ! empty( $section ) && ! empty( $background ) ) ? sprintf( '.front-page-cta { %s }',  $background ) : '';
				$css .= ( ! empty( $section ) && ! empty( $background_overlay ) ) ? '.front-page-cta:before { background: ' . $background_overlay_rgba . '}' : '';

			} else {
				$css .= ( ! empty( $section ) && ! empty( $background ) ) ? sprintf( '.front-page-offer:before { %s %s }',  $background, 'opacity: ' . $background_overlay ) : '';
			}
		}
	}

	if ( $css ) {
		wp_add_inline_style( $handle, $css );
	}
}
