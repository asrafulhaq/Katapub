<?php  


	add_shortcode('zitaly_food_fpost','zitaly_food_fpost');
	function zitaly_food_fpost($one, $two){ 

			$atttts = shortcode_atts([
				'title'		=> '',
				'subtitle'		=> '',
				
			], $one);


			ob_start();
		?>				
		<section class="content-box box-2">
			<div class="zerogrid">
				<div class="row wrap-box">


					<div class="header">
						<h2><?php echo $atttts['title']; ?></h2>
						<hr class="line">
						<span><?php echo $atttts['subtitle']; ?></span>
					</div>

					<div class="row">


						<?php 
							$fpost = new WP_Query([
								'post_type'			=> 'zitaly-fpost',
								'posts_per_page'	=> 6
							]);
						while( $fpost -> have_posts() ) : $fpost -> the_post(); ?>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon"><?php the_title(); ?><b></b></span>
									<?php 

										$fposturl = wp_get_attachment_url(get_post_thumbnail_id($post -> ID)); 


									?>

									<img style="height:300px; width:100%;" src="<?php echo $fposturl; ?>" alt="">
									<p><?php echo wp_trim_words( get_the_content(), 20, false ) ?></p>
									<a href="<?php the_permalink(); ?>" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
						<?php endwhile; ?>


						
						

					</div>

				</div>
			</div>
		</section>


	<?php 
		return ob_get_clean();
}

	


	add_action('vc_before_init','vc_for_fpost');

	function vc_for_fpost(){


		vc_map([
			'name'			=> 'zItaly Food Feature Post',
			'base'			=> 'zitaly_food_fpost',
			'icon'			=> get_template_directory_uri(). '/images/alobaji.png',
			'category'		=> 'zItaly',
			'params'		=> [
				[
					'param_name'		=> 'title',
					'type'				=> 'textfield',
					'heading'			=> 'Section Title'
				],
				[
					'param_name'		=> 'subtitle',
					'type'				=> 'textfield',
					'heading'			=> 'Section Subtitle'
				]
			]
			
			
		]);
	}

?>