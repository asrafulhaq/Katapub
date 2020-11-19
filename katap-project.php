<?php 


/*
	template name: Katapub Projects
*/


get_header(); 


?>
    

<div id="fullpage">


	
	<div class="section " id="section0" style="background-color: #202020;">
		<div class="layer">
			<div class="container rak" style="height:100vh;">
					
					<div class="round"></div>
					
					<div class="banner-content">
						<h1 class="wow <?php echo $katapub['s1-heading-animation']; ?>" style="margin-top:25vh;font-weight:<?php echo $katapub['s1-heading-style']['font-weight']; ?>; font-size:<?php echo $katapub['s1-heading-style']['font-size']; ?>;color:<?php echo $katapub['s1-heading-style']['color']; ?>;">

							Voici <br>nos projets <br> primés 

						 </h1>

					</div>

				
				
			</div>
		</div>
	</div>



	<div class="section" style="background-color: <?php echo $katapub['section2_bg']['background-color']; ?>; background-image: url(<?php echo $katapub['section2_bg']['background-image']; ?>); background-position: center; background-size: cover;" id="section0">
		<?php if( !empty($katapub['section2_bg_video'] ) ) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo get_template_directory_uri(); ?>/videos/mohila.mp4" type="video/mp4">
		</video>
		<?php endif; ?>
		<div class="layer">
			<div class="container " style="height:100vh;">
				
				<section class="section-content">
					    <div class="btn-center btn-bottom-center" style="margin-top: 40%;">
					    	<a href="#">
							    <div style="margin-top:450px;" class="buttonNew">       
							        <div class="button-title">
							            <span><?php echo $katapub['section2_btn-text']; ?></span>
							            <span><?php echo $katapub['section2_btn-hover-text']; ?></span>
							        </div>
							        <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
							    </div>
							</a>
					    </div>
				</section>	
				
				
			</div>
		</div>
	</div>




	<div class="section" style="background-color: <?php echo $katapub['section4_bg']['background-color']; ?>; background-image: url(<?php echo $katapub['section4_bg']['background-image']; ?>); background-size: cover; background-position: center;" id="section0">

		<?php if(!empty($katapub['s4_video_bg'])) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['s4_video_bg']; ?>" type="video/mp4">
		</video>
		<?php endif; ?>

		<div class="layer">
			<div class="container " style="height:100vh;">
				
					<img style="display: block;margin:100px auto 0px;" src="<?php echo $katapub['s4_brand']['url']; ?>" alt="">
				<section class="section-content">
					    <div style="margin: 150px auto 0px" class="btn-center">

					    	<a href="<?php echo $katapub['s4_btn_link']; ?>">
							    <div style="" class="buttonNew">       
							        <div class="button-title">
							            <span><?php echo $katapub['s4_btn_text']; ?></span>
							            <span><?php echo $katapub['s4_btn_text_hov']; ?></span>
							        </div>
							        <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
							    </div>
							</a>
					    </div>
				</section>
				
			</div>
		</div>
	</div>





	<div class="section" style="background-color: <?php echo $katapub['section4_bg']['background-color']; ?>; background-image: url(<?php echo $katapub['section4_bg']['background-image']; ?>); background-size: cover; background-position: center;" id="section0">


		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo get_template_directory_uri(); ?>/videos/mohila2.mp4" type="video/mp4">
		</video>


		<div class="layer">
			<div class="container " style="height:100vh;">
				
					<img style="display: block;margin:100px auto 0px;" src="<?php echo get_template_directory_uri(); ?>/img/logoVF.png" alt="">
				<section class="section-content">
					    <div style="margin: 150px auto 0px" class="btn-center">

					    	<a href="<?php echo $katapub['s4_btn_link']; ?>">
							    <div style="" class="buttonNew">       
							        <div class="button-title">
							            <span><?php echo $katapub['s4_btn_text']; ?></span>
							            <span><?php echo $katapub['s4_btn_text_hov']; ?></span>
							        </div>
							        <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
							    </div>
							</a>
					    </div>
				</section>
				
			</div>
		</div>
	</div>



	<div class="section" style="background-color: <?php echo $katapub['section4_bg']['background-color']; ?>; background-image: url(<?php echo $katapub['section4_bg']['background-image']; ?>); background-size: cover; background-position: center;" id="section0">


		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo get_template_directory_uri(); ?>/videos/paint.mp4" type="video/mp4">
		</video>


		<div class="layer">
			<div class="container " style="height:100vh;">
				
					<img style="display: block;margin:100px auto 0px;" src="<?php echo get_template_directory_uri(); ?>/img/logoVF.png" alt="">
				<section class="section-content">
					    <div style="margin: 150px auto 0px" class="btn-center">

					    	<a href="<?php echo $katapub['s4_btn_link']; ?>">
							    <div style="" class="buttonNew">       
							        <div class="button-title">
							            <span><?php echo $katapub['s4_btn_text']; ?></span>
							            <span><?php echo $katapub['s4_btn_text_hov']; ?></span>
							        </div>
							        <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
							    </div>
							</a>
					    </div>
				</section>
				
			</div>
		</div>
	</div>





	<div class="section" style="background-color: <?php echo $katapub['section4_bg']['background-color']; ?>; background-image: url(<?php echo get_template_directory_uri(); ?>/img/alainImg.jpg); background-size: cover; background-position: center;" id="section0">




		<div class="layer">
			<div class="container " style="height:100vh;">
				
					<img style="display: block;margin:100px auto 0px;" src="<?php echo get_template_directory_uri(); ?>/img/logoVF.png" alt="">
				<section class="section-content">
					    <div style="margin: 150px auto 0px" class="btn-center">

					    	<a href="<?php echo $katapub['s4_btn_link']; ?>">
							    <div style="" class="buttonNew">       
							        <div class="button-title">
							            <span><?php echo $katapub['s4_btn_text']; ?></span>
							            <span><?php echo $katapub['s4_btn_text_hov']; ?></span>
							        </div>
							        <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
							    </div>
							</a>
					    </div>
				</section>
				
			</div>
		</div>
	</div>




	<div class="section" style="background-color: <?php echo $katapub['section4_bg']['background-color']; ?>; background-image: url(<?php echo get_template_directory_uri(); ?>/img/Plante.jpg); background-size: cover; background-position: center;" id="section0">




		<div class="layer">
			<div class="container " style="height:100vh;">
				
					<img style="display: block;margin:100px auto 0px;" src="<?php echo get_template_directory_uri(); ?>/img/logoVF.png" alt="">
				<section class="section-content">
					    <div style="margin: 150px auto 0px" class="btn-center">

					    	<a href="<?php echo $katapub['s4_btn_link']; ?>">
							    <div style="" class="buttonNew">       
							        <div class="button-title">
							            <span><?php echo $katapub['s4_btn_text']; ?></span>
							            <span><?php echo $katapub['s4_btn_text_hov']; ?></span>
							        </div>
							        <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
							    </div>
							</a>
					    </div>
				</section>
				
			</div>
		</div>
	</div>



	<div class="section" style="background-color: <?php echo $katapub['section4_bg']['background-color']; ?>; background-image: url(<?php echo get_template_directory_uri(); ?>/img/festivale.png); background-size: cover; background-position: center;" id="section0">




		<div class="layer">
			<div class="container " style="height:100vh;">
				
					<img style="display: block;margin:100px auto 0px;" src="<?php echo get_template_directory_uri(); ?>/img/logoVF.png" alt="">
				<section class="section-content">
					    <div style="margin: 150px auto 0px" class="btn-center">

					    	<a href="<?php echo $katapub['s4_btn_link']; ?>">
							    <div style="" class="buttonNew">       
							        <div class="button-title">
							            <span><?php echo $katapub['s4_btn_text']; ?></span>
							            <span><?php echo $katapub['s4_btn_text_hov']; ?></span>
							        </div>
							        <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
							    </div>
							</a>
					    </div>
				</section>
				
			</div>
		</div>
	</div>



	<div class="section" style="background-color: <?php echo $katapub['section4_bg']['background-color']; ?>; background-image: url(<?php echo $katapub['section4_bg']['background-image']; ?>); background-size: cover; background-position: center;" id="section0">


		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo get_template_directory_uri(); ?>/videos/ama.mp4" type="video/mp4">
		</video>


		<div class="layer">
			<div class="container " style="height:100vh;">
				
					<img style="display: block;margin:100px auto 0px;" src="<?php echo get_template_directory_uri(); ?>/img/logoVF.png" alt="">
				<section class="section-content">
					    <div style="margin: 150px auto 0px" class="btn-center">

					    	<a href="<?php echo $katapub['s4_btn_link']; ?>">
							    <div style="" class="buttonNew">       
							        <div class="button-title">
							            <span><?php echo $katapub['s4_btn_text']; ?></span>
							            <span><?php echo $katapub['s4_btn_text_hov']; ?></span>
							        </div>
							        <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
							    </div>
							</a>
					    </div>
				</section>
				
			</div>
		</div>
	</div>





	<div class="section" style="background-color: <?php echo $katapub['section4_bg']['background-color']; ?>; background-image: url(<?php echo get_template_directory_uri(); ?>/img/headerExpo.jpg); background-size: cover; background-position: center;" id="section0">




		<div class="layer">
			<div class="container " style="height:100vh;">
				
					<img style="display: block;margin:100px auto 0px;" src="<?php echo get_template_directory_uri(); ?>/img/logoVF.png" alt="">
				<section class="section-content">
					    <div style="margin: 150px auto 0px" class="btn-center">

					    	<a href="<?php echo $katapub['s4_btn_link']; ?>">
							    <div style="" class="buttonNew">       
							        <div class="button-title">
							            <span><?php echo $katapub['s4_btn_text']; ?></span>
							            <span><?php echo $katapub['s4_btn_text_hov']; ?></span>
							        </div>
							        <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
							    </div>
							</a>
					    </div>
				</section>
				
			</div>
		</div>
	</div>




















	<div class="section " id="section0" style="background-color: <?php echo $katapub['fbgc']; ?>;">
		<div class="layer">
			<div class="container sec-footer" style="height:100vh;">
							<div class="line-effects" style="height:100vh; position: relative; top:-3vh;left: -44vh;">	  
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