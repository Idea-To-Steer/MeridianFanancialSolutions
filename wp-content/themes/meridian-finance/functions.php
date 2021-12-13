<?php
/**
 * meridian_finance functions and definitions
 *
 */
if ( ! function_exists( 'meridian_finance_theme_setup' ) ) : 
function meridian_finance_theme_setup() {
	// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );
	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'meridian_finance' ),
		'secondary'  => __( 'Secondary Menu', 'meridian_finance' ),
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );


	/**
	 * Add support for core custom logo.
	 *
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 75,
			'width'       => 372,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
endif;
add_action( 'after_setup_theme', 'meridian_finance_theme_setup' );



/**
 * Register widget area.
 */
function meridian_finance_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Contact Us', 'McClam' ),
		'id'            => 'footer-contact-us',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'McClam' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
}
add_action( 'widgets_init', 'meridian_finance_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function meridian_finance_scripts() {
    // Add style, used in the main stylesheet.
	wp_enqueue_style( 'meridian_finance-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap', array() );
	wp_enqueue_style( 'meridian_finance-Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;700;800;900&display=swap', array() );
	wp_enqueue_style( 'meridian_finance-bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array() );
	wp_enqueue_style( 'meridian_finance-all-min', get_template_directory_uri() . '/assets/css/all.min.css', array() );
	wp_enqueue_style( 'meridian_finance-slick-css', get_template_directory_uri() . '/assets/css/slick.css', array() );
	wp_enqueue_style( 'meridian_finance-slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css', array() );
	wp_enqueue_style( 'meridian_finance-aos-css', get_template_directory_uri() . '/assets/css/aos.css', array() );
	
	wp_enqueue_style( 'meridian_finance-main-css', get_template_directory_uri() . '/assets/css/custom-style.css', array() );


	// Load our main stylesheet.
	wp_enqueue_style( 'meridian_finance-style', get_stylesheet_uri() );



	wp_enqueue_script( 'meridian_finance-popper-min', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), '20151811', true );
	wp_enqueue_script( 'meridian_finance-bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '20151811', true );
	wp_enqueue_script( 'meridian_finance-bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), '20151811', true );
	wp_enqueue_script( 'meridian_finance-navAccordion-min', get_template_directory_uri() . '/assets/js/navAccordion.min.js', array( 'jquery' ), '20151811', true );
	wp_enqueue_script( 'meridian_finance-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), '20151811', true );
	wp_enqueue_script( 'meridian_finance-aos', get_template_directory_uri() . '/assets/js/aos.js', array( 'jquery' ), '20151811', true );



	wp_enqueue_script( 'meridian_finance-script', get_template_directory_uri() . '/assets/js/functions.js', array( 'jquery' ), '20151811', true );

}
add_action( 'wp_enqueue_scripts', 'meridian_finance_scripts' );


// Before VC Init
add_action( 'vc_before_init', 'vc_before_init_actions' );
function vc_before_init_actions() {
    // Link your VC elements's folder
    if( function_exists('vc_set_shortcodes_templates_dir') ){ 
        vc_set_shortcodes_templates_dir( get_template_directory() . '/vc-elements' );
    }
     
}


// =============== Custom Testimonial Post type create ================
add_action( 'init', 'custom_testimonial_create' );
function custom_testimonial_create() {

	$labels = array(
        'name'                => ( 'Testimonial' ),
        'singular_name'       => ( 'Testimonial' ),
        'menu_name'           => ( 'Testimonials' ),
        'parent_item_colon'   => ( 'Parent Testimonial' ),
        'all_items'           => ( 'All Testimonials' ),
        'view_item'           => ( 'View Testimonial' ),
        'add_new_item'        => ( 'Add New Testimonial' ),
        'add_new'             => ( 'Add New' ),
        'edit_item'           => ( 'Edit Testimonial' ),
        'update_item'         => ( 'Update Testimonial' ),
        'search_items'        => ( 'Search Testimonial' ),
        'not_found'           => ( 'Not Found' ),
        'not_found_in_trash'  => ( 'Not found in Trash' ),
    );

    $args = array(
        'label'               => __( 'testimonials' ),
        'description'         => __( 'All Testimonials' ),
        'labels'              => $labels,
        
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
         
        'taxonomies'          => array( 'genres' ),
        
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
        'capability_type'     => 'post',
        'show_in_rest' => true, 
    );

    register_post_type( 'testimonials', $args );
}


// ================ Short Code for Testimonial =================


function custom_testimonial_shortcode_content($a){

?>
<div class="testimonials-block">
	<div class="title">
		<h2>Client Testimonials</h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Itaque, sint!</p>
	</div>
	<div class="slider">
		<?php 

			$args = array( 'post_type' => 'testimonials', 'posts_per_page' => -1 );
			$the_query = new WP_Query( $args ); 
			// if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) : $the_query->the_post();
		?>

		<div class="item">
			<div class="img-block">
				<?php  
					$client_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
					if( $client_image_url ){								
				?>
				<img src="<?php echo $client_image_url; ?>" alt="" />
				<?php }else{ ?>
					<img src="http://meridianfinance.ideatosteer.com/wp-content/uploads/2021/10/person.jpg" alt="" />
				<?php } ?>
			</div>
			<div class="text-block">
				<?php the_content(); ?>
				<!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius quia iure maxime accusantium nesciunt commodi expedita, quasi laudantium illum facilis nam dolorum necessitatibus repellendus. Asperiores distinctio doloremque impedit voluptas omnis!</p> -->
				<!-- <h3>Etiam Ultricies</h3>
				<h4>Vivamus elit felis</h4> -->

				<h3><?php the_title(); ?></h3>
				<h4><?php the_field('designation'); ?></h4>
			</div>
		</div>

		<?php 
				endwhile;
			wp_reset_postdata(); 
			// endif; 
		?>
		<!-- <div class="item">
			<div class="img-block">
				<img src="http://meridianfinance.ideatosteer.com/wp-content/uploads/2021/10/person.jpg" alt="" />
			</div>
			<div class="text-block">
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius quia iure maxime accusantium nesciunt commodi expedita, quasi laudantium illum facilis nam dolorum necessitatibus repellendus. Asperiores distinctio doloremque impedit voluptas omnis!</p>
				<h3>Etiam Ultricies</h3>
				<h4>Vivamus elit felis</h4>
			</div>
		</div> -->
	</div>
</div>

<?php

}
function custom_testimonial_shortcode( $atts ) {
    $a = shortcode_atts( array(
        'title' => '',
		'sub_title' => '',
    ), $atts );

    ob_start();
	custom_testimonial_shortcode_content($a);
	$result = ob_get_contents();
	ob_end_clean();
	return $result;
}
add_shortcode( 'testimonial_shortcode', 'custom_testimonial_shortcode' );



// ============================ Case Studies POST TYPE Create =======================
add_action( 'init', 'case_studies_custom_post_type' );
// Creating a Studies Custom Post Type
function case_studies_custom_post_type() {


    ///Register post type start
    $labels = array(
		'name'                => __( 'Studies' ),
		'singular_name'       => __( 'Studies'),
		'menu_name'           => __( 'Studies'),
		'parent_item_colon'   => __( 'Parent Studies'),
		'all_items'           => __( 'All Studies'),
		'view_item'           => __( 'View Studies'),
		'add_new_item'        => __( 'Add New Studies'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Studies'),
		'update_item'         => __( 'Update Studies'),
		'search_items'        => __( 'Search Studies'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'studies'),
		'description'         => __( 'Best Crunchify Deals'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'excerpt', 'thumbnail','custom-fields',),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		//'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
	);
	register_post_type( 'studies', $args );	
	///Register post type end

	//Register taxonomy start
	$tax_labels = array(
        'name'              => _x( 'Case Study', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Case Study', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Case Study', 'textdomain' ),
        'all_items'         => __( 'All Case Study', 'textdomain' ),
        'parent_item'       => __( 'Parent Case Study', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Case Study:', 'textdomain' ),
        'edit_item'         => __( 'Edit Case Study', 'textdomain' ),
        'update_item'       => __( 'Update Case Study', 'textdomain' ),
        'add_new_item'      => __( 'Add New Case Study', 'textdomain' ),
        'new_item_name'     => __( 'New Case Study Name', 'textdomain' ),
        'menu_name'         => __( 'Case Study', 'textdomain' ),
    );
    
    $tax_args = array(
        'hierarchical'      => true,
        'labels'            => $tax_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'case-study' ),
    );
    
    register_taxonomy( 'case-study', array( 'studies' ), $tax_args );
	//Register taxonomy end

}

// ============= Custom Texonomy for case study =====================



// ========== ACF Option Page ============ 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Option Page',
		'menu_title'	=> 'Option Page',
		'menu_slug' 	=> 'option-page',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}