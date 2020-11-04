<?php  


	add_shortcode('zitaly_food_menu','zitaly_food_menu');
	function zitaly_food_menu($one, $two){ 

			$atttts = shortcode_atts([
				'title'			=> '',
				'food-slug'		=> '',
			], $one);


			ob_start();
		?>

		<div class="wrap-col">
				<h3><?php echo $atttts['title']; ?></h3>


				<?php 
					$food_all = new WP_Query([
						'post_type'			=> 'zitaly-menu',
						'posts_per_page'	=> 3,
						'tax_query'			=> [
							[
								'taxonomy'		=> 'food-cat',
								'terms'			=> $atttts['food-slug'] ,
								'field'			=> 'slug'
							]
						]
					]);
				while( $food_all -> have_posts()) : $food_all -> the_post(); ?>
				<div class="post">
					<a href="#"><img src="<?php echo get_post_meta(get_the_ID(), 'food-photo-p', true); ?>"/></a>
					<div class="wrapper">
					  <h5><a href="#"><?php the_title(); ?></a></h5>
					  <span>$<?php echo get_post_meta(get_the_ID(), 'food-price-min', true); ?> - $<?php echo get_post_meta(get_the_ID(), 'food-price-max', true); ?></span>
					</div>
				</div>
				<?php endwhile; ?>






				
				</div>


	<?php 
		return ob_get_clean();
}

	


	add_action('vc_before_init','vc_for_menu');

	function vc_for_menu(){

			$ttt = get_terms('food-cat');

			$catcat['-select-'] = '';

			foreach( $ttt as $t ){

				$catcat[$t -> name ] = $t -> name  ;
			}


			$food_slugs['-select-'] = '';

			foreach( $ttt as $ts ){

				$food_slugs[$ts -> name ] = $ts -> slug  ;
			}


		vc_map([
			'name'			=> 'zItaly Food Menu',
			'base'			=> 'zitaly_food_menu',
			'icon'			=> get_template_directory_uri(). '/images/alobaji.png',
			'category'		=> 'zItaly',
			'params'		=> [
				[
					'param_name'		=> 'title',
					'type'				=> 'dropdown',
					'heading'			=> 'Select a Title',
					'value'				=> $catcat
				],
				[
					'param_name'		=> 'food-slug',
					'type'				=> 'dropdown',
					'heading'			=> 'Select a Category for Post',
					'value'				=> $food_slugs
				]
			]
		]);
	}

?>