<?php 

global $katapub; 

?>
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
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/thimify/themify-icons.css" />
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

	<!-- PRELOADER START -->
    
	<div id="load_screen">
		<div id="loading">
			<img class="loading_img" src="<?php echo get_template_directory_uri(); ?>/img/load1.gif" alt=""> <br />
		</div> <!-- end loading div -->
	</div> <!-- end load_screen div -->
	
    <!-- PRELOADER END -->

<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="logo">
					<a href="<?php echo  get_home_url(); ?>"><img style="width:<?php echo $katapub['logo-width']; ?>;" src="<?php echo  $katapub['logo-upload']['url']; ?>" alt=""></a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="menu-res">
					<a href="#">MENU <i class="fa fa-bars"></i></a>
				</div>
				<div class="main-menu">
					<?php  

						wp_nav_menu([
							'theme_location'	=> 'main-menu'
						]);

					?>

					


				</div>
			</div>
		</div>
	</div>
</div>

    
    