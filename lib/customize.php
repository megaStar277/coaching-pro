<?php
/**
 * Loads customizer images and settings for Coaching Pro theme.
 *
 * @since 1.0
 *
 * @package Coaching Pro Theme
 */

add_action( 'customize_register', 'coaching_pro_customizer_register_2' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 1.0.0
 */
function coaching_pro_customizer_register_2() {

	if ( class_exists( 'WP_Customize_Control' ) ) {
		require_once( CHILD_THEME_DIR . '/includes/class-customizer-range-value-control/class-customizer-range-value-control.php' );
	}
	/**
	 * Customize Background Image Control Class
	 *
	 * @package WordPress
	 * @subpackage Customize
	 * @since 3.4.0
	 */
	class Child_coaching_pro_Image_Control_2 extends WP_Customize_Image_Control {

		/**
		 * Constructor.
		 *
		 * If $args['settings'] is not defined, use the $id as the setting ID.
		 *
		 * @since 3.4.0
		 * @uses WP_Customize_Upload_Control::__construct()
		 *
		 * @param WP_Customize_Manager $manager
		 * @param string               $id
		 * @param array                $args
		 */
		public function __construct( $manager, $id, $args ) {
			$this->statuses = array( '' => __( 'No Image', 'coaching-pro' ) );

			parent::__construct( $manager, $id, $args );

			// $this->add_tab( 'upload-new', __( 'Upload New', 'coaching-pro' ), array( $this, 'tab_upload_new' ) );
			// $this->add_tab( 'uploaded',   __( 'Uploaded', 'coaching-pro' ),   array( $this, 'tab_uploaded' ) );
			//
			// if ( $this->setting->default ) {
			// 	$this->add_tab( 'default',  __( 'Default', 'coaching-pro' ),  array( $this, 'tab_default_background' ) );
			// }

			// Early priority to occur before $this->manager->prepare_controls();.
			add_action( 'customize_controls_init', array( $this, 'prepare_control' ), 5 );
		}

		/**
		 * Tab.
		 *
		 * @since 3.4.0
		 * @uses WP_Customize_Image_Control::print_tab_image()
		 */
		public function tab_default_background() {
			$this->print_tab_image( $this->setting->default );
		}
	}

	global $wp_customize;

	$images = apply_filters( 'coaching_pro_images', array( '1', '2', '3' ) );

	$wp_customize->add_section( 'Coach-settings', array(
		'title'    => __( 'Front Page Background Images', 'coaching-pro' ),
		'priority' => 80,
		'active_callback' => 'is_front_page',
	) );

	foreach ( $images as $image ) {
		if ( '1' === $image || '2' === $image ) {
			$wp_customize->add_setting( $image .'-coach-image', array(
				'default'  => sprintf( ' %s/images/bg-%s.jpg', CHILD_THEME_URI, $image ),
				'type'     => 'theme_mod',
				'sanitize_callback'	=> 'coaching_pro_sanitize_image',
			) );
		} else {
			$wp_customize->add_setting( $image .'-coach-image', array(
				'default'  => sprintf( '%s/images/bg-%s.png', CHILD_THEME_URI, $image ),
				'type'     => 'theme_mod',
				'sanitize_callback'	=> 'coaching_pro_sanitize_image',
			) );
		}

		if ( '1' === $image ) {

			$wp_customize->add_control( new Child_coaching_pro_Image_Control_2( $wp_customize, $image .'-image', array(
				'label'    => sprintf( __( 'Front Page Welcome Section Image:', 'coaching-pro' ), $image ),
						'section'  => 'Coach-settings',
						'description' => ' <hr> ',
						'settings' => $image .'-coach-image',
						'priority' => $image + 1,
			) ) );

		} elseif ( '2' === $image ) {

			$wp_customize->add_control( new Child_coaching_pro_Image_Control_2( $wp_customize, $image .'-image', array(
				'label'    => sprintf( __( 'Front Page Call To Action Section Image:', 'coaching-pro' ), $image ),
						'section'  => 'Coach-settings',
						'description' => ' <hr> ',
						'settings' => $image .'-coach-image',
						'priority' => $image + 1,
			) ) );

		} else {

			$wp_customize->add_control( new Child_coaching_pro_Image_Control_2( $wp_customize, $image .'-image', array(
				'label'    => sprintf( __( 'Front Page Offer Section Image:', 'coaching-pro' ), $image ),
						'section'  => 'Coach-settings',
						'description' => ' <hr> ',
						'settings' => $image .'-coach-image',
						'priority' => $image + 1,
			) ) );
		}

		$wp_customize->add_section('header_settings' , array(
				'title'     => __( 'General Settings', 'coaching-pro' ),
				'priority'  => 70,
		));

		$wp_customize->add_setting('fixed_header_off', array(
				'default'    => false,
				'type'     => 'theme_mod',
				'sanitize_callback' => 'coaching_pro_sanitize_checkbox',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fixed_header_off',
				array(
								'label'     => __( 'Turn off Sticky Header Navigation (allow header to scroll) ', 'coaching-pro' ),
								'section'   => 'header_settings',
								'settings'  => 'fixed_header_off',
								'type'      => 'checkbox',
						)
			)
		);

		$wp_customize->add_setting('frontpage_graphics_off', array(
				'default'    => false,
				'type'     => 'theme_mod',
				'sanitize_callback' => 'coaching_pro_sanitize_checkbox',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'frontpage_graphics_off',
				array(
								'label'     => __( 'Turn off front page graphics', 'coaching-pro' ),
								'section'   => 'header_settings',
								'settings'  => 'frontpage_graphics_off',
								'type'      => 'checkbox',
						)
			)
		);

		$wp_customize->add_setting('mincss_header_on', array(
				'default'    => false,
				'type'     => 'theme_mod',
				'sanitize_callback' => 'coaching_pro_sanitize_checkbox',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'mincss_header_on',
				array(
								'label'     => __( 'Use minified CSS stylesheet', 'coaching-pro' ),
								'section'   => 'header_settings',
								'settings'  => 'mincss_header_on',
								'type'      => 'checkbox',
						)
			)
		);

		$wp_customize->add_section( 'header_image', array(
				 'title'          => __( 'Logo Image', 'coaching-pro' ),
				 'theme_supports' => 'custom-header',
				 'priority'       => 60,
		) );
		$wp_customize->add_setting( $image .'-coach-image-repeat', array(
			'default' => 'no-repeat',
			'type'     => 'theme_mod',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->add_control( $image .'-coach-image-repeat', array(
								'label'    => __( 'Background Repeat', 'coaching-pro' ),
								'section'  => 'Coach-settings',
								'type'     => 'select',
								'priority' => $image + 1,
								'choices'  => array(
										'no-repeat'  => __( 'No Repeat', 'coaching-pro' ),
										'repeat'     => __( 'Tile' , 'coaching-pro' ),
										'repeat-x'   => __( 'Tile Horizontally', 'coaching-pro' ),
										'repeat-y'   => __( 'Tile Vertically' , 'coaching-pro' ),
								),
		) );
		if ( '1' === $image || '2' === $image ) {
				$wp_customize->add_setting( $image .'-coach-image-size', array(
					'default' => 'cover',
					'type'     => 'theme_mod',
					'sanitize_callback' => 'sanitize_text_field',
				) );
		} else {
			$wp_customize->add_setting( $image .'-coach-image-size', array(
				'default' => 'contain',
				'type'     => 'theme_mod',
				'sanitize_callback' => 'sanitize_text_field',
			) );
		}
		$wp_customize->add_control( $image .'-coach-image-size', array(
								'label'      => __( 'Background Size', 'coaching-pro' ),
								'section'    => 'Coach-settings',
								'type'       => 'select',
								'priority'   => $image + 1,
								'choices'    => array(
								'cover'      => __( 'Cover', 'coaching-pro' ),
								'contain'    => __( 'Contain', 'coaching-pro' ),
								'100% auto'  => __( '100% width', 'coaching-pro' ),
								'auto 100% '  => __( '100% height', 'coaching-pro' ),
								'auto'       => __( 'Actual Size' , 'coaching-pro' ),
						),

		));

		$wp_customize->add_setting( $image .'-coach-image-position-x', array(
						  'default'  => 'center',
							'type'     => 'theme_mod',
							'sanitize_callback' => 'sanitize_text_field',
		));

		$wp_customize->add_control( $image .'-coach-image-position-x', array(
							'label'      => __( 'Background Position Horizontal', 'coaching-pro' ),
							'section'    => 'Coach-settings',
							'type'       => 'select',
							'priority'   => $image + 1,
							'choices'    => array(
									'left'       => __( 'Left', 'coaching-pro' ),
									'center'     => __( 'Center', 'coaching-pro' ),
									'right'      => __( 'Right', 'coaching-pro' ),
							),
		));

		$wp_customize->add_setting( $image .'-coach-image-position-y', array(
							'default'        => 'center',
									'type'     => 'theme_mod',
					 'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->add_control( $image .'-coach-image-position-y', array(
				'label'      => __( 'Background Position Vertical', 'coaching-pro' ),
				'section'  => 'Coach-settings',
				'type'       => 'select',
				'priority' => $image + 1,
				'choices'    => array(
						'top'       => __( 'Top', 'coaching-pro' ),
						'center'     => __( 'Center', 'coaching-pro' ),
						'bottom'      => __( 'Bottom', 'coaching-pro' ),
				),
		) );

		if ( '1' === $image || '2' === $image ) {
			$wp_customize->add_setting($image .'-coach-image-overlay-color', array(
				'default'           => '#333333',
				'sanitize_callback' => 'sanitize_hex_color',
				'type'     => 'theme_mod',
				)
			);

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $image .'-coach-image-overlay-color', array(
					'description' => __( 'Change the color of the overlay for this image.', 'coaching-pro' ),
					'label'       => __( 'Overlay Color', 'coaching-pro' ),
					'section'  => 'Coach-settings',
					'settings'    => $image .'-coach-image-overlay-color',
					'priority' => $image + 1,
			) ) );

			$wp_customize->add_setting( $image .'-coach-image-overlay', array(
								'default'        => '0.4',
								'type'     => 'theme_mod',
								'sanitize_callback' => 'sanitize_text_field',
			) );

			$wp_customize->add_control(new Customizer_Range_Value_Control( $wp_customize, $image .'-coach-image-overlay', array(
					'label'      => __( 'Background Overlay', 'coaching-pro' ),
					'description' => __( 'Opacity (0 = transparent | 1 = solid)', 'coaching-pro' ),
					'section'  => 'Coach-settings',
					'type'       => 'range-value',
					'input_attrs' => array(
				'min' => 0.0,
				'max' => 1.0,
				'step' => 0.01,
				'suffix' => '',
				),
					'priority' => $image + 1,
			) ) );
		} else {
			$wp_customize->add_setting( $image .'-coach-image-overlay', array(
				'default'        => '0.1',
				'type'     => 'theme_mod',
				'sanitize_callback' => 'sanitize_text_field',
			) );

			$wp_customize->add_control(new Customizer_Range_Value_Control( $wp_customize, $image .'-coach-image-overlay', array(
				'label'      => __( 'Image Opacity', 'coaching-pro' ),
				'description' => __( 'Opacity (0 = transparent | 1 = solid)', 'coaching-pro' ),
				'section'  => 'Coach-settings',
				'type'       => 'range-value',
				'input_attrs' => array(
				'min' => 0.0,
				'max' => 1.0,
				'step' => 0.01,
				'suffix' => '',
				),
				'priority' => $image + 1,

			) ) );
		}
	}
}


/**
 * Image sanitization callback.
 *
 * Checks the image's file extension and mime type against a whitelist. If they're allowed,
 * send back the filename, otherwise, return the setting default.
 *
 *- Sanitization: image file extension
 *- Control: text, WP_Customize_Image_Control
 *
 * @see wp_check_filetype() https://developer.wordpress.org/reference/functions/wp_check_filetype/
 *
 * @param string               $image   Image filename.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return string The image filename if the extension is allowed; otherwise, the setting default.
 */
function coaching_pro_sanitize_image( $image, $setting ) {

	/*
	 * Array of valid image file types.
	 *
	 * The array includes image mime types that are included in wp_get_mime_types()
	 */
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'svg'          => 'image/svg',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon',
	);

	// Return an array with file extension and mime_type.
	$file = wp_check_filetype( $image, $mimes );

	// If $image has a valid mime_type, return it; otherwise, return nothing.
	return ( $file['ext'] ? $image : '');
}

/**
 * Checkbox sanitization callback example.
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
