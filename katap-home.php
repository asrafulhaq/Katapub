<?php global $katapub; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Katapub &#8211; Agence créative pour construire votre marque.Logo,site web,vidéo,design,événement&#8230; </title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage full-screen background videos." />
	<meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,video,full-screen" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/katapa/katapub-Rainbow.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
	<style>

	/* Style for our header texts
	* --------------------------------------- */
	h1{
		font-size: 5em;
		font-family: arial,helvetica;
		color: #fff;
		margin:0;
		padding:0;
	}

	/* Centered texts in each section
	* --------------------------------------- */
	.section{
		
		overflow: hidden;
	}

	#myVideo{
		position: absolute;
		right: 0;
		bottom: 0;
		top:0;
		right:0;
		width: 100%;
		height: 100%;
		background-size: 100% 100%;
 		background-color: black; /* in case the video doesn't fit the whole page*/
  		background-image: /* our video */;
  		background-position: center center;
  		background-size: contain;
   		object-fit: cover; /*cover video background */
   		z-index:3;
	}


	/* Layer with position absolute in order to have it over the video
	* --------------------------------------- */
	#section0 .layer{
		position: absolute;
		z-index: 4;
		width:100%;

		/*
		* Preventing flicker on some browsers
		* See http://stackoverflow.com/a/36671466/1081396  or issue #183
		*/
		-webkit-transform: translate3d(0,0,0);
		-ms-transform: translate3d(0,0,0);
		transform: translate3d(0,0,0);
	}

	/*solves problem with overflowing video in Mac with Chrome */
	#section0{
		overflow: hidden;
	}

	/* Bottom menu
	* --------------------------------------- */
	#infoMenu li a {
		color: #fff;
	}

	/* Hiding video controls
	* See: https://css-tricks.com/custom-controls-in-html5-video-full-screen/
	* --------------------------------------- */
	video::-webkit-media-controls {
	  display:none !important;
	}

	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
</head>
<body>

<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="logo">
					<a href="#"><img style="width:<?php echo $katapub['logo-width']; ?>;" src="<?php echo  $katapub['logo-upload']['url']; ?>" alt=""></a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="menu-res">
					<a href="#">MENU <i class="fa fa-bars"></i></a>
				</div>
				<div class="main-menu">
					<ul>
						<li><a href="#">Projets</a></li>
						<li><a href="#">Agence</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Job</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

    
    
    

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

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/TweenMax.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fullpage.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/examples.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pong.js"></script>
<script type="text/javascript">


		new WOW().init();

	    var myFullpage = new fullpage('#fullpage', { 
	        
			navigation: true,

	    });


    	$.fn.parallax = function(resistance, mouse) {
          $el = $(this);
          TweenLite.to($el, 0.2, {
            x: -((mouse.clientX - window.innerWidth / 2) / resistance),
            y: -((mouse.clientY - window.innerHeight / 2) / resistance)
          });
        };

        $(document).mousemove(function(e) {

          $(".btnVFRond").parallax(30, e);
         });



        $('.menu-res a').click(function(){
        	$('.main-menu').toggle(400);
        	return false;
        });







$('#subs_form').submit(function(e){

    e.preventDefault();

    let subs = $('input#inp').val();

    let mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if ( mail.test(subs) ) {
        
        $('#form_effect').show();
        $('.inp span.border').hide();
        $('.inp svg').hide();
        $('.inp input').attr('disabled', '');
        $('.inp input').val('');

        setTimeout(function(){
           $('#form_effect').remove();
          // $('#mmmsg').html('Merci de vous etre abonne');
          $('#sub_eff').html('<i class="ti-check" aria-hidden="true"></i>').css('color', 'green').css('cursor', 'inherit').css('font-size', '24px').css('top', '-13px');
        }, 1000);
    }else {

        alert('Invalid email address !');

    }


});


$('#sub_eff').click(function(e){

    e.preventDefault();

    let subs = $('input#inp').val();

    let mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if ( mail.test(subs) ) {
        
        $('#form_effect').show();
        $('.inp span.border').hide();
        $('.inp svg').hide();
        $('.inp input').attr('disabled', '');
        $('.inp input').val('');

        setTimeout(function(){
           $('#form_effect').remove();
          // $('#mmmsg').html('Merci de vous etre abonne');
          $('#sub_eff').html('<i class="ti-check" aria-hidden="true"></i>').css('color', 'green').css('cursor', 'inherit').css('font-size', '24px').css('top', '-13px').css('margin-top', '24px');

        }, 1000);
    }else {

        alert('Invalid email address !');

    }


});





</script>

</body>
</html>