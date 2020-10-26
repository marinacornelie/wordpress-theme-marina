<?php get_header(); ?>
<?php the_post(); ?>
<article class="hero">
    <main>
    <header class="post-header post-header-border">
            <div class="title is-6 fw-normal">
                <span>By <?php the_author(); ?></span>
            </div>
            <div class="subtitle is-6">
                <time><?php the_time('j M Y') ?></time>
                <span>on <?php the_tags('', $sep, $after); ?></span>
            <div>
            <div class="title is-4 center"><?php the_title(); ?></div>
        </header>
        <section class="section wp-content">
            <?php the_content(); ?>
        <section>
    </main>
</article>

<?php get_footer(); ?>