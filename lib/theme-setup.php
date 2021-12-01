<?php
/**
 * Loads theme setup for Coaching Pro theme.
 *
 * @package Coaching Pro Theme
 */

// Add HTML5 markup structure.
add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );

// Add Accessibility support.
add_theme_support( 'genesis-accessibility', array( '404-page', 'drop-down-menu', 'headings', 'rems', 'skip-links' ) );

// Add viewport meta tag for mobile browsers.
add_theme_support( 'genesis-responsive-viewport' );

// Remove unnecessary layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );
genesis_unregister_layout( 'sidebar-content-sidebar' );

// Unregister secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Add support for after entry widget.
add_theme_support( 'genesis-after-entry-widget-area' );

// Add support for a footer Widget Blocks area.
add_theme_support( 'genesis-footer-widgets', 1 );

// Add Image Sizes.
add_image_size( 'featured-image', 900, 400, true );

/**
 * Defines new image sizes used in the theme.
 *
 * @param  array $sizes An array of image sizes to be used.
 * @return array $sizes The modified array of image sizes.
 */
function coaching_pro_show_custom_image_sizes( $sizes ) {

	return array_merge(
		$sizes,
		array(
			'featured-image' => __( 'Featured Image', 'coaching-pro' ),
		)
	);
}

// Add the new image sizes to the Image Size dropdown.
add_filter( 'image_size_names_choose', 'coaching_pro_show_custom_image_sizes' );

/**
 * Removes some default Genesis page templates.
 *
 * @param array $page_templates An array of page templates to be used in Genesis.
 * @return array $page_templates The modified array of page templates.
 */
function coaching_pro_remove_genesis_page_templates( $page_templates ) {
	unset( $page_templates['page_blog.php'] );
	return $page_templates;
}
add_filter( 'theme_page_templates', 'coaching_pro_remove_genesis_page_templates', 20, 1 );

/**
 * Remove the blog page settings metabox from the Genesis Theme Settings.
 * Desired if following the suggestion by Bill Erickson to not use the Blog page
 * template which comes standard in the Genesis Theme.
 *
 * @link    http://www.billerickson.net/dont-use-genesis-blog-template/
 */
function coaching_pro_remove_unwanted_genesis_metaboxes() {
	remove_meta_box( 'genesis-theme-settings-blogpage', 'toplevel_page_genesis', 'main' );
}
add_action( 'toplevel_page_genesis_settings_page_boxes', 'coaching_pro_remove_unwanted_genesis_metaboxes' );

// Rename the primary and secondary navigation menus.
add_theme_support(
	'genesis-menus',
	array(
		'primary'   => __( 'Primary Menu', 'coaching-pro' ),
		'secondary' => __( 'Footer Menu', 'coaching-pro' ),
	)
);

// Reposition the primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

/**
 * Reduces the secondary navigation menu to one level depth.
 *
 * @param array $args An array of arguments for the navigation menu.
 * @return array $args The modified array of arguments.
 */
