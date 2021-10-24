<?php
/* Load the scripts and stylesheets for Coaching Pro theme.
----------------------------------------------------------------------------- */

// Load the main stylesheet.
remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
add_action( 'genesis_meta', 'coaching_pro_enqueue_main_stylesheet', 5 );
function coaching_pro_enqueue_main_stylesheet() {
	$handle  = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? sanitize_title_with_dashes( CHILD_THEME_NAME ) : 'child-theme';
	wp_enqueue_style( $handle , CHILD_THEME_URI . "/style.css", false, CHILD_THEME_VERSION );
}

// Enqueue Scripts and Styles.
add_action( 'wp_enqueue_scripts', 'coaching_pro_enqueue_scripts_styles' );
function coaching_pro_enqueue_scripts_styles() {
	$suffix = ( defined( 'COACHING_PRO_DEBUG' ) && COACHING_PRO_DEBUG ) ? '' : '.min';

	$googlefontsURL = 'https://fonts.googleapis.com/css?family='.get_fonts_list();

	// Google fonts.
	wp_enqueue_style( 'coaching-pro-fonts', $googlefontsURL, array(), CHILD_THEME_VERSION );

	// Dashicons.
	wp_enqueue_style( 'dashicons' );

	// Global scripts.
	wp_enqueue_script( 'global-scripts', CHILD_THEME_URI . "/js/global.js", array( 'jquery' ), CHILD_THEME_VERSION, true );

	// Smooth scroll.
	wp_enqueue_script( 'homepage-scripts', CHILD_THEME_URI . "/js/smooth-scroll.js", array( 'jquery' ), CHILD_THEME_VERSION, true );

	// Responsive menu.
	wp_enqueue_script( 'coaching-pro-responsive-menu', CHILD_THEME_URI. "/js/responsive-menus.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_localize_script(
		'coaching-pro-responsive-menu',
		'genesis_responsive_menu',
		coaching_pro_responsive_menu_settings()
	);

}

// Enqueue custom styles for Third-Party plugins.
add_action( 'wp_enqueue_scripts', 'coachingpro_custom_plugin_styles' );
function coachingpro_custom_plugin_styles() {

	// WooCommerce styles.
	if ( class_exists( 'WooCommerce' ) ) {
		if ( is_woocommerce() || is_page( array( 'cart', 'checkout' ) ) ) {
			wp_enqueue_style( genesis_get_theme_handle() . '-woocommerce-custom-styles', get_stylesheet_directory_uri() . '/woocommerce.css', array(), genesis_get_theme_version() );
		}
	}

	// Easy Digital Downloads styles.
	if ( class_exists( 'Easy_Digital_Downloads' ) ) {
		if ( is_post_type_archive( 'download' ) || is_singular( 'download' ) || edd_is_checkout() ) {
			wp_enqueue_style( genesis_get_theme_handle() . '-edd-custom-styles', get_stylesheet_directory_uri() . '/easydigitaldownloads.css', array(), genesis_get_theme_version() );
		}
	}

}

// Returns a URL-encoded list of Google Fonts to enqueue.
function get_fonts_list() {

	// Get the appearance settings array.
	$appearance = genesis_get_config( 'appearance' );

	// Get the list of fonts from the appearance array.
	$editor_fonts = $appearance['editor-fonts'];

	// Create empty var for all text output.
	$output = '';

	// Create array to hold all escaped font names.
	$esc_fontlist = array();

	// Output a list of all chosen fonts.
	foreach ( $editor_fonts as $font ) {

		$fontfamily_escaped = '';
		$fontfamily_escaped .= str_replace( ' ', '+', $font['font'] );
		$fontfamily_escaped .= ':400,700';

		if ( in_array( $fontfamily_escaped, $esc_fontlist ) == false ) {
			$esc_fontlist[] = $fontfamily_escaped;
		}

	}

	$allfonts_str = implode('|', $esc_fontlist);

	$output .= $allfonts_str;

	return $output;

}


/* ADMIN SCRIPTS
----------------------------------------------------------------------------- */

// Define the responsive menu settings.
function coaching_pro_responsive_menu_settings() {
	$settings = array(
	'mainMenu'          => __( 'Menu', 'coaching-pro' ),
	'menuIconClass'     => 'dashicons-before dashicons-menu',
	'subMenu'           => __( 'Submenu', 'coaching-pro' ),
	'subMenuIconsClass' => 'dashicons-before dashicons-arrow-down-alt2',
	'menuClasses'       => array(
		'combine' => array(
			'.nav-primary',
			'.nav-header',
		),
		'others'  => array(),
	),
	);
	return $settings;
}
