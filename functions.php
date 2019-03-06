<?php 
// set default content width
if (!isset($content_width)) $content_width=900;

//enable theme support
function gtheme_setup() {
//enable language translation
load_textdomain( 'gtheme', get_template_directory().'/languages');

//feed link
add_theme_support( 'automatic-feed-links' );

//title tag
add_theme_support( 'title-tag' );

//enable featured images
add_theme_support( 'post-thumbnail' );

//enable custom header
add_theme_support( 'custom-header' );

//enable custom background
add_theme_support( 'custom-background' );

//enable three nav menu
register_nav_menus( array( 
	'headear'=>__('Header Menu','gtheme'),
	'sidebar'=>__('Sidebar Menu','gtheme'),
	'footer'=>__('Footer Menu','gtheme'),
) );

//enable custom post formats
add_theme_support( 'post-formats', array(
    'aside','image','video','audio','quote','link','gallery',
    ));
}
add_action( 'after_setup_theme', 'gtheme_setup' );

//enable widgets
function gtheme_widget_init() {
	register_sidebar( array( 
		'name'=>__( 'Header Widget' ),
		'id'=>'header',
		'description'=>__( 'Header Widget Area' ),
		'before_widget'=>'<div class="widget %2$s">',
		'after_widget'=>'</div>', 
	) );
	register_sidebar( array( 
		'name'=>__( 'Sidebar Widget' ),
		'id'=>'sidebar',
		'description'=>__( 'Sidebar Widget Area' ),
		'before_widget'=>'<div class="widget %2$s">',
		'after_widget'=>'</div>', 
	) );
	register_sidebar( array( 
		'name'=>__( 'Footer Wigget' ),
		'id'=>'footer',
		'description'=>__( 'Footer Widget Area' ),
		'before_widget'=>'<div class="widget %2$s">',
		'after_widget'=>'</div>', 
	) );
}
add_action( 'widget_init', 'gtheme_widget_init' );

//enqueue script and style
function gtheme_script_style(){
//load custom script
	wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery'), null, false);

//load conditionally script for threaded comments
if (is_singular()&&comments_open()&&get_option('thread_comments')){
	wp_enqueue_script('comment-reply');
}

//load style.css
wp_enqueue_style( 'gtheme',get_stylesheet_uri(), array(),null );
}
add_action( 'wp_enqueue_scripts', 'gtheme_script_style' );

 ?>