<?php  

	
	//==== about us widgets ==============================================================================> 

	class zItaly_map extends WP_Widget {

		public function __construct(){

			parent::__construct('zItaly_map','zItaly Map', [
				'description'		=> 'About Client'
			]);

		}

		public function widget($one, $two){ 

				
				$title = $two['title'];
				$name = $two['name'];



			?>

			<?php echo $one['before_widget']; ?>
				<?php echo $one['before_title']; ?> <?php echo $title; ?> <?php echo $one['after_title']; ?>
				
				
				<div class="wrap-map haq-map"><?php echo $name; ?></div>



			<?php echo $one['after_widget']; ?>
			
		<?php }


		public function form($two){ 

				$title = $two['title'];
				$name = $two['name'];
				


			?>
		
			<p>
				<label for="">Title</label>
				<input class="widefat" name="<?php echo $this -> get_field_name('title'); ?>" value="<?php echo $title; ?>" type="text">
			</p>


			



			<p>
				<label for="">google Map code</label>
				<textarea class="widefat" name="<?php echo $this -> get_field_name('name'); ?>" type="text"><?php echo $name; ?></textarea>
			</p>

		

			
			
		<?php }








	}

?>