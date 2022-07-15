<?php 
/**
* Template Name: Team Page
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
				<?php
				while ( have_posts() ) : the_post();	
					get_template_part( 'template-parts/content', 'team__grid' ); 
					get_template_part( 'template-parts/content', 'partners' );
					get_template_part( 'template-parts/content', 'carousel' );

				endwhile; // End of the loop.
				?>
			</main>
	</section>

<?php
get_footer();

?>