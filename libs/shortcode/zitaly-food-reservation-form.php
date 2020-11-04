<?php  


	add_shortcode('zitaly_food_rform','zitaly_food_rform');
	function zitaly_food_rform($one, $two){ 

			$atttts = shortcode_atts([
				'staff-photo'	=> '',
				
			], $one);


			ob_start();
		?>				
			


			<div class="wrap-col">
				<div class="contact">



					<div id="contact_form">


						<form method="POST" action="" name="contact" id="contact">

							
							<label class="row">
								<div class="col-1-2">
									<div class="wrap-col">
										<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
									</div>
								</div>
								<div class="col-1-2">
									<div class="wrap-col">
										<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
									</div>
								</div>
							</label>



							<label class="row">
								<div class="col-2-4">
									<div class="wrap-col">
									<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
									</div>
								</div>
								<div class="col-1-4">
									<div class="wrap-col">
									<input type="date"  name="date" id="date" placeholder="Date"/>
									</div>
								</div>
								<div class="col-1-4">
									<div class="wrap-col">
									<input type="time"  name="time" id="time" placeholder="Time"/>
									</div>
								</div>											
							</label>


							<label class="row">
								<div class="wrap-col">
									<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
									placeholder="Message"></textarea>
								</div>
							</label>


							<center><input class="sendButton" type="submit" name="submit" value="Submit"></center>
						</form>



					</div>
				</div>
			</div>

	<?php 
		return ob_get_clean();
}

	


	add_action('vc_before_init','vc_for_rform');

	function vc_for_rform(){


		vc_map([
			'name'			=> 'zItaly Reservation',
			'base'			=> 'zitaly_food_rform',
			'icon'			=> get_template_directory_uri(). '/images/alobaji.png',
			'category'		=> 'zItaly',
			
			
		]);
	}

?>