<?php
/**
* Coaching Pro Theme
*
* This file adds custom archive page to the Coaching Pro theme.
*
* @package Coaching Pro Theme
* @author  thebrandiD
* @license GPL-2.0+
* @link    https://thebrandidthemes.com/
*/

remove_action( 'genesis_before_loop', 'genesis_do_posts_page_heading' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
add_action( 'genesis_entry_header', 'genesis_post_info', 2 );


function coaching_pro_archive_blog_custom() {
	if ( is_home() ) {
		remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
		remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
		remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
	}
}
add_action( 'genesis_entry_header','coaching_pro_archive_blog_custom' );

remove_action( 'genesis_entry_content', 'genesis_do_post_image',8 );
add_action( 'genesis_entry_header', 'genesis_do_post_image',1 );

genesis();
