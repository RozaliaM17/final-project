<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DX Gutenberg
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry ' ); ?>>
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
					<i class="fa-solid fa-bookmark"></i>
					<i class="fa-solid fa-ellipsis"></i>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
