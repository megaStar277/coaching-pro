<?php
/**
* Coaching Pro Theme
*
* This file adds the home page to the Coaching Pro theme.
*
* @package Coaching Pro Theme
* @author  thebrandiD
* @license GPL-2.0+
* @link    https://thebrandidthemes.com/
*/


add_filter( 'genesis_site_title_wrap', 'coaching_pro_h1_for_site_title' );
/**
 * Use h1 for site title.
 *
 * @param  string $wrap site title.
 * @return $wrap force h1.
 */
function coaching_pro_h1_for_site_title( $wrap ) {
	return 'h1';
}

add_action( 'genesis_meta', 'coaching_pro_front_page_genesis_meta' );

function coaching_pro_front_page_genesis_meta() {

	$home_widgets_active = false;

	if ( is_active_sidebar( 'front-page-welcome' ) || is_active_sidebar( 'front-page-1a' ) || is_active_sidebar( 'front-page-1b' ) || is_active_sidebar( 'front-page-2' ) || is_active_sidebar( 'front-page-3' ) || is_active_sidebar( 'front-page-testimonials' ) || is_active_sidebar( 'front-page-cta' ) || is_active_sidebar( 'front-page-offer' )) {

		$home_widgets_active = true;

		// Remove .site-inner's .wrap from front page.
		add_theme_support( 'genesis-structural-wraps', array(
			'header',
			'nav',
			'subnav',
			'footer-widgets',
			'footer-widget-1',
			'footer-widget-2',
			'footer',
		) );
		//* Force full width content layout
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

		//* Remove breadcrumbs
		remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

		//* Remove the default Genesis loop
		remove_action( 'genesis_loop', 'genesis_do_loop' );

		// Update header for home page.
		add_action( 'genesis_before_header', 'coaching_pro_before_header' );
		add_action( 'genesis_header', 'coaching_pro_home_hero', 15 );
		add_action( 'genesis_after_header', 'coaching_pro_after_header' );
		//* Add homepage widgets
		add_action( 'genesis_loop', 'coaching_pro_front_page_widgets' );

	}

	//* Add featured-section body class
	if ( ! is_active_sidebar( 'front-page-welcome' ) ) {

			//* Add image-section-start body class
		add_filter( 'body_class', 'coaching_pro_featured_body_class' );
		function coaching_pro_featured_body_class( $classes ) {

			$classes[] = 'no-featured-section';

			return $classes;

		}

	}
	if ( ! $home_widgets_active) {

		//* Add image-section-start body class
		add_filter( 'body_class', 'coaching_pro_featured_body_class_widgets' );
		function coaching_pro_featured_body_class_widgets( $classes ) {

			$classes[] = 'home-widgets-inactive';

			return $classes;

		}

	}

}


	//* Add markup for front page widgets
function coaching_pro_front_page_widgets() {

	$coaching_pro_display_graphics = get_theme_mod( 'frontpage_graphics_off' );

	// Output remaining widget content.
	echo '<h2 class="genesis-content-title screen-reader-text">Main Content Area</h2>';
	echo '<div class="front-page-1 front-page-section"><div class="wrap">';
	genesis_widget_area( 'front-page-1a', array(
		'before'	=> '<div class="front-page-1a widget-area">' . ( ! $coaching_pro_display_graphics ? coaching_pro_get_svg( array( 'icon' => 'bracket-right' ) ) : '' ) . '<div class="wrap">',
		'after'		=> '</div></div>',
		'before_title' => '<h2 class="widget-title widgettitle">',
		'before_after' => '</h2>',
		)
	);
	genesis_widget_area( 'front-page-1b', array(
			'before'	=> '<div class="front-page-1b widget-area"><div class="wrap">',
			'after'		=> '</div></div>',
			'before_title' => '<h2 class="widget-title widgettitle">',
			'before_after' => '</h2>',
	) );
	echo '</div></div>';
	genesis_widget_area( 'front-page-2', array(
		'before'	=> '<div class="front-page-2 widget-area"><div class="wrap">',
		'after'		=> '</div></div>',
		'before_title' => '<h2 class="widget-title widgettitle">',
		'before_after' => '</h2>',
	) );
	genesis_widget_area( 'front-page-3', array(
		'before'	=> '<div class="front-page-3 widget-area">',
		'after'		=> ( ! $coaching_pro_display_graphics ? coaching_pro_get_svg( array( 'icon' => 'bracket-right' ) ) : '' ) . ( ! $coaching_pro_display_graphics ? coaching_pro_get_svg( array( 'icon' => 'bracket-right' ) ) : '' ) . '</div>',
		'before_title' => '<h2 class="widget-title widgettitle">',
		'before_after' => '</h2>',
	) );

	genesis_widget_area( 'front-page-testimonials', array(
		'before'	=> '<div class="front-page-testimonials widget-area">',
		'after'		=> '</div>',
		'before_title' => '<h2 class="widget-title widgettitle">',
		'before_after' => '</h2>',
	) );

	genesis_widget_area( 'front-page-cta', array(
		'before'	=> '<div class="front-page-cta widget-area">',
		'after'		=> '</div>',
		'before_title' => '<h2 class="widget-title widgettitle">',
		'before_after' => '</h2>',
	) );

	genesis_widget_area( 'front-page-offer', array(
		'before'	=> '<div class="front-page-offer widget-area">',
		'after'		=> '</div>',
		'before_title' => '<h2 class="widget-title widgettitle">',
		'before_after' => '</h2>',
	) );
}

	/**
* Add markup
*/
function coaching_pro_before_header() {
	echo '<div class="custom-header-background open">';
}


	/**
* Add markup
*/
function coaching_pro_home_hero() {

	genesis_widget_area( 'front-page-welcome', array(
		'before'	=> '<div class="front-page-welcome widget-area">',
		'after'		=> '</div>',
		'before_title' => '<h2 class="widget-title widgettitle">',
		'before_after' => '</h2>',
	) );

}

	/**
* Add markup
*/
function coaching_pro_after_header() {
	echo '</div>';
}

	genesis();
