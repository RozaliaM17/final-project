<?php
$page = $args['page'];
?>

<?php if ( true === is_front_page() || true === is_home() ) { ?>
		<div class="hero-section hero-section__<?php echo $page; ?>">
			<div class="hero-figure-container hero-<?php echo $page; ?>">
				<div class="hero-figure__content" id="hero-figure__<?php echo $page; ?>">
					<?php dynamic_sidebar('hero-homepage');?>
				</div>
			</div>
		</div>
<?php } elseif(is_page_template('templates/about-us.php')) { ;?>
		<div class="hero-section hero-section__<?php echo $page; ?>">
			<div class="hero-figure-container hero-<?php echo $page; ?>">
				<div class="hero-figure__content" id="hero-figure__<?php echo $page; ?>">
					<?php dynamic_sidebar( 'hero-about');?>
				</div>
			</div>
		</div>
<?php } else { ;?>
		<div class="hero-section hero-section__<?php echo $page; ?>">
			<div class="hero-figure-container hero-<?php echo $page; ?>">
				<div class="hero-figure__content" id="hero-figure__<?php echo $page; ?>">
					<?php dynamic_sidebar( 'hero-404');?>
				</div>
			</div>
		</div>
<?php } ;?>
