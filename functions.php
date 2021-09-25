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
//Set content width so nothing exceeds 800px
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */

//Set up support for rss, i18n, featured images, post formats, menus, sidebars
if ( ! function_exists( 'iwriter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function iwriter_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'iwriter', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
		/**
		 * Add support for custom logo.
		 */
		add_theme_support( 'custom-logo' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'iwriter' ),
        'secondary' => __('Secondary Menu', 'iwriter' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // iwriter_setup
add_action( 'after_setup_theme', 'iwriter_setup' );


/**
 * Enqueue scripts and styles.
 */
function add_iwriter_scripts() {
	wp_enqueue_style( 'iwriter-style', get_stylesheet_uri(), array(), IWRITER_VERSION );
	//wp_style_add_data( 'iwriter-style', 'rtl', 'replace' );
  wp_enqueue_style( 'iwriter-base-style', get_template_directory_uri() . '/sass/base.css', array('iwriter-style'), time());
  wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;500;700;900&display=swap');
  wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Raleway:wght@100;400;500;700;900&display=swap');
  wp_enqueue_style( 'material-css', 'https://fonts.googleapis.com/icon?family=Material+Icons');
  



	wp_enqueue_script( 'iwriter-navigation', get_template_directory_uri() . '/js/base.js', IWRITER_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_iwriter_scripts' );


function iwriter_sidebars_init() {
    register_sidebar( array(
        'name'          => __( 'Order Form', 'iwriter' ),
        'id'            => 'order-form-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'iwriter_sidebars_init' );