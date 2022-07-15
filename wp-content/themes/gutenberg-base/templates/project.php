<?php 
/**
* Template Name: Project Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

$post_id = get_the_ID();
$post_metadata = get_post_meta( $post_id );
$post_layout = 'layout-blog-right-sidebar';

// We store this custom meta data that comes from our custom Gutenberg sidebar picker.
if ( ! empty ( $post_metadata['dxgc_layout_picker'][0] ) ) {
	$post_layout = 'layout-blog-' . $post_metadata['dxgc_layout_picker'][0];
}

get_header(); ?>

	<section class="section-page-fullscreen">
			<main class="blog-content ">
				<div class="project-section inner-section">
					<div class=" row project-container">
						<div class="section-information">
							<h3 class="section__category">Projects</h3>
							<h2 class="section__title">Laboris commodo consequat</h2>
							<p class="section__paragraph">Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Voluptate exercitation incididunt aliquip deserunt.</p>
						</div>
						<div class="project__card-grid __card-grid">
							<?php query_posts(array(
							   'post_type' => 'projects',
							   'posts_per_page' => 6,
							)); ?>
							<?php while (have_posts()) : the_post(); ?>
								<div class="project-card">
									<a href="<?php the_permalink(); ?>">
										<img class="project__post-image" src="<?php the_post_thumbnail_url(); ?>">
									</a>
										<div class="project-card__information-container">
											<div class="project-card-detail">
												<h3 class="__project-category"><?php the_category(); ?></h3>
												<a class="__project-name uppercase-headings bold-text"href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
											</div>
										</div>
									</div>
							<?php endwhile;?>
						</div>
					</div>
				</div>
			</main>
	</section>

<?php
get_footer();

?>