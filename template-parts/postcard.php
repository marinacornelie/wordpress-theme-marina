<div class="card">
    <div class="border">
        <div class="card-header">
            <a href= "<?php the_permalink(); ?>" class="card-header-title"><?php the_title(); ?></a>
        </div>
        <div class="post-image">
            <?php if ( has_post_thumbnail() ): ?>
                <a href="<?php the_permalink(); ?>">
                    <figure class="image is-4by3">
                        <img src="<?php the_post_thumbnail(); ?>" alt="Feature Image">  
                    </figure>
                </a>
            <?php else: ?>
                <figure class="image is-4by3"></figure>
            <?php endif; ?>
        </div> 
    </div>
</div>