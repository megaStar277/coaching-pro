<?php
/**
 * This template displays the single Product.
 *
 * @package Coaching Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Remove the entry meta underneath the Product title.
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

genesis();
