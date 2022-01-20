<?php
/**
 * Peoplecount functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Peoplecount
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'peoplecount_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function peoplecount_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Peoplecount, use a find and replace
		 * to change 'peoplecount' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'peoplecount', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'peoplecount' ),
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
				'peoplecount_custom_background_args',
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
add_action( 'after_setup_theme', 'peoplecount_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function peoplecount_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'peoplecount_content_width', 640 );
}
add_action( 'after_setup_theme', 'peoplecount_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function peoplecount_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'peoplecount' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'peoplecount' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'peoplecount_widgets_init' );


add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');

function misha_filter_function(){
	$args = array(
		'orderby' => 'date', // we will sort posts by date
		//'order'	=> $_POST['date'] // ASC or DESC
	);
 
	// for taxonomies / categories
	if( isset( $_POST['preferencefilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'preference',
				'field' => 'id',
				'terms' => $_POST['preferencefilter'],
			),


		);
	$args['search_filter_id'] = 215;
 
	// if you want to use multiple checkboxed, just duplicate the above 5 lines for each checkbox
 
	$query = new WP_Query( $args ); ?>

<?php if( $query->have_posts() ) : ?>
<?php while( $query->have_posts() ): $query->the_post(); 

			$custom_fields = get_post_custom( get_the_ID() );
                    ?>
<td>
    <!-- displays the featured image -->
    <span class="rounded-circle me-2"><?php the_post_thumbnail( array( 30, 30 ) ); ?></span>
    <!-- displays the name of the applicant -->
    <?php the_title(); ?>
</td>
<td>
    <!-- the name of the job is retrieved using custom post id -->
    <?php 
                                    // post id of the job listing is saved in the position field
                        $position = $custom_fields['position'][0];
                        $job_listing_post = get_post( $position );
                        echo $job_listing_post->post_title;
                        ?>
</td>
<td>New</td>
<td><?php echo $custom_fields['date_of_birth'][0]; ?></td>
<td>
    <?php  
                                // date the job was applied to
                        the_time('F j, Y'); 
                        ?>
</td>
<td><?php echo $custom_fields['email'][0]; ?></td>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php 
		else :
			echo 'No posts found';
		endif;
		die();

}

/**
 * function completed_application
 * Checks to see if the current user has completed an application.
 * @param [type] $current_user
 * @return mixed true if the user has completed an application, false otherwise.
 * @author Nazere Wright <nazwrightthedeveloper@gmail.com>
 */
function completed_application( $current_user ){
	if( empty( $current_user ) ):
		return;
	endif;
	$application_form_id = 1;  // form id of the gravity form for the job application.
	$user_id = $current_user->ID;
	$search_criteria['field_filters'][] = array( 'key'=> 'created_by', 'value' => $user_id );
	// get the entry with the current user id;
	$matched_entries = GFAPI::get_entries( $application_form_id, $search_criteria );
	return ( !empty( $matched_entries ) );
}

/**
 * function user_has_permissions
 * Determines the current user has candidate capabilities.
 * @param mixed $capability - permissions that the current user has.
 * @return bool true if the user is a candidate.
 * @author Nazere Wright <nazwrightthedeveloper@gmail.com>
 */
function user_has_permissions( $capability ){
	return ( is_user_logged_in() && current_user_can( $capability ) );
}

/**
 * function render_onboarding 
 * Renders the onboarding form for if a user has completed their application.
 * @param [GForm] $form  the current form being rendered.
 * @return mixed returns the rendered form or an error message.
 * @author Nazere Wright <nazwrightthedeveloper@gmail.com>
 */
function render_onboarding_packet( $form ){
	// check if this user is a candidate and logged in 
	if( !user_has_permissions( 'subscriber' ) ):
		//echo 'You do not have permissions to view this form.';
		//return;
	endif;
	$current_user = wp_get_current_user();
	if( completed_application( $current_user ) ):
		return $form;	
	endif;
	echo 'Please complete an application prior to filling out an onboarding packet. 
		<a href= "http://localhost:8888/wordpress/job-application-2/" > Job Application </a>';
}
// only hook this function to the form with ID 6 (onboarding packet)
add_action( 'gform_pre_render_6', 'render_onboarding_packet' );


/**
 * function increment_number_of_candidates
 * Increments the number of candidates for a job listing when a candidate submits a job application.
 * @param [mixed] $form The Gravity Form Object.
 * @return void
 */
function increment_number_of_candidates( $form ){
	// check if there is anything in a submission for 
	if( !isset( $_POST['input_147'] ) ):
		return;
	endif;
	$post_id  = $_POST['input_147'];
	$meta_key = 'number_of_candidates';
	$custom_fields = get_post_custom( $post_id ); 
	$meta_value = $custom_fields['number_of_candidates'][0];
	if( !isset( $meta_value ) ):
		$meta_value = 1;
	else:
		$meta_value ++; 
	endif;
	// could run it through a function to check if it is a number bc it is a post id;
	update_post_meta($post_id, $meta_key, $meta_value);
	return $form;
}
// everytime the job application is submitted, run this function.
add_action( 'gform_pre_submission_1', 'update_number_of_candidates' );


function update_application_status( $step_id, $entry_id, $form_id, $status ){

}
add_action( 'gravityflow_step_complete', 'update_application_status', 10, 4 );

function shortcode_handler_function( $atts, $content, $tag ){ 
	if( class_exists('Dynamic_Featured_Image') ) {
	 global $post;
     global $dynamic_featured_image;
     $featured_images = $dynamic_featured_image->get_featured_images( $post->ID );
	  echo '<img src="'. $featured_images[0]['full'] .'"/>' ;
    //You can now loop through the image to display them as required
 }
}
add_shortcode( 'dfi_anywhere', 'shortcode_handler_function' );

/**
 * Enqueue scripts and styles.
 */
function peoplecount_scripts() {
	wp_enqueue_style( 'peoplecount-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" );
	wp_enqueue_script( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" );
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri(). '/assets/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-init', get_template_directory_uri(). '/assets/js/bs-init.js' );
	wp_enqueue_script( 'theme', get_template_directory_uri(). '/assets/js/theme.js' );
	wp_enqueue_script("jquery");
	wp_style_add_data( 'peoplecount-style', 'rtl', 'replace' );


	wp_enqueue_script( 'peoplecount-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'peoplecount_scripts' );

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