<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DX Gutenberg
 */


get_header(); ?>

	<section class="section-fullwidth section-main">
		<div class="row layout-blog-two-columns">
			<main class="blog-content">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					the_post_navigation();

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
