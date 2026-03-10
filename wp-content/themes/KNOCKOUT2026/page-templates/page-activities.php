<?php
/**
 * Template Name: Activities Page
 *
 * @package KnockOut_Theme
 */

get_header(); ?>

<main id="primary" class="site-main page-activities">

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
                <p class="neon-text">Pick your vibe. Play hard. Party harder.</p>
                <p>Bowling, arcade, VR zones, live sports screenings, and weekend events — all under one roof.</p>
            </div>

            <div class="services-grid">
                <div class="service-card glass-card">
                    <div class="glowing-icon">🎳</div>
                    <h3><span class="gradient-text">PRO</span> BOWLING</h3>
                    <p>Cosmic lanes with premium pin action.</p>
                    <div class="card-features">
                        <span>6 Lanes</span>
                        <span>Cosmic Lighting</span>
                        <span>Group Friendly</span>
                    </div>
                </div>

                <div class="service-card glass-card">
                    <div class="glowing-icon">🎮</div>
                    <h3><span class="gradient-text">ARCADE</span> & VR</h3>
                    <p>Next-gen VR + classic arcade favorites.</p>
                    <div class="card-features">
                        <span>VR Zones</span>
                        <span>Racing Sims</span>
                        <span>20+ Games</span>
                    </div>
                </div>

                <div class="service-card glass-card">
                    <div class="glowing-icon">📺</div>
                    <h3><span class="gradient-text">LIVE</span> SPORTS</h3>
                    <p>Big screens, stadium sound, match-day energy.</p>
                    <div class="card-features">
                        <span>4K Projection</span>
                        <span>Leagues & PPVs</span>
                        <span>12+ Screens</span>
                    </div>
                </div>

                <div class="service-card glass-card">
                    <div class="glowing-icon">🎧</div>
                    <h3><span class="gradient-text">DJ</span> NIGHTS</h3>
                    <p>Weekend parties and curated events.</p>
                    <div class="card-features">
                        <span>Guest DJs</span>
                        <span>Late Nights</span>
                        <span>VIP Tables</span>
                    </div>
                </div>
            </div>

            <div class="cta-inline glass-panel">
                <h2 class="cta-title">Want us to plan your <span class="gradient-text gradient-animate">party</span>?</h2>
                <div class="cta-buttons">
                    <a class="neon-cta primary-cta" href="<?php echo esc_url(home_url('/reservation')); ?>">
                        <span><span class="gradient-text">BOOK</span> NOW</span>
                    </a>
                    <a class="neon-cta secondary-cta" href="<?php echo esc_url(home_url('/contact')); ?>">
                        <span><span class="gradient-text">CONTACT</span> US</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

