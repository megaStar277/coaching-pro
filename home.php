<?php
/**
 * Coaching Pro Theme
 *
 * This file handles the Blog Archive page for the Coaching Pro theme.
 *
 * @package Coaching Pro Theme
 */

/**
 * Adds a body class for the Blog Archive page.
 *
 * @param array $classes An array of classes to use.
 * @return array $classes An array of classes to use.
 */
function coaching_pro_blog_archive_body_class( $classes ) {
	$classes[] = 'blog-archive';
	return $classes;
}
add_filter( 'body_class', 'coaching_pro_blog_archive_body_class' );

/**
 * Opens the grid wrapper markup.
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

/**
 * Closes the grid wrapper markup.
 */
function coachingpro_close_grid_wrapper() {
	genesis_markup(
		array(
			'close'   => '</div>',
			'context' => 'grid-wrapper',
		)
	);
}
add_action( 'genesis_after_endwhile', 'coachingpro_close_grid_wrapper', 1 );

// Reposition Featured Images to display before Post Titles.
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
add_action( 'genesis_entry_header', 'genesis_do_post_image', 1 );

/**
 * Wraps the blog post titles in h2 tags.
 *
 * @param string $wrap Which HTML tag to use when wrapping blog titles.
 * @return string $wrap Which HTML tag to use when wrapping blog titles.
 */
function coaching_pro_post_title_wrap( $wrap ) {
	$wrap = 'h2';
	return $wrap;
}
add_filter( 'genesis_entry_title_wrap', 'coaching_pro_post_title_wrap' );

/**
 * Customizes the post header meta.
 *
 * @param string $post_info The post meta to output.
 * @return string $post_info The post meta to output.
 */
function sp_post_info_filter( $post_info ) {
	$post_info = '[post_date format="M j, Y"]';
	return $post_info;
}
add_filter( 'genesis_post_info', 'sp_post_info_filter' );

// Remove the post footer meta.
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

genesis();
