<?php
/**
 * ssc15 functions and definitions
 *
 * @package ssc15
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'ssc15_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ssc15_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ssc15, use a find and replace
	 * to change 'ssc15' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ssc15', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ssc15' ),
		'mobile' => __( 'Mobile Menu', 'ssc15'),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ssc15_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );


}
endif; // ssc15_setup
add_action( 'after_setup_theme', 'ssc15_setup' );

function contact_post_init() {
    $args = array(
      'label' => 'Contacts',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'contact-posts'),
        'query_var' => true,
        'menu_icon' => 'dashicons-id',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'contact_posts', $args );
}
add_action( 'init', 'contact_post_init' );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function ssc15_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ssc15' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'ssc15_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ssc15_scripts() {
	wp_enqueue_style( 'ssc15-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ssc15-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'ssc15-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ssc15_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
/**
	* Include Advanced Custom Fields
	*/

include_once('advanced-custom-fields/acf.php');

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_contact-post',
		'title' => 'Contact Post',
		'fields' => array (
			array (
				'key' => 'field_545c74f1303f9',
				'label' => 'Contact Image',
				'name' => 'contact_image',
				'type' => 'image',
				'instructions' => 'Add an image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_545c59ef768d8',
				'label' => 'Job Title',
				'name' => 'job_title',
				'type' => 'text',
				'instructions' => 'Fill in the job title of the employee',
				'default_value' => '',
				'placeholder' => 'Job Title',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_545c6097d304d',
				'label' => 'Contact Address',
				'name' => 'contact_address',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'Where does this person receive mail?',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_545c6be9887d4',
				'label' => 'Country Code',
				'name' => 'contact_country_code',
				'type' => 'text',
				'instructions' => 'Enter the numeric country code for the phone number.',
				'default_value' => '+1',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_545c60cc9e623',
				'label' => 'Contact Number',
				'name' => 'contact_number',
				'type' => 'text',
				'instructions' => 'Enter Contact\'s Phone Number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_545c619c8ffce',
				'label' => 'Contact Email',
				'name' => 'contact_email',
				'type' => 'email',
				'instructions' => 'What is the contact\'s email',
				'default_value' => '',
				'placeholder' => 'Contact Email',
				'prepend' => '',
				'append' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'contact_posts',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'author',
				7 => 'format',
				8 => 'categories',
				9 => 'tags',
				10 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}


/**
	Adding login/logout buttons
**/

add_filter( 'wp_nav_menu_items', 'wti_loginout_menu_link', 10, 2 );

function wti_loginout_menu_link( $items, $args ) {
      if (is_user_logged_in()) {
         $items .= '<li class="right"><a href="'.get_site_url().'/my-account">My Account</a></li>';
      } else {
         $items .= '<li class="right"><a href="'.get_site_url().'/log-in">Log In</a></li>';
}
   return $items;
}

/*Adding custom profile fields

	<!--
				Gender
				First Name
				Middle Name
				Last Name
				Birth Date(dd dates)
				Passport number (if intl)
				Passport country (if intl)(dd)
				Driver License #
				Driver License State(dd)
				Driver License Expiration(dd dates)
				Username
				Password
				Verify Password
				Email Address
				Street Address
				City
				State(dd)
				Postal Code
				Country(dd)
				Phone Number
				Alt Phone Number
				Cell Phone
				Fax Number
				Shirt Size (dd)
				
				*/


function modify_contact_methods($profile_fields) {

	// Add new fields
	$profile_fields['middle_name'] = 'Middle Name';
	$profile_fields['user_gender'] = 'Gender';
	$profile_fields['birthdate'] = 'Birthdate';
	$profile_fields['passport_number'] = 'Passport Number';
	$profile_fields['passport_country'] = 'Passport Country';
	$profile_fields['driver_license'] = 'Driver License';	
	$profile_fields['driver_license_state'] = 'Driver License State';
	$profile_fields['driver_license_expiration'] = 'Driver License Expiration';	
	$profile_fields['user_city'] = 'User City';
	$profile_fields['user_state'] = 'User State';
	$profile_fields['user_zip'] = 'Postal Code';	
	$profile_fields['user_phone'] = 'Phone Number';	
	$profile_fields['user_phone_alt'] = 'Alternate Phone Number';
	$profile_fields['user_cell'] = 'Cell Number';
	$profile_fields['user_fax'] = 'Fax Number';
	$profile_fields['user_shirt'] = 'Shirt Size';	

	// Remove old fields
	unset($profile_fields['aim']);	

	return $profile_fields;
}
add_filter('user_contactmethods', 'modify_contact_methods');

	