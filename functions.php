<?php
/**
 * realwanaka functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package realwanaka
 */

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

if ( ! function_exists( 'realwanaka_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function realwanaka_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on realwanaka, use a find and replace
	 * to change 'realwanaka' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'realwanaka', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'realwanaka' ),
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
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'realwanaka_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'realwanaka_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function realwanaka_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'realwanaka_content_width', 640 );
}
add_action( 'after_setup_theme', 'realwanaka_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function realwanaka_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'realwanaka' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'realwanaka_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function realwanaka_scripts() {
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
	wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	wp_enqueue_style('primary-font', 'https://fonts.googleapis.com/css?family=Hind+Siliguri:400,700' );
	wp_enqueue_style('secondary-font', 'https://fonts.googleapis.com/css?family=Kanit:400,700' );

	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'realwanaka-style', get_stylesheet_uri() );	

	wp_enqueue_script( 'jquery-1.11', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.min.js', array(), '1.0.0', true );

	wp_enqueue_script( 'bx-slider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'realwanaka_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the Custom Footer feature.
 */
require get_template_directory() . '/inc/custom-footer.php';


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

function my_epl_unset_additional_features($group) {
	return;
}
add_filter('epl_meta_box_block_epl_additional_features_section_id', 'my_epl_unset_additional_features');