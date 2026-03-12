// Particle animation for hero section
document.addEventListener('DOMContentLoaded', function () {
    // Hide loading screen
    setTimeout(function () {
        document.getElementById('loading').classList.add('hidden');
    }, 1000);

    // Particle canvas
    const canvas = document.getElementById('particle-canvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let width, height;
        let particles = [];

        function initParticles() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;

            particles = [];
            for (let i = 0; i < 100; i++) {
                particles.push({
                    x: Math.random() * width,
                    y: Math.random() * height,
                    size: Math.random() * 3 + 1,
                    speedX: (Math.random() - 0.5) * 0.8,
                    speedY: (Math.random() - 0.5) * 0.8,
                    color: `rgba(174, 208, 52, ${Math.random() * 0.5 + 0.2})`
                });
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, width, height);

            particles.forEach(p => {
                p.x += p.speedX;
                p.y += p.speedY;

                // Wrap around edges
                if (p.x < 0) p.x = width;
                if (p.x > width) p.x = 0;
                if (p.y < 0) p.y = height;
                if (p.y > height) p.y = 0;

                // Draw particle with glow
                ctx.shadowBlur = 10;
                ctx.shadowColor = p.color;
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                ctx.fillStyle = p.color;
                ctx.fill();

                // Connect nearby particles
                particles.forEach(p2 => {
                    const dx = p.x - p2.x;
                    const dy = p.y - p2.y;
                    const distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < 100) {
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(174, 208, 52, ${0.1 * (1 - distance / 100)})`;
                        ctx.lineWidth = 1;
                        ctx.moveTo(p.x, p.y);
                        ctx.lineTo(p2.x, p2.y);
                        ctx.stroke();
                    }
                });
            });

            requestAnimationFrame(animateParticles);
        }

        initParticles();
        animateParticles();

        window.addEventListener('resize', initParticles);
    }

    // Parallax effect on scroll
    window.addEventListener('scroll', function () {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.activities-hero');

        if (hero) {
            hero.style.transform = `translateY(${scrolled * 0.3}px)`;
        }

        // Laser move effect
        const lasers = document.querySelectorAll('.laser');
        lasers.forEach((laser, index) => {
            if (laser) {
                laser.style.transform = `translateY(${scrolled * 0.2 * (index + 1)}px)`;
            }
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Intersection Observer for fade-in animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.game-card, .zone-card, .gallery-item').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });

    // Dynamic circuit board effect on mouse move
    document.addEventListener('mousemove', function (e) {
        const circuit = document.querySelector('.circuit-bg');
        if (circuit) {
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;
            circuit.style.background = `radial-gradient(circle at ${x * 100}% ${y * 100}%, rgba(174,208,52,0.1) 0%, transparent 30%), 
                                         repeating-linear-gradient(45deg, transparent 0px, transparent 30px, 
                                         rgba(174,208,52,0.02) 30px, rgba(174,208,52,0.02) 32px)`;
        }
    });
});
