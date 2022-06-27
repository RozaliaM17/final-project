<div class="blog-slider__section inner-section">
	<div class="section-information __align-left">
		<h3 class="__section-category uppercase-headings blod-text ">Blog</h3>
		<h2 class="__section-title uppercase-headings blod-text">Laboris commodo consequat</h2>
	</div>
	<div class=" sliders">

		<?php $args = array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'posts_per_page' => 3,
		); 
		$the_query = new WP_Query( $args ); ?>

		<?php if ($the_query->have_posts() ) { ?>
			<?php while($the_query->have_posts() ) {
				$the_query->the_post(); ?>
				<div class="box">
					<a href="<?php the_permalink(); ?>">
						<img class="slider-card__image" src="<?php the_post_thumbnail_url()?>">
					</a>
					<div class="blog-post__information-container">
						<h3 class="post__category uppercase-headings blod-text"><?php the_category(); ?></h3>
						<a href="<?php the_permalink(); ?>">
							<h2 class="post__title uppercase-headings bold-text">
								<a href="<?php the_permalink(); ?>" title="">
									<?php the_title(); ?>
								</a>
							</h2>
						</a>
						<div class="post__statistics">
							<span class="post__comments statistic-info">
								<i class="fa-solid fa-comment-dots"></i>
								<span class="post__comments-number"><?php echo get_comments_number(); ?></span>
							</span>
							<span class="post__visits statistic-info">
								<i class="fa-solid fa-eye"></i>
								<span class="post__visits-number">125k</span>
							</span>
						</div>
					</div>
				</div>
			<?php }; ?>
		<?php }; ?>
	</div>
</div>