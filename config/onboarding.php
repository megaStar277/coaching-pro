<?php
/**
 * Coaching Pro - One-Click Theme Setup settings
 *
 * Onboarding config to load plugins and demo page content on theme activation.
 *
 * @package Coaching Pro
 * @author  brandiD
 */

return [
	'dependencies'     => [
		'plugins' => [
			[
				'name'       => __( 'Easy Digital Downloads', 'coursemaker' ),
				'slug'       => 'easy-digital-downloads/easy-digital-downloads.php',
				'public_url' => 'https://wordpress.org/plugins/easy-digital-downloads/',
			],
			[
				'name'       => __( 'Genesis Blocks', 'coursemaker' ),
				'slug'       => 'genesis-blocks/genesis-blocks.php',
				'public_url' => 'https://wordpress.org/plugins/genesis-blocks/',
			],
			[
				'name'       => __( 'Social Proof (Testimonials) Slider', 'coursemaker' ),
				'slug'       => 'social-proof-testimonials-slider/social-proof-slider.php',
				'public_url' => 'https://wordpress.org/plugins/social-proof-testimonials-slider/',
			],
			[
				'name'       => __( 'WooCommerce', 'coursemaker' ),
				'slug'       => 'woocommerce/woocommerce.php',
				'public_url' => 'https://wordpress.org/plugins/woocommerce/',
			],
			[
				'name'       => __( 'WP Forms Lite', 'coursemaker' ),
				'slug'       => 'wpforms-lite/wpforms.php',
				'public_url' => 'https://wordpress.org/plugins/wpforms-lite/',
			],
		],
	],
	'content'          => [
		'homepage'             => [
			'post_title'     => 'Home',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/homepage.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout' => 'full-width-content',
				'_genesis_hide_title' => '1',
				'page_transparent_header_value' => '1'
			],
		],
		// 'downloads' => [
		// 	'post_title'     => 'Downloads',
		// 	'post_type'      => 'page',
		// 	'post_status'    => 'publish',
		// 	'comment_status' => 'closed',
		// 	'ping_status'    => 'closed',
		// 	'meta_input'     => [ '_genesis_layout' => 'full-width-content' ],
		// ],
		// 'shop' => [
		// 	'post_title'     => 'Shop',
		// 	'post_type'      => 'page',
		// 	'post_status'    => 'publish',
		// 	'comment_status' => 'closed',
		// 	'ping_status'    => 'closed',
		// 	'meta_input'     => [ '_genesis_layout' => 'full-width-content' ],
		// ],
		'about' => [
			'post_title'     => 'About',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/about.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		],
		'services' => [
			'post_title'     => 'Services',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/services.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [ '_genesis_layout' => 'full-width-content' ],
		],
		'blog' => [
			'post_title'     => 'Blog',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [ '_genesis_layout' => 'full-width-content' ],
		],
		'contact-me' => [
			'post_title'     => 'Contact Me',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/contact-me.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [ '_genesis_layout' => 'full-width-content' ],
		],
		// /* SAMPLE BLOG POSTS */
		// 'Sample Blog Post 1'   => [
		// 	'post_title'     => 'Five Important Things You Should Know About Courses',
		// 	'post_content'   => require dirname( __FILE__ ) . '/import/content/blog/sample-blog-post-1.php',
		// 	'post_type'      => 'post',
		// 	'post_status'    => 'publish',
		// 	'featured_image' => CHILD_URL . '/config/import/images/sample-blog-post-1.jpg', // Photo by Matthew T Rader on Unsplash.
		// 	'comment_status' => 'closed',
		// 	'ping_status'    => 'closed',
		// 	'meta_input'     => [
		// 		'_featured_article' => 1,
		// 	],
		// ],
		// 'Sample Blog Post 2'   => [
		// 	'post_title'     => 'This Year Will Be The Year of Your Course',
		// 	'post_content'   => require dirname( __FILE__ ) . '/import/content/blog/sample-blog-post-2.php',
		// 	'post_type'      => 'post',
		// 	'post_status'    => 'publish',
		// 	'featured_image' => CHILD_URL . '/config/import/images/sample-blog-post-2.jpg', // Photo by Jeff Isaak on Unsplash.
		// 	'comment_status' => 'closed',
		// 	'ping_status'    => 'closed',
		// ],
		// 'Sample Blog Post 3'   => [
		// 	'post_title'     => 'Ten Things Your Competitors Know About Courses',
		// 	'post_content'   => require dirname( __FILE__ ) . '/import/content/blog/sample-blog-post-3.php',
		// 	'post_type'      => 'post',
		// 	'post_status'    => 'publish',
		// 	'featured_image' => CHILD_URL . '/config/import/images/sample-blog-post-3.jpg', // Photo by Henri Meilhac on Unsplash.
		// 	'comment_status' => 'closed',
		// 	'ping_status'    => 'closed',
		// 	'meta_input'     => [
		// 		'_featured_article' => 1,
		// 	],
		// ],
		// 'Sample Blog Post 4'   => [
		// 	'post_title'     => 'Innovative Approaches To Improving Your Courses',
		// 	'post_content'   => require dirname( __FILE__ ) . '/import/content/blog/sample-blog-post-4.php',
		// 	'post_type'      => 'post',
		// 	'post_status'    => 'publish',
		// 	'featured_image' => CHILD_URL . '/config/import/images/sample-blog-post-4.jpg', // Photo by Nathan Dumlao on Unsplash.
		// 	'comment_status' => 'closed',
		// 	'ping_status'    => 'closed',
		// ],
		// 'Sample Blog Post 5'   => [
		// 	'post_title'     => 'The Crucial Step in Courses that Many Overlook',
		// 	'post_content'   => require dirname( __FILE__ ) . '/import/content/blog/sample-blog-post-5.php',
		// 	'post_type'      => 'post',
		// 	'post_status'    => 'publish',
		// 	'featured_image' => CHILD_URL . '/config/import/images/sample-blog-post-5.jpg', // Photo by Clem Onojeghuo on Unsplash.
		// 	'comment_status' => 'closed',
		// 	'ping_status'    => 'closed',
		// 	'meta_input'     => [
		// 		'_featured_article' => 1,
		// 	],
		// ],
		// 'Sample Blog Post 6'   => [
		// 	'post_title'     => 'Three Tricks to Putting Your Courses into Overdrive',
		// 	'post_content'   => require dirname( __FILE__ ) . '/import/content/blog/sample-blog-post-6.php',
		// 	'post_type'      => 'post',
		// 	'post_status'    => 'publish',
		// 	'featured_image' => CHILD_URL . '/config/import/images/sample-blog-post-6.jpg', // Photo by Jeremy Bishop on Unsplash.
		// 	'comment_status' => 'closed',
		// 	'ping_status'    => 'closed',
		// ],
		// /* SAMPLE TESTIMONIALS */
		// 'Sample Testimonial 1' => [
		// 	'post_title'     => 'Sample Testimonial 1',
		// 	'post_content'   => '',
		// 	'post_type'      => 'socialproofslider',
		// 	'post_status'    => 'publish',
		// 	'comment_status' => 'closed',
		// 	'ping_status'    => 'closed',
		// 	'meta_input'     => require dirname( __FILE__ ) . '/import/content/testimonials/sample-testimonial-1.php',
		// ],
		// 'Sample Testimonial 2' => [
		// 	'post_title'     => 'Sample Testimonial 2',
		// 	'post_content'   => '',
		// 	'post_type'      => 'socialproofslider',
		// 	'post_status'    => 'publish',
		// 	'comment_status' => 'closed',
		// 	'ping_status'    => 'closed',
		// 	'meta_input'     => require dirname( __FILE__ ) . '/import/content/testimonials/sample-testimonial-2.php',
		// ],
		// 'Sample Testimonial 3' => [
		// 	'post_title'     => 'Sample Testimonial 3',
		// 	'post_content'   => '',
		// 	'post_type'      => 'socialproofslider',
		// 	'post_status'    => 'publish',
		// 	'comment_status' => 'closed',
		// 	'ping_status'    => 'closed',
		// 	'meta_input'     => require dirname( __FILE__ ) . '/import/content/testimonials/sample-testimonial-3.php',
		// ],
	],
	'navigation_menus' => [
		'primary'         => [
			'homepage' => [
				'title' => 'Home',
			],
			// 'downloads' => [
			// 	'title' => 'Downloads',
			// ],
			// 'shop' => [
			// 	'title' => 'Shop',
			// ],
			'about'    => [
				'title' => 'About',
			],
			'services' => [
				'title' => 'Services',
			],
			'blog'     => [
				'title' => 'Blog',
			],
			'contact-me'  => [
				'title' => 'Contact Me',
			],
		],
	],
	/* WIDGET IMPORT */
	'widgets'          => [
		'footer-1' => [
			[
				'type' => 'text',
				'args' => [
					'title'  => 'About Coaching Pro',
					'text'   => '<p>This theme is packed full of features and functionality to help you coach others to reach their full potential.</p>',
					'filter' => 1,
					'visual' => 1,
				],
			],
		],
	],
];
