<?php  

	
	//==== about us widgets ==============================================================================> 

	class zItaly_gallery extends WP_Widget {

		public function __construct(){

			parent::__construct('zItaly_gallery','zItaly Gallery', [
				'description'		=> 'About Client'
			]);

		}

		public function widget($one, $two){ 

				$title = $two['title'];


			?>

			<?php echo $one['before_widget']; ?>
				<?php echo $one['before_title']; ?> <?php echo $title; ?> <?php echo $one['after_title']; ?>
				


						<div class="wid-content lalmorich">

							<?php 
								$gall = new WP_Query([
									'post_type'			=> 'zitaly-gallery',
									'posts_per_page'	=> 6
								]);
							while( $gall -> have_posts() ) : $gall -> the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
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