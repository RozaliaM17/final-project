<?php
/**
* Template Name: Blog Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/


get_header(); ?>

<section class="section-page-fullscreen">
		<main class="blog-content">
			<div class="blog__section inner-section">
				<div class="row blog-container">
					<img class="__video-container"  src="<?php the_post_thumbnail_url(); ?>"></img>
					<div class="section-information  __align-left">
						<?php the_content(); ?>
					</div>
					<div class="__posts-grid">
						<?php 
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$query_options = array(
								'post_type'      => 'post',
								'post_status'    => 'publish',
								'posts_per_page' => 3,
								'paged' 		 => $paged,
								'order'          => 'DESC',
								'orderby'        => 'date',
							);
							$wp_query = new WP_Query( $query_options );
						?>
						<?php if ($wp_query->have_posts() ) {
							while($wp_query->have_posts() ) {
								$wp_query->the_post(); ?>
								<div class="post__preview-container">
									<div class="post__image-container">
										<a class="post__title uppercase-headings bold-text"href="<?php the_permalink(); ?>"><img class="post__image" src="<?php the_post_thumbnail_url(); ?>"></a>
									</div>
									<div class="post__content-container">
											<a class="post__title uppercase-headings bold-text"href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										<div class="post__paragraph-container"> <?php the_excerpt(); ?></div>
										<div class="post__details-container">
											<div class="post_details">
												<img class="post__author-image" src="<?php echo get_avatar_url(get_the_author_meta('ID'), 50); ?>">

												<div class="post__information">
													<span class="post__author">
														<a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
															<?php echo get_the_author(); ?>
														</a>
													</span>
													<span class="post__date">
														<time datetime="<?php echo get_the_date('c'); ?>">
															<?php echo get_the_date(); ?>
														</time>
													</span>
												</div>
											</div>
											<div class="post__redirection-container">
												<i class="fa-solid fa-bookmark post__redirection-icon post__bookmart"></i>
												<i class="fa-solid fa-ellipsis post__redirection-icon post__more"></i>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
							<div class="pagination-container">
								<?php 
									echo wp_custom_pagination( array(
									    'total' => $wp_query->max_num_pages,
									    'prev_text' => __( ' Before' ),
										'next_text' => __( 'Next ' ),
									) );
								?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</main>
</section>

<?php get_footer()?>
