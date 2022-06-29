<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package DX Gutenberg
 */

get_header(); ?>

	<section class="section-404">
		<?php
			get_template_part( 'template-parts/content', 'hero', array( 'page' => '404' ) );
			get_template_part( 'template-parts/content', 'partners' );
		?>
	</section>

<?php
get_footer();
