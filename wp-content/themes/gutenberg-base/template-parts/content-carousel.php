<div class="carousel inner-section row">
	<div class="section__information carousel__header">
		<h3 class="section__category">Blog</h3>
		<h2 class="section__title">Laboris commodo consequat</h2>
	</div>
	<div class=" sliders">

		<?php $args = array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'posts_per_page' => 7,
		); 
		$the_query = new WP_Query( $args ); ?>

		<?php if ($the_query->have_posts() ) { ?>
			<?php while($the_query->have_posts() ) {
				$the_query->the_post(); ?>
				<div class="carousel__box">
					<a class="carousel__image-container" href="<?php the_permalink(); ?>">
						<img class="carousel__image" src="<?php the_post_thumbnail_url()?>">
					</a>
					<div class="carousel__information-container">
						<h3 class="carousel__category"><?php the_category(); ?></h3>
							<h2 class="carousel__title">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h2>
						</a>
						<div class="carousel__statistics">
							<span class="carousel__comments carousel__info">
								<i class="fa-solid fa-comment-dots carousel__icon"></i>
								<span class="carousel__comments-number carousel__number"><?php echo get_comments_number(); ?></span>
							</span>
							<span class="carousel__visits carousel__info">
								<i class="fa-solid fa-eye carousel__icon"></i>
								<span class="carousel__visits-number carousel__number">125k</span>
							</span>
						</div>
					</div>
				</div>
			<?php }; ?>
		<?php }; ?>
	</div>
</div>