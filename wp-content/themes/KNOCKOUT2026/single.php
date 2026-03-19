<?php get_header(); ?>

<section class="blog-single-section">
    <div class="container blog-single-container">
        <div class="blog-single-content-area">
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

        <aside class="blog-sidebar">
            <div class="sidebar-widget widget-about">
                <h3 class="widget-title">ABout KnoCKOut</h3>
                <p>Experience the ultimate indoor entertainment center. Activities for all ages including go-karts,
                    arcade, bowling, and more!</p>
                <a href="<?php echo esc_url(site_url('/booking')); ?>" class="sidebar-premium-btn">Book Now</a>
            </div>

            <div class="sidebar-widget widget-recent-posts">
                <h3 class="widget-title">Recent Posts</h3>
                <div class="recent-posts-list">
                    <?php
                    $recent_posts = new WP_Query(array(
                        'posts_per_page' => 5,
                        'post_status' => 'publish',
                        'ignore_sticky_posts' => true
                    ));
                    if ($recent_posts->have_posts()):
                        while ($recent_posts->have_posts()):
                            $recent_posts->the_post();
                            ?>
                            <a href="<?php the_permalink(); ?>" class="recent-post-item">
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="recent-post-thumb">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                <?php else: ?>
                                    <div class="recent-post-thumb placeholder"></div>
                                <?php endif; ?>
                                <div class="recent-post-info">
                                    <span class="recent-post-title"><?php the_title(); ?></span>
                                    <span class="recent-post-date"><?php echo get_the_date(); ?></span>
                                </div>
                            </a>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

            <div class="sidebar-widget widget-categories">
                <h3 class="widget-title">Categories</h3>
                <ul class="categories-list">
                    <?php
                    wp_list_categories(array(
                        'show_count' => 1,
                        'title_li' => ''
                    ));
                    ?>
                </ul>
            </div>

            <div class="sidebar-widget widget-tags">
                <h3 class="widget-title">Tags</h3>
                <div class="tag-cloud-wrapper">
                    <?php
                    wp_tag_cloud(array(
                        'number' => 20,
                        'format' => 'flat',
                        'separator' => ''
                    ));
                    ?>
                </div>
            </div>

            <div class="sidebar-widget widget-cta">
                <div class="cta-banner">
                    <h4>Ready to Play?</h4>
                    <a href="<?php echo esc_url(site_url('/booking')); ?>"
                        class="sidebar-premium-btn sidebar-premium-btn-dark">Book Now</a>
                </div>
            </div>
        </aside>
    </div>
</section>

<?php get_footer(); ?>