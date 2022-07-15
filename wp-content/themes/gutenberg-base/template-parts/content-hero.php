<?php
$page = $args['page'];
?>

<?php if ( true === is_front_page() || true === is_home() ) { ?>
		<div class="hero">
			<div class="hero__figure hero__<?php echo $page; ?>"></div>
			<div class="hero__cover row hero__end">
				<div class="hero__content" id="hero__figure-<?php echo $page; ?>">
					<?php dynamic_sidebar('hero-homepage');?>
				</div>
			</div>
		</div>
<?php } elseif(is_page_template('templates/about-us.php')) { ;?>
		<div class="hero">
			<div class="hero__figure hero__<?php echo $page; ?>"></div>
			<div class="hero__cover row">
				<div class="hero__content" id="hero__figure-<?php echo $page; ?>">
					<?php dynamic_sidebar('hero-about');?>
				</div>
			</div>
		</div>
<?php } else { ;?>
		<div class="hero">
			<div class="hero__figure hero__<?php echo $page; ?>"></div>
			<div class="hero__cover row">
				<div class="hero__content" id="hero__figure-<?php echo $page; ?>">
					<?php dynamic_sidebar('hero-404');?>
				</div>
			</div>
		</div>
<?php } ;?>
