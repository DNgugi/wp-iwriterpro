<?php
/**
 * iwriter functions and definitions
 *
 * @package iwriter
 */

if ( ! defined( 'IWRITER_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'IWRITER_VERSION', '1.0.0' );
}


/**
 * Enqueue scripts and styles.
 */
function iwriter_scripts() {
	wp_enqueue_style( 'iwriter-style', get_stylesheet_uri(), array(), IWRITER_VERSION );
	//wp_style_add_data( 'iwriter-style', 'rtl', 'replace' );
  	wp_enqueue_style( 'iwriter-style-2', get_template_directory_uri() . '/sass/base.css', IWRITER_VERSION );


	wp_enqueue_script( 'iwriter-navigation', get_template_directory_uri() . '/js/base.js', IWRITER_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'iwriter_scripts' );
