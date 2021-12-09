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

	$args = genesis_get_config( 'child-theme-settings' );

	return wp_parse_args( $args, $defaults );

}
add_filter( 'genesis_theme_settings_defaults', 'coaching_pro_theme_defaults' );

/**
 * Updates theme settings on activation.
 */
function coaching_pro_theme_setting_defaults() {

	if ( function_exists( 'genesis_update_settings' ) ) {

		$args = genesis_get_config( 'child-theme-settings' );

		genesis_update_settings( $args );

	}

	update_option( 'posts_per_page', 6 );

}
add_action( 'after_switch_theme', 'coaching_pro_theme_setting_defaults' );
