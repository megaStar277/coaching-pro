<?php
/**
 * This template displays a single Easy Digital Download post.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add a body class for the EDD Archive page.
add_filter( 'body_class', 'coaching_pro_edd_single_body_class' );
function coaching_pro_edd_single_body_class( $classes ) {
	$classes[] = 'edd-page edd-single-download';
	return $classes;
}

// Add the Featured Image before the entry header text.
add_action( 'genesis_entry_header', 'coaching_pro_edd_featuredimage', 1 );
function coaching_pro_edd_featuredimage(){
	the_post_thumbnail( 'product-image' );
}

// Remove the entry meta in the entry header.
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

genesis();
