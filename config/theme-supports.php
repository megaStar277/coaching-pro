<?php
/**
 * Coaching Pro - Theme supports declarations.
 *
 * @package Coaching Pro
 */

// Set the Appearance settings defaults.
$appearance = genesis_get_config( 'appearance' );

return array(
	'align-wide'                      => '',
	'custom-logo'                     => array(
		'width'       => 300,
		'height'      => 100,
		'flex-width'  => true,
		'flex-height' => true,
	),
	'editor-color-palette'            => $appearance['editor-color-palette'],
	'editor-styles'                   => '',
	'genesis-accessibility'           => array(
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links',
	),
	'genesis-after-entry-widget-area' => '',
	'genesis-footer-widgets'          => 1,
	'genesis-menus'                   => array(
		'primary'   => __( 'Primary Menu', 'coaching-pro' ),
		'secondary' => __( 'Footer Menu', 'coaching-pro' ),
	),
	'genesis-responsive-viewport'     => '',
	'html5'                           => array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	),
	'responsive-embeds'               => '',
);
