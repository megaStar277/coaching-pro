<?php
/**
 * Loads customizer colors for Coaching Pro theme.
 *
 * @since 1.0
 *
 * @package Coaching Pro Theme
 */

function scheme_1_default_colors() {
	// Career
	$colors['one'] = '#ff382e';
	$colors['two'] = '#8295b3';
	$colors['three'] = '#237aff';
	$colors['four'] = '#d7ff60';
	return $colors;
}

function scheme_2_default_colors() {
	// Executives
	$colors['one'] = '#e84c3d';
	$colors['two'] = '#c2c2c2';
	$colors['three'] = '#2a80b9';
	$colors['four'] = '#29324f';
	return $colors;
}

function scheme_3_default_colors() {
	// Health & Fitness
	$colors['one'] = '#f48104';
	$colors['two'] = '#d3d81c';
	$colors['three'] = '#2d2a5f';
	$colors['four'] = '#8295b3';
	return $colors;
}

function scheme_4_default_colors() {
	// Relationships
	$colors['one'] = '#fd2e76';
	$colors['two'] = '#99b898';
	$colors['three'] = '#193d87';
	$colors['four'] = '#dadad8';
	return $colors;
}

function scheme_custom_default_colors() {
	// Custom
	$colors['one'] = '#f03756';
	$colors['two'] = '#ffd346';
	$colors['three'] = '#26225f';
	$colors['four'] = '#ffd346';
	$colors['five'] = '#26225f';
	$colors['six'] = '#f03756';
	return $colors;
}

// $scheme_1_default_colors = scheme_1_default_colors();
// $scheme_2_default_colors = scheme_2_default_colors();
// $scheme_3_default_colors = scheme_3_default_colors();
// $scheme_4_default_colors = scheme_4_default_colors();
// $scheme_custom_default_colors = scheme_custom_default_colors();
// //* Usage:
// //* echo $scheme_4_default_colors['one'];

/**
 * Get default colors for color schemes
 */
function get_color_defaults( $scheme, $color ) {
	// Get color scheme number from theme mods
	//$colorscheme_num = get_theme_mod( 'coaching_pro_colorscheme_setting', 3' );

	// Use color scheme number arg
	$colorscheme_num = $scheme;
	//d( $colorscheme_num );

	$scheme_1_default_colors = scheme_1_default_colors();
	$scheme_2_default_colors = scheme_2_default_colors();
	$scheme_3_default_colors = scheme_3_default_colors();
	$scheme_4_default_colors = scheme_4_default_colors();
	$scheme_custom_default_colors = scheme_custom_default_colors();

	$color_default = '';

	if ( '1' === $colorscheme_num ) {
		// Career
		switch ($color) {
			case 1:
				$color_default = $scheme_1_default_colors['one'];
				break;
			case 2:
				$color_default = $scheme_1_default_colors['two'];
				break;
			case 3:
				$color_default = $scheme_1_default_colors['three'];
				break;
			case 4:
				$color_default = $scheme_1_default_colors['four'];
				break;
			default:
				$color_default = '';
				break;
		}
	}

	if ( '2' === $colorscheme_num ) {
		// Executives
		switch ($color) {
			case 1:
				$color_default = $scheme_2_default_colors['one'];
				break;
			case 2:
				$color_default = $scheme_2_default_colors['two'];
				break;
			case 3:
				$color_default = $scheme_2_default_colors['three'];
				break;
			case 4:
				$color_default = $scheme_2_default_colors['four'];
				break;
			default:
				$color_default = '';
				break;
		}
	}

	if ( '3' === $colorscheme_num ) {
		// Health & Fitness
		switch ($color) {
			case 1:
				$color_default = $scheme_3_default_colors['one'];
				break;
			case 2:
				$color_default = $scheme_3_default_colors['two'];
				break;
			case 3:
				$color_default = $scheme_3_default_colors['three'];
				break;
			case 4:
				$color_default = $scheme_3_default_colors['four'];
				break;
			default:
				$color_default = '';
				break;
		}
	}

	if ( '4' === $colorscheme_num ) {
		// Relationships
		switch ($color) {
			case 1:
				$color_default = $scheme_4_default_colors['one'];
				break;
			case 2:
				$color_default = $scheme_4_default_colors['two'];
				break;
			case 3:
				$color_default = $scheme_4_default_colors['three'];
				break;
			case 4:
				$color_default = $scheme_4_default_colors['four'];
				break;
			default:
				$color_default = '';
				break;
		}
	}

	if ( 'custom' === $colorscheme_num ) {

		// Custom
		switch ($color) {
			case 1:
				$color_default = get_theme_mod( 'coaching_pro_theme_color1_setting', $scheme_custom_default_colors['one'] );
				//	$color_default = $scheme_custom_default_colors['one'];
				break;
			case 2:
				$color_default = get_theme_mod( 'coaching_pro_theme_color2_setting', $scheme_custom_default_colors['two'] );
				//	$color_default = $scheme_custom_default_colors['two'];
				break;
			case 3:
				$color_default = get_theme_mod( 'coaching_pro_theme_color3_setting', $scheme_custom_default_colors['three'] );
				//	$color_default = $scheme_custom_default_colors['three'];
				break;
			case 4:
				$color_default = get_theme_mod( 'coaching_pro_theme_color4_setting', $scheme_custom_default_colors['four'] );
				//	$color_default = $scheme_custom_default_colors['four'];
				break;
			case 5:
				$color_default = get_theme_mod( 'coaching_pro_theme_nav_text_color_setting', $scheme_custom_default_colors['five'] );
				//		$color_default = $scheme_custom_default_colors['five'];
				break;
			case 6:
				$color_default = get_theme_mod( 'coaching_pro_theme_nav_text_hover_color_setting', $scheme_custom_default_colors['six'] );
				//	$color_default = $scheme_custom_default_colors['six'];
				break;
			default:
				$color_default = '';
				break;
		}
	}

	// return default colorX for this scheme
	return $color_default;
}

