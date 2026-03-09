/**
 * KnockOut Main JavaScript
 */

jQuery(document).ready(function($) {
    
    // Video background play/pause on visibility change
    const video = document.querySelector('video');
    
    if (video) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    video.play();
                } else {
                    video.pause();
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(video);
    }
    
    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(e) {
        const href = $(this).attr('href');
        
        if (href !== '#') {
            e.preventDefault();
            
            const target = $(href);
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            }
        }
    });
    
    // Parallax effect for hero section
    $(window).on('scroll', function() {
        const scroll = $(this).scrollTop();
        
        $('.hero-section .video-background').css({
            transform: 'translateY(' + scroll * 0.5 + 'px)'
        });
        
        $('.hero-content').css({
            opacity: 1 - (scroll * 0.002)
        });
    });
    
    // Animate elements on scroll
    const animateOnScroll = function() {
        $('.feature-item, .service-card, .event-card, .reason-card').each(function() {
            const elementTop = $(this).offset().top;
            const windowBottom = $(window).scrollTop() + $(window).height();
            
            if (windowBottom > elementTop + 100) {
                $(this).css({
                    opacity: '1',
                    transform: 'translateY(0)'
                });
            }
        });
    };
    
    // Set initial state for animated elements
    $('.feature-item, .service-card, .event-card, .reason-card').css({
        opacity: '0',
        transform: 'translateY(30px)',
        transition: 'all 0.6s ease'
    });
    
    $(window).on('scroll', animateOnScroll);
    animateOnScroll(); // Run once on load
});