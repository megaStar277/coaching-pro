<?php
/**
 * Custom functions to run during Genesis Onboarding (One-Click Theme Setup)
 *
 * @package Coaching Pro
 */

/**
 * Reusable function to update a WP option.
 *
 * @param string $option_name The name of the option to change.
 * @param string $new_value The new value to assign.
 */
function coaching_pro_update_theme_option( $option_name, $new_value ) {

	if ( get_option( $option_name ) !== false ) {

		// The option already exists -- update it.
		update_option( $option_name, $new_value );

	} else {

		// The option hasn't been added yet -- add it.
		add_option( $option_name, $new_value );

	}

}

add_action( 'init', 'coaching_pro_assign_permalinks' );
/**
 * Sets the permalink structure to 'postname'.
 */
function coaching_pro_assign_permalinks() {
	global $wp_rewrite;
	$wp_rewrite->set_permalink_structure( '/%postname%/' );
}

add_action( 'genesis_onboarding_after_import_content', 'coaching_pro_assign_blog_page', 20, 2 );
/**
 * Assigns the Blog page.
 *
 * @param string $content The page content.
 * @param string $imported_post_ids The imported Post IDs.
 */
function coaching_pro_assign_blog_page( $content, $imported_post_ids ) {

	$blogpage    = get_page_by_title( 'Blog' );
	$blogpage_id = $blogpage->ID;

	coaching_pro_update_theme_option( 'page_for_posts', $blogpage_id );

}

add_action( 'genesis_onboarding_after_import_content', 'coaching_pro_remove_default_blog_meta', 25, 2 );
/**
 * Removes the default "Hello World" post if it exists.
 *
 * @param string $content The page content.
 * @param string $imported_post_ids The imported Post IDs.
 */
function coaching_pro_remove_default_blog_meta( $content, $imported_post_ids ) {

	// Get default post by title.
	$default_post = get_posts( array( 'title' => 'Hello World!' ) );

	// Remove the default post if it exists.
	if ( ! empty( $default_post ) ) {
		wp_delete_post( $default_post[0]->ID, $bypass_trash = true );
	}

	// If "Uncategorized" category exists.
	if ( category_exists( 'Uncategorized' ) ) {

		// Rename "Uncategorized" to "General".
		wp_update_term(
			1,
			'category',
			array(
				'name' => 'General',
				'slug' => 'general',
			)
		);

	}

}

add_action( 'genesis_onboarding_after_import_content', 'coaching_pro_update_spslider_settings', 30, 2 );
/**
 * Updates the display settings for the SP Testimonials Slider
 *
 * @param string $content The page content.
 * @param string $imported_post_ids The imported Post IDs.
 */
function coaching_pro_update_spslider_settings( $content, $imported_post_ids ) {

	// Enable Auto-play.
	if ( get_option( 'social_proof_slider_autoplay' ) !== 1 ) {
		update_option( 'social_proof_slider_autoplay', 1 );
	}

	// Set Display Time.
	if ( get_option( 'social_proof_slider_displaytime' ) === '' || empty( get_option( 'social_proof_slider_displaytime' ) ) ) {
		update_option( 'social_proof_slider_displaytime', 3000 );
	}

	// Set Animation Style.
	if ( get_option( 'social_proof_slider_animationstyle' ) !== 'fade' ) {
		update_option( 'social_proof_slider_animationstyle', 'fade' );
	}

	// Set Vertical Align.
	if ( get_option( 'social_proof_slider_verticalalign' ) !== 'align_middle' ) {
		update_option( 'social_proof_slider_verticalalign', 'align_middle' );
	}

	// Show the Dots.
	if ( get_option( 'social_proof_slider_showdots' ) !== 1 ) {
		update_option( 'social_proof_slider_showdots', 1 );
	}

	// Set the dots color.
	if ( get_option( 'social_proof_slider_dotscolor' ) === '' || empty( get_option( 'social_proof_slider_dotscolor' ) ) ) {
		update_option( 'social_proof_slider_dotscolor', '#666666' );
	}

}

add_action( 'genesis_onboarding_after_import_content', 'coaching_pro_onboarding_set_woocommerce_defaults', 40 );
/**
 * Sets the WooCommerce Defaults.
 */
function coaching_pro_onboarding_set_woocommerce_defaults() {

	// Changes the number of products per row to 3.
	update_option( 'woocommerce_catalog_columns', 3 );

	// Changes the number of rows per page to 2.
	update_option( 'woocommerce_catalog_rows', 2 );

	// Flush any caches which could impact settings or templates.
	wp_cache_flush();

	/**
	 * Updates the Shop page meta to be full-width.
	 */
	function set_shoppage_fullwidth() {

		// Get the Shop page.
		$shoppage = get_page_by_path( 'shop', OBJECT );

		// If the Shop page exists...
		if ( isset( $shoppage ) ) {

			// Get the Shop page id.
			$pageid = $shoppage->ID;

			// Update the Shop page layout meta.
			update_post_meta( $pageid, '_genesis_layout', 'full-width-content' );
		}
	}

	// Run the function above.
	set_shoppage_fullwidth();
}

add_action( 'genesis_onboarding_after_import_content', 'coaching_pro_add_pages_to_menu', 45 );
/**
 * Adds custom links to the primary navigation menu.
 */
function coaching_pro_add_pages_to_menu() {

	// Get the menu locations.
	$locations = get_nav_menu_locations();

	// If the Primary Navigation menu is set...
	if ( isset( $locations['primary'] ) ) {

		// Get the menu ID.
		$menu_id = $locations['primary'];

		// An array to contain new menu objects.
		$new_menu_obj = array();

		// An array to contain the new menu items to add.
		$nav_items_to_add = array(
			'downloads' => array(
				'title' => 'Downloads',
				'path'  => 'downloads',
			),
			'shop'      => array(
				'title' => 'Shop',
				'path'  => 'shop',
			),
		);

		// Loop through all menu items to add.
		foreach ( $nav_items_to_add as $slug => $nav_item ) {

			// Assign an object for this item.
			$new_menu_obj[ $slug ] = array();

			// If this item has a Parent, assign it in the object.
			if ( array_key_exists( 'parent', $nav_item ) ) {
				$new_menu_obj[ $slug ]['parent'] = $nav_item['parent'];
			}

			// Add this new menu item to the Primary Navigation menu.
			$new_menu_obj[ $slug ]['id'] = wp_update_nav_menu_item(
				$menu_id,
				0,
				array(
					'menu-item-title'     => $nav_item['title'],
					'menu-item-object'    => 'page',
					'menu-item-parent-id' => $new_menu_obj[ $nav_item['parent'] ]['id'],
					'menu-item-object-id' => get_page_by_path( $nav_item['path'] )->ID,
					'menu-item-type'      => 'post_type',
					'menu-item-status'    => 'publish',
				)
			);
		}
	}

}
