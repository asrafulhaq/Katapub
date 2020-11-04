<?php  


	add_shortcode('zitaly_food_map','zitaly_food_map');
	function zitaly_food_map($one, $two){ 

			$atttts = shortcode_atts([
				'food-map'	=> '',
				
			], $one);


			ob_start();
		?>							<style>
										
										.wrap-col .wrap-map iframe {
											width: 100%;
										}

			
									</style>
	
									<div class="wrap-col">
										<div class="wrap-map">
											<?php echo $two; ?>
										</div>
									</div>
					


	<?php 
		return ob_get_clean();
}

	


	add_action('vc_before_init','vc_for_map');

	function vc_for_map(){


		vc_map([
			'name'			=> 'zItaly Food Maps',
			'base'			=> 'zitaly_food_map',
			'icon'			=> get_template_directory_uri(). '/images/alobaji.png',
			'category'		=> 'zItaly',
			'params'		=> [
				[
					'param_name'		=> 'content',
					'type'				=> 'textarea_html',
					'heading'			=> 'Map'
				]
			]
			
			
		]);
	}

?>