<?php
/**
 * Project Go Theme Customizer.
 *
 * @package Project_Go
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function project_go_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'project_go_customize_register' );

function project_go_theme_customizer( $wp_customize ) {
	
	    /*--------------------------------------------------------------
	//Header Options
--------------------------------------------------------------*/
    $wp_customize->add_panel('project_go_header_options', array(
      'capabitity' => 'edit_theme_options',
      'description' => __('Change the Header Settings from here as you want', 'project_go'),
      'priority' => 500,
      'title' => __('Header Options', 'project_go')
   ));
    $wp_customize->add_section( 'project_go_logo_section' , array(
	    'title'       => __( 'Logo Options', 'project_go' ),
	    'panel' => 'project_go_header_options',
	    'priority'    => 30,
	    'description' => 'Upload a logo to replace the default site name and description in the header, select utility bar',
	) );
	$wp_customize->add_setting( 'project_go_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'project_go_logo', array(
		'label'    => __( 'Logo', 'project_go' ),
		'section'  => 'project_go_logo_section',
		'settings' => 'project_go_logo',
	) ) );

	/*--------------------------------------------------------------
	// Typography
--------------------------------------------------------------*/
$wp_customize->add_panel('project_go_typography_panel', array(
      'capabitity' => 'edit_theme_options',
      'description' => __('Typography - Font, Headings', 'project_go'),
      'priority' => 505,
      'title' => __('Typography Options', 'project_go')
   ));
