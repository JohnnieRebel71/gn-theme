<?php

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

// we're firing all out initial functions at the start
add_action( 'after_setup_theme', 'themename_functions', 16 );

function themename_functions() {

	// enqueue base scripts and styles
	add_action( 'wp_enqueue_scripts', 'themename_scripts_and_styles', 999 );
	// ie conditional wrapper

	// launching this stuff after theme setup
	themename_theme_support();

} /* end worldoffroyo functions */


/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading modernizr and jquery, and reply script
function themename_scripts_and_styles() {
	global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
	if (!is_admin()) {

		// bootstrap
		wp_register_script( 'themename-bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.2', false );

		// easing
		wp_register_script( 'themename-easing', get_stylesheet_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.3', false );

		// migrate
		wp_register_script( 'themename-migrate', get_stylesheet_directory_uri() . '/js/jquery-migrate-1.2.1.js', array(), '1.2.1', false );

		// modernizr (without media query polyfill)
		wp_register_script( 'themename-modernizr', get_stylesheet_directory_uri() . '/js/modernizr.custom.min.js', array(), '2.5.3', false );

		// jRespond
		wp_register_script( 'themename-jrespond', get_stylesheet_directory_uri() . '/js/jRespond.min.js', array(), '0.10', false );

		// register base stylesheet
		wp_register_style( 'themename-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );

		// main layout style sheet
		wp_register_style( 'themename-layout', get_stylesheet_directory_uri() . '/stylesheets/layout.css', array(), '' );

		// comment reply script for threaded comments
		if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
			wp_enqueue_script( 'comment-reply' );
		}

		// enqueue styles and scripts
		wp_enqueue_script( 'themename-bootstrap' );
		wp_enqueue_script( 'themename-easing' );
		wp_enqueue_script( 'themename-migrate' );
		wp_enqueue_script( 'themename-modernizr' );
		wp_enqueue_script( 'themename-jrespond' );
		wp_enqueue_style( 'themename-stylesheet' );
		wp_enqueue_style( 'themename-layout' );

//		$wp_styles->add_data( 'bones-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet

	}
}

/*********************
THEME SUPPORT
*********************/

// Adding WP 3+ Functions & Theme Support
function themename_theme_support() {

	// wp thumbnails (sizes handled in functions.php)
	add_theme_support( 'post-thumbnails' );

	// rss thingy
	add_theme_support('automatic-feed-links');

	// wp menus
	add_theme_support( 'menus' );

	// registering wp3+ menus
	register_nav_menus(
		array(
			'main-nav' => __( 'The Main Menu', 'themename_theme' ),   // main nav in header
		)
	);
} /* end bones theme support */


/*********************
MENUS & NAVIGATION
*********************/

// the main menu
function themename_main_nav() {
	// display the wp3 menu if available
	wp_nav_menu(array(
		'container' => false,                           // remove nav container
		'container_class' => 'menu',           			// class of container (should you choose to use it)
		'menu' => __( 'The Main Menu', 'themename_theme' ),  // nav name
		'menu_class' => 'nav top-nav',         			// adding custom nav class
		'items_wrap' => '%3$s',							// remove wrapping
		'theme_location' => 'main-nav',                 // where it's located in the theme
		'before' => '',                                 // before the menu
		'after' => '',                                  // after the menu
		'link_before' => '',                            // before each link
		'link_after' => '',                             // after each link
		'depth' => 0                                    // limit the depth of the nav
	));
} /* end main nav */

/*********************
SIDEBAR
*********************/

/* sidebar */
if ( function_exists('register_sidebar') ) {

  register_sidebar(array(
  'name' => 'Logo',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
  ));

  register_sidebar(array(
  'name' => 'Left Button',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
  ));

  register_sidebar(array(
  'name' => 'Right Button',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
  ));

  register_sidebar(array(
  'name' => 'Info Sec1',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
  ));

  register_sidebar(array(
  'name' => 'Info Sec2',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
  ));

  register_sidebar(array(
  'name' => 'Info Sec3',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
  ));

  register_sidebar(array(
  'name' => 'Info Sec4',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
  ));

  register_sidebar(array(
  'name' => 'Footer Award Icon1',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
));

register_sidebar(array(
'name' => 'Footer Award Icon2',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

register_sidebar(array(
'name' => 'Footer Award Icon3',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

register_sidebar(array(
'name' => 'Footer Award Icon4',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

register_sidebar(array(
'name' => 'Footer Nav Col1',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

register_sidebar(array(
'name' => 'Footer Nav Col2',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));
register_sidebar(array(
'name' => 'Footer Nav Col3',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));
register_sidebar(array(
'name' => 'Footer Nav Col4',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));
register_sidebar(array(
'name' => 'Footer Nav Col5',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));
register_sidebar(array(
'name' => 'Sidebar',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array(
'name' => 'Footer Contact Form',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="contact-widget-title">',
'after_title' => '</h3>',
));

}
/*********************
SET TIMEZONE FOR DATE()
*********************/

function op_fix_timezone() {
	date_default_timezone_set('America/Denver');
}
add_action('init', 'op_fix_timezone', 1);


/*********************
REMOVE ADMIN BAR
*********************/

add_action( 'after_setup_theme', 'my_website_remove_admin_bar' );
function my_website_remove_admin_bar() {

   // if the user cannot "read", then they cannot access the admin/dashboard
   if ( ! current_user_can( 'edit' ) )
      show_admin_bar( false );

}

/*********************
SET DEFAULT USER TO FIRST LAST NAME
**********************/

add_action( 'wp_login', 'wpse_9326315_format_user_display_name_on_login' );

function wpse_9326315_format_user_display_name_on_login( $username ) {
    $user = get_user_by( 'login', $username );

    $first_name = get_user_meta( $user->ID, 'first_name', true );
    $last_name = get_user_meta( $user->ID, 'last_name', true );

    $full_name = trim( $first_name . ' ' . $last_name );

    if ( ! empty( $full_name ) && ( $user->data->display_name != $full_name ) ) {
        $userdata = array(
            'ID' => $user->ID,
            'display_name' => $full_name,
        );

        wp_update_user( $userdata );
    }
}

/*********************
CALL THE CUSTOM OPTIONS PANEL
*********************/

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';

?>
