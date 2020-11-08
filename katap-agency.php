<?php 


/*
	template name: Katapub Agency
*/


get_header(); 


?>
    

<div id="fullpage">


	
	<div class="section " id="section0">
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['section_bg_video']; ?>" >
		</video>
		<div class="layer">
			<div class="container rak" style="height:100vh;">
					
					<div class="round"></div>
					
					<div class="banner-content">
						<h1 class="wow <?php echo $katapub['s1-heading-animation']; ?>" style="margin-top:25vh;font-weight:<?php echo $katapub['s1-heading-style']['font-weight']; ?>; font-size:<?php echo $katapub['s1-heading-style']['font-size']; ?>;color:<?php echo $katapub['s1-heading-style']['color']; ?>;"><?php echo $katapub['s1-heading']; ?>

						 </h1>
						<h4 class="wow <?php echo $katapub['s1-subheading-animation']; ?>" style="margin-top:5vh;font-weight:300;font-size:24px;color:#FFF;"><?php echo $katapub['s1-subheading']; ?></h1>
					</div>

				
				
			</div>
		</div>
	</div>

	<div class="section" style="background-color: <?php echo $katapub['section2_bg']['background-color']; ?>; background-image: url(<?php echo $katapub['section2_bg']['background-image']; ?>); background-position: center; background-size: cover;" id="section0">
		<?php if( !empty($katapub['section2_bg_video'] ) ) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['section2_bg_video']; ?>" type="video/mp4">
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

	<div class="section " style="background-color: <?php echo $katapub['section3_bg']['background-color']; ?> ; background-image: url(<?php echo $katapub['section3_bg']['background-image']; ?>); background-position: center center; background-size: cover;" id="section0">



		<?php if(!empty($katapub['section3_bg_video'])) : ?>
		<video id="myVideo" loop muted data-autoplay>
			<source src="<?php echo $katapub['section3_bg_video']; ?>" type="video/mp4">
		</video>
		<?php endif; ?>



		<div class="layer">
			<div class="container rak-black" style="height:100vh;">

				
				<div class="section content">
					<style>

						.btnVFRond:hover {
						    background-color: <?php echo $katapub['s3_grab_bg_hov']; ?> !important;
						    color: #FFF !important;
						}

					</style>
					<a href="#" class="LinkBtnRond"><div style="background-color:<?php echo $katapub['s3_grab_bg']; ?>;" class="btnVFRond"><h4><?php echo $katapub['s3_grab_text']; ?><h4></div></a>

				</div>
				
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



	<div class="section " id="section0" style="background-color: #202020;">
		<div class="layer">
			<div class="container rak-red" style="height:100vh;">
					
					
					<div class="banner-content game-text">
						<h1 style="margin-top:5vh;font-weight:700;font-size:6.5em; line-height:72px;color:#FFF;"><?php echo nl2br($katapub['s5_heading']); ?></h1>
						<canvas id="pong" width="898" height="400"></canvas>
						<div style="margin: 40vh auto 0px; width: 172%;" class="btn-right game-sec" >

					    	<a href="#">
							    <div style="" class="buttonNew">       
							        <div class="button-title">
							            <span>Projet</span>
							            <span>On y va !</span>
							        </div>
							        <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
							    </div>
							</a>
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