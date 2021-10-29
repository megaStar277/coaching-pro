<?php
/**
 * Custom WPForms functions for the Coaching Pro theme.
 *
 * @package Coaching Pro
 */

add_action( 'wp_enqueue_scripts', 'coachingpro_custom_wpforms_colors_css' );
/**
 * Forces the WooCommerce elements to use the "Mobile Menu Button Color" Customizer setting.
 */
function coachingpro_custom_wpforms_colors_css() {

	wp_enqueue_style( genesis_get_theme_handle() . '-wpforms-custom-styles', get_theme_file_uri( '/wpforms.css' ) );

	$appearance = genesis_get_config( 'appearance' );

	// Get Customizer colors.
	$accent_color = get_theme_mod( 'coachpro_theme_color_2_setting', $appearance['default-colors']['color2'] );
	$button_hover_bg_color = get_theme_mod( 'coachpro_theme_color_1_setting', $appearance['default-colors']['color1'] );

	// Determine contrasting colors for button text.
	$button_text_color = coaching_pro_color_contrast( $accent_color );
	$button_hover_text_color = coaching_pro_color_contrast( $button_hover_bg_color );

	$css = '';

	$css .= sprintf(
		'
		.wpforms-widget .wpforms-container form.wpforms-form button,
		.wpforms-widget .wpforms-container form.wpforms-form button[type="submit"],
		.wpforms-widget .wpforms-container form.wpforms-form a.button,
		.wpforms-widget .wpforms-container form.wpforms-form button.white:hover,
		.wpforms-widget .wpforms-container form.wpforms-form button.white:focus,
		.wpforms-widget .wpforms-container form.wpforms-form button[type="submit"].white:hover,
		.wpforms-widget .wpforms-container form.wpforms-form button[type="submit"].white:focus,
		.wpforms-widget .wpforms-container form.wpforms-form a.button.white:hover,
		.wpforms-widget .wpforms-container form.wpforms-form a.button.white:focus {
			background-color: %1$s;
			color: %2$s;
		}

		.wpforms-widget .wpforms-container form.wpforms-form button.white,
		.wpforms-widget .wpforms-container form.wpforms-form button[type="submit"].white,
		.wpforms-widget .wpforms-container form.wpforms-form a.button.white {
			background-color: #fff;
			color: %3$s;
		}

		.wpforms-widget .wpforms-container form.wpforms-form button:hover,
		.wpforms-widget .wpforms-container form.wpforms-form button:focus,
		.wpforms-widget .wpforms-container form.wpforms-form button[type="submit"]:hover,
		.wpforms-widget .wpforms-container form.wpforms-form button[type="submit"]:focus,
		.wpforms-widget .wpforms-container form.wpforms-form a.button:hover,
		.wpforms-widget .wpforms-container form.wpforms-form a.button:focus {
			background-color: %3$s;
			color: %4$s;
		}

		',
		$accent_color,
		$button_text_color,
		$button_hover_bg_color,
		$button_hover_text_color

	);

	if ( $css ) {
		wp_add_inline_style( genesis_get_theme_handle() . '-wpforms-custom-styles', $css );
	}

}
