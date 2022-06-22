<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DX Gutenberg
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry-page' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php dxgutenberg_featured_image( 'featured' ); ?>

	<div class="entry-content">
		<?php
			the_content();

		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
