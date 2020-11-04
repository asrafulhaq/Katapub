<?php  

	
	//==== about us widgets ==============================================================================> 

	class zItaly_open extends WP_Widget {

		public function __construct(){

			parent::__construct('zItaly_open','zItaly Open Time', [
				'description'		=> 'About Client'
			]);

		}

		public function widget($one, $two){ 

				
				$title = $two['title'];
				$mon = $two['mon'];
				$tue = $two['tue'];
				$thu = $two['thu'];
				$sun = $two['sun'];


			?>

			<?php echo $one['before_widget']; ?>
				<?php echo $one['before_title']; ?> <?php echo $title; ?> <?php echo $one['after_title']; ?>
				
				<p><span>mon.</span> <?php echo $mon; ?></p>
				<p><span>tue.-wed.</span> <?php echo $tue; ?></p>
				<p><span>thu.-sat.</span> <?php echo $thu; ?></p>
				<p><span>sun.</span> <?php echo $sun; ?></p>
				<p><span>Need help getting home?</span></br>


			<?php echo $one['after_widget']; ?>
			
		<?php }


		public function form($two){ 

				$title = $two['title'];
				$mon = $two['mon'];
				$tue = $two['tue'];
				$thu = $two['thu'];
				$sun = $two['sun'];
				


			?>
		
			<p>
				<label for="">Title</label>
				<input class="widefat" name="<?php echo $this -> get_field_name('title'); ?>" value="<?php echo $title; ?>" type="text">
			</p>

			<p>
				<label for="">Mon</label>
				<input id="client-photo" class="widefat" name="<?php echo $this -> get_field_name('mon'); ?>" value="<?php echo $mon; ?>" type="text">
			</p>

			<p>
				<label for="">Tue</label>
				<input class="widefat" name="<?php echo $this -> get_field_name('tue'); ?>" value="<?php echo $tue; ?>" type="text">
			</p>

			<p>
				<label for="">Thu</label>
				<textarea class="widefat" name="<?php echo $this -> get_field_name('thu'); ?>"  type="text"><?php echo $thu; ?></textarea>
			</p>

			<p>
				<label for="">Sun</label>
				<textarea class="widefat" name="<?php echo $this -> get_field_name('sun'); ?>"  type="text"><?php echo $sun; ?></textarea>
			</p>

			
			
		<?php }








	}

?>