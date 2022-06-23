<?php 
/**
* Template Name: Blog Page
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
			<main class="blog-content">
				<div class="blog__section inner-section">
					<div class="row blog-container">
						<div class="__video-container"></div>
						<div class="section-information  __align-left">
							<h2 class="__section-title uppercase-headings bold-text">Laborum magna nulla</h2>
							<p class="__seciton-paragraph">Nulla Lorem mollit cupidatat irure. Voluptate exercitation incididunt aliquip deserunt. Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Volup Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Voluptate exercitation deserunt... </p>
						</div>
						<div class="__posts-grid">
							<div class="post__preview-container">
								<div class="post__image-container">
									<img class="post__image" src="../../wp-content/themes/gutenberg-base/assets/dist/images/content.jpg">
								</div>
								<div class="post__content-container">
									<h2 class="post__title uppercase-headings bold-text">Laborum magna nulla</h2>
									<p class="post__paragraph">Nulla Lorem mollit cupidatat irure. Voluptate exercitation incididunt aliquip deserunt. Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Volup Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Voluptate exercitation deserunt... </p>
									<div class="post__details-container">
										<div class="post_details">
											<img class="post__author-image" src="../../wp-content/themes/gutenberg-base/assets/dist/images/content.jpg">
											<div class="post__information">
												<span class="post__author">Paula Ramsey</span>
												<span class="post__date">September 24, 2020</span>
											</div>
										</div>
										<div class="post__redirection-container">
											<i class="fa-solid fa-bookmark post__redirection-icon post__bookmart"></i>
											<i class="fa-solid fa-ellipsis post__redirection-icon post__more"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="post__preview-container">
								<div class="post__image-container">
									<img class="post__image" src="../../wp-content/themes/gutenberg-base/assets/dist/images/content.jpg">
								</div>
								<div class="post__content-container">
									<h2 class="post__title uppercase-headings bold-text">Laborum magna nulla</h2>
									<p class="post__paragraph">Nulla Lorem mollit cupidatat irure. Voluptate exercitation incididunt aliquip deserunt. Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Volup Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Voluptate exercitation deserunt... </p>
									<div class="post__details-container">
										<div class="post_details">
											<img class="post__author-image" src="../../wp-content/themes/gutenberg-base/assets/dist/images/content.jpg">
											<div class="post__information">
												<span class="post__author">Paula Ramsey</span>
												<span class="post__date">September 24, 2020</span>
											</div>
										</div>
										<div class="post__redirection-container">
											<i class="fa-solid fa-bookmark post__redirection-icon post__bookmart"></i>
											<i class="fa-solid fa-ellipsis post__redirection-icon post__more"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="post__preview-container">
								<div class="post__image-container">
									<img class="post__image" src="../../wp-content/themes/gutenberg-base/assets/dist/images/content.jpg">
								</div>
								<div class="post__content-container">
									<h2 class="post__title uppercase-headings bold-text">Laborum magna nulla</h2>
									<p class="post__paragraph">Nulla Lorem mollit cupidatat irure. Voluptate exercitation incididunt aliquip deserunt. Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Volup Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Voluptate exercitation deserunt... </p>
									<div class="post__details-container">
										<div class="post_details">
											<img class="post__author-image" src="../../wp-content/themes/gutenberg-base/assets/dist/images/content.jpg">
											<div class="post__information">
												<span class="post__author">Paula Ramsey</span>
												<span class="post__date">September 24, 2020</span>
											</div>
										</div>
										<div class="post__redirection-container">
											<i class="fa-solid fa-bookmark post__redirection-icon post__bookmart"></i>
											<i class="fa-solid fa-ellipsis post__redirection-icon post__more"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pagination-container">
							<div class="before-button base-button pagination-button">
								<i class="fa-solid fa-arrow-left"></i>
								<span class="__direction bold-text">Before</span>
							</div>
							<div class="pagination-pages">
								<span class="page-number">1</span>
								<span class="page-number">2</span>
								<span class="page-number">3</span>
								<span class="page-number">4</span>
								<span class="page-number">5</span>
							</div>
							<div class="next-button base-button pagination-button">
								<span class="__direction bold-text">Next</span>
								<i class="fa-solid fa-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
			</main>
	</section>

<?php get_footer();?>

