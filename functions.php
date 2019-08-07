<?php
/**
 * Coaching Pro Theme
 *
 * This file adds functions to the Coaching Pro theme.
 *
 * @package Coaching Pro Theme
 * @author  thebrandiD
 * @license GPL-2.0+
 * @link    https://thebrandidthemes.com/
 */

// Start the engine.
include_once( get_template_directory() . '/lib/init.php' );

// Load constants - use constants in code instead of functions to improve performance. Hat Tip to Tonya at Knowthecode.io.
$child_theme = wp_get_theme();

define( 'CHILD_THEME_NAME', $child_theme->get( 'Name' ) );
define( 'CHILD_THEME_URL', $child_theme->get( 'ThemeURI' ) );
define( 'CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'CHILD_THEME_URI', get_stylesheet_directory_uri() );
define( 'SITE_NAME', get_bloginfo( 'name' ) );
define( 'SITE_DESCRIPTION', get_bloginfo( 'description' ) );

// No longer need to hard code version in functions.php file - it is pulled from version in stylesheet.
// If WP_DEBUG is on, this adds unique string to css file reduce stylesheet cached issues during development.
if ( defined( 'COACHING_PRO_DEBUG' ) && COACHING_PRO_DEBUG  ) {
	define( 'CHILD_THEME_VERSION', mt_rand() );
} else {
	define( 'CHILD_THEME_VERSION', $child_theme->get( 'Version' ) );
}
define( 'ROOT_DOMAIN_URL', home_url() );
define( 'CHILD_SITE_NAME', get_bloginfo( 'name' ) );
// Setup Theme.
include_once( CHILD_THEME_DIR . '/lib/theme-defaults.php' );

// Set Localization (do not remove).
add_action( 'after_setup_theme','coaching_pro_localization_setup' );
/**
 * Loads text Domain
 *
 * @since  1.0.0
 */
function coaching_pro_localization_setup() {
	load_child_theme_textdomain( 'coaching-pro', apply_filters( 'child_theme_textdomain', CHILD_THEME_DIR . '/languages', 'coaching-pro' ) );
}

// Load Theme Setup and Configuration.
include_once( CHILD_THEME_DIR . '/lib/theme-setup.php' );

// Register Widget Areas.
include_once( CHILD_THEME_DIR . '/lib/widget-setup.php' );

// Add the social icons functions.
include_once( CHILD_THEME_DIR . '/lib/icon-functions.php' );

// Add Color Schemes to WordPress Theme Customizer.
include_once( CHILD_THEME_DIR . '/lib/customize-colors.php' );

// Include Customizer CSS.
include_once( CHILD_THEME_DIR . '/lib/output-colors.php' );

// Add Image upload and Color select to WordPress Theme Customizer.
include_once( CHILD_THEME_DIR . '/lib/customize.php' );

// Include Customizer CSS for home page.
include_once( CHILD_THEME_DIR . '/lib/output.php' );

// Add the helper functions.
include_once( CHILD_THEME_DIR . '/lib/helper-functions.php' );

// Load Scripts and Styles.
include_once( CHILD_THEME_DIR . '/lib/load-scripts.php' );
