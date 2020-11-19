<?php 


/*
	template name: Katapub Agency
*/


get_header(); 


?>
    

<div id="fullpage">


	<!-- ---------------- -->
	<div class="section" style="background-color: <?php echo $katapub['asection_bg']['background-color']; ?>; background-image: url(<?php echo $katapub['asection_bg']['background-image']; ?>); background-position: center; background-size: cover;" id="section0">


		<?php if(!empty($katapub['asection_bg_video'])) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['asection_bg_video']; ?>" >
		</video>
		<?php endif; ?>


		<div class="layer">
			<div class="container rak" style="height:100vh;">
					
					<div class="round"></div>
					
					<div class="banner-content">
						<h1 class="wow <?php echo $katapub['as1-heading-animation']; ?>" style="margin-top:25vh;font-weight:<?php echo $katapub['as1-heading-style']['font-weight']; ?>; font-size:<?php echo $katapub['as1-heading-style']['font-size']; ?>;color:<?php echo $katapub['as1-heading-style']['color']; ?>;"><?php echo $katapub['as1-heading']; ?>

						 </h1>
						<h4 class="wow <?php echo $katapub['as1-subheading-animation']; ?>" style="margin-top:5vh;font-weight:300;font-size:24px;color:#FFF;"><?php echo $katapub['as1-subheading']; ?></h1>
					</div>

				
				
			</div>
		</div>
	</div>


	<!-- ------------------------ -->
	<div id="particles-js" class="section partical" style="background-color: <?php echo $katapub['asection2_bg']['background-color']; ?>; background-image: url(<?php echo $katapub['asection2_bg']['background-image']; ?>); background-position: center; background-size: cover; position: relative;">


		<?php if(!empty($katapub['asection2_bg_video'])) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['asection2_bg_video']; ?>" >
		</video>
		<?php endif; ?>


		<div id="" class="layer">
			<div class="container" style="height:100vh;">

					
					<div style="z-index:99999999999;" class="banner-content" id="">
						<h1 class=" wow<?php echo $katapub['as2-heading-animation']; ?>" style="margin-top:25vh;font-weight:<?php echo $katapub['as2-heading-style']['font-weight']; ?>; font-size:<?php echo $katapub['as2-heading-style']['font-size']; ?>;color:<?php echo $katapub['as2-heading-style']['color']; ?>; z-index:99999999999;"><?php echo $katapub['as2-heading']; ?>



						 </h1>
	
					</div>

				
				
			</div>
		</div>
	</div>

	<!-- ---------------------- -->
	<div id="particles-js" class="section" style="background-color: #EAECED;">


		

		    

		<div id="" class="layer">
			<div class="container " style="height:100vh;">

						<style>
							.elastic canvas {
								height: 60vh !important;
							}
							.p-col {
								height: 60vh !important;
							}

							

						</style>

						<div class="line-effects" style="height:100vh; position: absolute; top:30px;left: 0px;right:0px; margin:auto;">	  
							<a style="display: none;" rel="noopener" aria-label="sound" href="#" class="sound soundtoggler w-inline-block"></a>
						                 

				                <main class="p-grid scroller art-book" style=""> 

									<a id="art-book-a" style="transform: translate(510px, -17px); height: 100vh; width: 0px; z-index:999999999999999;" rel="noopener" href="" class="p-col pagelink w-inline-block">		                             
				                         <div class="elastic elasticbox"></div>
				                    </a> 
				                    <a id="art-book-a" style="transform:translate(815px, -17px); width: 0px; height: 100vh; z-index:9999999999;" rel="noopener" href="" class="p-col pagelink w-inline-block">		                             
				                         <div class="elastic elasticbox"></div>
				                    </a> 

				                    <a id="art-book-a" style="transform:translate(1105px, -17px); width: 0px; height: 100vh; z-index:9999999999;" rel="noopener" href="" class="p-col pagelink w-inline-block">		                             
				                         <div class="elastic elasticbox"></div>
				                    </a> 

				                    <a id="art-book-a" style="transform:translate(1409px, -17px); width: 0px; height: 100vh; z-index:9999999999;" rel="noopener" href="" class="p-col pagelink w-inline-block">		                             
				                         <div class="elastic elasticbox"></div>
				                    </a> 

								</main>

						</div>


				<div class="team" style="transform: translate(0px, 18vh); z-index:0000;">
					<div class="team-member">
						<img src="<?php echo get_template_directory_uri(); ?>/img/team/01.png" alt="">
						<h3>Emilie <br> Fillion</h3>
						<p>Présidente <br> Directrice à la création</p>
						<div class="btn-team"></div>
					</div>

					<div class="team-member">
						<img src="<?php echo get_template_directory_uri(); ?>/img/team/02.png" alt="">
						<h3>Sylvain  <br> Thériault</h3>
						<p>Directeur artistique <br> Designer graphique</p>
						<div class="btn-team"></div>
					</div>

					<div class="team-member">
						<img src="<?php echo get_template_directory_uri(); ?>/img/team/03.png" alt="">
						<h3>Ghislain  <br> Dufour</h3>
						<p>Stratège  <br> com</p>
						<div class="btn-team"></div>
					</div>
					
				</div>
				
				
			</div>
		</div>
	</div>


		<div id="particles-js" class="section" style="background-color: #EAECED;">




		<div id="" class="layer">
			<div class="container" style="height:100vh;">

						<div class="line-effects" style="height:100vh; position: absolute; top:30 px;left: 0px;right:0px; margin:auto;">	  
							<a style="display: none;" rel="noopener" aria-label="sound" href="#" class="sound soundtoggler w-inline-block"></a>
						                 
				                <style>
				                	.elastic canvas {
				                		height: 60vh !important;
				                	}
				                	.p-col {
				                		height: 60vh !important;
				                	}
				                </style>
				                <main class="p-grid scroller" style=""> 

									<a id="art-book-a" style="transform: translate(510px, -17px); height: 100vh; width: 0px; z-index:999999999999999;" rel="noopener" href="" class="p-col pagelink w-inline-block">		                             
				                         <div class="elastic elasticbox"></div>
				                    </a> 
				                    <a id="art-book-a" style="transform:translate(815px, -17px); width: 0px; height: 100vh; z-index:9999999999;" rel="noopener" href="" class="p-col pagelink w-inline-block">		                             
				                         <div class="elastic elasticbox"></div>
				                    </a> 

				                    <a id="art-book-a" style="transform:translate(1105px, -17px); width: 0px; height: 100vh; z-index:9999999999;" rel="noopener" href="" class="p-col pagelink w-inline-block">		                             
				                         <div class="elastic elasticbox"></div>
				                    </a> 

				                    <a id="art-book-a" style="transform:translate(1409px, -17px); width: 0px; height: 100vh; z-index:9999999999;" rel="noopener" href="" class="p-col pagelink w-inline-block">		                             
				                         <div class="elastic elasticbox"></div>
				                    </a> 

								</main>

						</div>

				<div class="team">
					<div class="team-member">
						<img src="<?php echo get_template_directory_uri(); ?>/img/team/04.png" alt="">
						<h3>Emilie <br> Fillion</h3>
						<p>Présidente <br> Directrice à la création</p>
						<div class="btn-team"></div>
					</div>

					<div class="team-member">
						<img src="<?php echo get_template_directory_uri(); ?>/img/team/05.png" alt="">
						<h3>Emilie <br> Fillion</h3>
						<p>Présidente <br> Directrice à la création</p>
						<div class="btn-team"></div>
					</div>

					<div class="team-member">
						<img src="<?php echo get_template_directory_uri(); ?>/img/team/06.png" alt="">
						<h3>Emilie <br> Fillion</h3>
						<p>Présidente <br> Directrice à la création</p>
						<div class="btn-team"></div>
					</div>
					
				</div>
				
				
			</div>
		</div>
	</div>










	<div class="section" id="" style="background-color: <?php echo $katapub['fbgc']; ?>;">
		<div class="layer">
			<div class="container sec-footer " style="height:100vh;">
					

							<div class="line-effects" style="height:100vh; position: relative; top:18px; left: -44vh;">	  
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
								<ul>
									<li><a href="#">Projets</a></li>
									<li><a href="#">Agence</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Job</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
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