<?php  


	add_shortcode('zitaly_food_gallery','zitaly_food_gallery');

	function zitaly_food_gallery($one, $two){ 

			$atttts = shortcode_atts([
				'gallery-col'	=> '4',
				
			], $one);


			ob_start();
		?>			

		<?php  

				$col = $atttts['gallery-col'];

			if( $col == '4' ){
				$height_gall = '200px';
			}elseif( $col == '3' ){

				$height_gall = '250px';

			}elseif($col == '2' ){

				$height_gall = '330px';

			}









		?>
		<style>
			.zoom-container img {
				display: block;
				width: 100%;
				height: <?php echo $height_gall; ?>;
				-webkit-transition: all .5s ease; /* Safari and Chrome */
			    -moz-transition: all .5s ease; /* Firefox */
			    -ms-transition: all .5s ease; /* IE 9 */
			    -o-transition: all .5s ease; /* Opera */
			    transition: all .5s ease;

				
			}


			.zoom-container a{
				display: block !important;
				width: 100% !important;
				height: <?php echo $height_gall; ?> !important;
				-webkit-transition: all .5s ease; /* Safari and Chrome */
			    -moz-transition: all .5s ease; /* Firefox */
			    -ms-transition: all .5s ease; /* IE 9 */
			    -o-transition: all .5s ease; /* Opera */
			    transition: all .5s ease;

				
			}
		</style>	
	
		<div class="wrap-content">
			<div class="row">

				<?php 
					$gallery_image = new WP_Query([
						'post_type'		=> 'zitaly-gallery',
						'posts_per_page'	=> 12
					]);
				while( $gallery_image -> have_posts() ) : $gallery_image -> the_post(); ?>
				<div class="col-1-<?php echo $atttts['gallery-col']; ?>">
					<div class="zoom-container">
						<a href="<?php the_permalink(); ?>">
							<span class="zoom-caption">
								<span><?php the_title(); ?></span>
							</span>

							<?php  

								$gallery_link = wp_get_attachment_url(get_post_thumbnail_ID($post -> ID));

							?>

							<img  src="<?php echo $gallery_link; ?>" alt="">
						</a>
					</div>
				</div>
				<?php endwhile; ?>


				
			</div>
		</div>
					

	<?php 
		return ob_get_clean();
}

	


	add_action('vc_before_init','vc_for_gallery');

	function vc_for_gallery(){


		vc_map([
			'name'			=> 'zItaly Food Gallery',
			'base'			=> 'zitaly_food_gallery',
			'icon'			=> get_template_directory_uri(). '/images/alobaji.png',
			'category'		=> 'zItaly',
			'params'		=> [
				[
					'param_name'		=> 'gallery-col',
					'type'				=> 'dropdown',
					'heading'			=> 'Gallery Column',
					'value'				=>  [
						'-select-'			=> '',
						'Col 2'				=> '2',
						'Col 3'				=> '3',
						'Col 4'				=> '4',
					],
					'default'				=> '4'
				]
			]
			
		]);
	}

?>