<?php

remove_filter( 'theme_page_templates', 'coaching_pro_remove_genesis_page_templates' );

add_filter( 'body_class', 'string_body_class', 99 );

function string_body_class( $classes ) {

	$selected_scheme = get_theme_mod( 'coaching_pro_colorscheme_setting', '3' );

	// Check to be sure we have a theme color selected, if not use theme 3.
	if (empty( $selected_scheme ) || null === $selected_scheme ) {
		$selected_scheme = '3';
	}
	$color_scheme = coaching_pro_demo_url( $selected_scheme );
	$class_to_remove = 'coaching-pro-color-scheme-' . $selected_scheme;
	$class_to_add = 'coaching-pro-color-scheme-' . $color_scheme;

	if (in_array( $class_to_remove, $classes, true )) {

		unset( $classes[ array_search( $class_to_remove, $classes ) ] );
	}
	$classes[] = $class_to_add;

	return $classes;

}
add_action( 'wp_enqueue_scripts', 'coaching_pro_css_demo', 99 );

function coaching_pro_css_demo() {
	$handle  = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? sanitize_title_with_dashes( CHILD_THEME_NAME ) : 'child-theme';
	$selected_scheme = get_theme_mod( 'coaching_pro_colorscheme_setting', '3' );
	$color_scheme = coaching_pro_demo_url( $selected_scheme );
	$css = '';
	if ('1' === $color_scheme) {
		$css .= '.front-page-welcome { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-cs1-1.jpg); }';
		$css .= '.front-page-cta { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-cs1-2.jpg); }';
		$css .= '.front-page-offer:before { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-cs1-3.png); opacity: .75; margin: 20px; }';

		$css .= '.front-page-1a .widget-2, .front-page-1a .widget-3, .front-page-1a .widget-4, .front-page-1a .widget-5 { display: none;}';
		$css .= '.front-page-2 .widget-2, .front-page-2 .widget-3, .front-page-2 .widget-4 { display: none!important;}';

		$css .= '.front-page-3 .replaced-svg { fill: #ff382e;}';
	}
	if ('2' === $color_scheme) {
		$css .= '.front-page-welcome { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-cs2-1.jpg); }';
		$css .= '.front-page-cta { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-cs2-2.jpg); }';
		$css .= '.front-page-offer:before { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-cs2-3.png); opacity: 1.0; margin: 20px;}';

		$css .= '.front-page-1a .widget-1, .front-page-1a .widget-3, .front-page-1a .widget-4, .front-page-1a .widget-5 { display: none;}';
		$css .= '.front-page-2 .widget-1, .front-page-2 .widget-3, .front-page-2 .widget-4 { display: none!important;}';

		$css .= '.front-page-3 .replaced-svg { fill: #e84c3d;}';

	}
	if ('3' === $color_scheme ) {
		// default theme is 3 and images already loaded - skip this.
		// $css .= '.front-page-welcome { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-cs3-1.jpg); }';
		// $css .= '.front-page-cta { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-cs3-2.jpg); }';
		// $css .= '.front-page-offer { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-cs3-3.png); }';

		$css .= '.front-page-1a .widget-1, .front-page-1a .widget-2, .front-page-1a .widget-4,  .front-page-1a .widget-5 { display: none;}';
		$css .= '.front-page-2 .widget-1, .front-page-2 .widget-2, .front-page-2 .widget-4 { display: none!important;}';
		$css .= '.front-page-3 .replaced-svg { fill: #f48104;}';

	}
	if ('4' === $color_scheme) {
		$css .= '.front-page-welcome { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-cs4-1.jpg); }';
		$css .= '.front-page-cta { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-cs4-2.jpg); }';
		$css .= '.front-page-offer:before { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-cs4-3.png); opacity: 1.0; margin: 20px; }';

		$css .= '.front-page-1a .widget-1, .front-page-1a .widget-2, .front-page-1a .widget-3,  .front-page-1a .widget-5 { display: none;}';
		$css .= '.front-page-2 .widget-1, .front-page-2 .widget-2, .front-page-2 .widget-3 { display: none!important;}';

		$css .= '.front-page-3 .replaced-svg { fill: #fd2e76;}';
	}
	if ('custom' === $color_scheme ) {
		// default theme is 3 and images already loaded - skip this.
		$css .= '.front-page-welcome { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-csc-1.jpg); }';
		$css .= '.front-page-cta { background-image: url('. CHILD_THEME_URI . '/demo-functions/images/demo-csc-2.jpg); }';
		$css .= '.front-page-offer:before { background: url('. CHILD_THEME_URI . '/demo-functions/images/demo-csc-3.png) no-repeat center center/contain; }';

		$css .= '.front-page-1a .widget-1, .front-page-1a .widget-2,  .front-page-1a .widget-3, .front-page-1a .widget-4 { display: none;}';
		$css .= '.front-page-2 .widget-1, .front-page-2 .widget-2, .front-page-2 .widget-3 { display: none!important;}';
		$css .= '.front-page-3 .replaced-svg { fill: #f03756;}';

	}
	$css .= '.front-page-3 .style-svg {opacity: 0; }';
	$css .= '.front-page-3 .replaced-svg { opacity: 1;}';
	$css .= '.front-page-book { display: flex; flex-basis: 45%; justify-content: flex-end; padding: 0; margin: auto;}';

	if ( $css ) {
		wp_add_inline_style( $handle, $css );
	}

}

function coaching_pro_demo_in_use( $selected_scheme ) {

	$selected_scheme = coaching_pro_demo_url( $selected_scheme );

	return $selected_scheme;
}

function coaching_pro_demo_url( $selected_scheme ) {
	$color_scheme = $selected_scheme;
	if ( isset( $_GET['color'] ) ) { // Input var okay.
		// Get 'color' variable from URL
		$color_scheme = sanitize_text_field( wp_unslash( $_GET['color'] ) );

		switch ($color_scheme) {
			case 'career':
				$color_scheme = '1';
			  break;
			case 'executives':
				$color_scheme = '2';
			  break;
			case 'health_fitness':
				$color_scheme = '3';
			  break;
			case 'relationships':
				$color_scheme = '4';
			  break;
			case 'custom':
				$color_scheme = 'custom';
				  break;
			default:
				 $color_scheme = $selected_scheme;
			 break;
		}

	}
	return $color_scheme ;
}
