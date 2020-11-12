<?php 


/*
	template name: Katapub Contact
*/



get_header(); 

global $katapub;

?>
    

<div id="fullpage">


	
	<div class="section " id="section0" style="background-color: <?php echo $katapub['csection1_bg']['background-color']; ?>; background-image:url( '<?php echo $katapub['csection1_bg']['background-image']; ?>') ; background-size: 1000px auto; background-position: bottom right; background-repeat: no-repeat;">

		<?php if(!empty($katapub['csection1_bg_video'])) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['csection1_bg_video']; ?>" >
		</video>
		<?php endif; ?>
		<div class="layer">
			<div class="container rak" style="height:100vh;">
					
					<div class="round"></div>
					
					<div class="banner-content">
						<h1 class="wow <?php echo $katapub['cs1-heading-animation']; ?>" style="margin-top:25vh;font-weight:<?php echo $katapub['cs1-heading-style']['font-weight']; ?>; font-size:<?php echo $katapub['cs1-heading-style']['font-size']; ?>;color:<?php echo $katapub['cs1-heading-style']['color']; ?>; line-height:<?php echo $katapub['cs1-heading-style']['line-height']; ?>;"><?php echo $katapub['cs1-heading']; ?>

						 </h1>
						
					</div>

				
				
			</div>
		</div>
	</div>




	<div class="section " id="section2" style="background-color: <?php echo $katapub['csection2_bg']['background-color']; ?>; background-image:url( '<?php echo $katapub['csection2_bg']['background-image']; ?>') ; background-size: 1000px auto; background-position: bottom right; background-repeat: no-repeat;">

		<?php if(!empty($katapub['csection2_bg_video'])) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['csection2_bg_video']; ?>" >
		</video>
		<?php endif; ?>




		<div class="layer">
			<div class="container " style="height:100vh;">
					
					
					
					<div class="banner-content">
						<h2 class="wow <?php echo $katapub['cs2-heading-animation']; ?>" style="margin-top:25vh;font-weight:<?php echo $katapub['cs2-heading-style']['font-weight']; ?>; font-size:<?php echo $katapub['cs2-heading-style']['font-size']; ?>;color:<?php echo $katapub['cs2-heading-style']['color']; ?>; line-height:<?php echo $katapub['cs2-heading-style']['line-height']; ?>;"><?php echo $katapub['cs2-heading']; ?>

						 </h2>
						
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