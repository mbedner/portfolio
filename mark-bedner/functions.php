<?php
/**
 * Mark Bedner functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mark_Bedner
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'mark_bedner_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mark_bedner_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Mark Bedner, use a find and replace
		 * to change 'mark-bedner' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mark-bedner', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'mark-bedner' ),
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
				'mark_bedner_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'mark_bedner_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mark_bedner_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mark_bedner_content_width', 640 );
}
add_action( 'after_setup_theme', 'mark_bedner_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mark_bedner_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mark-bedner' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mark-bedner' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mark_bedner_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mark_bedner_scripts() {
	wp_enqueue_style( 'mark-bedner-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'splide-style', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css', [], null );
	// wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&family=Poppins:ital,wght@0,400;0,500;0,600;1,400&display=swap', [], null );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap', [], null );
	wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', [], null );
	wp_enqueue_style( 'mark-bedner-main-styles', get_template_directory_uri() . '/css/main-styles.css', array(), _S_VERSION );
	wp_style_add_data( 'mark-bedner-style', 'rtl', 'replace' );
		
	
	wp_enqueue_script( 'barba', 'https://cdn.jsdelivr.net/npm/@barba/core', array(), _S_VERSION, true );
	wp_enqueue_script( 'splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mark-bedner-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mark_bedner_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/** 
 * Creates ACF Options Pages.
 */

add_action('acf/init', 'testimonials_op_init');
function testimonials_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Testimonials List'),
            'menu_title'    => __('Testimonials'),
            'menu_slug'     => 'testimonials-list',
            'capability'    => 'edit_posts',
			'redirect'      => false,
			'icon_url'      => 'dashicons-editor-quote',
        ));
    }

	// Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Employers List'),
            'menu_title'    => __('Employers'),
            'menu_slug'     => 'employers-list',
            'capability'    => 'edit_posts',
			'redirect'      => false,
			'icon_url'      => 'dashicons-businessperson',
        ));
	}
	
	 // Check function exists.
	 if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
			'redirect'      => false,
			'position'		=> 2,
		));

		$footer_subpage = acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-general-settings',
		));
		
    }
}

/** 
 * Creates Custom Post Types.
 */

function create_posttype() {
 
    register_post_type( 'Portfolio',
    // CPT Options
        array(
            'labels' 			=> array(
                'name'               => _x( 'Portfolio', 'post type general name' ),
				'singular_name'      => _x( 'Portfolio Item', 'post type singular name' ),
				'add_new'            => _x( 'Add New', 'portfolio' ),
				'add_new_item'       => __( 'Add New' ),
				'edit_item'          => __( 'Edit Portfolio Item' ),
				'new_item'           => __( 'New Portfolio Item' ),
				'all_items'          => __( 'All Portfolio Items' ),
				'view_item'          => __( 'View Portfolio Item' ),
				'search_items'       => __( 'Search Portfolio Items' ),
				'not_found'          => __( 'No portfolio items found' ),
				'not_found_in_trash' => __( 'No portfolio items found in the Trash' ), 
				'menu_name'          => 'Portfolio',
            ),
            'public' 			=> true,
            'has_archive' 		=> false,
			'show_in_rest' 		=> true,
			'menu_icon'         => 'dashicons-portfolio',
			'supports'          => array('thumbnail', 'title'),
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


// Include Custom Short Codes 
include('custom-shortcodes.php');


/**
 * Add In Header Updates
 */


if (!function_exists('header_theming_updates') && function_exists('get_field')) {
    function header_theming_updates()
    {
        get_template_part('includes/theming/theme-variables');
    }
    add_action('header_theming_styles', 'header_theming_updates');
}