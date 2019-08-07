<?php
/**
 * Loads widgets for Coaching Pro theme.
 *
 * @since 1.0
 *
 * @package Coaching Pro Theme
 */

genesis_register_widget_area(
	array(
	'id'          => 'front-page-welcome',
	'name'        => __( 'Front Page Welcome Section', 'coaching-pro' ),
	'description' => __( 'This is the welcome area in the header.', 'coaching-pro' ),
	)
);


genesis_register_widget_area(
	array(
	'id'          => 'front-page-1a',
	'name'        => __( 'Front Page 1 - a', 'coaching-pro' ),
	'description' => __( 'This is the front page 1a section.', 'coaching-pro' ),
	)
);
genesis_register_widget_area(
	array(
	'id'          => 'front-page-1b',
	'name'        => __( 'Front Page 1 - b', 'coaching-pro' ),
	'description' => __( 'This is the front page 1b section.', 'coaching-pro' ),
	)
);
genesis_register_widget_area(
	array(
	'id'          => 'front-page-2',
	'name'        => __( 'Front Page 2', 'coaching-pro' ),
	'description' => __( 'This is the front page 2 section.', 'coaching-pro' ),
	)
);

genesis_register_widget_area(
	array(
	'id'          => 'front-page-3',
	'name'        => __( 'Front Page 3', 'coaching-pro' ),
	'description' => __( 'This is the front page 3 section.', 'coaching-pro' ),
	)
);

genesis_register_widget_area(
	array(
	'id'          => 'front-page-testimonials',
	'name'        => __( 'Front Page Testimonials', 'coaching-pro' ),
	'description' => __( 'This is the front page testimonials section.', 'coaching-pro' ),
	)
);


genesis_register_widget_area(
	array(
	'id'          => 'front-page-cta',
	'name'        => __( 'Front Page Call to Action', 'coaching-pro' ),
	'description' => __( 'This is the call to action  section.', 'coaching-pro' ),
	)
);

genesis_register_widget_area(
	array(
	'id'          => 'front-page-offer',
	'name'        => __( 'Front Page Offer', 'coaching-pro' ),
	'description' => __( 'This is the front page offer section.', 'coaching-pro' ),
	)
);
