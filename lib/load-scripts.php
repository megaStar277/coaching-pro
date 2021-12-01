<?php
/**
 * Loads the scripts and stylesheets for Coaching Pro theme.
 *
 * @package Coaching Pro
 */

// Remove the default stylesheet loading action.
remove_action( 'genesis_meta', 'genesis_load_stylesheet' );

/**
 * Loads the main stylesheet.
 */
function coaching_pro_enqueue_main_stylesheet() {
	$handle = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? sanitize_title_with_dashes( CHILD_THEME_NAME ) : 'child-theme';
	wp_enqueue_style( $handle, CHILD_THEME_URI . '/style.css', false, CHILD_THEME_VERSION );
}
add_action( 'genesis_meta', 'coaching_pro_enqueue_main_stylesheet', 5 );

/**
 * Enqueues theme scripts and styles.
 */
function coaching_pro_enqueue_scripts_styles() {
	$suffix = ( defined( 'COACHING_PRO_DEBUG' ) && COACHING_PRO_DEBUG ) ? '' : '.min';

	$googlefonts_url = 'https://fonts.googleapis.com/css?family=' . get_fonts_list();

	// Google fonts.
	wp_enqueue_style( 'coaching-pro-fonts', $googlefonts_url, array(), CHILD_THEME_VERSION );

	// Dashicons.
	wp_enqueue_style( 'dashicons' );

	// Global scripts.
	wp_enqueue_script( 'global-scripts', CHILD_THEME_URI . '/js/global.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

	// Smooth scroll.
	wp_enqueue_script( 'homepage-scripts', CHILD_THEME_URI . '/js/smooth-scroll.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

	// Responsive menu.
	wp_enqueue_script( 'coaching-pro-responsive-menu', CHILD_THEME_URI . '/js/responsive-menus.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_localize_script(
		'coaching-pro-responsive-menu',
		'genesis_responsive_menu',
		coaching_pro_responsive_menu_settings()
	);

}
add_action( 'wp_enqueue_scripts', 'coaching_pro_enqueue_scripts_styles' );

/**
 * Enqueues the Block Editor Assets.
 */
function coachingpro_enqueue_block_editor_scripts() {
	// Enqueue Block Style Variations.
	wp_enqueue_script( 'blockstylevariations-js', get_stylesheet_directory_uri() . '/js/block-style-variations.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
}
add_action( 'enqueue_block_editor_assets', 'coachingpro_enqueue_block_editor_scripts' );

/**
 * Enqueues the Custom Block styles.
 */
function coachingpro_enqueue_block_styles() {
	wp_enqueue_style( 'custom-block-styles', get_stylesheet_directory_uri() . '/css/custom-block-styles.css', '', CHILD_THEME_VERSION );
}
add_action( 'enqueue_block_assets', 'coachingpro_enqueue_block_styles' );

/**
 * Enqueues custom styles for Third-Party plugins.
 */
function coachingpro_custom_plugin_styles() {

	// WooCommerce styles.
	if ( class_exists( 'WooCommerce' ) ) {
		if ( is_woocommerce() || is_page( array( 'cart', 'checkout' ) ) ) {
			wp_enqueue_style( genesis_get_theme_handle() . '-woocommerce-custom-styles', get_stylesheet_directory_uri() . '/css/woocommerce.css', array(), genesis_get_theme_version() );
		}
	}

	// Easy Digital Downloads styles.
	if ( class_exists( 'Easy_Digital_Downloads' ) ) {
		if ( is_post_type_archive( 'download' ) || is_singular( 'download' ) || edd_is_checkout() ) {
			wp_enqueue_style( genesis_get_theme_handle() . '-edd-custom-styles', get_stylesheet_directory_uri() . '/css/easydigitaldownloads.css', array(), genesis_get_theme_version() );
		}
	}

	// WPForms.
	if ( class_exists( 'WPForms' ) ) {
		wp_enqueue_style( genesis_get_theme_handle() . '-wpforms-custom-styles', get_stylesheet_directory_uri() . '/css/wpforms.css', array(), genesis_get_theme_version() );
	}

}
add_action( 'wp_enqueue_scripts', 'coachingpro_custom_plugin_styles' );

/**
 * Returns a list of Google Fonts.
 *
 * @return array $output A URL-encoded list of Google Fonts to enqueue.
 */
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

		$fontfamily_escaped  = '';
		$fontfamily_escaped .= str_replace( ' ', '+', $font['font'] );
		$fontfamily_escaped .= ':400,700';

		if ( in_array( $fontfamily_escaped, $esc_fontlist, true ) === false ) {
			$esc_fontlist[] = $fontfamily_escaped;
		}
	}

	$allfonts_str = implode( '|', $esc_fontlist );

	$output .= $allfonts_str;

	return $output;

}

// ADMIN SCRIPTS.
// ----------------------------------------------------------------------------.

/**
 * Defines the responsive menu settings.
 * @return array $settings An array of the responsive menu settings.
 */
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
