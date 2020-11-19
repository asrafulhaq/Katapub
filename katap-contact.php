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
			<div class="container rak-gray" style="height:100vh;">
					
	
					
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


		<div class="side-text">
			<h2>POUR LES 6 <br> PROCHAINS MOIS</h2>
		</div>

		<div class="layer">
			<div class="container rak-gray" style="height:100vh;">
					
					
					
					
					<div class="contact-info-katapub">
						<div class="row">
							<div class="col-md-6">
								<h3>Katapub</h3>
								<p>Montréal</p>
								<div class="info-pub">
									<div class="info-content">
										<div class="info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/info/m1.png" alt=""></div>
										<div class="info-content">
										 	9494 boul. St-Laurent <br>
										 	H2N 1N3 <br>
										 	Montréal,QC
										</div>
									</div>
									<div class="info-content">
										<div class="info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/info/c1.png" alt=""></div>
										<div class="info-content">
										 	<strong>+1 (581) 354 2995</strong>
										</div>
									</div>
									<div class="info-content">
										<div class="info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/info/b1.png" alt=""></div>
										<div class="info-content">
										 	montreal@katapub.com
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<h3>Katapub</h3>
								<p>Saguenay</p>
								<div class="info-pub">
									<div class="info-content">
										<div class="info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/info/m2.png" alt=""></div>
										<div class="info-content">
										 	343-3 Racine-Est <br>
										 	G7H 1S8 <br>
										 	Saguenay, QC 
										</div>
									</div>
									<div class="info-content">
										<div class="info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/info/c2.png" alt=""></div>
										<div class="info-content">
										 	<strong>1 (418) 973 6553</strong>
										</div>
									</div>
									<div class="info-content">
										<div class="info-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/info/b1.png" alt=""></div>
										<div class="info-content">
										 	saguenay@katapub.com
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="banner-content" style="width: 600px;">

						<h2 class="<?php echo $katapub['cs2-heading-animation']; ?>" style="margin-top:25vh;font-weight:<?php echo $katapub['cs2-heading-style']['font-weight']; ?>; font-size:<?php echo $katapub['cs2-heading-style']['font-size']; ?>;color:<?php echo $katapub['cs2-heading-style']['color']; ?>; line-height:<?php echo $katapub['cs2-heading-style']['line-height']; ?>;">
							<?php echo nl2br($katapub['cs2-heading']); ?>
						 </h2>
						
					</div>

				
				
			</div>
		</div>
	</div>


	<!-- contact us section -->
	<div class="section " id="section2" style="background-color: <?php echo $katapub['csection3_bg']['background-color']; ?>; background-image:url( '<?php echo $katapub['csection3_bg']['background-image']; ?>') ; background-size: 1000px auto; background-position: bottom right; background-repeat: no-repeat;">

		<?php if(!empty($katapub['csection3_bg_video'])) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['csection3_bg_video']; ?>" >
		</video>
		<?php endif; ?>




		<div class="layer">
			<div class="container rak" style="height:100vh;">
					
					<div class="contact-options-section">
						<ul>
							<li><a href="#">Video</a></li>
							<li><a href="#">Gestion de contenus</a></li>
							<li><a href="#">Visuels</a></li>
							<li><a href="#">Campagne</a></li>
							<li><a href="#">Site web </a></li>
						</ul>
						<h4>Ma banque d'heures</h4>
						<div class="main-options-menu">
							<div class="options-item">
								<p>50 Herues</p>
							</div>
							<div class="options-item">
								<p>50 Herues</p>
							</div>
							<div class="options-item">
								<p>50 Herues</p>
							</div>
							<div class="options-item">
								<p>50 Herues</p>
							</div>
						</div>
					</div>

					<div class="banner-content" style="width: 600px;">

						<h2 class="<?php echo $katapub['cs2-heading-animation']; ?>" style="margin-top:25vh;font-weight:<?php echo $katapub['cs3-heading-style']['font-weight']; ?>; font-size:<?php echo $katapub['cs3-heading-style']['font-size']; ?>;color:<?php echo $katapub['cs3-heading-style']['color']; ?>; line-height:<?php echo $katapub['cs3-heading-style']['line-height']; ?>;">
							<?php echo nl2br($katapub['cs3-heading']); ?>
						 </h2>
						
					</div>

				
				
			</div>
		</div>
	</div>
















	<div class="section " id="section0" style="background-color: <?php echo $katapub['fbgc']; ?>;">
		<div class="layer">
			<div class="container sec-footer" style="height:100vh;">
					
							<div class="line-effects" style="height:100vh; position: relative; top:0vh;left: -44vh;">	  
								<a style="display: none;" rel="noopener" aria-label="sound" href="#" class="sound soundtoggler w-inline-block"></a>
							                 
					                <style>
					                	.elastic canvas {
					                		height: 100vh !important;
					                	}
					                	.p-col {
					                		height: 100vh !important;
					                	}
					                </style>
					                <main class="p-grid scroller" style=""> 

										<a style="transform: translate(0px, 0px); height: 100vh;" rel="noopener" href="" class="p-col pagelink w-inline-block">		                             
					                         <div class="elastic elasticbox"></div>
					                    </a> 

					                    <a style="transform: translate(475px, 0px); height: 100vh;" rel="noopener" href="" class="p-col pagelink w-inline-block">		                             
					                         <div class="elastic elasticbox"></div>
					                    </a> 

									</main>

							</div>
					
					<div class="banner-content " style="transform: translate(30px , -833px);">
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
							<div class="gurantee">
								<form id="email_subs" action="">
									<label for="inp" class="inp">
										
									  <input type="text" id="inp" placeholder="&nbsp;">
									  <span class="label">Courriel</span>
									  <svg width="120px"  height="26px" viewBox="0 0 120 26">
									    <path style="color:red;" d="M0,25 C21,25 46,25 74,25 C102,25 118,25 120,25"></path>
									  </svg>
									  <span class="border"></span>
									  <button id="sub_btn" type="submit"><i class="ti-arrow-right"></i></button>
									  <img src="<?php echo get_template_directory_uri(); ?>/img/ghurantee.gif" alt="">
									  <span id="success_msg"></span>
									</label>
								</form>
							</div>
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