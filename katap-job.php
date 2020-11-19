<?php 


/*
	template name: Katapub job
*/



get_header(); 

global $katapub;

?>
    

<div id="fullpage">


	<!-- SESTION  01 -->
	<div class="section " id="section0" style="background-color: <?php echo $katapub['js1-bg']['background-color']; ?>; background-image:url( '<?php echo $katapub['js1-bg']['background-image']; ?>') ; background-size: cover; background-position: bottom right; background-repeat: no-repeat; ">

		

		<div class="layer">
			<div class="container rak" style="height:100vh; position: relative;">

				<div class="side-social">
					
					<div class="social-text">
						<h2>GARDEZ L'OEIL <br> OUVERT </h2>
					</div>
					<div class="social-icon">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-envelope"></i></a></li>
						</ul>
					</div>
				</div>
					
					<div class="round"></div>
					
					<div class="banner-content">
						<h1 class="" style="margin-top:25vh;font-weight:700;font-size:13em;color:#FFF;"><?php echo $katapub['js1-heading']; ?>

						 </h1>
						
					</div>

				
				
			</div>
		</div>
	</div>



	<!-- SECTION 02 -->
	<div class="section " id="section2" style="background-color: #E8E8E9;">

		<?php if(!empty($katapub['csection2_bg_video'])) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['csection2_bg_video']; ?>" >
		</video>
		<?php endif; ?>

		<div class="side-text">
			<h2>REMPLIR <br>LE FORMULAIRE</h2>
		</div>


		<div class="layer">
			<div class="container rak-gray" style="height:100vh;">
					
					
					<div class="job-animate-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ani.gif" alt="">
						</div>
					<div class="banner-content">
						
						<h2 class="jobsec02" style="margin-top:0vh; font-weight:700; font-size:6.5em; color:#202020; line-height:72px; transform: translate(100px, -49px);">
							<?php echo $katapub['js2-heading']; ?>
						 </h2>
						
						<div class="arr-down">
							<a href="#"><i class="ti-arrow-down"></i></a> 
						</div>


					</div>

				
				
			</div>
		</div>
	</div>



	<!-- SECTION 03 -->
	<div class="section " id="section2" style="background-color: #202020;">

		<?php if(!empty($katapub['csection2_bg_video'])) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['csection2_bg_video']; ?>" >
		</video>
		<?php endif; ?>


		<div class="layer">
			<div class="container rak" style="height:100vh;">
					

				
				<div style="margin-top: 20vh;" class="content-box">
					<h2 class="" style="margin-top:5vh; font-weight:700; font-size:6.5em; color:#FFFFFF; line-height:72px; transform: translate(100px, -49px);">
						<?php echo nl2br($katapub['js3-heading']); ?>
					 </h2>

					 <div class="featured-list">
					 	<div class="sec0">
					 		<ul>
					 			<li>Graphiste</li>
					 			<li>Monteur</li>
					 			<li>Caméraman</li>
					 			<li>Coordonnateur</li>
					 			<li>Créateur de contenus</li>
					 			<li>Designer graphique</li>
					 		</ul>
					 	</div>
					 	<div class="sec0">
					 		<ul>
					 			<li>Programmeur Frond end</li>
					 			<li>Illustrateur</li>
					 			<li>Photographe</li>
					 			<li>Programmeur Back end</li>
					 			<li>Rédacteur créatif</li>
					 			<li>Programmeur Full stack</li>
					 		</ul>
					 	</div>
					
					
					<div class="arr-down">
						<a href="#"><i class="ti-arrow-down"></i></a> 
					</div>

				</div>	
						
						


 
			</div>

				
				
			</div>
		</div>
	</div>
	<div class="section " id="section2" style="background-color: #202020;  position: relative;">

		<?php if(!empty($katapub['csection2_bg_video'])) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['csection2_bg_video']; ?>" >
		</video>
		<?php endif; ?>


		<div class="layer">
			<div class="container rak" style="height:100vh;">
					

			
						
				<div style="margin-top: 20vh;" class="content-area">
						<h2 style="text-align:center;color: #FFF;font-family:Libre Baskerville !important; font-style:italic; ">
							Mon style d'emploi
					 	</h2>

					 	<div class="circle-box">
					 		<div class="items">
					 			<span>Temps pleins </span>
					 		</div>
					 		<div class="items">
					 			<span>Pigiste </span>
					 		</div>
					 		<div class="items">
					 			<span>Peu Importe </span>
					 		</div>
					 	</div>

					 	<h3 class="guranteee-text">  <?php echo nl2br($katapub['js4-heading']); ?> </h3>

					 		    	<a href="#">
					 				    <div style="transform:scale(1.33) translate(446px, -60px);" class="buttonNew">       
					 				        <div class="button-title">
					 				            <span><?php echo $katapub['section2_btn-text']; ?></span>
					 				            <span><?php echo $katapub['section2_btn-hover-text']; ?></span>
					 				        </div>
					 				        <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
					 				    </div>
					 				</a>

					 	<div style="top:700px;left:957px;" class="gurantee">
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


				</div>



			
				
				
			</div>
		</div>
	</div>











	<!-- FOOTER  -->
	<div class="section " id="section0" style="background-color: <?php echo $katapub['fbgc']; ?>;">
		<div class="layer">
			<div class="container sec-footer" style="height:100vh;">
					
							<div class="line-effects" style="height:100vh; position: relative; top: 0vh;left: -44vh;">	  
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