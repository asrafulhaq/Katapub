<?php 


/*
	template name: Katapub Services
*/



get_header(); 

global $katapub;

?>
    

<div id="fullpage">


	<!-- SECTION 01 -->
	<div class="section " id="section0" style="background-color: <?php echo $katapub['ss1-bg']['background-color']; ?>; background-image: url(<?php echo $katapub['ss1-bg']['background-image']; ?>); background-size: cover; background-position: center; ">

		<?php if(!empty($katapub['ss1-video'])) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['ss1-video']; ?>" >
		</video>
		<?php endif; ?>
		<div class="layer">
			<div class="container rak" style="height:100vh;">
					
					<div class="round"></div>
					
					<div class="banner-content">
						<h1 class="" style="margin-top:25vh;font-weight:700; font-size:6.5em;color:#FFF; line-height:70px;">

							 <?php echo nl2br($katapub['ss1-heading']); ?>

						 </h1>
						
					</div>

					<div class="section content">
						<style>

							.btnVFRond:hover {
							    background-color: <?php echo $katapub['s3_grab_bg_hov']; ?> !important;
							    color: #FFF !important;
							}

						</style>
						<a href="#" class="LinkBtnRond"><div style="background-color:<?php echo $katapub['s3_grab_bg']; ?>; top:362px; right:586px;" class="btnVFRond"><h4><?php echo nl2br($katapub['ss1-grabing']); ?><h4></div></a>

					</div>

				
				
			</div>
		</div>
	</div>

	<!-- SECTION 02 -->
	<div class="section " id="section0" style="background-color: #CAF9FF;  background-image: url('<?php echo get_template_directory_uri(); ?>/img/sbg.jpg');background-position: center;">


		<div class="layer">
			<div class="container rak-gray" style="height:100vh;">

					
					<div class="banner-content">
						<h1 class="kcs2" style="margin-top:3vh; margin-left:50%;font-weight:700; font-size:7.5em;color:#202020; line-height:80px;">

							Branding <br>
							BX

						 </h1>
						
					</div>
					<div class="services-tabs">
						<div class="content-circle">
							<div class="cont">
								<h3>Gestion de contenus</h3>
								<p>La chaire de la stratégie. Faire fructifier la marque en racontant son histoire et axer sur la qualité du message. Une ligne directrice cohérente d’un média à l’autre en vidéo ou en mots. Une création vivante pour une expérience remarquable. Direction artistique L’équipe derrière la cohésion du projet. Un œil artistique exceptionnel pour donner vie aux idées. Réaliser les créations dans l’objectif de partager la culture de la marque. </p>
							</div>
						</div>
						<div class="content-menu">
							<ul>
								<li>Gestion de contenus</li>
								<li>Direction artistique</li>
								<li>Campagne pub</li>
								<li>Évènements</li>
								<li>Site web</li>
								<li>Brand stratégie</li>
								<li>Design graphique</li>
								<li>Vidéo</li>
							</ul>
						</div>
					</div>









				
				
			</div>
		</div>
	</div>


	<!-- SECTION 03 -->
	<div class="section " id="section2" style="background-color: #202020; position: relative; overflow: visible;">


		<div class="rak-v" style=""></div>



		<div class="layer">
			<div class="container rak" style="height:100vh;">
					

					

					<div class="list-content list-near">
						<div class="circle">
							<span>1</span>
						</div>
						<div class="content">
							<h4>
								Le <br>
								concept <br>
								utilisateur
							</h4>
							<p>
								L’élaboration de l’idée.
								Les créateurs se rassemblent
								pour mettre au monde
								l’approche qu’il faut pour
								la bonne clientèle/rejoindre
								le bon public. Celle qui surprendra,
								accrochera et rendra
								l’expérience mémorable.
							</p>
						</div>
					</div>



					<div class="list-content list-far">
						<div class="circle">
							<span>2</span>
						</div>
						<div class="content">
							<h4>
								Le <br>
								concept <br>
								utilisateur
							</h4>
							<p>
								L’élaboration de l’idée.
								Les créateurs se rassemblent
								pour mettre au monde
								l’approche qu’il faut pour
								la bonne clientèle/rejoindre
								le bon public. Celle qui surprendra,
								accrochera et rendra
								l’expérience mémorable.
							</p>
						</div>
					</div>
				
			</div>
		</div>
	</div>



	<!-- SECTION 03 -->
	<div class="section" id="section2" style="background-color: #202020; position: relative; overflow: visible;">


		<div class="rak-v" style=""></div>



		<div class="layer">
			<div class="container rak" style="height:100vh;">
					
					<div class="round" style="top:-47vh"></div>
					

					<div class="list-content list-near">
						<div class="circle">
							<span>3</span>
						</div>
						<div class="content">
							<h4>
								Le <br>
								concept <br>
								utilisateur
							</h4>
							<p>
								L’élaboration de l’idée.
								Les créateurs se rassemblent
								pour mettre au monde
								l’approche qu’il faut pour
								la bonne clientèle/rejoindre
								le bon public. Celle qui surprendra,
								accrochera et rendra
								l’expérience mémorable.
							</p>
						</div>
					</div>



					<div class="list-content list-far">
						<div class="circle">
							<span>4</span>
						</div>
						<div class="content">
							<h4>
								Le <br>
								concept <br>
								utilisateur
							</h4>
							<p>
								L’élaboration de l’idée.
								Les créateurs se rassemblent
								pour mettre au monde
								l’approche qu’il faut pour
								la bonne clientèle/rejoindre
								le bon public. Celle qui surprendra,
								accrochera et rendra
								l’expérience mémorable.
							</p>
						</div>
					</div>
				
			</div>
		</div>
	</div>



	<!-- FOOTR  -->
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
						<h1 style="margin-top:5vh;font-weight:700;font-size:5em; width:64%; color:#202020;">Par ici pour notre infolettre</h1>

						
						
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