function show_scheme_default_color_boxes( $scheme ) {

	$scheme_1_default_colors = scheme_1_default_colors();
	$scheme_2_default_colors = scheme_2_default_colors();
	$scheme_3_default_colors = scheme_3_default_colors();
	$scheme_4_default_colors = scheme_4_default_colors();
	$scheme_custom_default_colors = scheme_custom_default_colors();

	$scheme_custom_set_color1 = get_theme_mod( 'coaching_pro_theme_color1_setting', $scheme_custom_default_colors['one'] );
	$scheme_custom_set_color2 = get_theme_mod( 'coaching_pro_theme_color2_setting', $scheme_custom_default_colors['two'] );
	$scheme_custom_set_color3 = get_theme_mod( 'coaching_pro_theme_color3_setting', $scheme_custom_default_colors['three'] );
	$scheme_custom_set_color4 = get_theme_mod( 'coaching_pro_theme_color4_setting', $scheme_custom_default_colors['four'] );

	$output = '';

	switch ($scheme) {
		case '1':
			$output .= '<div id="scheme_1_original_colors" class="original-scheme-colors">';
			$output .= '<div class="color-block block-1"><div class="block" style="background-color: '.$scheme_1_default_colors['one'].';"></div></div>';
			$output .= '<div class="color-block block-2"><div class="block" style="background-color: '.$scheme_1_default_colors['two'].';"></div></div>';
			$output .= '<div class="color-block block-3"><div class="block" style="background-color: '.$scheme_1_default_colors['three'].';"></div></div>';
			$output .= '<div class="color-block block-4"><div class="block" style="background-color: '.$scheme_1_default_colors['four'].';"></div></div>';
			$output .= '</div>';
			break;
		case '2':
			$output .= '<div id="scheme_2_original_colors" class="original-scheme-colors">';
			$output .= '<div class="color-block block-1"><div class="block" style="background-color: '.$scheme_2_default_colors['one'].';"></div></div>';
			$output .= '<div class="color-block block-2"><div class="block" style="background-color: '.$scheme_2_default_colors['two'].';"></div></div>';
			$output .= '<div class="color-block block-3"><div class="block" style="background-color: '.$scheme_2_default_colors['three'].';"></div></div>';
			$output .= '<div class="color-block block-4"><div class="block" style="background-color: '.$scheme_2_default_colors['four'].';"></div></div>';
			$output .= '</div>';
			break;
		case '3':
			$output .= '<div id="scheme_3_original_colors" class="original-scheme-colors">';
			$output .= '<div class="color-block block-1"><div class="block" style="background-color: '.$scheme_3_default_colors['one'].';"></div></div>';
			$output .= '<div class="color-block block-2"><div class="block" style="background-color: '.$scheme_3_default_colors['two'].';"></div></div>';
			$output .= '<div class="color-block block-3"><div class="block" style="background-color: '.$scheme_3_default_colors['three'].';"></div></div>';
			$output .= '<div class="color-block block-4"><div class="block" style="background-color: '.$scheme_3_default_colors['four'].';"></div></div>';
			$output .= '</div>';
			break;
		case '4':
			$output .= '<div id="scheme_4_original_colors" class="original-scheme-colors">';
			$output .= '<div class="color-block block-1"><div class="block" style="background-color: '.$scheme_4_default_colors['one'].';"></div></div>';
			$output .= '<div class="color-block block-2"><div class="block" style="background-color: '.$scheme_4_default_colors['two'].';"></div></div>';
			$output .= '<div class="color-block block-3"><div class="block" style="background-color: '.$scheme_4_default_colors['three'].';"></div></div>';
			$output .= '<div class="color-block block-4"><div class="block" style="background-color: '.$scheme_4_default_colors['four'].';"></div></div>';
			$output .= '</div>';
			break;
		case 'custom':
			$output .= '<div id="scheme_custom_original_colors" class="original-scheme-colors">';
			$output .= '<div class="color-block block-1"><div class="block" style="background-color: '.$scheme_custom_set_color1.';"></div></div>';
			$output .= '<div class="color-block block-2"><div class="block" style="background-color: '.$scheme_custom_set_color2.';"></div></div>';
			$output .= '<div class="color-block block-3"><div class="block" style="background-color: '.$scheme_custom_set_color3.';"></div></div>';
			$output .= '<div class="color-block block-4"><div class="block" style="background-color: '.$scheme_custom_set_color4.';"></div></div>';
			$output .= '</div>';
			break;

		default:
			// default values here
			break;
	}

	echo $output;

}

