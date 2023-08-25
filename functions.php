<?php
/**
 * iptvsmart functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package iptvsmart
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function iptvsmart_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on iptvsmart, use a find and replace
		* to change 'iptvsmart' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'iptvsmart', get_template_directory() . '/languages' );

    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
		
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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'iptvsmart' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'iptvsmart_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'iptvsmart_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function iptvsmart_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'iptvsmart_content_width', 640 );
}
add_action( 'after_setup_theme', 'iptvsmart_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function iptvsmart_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'iptvsmart' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'iptvsmart' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'iptvsmart_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function iptvsmart_scripts() {
	wp_enqueue_style( 'iptvsmart-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-aos', get_template_directory_uri() . '/assets/css/aos.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-all', get_template_directory_uri() . '/assets/css/all.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-odometer', get_template_directory_uri() . '/assets/css/odometer.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-remixicon', get_template_directory_uri() . '/assets/css/remixicon.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-popup', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-custom', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-channels', get_template_directory_uri() . '/assets/css/channels.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-channelsmobile', get_template_directory_uri() . '/assets/css/channelsmobile.css', array(), _S_VERSION );
	wp_enqueue_style( 'iptvsmart-fonts', '//cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css', array(), _S_VERSION );

	wp_enqueue_style( 'iptvsmart-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'iptvsmart-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'iptvsmart-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'iptvsmart-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'iptvsmart-swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'iptvsmart-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'iptvsmart-meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'iptvsmart-appear', get_template_directory_uri() . '/assets/js/appear.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'iptvsmart-odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'iptvsmart-validator', get_template_directory_uri() . '/assets/js/form-validator.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'iptvsmart-contact', get_template_directory_uri() . '/assets/js/contact-form-script.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'iptvsmart-ajaxchimp', get_template_directory_uri() . '/assets/js/ajaxchimp.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'iptvsmart-aos', get_template_directory_uri() . '/assets/js/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'iptvsmart-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'iptvsmart_scripts' );



add_filter('nav_menu_css_class', function ($classes, $item, $args) {
    if( isset($args->add_li_class) ) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}, 1, 3 );


add_filter( 'nav_menu_link_attributes', function($atts) {
	$atts['class'] = "nav-link";
	return $atts;
}, 100, 1 );


add_filter( 'get_custom_logo', function( $html ) {
    $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );
    $html = str_replace( 'custom-logo', 'img-fluid', $html );
    $html = preg_replace('/(width|height)="\d+"\s/', "", $html);
    return $html;
} );



add_action('acf/init', function () {
    remove_filter('acf_the_content', 'wpautop' );
} );