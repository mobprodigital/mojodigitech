<?php get_header(); ?>

<?php get_template_part('template-parts/element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
		
		<section id="content" class="content">
			<?php do_action('cpotheme_before_content'); ?>
            <?php if(have_posts()) : while(have_posts()): 
                
                the_post();
					$current_post_id = get_the_ID();
					$single_job_cat = wp_get_post_terms( $current_post_id, 'job_category');
					$single_job_cat_arr = array();
					foreach($single_job_cat as $s_m_cat){
						$single_job_cat_arr[] = $s_m_cat->name;                            
					}					
						$job_role = get_post_meta( $current_post_id, 'job_role', true );
                        $job_experience = get_post_meta( $current_post_id, 'job_experience', true );
                        $job_type = get_post_meta( $current_post_id, 'job_type', true );
                        $client_name = get_post_meta( $current_post_id, 'client_name', true );
                        $job_location = get_post_meta( $current_post_id, 'job_location', true );
						$job_exp_date = get_post_meta( $current_post_id, 'job_exp_date', true );
						$job_skill = get_post_meta( $current_post_id, 'job_skill', true );

						$job_single_html.= '<section>'
												.'<div class="text-right mb-20">
													<a href="mailto:girish.c@morrisdigital.mobi?Subject=Job%Application" class="btn btn-lg btn-success job-apply-btn">Apply Now</a>
												</div>'
												.'<div class = "single-job_show">'
													.'<div class="news-section-info clearfix"><h4 class= "job-search-heading">'.get_the_title()
														.'<div class="job-frame job-btn-wrap"><span> Last Date: </span>'.$job_exp_date.'</div>'
													.'</h4></div>'
													/*.get_the_post_thumbnail($current_post_id) */
												
												.'</div>'
												.'</br>'
												.'<article class="row">'
													.'<div class="col-md-4 job-sclient-img">'.(has_post_thumbnail() ? get_the_post_thumbnail($current_post_id) : '<img src="'.get_site_url().'/wp-content/uploads/2018/08/client_default_img.png" alt="client image"/>').'</div>'
													.'<div class="col-md-8">'
														.'<div class="job-info-list">'
															.'<table class="table table-bordered table-inline">'
																.'<tr><th>Job Role</th><td> '.$job_role.'</td></tr>'
																.'<tr><th>Job Type</th><td> '.$job_type.'</td></tr>'
																.'<tr><th>Job Skills</th><td> '.$job_skill.'</td></tr>'
																.'<tr><th>Job Experience</th><td> '.$job_experience.'</td></tr>'
																.'<tr><th>Client Name</th><td> '.$client_name.'</td></tr>'
																.'<tr><th>Job Location</th><td> '.$job_location.'</td></tr>'
																.'<tr><th> Job Profile </th><td>'.implode(',', $single_job_cat_arr).'</td></tr>'
															.'</table>'
														.'</div><!--job-info-list-->'
													.'</div><!--col-md-8-->'
												.'</article>'
												.'<h4 class= "job-search-heading"> Job Description </h4>'
												.'<div class="job-content mb-40">' .get_the_content() .'</div><!--job-content-->'
												.'<div class="text-right mb-40">
													<a href="mailto:girish.c@morrisdigital.mobi?Subject=Job%Application" class="btn btn-lg btn-success job-apply-btn">Apply Now</a>
												</div>'
											.'</section><!--col-sm-->';
											echo $job_single_html; 
                
                ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- <div class="page-content">
					<?php /* the_content(); */ ?>
					<?php /* cpotheme_post_pagination(); */ ?>
				</div> -->
			</div>
			 <?php /* comments_template('', true); */ ?> 
			<?php endwhile; endif; ?>
			<?php do_action('cpotheme_after_content'); ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>