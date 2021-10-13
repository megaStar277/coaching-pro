<?php
add_editor_style( get_theme_file_uri( '/css/block-editor-styles.css' ) );

add_action( 'enqueue_block_editor_assets', 'coaching_pro_fonts_css_blockeditor' );
/**
 * Output the custom fonts via inline CSS to the Block Editor.
 *
 * @since 2.0.0
 */
function coaching_pro_fonts_css_blockeditor() {

    // Enqueue the custom Block Editor styles compiled from the SASS files. Assign a handle to attach the inline styles.
    wp_enqueue_style( 'coaching-pro-block-editor-styles', get_theme_file_uri( '/css/block-editor-styles.css' ) );

    // wp_enqueue_style( 'coaching-pro-block-editor-inline-styles', '' );

    $appearance = genesis_get_config( 'appearance' );

	$editor_fonts = $appearance['editor-fonts'];

    $css = '
		/* ********* GOOGLE FONTS ********* */';

    foreach ( $editor_fonts as $font ) {

        // If this is the 'navmenu' slug, don't output CSS -- not needed for the Page Editor.
		if ( 'navmenu' === $font['slug'] ) {
            // Don't output anything for this tag.
        }else {
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

    $css .= "

        .editor-styles-wrapper .wp-block-pullquote blockquote .wp-block-pullquote__citation {
            text-transform: uppercase;
        }
    ";

	// OUTPUT CSS.
	// Use the handle from the stylesheet enqueued above.
	if ( $css ) {
		wp_add_inline_style( 'coaching-pro-block-editor-styles', $css );
	}

}








// function prefix_block_styles() {
//
//     wp_enqueue_style( 'prefix-editor-styles', get_theme_file_uri( 'css/editor-style.css' ) );
//
//     $prefix_heading_font = get_theme_mod( 'heading_font', 'Lora' );
//     $prefix_body_font = get_theme_mod( 'body_font', 'Roboto' );
//
//     wp_enqueue_style( 'prefix-editor-font', '//fonts.googleapis.com/css?family=' . $prefix_heading_font . ':400,700|' . $prefix_body_font . ':400,700&display=swap');
//
//     $prefix_custom_css = '
//     .edit-post-visual-editor.editor-styles-wrapper { font-family:' . esc_html( $prefix_body_font ) . ' }
//
//     .editor-post-title__block .editor-post-title__input,
//     .editor-styles-wrapper h1,
//     .editor-styles-wrapper h2,
//     .editor-styles-wrapper h3,
//     .editor-styles-wrapper h4,
//     .editor-styles-wrapper h5,
//     .editor-styles-wrapper h6 { font-family:' . esc_html( $prefix_heading_font ) . ' }
//     ';
//
//     wp_add_inline_style( 'prefix-editor-styles', $prefix_custom_css );
// }
// add_action( 'enqueue_block_editor_assets', 'prefix_block_styles' );
