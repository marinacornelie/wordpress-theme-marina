<?php 

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function my_deregister_scripts(){
  wp_dequeue_script( 'wp-embed' );
 }
 
 add_action( 'wp_footer', 'my_deregister_scripts' );

?>