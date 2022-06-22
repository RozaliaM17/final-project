<?php
/**
 * DevriX Starter Theme Customizer.
 *
 * @package DX Gutenberg
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dxgutenberg_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	// Theme colors

	$wp_customize->add_section('finaltheme_theme-colors', array(
		'title'=>esc_html__('Theme Colors', 'dxgutenberg'),
		'decription'=> esc_html__('You can change theme colors from here', 'dxgutenberg'),
		'priority'=> 30,
	));

	// Header color

	$wp_customize->add_setting('finaltheme_header_color', array(
		'default'=> '#00235A',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'finaltheme_header_color', array(
		'label'=> __('Header Background Color', 'dxgutenberg'),
		'section'=>'finaltheme_theme-colors',
	)));

	// Main footer color

	$wp_customize->add_setting('finaltheme_footer_color', array(
		'default'=> '#001940',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'finaltheme_footer_color', array(
		'label'=> __('Footer Background Color', 'dxgutenberg'),
		'section'=>'finaltheme_theme-colors',
	)));

	// Secondary footer color

	$wp_customize->add_setting('finaltheme_secondary_footer_color', array(
		'default'=> '#00122F',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'finaltheme_secondary_footer_color', array(
		'label'=> __('Footer Copyright Background Color', 'dxgutenberg'),
		'section'=>'finaltheme_theme-colors',
	)));

	// Second main color
	$wp_customize->add_setting('finaltheme_second_main_color', array(
		'default'=> '#FF5E14',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'finaltheme_second_main_color', array(
		'label'=> __('Second Main Background Color', 'dxgutenberg'),
		'section'=>'finaltheme_theme-colors',
	)));

	// Footer settings

	// Create new section for customize	the footer

	 $wp_customize->add_section('finaltheme_footer_options', array(
	 	'title'=>__('Footer Option', 'dxgutenberg'),
	 	'decription'=> '',
	 	'priority'=> 110,
	 ));

	 // Add option for footer site info
	 $wp_customize->add_setting('finaltheme_footer_options', array(
	 	'default' => '',
	 ));

	 $wp_customize->add_control('finaltheme_footer_options', array(
	 	'type'=> 'text',
	 	'label'=> esc_html__('Site Info', 'dxgutenberg'),
	 	'section'=>'finaltheme_footer_options',
	 ));
}
add_action( 'customize_register', 'dxgutenberg_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dxgutenberg_customize_preview_js() {
	wp_enqueue_script( 'dxgutenberg_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'dxgutenberg_customize_preview_js' );
