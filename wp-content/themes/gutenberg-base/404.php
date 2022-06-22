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
		<div class="row">
			<div class="error-404">
				<h1 class="error-code">404</h1>
				<h2 class="error-description">There's nothing here...let's find something!</h2>

				<?php get_search_form(); ?>
			</div>
		</div>
	</section>

<?php
get_footer();
