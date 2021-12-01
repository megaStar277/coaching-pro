<?php
/**
 * Custom WPForms functions for the Coaching Pro theme.
 *
 * @package Coaching Pro
 */

/**
 * Enqueues assets for the WPForms plugin.
 */
function coachingpro_custom_wpforms_colors_css() {

	wp_enqueue_style( genesis_get_theme_handle() . '-wpforms-custom-styles', get_stylesheet_directory_uri() . '/css/wpforms.css', '', CHILD_THEME_VERSION );

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
		div.wpforms-container-full form.wpforms-form button,
		div.wpforms-container-full form.wpforms-form button[type=submit],
		div.wpforms-container-full form.wpforms-form a.button,
		div.wpforms-container-full form.wpforms-form button.white:hover,
		div.wpforms-container-full form.wpforms-form button.white:focus,
		div.wpforms-container-full form.wpforms-form button[type=submit].white:hover,
		div.wpforms-container-full form.wpforms-form button[type=submit].white:focus,
		div.wpforms-container-full form.wpforms-form a.button.white:hover,
		div.wpforms-container-full form.wpforms-form a.button.white:focus {
			background-color: %1$s;
			color: %2$s;
		}

		div.wpforms-container-full form.wpforms-form button.white,
		div.wpforms-container-full form.wpforms-form button[type=submit].white,
		div.wpforms-container-full form.wpforms-form a.button.white {
			background-color: #fff;
			color: %3$s;
		}

		div.wpforms-container-full form.wpforms-form button:hover,
		div.wpforms-container-full form.wpforms-form button:focus,
		div.wpforms-container-full form.wpforms-form button[type=submit]:hover,
		div.wpforms-container-full form.wpforms-form button[type=submit]:focus,
		div.wpforms-container-full form.wpforms-form a.button:hover,
		div.wpforms-container-full form.wpforms-form a.button:focus {
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
add_action( 'wp_enqueue_scripts', 'coachingpro_custom_wpforms_colors_css' );
