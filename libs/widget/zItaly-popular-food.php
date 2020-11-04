<?php  


	//==== about us widgets ==============================================================================> 

	class zItaly_popular_food extends WP_Widget {

		public function __construct(){

			parent::__construct('zItaly_popular_food','zItaly Popular Food', [
				'description'		=> 'About food '
			]);

		}

		public function widget($one, $two){ 

				$title = $two['title'];


			?>

			<?php echo $one['before_widget']; ?>
				<?php echo $one['before_title']; ?> <?php echo $title; ?> <?php echo $one['after_title']; ?>
				
				<div class="wid-content">

					<?php 
						$pfood = new WP_Query([
							'post_type'			=> 'zitaly-menu',
							'posts_per_page'	=> 3,

							
						]);
					while($pfood -> have_posts()) : $pfood -> the_post(); ?>
					<div class="post">
						<a href="#"><img src="<?php echo get_post_meta(get_the_ID(), 'food-photo-p', true); ?>"/></a>
						<div class="wrapper">
						  <h5><a href="#"><?php the_title(); ?></a></h5>
						   <span>$<?php echo get_post_meta(get_the_ID(), 'food-price-min', true); ?> - $<?php echo get_post_meta(get_the_ID(), 'food-price-max', true); ?></span>
						</div>
					</div>
				<?php endwhile; ?>


					
				</div>


			<?php echo $one['after_widget']; ?>
			
		<?php }


		public function form($two){ 

				$title = $two['title'];
				
				


			?>
		
			<p>
				<label for="">Title</label>
				<input class="widefat" name="<?php echo $this -> get_field_name('title'); ?>" value="<?php echo $title; ?>" type="text">
			</p>

			
		<?php }








	}




?>