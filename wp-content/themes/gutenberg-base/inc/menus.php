<?php 

	function finaltheme_register_menus() {
		
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'dxgutenberg' ),
		) );
		register_nav_menus( array(
			'footer' => esc_html__( 'Footer', 'dxgutenberg' ),
		) );

		register_nav_menus( array(
			'mobile-menu' => __( 'Mobile Menu', 'dxgutenberg' )
		) );

		register_nav_menus( array(
			'main-right-menu' => __( 'Main Right Nav Menu', 'dxgutenberg' )
		) );

	}
	
	add_action( 'init', 'finaltheme_register_menus');


;?>