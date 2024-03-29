<div class="card">
    <div class="border">
        <div class="card-header">
            <a href= "<?php the_permalink(); ?>" class="card-header-title"><?php the_title(); ?></a>
        </div>
        <div class="post-image">
            <?php if (has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>">
                    <figure class="image is-4by3">
                        <?php the_post_thumbnail(); ?>
                    </figure>
                </a>
            <?php else: ?>
                <figure class="image is-4by3"></figure>
            <?php endif; ?>
        </div> 
        <footer class="card-footer">
            <p class="card-footer-item">
                <?php the_time('j M Y') ?>
            </p> 
            <p class="card-footer-item">
            <?php if (number_of_tags($post) > 0): ?>
                    <?php the_first_tag($post); ?>
                    <?php if (number_of_tags($post) > 1): ?>
                        <span>,...</span>
                    <?php endif; ?>
                <?php endif; ?>
            </p>
        </footer>
    </div>
</div>