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
            <?php if (get_previous_posts_link()): ?>
                <span class="pagination-previous"><?php previous_posts_link(); ?></span>
            <?php endif; ?>
            <span><?php $current_page = max(1, get_query_var('paged'));
            $total_pages = $wp_query->max_num_pages;
            echo 'Page '.$current_page.' of '.$total_pages; ?></span>
            <?php if (get_next_posts_link()): ?>
                <span class="pagination-next"><?php next_posts_link(); ?></span>
            <?php endif; ?>
        </nav>
    </div>
</main>

<?php get_footer(); ?>