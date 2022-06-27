<?php 

/**
 * Enqueue scripts and styles.
	 */
	function dxgutenberg_scripts() {

		// Enqueue the only styling file here that is build with Gulp
		wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/assets/dist/css/master.css', array(), DX_ASSETS_VERSION );

		// Enqueue the font awesome icons
		wp_enqueue_style('font_awesome_stylesheet', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css", array(), '6.0.0', 'all');

		// Enqueue the inline styling file for changing the theme colors
		include(get_template_directory() . '/inc/inline_css.php');
		wp_add_inline_style( 'stylesheet', $inline_styles );


		// And the only JS file that is build with Gulp
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/dist/scripts/bundle.min.js', array(), DX_ASSETS_VERSION, true );

		wp_deregister_script('jquery');

	}
	add_action( 'wp_enqueue_scripts', 'dxgutenberg_scripts' );


;?>