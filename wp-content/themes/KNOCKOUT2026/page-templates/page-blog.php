<?php
/**
 * Template Name: Blog Landing Page
 *
 * @package KnockOut_Theme
 */

get_header(); ?>

<main id="primary" class="site-main page-blog">

    <section class="page-header">
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="page-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a> /
                <span><?php the_title(); ?></span>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="glass-panel page-intro">
                <p class="neon-text">Stories, match nights, party recaps, and new drops.</p>
                <p>Latest updates from the KnockOut floor.</p>
            </div>

            <?php
            $paged = max(1, (int) get_query_var('paged'));
            $q = new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 9,
                'paged' => $paged,
                'ignore_sticky_posts' => true,
            ));
            ?>

            <?php if ($q->have_posts()): ?>
                <div class="blog-grid">
                    <?php while ($q->have_posts()):
                        $q->the_post(); ?>
                        <article <?php post_class('blog-card glass-card'); ?>>
                            <a class="blog-card-link" href="<?php the_permalink(); ?>">
                                <div class="blog-thumb">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else: ?>
                                        <div class="blog-thumb-placeholder"></div>
                                    <?php endif; ?>
                                </div>
                                <div class="blog-card-body">
                                    <div class="blog-meta">
                                        <span class="neon-text"><?php echo esc_html(get_the_date()); ?></span>
                                        <span class="blog-dot">•</span>
                                        <span><?php echo esc_html(get_the_author()); ?></span>
                                    </div>
                                    <h2 class="blog-title"><span class="gradient-text"><?php the_title(); ?></span></h2>
                                    <p class="blog-excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?></p>
                                    <span class="blog-readmore"><span class="gradient-text">Read</span> →</span>
                                </div>
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="blog-pagination glass-panel">
                    <?php
                    echo paginate_links(array(
                        'total' => (int) $q->max_num_pages,
                        'current' => $paged,
                    ));
                    ?>
                </div>
            <?php else: ?>
                <div class="glass-panel page-intro">
                    <p>No posts yet. Add your first post from the WordPress dashboard.</p>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>