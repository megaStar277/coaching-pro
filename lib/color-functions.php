<?php
/**
 * Loads all colors and settings for the Coaching Pro theme.
 *
 * @since 2.0.0
 * @package Coaching Pro Theme
 */

// Add the Color Palette settings to the Customizer.
add_action( 'customize_register', 'coaching_pro_color_settings' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 2.0.0
 * @param WP_Customize_Manager $wp_customize Customizer object.
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
	$wp_customize->add_setting( 'coachingpro_separator', array(
		'sanitize_callback' => 'coachingpro_sanitize',
	) );
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

    // Add 'Links Color' Setting.
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

}

// Get the Appearance settings.
$appearance = genesis_get_config( 'appearance' );

// Add support for the Block Editor Color Palette.
add_theme_support( 'editor-color-palette', $appearance['editor-color-palette'] );


/**
 * Output the inline CSS to the front end of Coaching Pro theme.
 *
 * @since 2.0.0
 */
function coaching_pro_color_css() {

    $appearance = genesis_get_config( 'appearance' );
	$editor_color_palette = $appearance['editor-color-palette'];

	$color_one = get_theme_mod( 'coachpro_theme_color_1_setting', $appearance['default-colors']['color1'] );
	$color_two = get_theme_mod( 'coachpro_theme_color_2_setting', $appearance['default-colors']['color2'] );

	$links_color = get_theme_mod( 'coachpro_theme_linkscolor_setting', $appearance['default-colors']['textcolor1'] );
	$mobilemenubutton_color = get_theme_mod( 'coachpro_theme_mobilemenubutton_setting', $appearance['default-colors']['color2'] );

    $css = '';

    foreach ( $editor_color_palette as $color_info ) {

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

		.site-container .wp-block-button.is-style-outline .wp-block-button__link.has-{$color_info['slug']}-background-color {
			background-color: transparent !important;
			border-color: {$color_info['color']} !important;
			color: {$color_info['color']} !important;
		}
	";

	}

	// Output colors for links.
	$css .= "

		a {
			color: " . $links_color . ";
		}
	";

	// Output colors for non-editable buttons: pagination, read more links, etc.
	$css .= "

		.pagination li a {
			background-color: " . $color_one . ";
			color: #fff;
		}

		.pagination li a:hover {
			background-color: " . $color_two . ";
		}

		a.more-link.button,
		.pagination li.active a {
			background-color: " . $color_two . ";
		}

		a.more-link.button:hover,
		.pagination li.active a:hover {
			background-color: " . $color_one . ";
			border-bottom: none;
		}
	";

	// Assign hover colors for white/orange buttons.
	$css .= "

		.wp-block-button .wp-block-button__link.has-white-background-color.has-colortwo-color:hover {
			background-color: " . $color_two . " !important;
		}
		.wp-block-button .wp-block-button__link.has-white-background-color.has-colortwo-color:hover {
			color: " . $appearance['default-colors']['white'] . " !important;
		}
	";

	// Assign hover colors for orange/white buttons.
	$css .= "

		.wp-block-button .wp-block-button__link.has-colortwo-background-color.has-white-color:hover {
			background-color: " . $color_one . ";
		}
	";

	// Output color for Mobile Menu Button.
	$css .= "

		button.menu-toggle,
		button.sub-menu-toggle,
		.wp-block-search__button {
			background-color: " . $mobilemenubutton_color . ";
		}

		button.menu-toggle:hover,
		button.menu-toggle:focus,
		button.sub-menu-toggle:hover,
		button.sub-menu-toggle:focus,
		.wp-block-search__button:hover,
		.wp-block-search__button:focus {
			background-color: " . $color_one . ";
		}
	";

    // Output inline styles.
	if ( $css ) {
		wp_add_inline_style( genesis_get_theme_handle(), $css );
	}

}
add_action( 'wp_enqueue_scripts', 'coaching_pro_color_css' );

if ( ! class_exists( 'Separator_Control' ) ) {
	return null;
}

/**
 * Class Prefix_Separator_Control
 *
 * Custom control to display separator
 */
class Separator_Control extends WP_Customize_Control {
	public function render_content() {
		?>
		<label><hr></label>
		<?php
	}
}
