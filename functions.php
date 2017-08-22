<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @package webTemplate Animal Creativo
 * @since webTemplate Animal Creativo 1.0.0
 */

/**  para agregar imagenes miniaturas */
/******************************************
 * get latest post
 * use in loop if ( is_latest() ) { stuff; }
 ******************************************/	

add_theme_support('post-thumbnails');

function register_my_menus(){
	register_nav_menus(
			array (
				'menu-header' => __('Menu Header'),
				'menu-footer' => __('Menu Footer')
				)
		);
}
add_action('init', 'register_my_menus');

add_filter( 'upload_mimes', 'custom_upload_mimes' );
function custom_upload_mimes( $existing_mimes = array() ) {
	// Add the file extension to the array
	$existing_mimes['svg'] = 'image/svg+xml';
	return $existing_mimes;
}


