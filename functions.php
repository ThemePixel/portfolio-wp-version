<?php
/**
 * Portfolio-wp. version functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Portfolio-wp._version
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
function portfolio_wp_version_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Portfolio-wp. version, use a find and replace
		* to change 'portfolio-wp-version' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'portfolio-wp-version', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'portfolio-wp-version' ),
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
			'portfolio_wp_version_custom_background_args',
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
add_action( 'after_setup_theme', 'portfolio_wp_version_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portfolio_wp_version_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'portfolio_wp_version_content_width', 640 );
}
add_action( 'after_setup_theme', 'portfolio_wp_version_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_wp_version_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'portfolio-wp-version' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'portfolio-wp-version' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'portfolio_wp_version_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function portfolio_wp_version_scripts() {
	wp_enqueue_style( 'portfolio-wp-version-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	wp_enqueue_style( 'portfolio-wp-version-main',  get_template_directory_uri().'/assets/style/main.css');
	wp_enqueue_style( 'portfolio-wp-version-swiper-bundle.min',  get_template_directory_uri().'/assets/swiper-slider/swiper-bundle.min.css');


    wp_enqueue_script( 'portfolio-wp-version-scripts', get_template_directory_uri() . '/assets/scripts.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/swiper-slider/swiper-bundle.min.js', array(), _S_VERSION, true );
	









	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfolio_wp_version_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */

 function gmt_allow_iframes_filter( $allowedposttags ) {

	// Only change for users who can publish posts
	if ( !current_user_can( 'publish_posts' ) ) return $allowedposttags;

	// Allow iframes and the following attributes
	$allowedposttags['iframe'] = array(
		'align' => true,
		'width' => true,
		'height' => true,
		'frameborder' => true,
		'name' => true,
		'src' => true,
		'id' => true,
		'class' => true,
		'style' => true,
		'scrolling' => true,
		'marginwidth' => true,
		'marginheight' => true,
	);

	return $allowedposttags;
}
add_filter( 'wp_kses_allowed_html', 'gmt_allow_iframes_filter' );