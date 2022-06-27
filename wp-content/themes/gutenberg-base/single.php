<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DX Gutenberg
 */


get_header();

?>

	<section class="section-main">
		<div class="row">
			<main class="blog-content">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'article' );
					get_template_part( 'template-parts/content', 'blog__slider' );

				endwhile; // End of the loop.
				?>
			</main>

			<aside class="blog-sidebar">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</section>

<?php
get_footer();
