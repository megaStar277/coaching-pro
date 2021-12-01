<?php
/**
 * This template displays the default Archive page.
 *
 * @package Coaching Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Adds a body class for the Archive page.
 *
 * @param  array $classes Array of classes to use.
 * @return array $classes Modified array of classes to use.
 */
function coaching_pro_edd_archive_body_class( $classes ) {
	$classes[] = 'page-archive';
	global $post;
	if ( 'download' === $post->post_type ) {
		$classes[] = 'edd-page edd-archive';
	}
	return $classes;
}
add_filter( 'body_class', 'coaching_pro_edd_archive_body_class' );

/**
 * Forces full-width page layout.
 */
function coaching_pro_edd_archive_page_layout() {
	return 'full-width-content';
}
add_filter( 'genesis_pre_get_option_site_layout', 'coaching_pro_edd_archive_page_layout' );

/**
 * Opens grid wrapper markup.
 */
function coachingpro_open_grid_wrapper() {
	genesis_markup(
		array(
			'open'    => '<div %s>',
			'context' => 'grid-wrapper',
		)
	);
}
add_action( 'genesis_before_while', 'coachingpro_open_grid_wrapper', 1 );


add_action( 'genesis_after_endwhile', 'coachingpro_close_grid_wrapper', 1 );
/**
 * Closes grid wrapper markup.
 */
function coachingpro_close_grid_wrapper() {
	genesis_markup(
		array(
			'close'   => '</div>',
			'context' => 'grid-wrapper',
		)
	);
}

// Reposition Featured Images to display before Post Titles.
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
add_action( 'genesis_entry_header', 'genesis_do_post_image', 1 );

/**
 * Wraps blog post titles in h2 tags.
 *
 * @param  string $wrap Which HTML tag to use when wrapping title elements.
 * @return string $wrap The HTML tag to use.
 */
function coaching_pro_post_title_wrap( $wrap ) {
	$wrap = 'h2';
	return $wrap;
}
add_filter( 'genesis_entry_title_wrap', 'coaching_pro_post_title_wrap' );

/**
 * Customizes the post header meta.
 *
 * @param  string $post_info The post meta to display.
 * @return string $post_info The post meta to display.
 */
function coachingpro_post_info_filter( $post_info ) {

	global $post;
	if ( 'download' === $post->post_type ) {
		$post_info = '';
	} else {
		$post_info = '[post_date format="M j, Y"]';
	}
	return $post_info;
}
add_filter( 'genesis_post_info', 'coachingpro_post_info_filter' );

/**
 * Adds the product purchase button for 'Download' products.
 */
function coachingpro_add_download_cpt_buttons() {

	// Get post info.
	global $post;

	// If this is not a Download CPT, then exit.
	if ( 'download' !== $post->post_type ) {
		return;
	}

	// Init empty var.
	$content = '';

	// If the price function exists...
	if ( function_exists( 'edd_price' ) ) {
		$content .= '<div class="product-buttons">';

		if ( ! edd_has_variable_prices( $post->ID ) ) {
			$content .= edd_get_purchase_link( $post->ID, 'Add to Cart', 'button' );
		}

		$content .= '</div><!--end .product-buttons-->';
	}

	echo wp_kses_post( $content );

}
add_action( 'genesis_after_entry_content', 'coachingpro_add_download_cpt_buttons', 99 );

// Remove the post footer meta.
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

genesis();
