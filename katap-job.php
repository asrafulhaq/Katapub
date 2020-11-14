<?php 


/*
	template name: Katapub job
*/



get_header(); 

global $katapub;

?>
    

<div id="fullpage">


	
	<div class="section " id="section0" style="background-color: <?php echo $katapub['js1-bg']['background-color']; ?>; background-image:url( '<?php echo $katapub['js1-bg']['background-image']; ?>') ; background-size: cover; background-position: bottom right; background-repeat: no-repeat;">


		<div class="layer">
			<div class="container rak" style="height:100vh;">
					
					<div class="round"></div>
					
					<div class="banner-content">
						<h1 class="" style="margin-top:25vh;font-weight:700;font-size:13em;color:#FFF;"><?php echo $katapub['js1-heading']; ?>

						 </h1>
						
					</div>

				
				
			</div>
		</div>
	</div>




	<div class="section " id="section2" style="background-color: #E8E8E9;">

		<?php if(!empty($katapub['csection2_bg_video'])) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['csection2_bg_video']; ?>" >
		</video>
		<?php endif; ?>




		<div class="layer">
			<div class="container rak-gray" style="height:100vh;">
					
					
					<div class="job-animate-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ani.gif" alt="">
						</div>
					<div class="banner-content">
						
						<h2 class="" style="margin-top:0vh; font-weight:700; font-size:6.5em; color:#202020; line-height:72px; transform: translate(100px, -49px);">
							Je veux postuler maintenant
						 </h2>
						
						<div class="arr-down">
							<a href="#"><i class="ti-arrow-down"></i></a> 
						</div>


					</div>

				
				
			</div>
		</div>
	</div>












	<div class="section " id="section0" style="background-color: <?php echo $katapub['fbgc']; ?>;">
		<div class="layer">
			<div class="container sec-footer rak-gray" style="height:100vh;">
					
					
					<div class="banner-content ">
						<h1 style="margin-top:5vh;font-weight:700;font-size:5em; width:64%; line-height:72px;color:#202020;">Par ici pour notre infolettre</h1>

						
						
					</div>
					<div class="footer-section-content">
						<div class="footer-1">
							<h3><?php echo nl2br( $katapub['f-subheading'] ); ?></h3>
						</div>
						<div class="footer-2">
							<div class="footer-menu">
								<?php  

									wp_nav_menu([
										'theme_location'	=> 'footer-menu'
									]);

								?>
							</div>
							<div class="social-menu">
								<ul>
									<li><a href="<?php echo $katapub['fb']; ?>"><i class="fa fa-facebook"></i></a></li>
									<li><a href="<?php echo $katapub['insta']; ?>"><i class="fa fa-instagram"></i></a></li>
									<li><a href="<?php echo $katapub['lin']; ?>"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="<?php echo $katapub['mail']; ?>"><i class="fa fa-envelope"></i></a></li>

								</ul>
							</div>
						</div>
						<div class="footer-3">
							<div class="copy-right">
								<a href="#">
									<img src="<?php echo $katapub['logo-footer-upload']['url']; ?>" alt="">
								</a>
								<p><?php echo $katapub['ct']; ?></p>
							</div>
						</div>
					</div>

				




				
			</div>
		</div>
	</div>
	
	

	
	
	
	

	
</div>


<?php get_footer(); ?>