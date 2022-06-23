<?php
/**
 * DevriX Starter functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DX Gutenberg
 */


// Dynamic grab master CSS mod time.
$master_modified_time = filemtime( get_theme_file_path() . '/assets/dist/css/master.min.css' );
define( 'DX_ASSETS_VERSION', $master_modified_time . '-0000' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Better support for responsive images out of the box
 */
require get_template_directory() . '/inc/images.php';

/** 
 * Enqueue Assets
*/

require get_template_directory() . '/inc/enqueue-assets.php';

/** 
 * Navigation Menus
*/
require get_template_directory() . '/inc/menus.php';

/** 
 * Reigster Widgets
*/
require get_template_directory() . '/inc/widgets.php';


if ( ! function_exists( 'dxgutenberg_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dxgutenberg_setup($wp_customize) {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on DevriX Starter, use a find and replace
	 * to change 'dxgutenberg' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'dxgutenberg', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Sample post thumbnail sizes. Change these to fit your theme
	 *
	 * @since  DX Gutenberg 1.1.0
	 */
	add_image_size( 'featured', 960, 720 ); 	// Featured image
	add_image_size( 'thumb-l', 640, 480 ); 		// Thumbnail size large
	add_image_size( 'thumb-m', 255 ); 			// Thumbnail size small

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dxgutenberg_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Allow logo change
	add_theme_support( 'custom-logo', array(
		'width' => 40,
		'height' => 40,
		'flex-width'=> true,
		'flex-height' => true,
	) );	
	
}
endif;
add_action( 'after_setup_theme', 'dxgutenberg_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dxgutenberg_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dxgutenberg_content_width', 640 );
}
add_action( 'after_setup_theme', 'dxgutenberg_content_width', 0 );


/**
 * Remove the margin-top styling added to the HTML tag by default from WordPress
 */
function dxgutenberg_remove_html_margin() {
	remove_action( 'wp_head', '_admin_bar_bump_cb' );
}
add_action( 'get_header', 'dxgutenberg_remove_html_margin' );


// function dm_remove_wp_block_library_css(){
// 	wp_dequeue_style( 'wp-block-library' );
// }
// add_action( 'wp_enqueue_scripts', 'dm_remove_wp_block_library_css' );

function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
