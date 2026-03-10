<?php
/**
 * Hero section for homepage
 */
?>

<!-- <div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg');">
    <div class="container">
        <div class="hero-content">
            <h1><?php _e('WATCH LIVE SPORTS', 'sports-cafe'); ?></h1>
            <p><?php _e('Eat • Drink • Play', 'sports-cafe'); ?></p>
            
            <div class="hero-buttons">
                <a href="/reservation" class="btn btn-primary">
                    <?php _e('BOOK A TABLE', 'sports-cafe'); ?>
                </a>
                <a href="/menu" class="btn btn-secondary">
                    <?php _e('VIEW MENU', 'sports-cafe'); ?>
                </a>
            </div>
            
            <?php
            // Get next match
            $next_match = new WP_Query(array(
                'post_type'      => 'live_matches',
                'posts_per_page' => 1,
                'meta_key'       => 'match_date',
                'orderby'        => 'meta_value',
                'order'          => 'ASC',
                'meta_query'     => array(
                    array(
                        'key'     => 'match_date',
                        'value'   => date('Y-m-d'),
                        'compare' => '>=',
                        'type'    => 'DATE'
                    )
                )
            ));
            
            if ($next_match->have_posts()) : $next_match->the_post();
                $teams = get_field('match_teams');
                $match_time = get_field('match_time');
                ?>
                <div class="next-match">
                    🏈 ⚽ 🏀 🎯 
                    <?php printf(__('NEXT MATCH: %s at %s', 'sports-cafe'), $teams, $match_time); ?>
                </div>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</div> -->