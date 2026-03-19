/**
 * Blog Scroll Reveal
 * File: assets/js/blog-reveal.js
 *
 * Watches .ko-blog-card elements and adds .ko-visible when in viewport.
 * The stagger delay is set via --card-delay CSS variable in PHP.
 */
(function () {
    'use strict';
    function init() {
        var cards = document.querySelectorAll('.ko-blog-card');
        if (!cards.length) return;
        if ('IntersectionObserver' in window) {
            var obs = new IntersectionObserver(function (entries) {
                entries.forEach(function (e) {
                    if (e.isIntersecting) {
                        e.target.classList.add('ko-visible');
                        obs.unobserve(e.target);
                    }
                });
            }, { root: null, rootMargin: '-40px', threshold: 0.1 });
            cards.forEach(function (c) { obs.observe(c); });
        } else {
            cards.forEach(function (c) { c.classList.add('ko-visible'); });
        }
    }
    document.readyState === 'loading'
        ? document.addEventListener('DOMContentLoaded', init) : init();
}());


/* ─────────────────────────────────────────────────
   ENQUEUE SNIPPET
   Add this to: inc/enqueue-scripts.php
   inside your existing wp_enqueue_scripts callback
──────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', 'knockout_enqueue_blog_assets' );
function knockout_enqueue_blog_assets() {
    $ver = wp_get_theme()->get('Version');
    $uri = get_template_directory_uri();

    // Load on blog index, single posts, category / tag archives
    if ( is_home() || is_singular('post') || is_category() || is_tag() || is_archive() ) {

        // Google Fonts (if not already global)
        wp_enqueue_style(
            'knockout-google-fonts',
            'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow+Condensed:wght@300;400;600;700&family=Roboto:wght@400;700&display=swap',
            [],
            null
        );

        // Blog CSS
        wp_enqueue_style(
            'knockout-blog',
            $uri . '/assets/css/blog.css',
            ['knockout-google-fonts'],
            $ver
        );

        // Blog scroll-reveal JS (deferred, footer)
        wp_enqueue_script(
            'knockout-blog-reveal',
            $uri . '/assets/js/blog-reveal.js',
            [],
            $ver,
            true  // load in footer
        );
    }
}

─────────────────────────────────────────────────── */