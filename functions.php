<?php

/**
 * Enqueue styles & scripts
 */
function enqueue_theme_scripts() {

  wp_register_script( 'modernizr', get_template_directory_uri() . '/modernizr.min.js', false, null, false );
  wp_enqueue_script( 'modernizr' );

	wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', ( '//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js' ), false, null, true );
  wp_enqueue_script( 'jquery' );
	
	wp_register_script( 'app', get_template_directory_uri() . '/app.min.js', false, null, true );
  wp_enqueue_script( 'app' );

	wp_enqueue_style( 'style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );

/**
 * Remove query strings from static resources
 */
function remove_query_strings( $src ) {

	$parts = explode( '?ver', $src );
	return $parts[0];

}
add_filter( 'script_loader_src', 'remove_query_strings', 15, 1 );
add_filter( 'style_loader_src', 'remove_query_strings', 15, 1 );

