<?php
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');   
    wp_enqueue_style( 'iransans.css', get_template_directory_uri() . '/iransans/iransans.css');   
	wp_enqueue_script( 'jqueryjs', get_template_directory_uri() . '/assets/js/jquery.js');
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
	wp_enqueue_script( 'scriptjs', get_template_directory_uri() . '/assets/js/script.js');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function mw_admin_bar_remove() {
global $wp_admin_bar;
$wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'mw_admin_bar_remove', 0);

// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');
add_action('login_enqueue_scripts', 'admin_style' );

function wpdocs_theme_add_editor_styles() {
    add_editor_style(get_template_directory_uri().'/admin.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' );

// Register Widgets
function custom_sidebar1() {
	$args = array(
		'id'            => 'rightWidget',
		'name'          => "ناحیه سمت راست",
		'before_title'  => '<h3 class="widget-title right">',
		'after_title'   => '</h3>',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_sidebar1' );

// Register Widgets
function custom_sidebar2() {
	$args = array(
		'id'            => 'leftWidget',
		'name'          => "ناحیه سمت چپ",
		'before_title'  => '<h3 class="widget-title left">',
		'after_title'   => '</h3>',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_sidebar2' );