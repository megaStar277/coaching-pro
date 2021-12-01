<?php
/**
 * This template displays the Easy Digital Downloads Archive page.
 *
 * @package Coaching Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Adds a body class for the EDD Archive page.
 *
 * @param array $classes An array of body classes to use.
 */
function coaching_pro_edd_archive_body_class( $classes ) {
	$classes[] = 'edd-page edd-archive';
	return $classes;
}
add_filter( 'body_class', 'coaching_pro_edd_archive_body_class' );

/**
 * Forces full-width page layout.
 */
function coaching_pro_edd_archive_page_layout() {
	return 'full-width-content';
}
add_filter( 'genesis_pre_get_option_site_layout', 'coaching_pro_edd_archive_page_layout' );

// Remove the standard loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'custom_edd_archive_loop' );

/**
 * Replace the standard loop with a custom loop.
 */
function custom_edd_archive_loop() {

	// Add an Article tag.
	genesis_markup(
		[
			'open'    => '<article class="page type-page entry">',
			'context' => 'entry',
		]
	);

	// Add page title.
	$pageheader_content = genesis_markup(
		[
			'open'    => '<h1 %s>',
			'close'   => '</h1>',
			'content' => __( 'Downloads', 'coachingpro' ),
			'context' => 'entry-title',
			'echo'    => false,
		]
	);
	genesis_markup(
		[
			'open'    => '<header %s>',
			'close'   => '</header>',
			'context' => 'entry-header',
			'content' => $pageheader_content,
		]
	);

	// Get current page var.
	$current_page = get_query_var( 'paged' );

	// Get amount of posts to show per page.
	$per_page = get_option( 'posts_per_page' );

	// Determine posts offset.
	$offset = $current_page > 0 ? $per_page * ( $current_page - 1 ) : 0;

	// Create args for query.
	$product_args = array(
		'post_type'      => 'download',
		'posts_per_page' => $per_page,
		'offset'         => $offset,
		'orderby'        => 'title',
		'order'          => 'ASC',
	);

	// Create new query.
	$products = new WP_Query( $product_args );

	if ( $products->have_posts() ) {
		// Init counter var.
		$i = 1;
		?>
		<div class="edd-products-wrap">
		<?php
		while ( $products->have_posts() ) {
			$products->the_post();
			?>
			<div class="threecol edd-product product">

				<?php // Product Image. ?>
				<div class="product-image">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'product-image' ); ?>
					</a>
				</div>

				<?php // Product Title. ?>
				<a href="<?php the_permalink(); ?>">
					<h2 class="title"><?php the_title(); ?></h2>
				</a>

				<?php // Product Price. ?>
				<?php if ( function_exists( 'edd_price' ) ) { ?>
				<div class="product-price">
					<?php
					if ( edd_has_variable_prices( get_the_ID() ) ) {
						echo 'Starting at: ';
						dd_price( get_the_ID() );
					} else {
						edd_price( get_the_ID() );
					}
					?>
				</div><!--end .product-price-->
				<?php } ?>

				<?php // Product purchase button. ?>
				<?php if ( function_exists( 'edd_price' ) ) { ?>
					<div class="product-buttons">
						<?php
						if ( ! edd_has_variable_prices( get_the_ID() ) ) {
							echo edd_get_purchase_link( get_the_ID(), 'Add to Cart', 'button' ); // phpcs:ignore
						}
						?>
						<!-- <a href="<?php the_permalink(); ?>">View Details</a> -->
					</div><!--end .product-buttons-->
				<?php } ?>
			</div><!--end .product-->
			<?php
			// Increase counter var.
			$i++;
		}
		?>
		</div><!-- end .edd-products-wrap -->

		<div class="edd-pagination-wrap">
			<div class="edd-pagination">
				<?php
				$big = 999999999; // Use an unlikely integer.
				echo wp_kses_post(
					paginate_links(
						array(
							'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format'  => '?paged=%#%',
							'current' => max( 1, $current_page ),
							'total'   => $products->max_num_pages,
						)
					)
				);
				?>
			</div>
		</div>
		<?php
	} else {
		// Show 'No Downloads Found' Message.
		?>
		<h2 class="center"><?php echo esc_attr_e( 'No Downloads Found', 'coachingpro' ); ?></h2>
		<p class="center"><?php echo esc_attr_e( 'Sorry, we couldn\'t find any Downloads.', 'coachingpro' ); ?></p>
		<?php
	}

}

genesis();
