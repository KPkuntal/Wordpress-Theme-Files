<?php
ob_start();
include 'admin/custom-admin/featured-meta-box.php';

// REDUX ADMIN
require_once (dirname(__FILE__) . '/admin/redux/config.php');
function redux_custom_css() {
	wp_enqueue_style('admin_styles' , get_template_directory_uri().'/admin/redux/redux-custom.css');
}
add_action('admin_head', 'redux_custom_css');




// ADD STYLES AND SCRIPTS

function add_styles_scripts() {
wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', array(), true );
wp_enqueue_style( 'style', get_stylesheet_uri(), array(), time() );
wp_enqueue_style( 'js_composer_front' );

	// ENQUEUE BOOTSTRAP JQUERY.
	wp_enqueue_script(
		'bootstrap',
		get_parent_theme_file_uri( '/js/bootstrap.min.js' ),
		array( 'jquery' ),
		false,
		true
	);
	// ENQUEUE OWL JQUERY.
	wp_enqueue_script(
		'script-owl',
		get_parent_theme_file_uri( '/js/owl.carousel.min.js' ),
		array( 'jquery' ),
		false,
		true
	);

// ENQUEUE MATCHHEIGHT JQUERY.
	wp_enqueue_script(
		'matchHeight',
		get_parent_theme_file_uri( '/js/jquery.matchHeight-min.js' ),
		array( 'jquery' ),
		false,
		true
	);
	
	// ENQUEUE MATCHHEIGHT JQUERY.
	wp_enqueue_script(
		'masonry',
		get_parent_theme_file_uri( '/js/masonry.pkgd.min.js' ),
		array( 'jquery' ),
		false,
		true
	);


// Load comment-reply.js into footer.
	if ( is_singular() && comments_open() && ( get_option( 'thread_comments' ) === 1 ) ) {
		// Load comment-reply.js (into footer).
		wp_enqueue_script( 'comment-reply', 'wp-includes/js/comment-reply', array(), false, true );
	}
}
add_action( 'wp_enqueue_scripts', 'add_styles_scripts' );

// ADD STYLES AND SCRIPTS




// MAIN SIDEBAR
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Main Sidebar',
		'id'            => 'main-sidebar',
		'description'   => 'This is the main sidebar for this website.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer One',
		'id'            => 'footer-one',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer Two',
		'id'            => 'footer-two',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer Three',
		'id'            => 'footer-three',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer Four',
		'id'            => 'footer-four',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer Five',
		'id'            => 'footer-five',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}


//postcustom

function sk_register_slide_post_type() {
	$labels = array(
		'name' => 'Testimonials',
		'singular_name' => 'Testimonials',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Testimonials',
		'edit_item' => 'Edit Testimonials',
		'new_item' => 'New Testimonials',
		'view_item' => 'View Testimonials',
		'search_items' => 'Search Testimonials',
		'not_found' =>  'No Testimonials found',
		'not_found_in_trash' => 'No Testimonials found in trash',
		'parent_item_colon' => '',
		'menu_name' => 'Testimonials'
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title','editor','thumbnail','custom-fields' )
	); 

	register_post_type( 'slide', $args );
}
add_action( 'init', 'sk_register_slide_post_type' );


function custom_blogpost_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Blogs', 'Post Type General Name', 'petervalentinehoward' ),
		'singular_name'       => _x( 'Blog', 'Post Type Singular Name', 'petervalentinehoward' ),
		'menu_name'           => __( 'Blogs', 'petervalentinehoward' ),
		'parent_item_colon'   => __( 'Parent Blog', 'petervalentinehoward' ),
		'all_items'           => __( 'All Blogs', 'petervalentinehoward' ),
		'view_item'           => __( 'View Blog', 'petervalentinehoward' ),
		'add_new_item'        => __( 'Add New Blog', 'petervalentinehoward' ),
		'add_new'             => __( 'Add New', 'petervalentinehoward' ),
		'edit_item'           => __( 'Edit Blog', 'petervalentinehoward' ),
		'update_item'         => __( 'Update Blog', 'petervalentinehoward' ),
		'search_items'        => __( 'Search Blog', 'petervalentinehoward' ),
		'not_found'           => __( 'Not Found', 'petervalentinehoward' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'petervalentinehoward' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'blogs', 'petervalentinehoward' ),
		'description'         => __( 'Blogs news and reviews', 'petervalentinehoward' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'blogsa', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_blogpost_type', 0 );

function tr_create_my_taxonomy() {

    register_taxonomy(
        'blogsa-category',
        'blogsa',
        array(
            'label' => __( 'Category' ),
            'rewrite' => array( 'slug' => 'blogsa-category' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'tr_create_my_taxonomy' );




function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length_s( $length  ) {
        return 100;
  
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length_s', 999 );


?>


