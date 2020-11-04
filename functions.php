<?php  



		function katap_action(){


			// ALL SUPPORTS ================= >
			add_theme_support('menus');
			add_theme_support('widgets');
			add_theme_support('custom-header');
			add_theme_support('custom-background');
			add_theme_support('custom-logo');
			add_theme_support('post-formats', ['video','audio','gallery']);
			add_theme_support('post-thumbnails');
			add_theme_support('title-tag');



			// NAV MENU ================= >
			register_nav_menus([
				'main-menu'				=> 'Main Menu',
				'footer-menu'			=> 'Footer Menu',
			]);


			// MENU POST TYPE ================= >
			// register_post_type('zitaly-menu', [
			// 	'public'			=> true,
			// 	'labels'			=> [
			// 		'name'			=> 'MENU',
			// 		'all_items'		=> 'All Menu',
			// 		'add_new'		=> 'Add new Menu',
			// 		'add_new_item'	=> 'Add new Menu',

			// 	],
			// 	'supports'			=> ['title'],
			// 	'menu_icon'			=>  get_template_directory_uri(). '/images/alobaji.png'

			// ]);


						

		}


		add_action('after_setup_theme','katap_action');


		add_action('wp_enqueue_scripts','katap_enqueue_file');
		function katap_enqueue_file(){



			// wp_enqueue_style('zItaly-zerogrid', get_template_directory_uri(). '/css/zerogrid.css');
			// wp_enqueue_style('zItaly-style', get_template_directory_uri(). '/css/style.css');
			// wp_enqueue_style('zItaly-slide', get_template_directory_uri(). '/css/slide.css');
			// wp_enqueue_style('zItaly-menu', get_template_directory_uri(). '/css/menu.css');
			// wp_enqueue_style('zItaly-font-awesome', get_template_directory_uri(). '/font-awesome/css/font-awesome.min.css');
			// wp_enqueue_style('zItaly-main-style', get_stylesheet_uri());

			
			// wp_enqueue_script('jquery');
			// wp_enqueue_script('zItaly-classie', get_template_directory_uri(). '/js/classie.js',['jquery'], NULL, true);
			// wp_enqueue_script('zItaly-demo', get_template_directory_uri(). '/js/demo.js',['jquery'], NULL, true);
			

			// wp_enqueue_script('zItaly-responsiveslides', get_template_directory_uri(). '/js/responsiveslides.min.js',['jquery'], NULL, true);
			// wp_enqueue_script('zItaly-script', get_template_directory_uri(). '/js/script.js',['jquery'], NULL, true);

		}


		add_action('admin_enqueue_scripts','zItaly_enqueue_file_admin');
		function zItaly_enqueue_file_admin(){

			wp_enqueue_script('zItaly-admin', get_template_directory_uri(). '/js/admin.js');

		}



		// add_action('widgets_init','zItaly_widget_setup'); 
		// function zItaly_widget_setup(){

		// 	register_sidebar([
		// 		'name'			=> 'Right Sidebar',
		// 		'id'			=> 'right-bar',
		// 		'before_widget'	=> '<div class="widget">',
		// 		'after_widget'	=> '</div>',
		// 		'before_title'	=> '<div class="wid-header"><h5>',
		// 		'after_title'	=> '</h5></div>',
		// 	]);


		// 	register_sidebar([
		// 		'name'			=> 'footer Sidebar',
		// 		'id'			=> 'footer-bar',
		// 		'before_widget'	=> '<div class="col-1-3"><div class="wrap-col">',
		// 		'after_widget'	=> '</div></div>',
		// 		'before_title'	=> '<h4>',
		// 		'after_title'	=> '</h4>',
		// 	]);

		// 	register_widget('zItaly_about_us');
		// 	register_widget('zItaly_popular_food');
		// 	register_widget('zItaly_gallery');
		// 	register_widget('zItaly_testi');
		// 	register_widget('zItaly_map');
		// 	register_widget('zItaly_open');


		// }



		// Redux  file link
		require_once "libs/opt/ReduxCore/framework.php";
		require_once "libs/opt/sample/config.php";


		// CMB2 file link
		require_once "libs/cmb/init.php";
		require_once "libs/cmb/config.php";


		// TGM file link
		require_once "libs/tgm/example.php";


		// widgets file link
		require_once "libs/widget/zItaly-about.php";
		require_once "libs/widget/zItaly-popular-food.php";
		require_once "libs/widget/zItaly-gallery.php";
		require_once "libs/widget/zItaly-testi.php";
		require_once "libs/widget/zItaly-map.php";
		require_once "libs/widget/zItaly-open.php";

		

		// Shortcode file link
		require_once "libs/shortcode/zitaly-food-menu.php";
		require_once "libs/shortcode/zitaly-food-team.php";
		require_once "libs/shortcode/zitaly-food-news.php";
		require_once "libs/shortcode/zitaly-food-gallery.php";
		require_once "libs/shortcode/zitaly-food-map.php";
		require_once "libs/shortcode/zitaly-food-address.php";
		require_once "libs/shortcode/zitaly-food-feature-post.php";
		require_once "libs/shortcode/zitaly-food-reservation-info.php";
		require_once "libs/shortcode/zitaly-food-reservation-form.php";


?>