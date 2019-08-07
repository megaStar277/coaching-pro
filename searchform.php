<?php
/**
* Coaching Pro Theme
*
* This file adds custom search form to the Coaching Pro theme.
*
* @package Coaching Pro Theme
* @author  thebrandiD
* @license GPL-2.0+
* @link    https://thebrandidthemes.com/
*/

$unique_id = esc_attr( uniqid( 'search-form-' ) );

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'coaching-pro' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'coaching-pro' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />

	<button type="submit" class="search-submit"><?php  echo coaching_pro_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'coaching-pro' ); ?></span></button>
</form>
