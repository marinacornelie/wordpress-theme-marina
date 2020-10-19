<?php 

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}

function my_deregister_scripts(){
	wp_dequeue_script( 'wp-embed' );
}

function theme_scripts_function() {
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js');
}

function limit_to_one_tags($terms) {
return array_slice($terms,0,1,true);
}

add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
	) );
add_action( 'init', 'register_my_menu' );
add_action( 'wp_footer', 'my_deregister_scripts' );
add_action('wp_enqueue_scripts','theme_scripts_function');
add_theme_support( 'post-thumbnails' );
add_filter('term_links-post_tag','limit_to_one_tags');

?>