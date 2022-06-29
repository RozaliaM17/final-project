<?php 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
	function dxgutenberg_widgets_init() {

		// Hero content

		register_sidebar( array(
			'name'          => esc_html__( 'Hero-Homepage', 'dxgutenberg' ),
			'id'            => 'hero-homepage',
			'description'   => '',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Hero-About', 'dxgutenberg' ),
			'id'            => 'hero-about',
			'description'   => '',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Hero-404', 'dxgutenberg' ),
			'id'            => 'hero-404',
			'description'   => '',
		) );


		// Footer columns

		register_sidebar( array(
			'name'          => esc_html__( 'Header-1', 'dxgutenberg' ),
			'id'            => 'header-1',
			'description'   => '',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer-1', 'dxgutenberg' ),
			'id'            => 'footer-1',
			'description'   => '',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer-2', 'dxgutenberg' ),
			'id'            => 'footer-2',
			'description'   => '',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer-3', 'dxgutenberg' ),
			'id'            => 'footer-3',
			'description'   => '',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer-4', 'dxgutenberg' ),
			'id'            => 'footer-4',
			'description'   => '',
		) );
	}
	add_action( 'widgets_init', 'dxgutenberg_widgets_init' );

;?>