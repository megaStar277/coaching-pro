<?php
/**
 * This template displays the single Product.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

genesis();
