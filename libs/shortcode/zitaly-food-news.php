<?php  


	add_shortcode('zitaly_food_news','zitaly_food_news');
	function zitaly_food_news($one, $two){ 

			$atttts = shortcode_atts([
				'staff-photo'	=> '',
				
			], $one);


			ob_start();
		?>				
	
			<!-- <div class="wrap-content"> -->

							<?php 
								$food_news = new WP_Query([
									'post_type'			=> 'zitaly-news',
									'posts_per_page'	=> 1
								]);
							while( $food_news -> have_posts() ) : $food_news -> the_post() ?>
							<article>
								<div class="art-header">
									<div class="entry-title"> 
										<h2><?php the_title(); ?></h2>
									</div>
									<div class="info">By <a href="#"><?php the_author(); ?></a> on <?php the_time('F d, Y'); ?> </div>
								</div>
								<div class="art-content">
									<?php the_content(); ?>
								</div>
							</article>
							<?php endwhile; ?>







							<div class="widget wid-related">
								<div class="wrap-col">
									<div class="wid-header">
										<h5>Related Post</h5>
									</div>
									<div class="wid-content">
										<div class="row">

											<?php 
												$food_news_related = new WP_Query([
													'post_type'			=> 'zitaly-news',
													'posts_per_page'	=> 3,
													'offset'			=> 1
												]);
											while( $food_news_related -> have_posts() ) : $food_news_related -> the_post() ?>
											<div class="col-1-3">
												<div class="wrap-col">
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
													<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
												</div>
											</div>
											<?php endwhile; ?>

											
										</div>
									</div>
								</div>
							</div>
						<!-- </div> -->
						

	<?php 
		return ob_get_clean();
}

	


	add_action('vc_before_init','vc_for_news');

	function vc_for_news(){


		vc_map([
			'name'			=> 'zItaly Food News',
			'base'			=> 'zitaly_food_news',
			'icon'			=> get_template_directory_uri(). '/images/alobaji.png',
			'category'		=> 'zItaly',
			
			
		]);
	}

?>