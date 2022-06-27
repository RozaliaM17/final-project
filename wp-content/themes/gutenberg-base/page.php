<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DX Gutenberg
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
		<div class="row">
			<main class="blog-content">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					the_post_navigation();

				endwhile; // End of the loop.
				?>
			<?php wp_reset_postdata(); ?>
			</main>
		</div>
	</section>

<?php
get_footer();
