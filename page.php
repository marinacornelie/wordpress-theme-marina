<?php get_header(); ?>
<article class="hero">
    <header class="post-header post-header-border">
        <div class="title is-4 center">
            <?php echo get_the_title($ID); ?>
        </div>
    </header>
    <section class="section wp-content">
        <?= get_post_field('post_content', $post->ID); ?>
    </section>
</article>
<?php get_footer(); ?>