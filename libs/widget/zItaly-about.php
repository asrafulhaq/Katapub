<?php  




	
	//==== about us widgets ==============================================================================> 

	class zItaly_about_us extends WP_Widget {

		public function __construct(){

			parent::__construct('zItaly_about_us','zItaly About Us', [
				'description'		=> 'About Client'
			]);

		}

		public function widget($one, $two){ 

				$title = $two['title'];
				$photo = $two['photo'];
				$desc = $two['desc'];

			?>

			<?php echo $one['before_widget']; ?>
				<?php echo $one['before_title']; ?> <?php echo $title; ?> <?php echo $one['after_title']; ?>
				<div class="wid-content">
					<img src="<?php echo $photo; ?>"/>
					<p><?php echo $desc; ?></p>
				</div>
			<?php echo $one['after_widget']; ?>
			
		<?php }


		public function form($two){ 

				$title = $two['title'];
				$photo = $two['photo'];
				$desc = $two['desc'];



			?>
		
			<p>
				<label for="">Title</label>
				<input class="widefat" name="<?php echo $this -> get_field_name('title'); ?>" value="<?php echo $title; ?>" type="text">
			</p>

			<p>
				<label for="">Photo</label>
				<input id="about-photo" class="widefat" name="<?php echo $this -> get_field_name('photo'); ?>" value="<?php echo $photo; ?>" type="hidden">
			</p>

			<p>
				<button id="about-photo" class="button button-primary">Upload Media</button> 
				<br><br>
				<img id="about-photo" style="width:100%;" src="<?php echo $photo; ?>" alt="">
			</p>

			<p>
				<label for="">Description</label>
				<textarea class="widefat" name="<?php echo $this -> get_field_name('desc'); ?>"  type="text"><?php echo $desc ?></textarea>
			</p>
			
		<?php }








	}












?>