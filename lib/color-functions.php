<?php
/**
 * Loads all colors and settings for the Coaching Pro theme.
 *
 * @package Coaching Pro Theme
 */

/**
 * Register settings and controls with the Customizer.
 */
function coaching_pro_color_settings() {

	global $wp_customize;

	$appearance = genesis_get_config( 'appearance' );

	// Add 'Color Palette' Section.
	$wp_customize->add_section(
		'color_palette_section',
		array(
			'title'    => __( 'Color Palette', 'coaching-pro' ),
			'priority' => 40,
		)
	);

	// -----------------------------.

	// Add 'Color 1' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_color_1_setting',
		array(
			'default'           => $appearance['default-colors']['color1'],
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	// Add 'Color 1' Control.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coachpro_theme_color_1_setting',
			array(
				'label'    => __( 'Color 1', 'coaching-pro' ),
				'section'  => 'color_palette_section',
				'settings' => 'coachpro_theme_color_1_setting',
			)
		)
	);

	// -----------------------------.

	// Add 'Color 2' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_color_2_setting',
		array(
			'default'           => $appearance['default-colors']['color2'],
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	// Add 'Color 2' Control.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coachpro_theme_color_2_setting',
			array(
				'label'    => __( 'Color 2', 'coaching-pro' ),
				'section'  => 'color_palette_section',
				'settings' => 'coachpro_theme_color_2_setting',
			)
		)
	);

	// -----------------------------.

	// Add 'Color 3' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_color_3_setting',
		array(
			'default'           => $appearance['default-colors']['color3'],
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	// Add 'Color 3' Control.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coachpro_theme_color_3_setting',
			array(
				'label'    => __( 'Color 3', 'coaching-pro' ),
				'section'  => 'color_palette_section',
				'settings' => 'coachpro_theme_color_3_setting',
			)
		)
	);

	// -----------------------------.

	// Add 'Color 4' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_color_4_setting',
		array(
			'default'           => $appearance['default-colors']['color4'],
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	// Add 'Color 4' Control.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coachpro_theme_color_4_setting',
			array(
				'label'    => __( 'Color 4', 'coaching-pro' ),
				'section'  => 'color_palette_section',
				'settings' => 'coachpro_theme_color_4_setting',
			)
		)
	);

	// -----------------------------.

	// Add 'Text Color 1' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_textcolor_1_setting',
		array(
			'default'           => $appearance['default-colors']['textcolor1'],
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	// Add 'Text Color 1' Control.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coachpro_theme_textcolor_1_setting',
			array(
				'label'    => __( 'Text Color 1', 'coaching-pro' ),
				'section'  => 'color_palette_section',
				'settings' => 'coachpro_theme_textcolor_1_setting',
			)
		)
	);

	// -----------------------------.

	// Add 'Text Color 2' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_textcolor_2_setting',
		array(
			'default'           => $appearance['default-colors']['textcolor2'],
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	// Add 'Text Color 2' Control.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coachpro_theme_textcolor_2_setting',
			array(
				'label'    => __( 'Text Color 2', 'coaching-pro' ),
				'section'  => 'color_palette_section',
				'settings' => 'coachpro_theme_textcolor_2_setting',
			)
		)
	);

	// -----------------------------.

	// Add 'BG Color 1' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_bgcolor_1_setting',
		array(
			'default'           => $appearance['default-colors']['bgcolor1'],
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	// Add 'BG Color 1' Control.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coachpro_theme_bgcolor_1_setting',
			array(
				'label'    => __( 'Background Color 1', 'coaching-pro' ),
				'section'  => 'color_palette_section',
				'settings' => 'coachpro_theme_bgcolor_1_setting',
			)
		)
	);

	// -----------------------------.

	// Add 'BG Color 2' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_bgcolor_2_setting',
		array(
			'default'           => $appearance['default-colors']['bgcolor2'],
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	// Add 'BG Color 2' Control.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coachpro_theme_bgcolor_2_setting',
			array(
				'label'    => __( 'Background Color 2', 'coaching-pro' ),
				'section'  => 'color_palette_section',
				'settings' => 'coachpro_theme_bgcolor_2_setting',
			)
		)
	);

	// -----------------------------.

	// Separator.
	$wp_customize->add_setting(
		'coachingpro_separator',
		array(
			'sanitize_callback' => 'coachingpro_sanitize',
		)
	);
	$wp_customize->add_control(
		new Separator_Control(
			$wp_customize,
			'coachingpro_separator',
			array(
				'section' => 'color_palette_section',
			)
		)
	);

	// -----------------------------.

	// Add 'WooCommerce Accent Color' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_linkscolor_setting',
		array(
			'default'           => $appearance['default-colors']['textcolor1'],
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	// Add 'Links Color' Control.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coachpro_theme_linkscolor_setting',
			array(
				'label'    => __( 'Links Color', 'coaching-pro' ),
				'section'  => 'color_palette_section',
				'settings' => 'coachpro_theme_linkscolor_setting',
			)
		)
	);

	// -----------------------------.

	// Add 'Mobile Menu Button Color' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_mobilemenubutton_setting',
		array(
			'default'           => $appearance['default-colors']['color2'],
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	// Add 'Mobile Menu Button Color' Control.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coachpro_theme_mobilemenubutton_setting',
			array(
				'label'    => __( 'Mobile Menu Button Color', 'coaching-pro' ),
				'section'  => 'color_palette_section',
				'settings' => 'coachpro_theme_mobilemenubutton_setting',
			)
		)
	);

	// -----------------------------.

	// Add color settings for WooCommerce.
	if ( class_exists( 'WooCommerce' ) ) {

		// Separator.
		$wp_customize->add_setting(
			'coachingpro_separator_2',
			array(
				'sanitize_callback' => 'coachingpro_sanitize',
			)
		);
		$wp_customize->add_control(
			new Separator_Control(
				$wp_customize,
				'coachingpro_separator_2',
				array(
					'section' => 'color_palette_section',
				)
			)
		);

		// Add 'WooCommerce Accent Color' Setting.
		$wp_customize->add_setting(
			'coachpro_theme_wooaccentcolor_setting',
			array(
				'default'           => $appearance['default-colors']['color2'],
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		// Add 'WooCommerce Accent Color' Control.
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'coachpro_theme_wooaccentcolor_setting',
				array(
					'label'    => __( 'WooCommerce Accent Color', 'coaching-pro' ),
					'section'  => 'color_palette_section',
					'settings' => 'coachpro_theme_wooaccentcolor_setting',
				)
			)
		);

	}

	// -----------------------------.

	// Add color settings for Easy Digital Downloads.
	if ( class_exists( 'Easy_Digital_Downloads' ) ) {

		// Separator.
		$wp_customize->add_setting(
			'coachingpro_separator_3',
			array(
				'sanitize_callback' => 'coachingpro_sanitize',
			)
		);
		$wp_customize->add_control(
			new Separator_Control(
				$wp_customize,
				'coachingpro_separator_3',
				array(
					'section' => 'color_palette_section',
				)
			)
		);

		// Add 'Easy Digital Downloads Accent Color' Setting.
		$wp_customize->add_setting(
			'coachpro_theme_eddaccentcolor_setting',
			array(
				'default'           => $appearance['default-colors']['color2'],
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		// Add 'Easy Digital Downloads Accent Color' Control.
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'coachpro_theme_eddaccentcolor_setting',
				array(
					'label'    => __( 'Easy Digital Downloads Accent Color', 'coaching-pro' ),
					'section'  => 'color_palette_section',
					'settings' => 'coachpro_theme_eddaccentcolor_setting',
				)
			)
		);

	}
}
add_action( 'customize_register', 'coaching_pro_color_settings' );

