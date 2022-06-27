
<div class="blog-detail__section">
	<div class="row blog-detail-container">
		<div class="section-information __dark-color">
			<h3 class="__section-category">Blog Detail</h3>
			<h2 class="__section-title bold-text">
				<?php the_title(); ?>
			</h2>
			<p class="__seciton-paragraph">Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Voluptate exercitation incididunt aliquip deserunt.</p>
		</div>
		<img class="post__image" src="<?php the_post_thumbnail_url()?>">
		<div class="__post-content">
			<?php the_content() ?>
		</div>
	</div>
</div>
