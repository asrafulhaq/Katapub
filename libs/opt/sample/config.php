<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "katapub";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Katapub Settings', 'redux-framework-demo' ),
        'page_title'           => __( 'Katapub Settings', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => false,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => false,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => false,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => false,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

   



    
  


    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */


    Redux::setSection($opt_name, [
        'title'             => 'General Options'
    ]);



    Redux::setSection($opt_name, [
        'title'             => 'Logo',
        'subsection'        => true,
        'fields'            => [
            [
                'title'         => 'Upload a Logo',
                'id'            => 'logo-upload',
                'type'          => 'media',
                'default'       => [
                    'url'       => get_template_directory_uri() . "/img/katablack.png",
                ]
            ],
             [
                'title'         => 'Logo Width',
                'id'            => 'logo-width',
                'type'          => 'text',
                'default'       => '95px'
            ]
        ]
    ]);

    Redux::setSection($opt_name, [
        'title'             => 'Home page Settings',
        'icon'              => 'el el-heart-empty',
        'fields'            => [

            [
                'title'         => 'Sectioin 1 Heading',
                'id'            => 's1-heading',
                'type'          => 'textarea',
                'default'       =>  'On trouve parfois ce qu\'on ne charchait pas'
            ],
            [
                'title'         => 'Sectioin 1 Subheading',
                'id'            => 's1-subheading',
                'type'          => 'textarea',
                'default'       =>  'Montréal - Saguenay'
            ],
            [
                'title'         => 'Sectioin 1 Background Video URL',
                'id'            => 'section_bg_video',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/eff01.mp4'
            ],

            [
                'title'         => 'Sectioin 2 Background Video URL',
                'id'            => 'section2_bg_video',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/eff02.mp4'
            ],
            [
                'title'         => 'Sectioin 2 Button Text',
                'id'            => 'section2_btn-text',
                'type'          => 'text',
                'default'       => 'Projet'
            ],
            [
                'title'         => 'Sectioin 2 Button Hover Text',
                'id'            => 'section2_btn-hover-text',
                'type'          => 'text',
                'default'       => 'On y va !'
            ],
            [
                'title'         => 'Section 3 Background Image',
                'id'            => 's3-bg-img',
                'type'          => 'media',
                'default'       => [
                    'url'       => get_template_directory_uri() . '/img/w.gif'
                ]
            ],

            [
                'title'         => 'Sectioin 3 Grabing text',
                'id'            => 's3_grab_text',
                'type'          => 'text',
                'default'       => 'Nos projets'
            ],
            [
                'title'         => 'Sectioin 3 Grabing bg color',
                'id'            => 's3_grab_bg',
                'type'          => 'color',
                'default'       => '#FFF'
            ],
            [
                'title'         => 'Sectioin 3 Grabing bg Hover color',
                'id'            => 's3_grab_bg_hov',
                'type'          => 'color',
                'default'       => '#000'
            ],
            [
                'title'         => 'Sectioin 4 Video',
                'id'            => 's4_video_bg',
                'type'          => 'text',
                'default'       => get_template_directory_uri() . '/videos/eff04.mp4'
                
            ],
            [
                'title'         => 'Sectioin 4 Brand',
                'id'            => 's4_brand',
                'type'          => 'media',
                'default'       => [
                    'url'       => get_template_directory_uri() . '/img/logo5.png'
                ]
                
            ],
            [
                'title'         => 'Sectioin 4 Button Text',
                'id'            => 's4_btn_text',
                'type'          => 'text',
                'default'       => 'Projet'
                
            ],
            [
                'title'         => 'Sectioin 4 Button Hover Text',
                'id'            => 's4_btn_text_hov',
                'type'          => 'text',
                'default'       => 'On y va !'
                
            ],
            [
                'title'         => 'Sectioin 4 Button link',
                'id'            => 's4_btn_link',
                'type'          => 'text',
                'default'       => '#'
                
            ],

            [
                'title'         => 'Sectioin 5 Heading',
                'id'            => 's5_heading',
                'type'          => 'editor',
                'default'       => 'La balle est dans ton camp'
                
            ],
           
            
        ]

    ]);


    Redux::setSection($opt_name, [
        'title'             => 'Footer Settings',
        'icon'              => 'el el-heart-empty',
        'fields'            => [

            [
                'title'         => 'Footer Heading',
                'id'            => 'f-heading',
                'type'          => 'editor',
                'default'       =>  'Par ici pour notre infolettre'
            ],
            [
                'title'         => 'Footer Sub Heading',
                'id'            => 'f-subheading',
                'type'          => 'editor',
                'default'       =>  'ON FAIT LES AVANCES VOUS LES PREMIERS PAS. CONTACT'
            ],

            [
                'title'         => 'Footer Logo',
                'id'            => 'logo-footer-upload',
                'type'          => 'media',
                'default'       => [
                    'url'       => get_template_directory_uri() . "/img/katablack.png",
                ]
            ],
            [
                'title'         => 'Copyright Text',
                'id'            => 'ct',
                'type'          => 'editor',
                'default'       =>  'Copyright 2020 Katapub'
            ],
            [
                'title'         => 'Footer background color',
                'id'            => 'fbgc',
                'type'          => 'color',
                'default'       => '#FFF' 
            ]
        ]

    ]);

     Redux::setSection($opt_name, [
        'title'             => 'Social Icons',
        'icon'              => 'el el-heart-empty',
        'fields'            => [
            [
                'title'         => 'Facebook',
                'id'            => 'fb',
                'type'          => 'text'
            ],
            [
                'title'         => 'Instagram',
                'id'            => 'insta',
                'type'          => 'text'
            ],
            [
                'title'         => 'LinkedIn',
                'id'            => 'lin',
                'type'          => 'text'
            ],
            [
                'title'         => 'Mail',
                'id'            => 'mail',
                'type'          => 'text'
            ]
        ]

    ]);

    Redux::setSection($opt_name, [
        'title'             => 'Custom Code',
        'icon'              => 'el el-star-empty',
        'fields'            => [
            [
                'title'         => 'Custom CSS',
                'id'            => 'cccsss',
                'type'          => 'ace_editor',
                'theme'         => 'IDLE',
                'mode'          => 'css'
            ],
            [
                'title'         => 'Custom JS',
                'id'            => 'cccjjj',
                'type'          => 'ace_editor',
                'theme'         => 'IDLE',
                'mode'          => 'js'
            ]
        ]

    ]);











