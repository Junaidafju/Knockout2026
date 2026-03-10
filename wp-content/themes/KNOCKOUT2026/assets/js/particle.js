/**
 * Neon Particle Effect
 */

document.addEventListener('DOMContentLoaded', function() {
    const canvas = document.getElementById('neon-particles');
    if (!canvas) return;
    
    const ctx = canvas.getContext('2d');
    
    let width, height;
    let particles = [];
    
    const PARTICLE_COUNT = 100;
    const NEON_COLOR = 'rgba(176, 209, 54, 0.5)';
    
    function initCanvas() {
        width = window.innerWidth;
        height = window.innerHeight;
        canvas.width = width;
        canvas.height = height;
    }
    
    function createParticles() {
        for (let i = 0; i < PARTICLE_COUNT; i++) {
            particles.push({
                x: Math.random() * width,
                y: Math.random() * height,
                vx: (Math.random() - 0.5) * 0.5,
                vy: (Math.random() - 0.5) * 0.5,
                size: Math.random() * 2 + 1,
                opacity: Math.random() * 0.5
            });
        }
    }
    
    function drawParticles() {
        ctx.clearRect(0, 0, width, height);
        
        particles.forEach(p => {
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(176, 209, 54, ${p.opacity})`;
            ctx.fill();
            
            // Add glow effect
            ctx.shadowBlur = 10;
            ctx.shadowColor = '#b0d136';
            
            // Update position
            p.x += p.vx;
            p.y += p.vy;
            
            // Wrap around edges
            if (p.x < 0) p.x = width;
            if (p.x > width) p.x = 0;
            if (p.y < 0) p.y = height;
            if (p.y > height) p.y = 0;
        });
        
        requestAnimationFrame(drawParticles);
    }
    
    // Connect nearby particles with lines
    function drawConnections() {
        particles.forEach((p1, i) => {
            particles.slice(i + 1).forEach(p2 => {
                const dx = p1.x - p2.x;
                const dy = p1.y - p2.y;
                const distance = Math.sqrt(dx * dx + dy * dy);
                
                if (distance < 100) {
                    ctx.beginPath();
                    ctx.strokeStyle = `rgba(176, 209, 54, ${0.1 * (1 - distance / 100)})`;
                    ctx.lineWidth = 0.5;
                    ctx.moveTo(p1.x, p1.y);
                    ctx.lineTo(p2.x, p2.y);
                    ctx.stroke();
                }
            });
        });
    }
    
    initCanvas();
    createParticles();
    drawParticles();
    
    window.addEventListener('resize', () => {
        initCanvas();
        particles = [];
        createParticles();
    });
});