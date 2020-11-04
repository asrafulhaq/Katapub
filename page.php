<?php get_header(); ?>

<!--////////////////////////////////////Slider-->

<?php if( is_front_page() ) : ?>

	<div class="zerogrid kaokao">
			<div class="callbacks_container">
				<ul class="rslides" id="slider4">

					<?php 
						$food_slider = new WP_Query([
							'post_type'			=> 'zitaly-slider',
							'posts_per_page'	=> 5
						]);
					while( $food_slider -> have_posts() ) : $food_slider -> the_post(); ?>
					<li>
						<?php the_post_thumbnail(); ?>
						<div class="caption">
							<h2><?php the_title(); ?></h2></br>
							<p><?php the_content(); ?> </p>
						</div>
					</li>
					<?php endwhile; ?>
					
				</ul>
			</div>
		</div>
<?php else : ?>

<?php endif; ?>




<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">

		<?php if( is_front_page() ) : ?>
			<section class="content-box box-1">
				<div class="zerogrid">
					<div class="row box-item"><!--Start Box-->
						<h2>“Your awesome company slogan goes here, we have the best food around”</h2>
						<span>Unc elementum lacus in gravida pellentesque urna dolor eleifend felis eleifend</span>
					</div>
				</div>		
			</section>
		<?php else : ?>

			<div class="crumbs">
				<ul>


					<li><a href="<?php echo site_url(); ?>">Home</a></li>
					
					<?php if( !is_front_page() ): ?>

					<?php while( have_posts() ) : the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>

					<?php endif; ?>

				</ul>
			</div>


		<?php endif; ?>

		


		

		<?php if( get_post_meta( get_the_ID(), 'zItaly-sp', true ) == 'right' ) : ?>
				
				<div id="main-content" class="col-2-3">
					<div class="wrap-content">


						<?php while( have_posts() ) : the_post(); ?>
						
							
							
								<?php the_content(); ?>
							
							
						
						<?php endwhile; ?>
						
					</div>
				</div>

				<div id="sidebar" class="col-1-3">

					<?php get_sidebar(); ?>
				</div>
		<?php elseif( get_post_meta( get_the_ID(), 'zItaly-sp', true ) == 'left' ) : ?>
				
				<div id="sidebar" class="col-1-3">

					<?php get_sidebar(); ?>
				</div>
				<div id="main-content" class="col-2-3">
					<div class="wrap-content">


						<?php while( have_posts() ) : the_post(); ?>
						
							
							
								<?php the_content(); ?>
							
							
						
						<?php endwhile; ?>
						
					</div>
				</div>
		<?php elseif(get_post_meta( get_the_ID(), 'zItaly-sp', true ) == 'full') : ?>
				<div id="main-content" class="col-3-3">
					<div class="wrap-content">


						<?php while( have_posts() ) : the_post(); ?>
						
							
							
								<?php the_content(); ?>
							
							
						
						<?php endwhile; ?>
						
					</div>
				</div>
		<?php endif; ?>
		
		


		


		






	</div>
</section>
<?php get_footer(); ?>