<?php
/**
 * Loads theme defaults for Coaching Pro theme.
 *
 * @package Coaching Pro Theme
 */

/**
 * Updates theme settings on reset.
 *
 * @param  array $defaults An array of the default settings.
 * @return array $defaults The modified array of settings.
 */
function coaching_pro_theme_defaults( $defaults ) {

	$defaults['blog_cat_num']              = 6;
	$defaults['content_archive']           = 'full';
	$defaults['content_archive_limit']     = 0;
	$defaults['content_archive_thumbnail'] = 0;
	$defaults['posts_nav']                 = 'numeric';
	$defaults['site_layout']               = 'content-sidebar';

	return $defaults;

}
add_filter( 'genesis_theme_settings_defaults', 'coaching_pro_theme_defaults' );

/**
 * Updates theme settings on activation.
 */
function coaching_pro_theme_setting_defaults() {

	if ( function_exists( 'genesis_update_settings' ) ) {

		genesis_update_settings(
			array(
				'blog_cat_num'              => 6,
				'content_archive'           => 'full',
				'content_archive_limit'     => 0,
				'content_archive_thumbnail' => 0,
				'posts_nav'                 => 'numeric',
				'site_layout'               => 'content-sidebar',
			)
		);

	}

	update_option( 'posts_per_page', 6 );

}
add_action( 'after_switch_theme', 'coaching_pro_theme_setting_defaults' );
