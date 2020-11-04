<?php  

	
	//==== about us widgets ==============================================================================> 

	class zItaly_testi extends WP_Widget {

		public function __construct(){

			parent::__construct('zItaly_testi','zItaly Testimonials', [
				'description'		=> 'About Client'
			]);

		}

		public function widget($one, $two){ 

				
				$title = $two['title'];
				$name = $two['name'];
				$desc = $two['desc'];
				$cf = $two['cf'];


			?>

			<?php echo $one['before_widget']; ?>
				<?php echo $one['before_title']; ?> <?php echo $title; ?> <?php echo $one['after_title']; ?>
				

					<div class="row haq-testi">
						<img src="<?php echo $cf; ?>">
						<h5><?php echo $name; ?></h5>
						<p><?php echo $desc; ?></p>
					</div>		



			<?php echo $one['after_widget']; ?>
			
		<?php }


		public function form($two){ 

				$title = $two['title'];
				$name = $two['name'];
				$desc = $two['desc'];
				$cf = $two['cf'];
				


			?>
		
			<p>
				<label for="">Title</label>
				<input class="widefat" name="<?php echo $this -> get_field_name('title'); ?>" value="<?php echo $title; ?>" type="text">
			</p>

			<p>
				<label for="">Client Photo</label>
				<input id="client-photo" class="widefat" name="<?php echo $this -> get_field_name('cf'); ?>" value="<?php echo $cf; ?>" type="text">
			</p>

			<p>
				<button class="button button-danger" id="client-photo">Upload Photo</button>
			</p>

			<p>
				<img id="client-photo" src="<?php echo $cf; ?>" alt="">
			</p>



			<p>
				<label for="">Name</label>
				<input class="widefat" name="<?php echo $this -> get_field_name('name'); ?>" value="<?php echo $name; ?>" type="text">
			</p>

			<p>
				<label for="">Description</label>
				<textarea class="widefat" name="<?php echo $this -> get_field_name('desc'); ?>"  type="text"><?php echo $desc; ?></textarea>
			</p>

			
			
		<?php }








	}

?>