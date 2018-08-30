<?php $query = new WP_Query('post_type=cpo_feature&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
<?php if($query->posts): $feature_count = 0; ?>
<div id="features" class="features">
	<div class="container">
	<h3 class="features-title"> Now you know that what we are and it’s your turn to know about what we do for you, we do provide  </h3>		
		<?php cpotheme_block('home_features', 'section-heading heading'); ?>
		<?php cpotheme_grid($query->posts, 'element', 'feature', 3); ?>
	</div>
</div>
<?php endif; ?>	