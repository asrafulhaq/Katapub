<?php  


	add_shortcode('zitaly_food_team','zitaly_food_team');
	function zitaly_food_team($one, $two){ 

			$atttts = shortcode_atts([
				'staff-photo'	=> '',
				'staff-name'	=> '',
				'staff-tw'		=> '',
				'staff-fb'		=> '',
				'staff-lin'		=> '',
				'staff-ins'		=> '',
			], $one);


			ob_start();
		?>				
	

						<?php 


							$photo_id = $atttts['staff-photo']; 

							$photo_link =  wp_get_attachment_url($photo_id, 'full');


						?>

						<div class="chef">
							<div class="wrap-col">
								<div class="zoom-container">
									<a href="#">
										<img style="height:200px; width:100%;" src="<?php echo $photo_link; ?>" />
									</a>
								</div>
								<h3><?php echo $atttts['staff-name']; ?></h3>
								<ul class="social t-center">
									<li><a href="<?php echo $atttts['staff-tw']; ?>"><i class="fa fa-twitter"></i></a></li>
									<li><a href="<?php echo $atttts['staff-fb']; ?>"><i class="fa fa-facebook"></i></a></li>
									<li><a href="<?php echo $atttts['staff-lin']; ?>"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="<?php echo $atttts['staff-ins']; ?>"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>


	<?php 
		return ob_get_clean();
}

	


	add_action('vc_before_init','vc_for_team');

	function vc_for_team(){


		vc_map([
			'name'			=> 'zItaly Food Staff',
			'base'			=> 'zitaly_food_team',
			'icon'			=> get_template_directory_uri(). '/images/alobaji.png',
			'category'		=> 'zItaly',
			'params'		=> [
				[
					'param_name'		=> 'staff-photo',
					'type'				=> 'attach_image',
					'heading'			=> 'Upload Staff Photo'
				],
				[
					'param_name'		=> 'staff-name',
					'type'				=> 'textfield',
					'heading'			=> 'Staff name'
				],
				[
					'param_name'		=> 'staff-tw',
					'type'				=> 'textfield',
					'heading'			=> 'Twitter'
				],
				[
					'param_name'		=> 'staff-fb',
					'type'				=> 'textfield',
					'heading'			=> 'Facebook'
				],
				[
					'param_name'		=> 'staff-lin',
					'type'				=> 'textfield',
					'heading'			=> 'Linked In'
				],
				[
					'param_name'		=> 'staff-ins',
					'type'				=> 'textfield',
					'heading'			=> 'Instagram'
				]
			]
			
		]);
	}

?>