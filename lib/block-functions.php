<?php
/**
 * Loads Block Editor functions for Coaching Pro theme.
 *
 * @package Coaching Pro Theme
 */

// Enable Wide Blocks.
add_theme_support( 'align-wide' );

// Make media embeds responsive.
add_theme_support( 'responsive-embeds' );

// Enable Widget Blocks.
add_filter( 'use_widgets_block_editor', '__return_true' );

// Add support for Editor Styles.
add_theme_support( 'editor-styles' );

/**
 * Loads Google fonts.
 */
function coachingpro_enqueue_googlefonts() {

	$googlefonts_url = 'https://fonts.googleapis.com/css?family=' . blockeditor_get_fonts_list();

	// Google fonts.
	wp_enqueue_style( 'coaching-pro-blockeditor-googlefonts', $googlefonts_url, array(), CHILD_THEME_VERSION );

}
add_action( 'enqueue_block_editor_assets', 'coachingpro_enqueue_googlefonts' );

/**
 * Returns a URL-encoded list of Google Fonts.
 *
 * @return string URL-encoded list of Google Fonts to be enqueued.
 */
function blockeditor_get_fonts_list() {

	// Get the appearance settings array.
	$appearance = genesis_get_config( 'appearance' );

	// Get the list of fonts from the appearance array.
	$editor_fonts = $appearance['editor-fonts'];

	// Create empty var for all text output.
	$output = '';

	// Create array to hold all escaped font names.
	$esc_fontlist = array();

	// Output a list of all chosen fonts.
	foreach ( $editor_fonts as $font ) {

		$fontfamily_escaped  = '';
		$fontfamily_escaped .= str_replace( ' ', '+', $font['font'] );
		$fontfamily_escaped .= ':400,700';

		if ( in_array( $fontfamily_escaped, $esc_fontlist, true ) === false ) {
			$esc_fontlist[] = $fontfamily_escaped;
		}
	}

	$allfonts_str = implode( '|', $esc_fontlist );

	$output .= $allfonts_str;

	return $output;

}

// Include the custom Google fonts.
require_once CHILD_THEME_DIR . '/lib/output-block-editor-custom-fonts.php';

// Add a custom body class - helper for displaying the transparent header nav.
add_filter( 'body_class', 'coachingpro_blocks_body_classes' );
/**
 * Adds body classes to help with block styling.
 *
 * - `has-no-blocks` if content contains no blocks.
 * - `first-block-[block-name]` to allow changes based on the first block (such as removing padding above a Cover block).
 * - `first-block-align-[alignment]` to allow styling adjustment if the first block is wide or full-width.
 *
 * @since 2.0.0
 *
 * @param array $classes The original classes.
 * @return array The modified classes.
 */
function coachingpro_blocks_body_classes( $classes ) {

	if ( ! is_singular() || ! function_exists( 'has_blocks' ) || ! function_exists( 'parse_blocks' ) ) {
		return $classes;
	}

	if ( ! has_blocks() ) {
		$classes[] = 'has-no-blocks';
		return $classes;
	}

	$post_object = get_post( get_the_ID() );

	$blocks = (array) parse_blocks( $post_object->post_content );

	// First block type class.
	if ( isset( $blocks[0]['blockName'] ) ) {
		$classes[] = 'first-block-' . str_replace( '/', '-', $blocks[0]['blockName'] );
	}

	// First block alignment class.
	if ( isset( $blocks[0]['attrs']['align'] ) ) {
		$classes[] = 'first-block-align-' . $blocks[0]['attrs']['align'];
	}

	// Transparent header class.
	$meta                       = get_post_meta( get_the_ID() );
	$transheader_checkbox_value = ( isset( $meta['page_transparent_header_value'][0] ) && '1' === $meta['page_transparent_header_value'][0] ) ? 1 : 0;

	if ( 0 !== $transheader_checkbox_value ) {
		$classes[] = 'transparent-header';
	}

	return $classes;
}
