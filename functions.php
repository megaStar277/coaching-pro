<?php
/**
 * Coaching Pro Theme
 *
 * The main functions for the Coaching Pro theme.
 *
 * @package Coaching Pro Theme
 */

// Start the engine.
require_once get_template_directory() . '/lib/init.php';

// Load constants - use constants in code instead of functions to improve performance. Hat Tip to Tonya at Knowthecode.io.
$child_theme = wp_get_theme();

define( 'CHILD_THEME_NAME', $child_theme->get( 'Name' ) );
define( 'CHILD_THEME_URL', $child_theme->get( 'ThemeURI' ) );
define( 'CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'CHILD_THEME_URI', get_stylesheet_directory_uri() );
define( 'SITE_NAME', get_bloginfo( 'name' ) );
define( 'SITE_DESCRIPTION', get_bloginfo( 'description' ) );

// No longer need to hard code version in functions.php file - it is pulled from version in stylesheet.
define( 'CHILD_THEME_VERSION', $child_theme->get( 'Version' ) );
define( 'ROOT_DOMAIN_URL', home_url() );
define( 'CHILD_SITE_NAME', get_bloginfo( 'name' ) );

// Setup Theme.
require_once CHILD_THEME_DIR . '/lib/theme-defaults.php';

// Set Localization (do not remove).
add_action( 'after_setup_theme', 'coaching_pro_localization_setup' );
/**
 * Loads text Domain
 *
 * @since  1.0.0
 */
function coaching_pro_localization_setup() {
	load_child_theme_textdomain( 'coaching-pro', apply_filters( 'child_theme_textdomain', CHILD_THEME_DIR . '/languages', 'coaching-pro' ) );
}

// Load Theme Setup and Configuration.
require_once CHILD_THEME_DIR . '/lib/theme-setup.php';

// Import custom separator control.
require_once CHILD_THEME_DIR . '/lib/class-separator-control.php';

// Import Customizer custom toggle control.
require_once CHILD_THEME_DIR . '/lib/class-coaching-pro-toggle-control.php';

// Color functions.
require_once CHILD_THEME_DIR . '/lib/color-functions.php';

// Customizer functions.
require_once CHILD_THEME_DIR . '/lib/customize.php';

// Font functions.
require_once CHILD_THEME_DIR . '/lib/font-functions.php';

// // Add the social icons functions.
// require_once CHILD_THEME_DIR . '/lib/icon-functions.php';

// Custom metaboxes.
require_once CHILD_THEME_DIR . '/lib/meta-boxes.php';

// Add the helper functions.
require_once CHILD_THEME_DIR . '/lib/helper-functions.php';

// Load Scripts and Styles.
require_once CHILD_THEME_DIR . '/lib/load-scripts.php';

// Load Block Editor functions.
require_once CHILD_THEME_DIR . '/lib/block-functions.php';

// Load Block Patterns.
require_once CHILD_THEME_DIR . '/lib/block-patterns.php';

// Custom functions for WooCommerce.
if ( class_exists( 'WooCommerce' ) ) {
	require_once CHILD_THEME_DIR . '/lib/output-woocommerce.php';
}

// Custom functions for Easy Digital Downloads.
if ( class_exists( 'Easy_Digital_Downloads' ) ) {
	require_once CHILD_THEME_DIR . '/lib/output-easydigitaldownloads.php';
}

// Custom functions for WPForms plugin.
if ( class_exists( 'WPForms' ) ) {
	require_once CHILD_THEME_DIR . '/lib/output-wpforms.php';
}
