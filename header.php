<?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <?php wp_head(); ?>
    </head>

<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="menu-item" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <img src="<?php echo $image[0]; ?>" class="header-logo" alt="logo">
         </a>
        <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="navMenu" class="navbar-menu">
        <div class="navbar-start">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
    </div>
</nav>

<section class="hero header">
  <div class="hero-body">
    <div class="container">
      <h1 class="title centered">
        <?php bloginfo( name ); ?>
      </h1>
      <h2 class="subtitle centered">
        <?php bloginfo( description ); ?>
      </h2>
    </div>
  </div>
</section>