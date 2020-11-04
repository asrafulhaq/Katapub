<?php  


	add_shortcode('zitaly_food_address','zitaly_food_address');
	function zitaly_food_address($one, $two){ 

			$atttts = shortcode_atts([
				'food-address'		=> '',
				'food-operation'	=> '',
				'food-info'			=> '',
				
			], $one);


			ob_start();
		?>				
	
			
									<div class="wrap-col">
										<h3>Address</h3>
										<p><?php echo $atttts['food-address']; ?></p><br/>
										<h3>Hours Of Operation</h3>
										<p><?php echo $atttts['food-operation']; ?></p>
										<h3>Contact Info</h3>


										<p><?php echo $atttts['food-info']; ?></p>
										

									</div>


	<?php 
		return ob_get_clean();
}

	


	add_action('vc_before_init','vc_for_address');

	function vc_for_address(){


		vc_map([
			'name'			=> 'zItaly Food Address',
			'base'			=> 'zitaly_food_address',
			'icon'			=> get_template_directory_uri(). '/images/alobaji.png',
			'category'		=> 'zItaly',
			'params'		=> [
				[
					'param_name'		=> 'food-address',
					'type'				=> 'textarea',
					'heading'			=> 'Address'
				],
				[
					'param_name'		=> 'food-operation',
					'type'				=> 'textarea',
					'heading'			=> 'Hours Of Operation'
				],
				[
					'param_name'		=> 'food-info',
					'type'				=> 'textarea',
					'heading'			=> 'Contact Info'
				]
			]
		]);
	}

?>