add_action( 'customize_register', 'coaching_pro_color_settings' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function coaching_pro_color_settings() {

	global $wp_customize;

	// 'COLOR OPTIONS' SECTION
	$wp_customize->add_section( 'color_options_section', array(
		'title' => __( 'Color Scheme', 'coaching-pro' ),
		'priority' => 20,
	));

	/* COLOR SCHEME
	------------------------------------------------------ */
	/*
	* CUSTOM CONTROL
	*/
	class coaching_pro_Color_Scheme_Control extends WP_Customize_Control {

		public $type = 'radio-image';

		public function render_content() {

			if ( empty( $this->choices ) ) {
				return;
			}

			$name = '_customize-radio-' . $this->id;
			?>
			<span class="customize-control-title"><?php echo esc_attr( $this->label ); ?></span>
			<div id="input_<?php echo $this->id; ?>" class="image">
				<?php foreach ( $this->choices as $value => $label ) : ?>
					<input class="image-select" type="radio" value="<?php echo esc_attr( $value ); ?>" id="<?php echo $this->id . $value; ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link();
					checked( $this->value(), $value ); ?>>
						<label for="<?php echo $this->id . $value; ?>">
							<?php echo esc_html( $label ); ?>
							<?php echo show_scheme_default_color_boxes( $value ); ?>
						</label>
					</input>
				<?php endforeach; ?>
			</div>
			<!-- <script>jQuery(document).ready(function($) { $( '[id="input_<?php echo $this->id; ?>"]' ).buttonset(); });</script> -->
			<?php
		}
	}

	$wp_customize->add_setting( 'coaching_pro_colorscheme_setting', array(
		'default' => '3',
		'sanitize_callback' => 'sanitize_text_field',
		// 'transport' => 'postMessage',
	) );

	$wp_customize->add_control(

		new coaching_pro_Color_Scheme_Control(
			$wp_customize,
			'coaching_pro_colorscheme_setting',
			array(
				'settings'		=> 'coaching_pro_colorscheme_setting',
				'section'		=> 'color_options_section',
				'label'			=> __( 'Color Scheme', 'coaching-pro' ),
				'choices'		=> array(
					'1' => __( 'Career', 'coaching-pro' ),
					'2' => __( 'Executives', 'coaching-pro' ),
					'3' => __( 'Health and Fitness', 'coaching-pro' ),
					'4' => __( 'Relationships' , 'coaching-pro' ),
					'custom' => __( 'Custom' , 'coaching-pro' ),
				),
			)
		)
	);

	/* CUSTOM COLOR 1
	------------------------------------------------------ */
	// setting
	$wp_customize->add_setting( 'coaching_pro_theme_color1_setting', array(
		'default' => get_color_defaults( 'custom','1' ),
		'sanitize_callback' => 'sanitize_hex_color',
	));

	// control
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coaching_pro_theme_color1_setting',
			array(
				'label'       => __( 'Custom Color #1', 'coaching-pro' ),
				'section'     => 'color_options_section',
				'settings'    => 'coaching_pro_theme_color1_setting',
			)
		)
	);

	/* CUSTOM COLOR 2
	------------------------------------------------------ */
	// setting
	$wp_customize->add_setting( 'coaching_pro_theme_color2_setting', array(
		'default' => get_color_defaults( 'custom','2' ),
		'sanitize_callback' => 'sanitize_hex_color',
	));

	// control
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coaching_pro_theme_color2_setting',
			array(
				'label'       => __( 'Custom Color #2', 'coaching-pro' ),
				'section'     => 'color_options_section',
				'settings'    => 'coaching_pro_theme_color2_setting',
			)
		)
	);

	/* CUSTOM COLOR 3
	------------------------------------------------------ */
	// setting
	$wp_customize->add_setting( 'coaching_pro_theme_color3_setting', array(
		'default' => get_color_defaults( 'custom','3' ),
		'sanitize_callback' => 'sanitize_hex_color',
	));

	// control
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coaching_pro_theme_color3_setting',
			array(
				'label'       => __( 'Custom Color #3', 'coaching-pro' ),
				'section'     => 'color_options_section',
				'settings'    => 'coaching_pro_theme_color3_setting',
			)
		)
	);

	/* CUSTOM COLOR 4
	------------------------------------------------------ */
	// setting
	$wp_customize->add_setting( 'coaching_pro_theme_color4_setting', array(
		'default' => get_color_defaults( 'custom','4' ),
		'sanitize_callback' => 'sanitize_hex_color',
	));

	// control
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coaching_pro_theme_color4_setting',
			array(
				'label'       => __( 'Custom Color #4', 'coaching-pro' ),
				'section'     => 'color_options_section',
				'settings'    => 'coaching_pro_theme_color4_setting',
			)
		)
	);

	/* CUSTOM NAV TEXT COLOR
	------------------------------------------------------ */
	// setting
	$wp_customize->add_setting( 'coaching_pro_theme_nav_text_color_setting', array(
		'default' => get_color_defaults( 'custom','5' ),
		'sanitize_callback' => 'sanitize_hex_color',
	));

	// control
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coaching_pro_theme_nav_text_color_setting',
			array(
				'label'       => __( 'Navigation Text Color', 'coaching-pro' ),
				'section'     => 'color_options_section',
				'settings'    => 'coaching_pro_theme_nav_text_color_setting',
			)
		)
	);

	/* CUSTOM NAV TEXT HOVER COLOR
	------------------------------------------------------ */
	// setting
	$wp_customize->add_setting( 'coaching_pro_theme_nav_text_hover_color_setting', array(
		'default' => get_color_defaults( 'custom','6' ),
		'sanitize_callback' => 'sanitize_hex_color',
	));

	// control
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'coaching_pro_theme_nav_text_hover_color_setting',
			array(
				'label'       => __( 'Navigation Text Hover Color', 'coaching-pro' ),
				'section'     => 'color_options_section',
				'settings'    => 'coaching_pro_theme_nav_text_hover_color_setting',
			)
		)
	);

}
