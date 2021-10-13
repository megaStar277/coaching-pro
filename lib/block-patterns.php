<?php
/**
 * Registers the Block Patterns and Categories used in the Coaching Pro theme.
 *
 * @since 2.0.0
 *
 * @package Coaching Pro Theme
 */

// Register a new pattern category.
function coachingpro_register_block_categories() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

		register_block_pattern_category(
			'coachingpro',
			array( 'label' => _x( 'Coaching Pro', 'Block pattern category', 'coaching-pro' ) )
		);

	}

}
add_action( 'init', 'coachingpro_register_block_categories' );

// Register the block patterns.
function coachingpro_register_block_patterns() {

    if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

        // Define images.
        $sample_bg_newsletter = esc_url( get_stylesheet_directory_uri() . '/images/sample-bg-newsletter.jpg' );
        $sample_hero_image = esc_url( get_stylesheet_directory_uri() . '/images/sample-hero.jpg' );
        $sample_icon_1 = esc_url( get_stylesheet_directory_uri() . '/images/sample-icon-1.png' );
        $sample_icon_2 = esc_url( get_stylesheet_directory_uri() . '/images/sample-icon-2.png' );
        $sample_icon_3 = esc_url( get_stylesheet_directory_uri() . '/images/sample-icon-3.png' );

        // Main Hero.
        /* ------------------------------------------------------------------ */
        $mainhero_pattern_content = "<!-- wp:genesis-blocks/gb-columns {\"backgroundImgURL\":\"$sample_hero_image\",\"columns\":1,\"layout\":\"one-column\",\"align\":\"full\",\"marginBottom\":60,\"paddingTop\":200,\"paddingRight\":30,\"paddingBottom\":200,\"paddingLeft\":30,\"textColor\":\"white\",\"backgroundColor\":\"colorone\",\"columnMaxWidth\":600} -->\n<div class=\"wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column gb-background-cover gb-background-no-repeat has-colorone-background-color has-white-color gb-columns-center alignfull\" style=\"margin-bottom:60px;padding-top:200px;padding-right:30px;padding-bottom:200px;padding-left:30px;background-image:url($sample_hero_image)\"><div class=\"gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column\" style=\"max-width:600px\"><!-- wp:genesis-blocks/gb-column {\"textAlign\":\"center\"} -->\n<div class=\"wp-block-genesis-blocks-gb-column gb-block-layout-column\"><div class=\"gb-block-layout-column-inner\" style=\"text-align:center\"><!-- wp:heading {\"level\":1} -->\n<h1><strong>Coaching just got better.</strong></h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Whatever your expertise, whatever your calling, Coaching Pro makes it easy to put yourself out there.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button {\"backgroundColor\":\"white\",\"textColor\":\"colortwo\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-colortwo-color has-white-background-color has-text-color has-background\" href=\"#\">Buy Now</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:genesis-blocks/gb-column --></div></div>\n<!-- /wp:genesis-blocks/gb-columns -->";

        register_block_pattern(
            'coachingpro/mainhero-pattern',
            array (
                'title'   => __( 'Main Hero', 'coaching-pro' ),
                'description'   => _x( 'A full-width hero image section with heading, supporting text, and a button.', 'Block pattern description', 'coaching-pro' ),
				'content'       => trim( $mainhero_pattern_content ),
				'categories'    => array( 'coachingpro' ),
				'keywords'      => array( 'cta', 'hero' ),
                'viewportWidth' => 1400,
                'blockTypes'    => array( 'genesis-blocks/gb-columns', 'genesis-blocks/gb-column', 'core/heading', 'core/paragraph', 'core/buttons', 'core/button' ),
            )
        );

        // Hero 2-columns.
        /* ------------------------------------------------------------------ */
        $hero2columns_pattern_content = "<!-- wp:genesis-blocks/gb-columns {\"columns\":2,\"layout\":\"gb-2-col-equal\",\"columnsGap\":0,\"align\":\"full\",\"backgroundColor\":\"bgcolorone\"} -->\n<div class=\"wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal has-bgcolorone-background-color alignfull\"><div class=\"gb-layout-column-wrap gb-block-layout-column-gap-0 gb-is-responsive-column\"><!-- wp:genesis-blocks/gb-column {\"textAlign\":\"center\",\"columnVerticalAlignment\":\"center\"} -->\n<div class=\"wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center\"><div class=\"gb-block-layout-column-inner\" style=\"text-align:center\"><!-- wp:image {\"id\":9999,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"$sample_hero_image\" alt=\"\" class=\"wp-image-9999\"/></figure>\n<!-- /wp:image --></div></div>\n<!-- /wp:genesis-blocks/gb-column -->\n\n<!-- wp:genesis-blocks/gb-column {\"textAlign\":\"center\",\"paddingSync\":true,\"padding\":40,\"columnVerticalAlignment\":\"center\"} -->\n<div class=\"wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center\"><div class=\"gb-block-layout-column-inner\" style=\"padding:40px;text-align:center\"><!-- wp:heading {\"level\":1} -->\n<h1><strong>Coaching just got better.</strong></h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Whatever your expertise, whatever your calling, Coaching Pro makes it easy to put yourself out there.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button {\"backgroundColor\":\"colortwo\",\"textColor\":\"white\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-color has-colortwo-background-color has-text-color has-background\" href=\"#\">Buy Now</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:genesis-blocks/gb-column --></div></div>\n<!-- /wp:genesis-blocks/gb-columns -->";

        register_block_pattern(
            'coachingpro/herotwocol-pattern',
            array (
                'title'   => __( 'Hero 2-columns', 'coaching-pro' ),
                'description'   => _x( 'A full-width section with two columns: one column containing a hero image, the other column containing heading text, supporting text, and a button.', 'Block pattern description', 'coaching-pro' ),
				'content'       => trim( $hero2columns_pattern_content ),
				'categories'    => array( 'coachingpro' ),
				'keywords'      => array( 'cta', 'hero', 'columns' ),
                'viewportWidth' => 1400,
                'blockTypes'    => array( 'genesis-blocks/gb-columns', 'genesis-blocks/gb-column', 'core/image', 'core/heading', 'core/paragraph', 'core/buttons', 'core/button' ),
            )
        );

        // Basic 2-columns.
        /* ------------------------------------------------------------------ */
        $basic2columns_pattern_content = "<!-- wp:genesis-blocks/gb-columns {\"columns\":2,\"layout\":\"gb-2-col-equal\",\"columnsGap\":0,\"align\":\"full\"} -->\n<div class=\"wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal alignfull\"><div class=\"gb-layout-column-wrap gb-block-layout-column-gap-0 gb-is-responsive-column\"><!-- wp:genesis-blocks/gb-column {\"backgroundColor\":\"bgcolorone\",\"textAlign\":\"center\",\"paddingSync\":true,\"padding\":40,\"columnVerticalAlignment\":\"center\"} -->\n<div class=\"wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center\"><div class=\"gb-block-layout-column-inner has-bgcolorone-background-color\" style=\"padding:40px;text-align:center\"><!-- wp:heading -->\n<h2><strong>Coaching just got better.</strong></h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Whatever your expertise, whatever your calling, Coaching Pro makes it easy to put yourself out there.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button {\"backgroundColor\":\"colortwo\",\"textColor\":\"white\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-color has-colortwo-background-color has-text-color has-background\" href=\"#\">Buy Now</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:genesis-blocks/gb-column -->\n\n<!-- wp:genesis-blocks/gb-column {\"backgroundColor\":\"bgcolortwo\",\"textAlign\":\"center\",\"paddingSync\":true,\"padding\":40,\"columnVerticalAlignment\":\"center\"} -->\n<div class=\"wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center\"><div class=\"gb-block-layout-column-inner has-bgcolortwo-background-color\" style=\"padding:40px;text-align:center\"><!-- wp:heading -->\n<h2><strong>Coaching just got better.</strong></h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Whatever your expertise, whatever your calling, Coaching Pro makes it easy to put yourself out there.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button {\"backgroundColor\":\"colortwo\",\"textColor\":\"white\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-color has-colortwo-background-color has-text-color has-background\" href=\"#\">Buy Now</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:genesis-blocks/gb-column --></div></div>\n<!-- /wp:genesis-blocks/gb-columns -->";

        register_block_pattern(
            'coachingpro/basictwocol-pattern',
            array (
                'title'   => __( 'Basic 2-columns', 'coaching-pro' ),
                'description'   => _x( 'A simple full-width section with two columns, each containing heading text, supporting text, and a button.', 'Block pattern description', 'coaching-pro' ),
				'content'       => trim( $basic2columns_pattern_content ),
				'categories'    => array( 'coachingpro' ),
				'keywords'      => array( 'cta', 'columns' ),
                'viewportWidth' => 1400,
                'blockTypes'    => array( 'genesis-blocks/gb-columns', 'genesis-blocks/gb-column', 'core/heading', 'core/paragraph', 'core/buttons', 'core/button' ),
            )
        );

        // Features 3-columns.
        /* ------------------------------------------------------------------ */
        $features3columns_pattern_content = "<!-- wp:genesis-blocks/gb-columns {\"columns\":1,\"layout\":\"one-column\",\"align\":\"full\",\"padding\":40,\"paddingTop\":80,\"paddingRight\":40,\"paddingBottom\":80,\"paddingLeft\":40,\"backgroundColor\":\"bgcolorone\"} -->\n<div class=\"wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column has-bgcolorone-background-color alignfull\" style=\"padding-top:80px;padding-right:40px;padding-bottom:80px;padding-left:40px\"><div class=\"gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column\"><!-- wp:genesis-blocks/gb-column {\"textAlign\":\"center\"} -->\n<div class=\"wp-block-genesis-blocks-gb-column gb-block-layout-column\"><div class=\"gb-block-layout-column-inner\" style=\"text-align:center\"><!-- wp:heading -->\n<h2><strong>Coaching just got better.</strong></h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3,\"textColor\":\"colortwo\"} -->\n<h3 class=\"has-colortwo-color has-text-color\"><strong>Sign up for my program today.</strong></h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Whatever your expertise, whatever your calling, Coaching Pro makes it easy to put yourself out there.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:genesis-blocks/gb-columns {\"columns\":3,\"layout\":\"gb-3-col-equal\",\"columnsGap\":4,\"marginTop\":40} -->\n<div class=\"wp-block-genesis-blocks-gb-columns gb-layout-columns-3 gb-3-col-equal\" style=\"margin-top:40px\"><div class=\"gb-layout-column-wrap gb-block-layout-column-gap-4 gb-is-responsive-column\"><!-- wp:genesis-blocks/gb-column {\"textAlign\":\"center\"} -->\n<div class=\"wp-block-genesis-blocks-gb-column gb-block-layout-column\"><div class=\"gb-block-layout-column-inner\" style=\"text-align:center\"><!-- wp:image {\"align\":\"center\",\"id\":9999,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<div class=\"wp-block-image\"><figure class=\"aligncenter size-large\"><img src=\"$sample_icon_1\" alt=\"\" class=\"wp-image-9999\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"level\":4,\"textColor\":\"colortwo\"} -->\n<h4 class=\"has-colortwo-color has-text-color\"><strong>This is a feature description.</strong></h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Whatever your expertise, whatever your calling, Coaching Pro makes it easy to put yourself out there.</p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:genesis-blocks/gb-column -->\n\n<!-- wp:genesis-blocks/gb-column {\"textAlign\":\"center\"} -->\n<div class=\"wp-block-genesis-blocks-gb-column gb-block-layout-column\"><div class=\"gb-block-layout-column-inner\" style=\"text-align:center\"><!-- wp:image {\"align\":\"center\",\"id\":9999,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<div class=\"wp-block-image\"><figure class=\"aligncenter size-large\"><img src=\"$sample_icon_2\" alt=\"\" class=\"wp-image-9999\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"level\":4,\"textColor\":\"colortwo\"} -->\n<h4 class=\"has-colortwo-color has-text-color\"><strong>This is a feature description.</strong></h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Whatever your expertise, whatever your calling, Coaching Pro makes it easy to put yourself out there.</p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:genesis-blocks/gb-column -->\n\n<!-- wp:genesis-blocks/gb-column {\"textAlign\":\"center\"} -->\n<div class=\"wp-block-genesis-blocks-gb-column gb-block-layout-column\"><div class=\"gb-block-layout-column-inner\" style=\"text-align:center\"><!-- wp:image {\"align\":\"center\",\"id\":9999,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<div class=\"wp-block-image\"><figure class=\"aligncenter size-large\"><img src=\"$sample_icon_3\" alt=\"\" class=\"wp-image-9999\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"level\":4,\"textColor\":\"colortwo\"} -->\n<h4 class=\"has-colortwo-color has-text-color\"><strong>This is a feature description.</strong></h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Whatever your expertise, whatever your calling, Coaching Pro makes it easy to put yourself out there.</p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:genesis-blocks/gb-column --></div></div>\n<!-- /wp:genesis-blocks/gb-columns --></div></div>\n<!-- /wp:genesis-blocks/gb-column --></div></div>\n<!-- /wp:genesis-blocks/gb-columns -->";

        register_block_pattern(
            'coachingpro/featuresthreecol-pattern',
            array (
                'title'   => __( 'Features 3-columns', 'coaching-pro' ),
                'description'   => _x( 'A full-width section with heading text, supporting text, and 3-columns.', 'Block pattern description', 'coaching-pro' ),
				'content'       => trim( $features3columns_pattern_content ),
				'categories'    => array( 'coachingpro' ),
				'keywords'      => array( 'columns', 'features' ),
                'viewportWidth' => 1400,
                'blockTypes'    => array( 'genesis-blocks/gb-columns', 'genesis-blocks/gb-column', 'core/image', 'core/heading', 'core/paragraph' ),
            )
        );

        // Blog Grid.
        /* ------------------------------------------------------------------ */
        $bloggrid_pattern_content = "<!-- wp:genesis-blocks/gb-columns {\"columns\":1,\"layout\":\"one-column\",\"align\":\"full\",\"padding\":40,\"paddingTop\":80,\"paddingRight\":40,\"paddingBottom\":40,\"paddingLeft\":40,\"backgroundColor\":\"bgcolorone\",\"columnMaxWidth\":1200} -->\n<div class=\"wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column has-bgcolorone-background-color gb-columns-center alignfull\" style=\"padding-top:80px;padding-right:40px;padding-bottom:40px;padding-left:40px\"><div class=\"gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column\" style=\"max-width:1200px\"><!-- wp:genesis-blocks/gb-column {\"textAlign\":\"center\"} -->\n<div class=\"wp-block-genesis-blocks-gb-column gb-block-layout-column\"><div class=\"gb-block-layout-column-inner\" style=\"text-align:center\"><!-- wp:heading -->\n<h2><strong>Coaching just got better.</strong></h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3,\"textColor\":\"colortwo\"} -->\n<h3 class=\"has-colortwo-color has-text-color\"><strong>Sign up for my program today.</strong></h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Whatever your expertise, whatever your calling, Coaching Pro makes it easy to put yourself out there.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:genesis-blocks/gb-post-grid {\"postsToShow\":4,\"displayPostDate\":false,\"displayPostAuthor\":false,\"postTitleTag\":\"h4\",\"readMoreText\":\"Read More\",\"excerptLength\":35,\"imageSize\":\"featured-image\"} /--></div></div>\n<!-- /wp:genesis-blocks/gb-column --></div></div>\n<!-- /wp:genesis-blocks/gb-columns -->";

        register_block_pattern(
            'coachingpro/bloggrid-pattern',
            array (
                'title'   => __( 'Blog Grid', 'coaching-pro' ),
                'description'   => _x( 'A full-width section to showcase blog posts. Contains heading text, sub-heading text, supporting text, and a 2-column grid of your latest blog posts.', 'Block pattern description', 'coaching-pro' ),
				'content'       => trim( $bloggrid_pattern_content ),
				'categories'    => array( 'coachingpro' ),
				'keywords'      => array( 'blog', 'columns', 'grid' ),
                'viewportWidth' => 1400,
                'blockTypes'    => array( 'genesis-blocks/gb-columns', 'genesis-blocks/gb-column', 'genesis-blocks/gb-post-grid', 'core/heading', 'core/paragraph' ),
            )
        );

        // Testimonials Section.
        /* ------------------------------------------------------------------ */
        $testimonialssection_pattern_content = "<!-- wp:genesis-blocks/gb-columns {\"columns\":1,\"layout\":\"one-column\",\"align\":\"full\",\"padding\":40,\"paddingTop\":80,\"paddingRight\":40,\"paddingBottom\":40,\"paddingLeft\":40,\"backgroundColor\":\"bgcolorone\",\"columnMaxWidth\":800} -->\n<div class=\"wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column has-bgcolorone-background-color gb-columns-center alignfull\" style=\"padding-top:80px;padding-right:40px;padding-bottom:40px;padding-left:40px\"><div class=\"gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column\" style=\"max-width:800px\"><!-- wp:genesis-blocks/gb-column {\"textAlign\":\"center\"} -->\n<div class=\"wp-block-genesis-blocks-gb-column gb-block-layout-column\"><div class=\"gb-block-layout-column-inner\" style=\"text-align:center\"><!-- wp:heading -->\n<h2><strong>Coaching just got better.</strong></h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3,\"textColor\":\"colortwo\"} -->\n<h3 class=\"has-colortwo-color has-text-color\"><strong>Sign up for my program today.</strong></h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Whatever your expertise, whatever your calling, Coaching Pro makes it easy to put yourself out there.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:social-proof-slider/main {\"showfeaturedimages\":true,\"imageborderradius\":50,\"showarrows\":true,\"showdots\":true,\"arrowscolor\":\"#d46a43\",\"arrowshovercolor\":\"#6e6872\",\"dotscolor\":\"#d46a43\",\"dotshovercolor\":\"#6e6872\",\"authornamecolor\":\"#d46a43\"} /--></div></div>\n<!-- /wp:genesis-blocks/gb-column --></div></div>\n<!-- /wp:genesis-blocks/gb-columns -->";

        register_block_pattern(
            'coachingpro/testimonialssection-pattern',
            array (
                'title'   => __( 'Testimonials Section', 'coaching-pro' ),
                'description'   => _x( 'A full-width section to showcase testimonials. Contains heading text, sub-heading text, supporting text, and a rotating slider of your testimonials.', 'Block pattern description', 'coaching-pro' ),
				'content'       => trim( $testimonialssection_pattern_content ),
				'categories'    => array( 'coachingpro' ),
				'keywords'      => array( 'testimonials' ),
                'viewportWidth' => 1400,
                'blockTypes'    => array( 'genesis-blocks/gb-columns', 'genesis-blocks/gb-column', 'social-proof-slider/main', 'core/heading', 'core/paragraph' ),
            )
        );

        // Newsletter Opt-In.
        /* ------------------------------------------------------------------ */
        $newsletteroptin_pattern_content = "<!-- wp:genesis-blocks/gb-columns {\"backgroundImgURL\":\"$sample_bg_newsletter\",\"backgroundDimRatio\":70,\"columns\":1,\"layout\":\"one-column\",\"align\":\"full\",\"padding\":40,\"paddingTop\":80,\"paddingRight\":40,\"paddingBottom\":40,\"paddingLeft\":40,\"backgroundColor\":\"black\",\"columnMaxWidth\":1200} -->\n<div class=\"wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column gb-has-background-dim gb-has-background-dim-70 gb-background-cover gb-background-no-repeat has-black-background-color gb-columns-center alignfull\" style=\"padding-top:80px;padding-right:40px;padding-bottom:40px;padding-left:40px;background-image:url($sample_bg_newsletter)\"><div class=\"gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column\" style=\"max-width:1200px\"><!-- wp:genesis-blocks/gb-column {\"textColor\":\"white\",\"textAlign\":\"center\"} -->\n<div class=\"wp-block-genesis-blocks-gb-column gb-block-layout-column\"><div class=\"gb-block-layout-column-inner has-white-color\" style=\"text-align:center\"><!-- wp:heading -->\n<h2><strong>Sign up for our Newsletter</strong></h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3><strong>And get a free e-book instantly</strong></h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Whatever your expertise, whatever your calling, Coaching Pro makes it easy to put yourself out there.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong><span style=\"color:#ff0000\" class=\"has-inline-color\">- DELETE THIS PARAGRAPH BLOCK AND REPLACE IT WITH YOUR CONTACT FORM BLOCK! -</span></strong></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:genesis-blocks/gb-column --></div></div>\n<!-- /wp:genesis-blocks/gb-columns -->";

        register_block_pattern(
            'coachingpro/newsletteroptin-pattern',
            array (
                'title'   => __( 'Newsletter Opt-In', 'coaching-pro' ),
                'description'   => _x( 'A full-width section to promote newsletter signups or other content. Contains a background hero image, heading text, sub-heading text, supporting text, and a place to add your own opt-in form block.', 'Block pattern description', 'coaching-pro' ),
				'content'       => trim( $newsletteroptin_pattern_content ),
				'categories'    => array( 'coachingpro' ),
				'keywords'      => array( 'cta', 'email', 'newsletter', 'opt-in', 'signup' ),
                'viewportWidth' => 1400,
                'blockTypes'    => array( 'genesis-blocks/gb-columns', 'genesis-blocks/gb-column', 'core/heading', 'core/paragraph' ),
            )
        );

    }

}

add_action( 'init', 'coachingpro_register_block_patterns' );
