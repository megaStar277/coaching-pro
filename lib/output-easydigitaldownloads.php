<?php
/**
 * Custom Easy Digital Downloads functions for the Coaching Pro theme.
 *
 * @package Coaching Pro
 */

add_action( 'wp_enqueue_scripts', 'coachingpro_custom_edd_colors_css' );
/**
 * Forces the WooCommerce elements to use the "Mobile Menu Button Color" Customizer setting.
 */
function coachingpro_custom_edd_colors_css() {

	wp_enqueue_style( genesis_get_theme_handle() . '-edd-custom-styles', get_theme_file_uri( '/easydigitaldownloads.css' ) );

	$appearance = genesis_get_config( 'appearance' );

	// Get EDD accent color.
	$edd_accent_color = get_theme_mod( 'coachpro_theme_eddaccentcolor_setting', $appearance['default-colors']['color2'] );

	$button_hover_bg_color = get_theme_mod( 'coachpro_theme_color_1_setting', $appearance['default-colors']['color1'] );
	$bg_color1 = get_theme_mod( 'coachpro_theme_bgcolor_1_setting', $appearance['default-colors']['bgcolor1'] );

	// Determine contrasting colors for button text.
	$button_text_color = coaching_pro_color_contrast( $edd_accent_color );
	$button_hover_text_color = coaching_pro_color_contrast( $button_hover_bg_color );

	$css = '';

	$css .= sprintf(
		'
		.edd-page #genesis-content a.button,
		.edd-page #genesis-content button.button,
		.edd-page #genesis-content input.button,
		.edd-page #genesis-content a.button.blue,
		.edd-page #genesis-content button.button.blue,
		.edd-page #genesis-content input.button.blue,
		.edd-pagination-wrap .edd-pagination .page-numbers:focus,
		.edd-pagination-wrap .edd-pagination .page-numbers:hover,
		.edd-pagination-wrap .edd-pagination .page-numbers.current {
			background-color: %1$s;
			color: %2$s;
		}

		.edd-page #genesis-content a.button:hover,
		.edd-page #genesis-content button.button:hover,
		.edd-page #genesis-content input.button:hover,
		.edd-page #genesis-content a.button:focus,
		.edd-page #genesis-content button.button:focus,
		.edd-page #genesis-content input.button:focus,
		.edd-page #genesis-content a.button.blue:hover,
		.edd-page #genesis-content button.button.blue:hover,
		.edd-page #genesis-content input.button.blue:hover,
		.edd-page #genesis-content a.button.blue:focus,
		.edd-page #genesis-content button.button.blue:focus,
		.edd-page #genesis-content input.button.blue:focus {
			background-color: %3$s;
			color: %4$s;
		}

		.edd-page #genesis-content .product-price {
			color: %1$s;
		}

		.edd-pagination-wrap .edd-pagination .page-numbers {
			background-color: %5$s;
		}

		',
		$edd_accent_color,
		$button_text_color,
		$button_hover_bg_color,
		$button_hover_text_color,
		$bg_color1

	);

	if ( $css ) {
		wp_add_inline_style( genesis_get_theme_handle() . '-edd-custom-styles', $css );
	}

}