$wp_customize->add_section( 'project_go_typography_section' , array(
	    'title'       => __( 'Typography', 'project_go' ),
	    'priority'    => 30,
	    'panel' 	  => 'project_go_typography_panel',
	    'description' => 'Typography - Select your fonts',
	) );
	$wp_customize->add_setting( 'project_go_main_font', array(
        'default'           => 'opensans',
        'transport'  =>  'postMessage'
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'project_go_main_font', array(
        'label'    => __( 'Select your main font', 'project_go' ),
        'section'  => 'project_go_typography_section',
        'settings' => 'project_go_main_font',
        'type'     => 'select',
        'choices'  => array(
            'opensans' => 'Open Sans',
            'arial' => 'Arial',
            'courier' => 'Courier New',
            'jennasue' => 'Jenna Sue',
            'lato' => 'Lato',
            'montserrat' => 'Montserrat',
            'oswald' => 'Oswald',
            'ptsans' => 'PT Sans',
            'quicksand' => 'Quicksand',
            'raleway' => 'Raleway',
            'roboto' => 'Roboto',
            'slabo' => 'Slabo 27px',
            'ssp' => 'Source Sans Pro',
            'times' => 'Times New Roman',
            'ubuntu' => 'Ubuntu'
            )
    ) ) );

    $wp_customize->add_setting( 'project_go_h1_font', array(
        'default'           => 'opensans',
        'transport'  =>  'postMessage'
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'project_go_h1_font', array(
        'label'    => __( 'Select your h1 font', 'project_go' ),
        'section'  => 'project_go_typography_section',
        'settings' => 'project_go_h1_font',
        'type'     => 'select',
        'choices'  => array(
            'opensans' => 'Open Sans',
            'arial' => 'Arial',
            'courier' => 'Courier New',
            'jennasue' => 'Jenna Sue',
            'lato' => 'Lato',
            'montserrat' => 'Montserrat',
            'oswald' => 'Oswald',
            'ptsans' => 'PT Sans',
            'quicksand' => 'Quicksand',
            'raleway' => 'Raleway',
            'roboto' => 'Roboto',
            'slabo' => 'Slabo 27px',
            'ssp' => 'Source Sans Pro',
            'times' => 'Times New Roman',
            'ubuntu' => 'Ubuntu'
            )
    ) ) );
    $wp_customize->add_setting( 'project_go_h2_font', array(
        'default'           => 'opensans',
        'transport'  =>  'postMessage'
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'project_go_h2_font', array(
        'label'    => __( 'Select your h2 font', 'project_go' ),
        'section'  => 'project_go_typography_section',
        'settings' => 'project_go_h2_font',
        'type'     => 'select',
        'choices'  => array(
            'opensans' => 'Open Sans',
            'arial' => 'Arial',
            'courier' => 'Courier New',
            'jennasue' => 'Jenna Sue',
            'lato' => 'Lato',
            'montserrat' => 'Montserrat',
            'oswald' => 'Oswald',
            'ptsans' => 'PT Sans',
            'quicksand' => 'Quicksand',
            'raleway' => 'Raleway',
            'roboto' => 'Roboto',
            'slabo' => 'Slabo 27px',
            'ssp' => 'Source Sans Pro',
            'times' => 'Times New Roman',
            'ubuntu' => 'Ubuntu'
            )
    ) ) );
    $wp_customize->add_setting( 'project_go_link_color', array(
        'default'           => '#4169E1',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'project_go_link_color', array(
        'label'	   => 'Link and Highlight Color',
        'section'  => 'project_go_typography_section',
        'settings' => 'project_go_link_color',
    ) ) );
    $wp_customize->add_setting( 'project_go_link_highlight_color', array(
        'default'           => '#4169E1',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'project_go_link_highlight_color', array(
        'label'	   => 'Link and Highlight Color',
        'section'  => 'project_go_typography_section',
        'settings' => 'project_go_link_highlight_color',
    ) ) );
    /*--------------------------------------------------------------
	// Footer Section
--------------------------------------------------------------*/
$wp_customize->add_panel('project_go_footer_panel', array(
      'capabitity' => 'edit_theme_options',
      'description' => __('Footer Options', 'project_go'),
      'priority' => 500,
      'title' => __('Footer', 'project_go')
   ));
	$wp_customize->add_section( 'project_go_footer_section' , array(
	    'title'       => __( 'Footer', 'project_go' ),
	    'priority'    => 35,
	    'panel'       => 'project_go_footer_panel',
	    'description' => 'Footer Options',
	));
	$wp_customize->add_section( 'my_social_settings', array(
			'title'    => __('Social Media Icons', 'text-domain'),
			'priority' => 35,
			'panel'    => 'project_go_footer_panel'
	) );
 
	$social_sites = my_customizer_social_media_array();
	$priority = 5;
 
	foreach($social_sites as $social_site) {
 
		$wp_customize->add_setting( "$social_site", array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw'
		) );
 
		$wp_customize->add_control( $social_site, array(
				'label'    => __( "$social_site url:", 'text-domain' ),
				'section'  => 'my_social_settings',
				'type'     => 'text',
				'priority' => $priority,
		) );
 
		$priority = $priority + 5;
	}
	 $wp_customize->add_setting( 'project_go_social_color', array(
        'default'           => '#333333',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'project_go_social_color', array(
        'label'	   => 'Social Icon Color',
        'section'  => 'my_social_settings',
        'settings' => 'project_go_social_color',
    ) ) );
    $wp_customize->add_setting( 'project_go_social_hover_color', array(
        'default'           => '#333333',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'project_go_social_hover_color', array(
        'label'	   => 'Social Icon Hover Color',
        'section'  => 'my_social_settings',
        'settings' => 'project_go_social_hover_color',
    ) ) );
           /*--------------------------------------------------------------
	 // Mobile
--------------------------------------------------------------*/

	$wp_customize->add_panel('project_go_mobile_panel', array(
      'capabitity' => 'edit_theme_options',
      'description' => __('Mobile Settings (', 'project_go'),
      'priority' => 500,
      'title' => __('Mobile Settings', 'project_go')
   ));
	$wp_customize->add_section( 'project_go_mobile_section' , array(
	    'title'       => __( 'Mobile', 'project_go' ),
	    'priority'    => 35,
	    'panel'       => 'project_go_mobile_panel',
	    'description' => 'Mobile Options',	
	    ) );
	$wp_customize->add_setting( 'project_go_mobile_menu_bkg_color', array(
        'default'           => '#000',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'project_go_mobile_menu_bkg_color', array(
        'label'	   => 'Mobile Menu Background Color',
        'section'  => 'project_go_mobile_section',
        'settings' => 'project_go_mobile_menu_bkg_color',
    ) ) );
     $wp_customize->add_setting( 'project_go_mobile_menu_color', array(
        'default'           => '#ffffff',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'project_go_mobile_menu_color', array(
        'label'	   => 'Mobile Menu Color',
        'section'  => 'project_go_mobile_section',
        'settings' => 'project_go_mobile_menu_color',
    ) ) );
    $wp_customize->add_setting( 'project_go_mobile_toggle_color', array(
        'default'           => '#000',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'project_go_mobile_toggle_color', array(
        'label'	   => 'Mobile Menu Toggle (hamburger) Color',
        'section'  => 'project_go_mobile_section',
        'settings' => 'project_go_mobile_toggle_color',
    ) ) );


       /*--------------------------------------------------------------
	 // Analytics and Other Section
--------------------------------------------------------------*/
   $wp_customize->add_panel('project_go_misc_section', array(
      'capabitity' => 'edit_theme_options',
      'description' => __('Misc Options (Analytics, CSS, Layout)', 'project_go'),
      'priority' => 500,
      'title' => __('Misc Options', 'project_go')
   ));
    $wp_customize->add_section( 'project_go_ga_section' , array(
	    'title'       => __( 'Analytics and Others', 'project_go' ),
	    'panel'       => 'project_go_misc_section',
	    'priority'    => 35,
	    'description' => 'Google Analytics and other Misc Options',
	    ) );
	$wp_customize->add_setting('project_go_ga_code', array(
        'default'            => '',
        'description' 		 => 'Copy entire Analytics code here',
        'transport'          => 'postMessage'
    )
);
	$wp_customize->add_control('project_go_ga_code', array(
        'section'  => 'project_go_ga_section',
        'label'    => 'Analytics Code',
        'type'     => 'textarea'
    )
);
	$wp_customize->add_section( 'css_styles', array(
		'title'                 => __( 'CSS Styles', 'project_go' ),
		'priority'              => 30,
		'panel'       => 'project_go_misc_section'
	) );
	$wp_customize->add_setting( 'project_go_theme_options[project_go_inline_css]' ,array( 'sanitize_callback' => 'wp_filter_nohtml_kses', 'type' => 'option' ) );
	$wp_customize->add_control( 'res_project_go_inline_css', array(
		'label'                 => __( 'Custom CSS Styles', 'project_go' ),
		'section'               => 'css_styles',
		'settings'              => 'project_go_theme_options[project_go_inline_css]',
		'type'                  => 'textarea'
	) );
	$wp_customize->add_section( 'project_go_layout_section' , array(
	    'title'       => __( 'Layout', 'project_go' ),
	    'priority'    => 30,
	    'panel'       => 'project_go_misc_section',
	    'description' => 'Change how project_go displays posts',
	) );
	$wp_customize->add_setting( 'project_go_post_content', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'project_go_sanitize_index_content',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'project_go_post_content', array(
		'label'    => __( 'Post content', 'project_go' ),
		'section'  => 'project_go_layout_section',
		'settings' => 'project_go_post_content',
		'type'     => 'radio',
		'choices'  => array(
			'option1' => 'Excerpts',
			'option2' => 'Full content',
			),
	) ) );

}
add_action( 'customize_register', 'project_go_theme_customizer' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function project_go_customize_preview_js() {
	wp_enqueue_script( 'project_go_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'project_go_customize_preview_js' );

function project_go_sanitize_hex_color( $color ) {
	if ( '' === $color )
		return '';
	// 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;
	return null;
}
/**
 * Sanitizes our post content value (either excerpts or full post content).
 *
 * @since 1.7
 */
function project_go_sanitize_index_content( $content ) {
	if ( 'option2' == $content ) {
		return 'option2';
	} else {
		return 'option1';
	}
}

function my_customizer_social_media_array() {
 
	/* store social site names in array */
	$social_sites = array('twitter', 'facebook', 'google-plus', 'flickr', 'pinterest', 'youtube', 'tumblr', 'dribbble', 'rss', 'linkedin', 'instagram','github','snapchat', 'email');
 
	return $social_sites;
}


function my_social_media_icons() {
 
    $social_sites = my_customizer_social_media_array();
 
    /* any inputs that aren't empty are stored in $active_sites array */
    foreach($social_sites as $social_site) {
        if( strlen( get_theme_mod( $social_site ) ) > 0 ) {
            $active_sites[] = $social_site;
        }
    }
 
    /* for each active social site, add it as a list item */
        if ( ! empty( $active_sites ) ) {
 
            echo "<ul class='social-media-icons'>";
 
            foreach ( $active_sites as $active_site ) {
 
	            /* setup the class */
		        $class = 'fa fa-' . $active_site;
                 
 
                if ( $active_site == 'email' ) {
                    ?>
                    <li>
                        <a class="email" target="_blank" href="mailto:<?php echo antispambot( is_email( get_theme_mod( $active_site ) ) ); ?>">
                            <i class="fa fa-envelope" title="<?php _e('email icon', 'text-domain'); ?>"></i>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a class="<?php echo $active_site; ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $active_site) ); ?>">
                            <i class="<?php echo esc_attr( $class ); ?>" title="<?php printf( __('%s icon', 'text-domain'), $active_site ); ?>"></i>
                        </a>
                    </li>
                <?php
                }
            }
            echo "</ul>";
        }
}

/**
 * Add CSS in <head> for styles handled by the theme customizer
 *
 * @since 1.5
 */
function project_go_add_customizer_css() {
	$font = get_theme_mod( 'project_go_main_font' );
	 switch( $font ) {
 
            case 'opensans':
                $sfont = 'Open Sans';
                break;
 
            case 'arial':
                $sfont = 'Arial';
                break;
 
            case 'courier':
                $sfont = 'Courier New';
                break;
 
            case 'roboto':
                $sfont = 'Roboto';
                break;

            case 'times':
                $sfont = 'Times New Roman';
                break;
            case 'slabo':
                $sfont = 'Slabo 27px';
                break;
            case 'ssp':
                $sfont = 'Source Sans Pro';
                break;   
            case 'jennasue':
                $sfont = 'Jenna Sue';
                break; 
            case 'lato':
                $sfont = 'Lato';
                break;
            case 'montserrat':
                $sfont = 'Montserrat';
                break;
            case 'quicksand':
                $sfont = 'Quicksand';
                break;
            case 'ptsans':
                $sfont = 'PT Sans';
                break;    
            case 'ubuntu':
                $sfont = 'Ubuntu';
                break;
            case 'oswald':
                $sfont = 'Oswald';
                break;
 
            default:
                $sfont = 'Open Sans';
                break;
 
        }
        $h1font = get_theme_mod( 'project_go_h1_font' );
	 switch( $h1font ) {
 
             case 'opensans':
                $sh1font = 'Open Sans';
                break;
 
            case 'arial':
                $sh1font = 'Arial';
                break;
 
            case 'courier':
                $sh1font = 'Courier New';
                break;
 
            case 'roboto':
                $sh1font = 'Roboto';
                break;

            case 'times':
                $sh1font = 'Times New Roman';
                break;
            case 'slabo':
                $sh1font = 'Slabo 27px';
                break;
            case 'ssp':
                $sh1font = 'Source Sans Pro';
                break;  
            case 'jennasue':
                $sh1font = 'Jenna Sue';
                break;  
            case 'lato':
                $sh1font = 'Lato';
                break;
            case 'montserrat':
                $sh1font = 'Montserrat';
                break;
            case 'quicksand':
                $sh1font = 'Quicksand';
                break;  
            case 'ptsans':
                $sh1font = 'PT Sans';
                break;  
            case 'ubuntu':
                $sh1font = 'Ubuntu';
                break;
            case 'oswald':
                $sh1font = 'Oswald';
                break;
 
            default:
                $sh1font = 'Open Sans';
                break;
 
        }
         $h2font = get_theme_mod( 'project_go_h2_font' );
	 switch( $h2font ) {
 
             case 'opensans':
                $sh2font = 'Open Sans';
                break;
 
            case 'arial':
                $sh2font = 'Arial';
                break;
 
            case 'courier':
                $sh2font = 'Courier New';
                break;
 
            case 'roboto':
                $sh2font = 'Roboto';
                break;

            case 'times':
                $sh2font = 'Times New Roman';
                break;
            case 'slabo':
                $sh2font = 'Slabo 27px';
                break;
            case 'ssp':
                $sh2font = 'Source Sans Pro';
                break; 
            case 'jennasue':
                $sh2font = 'Jenna Sue';
                break;   
            case 'lato':
                $sh2font = 'Lato';
                break;
            case 'montserrat':
                $sh2font = 'Montserrat';
                break;
            case 'ptsans':
                $sh2font = 'PT Sans';
                break;
            case 'quicksand':
                $sh2font = 'Quicksand';
                break;    
            case 'ubuntu':
                $sh2font = 'Ubuntu';
                break;
            case 'oswald':
                $sh2font = 'Oswald';
                break;
 
            default:
                $sh2font = 'Open Sans';
                break;
        }

	$project_go_link_color = project_go_sanitize_hex_color( get_theme_mod( 'project_go_link_color' ) );
	$project_go_link_highlight_color = project_go_sanitize_hex_color( get_theme_mod( 'project_go_link_highlight_color' ) );
	$project_go_mobile_toggle_color = project_go_sanitize_hex_color( get_theme_mod( 'project_go_mobile_toggle_color' ) );
		$project_go_mobile_menu_bkg_color = project_go_sanitize_hex_color( get_theme_mod( 'project_go_mobile_menu_bkg_color' ) );
		$project_go_mobile_menu_color = project_go_sanitize_hex_color( get_theme_mod( 'project_go_mobile_menu_color' ) );
		$project_go_social_color = project_go_sanitize_hex_color( get_theme_mod( 'project_go_social_color' ) );
		$project_go_social_hover_color = project_go_sanitize_hex_color( get_theme_mod( 'project_go_social_hover_color' ) );

		?>
	<!-- project_go customizer CSS -->
	<style>
		body {
            font-family: '<?php echo $sfont; ?>', sans-serif;
        }
        body, button, input, select, textarea {
            font-family: '<?php echo $sfont; ?>', sans-serif;
        }
        h1 {
            font-family: '<?php echo $sh1font; ?>', sans-serif;
        }
        h2 {
            font-family: '<?php echo $sh2font; ?>', sans-serif;
        }
	
		a, a:visited {
			color: <?php echo $project_go_link_color; ?>;
		}
		a:hover,
		a:focus,
		a:active {
			color: <?php echo $project_go_link_highlight_color; ?>;
	
		}
		
		.main-navigation a
		{
			color: <?php echo $project_go_menu_color; ?>;
		}
		

		@media (max-width:768px) {
			#mobile-nav{
			background: <?php echo $project_go_mobile_menu_bkg_color; ?>;
		}
		#mobile-menu a {
		color: <?php echo $project_go_mobile_menu_color; ?>;
		}
		#menu-toggle {
		color: <?php echo $project_go_mobile_toggle_color; ?>;

		}

		}
	
?> </style> <?php 
}


// end if 

add_action( 'wp_head', 'project_go_add_customizer_css' );