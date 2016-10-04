<?php
/**
 * Project Go functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Project_Go
 */

if ( ! function_exists( 'project_go_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function project_go_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Project Go, use a find and replace
	 * to change 'project-go' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'project-go', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'project-go' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'project_go_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'project_go_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function project_go_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'project_go_content_width', 640 );
}
add_action( 'after_setup_theme', 'project_go_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function project_go_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'project-go' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'project-go' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'project_go_widgets_init' );

/**
 * Custom Menus
 */

function register_footer_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_footer_menu' );

function register_top_menu() {
  register_nav_menu('top-menu',__( 'Top Menu' ));
}
add_action( 'init', 'register_top_menu' );
function register_mobile_menu() {
  register_nav_menu('mobile-menu',__( 'Mobile Menu' ));
}
add_action( 'init', 'register_mobile_menu' );

/**
 * Enqueue scripts and styles.
 */
function project_go_scripts() {

	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), 'v3.3.7', true );
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css'	 );
	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/bootstrap/css/bootstrap-theme.min.css'	 );
	wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/bootstrap/lightbox/ekko-lightbox.min.css'	 );
	wp_enqueue_script( 'lightbox-script', get_template_directory_uri() . '/bootstrap/lightbox/ekko-lightbox.min.js', array( 'jquery' ), 'v4.0.2', true );
	wp_enqueue_style( 'project-go-style', get_stylesheet_uri() );

	wp_enqueue_script( 'project-go-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'project-go-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'donate', get_template_directory_uri() . '/js/donate.min.js', array( 'jquery' ), '1', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'project_go_scripts' );

//Add Google Fonts
add_action('init', 'google_font_style'); 
  function google_font_style(){ 
    wp_register_style( 'GoogleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700,800,700italic|Raleway:400,700,300,100,500,800,400italic,100italic,500italic,700italic,800italic|Roboto:400,100,100italic,300,300italic,400italic,900italic,500,500italic,700,700italic,900|Slabo+27px|Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic|Montserrat:400,700|Ubuntu:300,300i,400,400i,500,500i,700,700i|Oswald:300,400,700|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,700|PT+Sans:400,700'); 
    wp_enqueue_style( 'GoogleFonts' ); 
 }

 add_filter('widget_text', 'do_shortcode');
//Opengraph for FB
function doctype_opengraph($output) {
    return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'doctype_opengraph');
function fb_opengraph() {
    global $post;
 
    if(is_single()) {
        if(has_post_thumbnail($post->ID)) {
            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium');
            $img_src_url = $img_src[0]; // this returns just the URL of the image
        } else {
            $img_src_url = get_stylesheet_directory_uri() . '/inc/images/logo.jpg';
        }
        if($excerpt = $post->post_excerpt) {
            $excerpt = strip_tags($post->post_excerpt);
            $excerpt = str_replace("", "'", $excerpt);
        } else {
            $excerpt = get_bloginfo('description');
        }
        ?>
 
    <meta property="og:title" content="<?php echo the_title(); ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src_url; ?>"/>
 
<?php
    } else {
        return;
    }
}
add_action('wp_head', 'fb_opengraph', 5);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom post type
 */
require get_template_directory() . '/inc/custom-post-type.php';


add_action( 'wp_enqueue_scripts', 'add_jquery' );
add_action( 'wp_footer', 'fixed_menu_onscroll' );
add_action( 'wp_footer', 'slide_out_mobile_nav' );
add_action( 'wp_footer', 'mouseover_change_image' );
add_action( 'wp_footer', 'team_show' );
add_action( 'wp_footer', 'vertical_center_modal' );
add_action( 'wp_footer', 'lightbox_toggle' );

function add_jquery()
{
	wp_enqueue_script( 'jquery' );
}

function fixed_menu_onscroll()
{  
?>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$(window).bind('scroll', function() {
			if ($(window).scrollTop() > 50) {
				 $('header#masthead').addClass('fixed');
				 $('body').addClass('fixed');
    } else {
        $('header#masthead').removeClass('fixed');
        $('body').removeClass('fixed');
			}
		});
	});
	</script>
<?php
}

function mouseover_change_image()
{ ?>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.img-normal').click(function() {
    	var clickId= $(this).attr('id');
    	// var src = $(this).attr("src").replace("goals", "hover");
     //  $(this).attr('src',src);
      $('#' + clickId).addClass('hover');
    
  });
		$('button.goal-btn').click(function() {
    	var clickId1= $(this).attr('id');
    	// var src = $(this).attr("src").replace("goals", "hover");
     //  $(this).attr('src',src);
      $('#' + clickId1).removeClass('hover');
    
  });



	});
	</script>
<?php
}

function team_show()
{ ?>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.board-button').click(function() {
    	var hoverId= $(this).attr('id');
    	$('.board-info').hide()
      $('#' + hoverId + '.board-info').toggle('slow');
      $('html, body').animate({
                    scrollTop: $('#' + hoverId + '.board-info').offset().top
                }, 2000);
      
    
  });



	});
	</script>
<?php
}

function slide_out_mobile_nav()
{
?>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$('#menu-toggle').click(function() {
        if($('#menu-toggle').hasClass('closed')) {
            $('#mobile-nav').animate({left: "0"}, 400);
            $(this).removeClass('closed').addClass('open');
         }
        else if($('#menu-toggle').hasClass('open')) {
            $('#mobile-nav').animate({left: "100%"}, 400);            
          }  
    });
		$('#menu-toggle-open').click(function() {
			$('#mobile-nav').animate({left: "100%"}, 400);
			$('#menu-toggle').removeClass('open').addClass('closed');
          });
		});
</script>
<?php
}
function vertical_center_modal()
{
?>
<script type="text/javascript">
      // Vertical centered modals
// you can give custom class like this // var modalVerticalCenterClass = ".modal.modal-vcenter";
jQuery(document).ready(function($){
var modalVerticalCenterClass = ".modal";
function centerModals($element) {
    var $modals;
    if ($element.length) {
        $modals = $element;
    } else {
        $modals = $(modalVerticalCenterClass + ':visible');
    }
    $modals.each( function(i) {
        var $clone = $(this).clone().css('display', 'block').appendTo('body');
        var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
        top = top > 0 ? top : 0;
        $clone.remove();
        $(this).find('.modal-content').css("margin-top", top);
    });
}
$(modalVerticalCenterClass).on('show.bs.modal', function(e) {
    centerModals($(this));
});
$(window).on('resize', centerModals);
});
    </script>
<?php
}

function rgdeuce_sanitize_copyright( $input ) {
    return strip_tags( stripslashes( $input ) );
}

add_image_size( 'team-thumb', 250, 250, array( 'center', 'center' ) ); // Hard crop center center
add_image_size( 'team-full', 800, 800, array( 'center', 'center' ) ); // Hard crop center center
add_image_size( 'pets-thumb', 300, 300, array( 'center', 'center' ) ); // Hard crop center center

function lightbox_toggle()
{
?>
	<script type="text/javascript">
	jQuery(document).ready(function($){
$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
}); 
});
</script>
<?php
}