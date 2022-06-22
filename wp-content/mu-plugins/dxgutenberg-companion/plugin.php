<?php
define( 'DXGA_FILE', __FILE__ );
define( 'DXGA_ROOT', dirname( plugin_basename( DXGA_FILE ) ) );
define( 'DXGA_PLUGIN_NAME', 'DX Gutenberg Companion' );
define( 'DXGA_PLUGIN_SHORT_NAME', 'DXGA' );
define( 'DXGA_BASE', plugin_basename( DXGA_FILE ) );
define( 'DXGA_DIR', plugin_dir_path( DXGA_FILE ) );
define( 'DXGA_URL', plugins_url( '/', DXGA_FILE ) );
define( 'DXGA_VER', '0.1.0' );


/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function dxgc_block_init() {
	// Register the test block by reading the block.json file in it's folder.
	register_block_type( __DIR__ . '/src/blocks/test' );

	// Add sidebar option for layouts.
	register_meta(
		'post',
		'dxgc_layout_picker',
		array(
			'object_subtype' => 'page',
 			'type'           => 'string',
 			'single'         => true,
 			'show_in_rest'   => true,
 		)
	);
}
add_action( 'init', 'dxgc_block_init' );

/**
 * Init the main index file that contains all the Gutenberg JS.
 *
 * @return void
 */
function dxgc_enqueue_block_editor_assets() {
	$script_dep_path = DXGA_URL . 'build/index.asset.php';
	$script_info     = file_exists( $script_dep_path )
		? include $script_dep_path
		: array(
			'dependencies' => array(),
			'version'      => DXGA_VER,
		);

	$script_dep = array_merge( $script_info['dependencies'], array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-components', 'wp-editor', 'wp-api-fetch' ) );

	// Scripts.
	wp_enqueue_script(
		'dx-block-editor-js',
		DXGA_URL . '/build/index.js',
		$script_dep,
		$script_info['version'],
		true
	);

		wp_enqueue_style(
			'organic-origin-gutenberg',
			DXGA_URL . '/build/style-index.css',
			false,
			'1.0',
			'all'
		);

}
add_action( 'enqueue_block_editor_assets', 'dxgc_enqueue_block_editor_assets' );
