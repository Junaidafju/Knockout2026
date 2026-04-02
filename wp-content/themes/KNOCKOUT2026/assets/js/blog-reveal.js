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



─────────────────────────────────────────────────── */