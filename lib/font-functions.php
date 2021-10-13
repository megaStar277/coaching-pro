<?php
/**
 * Loads all fonts and settings for the Coaching Pro theme.
 *
 * @since 2.0.0
 * @package Coaching Pro Theme
 */

// Returns an array of Google Font names.
// Taken from: https://www.fontpair.co/fonts
function get_gfonts() {
	$gfont_names = array(
		'Alegreya',
		'Archivo',
		'Arvo',
		'BioRhyme Expanded',
		'Bodoni Moda',
		'Caveat',
		'Cinzel',
		'Comfortaa',
		'Coustard',
		'Crimson Pro',
		'DM Sans',
		'Fraunces',
		'IBM Plex Sans',
		'IBM Plex Serif',
		'Inter',
		'Jost',
		'Karla',
		'Lato',
		'Libre Franklin',
		'Lora',
		'Merriweather',
		'Montserrat',
		'Nunito',
		'Open Sans',
		'Oswald',
		'Playfair Display',
		'Poppins',
		'Proza Libre',
		'Quicksand',
		'Rakkas',
		'Raleway',
		'Roboto',
		'Rubik',
		'Source Sans Pro',
		'Source Serif Pro',
		'Space Grotesk',
		'Space Mono',
		'Spartan',
		'Spectral',
		'Ubuntu',
		'Vollkorn',
		'Work Sans',
		'Yellowtail',
		'Zilla Slab'
	);

	return $gfont_names;
}


