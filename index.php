<?php get_header(); ?>

<main class="columns-container">
    <div class="columns is-variable is-5 is-centered is-multiline">
        <?php while (have_posts()): ?>
            <div class="column is-half-tablet is-one-third-desktop"> 
                <?php
                    the_post();
                    get_template_part('template-parts/postcard');
                ?>
            </div>
        <?php endwhile; ?>
    </div>
    <div class="pagination-container">
        <nav class="pagination is-small" role="navigation" aria-label="pagination">  
            <?php 
            previous_posts_link(); 
            next_posts_link(); 
            ?>
        </nav>
    </div>
</main>

<?php get_footer(); ?>