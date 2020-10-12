<?php get_header(); ?>

<main>
    <?php
        // Load posts loop.
        while ( have_posts() ) {
            the_post();
            get_template_part( 'template-parts/postcard' );
        }
    ?>
</main>

<?php get_footer(); ?>