<?php
/**
 * Custom WooCommerce functions for the Coaching Pro theme.
 *
 * @package Coaching Pro
 */

add_action( 'wp_enqueue_scripts', 'coachingpro_custom_woocommerce_css' );
/**
 * Forces the WooCommerce elements to use the "Mobile Menu Button Color" Customizer setting.
 */
function coachingpro_custom_woocommerce_css() {

	wp_enqueue_style( genesis_get_theme_handle() . '-woocommerce-custom-styles', get_theme_file_uri( '/woocommerce.css' ) );

	$appearance = genesis_get_config( 'appearance' );

	$text_color1 = get_theme_mod( 'coachpro_theme_textcolor_1_setting', $appearance['default-colors']['textcolor1'] );
	$links_color = get_theme_mod( 'coachpro_theme_linkscolor_setting', $appearance['default-colors']['textcolor1'] );
	$button_hover_bg_color = get_theme_mod( 'coachpro_theme_color_1_setting', $appearance['default-colors']['color1'] );
	$bg_color1 = get_theme_mod( 'coachpro_theme_bgcolor_1_setting', $appearance['default-colors']['bgcolor1'] );

	// Get WooCommerce accent color.
	$woo_accent_color = get_theme_mod( 'coachpro_theme_wooaccentcolor_setting', $appearance['default-colors']['color2'] );

	// Determine contrasting colors for button text.
	$button_text_color = coaching_pro_color_contrast( $woo_accent_color );
	$button_hover_text_color = coaching_pro_color_contrast( $button_hover_bg_color );

	$css = '';

	$css .= sprintf(
		'
		.woocommerce #respond input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button,
		.woocommerce input.button.woocommerce #respond input#submit.alt,
		.woocommerce a.button.alt,
		.woocommerce button.button.alt,
		.woocommerce input.button.alt,
		.woocommerce button[class*="add_to_cart_button"],
		.woocommerce a[class*="add_to_cart_button"],
		.woocommerce button.button:disabled,
		.woocommerce button.button:disabled[disabled],
		.woocommerce button.button:disabled:hover,
		.woocommerce button.button:disabled:focus,
		.woocommerce button.button:disabled[disabled],
		.woocommerce button.button:disabled[disabled]:hover,
		.woocommerce button.button:disabled[disabled]:focus,
		.woocommerce button.button.alt.disabled,
		.woocommerce button.button.alt.disabled:hover,
		.woocommerce button.button.alt.disabled:focus,
		.woocommerce nav.woocommerce-pagination ul li a:focus,
		.woocommerce nav.woocommerce-pagination ul li a:hover,
		.woocommerce nav.woocommerce-pagination ul li span.current,
		.woocommerce ul.products li.product span.onsale,
		.woocommerce .single-product span.onsale,
		.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link {
			background-color: %1$s;
			color: %2$s;
		}

		.woocommerce #respond input#submit:hover,
		.woocommerce #respond input#submit:focus,
		.woocommerce a.button:hover,
		.woocommerce a.button:focus,
		.woocommerce button.button:hover,
		.woocommerce button.button:focus
		.woocommerce input.button.woocommerce #respond input#submit.alt:hover,
		.woocommerce input.button.woocommerce #respond input#submit.alt:focus,
		.woocommerce a.button.alt:hover,
		.woocommerce a.button.alt:focus,
		.woocommerce button.button.alt:hover,
		.woocommerce button.button.alt:focus,
		.woocommerce input.button.alt:hover,
		.woocommerce input.button.alt:focus,
		.woocommerce button[class*="add_to_cart_button"]:hover,
		.woocommerce button[class*="add_to_cart_button"]:focus,
		.woocommerce a[class*="add_to_cart_button"]:hover,
		.woocommerce a[class*="add_to_cart_button"]:focus,
		.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover,
		.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:focus {
			background-color: %3$s;
			color: %4$s;
		}

		.woocommerce ul.products > li.product a .woocommerce-loop-product__title {
			color: %5$s;
		}

		.woocommerce ul.products li.product p.price,
		.woocommerce ul.products li.product span.price,
		.woocommerce div.product p.price,
		.woocommerce div.product span.price,
		.woocommerce-message:before,
		.woocommerce-info:before,
		.woocommerce-account nav.woocommerce-MyAccount-navigation ul li.is-active a,
		.woocommerce-account nav.woocommerce-MyAccount-navigation ul li a:hover {
			color: %1$s;
		}

		.woocommerce-message,
		.woocommerce-info {
			border-top-color: %1$s;
		}

		.single-product #genesis-content .woocommerce .single-product .related.products,
		.woocommerce nav.woocommerce-pagination ul li a {
			background-color: %6$s;
		}

		.woocommerce-account #genesis-content .woocommerce nav.woocommerce-MyAccount-navigation {
			border-color: %1$s;
		}

		.wc-block-grid__product-onsale {
			color: %1$s;
			border-color: %1$s;
		}

		',
		$woo_accent_color,
		$button_text_color,
		$button_hover_bg_color,
		$button_hover_text_color,
		$text_color1,
		$bg_color1

	);

	if ( $css ) {
		wp_add_inline_style( genesis_get_theme_handle() . '-woocommerce-custom-styles', $css );
	}

}
