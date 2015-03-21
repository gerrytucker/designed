<?php

function change_user_contact_information( $fields )
{
    unset($fields['aim']);
    unset($fields['yim']);
    unset($fields['jabber']);

    $fields['twitter'] = __('Twitter');
    $fields['facebook'] = __('Facebook URL');
    $fields['googleplus'] = __('Google+ URL');
    $fields['instagram'] = __('Linkedin');
    $fields['pinterest'] = __('Pinterest');
    $fields['youtube'] = __('YouTube');

    return $fields;
}
add_filter('user_contactmethods', 'change_user_contact_information');

// Remove unnecessary stuff from header
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP ver

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

	$query_args = array(
		'family' => 'Montserrat:400,700'
	);
	wp_register_style('montserrat', add_query_arg($query_args, "//fonts.googleapis.com/css" ), array(), null );
	wp_enqueue_style('montserrat');
	
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

