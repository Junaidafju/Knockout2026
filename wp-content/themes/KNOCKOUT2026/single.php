<?php get_header(); ?>

<section class="blog-single-section">
    <div class="container">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <article class="blog-single">
                    <h1 class="blog-title"><?php the_title(); ?></h1>

                    <div class="blog-meta">
                        <span><?php echo get_the_date(); ?></span>
                        <span><?php the_author(); ?></span>
                    </div>

                    <?php if (has_post_thumbnail()): ?>
                        <div class="blog-featured-image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="blog-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>