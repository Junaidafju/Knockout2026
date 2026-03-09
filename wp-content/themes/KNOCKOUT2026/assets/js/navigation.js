/**
 * KnockOut Navigation
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Mobile menu toggle
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu-container');
    
    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true' || false;
            this.setAttribute('aria-expanded', !isExpanded);
            
            if (mobileMenu.style.display === 'block') {
                mobileMenu.style.display = 'none';
                this.classList.remove('active');
            } else {
                mobileMenu.style.display = 'block';
                this.classList.add('active');
            }
        });
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.site-header')) {
            if (mobileMenu && mobileMenu.style.display === 'block') {
                mobileMenu.style.display = 'none';
                menuToggle.classList.remove('active');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        }
    });
    
    // Dock navigation hover effect
    const dockItems = document.querySelectorAll('.dock-items li');
    
    dockItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            const siblings = [...this.parentElement.children];
            const index = siblings.indexOf(this);
            
            siblings.forEach((sibling, i) => {
                const distance = Math.abs(i - index);
                if (distance <= 2) {
                    sibling.style.transform = `scale(${1 + (0.1 * (1 - distance * 0.3))})`;
                }
            });
        });
        
        item.addEventListener('mouseleave', function() {
            const siblings = [...this.parentElement.children];
            siblings.forEach(sibling => {
                sibling.style.transform = 'scale(1)';
            });
        });
    });
    
    // Header scroll effect
    const header = document.querySelector('.site-header');
    let lastScroll = 0;
    
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            header.style.transform = 'translateY(-10px)';
            header.style.opacity = '0.95';
        } else {
            header.style.transform = 'translateY(0)';
            header.style.opacity = '1';
        }
        
        if (currentScroll > lastScroll && currentScroll > 500) {
            // Scrolling down - hide header
            header.style.transform = 'translateY(-100px)';
        }
        
        lastScroll = currentScroll;
    });
});