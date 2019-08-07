<?php
/**
* This file adds the required CSS to the front end of Coaching Pro theme.
*
* @package Coaching Pro theme
* @author  The BrandiD
* @license GPL-2.0+
* @link    https://thebrandidthemes.com/
*/

add_action( 'wp_enqueue_scripts', 'load_coaching_pro_color_css' );


function load_coaching_pro_color_css() {

	$selected_scheme = get_theme_mod( 'coaching_pro_colorscheme_setting', '3' );

	// Check to be sure we have a theme color selected, if not use theme 3.
	if (empty( $selected_scheme ) || null === $selected_scheme ) {
		$selected_scheme = '3';
	}

	coaching_pro_color_css( $selected_scheme );
}
/**
 * Checks the settings for the colors.
 *
 * @since  1.0.0
 *
 * @param  array $selected_scheme scheme in use
 */
function coaching_pro_color_css( $selected_scheme ) {

	$handle  = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? sanitize_title_with_dashes( CHILD_THEME_NAME ) : 'child-theme';

	// Check to be sure we have a theme color selected, if not use theme 3.
	if (empty( $selected_scheme ) || null === $selected_scheme ) {
		$selected_scheme = '3';
	}

	// Load the selected theme colors.
	$color = get_coaching_pro_theme_colors( $selected_scheme );

	$css = '';

	if ( 'custom' === $selected_scheme ) {
		/*  COLOR 1 */
		if ( ! empty( $color[0] ) ) {
			$css .= sprintf('
.archive-pagination .active a,
.button,
.footer-widgets-1 section:last-child,
.home .widget .button,
.menu-toggle,
.menu-toggle:focus,
.menu-toggle:hover,
.sidebar .enews-widget input[type="submit"],
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
	background-color: %s;
}', $color[0] );
			$css .= sprintf('
.front-page-1a .widget-title,
.menu-social-menu-container li > a,
.front-page-2 section.coaching-pro-subtitle:last-of-type p:first-of-type,
.front-page-3 section.coaching-pro-subtitle:first-of-type p:first-child,
.sub-menu-toggle,
.sub-menu-toggle:focus,
.sub-menu-toggle:hover,
.subtitle,
a {
  color: %s;
}', $color[0] );
			$css .= sprintf('
.front-page-testimonials .testimonial-author-img img,
.home .widget .button,
.menu-toggle,
.menu-toggle:focus,
.menu-toggle:hover,
.sub-menu-toggle,
a {
  border-color: %s;
}', $color[0] );
			$css .= sprintf( '
@media screen and (min-width: 1024px) {
.front-page-testimonials {
border-left-color: %s;
border-top-color: %s;
}
}', $color[0], $color[0] );
			$css .= sprintf('
.front-page-3 .replaced-svg { fill: %s;}
}', $color[0] );
		}
		/*  COLOR 2 */
		if ( ! empty( $color[1] ) ) {
			$css .= sprintf('
.search-form {
  border-color: %s;
}', $color[1] );
			$css .= sprintf( '
.entry-title a:focus,
.entry-title a:hover,
a:focus,
a:hover {
  color: %s
}', $color[1] );
			$css .= sprintf( '
.home.no-featured-section .site-header,
.custom-header-background.light .site-header,
.footer-widgets-1 section,
.fixed-header-off .custom-header-background .site-header,
.home .custom-header-background.light .site-header,
.site-header {
  background-color: %s;
}', $color[1] );
			$css .= sprintf( '
@media screen and (min-width: 1024px) {
	.front-page-welcome:before {
	  border-left: 50px %s solid!important;
	}
}', $color[1] );
		} // color 2
		/*  COLOR 3 */
		if ( ! empty( $color[2] ) ) {
			$css .= sprintf( '
.entry-title,
.entry-title a,
.footer-widgets-2 .widget-title,
.front-page-1b .widget-title,
.front-page-2 .widget-title,
.front-page-3 .widget-title,
.front-page-3 .widget_sp_image-description p:first-child,
.front-page-testimonials .widget-title,
.sidebar .widget-title a,
.site-description,
.site-title a,
.custom-header-background .site-header .site-title a,
.custom-header-background.light .site-header .site-title a,
.widget-title,
.site-footer,
.site-footer a {
  color: %s;
}', $color[2] );
			$css .= sprintf( '
.front-page-offer,
.sidebar .enews-widget,
.sidebar .enews-widget .widget-title,
.sidebar .widget.enews-widget {
  background-color: %s;
}', $color[2] );
			$css .= sprintf( '
.front-page-1a .icon-bracket-right {
	fill: %s;
}', $color[2] );
		} // color 3

		/*  COLOR 4 */
		if ( ! empty( $color[3] ) ) {
			$css .= sprintf( '
.front-page-3 .icon-bracket-right {
 fill: %s;
}

.site-footer {
 background-color: %s;
}', $color[3], $color[3] );
		} // color 4

		/*  COLOR 5 */
		if ( ! empty( $color[4] ) ) {
				$css .= sprintf( '
.genesis-nav-menu a,
.site-title a,
.site-footer .genesis-nav-menu a,
.site-footer,
.site-footer a {
  color: %s
}', $color[4] );
			$css .= sprintf( '

.site-footer a {
border-bottom-color: %s
}', $color[4] );
		}

		/*  COLOR 6 */
		if ( ! empty( $color[5] ) ) {
			// Use "Custom" colors
			$css .= sprintf( '
.genesis-nav-menu .current-menu-item > a,
.genesis-nav-menu a:focus,
.genesis-nav-menu a:hover {
  color: %s;
}', $color[5] );
			$css .= sprintf( '
.genesis-nav-menu .current-menu-item > a > span,
.genesis-nav-menu .current-menu-parent > a > span,
.genesis-nav-menu a:focus > span,
.genesis-nav-menu a:hover > span {
   border-bottom-color: %s;
}', $color[5] );

					$css .= sprintf( '
.site-footer .genesis-nav-menu .current-menu-item > a,
.site-footer .genesis-nav-menu a:focus,
.site-footer .genesis-nav-menu a:hover,
.site-footer a:hover,
.site-footer a:focus {
  color: %s;
}
.site-footer .genesis-nav-menu .current-menu-item > a > span,
.site-footer .genesis-nav-menu .current-menu-parent > a > span,
.site-footer .genesis-nav-menu a:focus > span,
.site-footer .genesis-nav-menu a:hover > span {
  border-bottom-color: %s;
}', $color[5], $color[5]  );
		}

		$css .= sprintf( '
.archive-pagination li a:focus,
.archive-pagination li a:hover {
color: %s;
background-color: transparent;
}', $color[5] );
		/* OUTPUT INLINE STYLES  */
		if ( $css ) {
			wp_add_inline_style( $handle, $css );
		}
	}
}