/**
 * Output the inline CSS to the front end of Coaching Pro theme.
 */
function coaching_pro_color_css() {

	$appearance           = genesis_get_config( 'appearance' );
	$editor_color_palette = $appearance['editor-color-palette'];

	$color_one = get_theme_mod( 'coachpro_theme_color_1_setting', $appearance['default-colors']['color1'] );
	$color_two = get_theme_mod( 'coachpro_theme_color_2_setting', $appearance['default-colors']['color2'] );

	$color_bg1 = get_theme_mod( 'coachpro_theme_bgcolor_1_setting', $appearance['default-colors']['bgcolor1'] );
	$color_bg2 = get_theme_mod( 'coachpro_theme_bgcolor_2_setting', $appearance['default-colors']['bgcolor2'] );

	$links_color            = get_theme_mod( 'coachpro_theme_linkscolor_setting', $appearance['default-colors']['textcolor1'] );
	$mobilemenubutton_color = get_theme_mod( 'coachpro_theme_mobilemenubutton_setting', $appearance['default-colors']['color2'] );

	// Determine contrasting colors for button text.
	$button_text_color       = coaching_pro_color_contrast( $color_two );
	$button_hover_text_color = coaching_pro_color_contrast( $color_one );

	$css = '';

	foreach ( $editor_color_palette as $color_info ) {

		$contrast_color = coaching_pro_color_contrast( $color_info['color'] );

		$css .= "

		.site-container .has-{$color_info['slug']}-color,
		.site-container .wp-block-button .wp-block-button__link.has-{$color_info['slug']}-color,
		.site-container .wp-block-button.is-style-outline .wp-block-button__link.has-{$color_info['slug']}-color {
			color: {$color_info['color']};
		}

		.site-container .has-{$color_info['slug']}-background-color,
		.site-container .wp-block-button .wp-block-button__link.has-{$color_info['slug']}-background-color {
			background-color: {$color_info['color']};
		}

		.site-container .wp-block-pullquote.is-style-solid-color.has-{$color_info['slug']}-background-color {
			background-color: {$color_info['color']} !important;
		}

		.site-container .wp-block-button.is-style-outline .wp-block-button__link.has-{$color_info['slug']}-color:hover,
		.site-container .wp-block-button.is-style-outline .wp-block-button__link.has-{$color_info['slug']}-color:focus {
			background-color: {$color_info['color']};
			border: 2px solid {$color_info['color']};
			color: {$contrast_color};
		}

		.site-container .wp-block-button.is-style-outline .wp-block-button__link.has-{$color_info['slug']}-background-color {
			background-color: transparent !important;
			border-color: {$color_info['color']} !important;
			color: {$color_info['color']} !important;
		}
	";

	}

	// Output colors for links.
	$css .= '

		a {
			color: ' . $links_color . ';
		}
	';

	// Output colors for non-editable buttons: navigation menu, pagination, read more links, etc.
	$css .= '

		@media screen and (max-width: 1023px) {

			.site-header .genesis-responsive-menu .genesis-nav-menu {
				background-color: ' . $color_bg2 . ';
			}

			.site-header .genesis-responsive-menu .genesis-nav-menu .sub-menu {
				background-color: ' . $color_bg1 . ';
			}

		}

		.genesis-responsive-menu .genesis-nav-menu li.current-menu-item > a,
		.genesis-responsive-menu .genesis-nav-menu li.current-menu-ancestor > a {
			color: ' . $color_two . ';
		}

		/* PAGINATION */
		.archive-pagination ul {
			background-color: ' . $color_bg1 . ';
		}

		.archive-pagination ul li a,
		.archive-pagination ul li.pagination-omission {
			background-color: ' . $color_bg1 . ';
			color: ' . $links_color . ';
		}

		.archive-pagination ul li a:focus,
		.archive-pagination ul li a:hover,
		.archive-pagination ul li.active a {
			background-color: ' . $color_two . ';
			color: ' . $button_hover_text_color . ';
		}

		a.more-link.button,
		.sidebar .widget.widget_search .wp-block-search__inside-wrapper .wp-block-search__button,
		.search-form input[type="submit"].search-form-submit {
			background-color: ' . $color_two . ';
			color: ' . $button_text_color . ';
		}

		a.more-link.button:hover,
		.sidebar .widget.widget_search .wp-block-search__inside-wrapper .wp-block-search__button:focus,
		.sidebar .widget.widget_search .wp-block-search__inside-wrapper .wp-block-search__button:hover,
		.search-form input[type="submit"].search-form-submit:focus,
		.search-form input[type="submit"].search-form-submit:hover {
			background-color: ' . $color_one . ';
			color: ' . $button_hover_text_color . ';
		}
	';

	// Assign hover colors for white/orange buttons.
	$css .= '

		.wp-block-button .wp-block-button__link.has-white-background-color.has-colortwo-color:hover {
			background-color: ' . $color_two . ' !important;
		}
		.wp-block-button .wp-block-button__link.has-white-background-color.has-colortwo-color:hover {
			color: ' . $appearance['default-colors']['white'] . ' !important;
		}
	';

	// Assign hover colors for orange/white buttons.
	$css .= '

		.wp-block-button .wp-block-button__link.has-colortwo-background-color.has-white-color:hover {
			background-color: ' . $color_one . ';
		}
	';

	// Output color for Mobile Menu Button.
	$css .= '

		button.menu-toggle,
		button.sub-menu-toggle,
		.wp-block-search__button {
			background-color: ' . $mobilemenubutton_color . ';
		}

		button.menu-toggle:hover,
		button.menu-toggle:focus,
		button.sub-menu-toggle:hover,
		button.sub-menu-toggle:focus,
		.wp-block-search__button:hover,
		.wp-block-search__button:focus {
			background-color: ' . $color_one . ';
		}
	';

	// Output inline styles.
	if ( $css ) {
		wp_add_inline_style( genesis_get_theme_handle(), $css );
	}

}
add_action( 'wp_enqueue_scripts', 'coaching_pro_color_css' );

if ( ! class_exists( 'Separator_Control' ) ) {
	return null;
}
