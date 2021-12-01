<?php
/**
 * Coaching Pro Theme
 *
 * This file adds 404 page to the Coaching Pro theme.
 *
 * @package Coaching Pro Theme
 * @author  thebrandiD
 * @license GPL-2.0+
 * @link    https://buildmybrandid.com/
 */

// Remove the default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_loop', 'genesis_404' );
/**
 * Outputs a 404 "Not Found" error message.
 */
function genesis_404() {

	// Get the filtering params.
	$params = array();
	global $query_string;
	$args = explode( '&', $query_string );

	foreach ( $args as $value ) {
		$query               = explode( '=', $value );
		$params[ $query[0] ] = urldecode( $query[1] );
	}

	echo genesis_html5() ? '<article class="entry">' : '<div class="post hentry">';

	printf( '<h1 class="entry-title">%s</h1>', esc_attr( apply_filters( 'genesis_404_entry_title', __( 'Not found, error 404', 'coaching-pro' ) ) ) );
	echo '<div class="entry-content">';

	$home_url = trailingslashit( home_url() );

	if ( genesis_html5() ) {

		echo wp_kses_post( apply_filters( 'genesis_404_entry_content', '<p>' . __( 'The page you are looking for no longer exists. Perhaps you can return back to the site\'s ', 'coaching-pro' ) . '<a href="' . $home_url . '">' . __( 'homepage', 'coaching-pro' ) . '</a>' . __( ' and see if you can find what you are looking for. Or, you can try finding it by using the search form below.', 'coaching-pro' ) . '</p>', 'coaching-pro' ) );

		get_search_form();

	} else {

		echo wp_kses_post( '<p>' . __( 'The page you are looking for no longer exists. Perhaps you can return back to the site\'s', 'coaching-pro' ) . '<a href="' . $home_url . '">' . __( 'homepage', 'coaching-pro' ) . '</a>' . __( 'and see if you can find what you are looking for. Or, you can try finding it with the information below.', 'coaching-pro' ) . '</p>' );

	}

	if ( ! genesis_html5() ) {
		genesis_sitemap( 'h4' );
	} elseif ( genesis_a11y( '404-page' ) ) {
		echo wp_kses_post( '<h2>' . __( 'Sitemap', 'coaching-pro' ) . '</h2>' );
		genesis_sitemap( 'h3' );
	}

	echo '</div>';

	echo genesis_html5() ? '</article>' : '</div>';

}

genesis();
