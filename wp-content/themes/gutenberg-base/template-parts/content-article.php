<div class="blog-detail__section">
	<div class="row blog-detail-container">
		<div class="section-information __dark-color">
			<h3 class="section__category __capitalize">Blog Detail</h3>
			<h2 class="section__title __lowercase">
				<?php the_title(); ?>
			</h2>
			<p class="section__paragraph">Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Voluptate exercitation incididunt aliquip deserunt.</p>
		</div>
		<img class="post__image" src="<?php the_post_thumbnail_url()?>">
		<div class="__post-content">
			<?php the_content() ?>
		</div>
	</div>
</div>
