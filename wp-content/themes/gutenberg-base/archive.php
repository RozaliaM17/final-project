<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DX Gutenberg
 */

get_header(); ?>

	<section class="section-fullwidth section-main">
		<div class="row layout-blog layout-blog-two-columns">
			<main class="blog-content">
				<?php
					if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
			</main>

			<aside class="blog-aside">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</section>
<?php
get_footer();
