<?php
/**
 * Loads all Customizer settings for the Coaching Pro theme.
 *
 * @package Coaching Pro Theme
 */

add_action( 'customize_register', 'coaching_pro_customizer_register' );
/**
 * Register settings and controls with the Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function coaching_pro_customizer_register( $wp_customize ) {

	global $wp_customize;

	// Add Site Title Display Setting.
	$wp_customize->add_setting(
		'site_title_display',
		array(
			'default'           => 'display_text',
			'type'              => 'theme_mod',
			'transport'         => 'refresh',
			'sanitize_callback' => 'coaching_pro_sanitize_select',
		)
	);

	// Add Site Title Display Control.
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'site_title_display',
			array(
				'label'   => esc_html__( 'Site Title Display', 'coaching-pro' ),
				'section' => 'title_tagline',
				'type'    => 'select',
				'choices' => array(
					'display_text' => esc_html__( 'Show Title & Tagline', 'coaching-pro' ),
					'display_logo' => esc_html__( 'Show Logo Image', 'coaching-pro' ),
				),
			)
		)
	);

	// COACHING PRO SETTINGS.

	// Add Settings Panel.
	$wp_customize->add_section(
		'coachingpro_settings',
		array(
			'title'    => __( 'Coaching Pro Settings', 'coaching-pro' ),
			'priority' => 30,
		)
	);

	// Add Sticky Header Setting.
	$wp_customize->add_setting(
		'sticky_header',
		array(
			'default'           => true,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'coaching_pro_sanitize_checkbox',
		)
	);

	// Add Sticky Header Control.
	$wp_customize->add_control(
		new Coaching_Pro_Toggle_Control(
			$wp_customize,
			'sticky_header',
			array(
				'label'       => __( 'Sticky Header', 'coaching-pro' ),
				'section'     => 'coachingpro_settings',
				'settings'    => 'sticky_header',
				'description' => __( 'Enable or Disable the Sticky Header. Turning this ON will keep the header in place while you scroll the page. Turning this OFF will make the header scroll with the rest of the page content. This effect is disabled for mobile devices.', 'coaching-pro' ),
			)
		)
	);
}

/**
 * Checkbox sanitization callback.
 *
 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
 * as a boolean value, either TRUE or FALSE.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
function coaching_pro_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true === $checked ) ? true : false );
}

/**
 * Select sanitization callback.
 *
 * Sanitization callback for 'select' type controls.
 * This callback sanitizes `$setting` as a string value.
 *
 * @param string $input The selected item.
 * @param string $setting The select element.
 * @return string The sanitized input, or the default value if not clean.
 */
function coaching_pro_sanitize_select( $input, $setting ) {

	// The input var must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only.
	$input = sanitize_key( $input );

	// Get the list of possible select options.
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// Return the input if it is valid, else return the default option.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}
