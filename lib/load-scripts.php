<?php
/**
 * Loads scripts and stylesheets for Coaching Pro theme.
 *
 * @since 1.0
 *
 * @package Coaching Pro Theme
 */


// Enqueue Scripts and Styles.

// Load the main stylesheet
remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
add_action( 'genesis_meta', 'coaching_pro_enqueue_main_stylesheet', 5 );

function coaching_pro_enqueue_main_stylesheet() {

	$use_minified_stylesheet = get_theme_mod( 'mincss_header_on' );

	$suffix = ! $use_minified_stylesheet ? '' : '.min';
	$handle  = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? sanitize_title_with_dashes( CHILD_THEME_NAME ) : 'child-theme';
	wp_enqueue_style( $handle , CHILD_THEME_URI . "/style{$suffix}.css", false, CHILD_THEME_VERSION );

	if ( is_front_page() ) {
		// Enqueue styles
		wp_enqueue_style( 'front-styles', CHILD_THEME_URI . "/home{$suffix}.css", array( 'coaching-pro' ), CHILD_THEME_VERSION, false );

	}
}


	add_action( 'wp_enqueue_scripts', 'coaching_pro_enqueue_scripts_styles' );
	/**
 * Enqueue Scripts and Styles
 *
 * @since 1.0.0
 */
function coaching_pro_enqueue_scripts_styles() {
	$suffix = ( defined( 'COACHING_PRO_DEBUG' ) && COACHING_PRO_DEBUG ) ? '' : '.min';
	wp_enqueue_style( 'coaching-pro-fonts', '//fonts.googleapis.com/css?family=Caveat:400,700|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_script( 'global-scripts', CHILD_THEME_URI . "/js/global{$suffix}.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
	if ( is_front_page() ) {
		// Enqueue script
		wp_enqueue_script( 'homepage-scripts', CHILD_THEME_URI . "/js/home{$suffix}.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
	}
	wp_enqueue_script( 'coaching-pro-responsive-menu', CHILD_THEME_URI. "/js/responsive-menus{$suffix}.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_localize_script(
		'coaching-pro-responsive-menu',
		'genesis_responsive_menu',
		coaching_pro_responsive_menu_settings()
	);

}

	/* ADMIN SCRIPTS */
	add_action( 'customize_controls_print_footer_scripts', 'coaching_pro_customizer_scripts' );
	/**
 * Load customizer scripts.
 *
 * @since  1.0.0
 */
function coaching_pro_customizer_scripts() {
	global $wp_customize;

	if ( ! isset( $wp_customize ) ) {
		return;
	}
	$suffix = ( defined( 'COACHING_PRO_DEBUG' ) && COACHING_PRO_DEBUG ) ? '' : '.min';
	wp_enqueue_script( 'customizer_scripts', CHILD_THEME_URI . "/js/customizer-scripts{$suffix}.js", 'jquery' );
	wp_enqueue_script( 'coaching_pro_customizer_controls_scripts', CHILD_THEME_URI . "/js/customizer-controls{$suffix}.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_enqueue_style( 'customizer_styles', CHILD_THEME_URI . "/css/admin-styles{$suffix}.css", CHILD_THEME_VERSION, false );
}

	add_action( 'admin_enqueue_scripts', 'print_inline_customizer_script' );
	/**
 * Output CSS for admin style in customizer.
 *
 * @since  1.0.0
 */
function print_inline_customizer_script() {
	$selected_scheme = get_theme_mod( 'coaching_pro_colorscheme_setting', '3' );
	$css = '';
	if ( 'custom' === $selected_scheme ) {
		$css .= '<style type="text/css">
		#customize-control-coaching_pro_theme_color1_setting,
		#customize-control-coaching_pro_theme_color2_setting,
		#customize-control-coaching_pro_theme_color3_setting,
		#customize-control-coaching_pro_theme_color4_setting.
		#customize-control-coaching_pro_theme_nav_text_color_setting,
		#customize-control-coaching_pro_theme_nav_text_hover_color_setting {
			display: block;
		}
		</style>';
	} else {
		$css .= '<style type="text/css">
		#customize-control-coaching_pro_theme_color1_setting,
		#customize-control-coaching_pro_theme_color2_setting,
		#customize-control-coaching_pro_theme_color3_setting,
		#customize-control-coaching_pro_theme_color4_setting,
		#customize-control-coaching_pro_theme_nav_text_color_setting,
		#customize-control-coaching_pro_theme_nav_text_hover_color_setting {
			display: none;
		}
		</style>';
	}
}


	/**
 * Define our responsive menu settings.
 *
 * @since  1.0.0
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

add_filter( 'noscript-js-css', 'nojs_script_contents' );
	/**
 * Modify CSS output for filter.
 *
 * @since  1.0.0
 *
 * @author Jackie D'Elia
 *
 * @param string $tag CSS output in a string.
 * @return string $tag
 */
function nojs_script_contents( $tag ) {

	$selected_scheme = get_theme_mod( 'coaching_pro_colorscheme_setting', '3' );
	$color = get_coaching_pro_theme_colors( $selected_scheme );
	$bg_color = ($color[1] ? $color[1] : 'grey');
	$my_script_contents = '
.site-header {
  background-color: ' . $bg_color .'!important;
}
.genesis-nav-menu, .nav-primary {
	opacity: 1;
	display: block;
}
.genesis-nav-menu .sub-menu li,
.genesis-nav-menu .sub-menu li li  {
	display: block;
}';
	$tag .= $my_script_contents;
	return $tag;
}

	add_action( 'wp_head', 'nojs_stylesheet', 99 );

	/**
 * Outputs styles for use when javascript is disabled.
 *
 * @since  1.0
 *
 * @author Jackie D'Elia
 */
function nojs_stylesheet() {
	$script_contents = '.front-page-welcome:before {
		    border-left: 50px transparent solid!important;
		  }';
	echo '<noscript><style type="text/css" media="screen">';
	echo apply_filters( 'noscript-js-css',  $script_contents );
	echo '</style></noscript>' ;

}
