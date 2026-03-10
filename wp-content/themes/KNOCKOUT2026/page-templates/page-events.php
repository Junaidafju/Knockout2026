<?php
/**
 * Template Name: Events Page
 *
 * @package KnockOut_Theme
 */

get_header(); ?>

<main id="primary" class="site-main page-events">

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
                <p class="neon-text">Upcoming nights, tournaments, and watch parties.</p>
                <p>Book early — VIP tables go fast.</p>
            </div>

            <div class="events-grid">
                <div class="event-card glass-card">
                    <div class="event-date gradient-text">15 MAR</div>
                    <div class="event-content">
                        <h3><span class="gradient-text">NEON</span> NIGHTS</h3>
                        <p class="event-artist">DJ MAARU & RINDI</p>
                        <p class="event-info">9PM - 5AM | ₹999</p>
                        <a href="<?php echo esc_url(home_url('/reservation')); ?>" class="event-link"><span class="gradient-text">BOOK</span> NOW →</a>
                    </div>
                </div>

                <div class="event-card glass-card">
                    <div class="event-date gradient-text">22 MAR</div>
                    <div class="event-content">
                        <h3><span class="gradient-text">BOWLING</span> CHAMP</h3>
                        <p class="event-artist">TOURNAMENT</p>
                        <p class="event-info">6PM - 11PM | ₹499</p>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="event-link"><span class="gradient-text">REGISTER</span> →</a>
                    </div>
                </div>

                <div class="event-card glass-card">
                    <div class="event-date gradient-text">29 MAR</div>
                    <div class="event-content">
                        <h3><span class="gradient-text">UFC</span> WATCH PARTY</h3>
                        <p class="event-artist">POIRIER VS GAETHJE</p>
                        <p class="event-info">8:30AM | FREE</p>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="event-link"><span class="gradient-text">RSVP</span> →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

