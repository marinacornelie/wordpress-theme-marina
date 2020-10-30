<?php 

function register_my_menu() {
	register_nav_menu('header-menu',__('Header Menu'));
}

function my_deregister_scripts() {
	wp_dequeue_script('wp-embed');
}

function theme_scripts_function() {
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}

function the_first_tag($post) {
    if ($posttags = get_the_tags()) 
    {
        $tag = current($posttags);
        printf(
            '<a href="%1$s" itemprop="url"><span itemprop="title">%2$s</span></a>',
            get_tag_link($tag->term_id),
            esc_html($tag->name));
    }
}

function number_of_tags($post) {
	$the_tags = get_the_tags($post->ID);
	return count($the_tags);
}

function posts_on_indexpage($query) {
    if ($query->is_home() && $query->is_main_query()) {
        $query->set('posts_per_page', 3);
    }
}

add_theme_support('custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array('site-title', 'site-description'),
	) );
add_action('init', 'register_my_menu');
add_action('wp_footer', 'my_deregister_scripts');
add_action('wp_enqueue_scripts','theme_scripts_function');
add_theme_support('post-thumbnails');
add_action('pre_get_posts', 'posts_on_indexpage');

?>