<?php if(is_page_template('templates/homepage.php')) { ?>
		<div class="hero-section hero-section__home">
			<div class="hero-figure-container hero-home">
				<div class="hero-figure__content" id="hero-figure__home">
					<?php dynamic_sidebar( 'hero-homepage');?>
				</div>
			</div>
		</div>
<?php } elseif(is_page_template('templates/about-us.php')) { ;?>
		<div class="hero-section hero-section__about">
			<div class="hero-figure-container hero-about">
				<div class="hero-figure__content" id="hero-figure__about">
					<?php dynamic_sidebar( 'hero-about');?>
				</div>
			</div>
		</div>
<?php } ;?>

