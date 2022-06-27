<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DX Gutenberg
 */

get_header(); ?>

	<section class="section-page-fullscreen">
		<main class="blog-content">
			<div class="blog__section inner-section">
				<div class="row blog-container">
					<div class="__posts-grid">
						<?php
							if (have_posts() ) : ?>

								<header class="page-header">
									<?php
										the_archive_title( '<h1 class="page-title">', '</h1>' );
										the_archive_description( '<div class="taxonomy-description">', '</div>' );
									?>
								</header><!-- .page-header -->

								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_format() );

								endwhile; ?>
								<div class="pagination-container">
									<?php 
										echo wp_custom_pagination( array(
										    'total' => $wp_query->max_num_pages,
										    'prev_text' => __( ' Before' ),
											'next_text' => __( 'Next ' ),
										) );
									?>
								</div> 
							<?php else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>
					</div>
				</div>
			</div>
		</main>

		<aside class="blog-aside">
			<?php get_sidebar(); ?>
		</aside>
	</section>
<?php
get_footer();

