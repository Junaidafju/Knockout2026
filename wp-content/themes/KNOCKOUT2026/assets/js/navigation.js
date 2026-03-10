/**
 * KnockOut Navigation
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Mobile menu toggle
    const header = document.querySelector('.site-header');
    const menuToggle = document.querySelector('.mobile-toggle');
    const mobileMenu = document.querySelector('.mobile-menu-panel');
    
    const setMobileMenuOpen = (open) => {
        if (!menuToggle || !mobileMenu) return;
        menuToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        menuToggle.classList.toggle('active', open);
        if (header) header.classList.toggle('menu-open', open);
        mobileMenu.classList.toggle('is-open', open);
        mobileMenu.hidden = !open;
    };

    if (menuToggle && mobileMenu) {
        // Ensure closed on load
        setMobileMenuOpen(false);

        menuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            setMobileMenuOpen(!isExpanded);
        });
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.site-header')) {
            if (mobileMenu && !mobileMenu.hidden) {
                setMobileMenuOpen(false);
            }
        }
    });

    // Close on ESC
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && mobileMenu && !mobileMenu.hidden) {
            setMobileMenuOpen(false);
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
    let lastScroll = 0;
    
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            if (header) {
                header.style.transform = 'translateY(-10px)';
                header.style.opacity = '0.95';
            }
        } else {
            if (header) {
                header.style.transform = 'translateY(0)';
                header.style.opacity = '1';
            }
        }
        
        if (currentScroll > lastScroll && currentScroll > 500) {
            // Scrolling down - hide header
            if (header) header.style.transform = 'translateY(-100px)';
        }
        
        lastScroll = currentScroll;
    });
});