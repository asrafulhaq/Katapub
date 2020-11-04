<?php  


	add_shortcode('zitaly_food_rinfo','zitaly_food_rinfo');
	function zitaly_food_rinfo($one, $two){ 

			$atttts = shortcode_atts([
				'p-group'	=> '',
				'title'		=> '',
				'desc'		=> ''
				
			], $one);


			ob_start();
		?>				
		

		<div class="wrap-col">

			<?php  

				

				$alldata =  vc_param_group_parse_atts($atttts['p-group']);

				foreach( $alldata as $perdata ) :

			?>

			<h3><?php echo $perdata['title']; ?></h3>
			<p><?php echo $perdata['desc']; ?></p><br/>


			<?php endforeach; ?>
			



		</div>


	<?php 
		return ob_get_clean();
}

	


	add_action('vc_before_init','vc_for_rinfo');

	function vc_for_rinfo(){


		vc_map([
			'name'			=> 'zItaly Reservation Info',
			'base'			=> 'zitaly_food_rinfo',
			'icon'			=> get_template_directory_uri(). '/images/alobaji.png',
			'category'		=> 'zItaly',
			'params'		=> [
				[
					'param_name'		=> 'p-group',
					'type'				=> 'param_group',
					'heading'			=> 'Information',
					'params'			=> [
						[
							'param_name'		=> 'title',
							'type'				=> 'textfield',
							'heading'			=> 'Title'		
						],
						[
							'param_name'		=> 'desc',
							'type'				=> 'textarea',
							'heading'			=> 'Description'		
						]
					]
				]
			]
			
		]);
	}

?>