// Add the Fonts settings to the Customizer.
add_action( 'customize_register', 'coaching_pro_font_settings' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 2.0.0
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function coaching_pro_font_settings() {

	global $wp_customize;

    $appearance = genesis_get_config( 'appearance' );

	// Create an empty array to hold the list of fonts.
	$choices = array();

	// Get the array of Google Fonts.
	$gfonts = get_gfonts();

	// Loop through the gfonts array, add each item to the $choices array in the correct format.
	foreach ($gfonts as $font_family => $item) {
		$choices[$item] = $item;
	}

	// -----------------------------.

    // Add 'Fonts' Customizer Section.
	$wp_customize->add_section(
		'fonts_section',
		array(
			'title'    => __( 'Fonts', 'coaching-pro' ),
			'priority' => 50,
		)
	);

	// -----------------------------.

    // Add 'H1' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_font_h1_setting',
		array(
			'default'           => $appearance['default-fonts']['h1'],
			'sanitize_callback' => 'esc_html',
		)
	);

	// Add 'H1' Control - use the $choices array.
	$wp_customize->add_control(
        'coachpro_theme_font_h1_setting',
        array(
			'type' => 'select',
			'section' => 'fonts_section',
            'label'    => __( 'H1', 'coaching-pro' ),
			'description' => __( 'Choose the font family to use for H1. The default font is: ' ) . $appearance['default-fonts']['h1'],
            'choices' => $choices
        ),
    );

    // -----------------------------.

    // Add 'H2' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_font_h2_setting',
		array(
			'default'           => $appearance['default-fonts']['h2'],
			'sanitize_callback' => 'esc_html',
		)
	);

	// Add 'H2' Control - use the $choices array.
	$wp_customize->add_control(
        'coachpro_theme_font_h2_setting',
        array(
			'type' => 'select',
			'section' => 'fonts_section',
            'label'    => __( 'H2', 'coaching-pro' ),
			'description' => __( 'Choose the font family to use for H2. The default font is: ' ) . $appearance['default-fonts']['h2'],
            'choices' => $choices
        ),
    );

    // -----------------------------.

    // Add 'H3' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_font_h3_setting',
		array(
			'default'           => $appearance['default-fonts']['h3'],
			'sanitize_callback' => 'esc_html',
		)
	);

	// Add 'H3' Control - use the $choices array.
	$wp_customize->add_control(
        'coachpro_theme_font_h3_setting',
        array(
			'type' => 'select',
			'section' => 'fonts_section',
            'label'    => __( 'H3', 'coaching-pro' ),
			'description' => __( 'Choose the font family to use for H3. The default font is: ' ) . $appearance['default-fonts']['h3'],
            'choices' => $choices
        ),
    );

    // -----------------------------.

    // Add 'H4' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_font_h4_setting',
		array(
			'default'           => $appearance['default-fonts']['h4'],
			'sanitize_callback' => 'esc_html',
		)
	);

	// Add 'H4' Control - use the $choices array.
	$wp_customize->add_control(
        'coachpro_theme_font_h4_setting',
        array(
			'type' => 'select',
			'section' => 'fonts_section',
            'label'    => __( 'H4', 'coaching-pro' ),
			'description' => __( 'Choose the font family to use for H4. The default font is: ' ) . $appearance['default-fonts']['h4'],
            'choices' => $choices
        ),
    );

    // -----------------------------.

    // Add 'H5' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_font_h5_setting',
		array(
			'default'           => $appearance['default-fonts']['h5'],
			'sanitize_callback' => 'esc_html',
		)
	);

	// Add 'H5' Control - use the $choices array.
	$wp_customize->add_control(
        'coachpro_theme_font_h5_setting',
        array(
			'type' => 'select',
			'section' => 'fonts_section',
            'label'    => __( 'H5', 'coaching-pro' ),
			'description' => __( 'Choose the font family to use for H5. The default font is: ' ) . $appearance['default-fonts']['h5'],
            'choices' => $choices
        ),
    );

    // -----------------------------.

    // Add 'H6' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_font_h6_setting',
		array(
			'default'           => $appearance['default-fonts']['h6'],
			'sanitize_callback' => 'esc_html',
		)
	);

	// Add 'H6' Control - use the $choices array.
	$wp_customize->add_control(
        'coachpro_theme_font_h6_setting',
        array(
			'type' => 'select',
			'section' => 'fonts_section',
            'label'    => __( 'H6', 'coaching-pro' ),
			'description' => __( 'Choose the font family to use for H6. The default font is: ' ) . $appearance['default-fonts']['h6'],
            'choices' => $choices
        ),
    );

    // -----------------------------.

    // Add 'Primary Nav Menu' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_font_navmenu_setting',
		array(
			'default'           => $appearance['default-fonts']['navmenu'],
			'sanitize_callback' => 'esc_html',
		)
	);

	// Add 'Primary Nav Menu' Control - use the $choices array.
	$wp_customize->add_control(
        'coachpro_theme_font_navmenu_setting',
        array(
			'type' => 'select',
			'section' => 'fonts_section',
            'label'    => __( 'Primary Nav Menu', 'coaching-pro' ),
			'description' => __( 'Choose the font family to use for the Primary Nav Menu. The default font is: ' ) . $appearance['default-fonts']['navmenu'],
            'choices' => $choices
        ),
    );

    // -----------------------------.

    // Add 'Body Text' Setting.
	$wp_customize->add_setting(
		'coachpro_theme_font_body_setting',
		array(
			'default'           => $appearance['default-fonts']['body'],
			'sanitize_callback' => 'esc_html',
		)
	);

	// Add 'Body Text' Control - use the $choices array.
	$wp_customize->add_control(
        'coachpro_theme_font_body_setting',
        array(
			'type' => 'select',
			'section' => 'fonts_section',
            'label'    => __( 'Body Text', 'coaching-pro' ),
			'description' => __( 'Choose the font family to use for Body text. The default font is: ' ) . $appearance['default-fonts']['body'],
            'choices' => $choices
        ),
    );

    // -----------------------------.

}


/**
 * Output the inline CSS to the front end of Coaching Pro theme.
 *
 * @since 2.0.0
 */
function coaching_pro_fonts_css() {

    $appearance = genesis_get_config( 'appearance' );

	$editor_fonts = $appearance['editor-fonts'];

    $css = "
		/* ********* GOOGLE FONTS ********* */
		";

    foreach ( $editor_fonts as $font ) {

		// Fonts for body tag.
		if ( 'body' === $font['slug'] ) {

			$css .= "
			body {
				font-family: '{$font['font']}';
			}
			";

		}

		// Fonts for .site-inner container.
		$css .= "

		.site-container {$font['tag']} {
			font-family: '{$font['font']}';
		}
		";

		// Fonts for pullquote blocks - default is font assigned to 'h3' tags.
		if ( 'h3' === $font['slug'] ) {

			$css .= "

			.wp-block-pullquote blockquote::before,
			.wp-block-pullquote blockquote p {
				font-family: '{$font['font']}';
			}
			";

		}

	}

    // Output inline styles.
	if ( $css ) {
		wp_add_inline_style( genesis_get_theme_handle(), $css );
	}

}
add_action( 'wp_enqueue_scripts', 'coaching_pro_fonts_css' );
