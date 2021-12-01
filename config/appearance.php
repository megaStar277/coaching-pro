<?php
/**
 * Coaching Pro appearance settings.
 *
 * @package Coaching Pro
 */

// Define the default color palette.
$coachpro_default_colors = array(
	'color1'     => '#56585d',
	'color2'     => '#d46a43',
	'color3'     => '#6e6872',
	'color4'     => '#5c4a28',
	'textcolor1' => '#939393',
	'textcolor2' => '#8a8a8a',
	'bgcolor1'   => '#f0efee',
	'bgcolor2'   => '#f8f8f8',
	'white'      => '#ffffff',
	'black'      => '#000000',
);

// Define the Customizer colors - assign the default color if it is not changed in the Customizer.
$coachpro_color_1     = get_theme_mod( 'coachpro_theme_color_1_setting', $coachpro_default_colors['color1'] );
$coachpro_color_2     = get_theme_mod( 'coachpro_theme_color_2_setting', $coachpro_default_colors['color2'] );
$coachpro_color_3     = get_theme_mod( 'coachpro_theme_color_3_setting', $coachpro_default_colors['color3'] );
$coachpro_color_4     = get_theme_mod( 'coachpro_theme_color_4_setting', $coachpro_default_colors['color4'] );
$coachpro_textcolor_1 = get_theme_mod( 'coachpro_theme_textcolor_1_setting', $coachpro_default_colors['textcolor1'] );
$coachpro_textcolor_2 = get_theme_mod( 'coachpro_theme_textcolor_2_setting', $coachpro_default_colors['textcolor2'] );
$coachpro_bgcolor_1   = get_theme_mod( 'coachpro_theme_bgcolor_1_setting', $coachpro_default_colors['bgcolor1'] );
$coachpro_bgcolor_2   = get_theme_mod( 'coachpro_theme_bgcolor_2_setting', $coachpro_default_colors['bgcolor2'] );

// Define the default fonts.
$coachpro_default_fonts = array(
	'h1'      => 'Montserrat',
	'h2'      => 'Montserrat',
	'h3'      => 'Caveat',
	'h4'      => 'Montserrat',
	'h5'      => 'Montserrat',
	'h6'      => 'Montserrat',
	'navmenu' => 'Montserrat',
	'body'    => 'Montserrat',
);

// Define the Customizer fonts - assign the default font if it is not changed in the Customizer.
$coachpro_font_h1      = get_theme_mod( 'coachpro_theme_font_h1_setting', $coachpro_default_fonts['h1'] );
$coachpro_font_h2      = get_theme_mod( 'coachpro_theme_font_h2_setting', $coachpro_default_fonts['h2'] );
$coachpro_font_h3      = get_theme_mod( 'coachpro_theme_font_h3_setting', $coachpro_default_fonts['h3'] );
$coachpro_font_h4      = get_theme_mod( 'coachpro_theme_font_h4_setting', $coachpro_default_fonts['h4'] );
$coachpro_font_h5      = get_theme_mod( 'coachpro_theme_font_h5_setting', $coachpro_default_fonts['h5'] );
$coachpro_font_h6      = get_theme_mod( 'coachpro_theme_font_h6_setting', $coachpro_default_fonts['h6'] );
$coachpro_font_navmenu = get_theme_mod( 'coachpro_theme_font_navmenu_setting', $coachpro_default_fonts['navmenu'] );
$coachpro_font_body    = get_theme_mod( 'coachpro_theme_font_body_setting', $coachpro_default_fonts['body'] );

$appearance = array(
	'default-colors'       => $coachpro_default_colors,
	'default-fonts'        => $coachpro_default_fonts,
	'editor-color-palette' => array(
		array(
			'name'  => __( 'Color 1', 'coaching-pro' ),
			'slug'  => 'colorone',
			'color' => $coachpro_color_1,
		),
		array(
			'name'  => __( 'Color 2', 'coaching-pro' ),
			'slug'  => 'colortwo',
			'color' => $coachpro_color_2,
		),
		array(
			'name'  => __( 'Color 3', 'coaching-pro' ),
			'slug'  => 'colorthree',
			'color' => $coachpro_color_3,
		),
		array(
			'name'  => __( 'Color 4', 'coaching-pro' ),
			'slug'  => 'colorfour',
			'color' => $coachpro_color_4,
		),
		array(
			'name'  => __( 'Text Color 1', 'coaching-pro' ),
			'slug'  => 'textcolorone',
			'color' => $coachpro_textcolor_1,
		),
		array(
			'name'  => __( 'Text Color 2', 'coaching-pro' ),
			'slug'  => 'textcolortwo',
			'color' => $coachpro_textcolor_2,
		),
		array(
			'name'  => __( 'Background Color 1', 'coaching-pro' ),
			'slug'  => 'bgcolorone',
			'color' => $coachpro_bgcolor_1,
		),
		array(
			'name'  => __( 'Background Color 2', 'coaching-pro' ),
			'slug'  => 'bgcolortwo',
			'color' => $coachpro_bgcolor_2,
		),
		array(
			'name'  => __( 'White', 'coaching-pro' ),
			'slug'  => 'white',
			'color' => $coachpro_default_colors['white'],
		),
		array(
			'name'  => __( 'Black', 'coaching-pro' ),
			'slug'  => 'black',
			'color' => $coachpro_default_colors['black'],
		),
	),
	'editor-fonts'         => array(
		array(
			'name' => __( 'H1', 'coaching-pro' ),
			'slug' => 'h1',
			'tag'  => 'h1',
			'font' => $coachpro_font_h1,
		),
		array(
			'name' => __( 'H2', 'coaching-pro' ),
			'slug' => 'h2',
			'tag'  => 'h2',
			'font' => $coachpro_font_h2,
		),
		array(
			'name' => __( 'H3', 'coaching-pro' ),
			'slug' => 'h3',
			'tag'  => 'h3',
			'font' => $coachpro_font_h3,
		),
		array(
			'name' => __( 'H4', 'coaching-pro' ),
			'slug' => 'h4',
			'tag'  => 'h4',
			'font' => $coachpro_font_h4,
		),
		array(
			'name' => __( 'H5', 'coaching-pro' ),
			'slug' => 'h5',
			'tag'  => 'h5',
			'font' => $coachpro_font_h5,
		),
		array(
			'name' => __( 'H6', 'coaching-pro' ),
			'slug' => 'h6',
			'tag'  => 'h6',
			'font' => $coachpro_font_h6,
		),
		array(
			'name' => __( 'Primary Nav Menu', 'coaching-pro' ),
			'slug' => 'navmenu',
			'tag'  => 'ul.menu-primary li a',
			'font' => $coachpro_font_navmenu,
		),
		array(
			'name' => __( 'Body Text', 'coaching-pro' ),
			'slug' => 'body',
			'tag'  => 'p',
			'font' => $coachpro_font_body,
		),
	),
);

return $appearance;
