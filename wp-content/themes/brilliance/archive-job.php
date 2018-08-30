<?php get_header(); ?>

<?php get_template_part('template-parts/element', 'page-header'); ?>
	
<div id="main" class="main">
	<div class="container">		
		<section id="content" class="content">
			<header class="entry-header jobs-listing-title">
				<h3 class="entry-title"> <i class="fa fa-briefcase"></i> Current Openings</h3>
			</header>
			<?php do_action('cpotheme_before_content'); ?>
			<?php $description = term_description(); ?>
			<?php if($description != ''): ?>
			<div class="page-content">
				<?php echo $description; ?>
			</div>
			<?php endif; ?>
			
			<?php if(have_posts()){ ?>
			<?php if(is_author()) cpotheme_author(); ?>
			<section class="panel-group">
			<?php while(have_posts()): the_post(); ?>
			
			<?php get_template_part('template-parts/element', 'job'); ?>
			
			<?php endwhile; ?>
				</section>
			<?php cpotheme_numbered_pagination(); ?>
			<?php }
				else{
					echo '<div class="alert alert-warning">No job posted yet.</div>';
				}
			?>
			
			<?php do_action('cpotheme_after_content'); ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>