<?php
/**
 * Template Name: Contact Page
 *
 * @package KnockOut_Theme
 */

get_header(); ?>

<main id="primary" class="site-main page-contact">

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
            <div class="contact-grid">
                <div class="glass-panel contact-card">
                    <h2 class="section-title"><span class="gradient-text">Contact</span> Us</h2>
                    <p class="neon-text">Fastest response on WhatsApp.</p>

                    <div class="contact-list">
                        <a class="contact-item" href="https://wa.me/919876543210">
                            <span class="contact-icon">📱</span>
                            <span>WhatsApp: +91 98765 43210</span>
                        </a>
                        <a class="contact-item" href="tel:+919876543210">
                            <span class="contact-icon">📞</span>
                            <span>Call: +91 98765 43210</span>
                        </a>
                        <a class="contact-item" href="mailto:hello@knockout.example">
                            <span class="contact-icon">✉️</span>
                            <span>Email: hello@knockout.example</span>
                        </a>
                        <div class="contact-item">
                            <span class="contact-icon">📍</span>
                            <span>Kolkata, West Bengal</span>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a class="neon-cta primary-cta" href="<?php echo esc_url(home_url('/reservation')); ?>">
                            <span><span class="gradient-text">BOOK</span> NOW</span>
                        </a>
                        <a class="neon-cta secondary-cta" href="<?php echo esc_url(home_url('/events')); ?>">
                            <span><span class="gradient-text">VIEW</span> EVENTS</span>
                        </a>
                    </div>
                </div>

                <div class="glass-panel contact-card">
                    <h2 class="section-title">Send a <span class="gradient-text gradient-animate">Message</span></h2>
                    <p>Replace this with a Contact Form plugin shortcode when ready (e.g. Contact Form 7).</p>
                    <div class="contact-form-placeholder">
                        <code>[contact-form-7 id="123" title="Contact form 1"]</code>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

