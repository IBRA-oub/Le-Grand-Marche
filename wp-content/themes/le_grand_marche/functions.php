<?php
/**
 * le_grand_marche functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package le_grand_marche
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function le_grand_marche_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on le_grand_marche, use a find and replace
	 * to change 'le_grand_marche' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('le_grand_marche', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'le_grand_marche'),
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
			'le_grand_marche_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'le_grand_marche_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function le_grand_marche_content_width()
{
	$GLOBALS['content_width'] = apply_filters('le_grand_marche_content_width', 640);
}
add_action('after_setup_theme', 'le_grand_marche_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function le_grand_marche_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'le_grand_marche'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'le_grand_marche'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'le_grand_marche_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function le_grand_marche_scripts()
{
	wp_enqueue_style('le_grand_marche-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('le_grand_marche-style', 'rtl', 'replace');

	wp_enqueue_script('le_grand_marche-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'le_grand_marche_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Enqueue styles.
 */

function theme_enqueue_styles()
{
	wp_enqueue_style('theme-styles', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
	wp_enqueue_style('auth-styles', get_template_directory_uri() . '/assets/css/auth-css.css', array(), '1.0.0');
	wp_enqueue_style('product-styles', get_template_directory_uri() . '/assets/css/product-css.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

/**
 * Enqueue javascript.
 */

function theme_enqueue_javascript()
{
	wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0');
	wp_enqueue_script('auth-script', get_template_directory_uri() . '/assets/js/auth-js.js', array(), '1.0.0');
	wp_enqueue_script('pop-up-script', get_template_directory_uri() . '/assets/js/pop-up.js', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_javascript');
/**
 * Constum fonts
 */

function enqueue_custom_fonsts()
{
	if (!is_admin()) {
		wp_register_style('poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swa');
	}
}

add_action('wp_enqueue_script', 'enqueue_custom_fonsts');

/**
 * remove woocommwrce style
 */

function remove_woocommerce_styles($enqueue_styles)
{
	unset($enqueue_styles['woocommerce-general']);	// Remove the gloss
	unset($enqueue_styles['woocommerce-layout']);		// Remove the layout
	unset($enqueue_styles['woocommerce-smallscreen']);	// Remove the smallscreen optimisation
	return $enqueue_styles;
}
add_filter('woocommerce_enqueue_styles', 'remove_woocommerce_styles');



/**
 * Enqueue your own stylesheet
 */

//  function wp_enqueue_woocommerce_style(){
// 	wp_register_style( 'mytheme-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce/woocommerce.css' );

// 	if ( class_exists( 'woocommerce' ) ) {
// 		wp_enqueue_style( 'mytheme-woocommerce' );
// 	}
// }

// add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );

/**
 *  best sellers slider
 */

function load_best_sellers()
{
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$limit = 4;
	$offset = ($page - 1) * $limit;

	$args = array(
		'status' => 'publish',
		'limit' => $limit,
		'offset' => $offset,
		'orderby' => 'popularity',
	);

	$products = wc_get_products($args);

	foreach ($products as $product) {
		wc_get_template_part('content', 'product', array('product' => $product));
	}

	wp_die();
}

add_action('wp_ajax_nopriv_load_best_sellers', 'load_best_sellers');
add_action('wp_ajax_load_best_sellers', 'load_best_sellers');

// Inclure les fonctions de login/register
require_once get_template_directory() . '/inc/authentification.php';