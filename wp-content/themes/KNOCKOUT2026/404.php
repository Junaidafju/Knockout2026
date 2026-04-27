<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Knockout2026
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="error-404-main">
    <!-- Background Ambient Elements -->
    <div class="floating-element shape-1"></div>
    <div class="floating-element shape-2"></div>

    <div class="error-404-container">
        <div class="error-content glass-panel">
            <h1 class="neon-text-404">404</h1>
            <h2 class="error-title">Oops! You've stepped out of the ring.</h2>
            <p class="error-description">The page you are looking for might have been removed, had its name changed, or
                is temporarily unavailable.</p>
            <div class="error-actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-neon-primary">
                    <span>Return to Home</span>
                </a>
            </div>
        </div>
    </div>
</main>

<style>
    /* Premium 404 Styles */
    .error-404-main {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        padding: 4rem 2rem;
        background: transparent;
        /* Let the neon particles canvas behind show through */
    }

    .error-404-container {
        max-width: 800px;
        width: 100%;
        text-align: center;
        position: relative;
        z-index: 10;
        animation: floatUp 1s ease-out forwards;
        transform-style: preserve-3d;
    }

    .error-content.glass-panel {
        background: rgba(15, 15, 20, 0.6);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(174, 208, 52, 0.2);
        border-radius: 24px;
        padding: 4rem 3rem;
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37), inset 0 0 20px rgba(174, 208, 52, 0.05);
        transition: box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .error-content.glass-panel:hover {
        box-shadow: 0 15px 45px 0 rgba(0, 0, 0, 0.5), inset 0 0 30px rgba(174, 208, 52, 0.15);
        border-color: rgba(174, 208, 52, 0.4);
    }

    .neon-text-404 {
        font-size: clamp(6rem, 15vw, 12rem);
        font-weight: 900;
        margin: 0;
        line-height: 1;
        font-family: 'Inter', sans-serif;
        color: transparent;
        -webkit-text-stroke: 2px #aed034;
        text-shadow: 0 0 20px rgba(174, 208, 52, 0.5),
            0 0 40px rgba(174, 208, 52, 0.3),
            0 0 80px rgba(174, 208, 52, 0.1);
        animation: pulseGlow 3s infinite alternate;
        letter-spacing: -0.05em;
        transform: translateZ(30px);
    }

    .error-title {
        color: #ffffff;
        font-size: clamp(1.5rem, 4vw, 2.5rem);
        font-weight: 700;
        margin: 1.5rem 0 1rem;
        font-family: 'Outfit', sans-serif;
        letter-spacing: 0.5px;
        transform: translateZ(20px);
    }

    .error-description {
        color: rgba(255, 255, 255, 0.7);
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 2.5rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        font-family: 'Roboto', sans-serif;
        transform: translateZ(10px);
    }

    .error-actions {
        transform: translateZ(20px);
    }

    .btn-neon-primary {
        display: inline-block;
        padding: 1rem 2.5rem;
        background: transparent;
        color: #aed034;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        border: 2px solid #aed034;
        border-radius: 50px;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        font-family: 'Outfit', sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .btn-neon-primary span {
        position: relative;
        z-index: 2;
    }

    .btn-neon-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #aed034;
        z-index: 1;
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .btn-neon-primary:hover {
        color: #0f0f14;
        box-shadow: 0 0 20px rgba(174, 208, 52, 0.6), 0 0 40px rgba(174, 208, 52, 0.2);
        transform: translateY(-3px);
    }

    .btn-neon-primary:hover::before {
        transform: scaleX(1);
        transform-origin: left;
    }

    @keyframes floatUp {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulseGlow {
        0% {
            text-shadow: 0 0 10px rgba(174, 208, 52, 0.3),
                0 0 20px rgba(174, 208, 52, 0.2),
                0 0 40px rgba(174, 208, 52, 0.1);
            -webkit-text-stroke: 1px rgba(174, 208, 52, 0.5);
        }

        100% {
            text-shadow: 0 0 20px rgba(174, 208, 52, 0.8),
                0 0 40px rgba(174, 208, 52, 0.5),
                0 0 80px rgba(174, 208, 52, 0.3),
                0 0 120px rgba(174, 208, 52, 0.1);
            -webkit-text-stroke: 3px #aed034;
        }
    }

    /* Additional floating background elements specific to 404 */
    .floating-element {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(174, 208, 52, 0.15) 0%, rgba(174, 208, 52, 0) 70%);
        pointer-events: none;
        z-index: 1;
    }

    .shape-1 {
        width: 400px;
        height: 400px;
        top: -100px;
        left: -100px;
        animation: floatShape 15s infinite ease-in-out alternate;
    }

    .shape-2 {
        width: 300px;
        height: 300px;
        bottom: -50px;
        right: -50px;
        animation: floatShape 12s infinite ease-in-out alternate-reverse;
    }

    @keyframes floatShape {
        0% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(50px, 30px) scale(1.1);
        }

        100% {
            transform: translate(-20px, 60px) scale(0.9);
        }
    }

    @media (max-width: 768px) {
        .error-content.glass-panel {
            padding: 3rem 1.5rem;
        }

        .neon-text-404 {
            transform: translateZ(0);
            /* Disable 3D on mobile for better performance */
        }

        .error-404-container {
            transform-style: flat;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Subtle mouse move 3D parallax effect on the 404 container
        const container = document.querySelector('.error-404-container');

        // Only apply 3D effect on larger screens
        if (window.innerWidth > 768) {
            document.addEventListener('mousemove', (e) => {
                if (!container) return;
                const xAxis = (window.innerWidth / 2 - e.pageX) / 60;
                const yAxis = (window.innerHeight / 2 - e.pageY) / 60;

                // Add easing via CSS transition, but keep it snappy
                container.style.transition = 'transform 0.1s ease-out';
                container.style.transform = `perspective(1000px) rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
            });

            // Reset transform on mouse leave
            document.addEventListener('mouseleave', () => {
                if (!container) return;
                container.style.transition = 'transform 0.5s ease';
                container.style.transform = `perspective(1000px) rotateY(0deg) rotateX(0deg)`;
            });
        }
    });
</script>

<?php
get_footer();
?>