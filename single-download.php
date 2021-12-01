<?php
/**
 * This template displays a single Easy Digital Download post.
 *
 * @package Coaching Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Adds a body class for the EDD Single Download page.
 *
 * @param array $classes An array of body classes to use.
 * @return array $classes An array of body classes to use.
 */
function coaching_pro_edd_single_body_class( $classes ) {
	$classes[] = 'edd-page edd-single-download';
	return $classes;
}
add_filter( 'body_class', 'coaching_pro_edd_single_body_class' );

/**
 * Adds the Featured Image before the entry header text.
 */
function coaching_pro_edd_featuredimage() {
	the_post_thumbnail( 'product-image' );
}
add_action( 'genesis_entry_header', 'coaching_pro_edd_featuredimage', 1 );

// Remove the entry meta in the entry header.
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

genesis();
