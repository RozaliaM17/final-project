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
</article><!-- #post-## -->
