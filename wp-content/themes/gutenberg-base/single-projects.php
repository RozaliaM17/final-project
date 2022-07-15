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
			<main class="blog-content">
				<div class="project-detail__section">
					<div class="row project-detail-container">
						<div class="section-information __dark-color">
							<h3 class="section__category __capitalize">Project Detail</h3>
						</div>
						<div class="__post-content">
							<?php the_content() ?>
						</div>
					</div>
				</div>
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'carousel' );

				endwhile; // End of the loop.
				?>
			</main>

			<aside class="blog-sidebar">
				<?php get_sidebar(); ?>
			</aside>
	</section>

<?php
get_footer();
