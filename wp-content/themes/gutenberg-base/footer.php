<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DX Gutenberg
 */

	$site_info = get_theme_mod('finaltheme_footer_options', '');

?>

	</div><!-- #content -->

	<!-- Common SVG icons to reuse in the site: -->
	<div style="display: none">
		<!-- Thumbs up: -->
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
			<g id="icon-thumbs-up">
				<path fill="none" d="M0 0h24v24H0z"/>
				<path fill="currentColor" d="M14.6 8H21a2 2 0 0 1 2 2v2.104a2 2 0 0 1-.15.762l-3.095 7.515a1 1 0 0 1-.925.619H2a1 1 0 0 1-1-1V10a1 1 0 0 1 1-1h3.482a1 1 0 0 0 .817-.423L11.752.85a.5.5 0 0 1 .632-.159l1.814.907a2.5 2.5 0 0 1 1.305 2.853L14.6 8zM7 10.588V19h11.16L21 12.104V10h-6.4a2 2 0 0 1-1.938-2.493l.903-3.548a.5.5 0 0 0-.261-.571l-.661-.33-4.71 6.672c-.25.354-.57.644-.933.858zM5 11H3v8h2v-8z"/>
			</g>
		</svg>
	</div>

	<footer id="colophon" class="site-footer">
		<div class="main-footer">
			<div class="row footer-columns-wraper">
				<div class="footer-column">
					<?php 
						dynamic_sidebar( 'footer-1');
					?>
				</div>
				<div class="footer-column">
					<?php 
						dynamic_sidebar( 'footer-2');
					?>
				</div>
				<div class="footer-column">
					<?php 
						dynamic_sidebar( 'footer-3');
					?>
				</div>
				<div class="footer-column">
					<?php 
						dynamic_sidebar( 'footer-4');
					?>
				</div>
			</div>
		</div>
		<div class="site-credits">
			<span class="site-copyright">
				Copyright &copy;
				<?php echo date('Y'); ?>.
			 	<?php $allowed = array( 'a'=> array(
			 		'href' => array(),
			 		'title'=> array()
			 	));
			 	echo wp_kses($site_info, $allowed); ?>
			</span>
		</div>
	</footer><!-- #c5olophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
