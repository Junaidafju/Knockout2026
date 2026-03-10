/**
 * Premium Animations
 */

jQuery(document).ready(function($) {
    
    // Scroll reveal animations
    const revealElements = document.querySelectorAll('.service-card, .event-card, .section-header');
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                
                // Add staggered animation for children
                if (entry.target.classList.contains('services-grid')) {
                    const cards = entry.target.querySelectorAll('.service-card');
                    cards.forEach((card, index) => {
                        card.style.animationDelay = `${index * 0.1}s`;
                        card.classList.add('fadeInUp');
                    });
                }
            }
        });
    }, { threshold: 0.2, rootMargin: '0px 0px -100px 0px' });
    
    revealElements.forEach(el => {
        el.classList.add('reveal');
        revealObserver.observe(el);
    });
    
    // Parallax effect for hero
    $(window).on('scroll', function() {
        const scroll = $(this).scrollTop();
        
        $('.hero-video-container').css({
            transform: 'translateY(' + scroll * 0.5 + 'px)'
        });
        
        $('.hero-content').css({
            opacity: 1 - (scroll * 0.002)
        });
    });
    
    // Mouse move parallax for cards
    $('.glass-card').on('mousemove', function(e) {
        const card = $(this);
        const rect = card[0].getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 20;
        const rotateY = (centerX - x) / 20;
        
        card.css({
            transform: `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`
        });
    }).on('mouseleave', function() {
        $(this).css({
            transform: 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)'
        });
    });
    
    // Neon progress bar
    const progressBar = document.querySelector('.neon-progress-bar');
    
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        
        progressBar.style.width = scrolled + '%';
    });
    
    // Typing effect for hero (optional)
    const heroLine = document.querySelector('.title-line:last-child');
    if (heroLine) {
        const text = heroLine.textContent;
        heroLine.textContent = '';
        
        let i = 0;
        const typeWriter = () => {
            if (i < text.length) {
                heroLine.textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, 100);
            }
        };
        
        setTimeout(typeWriter, 1000);
    }
});