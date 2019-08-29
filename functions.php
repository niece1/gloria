<?php
/**
 * gl functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gl
 */

if ( ! function_exists( 'gl_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gl_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gl, use a find and replace
		 * to change 'gl' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gl', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-formats', array('gallery', 'link', 'image', 'video') );


		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gl' ),
			'menu-2' => esc_html__( 'Footer', 'gl' ),
			'menu-3' => esc_html__( 'Responsive', 'gl' ),
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
		add_theme_support( 'custom-background', apply_filters( 'gl_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'gl_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gl_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gl_content_width', 640 );
}
add_action( 'after_setup_theme', 'gl_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gl_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gl' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gl' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gl_widgets_init' );

/*Brackets remove in Category Widget*/
function gl_categor($html, $args) {
	$html = str_replace('</a> (', '</a><span class="pull-right">', $html);
	$html = str_replace(')', '</span>', $html);
	return $html;
}
add_filter('wp_list_categories', 'gl_categor', 11, 2);

/*Tag Cloud Filter*/
function gl_tag_cloud_widget($args) {
	$args['smallest'] = '1.5';
	$args['largest'] = '1.5';
	$args['unit'] = 'rem';
	return $args;
}
add_filter('widget_tag_cloud_args', 'gl_tag_cloud_widget');

/**
 * Enqueue scripts and styles.
 */
function gl_scripts() {
	wp_enqueue_style( 'gl-style', get_stylesheet_uri() );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css', array ('gl-style') );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick-theme.css',  array ('gl-style') );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/Magnific-Popup-master/dist/magnific-popup.css',  array ('gl-style') );

    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.js', array ('jquery'), '', true);
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/Magnific-Popup-master/dist/jquery.magnific-popup.min.js', array ('jquery'), '', true);
    wp_enqueue_script( 'gl-main', get_template_directory_uri() . '/js/main.js', array ('jquery'), '', true);
	

	wp_enqueue_script( 'gl-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gl-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'gl_scripts' );

function ale_add_scripts($hook) {
	if ( $hook=='post.php' || $hook == 'post-new.php' || $hook == 'page-new.php' || $hook =='page.php' ) {
	wp_enqueue_script( 'aletheme_metaboxes', get_template_directory_uri() . '/inc/js/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox' ) );
    }
}
add_action('admin_enqueue_scripts', 'ale_add_scripts', 10);

add_image_size( 'slickslider', 1920, 1280, true );


/*Page title filters*/
add_filter( 'document_title_separator', function(){ return ''; } );
add_filter('document_title_parts', function( $parts ){
	if( isset($parts['site']) ) unset($parts['site']);
	return $parts;
});

/*Excerpt length filter*/
add_filter( 'excerpt_length', function(){
	return 30;
} );

add_filter('excerpt_more', function($more) {
	return '...';
});

/*Reorder of comment fields*/
add_filter('comment_form_fields', 'gl_reorder_comment_fields' );
function gl_reorder_comment_fields( $fields ){
	// die(print_r( $fields )); // посмотрим какие поля есть

	$new_fields = array(); // сюда соберем поля в новом порядке

	$myorder = array('author','email','url','comment'); // нужный порядок

	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}

	// если остались еще какие-то поля добавим их в конец
	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;

	return $new_fields;
}

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
/*TGM*/
require get_template_directory() . '/inc/init-tgm.php';
/*Theme options*/
require get_template_directory() . '/inc/theme-options.php';
/*Register Search Form*/
require get_template_directory() . '/inc/searchform.php';
/*Register Custom Post Type*/
require get_template_directory() . '/inc/post-type.php';
/*Breadcrumbs*/
require get_template_directory() . '/inc/breadcrumbs.php';
/*Metaboxes*/
require get_template_directory() . '/inc/metaboxes.php';
/*Pagination*/
require get_template_directory() . '/inc/pagination.php';
/*gl-recent_post-widget*/
require get_template_directory() . '/inc/gl-recent_post-widget.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