function coaching_pro_secondary_menu_args( $args ) {

	if ( 'secondary' !== $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;
}
add_filter( 'wp_nav_menu_args', 'coaching_pro_secondary_menu_args' );

// Remove header right widget area.
unregister_sidebar( 'header-right' );

// Reposition the primary navigation.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );

/**
 * Adds a body class for the fixed header option, if it is selected.
 *
 * @param array $classes An array of body classes.
 * @return array $classes The modified array.
 */
function coaching_pro_theme_color_body_class( $classes ) {

	$fixed_header_off = get_theme_mod( 'fixed_header_off', false );
	$classes[]        = ( $fixed_header_off ? 'fixed-header-off' : 'fixed-header-on' );
	$classes[]        = has_nav_menu( 'primary' ) ? '' : 'no-primary-nav';

	return $classes;
}
add_filter( 'body_class', 'coaching_pro_theme_color_body_class' );

/**
 * Modifies the size of the Gravatar in the author box.
 *
 * @param int $size The size of the Gravatar, in pixels.
 * @return int The size of the Gravatar, in pixels.
 */
function coaching_pro_author_box_gravatar( $size ) {
	return 90;
}
add_filter( 'genesis_author_box_gravatar_size', 'coaching_pro_author_box_gravatar' );

/**
 * Modifies the size of the Gravatar in the entry comments.
 *
 * @param array $args An array of Gravatar settings.
 * @return array $args The modified array.
 */
function coaching_pro_comments_gravatar( $args ) {
	$args['avatar_size'] = 60;
	return $args;
}
add_filter( 'genesis_comment_list_args', 'coaching_pro_comments_gravatar' );

// Use the search form from WordPress core.
remove_filter( 'get_search_form', 'genesis_search_form' );

// Move the secondary sidebar within content-sidebar-wrap for flexbox.
remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
add_action( 'genesis_after_content', 'genesis_get_sidebar_alt' );

/**
 * Customizes the entry meta header.
 *
 * @param string $post_info The meta to output.
 * @return string $post_info The meta to output.
 */
function coaching_pro_post_info_filter( $post_info ) {
	$post_info = '[post_date] by [post_author_posts_link] | [post_comments] [post_edit]';
	return $post_info;
}
add_filter( 'genesis_post_info', 'coaching_pro_post_info_filter' );

/**
 * Adds a comment count, and removes the standard comment title.
 */
function coaching_pro_comment_count() {
	add_filter( 'genesis_title_comments', '__return_null' );
	if ( is_single() ) {
		if ( have_comments() ) {
			echo '<div class="comment-count-heading"><h3>';
			comments_number( 'No Comments', '(1) Comment', '(%) Comments' );
			echo '</h3></div>';
		}
	}
}
add_action( 'genesis_before_comments', 'coaching_pro_comment_count' );

/**
 * Customizes 'read more' text to include the post title for screen readers.
 *
 * @return string The modified string for the Read More text.
 */
function genesis_read_more_link() {
	return '...</p><p><a href="' . get_permalink() . '" class="more-link button" role="button">' . __( 'Read more', 'coaching-pro' ) . '<span class="screen-reader-text"> ' . __( 'about', 'coaching-pro' ) . ' ' . get_the_title() . '</span></a>';
}
add_filter( 'excerpt_more', 'genesis_read_more_link' );
add_filter( 'get_the_content_more_link', 'genesis_read_more_link' );
add_filter( 'the_content_more_link', 'genesis_read_more_link' );

/**
 * Adds a 'Read More' button at the end of short posts.
 */
function coachingpro_short_posts_add_read_more() {

	// If this is a single Post or Page, exit.
	if ( is_singular() ) {
		return;
	}

	// Get the content.
	$content = get_post_field( 'post_content', get_the_ID() );

	// Count the words in the content.
	$word_count = str_word_count( wp_strip_all_tags( $content ) );

	// Create an integer for comparison.
	$wc_int = intval( $word_count );

	// If the content is shorter than the default excerpt limit, show the button.
	if ( $wc_int <= 54 ) {
		echo wp_kses_post( '<p><a href="' . get_permalink() . '" class="more-link button" role="button">' . __( 'Read more', 'coaching-pro' ) . '<span class="screen-reader-text"> ' . __( 'about', 'coaching-pro' ) . ' ' . get_the_title() . '</span></a>' );
	}

}
add_action( 'genesis_entry_content', 'coachingpro_short_posts_add_read_more' );

/**
 * Adds subtitles to single posts if the WPSubtitle plugin is active.
 */
function coaching_pro_do_post_subtitle() {
	if ( function_exists( 'the_subtitle' ) ) {
		if ( is_singular() ) {
			$subtitle = trim( the_subtitle( '<p class="subtitle">', '</p>', false ) );
			if ( '' !== $subtitle ) {
				echo wp_kses_post( $subtitle );
			}
		}
	}
}
add_action( 'genesis_entry_header', 'coaching_pro_do_post_subtitle', 11 );

/**
 * Removes 'You are here' from the front of the breadcrumb trail.
 *
 * @param array $args An array of breadcrumb settings.
 * @return array $args The modified array of breadcrumb settings.
 */
function coaching_pro_prefix_breadcrumb( $args ) {
	$args['labels']['prefix'] = '';
	return $args;
}
add_filter( 'genesis_breadcrumb_args', 'coaching_pro_prefix_breadcrumb' );

/**
 * Customizes the breadcrumb separator character.
 *
 * @param array $args An array of breadcrumb settings.
 * @return array $args The modified array of breadcrumb settings.
 */
function coaching_pro_change_breadcrumb_separator( $args ) {
	$args['sep'] = ' &rsaquo; ';
	return $args;
}
add_filter( 'genesis_breadcrumb_args', 'coaching_pro_change_breadcrumb_separator' );

/**
 * Removes 'alignleft' from the featured image and replaces with 'alignnone' to avoid wrapping of text on blog / archive pages.
 *
 * @param array $attributes An array of image options.
 * @return array $attributes The modified array of image options.
 */
function coaching_pro_remove_image_alignment( $attributes ) {
	$attributes['class'] = str_replace( 'alignleft', 'alignnone', $attributes['class'] );
	return $attributes;
}
add_filter( 'genesis_attr_entry-image', 'coaching_pro_remove_image_alignment' );

/**
 * Displays the featured image on Single Posts and Pages.
 */
function coaching_pro_show_featured_post_image() {

	// If we are not on a Single Post or Page, then exit.
	if ( ! is_singular( 'post' ) && ! is_page() || ! has_post_thumbnail() ) {
		return;
	}

	// Attempt to get the featured image.
	$image = genesis_get_image( 'format=url&size=featured-image' );

	// If the post has a Featured Image assigned, show it.
	if ( $image ) {
		echo wp_kses_post( '<img class="post-photo aligncenter" src="' . $image . '" alt="' . the_title_attribute( 'echo=0' ) . '" />' );
	}
}
add_action( 'genesis_entry_header', 'coaching_pro_show_featured_post_image', 1 );

add_filter( 'genesis_attr_site-header', 'coachingpro_stickynav_class' );
/**
 * Adds a CSS class to the site header if the Sticky Header Customizer option is enabled.
 *
 * @param array $attributes An array of header options.
 * @return array $attributes The modified array of header options.
 */
function coachingpro_stickynav_class( $attributes ) {
	$sticky_header       = get_theme_mod( 'sticky_header', true );
	$attributes['class'] = ( ! $sticky_header ? $attributes['class'] : $attributes['class'] . ' sticky' );
	return $attributes;
}
