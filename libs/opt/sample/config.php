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
                'title'         => 'Sectioin 1 Heading style',
                'id'            => 's1-heading-style',
                'type'          => 'typography',
                'default'       => [
                    'color'         => '#FFF',
                    'font-size'     => '6.5',
                    'font-style'    => '700',
                    'font-family'   => 'Hind Siliguri',
                    'text-align'    => 'left',
                ],
                'units'         => 'em'
                
            ],
            [
                'title'         => 'Sectioin 1 Heading Animation effect',
                'id'            => 's1-heading-animation',
                'type'          => 'select',
                'options'       => [
                    'none'                      => 'None',
                    'fadeInDown'            => 'fadeInDown',
                    'fadeInUp'              => 'fadeInUp',
                    'fadeInLeft'            => 'fadeInLeft',
                    'fadeInRight'           => 'fadeInRight',
                    'bounceInDown'            => 'bounceInDown',
                    'bounceInUp'              => 'bounceInUp',
                    'bounceInLeft'            => 'bounceInLeft',
                    'bounceInRight'           => 'bounceInRight',
                ],
                'default'          => 'none'   
            ],
            

            [
                'title'         => 'Sectioin 1 Subheading',
                'id'            => 's1-subheading',
                'type'          => 'textarea',
                'default'       =>  'Montréal - Saguenay'
            ],
            [
                'title'         => 'Sectioin 1 Subheading Animation effect',
                'id'            => 's1-subheading-animation',
                'type'          => 'select',
                'options'       => [
                    'none'                      => 'None',
                    'fadeInDown'            => 'fadeInDown',
                    'fadeInUp'              => 'fadeInUp',
                    'fadeInLeft'            => 'fadeInLeft',
                    'fadeInRight'           => 'fadeInRight',
                ],
                'default'          => 'none'   
            ],
            [
                'title'         => 'Sectioin 1 Video',
                'id'            => 'section_bg_video',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/eff01.mp4'
            ],
            [
                'title'         => 'Sectioin 1 Mobile Video',
                'id'            => 'hs1-mvideo',
                'type'          => 'text',
            ],
            [
                'title'         => 'Sectioin 1 Background ( Image / Color )',
                'id'            => 'section2_bg',
                'type'          => 'background',
            ],














            [
                'title'         => 'Sectioin 2 Video',
                'id'            => 'section2_bg_video',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/eff02.mp4'
            ],
            [
                'title'         => 'Sectioin 2 Mobile Video',
                'id'            => 'hs2-mvideo',
                'type'          => 'text',
            ],
            [
                'title'         => 'Sectioin 2 Background ( Image / Color )',
                'id'            => 'section2_bg',
                'type'          => 'background',
            ],
            [
                'title'         => 'Section 2 Button Text',
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
                'title'         => 'Sectioin 2 Button Link',
                'id'            => 'hs2-btn-link',
                'type'          => 'text',
                'default'       => ''
            ],









            [
                'title'         => 'Sectioin 3 Video',
                'id'            => 'section3_bg_video',
                'type'          => 'text',
            ],
            [
                'title'         => 'Sectioin 3 Mobile Video',
                'id'            => 'hs3-mvideo',
                'type'          => 'text',
            ],
            [
                'title'         => 'Sectioin 3 Background ( Image / Color )',
                'id'            => 'section3_bg',
                'type'          => 'background',
                'default'       => [
                    'background-image'      =>  get_template_directory_uri().'/img/w.gif',
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
                'title'         => 'Sectioin 3 Side Text',
                'id'            => 'hs3-text-side',
                'type'          => 'editor',
                'default'       => 'SUIVEZ
NOS PROJETS
Nos projets'
            ],







            [
                'title'         => 'Sectioin 4 Video',
                'id'            => 's4_video_bg',
                'type'          => 'text',
                'default'       => get_template_directory_uri() . '/videos/eff04.mp4'
                
            ],
            [
                'title'         => 'Sectioin 4 Mobile Video',
                'id'            => 'hs4-mvideo',
                'type'          => 'text',
            ],
            [
                'title'         => 'Sectioin 4 Background ( Image / Color )',
                'id'            => 'section4_bg',
                'type'          => 'background',
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
                'default'       => '
La balle
est dans
ton camp'
                
            ],
            [
                'title'         => 'Sectioin 5 Button Text',
                'id'            => 'hs5-btn',
                'type'          => 'text',
                'default'       => 'Postuler'
                
            ],
            [
                'title'         => 'Sectioin 5 Button Hover Text',
                'id'            => 'hs5-btn-hover',
                'type'          => 'text',
                'default'       => 'On y va !'
                
            ],
            [
                'title'         => 'Sectioin 5 Button Link',
                'id'            => 'hs5-btn-link',
                'type'          => 'text',
                'default'       => ''
                
            ],
           
            
        ]

    ]);




        Redux::setSection($opt_name, [
        'title'             => 'Agency page Settings',
        'icon'              => 'el el-heart-empty',
        'fields'            => [

            [
                'title'         => 'Sectioin 1 Heading',
                'id'            => 'as1-heading',
                'type'          => 'editor',
                'default'       =>  'Image artist'
            ],
            [
                'title'         => 'Sectioin 1 Heading style',
                'id'            => 'as1-heading-style',
                'type'          => 'typography',
                'default'       => [
                    'color'         => '#FFF',
                    'font-size'     => '6.5',
                    'font-style'    => '700',
                    'font-family'   => 'Hind Siliguri',
                    'text-align'    => 'left',
                ],
                'units'         => 'em'
                
            ],
            [
                'title'         => 'Sectioin 1 Heading Animation effect',
                'id'            => 'as1-heading-animation',
                'type'          => 'select',
                'options'       => [
                    'none'                      => 'None',
                    'fadeInDown'                => 'fadeInDown',
                    'fadeInUp'                  => 'fadeInUp',
                    'fadeInLeft'                => 'fadeInLeft',
                    'fadeInRight'               => 'fadeInRight',
                    'bounceInDown'              => 'bounceInDown',
                    'bounceInUp'                => 'bounceInUp',
                    'bounceInLeft'              => 'bounceInLeft',
                    'bounceInRight'             => 'bounceInRight',
                ],
                'default'          => 'none'   
            ],
            [
                'title'         => 'Sectioin 1 Video',
                'id'            => 'asection_bg_video',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/agency bg1.mp4'
            ],
            [
                'title'         => 'Sectioin 1 Mobile Video',
                'id'            => 'as1-mvideo',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/agency bg1.mp4'
            ],
            [
                'title'         => 'Sectioin 1 Background ( Image / Color )',
                'id'            => 'asection_bg',
                'type'          => 'background',
            ],
            


            [
                'title'         => 'Sectioin 2 Heading',
                'id'            => 'as2-heading',
                'type'          => 'editor',
                'default'       =>  'Penseurs et
créateurs de
concepts
originaux'
            ],

            [
                'title'         => 'Sectioin 2 Heading style',
                'id'            => 'as2-heading-style',
                'type'          => 'typography',
                'default'       => [
                    'color'     => '#FFF',
                    'font-size' => '6.5em',
                    'font-family'   => 'Hind Siliguri',
                    'font-weight'   => '700'

                ],
                
                'units'         => 'em'
                
            ],
            [
                'title'         => 'Sectioin 2 Heading Animation effect',
                'id'            => 'as2-heading-animation',
                'type'          => 'select',
                'options'       => [
                    'none'                      => 'None',
                    'fadeInDown'            => 'fadeInDown',
                    'fadeInUp'              => 'fadeInUp',
                    'fadeInLeft'            => 'fadeInLeft',
                    'fadeInRight'           => 'fadeInRight',
                    'bounceInDown'            => 'bounceInDown',
                    'bounceInUp'              => 'bounceInUp',
                    'bounceInLeft'            => 'bounceInLeft',
                    'bounceInRight'           => 'bounceInRight',
                ],
                'default'          => 'none'   
            ],
            [
                'title'         => 'Sectioin 2 Video',
                'id'            => 'asection2_bg_video',
                'type'          => 'text',

            ],
            [
                'title'         => 'Sectioin 2 Mobile Video',
                'id'            => 'as2-mvideo',
                'type'          => 'text',

            ],
            [
                'title'         => 'Sectioin 2 Background ( Image / Color )',
                'id'            => 'asection2_bg',
                'type'          => 'background',
                'default'       => [
                    'background-color'  => '#FF00FF',

                ]
            ],

            // Team member 01

            [
                'title'         => 'Team Member 1 Photo',
                'id'            => 'as2-team1-photo',
                'type'          => 'media',
                'default'       => [
                    'url'           => get_template_directory_uri() . '/img/team/01.png'
                ]

            ],
            [
                'title'         => 'Team Member 1 Name',
                'id'            => 'as2-team1-name',
                'type'          => 'editor',
                'default'       => 'Emilie
Fillion'

            ],
            [
                'title'         => 'Team Member 1 Job',
                'id'            => 'as2-team1-job',
                'type'          => 'editor',
                'default'       => 'Présidente
Directrice à la création'

            ],


            // Team member 02

            [
                'title'         => 'Team Member 2 Photo',
                'id'            => 'as2-team2-photo',
                'type'          => 'media',
                'default'       => [
                    'url'           => get_template_directory_uri() . '/img/team/02.png'
                ]

            ],
            [
                'title'         => 'Team Member 2 Name',
                'id'            => 'as2-team2-name',
                'type'          => 'editor',
                'default'       => 'Sylvain
Thériault'

            ],
            [
                'title'         => 'Team Member 2 Job',
                'id'            => 'as2-team2-job',
                'type'          => 'editor',
                'default'       => 'Directeur artistique
Designer graphique'

            ],

            // Team member 03

            [
                'title'         => 'Team Member 3 Photo',
                'id'            => 'as2-team3-photo',
                'type'          => 'media',
                'default'       => [
                    'url'           => get_template_directory_uri() . '/img/team/03.png'
                ]

            ],
            [
                'title'         => 'Team Member 3 Name',
                'id'            => 'as2-team3-name',
                'type'          => 'editor',
                'default'       => 'Ghislain
Dufour '

            ],
            [
                'title'         => 'Team Member 3 Job',
                'id'            => 'as2-team3-job',
                'type'          => 'editor',
                'default'       => 'Stratège
com'

            ],


            // Team member 04

            [
                'title'         => 'Team Member 4 Photo',
                'id'            => 'as2-team4-photo',
                'type'          => 'media',
                'default'       => [
                    'url'           => get_template_directory_uri() . '/img/team/04.png'
                ]

            ],
            [
                'title'         => 'Team Member 4 Name',
                'id'            => 'as2-team4-name',
                'type'          => 'editor',
                'default'       => 'Ghislain
Dufour '

            ],
            [
                'title'         => 'Team Member 4 Job',
                'id'            => 'as2-team4-job',
                'type'          => 'editor',
                'default'       => 'Stratège
com'

            ],


            // Team member 05

            [
                'title'         => 'Team Member 5 Photo',
                'id'            => 'as2-team5-photo',
                'type'          => 'media',
                'default'       => [
                    'url'           => get_template_directory_uri() . '/img/team/05.png'
                ]

            ],
            [
                'title'         => 'Team Member 5 Name',
                'id'            => 'as2-team5-name',
                'type'          => 'editor',
                'default'       => 'Ghislain
Dufour '

            ],
            [
                'title'         => 'Team Member 5 Job',
                'id'            => 'as2-team5-job',
                'type'          => 'editor',
                'default'       => 'Stratège
com'

            ],


            // Team member 06

            [
                'title'         => 'Team Member 6 Photo',
                'id'            => 'as2-team6-photo',
                'type'          => 'media',
                'default'       => [
                    'url'           => get_template_directory_uri() . '/img/team/06.png'
                ]

            ],
            [
                'title'         => 'Team Member 6 Name',
                'id'            => 'as2-team6-name',
                'type'          => 'editor',
                'default'       => 'Ghislain
Dufour '

            ],
            [
                'title'         => 'Team Member 6 Job',
                'id'            => 'as2-team6-job',
                'type'          => 'editor',
                'default'       => 'Stratège
com'

            ],



            
           
            
        ]

    ]);


    
    Redux::setSection($opt_name, [
        'title'             => 'Services Page',
        'icon'              => 'el el-heart-empty',
        'fields'            => [
            [
                'title'         => 'Section 1 Heading',
                'id'            => 'ss1-heading',
                'type'          => 'editor',
                'default'       =>  '
Regardez
ce que
nous voyons
'
            ],
            [
                'title'         => 'Section 1 Heading Style',
                'id'            => 'ss1-heading-style',
                'type'          => 'typography',
                'unit'          => 'em',
                'default'       =>  [
                        'color'         => '#FFF',
                        'font-size'     => '9',
                        'font-family'   => 'Hind Siliguri',
                        'font-weight'   => '700'
                ],
            ],
            [
                'title'         => 'Sectioin 1 Heading Animation effect',
                'id'            => 'ss1-heading-effect',
                'type'          => 'select',
                'options'       => [
                    'none'                      => 'None',
                    'fadeInDown'                => 'fadeInDown',
                    'fadeInUp'                  => 'fadeInUp',
                    'fadeInLeft'                => 'fadeInLeft',
                    'fadeInRight'               => 'fadeInRight',
                    'bounceInDown'              => 'bounceInDown',
                    'bounceInUp'                => 'bounceInUp',
                    'bounceInLeft'              => 'bounceInLeft',
                    'bounceInRight'             => 'bounceInRight',
                ],
                'default'          => 'none'   
            ],

            [
                'title'         => 'Section 1 grabing',
                'id'            => 'ss1-grabing',
                'type'          => 'text',
                'default'       =>  'Nos projets'
            ],
            [
                'title'         => 'Section 1 background',
                'id'            => 'ss1-bg',
                'type'          => 'background',
                'default'       =>  [
                    'background-color'  => '#202020'
                ]
            ],

            [
                'title'         => 'Section 1 Video',
                'id'            => 'ss1-video',
                'type'          => 'text',
                
            ],

            [
                'title'         => 'Section 1 Mobile Video',
                'id'            => 'ss1-mvideo',
                'type'          => 'text',
                
            ],
            [
                'title'         => 'Section 2 heading',
                'id'            => 'ss2-heading',
                'type'          => 'editor',
                'default'       => 'Branding
UX'
                
            ],

            [
                'title'         => 'List content 1 heading',
                'id'            => 'lc1-heading',
                'type'          => 'editor',
                'default'       => 'Le
concept
utilisateur'
                
            ],
            [
                'title'         => 'List content 1 Content',
                'id'            => 'lc1-content',
                'type'          => 'editor',
                'default'       => 'L’élaboration de l’idée. Les créateurs se rassemblent pour mettre au monde l’approche qu’il faut pour la bonne clientèle/rejoindre le bon public. Celle qui surprendra, accrochera et rendra l’expérience mémorable.'
                
            ],
            [
                'title'         => 'List content 2 heading',
                'id'            => 'lc2-heading',
                'type'          => 'editor',
                'default'       => 'La
création'
                
            ],
            [
                'title'         => 'List content 2 Content',
                'id'            => 'lc2-content',
                'type'          => 'editor',
                'default'       => 'La concrétisation des idées. L’équipe multidisciplinaire produit l’expérience voulu. Le roupe orchestre la réalisation de l’expérience originale et ciblée dans les temps convenus.
'
                
            ],
            [
                'title'         => 'List content 3 heading',
                'id'            => 'lc3-heading',
                'type'          => 'editor',
                'default'       => 'La
maquette'
                
            ],
            [
                'title'         => 'List content 3 Content',
                'id'            => 'lc3-content',
                'type'          => 'editor',
                'default'       => 'La présentation de l’histoire. L’explication du produit fabriqué par notre équipe et l’évaluation conjointe pour approbation. Correctifs, changements, améliorations sont discutés pour une meilleure solution.'
                
            ],
            [
                'title'         => 'List content 4 heading',
                'id'            => 'lc4-heading',
                'type'          => 'editor',
                'default'       => 'La
finale'
                
            ],
            [
                'title'         => 'List content 4 Content',
                'id'            => 'lc4-content',
                'type'          => 'editor',
                'default'       => 'La création percute. Elle est lancée dans l’espace des gens pour les surprendre et faire en sorte qu’ils reconnaissent la marque'
                
            ]
            

        ]

    ]);





    Redux::setSection($opt_name, [
        'title'             => 'Job Page',
        'icon'              => 'el el-heart-empty',
        'fields'            => [

            [
                'title'         => 'Section 1 Heading',
                'id'            => 'js1-heading',
                'type'          => 'editor',
                'default'       =>  'Job'
            ],
            [
                'title'         => 'Section 1 Heading Style',
                'id'            => 'js1-heading-style',
                'type'          => 'typography',
                'unit'          => 'em',
                'default'       =>  [
                        'color'         => '#FFF',
                        'font-size'     => '9',
                        'font-family'   => 'Hind Siliguri',
                        'font-weight'   => '700'
                ],
            ],
            [
                'title'         => 'Section 1 background',
                'id'            => 'js1-bg',
                'type'          => 'background',
                'default'       =>  [
                    'background-image'  => get_template_directory_uri() . '/img/job.gif',
                ]
            ],


            [
                'title'         => 'Section 2 Heading',
                'id'            => 'js2-heading',
                'type'          => 'editor',
                'default'       =>  'Je veux postuler maintenant'
            ],
            [
                'title'         => 'Section 2 Heading Style',
                'id'            => 'js2-heading-style',
                'type'          => 'typography',
                'unit'          => 'em',
                'default'       =>  [
                        'color'         => '#202020',
                        'font-size'     => '9',
                        'font-family'   => 'Hind Siliguri',
                        'font-weight'   => '700'
                ],
            ],

            [
                'title'         => 'Section 3 Heading',
                'id'            => 'js3-heading',
                'type'          => 'editor',
                'default'       =>  'Je postule
pour un poste
de ...'
            ],
            [
                'title'         => 'Section 3 Heading Style',
                'id'            => 'js3-heading-style',
                'type'          => 'typography',
                'unit'          => 'em',
                'default'       =>  [
                        'color'         => '#202020',
                        'font-size'     => '9',
                        'font-family'   => 'Hind Siliguri',
                        'font-weight'   => '700'
                ],
            ],

             [
                'title'         => 'Section 4 Heading',
                'id'            => 'js4-heading',
                'type'          => 'editor',
                'default'       =>  'Ce
poste est
pour moi.'
            ],
            [
                'title'         => 'Section 4 Heading Style',
                'id'            => 'js4-heading-style',
                'type'          => 'typography',
                'unit'          => 'em',
                'default'       =>  [
                        'color'         => '#202020',
                        'font-size'     => '9',
                        'font-family'   => 'Hind Siliguri',
                        'font-weight'   => '700'
                ],
            ],


        ]

    ]);
                                                                                               
    /**
     * Contact Us page Options start 
     */

    Redux::setSection($opt_name, [
        'title'             => 'Contact Page',
        'icon'              => 'el el-heart-empty',
        'fields'            => [

            [
                'title'         => 'Section 1 Heading',
                'id'            => 'cs1-heading',
                'type'          => 'editor',
                'default'       =>  'On fait les avances,
vous les premiers pas'
            ],
            [
                'title'         => 'Sectioin 1 Heading style',
                'id'            => 'cs1-heading-style',
                'type'          => 'typography',
                'default'       => [
                    'color'         => '#202020',
                    'font-size'     => '6.5',
                    'font-style'    => '700',
                    'font-family'   => 'Hind Siliguri',
                    'text-align'    => 'left',
                    'line-height'    => '.8em',
                ],
                'units'         => 'em'
                
            ],
            [
                'title'         => 'Sectioin 1 Heading Animation effect',
                'id'            => 'cs1-heading-animation',
                'type'          => 'select',
                'options'       => [
                    'none'                      => 'None',
                    'fadeInDown'                => 'fadeInDown',
                    'fadeInUp'                  => 'fadeInUp',
                    'fadeInLeft'                => 'fadeInLeft',
                    'fadeInRight'               => 'fadeInRight',
                    'bounceInDown'              => 'bounceInDown',
                    'bounceInUp'                => 'bounceInUp',
                    'bounceInLeft'              => 'bounceInLeft',
                    'bounceInRight'             => 'bounceInRight',
                ],
                'default'          => 'none'   
            ],
            [
                'title'         => 'Sectioin 1 Background ( Image / Color )',
                'id'            => 'csection1_bg',
                'type'          => 'background',
                'default'       => [
                    'background-color'  => 'rgb(254, 221, 12)',
                    'background-image'  =>  get_template_directory_uri() . '/img/GifContact.gif'
                ]
            ],


            [
                'title'         => 'Section 2 Heading',
                'id'            => 'cs2-heading',
                'type'          => 'editor',
                'default'       =>  'Combien
de temps tu
aurais besoin?'
            ],
            [
                'title'         => 'Sectioin 2 Heading style',
                'id'            => 'cs2-heading-style',
                'type'          => 'typography',
                'default'       => [
                    'color'         => '#202020',
                    'font-size'     => '6.5',
                    'font-style'    => '700',
                    'font-family'   => 'Hind Siliguri',
                    'text-align'    => 'left',
                    'line-height'    => '.8em',
                ],
                'units'         => 'em'
                
            ],
            [
                'title'         => 'Sectioin 2 Background ( Image / Color )',
                'id'            => 'csection2_bg',
                'type'          => 'background',
                'default'       => [
                    'background-color'  => '#FFF',
                ]
            ],

            [
                'title'         => 'Section 2  Side Text',
                'id'            => 'cs2-side-text',
                'type'          => 'editor',
                'default'       =>  'POUR LES 6
PROCHAINS MOIS'
            ],


            [
                'title'         => 'Section 3 Heading',
                'id'            => 'cs3-heading',
                'type'          => 'editor',
                'default'       =>  'On vous
envoie
une offre?'
            ],
            [
                'title'         => 'Sectioin 3 Heading style',
                'id'            => 'cs3-heading-style',
                'type'          => 'typography',
                'default'       => [
                    'color'         => '#FFF',
                    'font-size'     => '6.5',
                    'font-style'    => '700',
                    'font-family'   => 'Hind Siliguri',
                    'text-align'    => 'left',
                    'line-height'    => '.8em',
                ],
                'units'         => 'em'
                
            ],

            [
                'title'         => 'Section 3 Sub Heading',
                'id'            => 'cs3-subheading',
                'type'          => 'editor',
                'default'       =>  'Ma banque d\'heures'
            ],
            [
                'title'         => 'circle 1 text',
                'id'            => 'cs3-c1-text',
                'type'          => 'text',
                'default'       =>  '50'
            ],
            [
                'title'         => 'circle 2 text',
                'id'            => 'cs3-c2-text',
                'type'          => 'text',
                'default'       =>  '100'
            ],
            [
                'title'         => 'circle 3 text',
                'id'            => 'cs3-c3-text',
                'type'          => 'text',
                'default'       =>  '250'
            ],
            [
                'title'         => 'circle 4 text',
                'id'            => 'cs3-c4-text',
                'type'          => 'text',
                'default'       =>  'Aucune idee'
            ],

            [
                'title'         => 'Sectioin 3 background Video',
                'id'            => 'csection3_bg_video',
                'type'          => 'text',

            ],
            [
                'title'         => 'Sectioin 3 Background ( Image / Color )',
                'id'            => 'csection3_bg',
                'type'          => 'background',
                'default'       => [
                    'background-color'  => '#202020',
                ]
            ],
            


        ]

    ]);



    Redux::setSection($opt_name, [
        'title'             => 'Project Page settings',
        'icon'              => 'el el-star-empty',
        'fields'            => [
            [
                'title'     => 'Section 01 Background',
                'type'      => 'background',
                'id'        => 'ps1-bg',
                'default'   => [
                    'background-color'  => '#202020'
                ]    
            ],
            [
                'title'     => 'Section 01 Heading',
                'type'      => 'editor',
                'id'        => 'ps1-heading',
                'default'   => 'Voici
nos projets
primés'   
            ],
            [
                'title'     => 'Section 01 Heading Style',
                'type'      => 'typography',
                'id'        => 'ps1-heading-style',
                'unit'      => 'em',
                'default'   => [
                    'color'  => '#FFF',
                    'font-size'     => '6',
                    'font-weight'   => '700',
                    'font-family'   => 'Hind Siliguri'

                ]    
            ],
            [
                'title'         => 'Sectioin 1 Heading Animation',
                'id'            => 'ps1-heading-animation',
                'type'          => 'select',
                'options'       => [
                    'none'                      => 'None',
                    'fadeInDown'            => 'fadeInDown',
                    'fadeInUp'              => 'fadeInUp',
                    'fadeInLeft'            => 'fadeInLeft',
                    'fadeInRight'           => 'fadeInRight',
                    'bounceInDown'            => 'bounceInDown',
                    'bounceInUp'              => 'bounceInUp',
                    'bounceInLeft'            => 'bounceInLeft',
                    'bounceInRight'           => 'bounceInRight',
                ],
                'default'          => 'none'   
            ],

            [
                'title'         => 'Section 02 Video',
                'id'            => 'ps2-video',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/mohila.mp4'
            ],
            [
                'title'         => 'Section 02 Mobile Video',
                'id'            => 'ps2-mvideo',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/mohila.mp4'
            ],
            [
                'title'         => 'Section 02 Brand',
                'id'            => 'ps2-brand',
                'type'          => 'media',
                'default'       =>  [
                    'url'       => get_template_directory_uri() . '/img/logoporteparole.png'
                ]
            ],
            [
                'title'         => 'Section 02 Button Text',
                'id'            => 'ps2-btn',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 02 Button Hover Text',
                'id'            => 'ps2-btn-hover',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 02 Button Hover Text',
                'id'            => 'ps2-btn-link',
                'type'          => 'text',
                'default'       =>  ''
            ],

            [
                'title'         => 'Section 03 Video',
                'id'            => 'ps3-video',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/eff04.mp4'
            ],
            [
                'title'         => 'Section 03 Mobile Video',
                'id'            => 'ps3-mvideo',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/eff04.mp4'
            ],
            [
                'title'         => 'Section 03 Brand',
                'id'            => 'ps3-brand',
                'type'          => 'media',
                'default'       =>  [
                    'url'       => get_template_directory_uri() . '/img/logo5.png'
                ]
            ],
            [
                'title'         => 'Section 03 Button Text',
                'id'            => 'ps3-btn',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 03 Button Hover Text',
                'id'            => 'ps3-btn-hover',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 03 Button Link',
                'id'            => 'ps3-btn-link',
                'type'          => 'text',
                'default'       =>  ''
            ],
            [
                'title'         => 'Section 04 Video',
                'id'            => 'ps4-video',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/mohila2.mp4'
            ],
            [
                'title'         => 'Section 04 Mobile Video',
                'id'            => 'ps4-mvideo',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/mohila2.mp4'
            ],
            [
                'title'         => 'Section 04 Brand',
                'id'            => 'ps4-brand',
                'type'          => 'media',
                'default'       =>  [
                    'url'       => get_template_directory_uri() . '/img/logoVF.png'
                ]
            ],
            [
                'title'         => 'Section 04 Button Text',
                'id'            => 'ps4-btn',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 04 Button Hover Text',
                'id'            => 'ps4-btn-hover',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 04 Button Link',
                'id'            => 'ps4-btn-link',
                'type'          => 'text',
                'default'       =>  ''
            ],
            [
                'title'         => 'Section 05 Background ( image / Color )',
                'id'            => 'ps5-bg',
                'type'          => 'background',
                'default'       =>  [
                    'background-image'      => get_template_directory_uri() . '/img/alainImg.jpg'
                ]
            ],
            [
                'title'         => 'Section 05 Title Text',
                'id'            => 'ps5-title',
                'type'          => 'text',
                'default'       =>  'ALAINDESROCHERS'
            ],
            [
                'title'         => 'Section 05 Subtitle Text',
                'id'            => 'ps5-subtitle',
                'type'          => 'text',
                'default'       =>  'DIRECTOR / RÉALISATEUR'
            ],
            [
                'title'         => 'Section 05 Button Text',
                'id'            => 'ps5-btn',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 05 Button Hover Text',
                'id'            => 'ps5-btn-hover',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 05 Button Link',
                'id'            => 'ps5-btn-link',
                'type'          => 'text',
                'default'       =>  ''
            ],
            [
                'title'         => 'Section 06 Video',
                'id'            => 'ps6-video',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/paint.mp4'
            ],
            [
                'title'         => 'Section 06 Mobile Video',
                'id'            => 'ps6-mvideo',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/paint.mp4'
            ],

            [
                'title'         => 'Section 06 Title',
                'id'            => 'ps6-title',
                'type'          => 'text',
                'default'       => 'KRISTINE GIRARD'
            ],
            [
                'title'         => 'Section 06 Button Text',
                'id'            => 'ps6-btn',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 06 Button Hover Text',
                'id'            => 'ps6-btn-hover',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 06 Button Link',
                'id'            => 'ps6-btn-link',
                'type'          => 'text',
                'default'       =>  ''
            ],

            [
                'title'         => 'Section 07 Background',
                'id'            => 'ps7-background',
                'type'          => 'background',
                'default'       =>  [
                    'background-image'      => get_template_directory_uri() . '/img/Plante.jpg'
                ]
            ],
            [
                'title'         => 'Section 07 Button Text',
                'id'            => 'ps7-btn',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 07 Button Hover Text',
                'id'            => 'ps7-btn-hover',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 07 Button Link',
                'id'            => 'ps7-btn-link',
                'type'          => 'text',
                'default'       =>  ''
            ],






            [
                'title'         => 'Section 08 Background',
                'id'            => 'ps8-background',
                'type'          => 'background',
                'default'       =>  [
                    'background-image'      => get_template_directory_uri() . '/img/festivale.png'
                ]
            ],
            [
                'title'         => 'Section 08 Button Text',
                'id'            => 'ps8-btn',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 08 Button Hover Text',
                'id'            => 'ps8-btn-hover',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 08 Button Link',
                'id'            => 'ps8-btn-link',
                'type'          => 'text',
                'default'       =>  ''
            ],




            [
                'title'         => 'Section 09 Video',
                'id'            => 'ps9-video',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/ama.mp4'
            ],
            [
                'title'         => 'Section 09 Mobile Video',
                'id'            => 'ps9-mvideo',
                'type'          => 'text',
                'default'       =>  get_template_directory_uri() . '/videos/ama.mp4'
            ],
            [
                'title'         => 'Section 09 Button Text',
                'id'            => 'ps9-btn',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 09 Button Hover Text',
                'id'            => 'ps9-btn-hover',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 09 Button Link',
                'id'            => 'ps9-btn-link',
                'type'          => 'text',
                'default'       =>  ''
            ],




            [
                'title'         => 'Section 10 Background',
                'id'            => 'ps10-background',
                'type'          => 'background',
                'default'       =>  [
                    'background-image'      => get_template_directory_uri() . '/img/headerExpo.jpg'
                ]
            ],
            [
                'title'         => 'Section 10 Button Text',
                'id'            => 'ps10-btn',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 10 Button Hover Text',
                'id'            => 'ps10-btn-hover',
                'type'          => 'text',
                'default'       =>  'Voir le Project'
            ],
            [
                'title'         => 'Section 10 Button Link',
                'id'            => 'ps10-btn-link',
                'type'          => 'text',
                'default'       =>  ''
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
                'default'       =>  'ON FAIT LES AVANCES
VOUS LES PREMIERS PAS.
<a href="#">CONTACT<a>'
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











