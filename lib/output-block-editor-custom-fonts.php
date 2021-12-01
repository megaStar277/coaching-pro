<?php
/**
 * Outputs the custom fonts via inline CSS to the Block Editor.
 *
 * @package Coaching Pro
 */

// Enqueue the Block Editor stylesheet.
add_editor_style( get_theme_file_uri( '/css/block-editor-styles.css' ) );

/**
 * Enqueue other Block Editor assets.
 */
function coaching_pro_fonts_css_blockeditor() {

	// Enqueue the custom Block Editor styles compiled from the SASS files. Assign a handle to attach the inline styles.
	wp_enqueue_style( 'coaching-pro-block-editor-styles', get_theme_file_uri( '/css/block-editor-styles.css' ), '', CHILD_THEME_VERSION );

	$appearance = genesis_get_config( 'appearance' );

	$editor_fonts = $appearance['editor-fonts'];

	$css = '
		/* ********* GOOGLE FONTS ********* */';

	foreach ( $editor_fonts as $font ) {

		// If this is the 'navmenu' slug, don't output CSS -- not needed for the Page Editor.
		if ( 'navmenu' === $font['slug'] ) {
			// Don't output anything for this tag.
			$css .= '';
		} else {
			// Output CSS styles for this tag.
			$css .= "

		.editor-styles-wrapper {$font['tag']} {
			font-family: '{$font['font']}' !important;
		}
		";
		}

		// Fonts for Pullquote blocks - default is font assigned to 'h3' tags.
		if ( 'h3' === $font['slug'] ) {

			$css .= "

        .editor-styles-wrapper .wp-block-pullquote blockquote::before,
		.editor-styles-wrapper .wp-block-pullquote blockquote p {
			font-family: '{$font['font']}' !important;
		}
		";

		}

		// Fonts for Citation inside Pullquote blocks - default is font assigned to 'p' tags.
		if ( 'body' === $font['slug'] ) {

			$css .= "

        .editor-styles-wrapper .wp-block-pullquote blockquote .wp-block-pullquote__citation {
			font-family: '{$font['font']}' !important;
		}
		";

		}
	}

	$css .= '

        .editor-styles-wrapper .wp-block-pullquote blockquote .wp-block-pullquote__citation {
            text-transform: uppercase;
        }
    ';

	// OUTPUT CSS.
	// Use the handle from the stylesheet enqueued above.
	if ( $css ) {
		wp_add_inline_style( 'coaching-pro-block-editor-styles', $css );
	}

}
add_action( 'enqueue_block_editor_assets', 'coaching_pro_fonts_css_blockeditor' );
