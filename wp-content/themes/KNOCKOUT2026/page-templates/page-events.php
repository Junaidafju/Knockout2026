<?php
/*
Template Name: Knockout Events Page
*/
get_header();
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Alpaca&display=swap');

    :root {
        --green-primary: #afd135;
        --green-dark: #96b623ff;
        --green-glow: rgba(175, 209, 53, 0.62);
        --green-subtle: rgba(175, 209, 53, 0.08);
        --bg-obsidian: #0A0A0A;
        --bg-charcoal: #121212;
        --bg-card: #1A1A1A;
        --text-white: #FFFFFF;
        --text-muted: #B0B0B0;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .events-page {
        font-family: 'Alpaca', 'Segoe UI', sans-serif;
        background: var(--bg-obsidian);
        color: var(--text-white);
        overflow-x: hidden;
    }

    /* ========== TRANSITION UTILITIES ========== */
    .fade-in-section {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .fade-in-section.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .slide-left {
        transform: translateX(-60px);
    }

    .slide-left.visible {
        transform: translateX(0);
    }

    .slide-right {
        transform: translateX(60px);
    }

    .slide-right.visible {
        transform: translateX(0);
    }

    .scale-in {
        transform: scale(0.9);
    }

    .scale-in.visible {
        transform: scale(1);
    }

    /* ========== HERO SECTION ========== */
    .ll-hero {
        position: relative;
        width: 100%;
        height: 100vh;
        min-height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        overflow: hidden;
        background: url('https://theknockout.in/wp-content/uploads/2026/04/download1-ezgif.com-video-to-gif-converter.gif') center/cover no-repeat;
    }

    .ll-hero::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 120px;
        background: linear-gradient(transparent, var(--bg-obsidian));
        z-index: 2;
    }

    .hero-neon-line {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: var(--green-primary);
        box-shadow: 0 0 20px var(--green-glow), 0 0 60px var(--green-glow);
        animation: neonPulse 2s ease-in-out infinite;
    }

    @keyframes neonPulse {

        0%,
        100% {
            opacity: 0.6;
            box-shadow: 0 0 20px var(--green-glow);
        }

        50% {
            opacity: 1;
            box-shadow: 0 0 40px var(--green-glow), 0 0 80px rgba(175, 209, 53, 0.2);
        }
    }

    .hero-content {
        position: relative;
        z-index: 3;
        max-width: 900px;
        padding: 0 20px;
    }

    .hero-content h1 {
        font-size: clamp(2.5rem, 6vw, 5rem);
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .hero-content h1 .green {
        color: var(--green-primary);
    }

    .hero-content .subheadline {
        font-size: clamp(1rem, 2vw, 1.3rem);
        color: var(--text-muted);
        line-height: 1.6;
        margin-bottom: 40px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .hero-cta {
        display: inline-block;
        padding: 16px 48px;
        background: var(--green-primary);
        color: var(--bg-obsidian);
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-decoration: none;
        border-radius: 0;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .hero-cta:hover {
        background: var(--green-dark);
        box-shadow: 0 0 30px var(--green-glow);
        transform: translateY(-2px);
    }

    .trust-badges {
        display: flex;
        gap: 30px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 40px;
        font-size: 0.95rem;
        color: var(--green-primary);
        font-weight: 600;
    }

    .trust-badges span {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    /* ========== SECTION COMMON ========== */
    .ll-section {
        position: relative;
        padding: 100px 20px;
        overflow: hidden;
    }

    .ll-section .container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .section-label {
        display: inline-block;
        color: var(--green-primary);
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 15px;
        position: relative;
        padding-left: 40px;
    }

    .section-label::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        width: 28px;
        height: 2px;
        background: var(--green-primary);
    }

    .section-title {
        font-size: clamp(2rem, 4vw, 3.5rem);
        font-weight: 800;
        text-transform: uppercase;
        line-height: 1.1;
        margin-bottom: 20px;
    }

    .section-desc {
        color: var(--text-muted);
        font-size: 1.05rem;
        line-height: 1.7;
        max-width: 600px;
    }

    /* ========== BACKGROUND STRIPS ========== */
    .bg-strip {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 0;
    }

    .bg-strip-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }

    /* ========== FEATURES GRID ========== */
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin-top: 60px;
    }

    .feature-card {
        background: var(--bg-card);
        padding: 40px 30px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .feature-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--green-primary);
        transform: scaleY(0);
        transition: transform 0.3s ease;
    }

    .feature-card:hover::before {
        transform: scaleY(1);
    }

    .feature-card:hover {
        border-color: var(--green-glow);
        transform: translateY(-5px);
        box-shadow: 0 10px 40px rgba(175, 209, 53, 0.1);
    }

    .feature-icon {
        font-size: 2.5rem;
        margin-bottom: 20px;
        display: block;
    }

    .feature-card h3 {
        font-size: 1.3rem;
        font-weight: 800;
        margin-bottom: 12px;
        color: var(--text-white);
    }

    .feature-card p {
        color: var(--text-muted);
        line-height: 1.7;
        font-size: 0.95rem;
    }

    /* ========== EVENT CATEGORIES ========== */
    .event-category {
        margin-bottom: 100px;
    }

    .event-layout {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .event-layout.reverse {
        direction: rtl;
    }

    .event-layout.reverse>* {
        direction: ltr;
    }

    .event-content h3 {
        font-size: 2rem;
        font-weight: 900;
        margin-bottom: 20px;
        color: var(--green-primary);
    }

    .event-content h4 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--text-white);
    }

    .category-desc {
        font-size: 1.1rem;
        color: var(--text-muted);
        margin-bottom: 25px;
        line-height: 1.7;
    }

    .feature-list {
        list-style: none;
        margin-bottom: 25px;
    }

    .feature-list li {
        padding: 10px 0;
        padding-left: 30px;
        position: relative;
        color: var(--text-white);
    }

    .feature-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--green-primary);
        font-weight: 900;
    }

    .best-for {
        font-size: 0.9rem;
        color: var(--text-muted);
        font-style: italic;
    }

    .best-for strong {
        color: var(--green-primary);
    }

    .event-visual {
        background: var(--bg-card);
        height: 400px;
        overflow: hidden;
        position: relative;
        border: 2px solid var(--green-primary);
    }

    .event-visual img,
    .event-visual video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .event-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 30px;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
    }

    .event-overlay h4 {
        color: var(--green-primary);
        font-weight: 700;
        text-transform: uppercase;
    }

    /* ========== BUYOUT SECTION ========== */
    .buyout-section {
        background: var(--bg-card);
        padding: 80px;
        border: 2px solid var(--green-primary);
        text-align: center;
        margin: 60px 0;
        position: relative;
        overflow: hidden;
    }

    .buyout-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: var(--green-primary);
    }

    .buyout-section h3 {
        font-size: 2.5rem;
        font-weight: 900;
        margin-bottom: 20px;
        color: var(--green-primary);
        text-transform: uppercase;
    }

    .buyout-features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin: 40px 0;
        text-align: left;
    }

    .buyout-feature {
        padding: 15px;
        background: var(--bg-obsidian);
        border-left: 3px solid var(--green-primary);
        color: var(--text-muted);
    }

    .capacity-badge {
        display: inline-block;
        background: var(--green-primary);
        color: var(--bg-obsidian);
        padding: 10px 30px;
        font-weight: 800;
        margin-top: 20px;
        text-transform: uppercase;
    }

    /* ========== TESTIMONIALS ========== */
    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin-top: 60px;
    }

    .testimonial-card {
        background: var(--bg-card);
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        position: relative;
        transition: all 0.3s ease;
    }

    .testimonial-card:hover {
        border-color: var(--green-glow);
        transform: translateY(-5px);
    }

    .testimonial-card::before {
        content: '"';
        font-size: 6rem;
        color: var(--green-primary);
        opacity: 0.2;
        position: absolute;
        top: 20px;
        left: 20px;
        line-height: 1;
    }

    .testimonial-text {
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 25px;
        color: var(--text-muted);
        position: relative;
        z-index: 1;
    }

    .testimonial-author {
        font-weight: 700;
        color: var(--green-primary);
    }

    .testimonial-role {
        font-size: 0.9rem;
        color: var(--text-muted);
    }

    .trust-indicators {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
        margin-top: 60px;
        padding: 40px;
        background: var(--bg-card);
        border-top: 3px solid var(--green-primary);
    }

    .trust-item {
        text-align: center;
    }

    .trust-number {
        font-size: 2.5rem;
        font-weight: 900;
        color: var(--green-primary);
        display: block;
    }

    .trust-label {
        font-size: 0.9rem;
        color: var(--text-muted);
    }

    /* ========== FAQ SECTION ========== */


    .faq-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .faq-item {
        background: var(--bg-card);
        margin-bottom: 20px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        overflow: hidden;
    }

    .faq-question {
        padding: 25px 30px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 700;
        font-size: 1.05rem;
        transition: all 0.3s ease;
    }

    .faq-question:hover {
        background: var(--green-subtle);
        color: var(--green-primary);
    }

    .faq-icon {
        font-size: 1.5rem;
        color: var(--green-primary);
        transition: transform 0.3s ease;
    }

    .faq-item.active .faq-icon {
        transform: rotate(45deg);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
        padding: 0 30px;
    }

    .faq-item.active .faq-answer {
        max-height: 300px;
        padding-bottom: 25px;
    }

    .faq-answer p {
        color: var(--text-muted);
        line-height: 1.7;
    }

    /* ========== CONTACT SECTION ========== */
    .contact-section {
        background: var(--bg-charcoal);
        position: relative;
        overflow: hidden;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
        align-items: start;
    }

    .contact-info h3 {
        font-size: 2rem;
        font-weight: 900;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .contact-info h3 .highlight {
        color: var(--green-primary);
    }

    .contact-description {
        font-size: 1.1rem;
        color: var(--text-muted);
        margin-bottom: 40px;
        line-height: 1.7;
    }

    .contact-methods {
        margin-bottom: 40px;
    }

    .contact-method {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
        font-size: 1.05rem;
    }

    .contact-method strong {
        color: var(--green-primary);
    }

    .response-guarantee {
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 25px;
        background: var(--green-subtle);
        border-left: 4px solid var(--green-primary);
    }

    .response-guarantee div {
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--text-muted);
    }

    .response-guarantee div::before {
        content: '✓';
        color: var(--green-primary);
        font-weight: 900;
    }

    /* ========== FORM STYLES ========== */
    .event-form {
        background: var(--bg-card);
        padding: 50px;
        border: 2px solid var(--green-primary);
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--text-white);
        font-size: 0.9rem;
        text-transform: uppercase;
    }

    .form-group label .required {
        color: var(--green-primary);
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 15px;
        background: var(--bg-obsidian);
        border: 1px solid rgba(175, 209, 53, 0.2);
        color: var(--text-white);
        font-family: 'Segoe UI', sans-serif;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: var(--green-primary);
        box-shadow: 0 0 0 3px var(--green-subtle);
    }

    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .submit-btn {
        width: 100%;
        padding: 20px;
        background: var(--green-primary);
        color: var(--bg-obsidian);
        border: none;
        font-weight: 900;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        background: var(--green-dark);
        box-shadow: 0 10px 30px var(--green-glow);
        transform: translateY(-2px);
    }

    /* ========== FOOTER CTA ========== */
    .footer-cta {
        background: var(--bg-obsidian);
        padding: 100px 20px;
        text-align: center;
        border-top: 3px solid var(--green-primary);
        position: relative;
    }

    .footer-cta h2 {
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 900;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .footer-cta h2 .highlight {
        color: var(--green-primary);
    }

    .footer-cta p {
        font-size: 1.1rem;
        color: var(--text-muted);
        max-width: 700px;
        margin: 0 auto 40px;
        line-height: 1.7;
    }

    .cta-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-primary {
        display: inline-block;
        padding: 16px 48px;
        background: var(--green-primary);
        color: var(--bg-obsidian);
        font-size: 0.95rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: var(--green-dark);
        box-shadow: 0 0 40px var(--green-glow);
        transform: translateY(-3px);
    }

    .btn-outline {
        display: inline-block;
        padding: 16px 48px;
        background: transparent;
        color: var(--green-primary);
        font-size: 0.95rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-decoration: none;
        border: 2px solid var(--green-primary);
        transition: all 0.3s ease;
    }

    .btn-outline:hover {
        background: var(--green-primary);
        color: var(--bg-obsidian);
    }

    /* ========== FLOATING CTA ========== */
    .floating-cta {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 9999;
        padding: 14px 28px;
        background: var(--green-primary);
        color: var(--bg-obsidian);
        font-weight: 800;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-decoration: none;
        box-shadow: 0 4px 20px rgba(175, 209, 53, 0.4);
        transition: all 0.3s ease;
        animation: floatBounce 3s ease-in-out infinite;
    }

    .floating-cta:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 30px rgba(175, 209, 53, 0.6);
    }

    @keyframes floatBounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 1024px) {

        .event-layout,
        .event-layout.reverse,
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .event-layout.reverse {
            direction: ltr;
        }

        .features-grid,
        .testimonials-grid {
            grid-template-columns: 1fr;
        }

        .buyout-section {
            padding: 40px 30px;
        }

        .form-row {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .ll-section {
            padding: 60px 20px;
        }

        .event-form {
            padding: 30px 20px;
        }

        .hero-content h1 {
            font-size: 2.2rem;
        }

        .floating-cta {
            bottom: 15px;
            right: 15px;
            padding: 12px 20px;
            font-size: 0.75rem;
        }
    }

    /* ========== SCROLLBAR ========== */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: var(--bg-obsidian);
    }

    ::-webkit-scrollbar-thumb {
        background: var(--green-primary);
        border-radius: 0;
    }
</style>

<div class="events-page">

    <!-- ===== HERO ===== -->
    <section class="ll-hero">
        <div class="bg-strip">
            <div class="bg-strip-overlay"
                style="background: linear-gradient(180deg, rgba(10,10,10,0.85) 0%, rgba(10,10,10,0.5) 60%, var(--bg-obsidian) 100%);">
            </div>
        </div>
        <div class="hero-content fade-in-section">
            <h1>Level Up Your <span class="green">Celebrations</span> at Knockout!</h1>
            <p class="subheadline">From high-stakes bowling battles to immersive VR adventures, host your next private
                event at Kolkata's premier sports and entertainment destination.</p>
            <a href="#inquire" class="hero-cta">🎳 Book Your Private Arena</a>
            <div class="trust-badges">
                <span>✓ 500+ Successful Events</span>
                <span>✓ 10,000+ Happy Guests</span>
                <span>✓ Rated 4.8/5</span>
            </div>
        </div>
        <div class="hero-neon-line"></div>
    </section>

    <!-- ===== WHY CHOOSE KNOCKOUT ===== -->
    <section class="ll-section" style="background: var(--bg-charcoal);">
        <div class="bg-strip">
            <div class="bg-strip-overlay"
                style="background: url('https://images2.alphacoders.com/212/thumb-1920-212450.jpg') center/cover no-repeat; opacity: 0.08;">
            </div>
        </div>
        <div class="container">
            <span class="section-label fade-in-section">Why Choose Us</span>
            <h2 class="section-title fade-in-section">Why Host Your Event at <span
                    style="color: var(--green-primary);">Knockout?</span>
            </h2>
            <p class="section-desc fade-in-section">Kolkata's first and only all-in-one sports entertainment destination
            </p>

            <div class="features-grid">
                <div class="feature-card scale-in">
                    <span class="feature-icon">🎳</span>
                    <h3>Professional 6-Lane Bowling</h3>
                    <p>The first of its kind in Kolkata, featuring digital scoring, cosmic lighting, and dedicated VIP
                        lane seating.</p>
                </div>

                <div class="feature-card scale-in" style="transition-delay: 0.1s">
                    <span class="feature-icon">🎮</span>
                    <h3>Immersive Gaming Zone</h3>
                    <p>Cutting-edge VR experiences, AR games, and arcade classics for all ages.</p>
                </div>

                <div class="feature-card scale-in" style="transition-delay: 0.2s">
                    <span class="feature-icon">🍽️</span>
                    <h3>Gourmet Food & Craft Drinks</h3>
                    <p>Curated international menu featuring signature cocktails, gourmet wings, loaded nachos, and
                        stadium favorites.</p>
                </div>

                <div class="feature-card scale-in" style="transition-delay: 0.3s">
                    <span class="feature-icon">📺</span>
                    <h3>High-Tech Entertainment</h3>
                    <p>Giant 4K LED walls for live match screenings, professional DJ setup, and state-of-the-art sound
                        system.</p>
                </div>

                <div class="feature-card scale-in" style="transition-delay: 0.4s">
                    <span class="feature-icon">📍</span>
                    <h3>Prime Location</h3>
                    <p>Strategically located in Salt Lake, Sector V, with easy access and ample parking.</p>
                </div>

                <div class="feature-card scale-in" style="transition-delay: 0.5s">
                    <span class="feature-icon">👥</span>
                    <h3>Dedicated Event Manager</h3>
                    <p>From tournament brackets to catering, we handle everything while you enjoy the party.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== EVENT CATEGORIES ===== -->
    <section class="ll-section" style="background: var(--bg-obsidian);">
        <div class="container">
            <span class="section-label fade-in-section">Event Categories</span>
            <h2 class="section-title fade-in-section">Tailored Events for <span
                    style="color: var(--green-primary);">Every Occasion</span>
            </h2>

            <!-- Corporate Events -->
            <div class="event-category">
                <div class="event-layout">
                    <div class="event-content slide-left">
                        <h3>🎯 Corporate Mixers & Team Building</h3>
                        <h4>Swap the Boardroom for the Bowling Lane</h4>
                        <p class="category-desc">
                            Elevate your corporate culture with a dose of healthy competition. Nothing builds a team
                            like a 6-lane bowling tournament or a collaborative VR mission.
                        </p>
                        <ul class="feature-list">
                            <li>The Ultimate Icebreaker: Friendly bowling tournaments and collaborative VR missions
                            </li>
                            <li>Plug-and-Play Tech: Giant LED walls and professional sound systems</li>
                            <li>The VIP Treatment: Dedicated lounge area with customized food menus</li>
                            <li>Stress-Free Planning: Our event managers handle logistics</li>
                            <li>Customizable Tournaments: Brackets, team names, and winner trophies</li>
                        </ul>
                        <p class="best-for"><strong>Best For:</strong> Team building, corporate off-sites, client
                            entertainment, company parties</p>
                    </div>
                    <div class="event-visual slide-right">
                        <video autoplay loop muted playsinline
                            src="https://theknockout.in/wp-content/uploads/2026/04/download-2.mp4"></video>
                        <div class="event-overlay">
                            <h4>Corporate Excellence</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Birthday Parties -->
            <div class="event-category">
                <div class="event-layout reverse">
                    <div class="event-content slide-right">
                        <h3>🎂 Ultimate Birthday Bashes</h3>
                        <h4>Next-Level Birthday Celebrations</h4>
                        <p class="category-desc">
                            The ultimate destination for those who want more than just a cake-cutting ceremony. Whether
                            it's a kid's "Gaming Galore" party or an adult's "Night Out."
                        </p>
                        <ul class="feature-list">
                            <li>For Kids & Teens: High-octane AR/VR zones and arcade battles</li>
                            <li>For Adults: Signature cocktails, private DJ, and late-night bowling</li>
                            <li>Personalised Vibe: Flexible decor options to match your theme</li>
                            <li>Photo Moments: Themed backdrops and instant print options</li>
                            <li>Party Favors: Customizable goody bags for your guests</li>
                        </ul>
                        <p class="best-for"><strong>Best For:</strong> Kids' parties, milestone birthdays, sweet
                            sixteen, 21st birthdays</p>
                    </div>
                    <div class="event-visual slide-left">
                        <video autoplay loop muted playsinline
                            src="https://theknockout.in/wp-content/uploads/2026/04/download-3.mp4"></video>
                        <div class="event-overlay">
                            <h4>Birthday Bash</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sports Screenings -->
            <div class="event-category">
                <div class="event-layout">
                    <div class="event-content slide-left">
                        <h3>🏆 Sports Viewing & Private Screenings</h3>
                        <h4>The Closest Thing to Being at the Stadium</h4>
                        <p class="category-desc">
                            Host an exclusive screening for the big game on our giant 4K LED walls with stadium-grade
                            sound and dedicated service for your crew.
                        </p>
                        <ul class="feature-list">
                            <li>Exclusive Arenas: Book a private section for Cricket, Football, or F1 finals</li>
                            <li>Giant 4K Screens: Kolkata's largest indoor screens with zero blind spots</li>
                            <li>Stadium-Grade Sound: Immersive Dolby Atmos audio system</li>
                            <li>Gourmet Game-Day Menu: Stadium-style snacks reimagined</li>
                            <li>Full-Service Bar: Never miss a moment of the action</li>
                        </ul>
                        <p class="best-for"><strong>Best For:</strong> IPL finals, World Cup screenings, Champions
                            League matches, F1 races</p>
                    </div>
                    <div class="event-visual slide-right">
                        <video autoplay loop muted playsinline
                            src="https://theknockout.in/wp-content/uploads/2026/04/download-6.mp4"></video>
                        <div class="event-overlay">
                            <h4>Live Sports Action</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Events -->
            <div class="event-category">
                <div class="event-layout reverse">
                    <div class="event-content slide-right">
                        <h3>🎉 Social & Special Occasions</h3>
                        <h4>Any Reason to Celebrate, We Have the Space</h4>
                        <p class="category-desc">
                            Perfect for reunions, anniversaries, or "just because" gatherings in our sophisticated
                            lounge areas.
                        </p>
                        <ul class="feature-list">
                            <li>Social Mixers: Alumni meets, bachelor/bachelorette parties, reunions</li>
                            <li>Product Launches: High-tech, modern backdrop for brand launches</li>
                            <li>Custom Takeovers: Full venue buyouts for maximum privacy</li>
                            <li>Live Entertainment: Professional DJs and karaoke options</li>
                            <li>Flexible Catering: Customized menus for any dietary preference</li>
                        </ul>
                        <p class="best-for"><strong>Best For:</strong> Anniversaries, reunions, engagement parties,
                            graduation parties</p>
                    </div>
                    <div class="event-visual slide-left">
                        <video autoplay loop muted playsinline
                            src="https://theknockout.in/wp-content/uploads/2026/04/download-5.mp4"></video>
                        <div class="event-overlay">
                            <h4>Celebrate Together</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Full Venue Buyout -->
            <div class="buyout-section fade-in-section"
                style="background: url('https://www.enchanted.media/wp-content/uploads/2024/11/80s_VHS_Grid_Background_Green_02_Enchanted_Media.gif') center/cover no-repeat;">
                <h3>🏟️ Own the Arena: Full Venue Buyouts</h3>
                <p
                    style="font-size: 1.1rem; background:color: var(--text-muted); max-width: 800px; margin: 0 auto 30px;">
                    Need the whole place? We offer complete venue buyouts for maximum privacy and total control over the
                    music, branding, and flow of your event.
                </p>

                <div class="buyout-features">
                    <div class="buyout-feature">✓ Exclusive access to all 6 bowling lanes</div>
                    <div class="buyout-feature">✓ Private gaming zone for your guests</div>
                    <div class="buyout-feature">✓ Dedicated DJ booth with custom playlist</div>
                    <div class="buyout-feature">✓ Personalized digital scoreboards with your branding</div>
                    <div class="buyout-feature">✓ Dedicated catering staff and event manager</div>
                    <div class="buyout-feature">✓ Customizable seating arrangements</div>
                </div>

                <div class="capacity-badge">Capacity: Up to 200 guests</div>
            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section class="ll-section" style="background: var(--bg-charcoal);">
        <div class="bg-strip">
            <div class="bg-strip-overlay"
                style="background: url('https://images.squarespace-cdn.com/content/v1/5e4ebffeccd62403a77158ca/b94640a1-e942-40ce-b7a8-67dd79e792e7/BaileysChurrosOpener.gif?format=2500w') center/cover no-repeat; opacity: 0.5;">
            </div>
        </div>
        <div class="container">
            <span class="section-label fade-in-section">Testimonials</span>
            <h2 class="section-title fade-in-section">Trusted by <span style="color: var(--green-primary);">India's
                    Leading Brands</span>
            </h2>

            <div class="testimonials-grid">
                <div class="testimonial-card scale-in">
                    <p class="testimonial-text">
                        "The perfect spot for our team outing. The mix of bowling, VR gaming, and great food made it our
                        most talked-about event of the year! Our employees are still asking when we're going back."
                    </p>
                    <div class="testimonial-author">Rahul Sharma</div>
                    <div class="testimonial-role">HR Manager, Tech Mahindra</div>
                </div>

                <div class="testimonial-card scale-in" style="transition-delay: 0.1s">
                    <p class="testimonial-text">
                        "Hosted my son's 12th birthday here. The kids couldn't stop talking about the VR zone and
                        bowling tournament. The party coordinator made everything effortless. Best decision ever!"
                    </p>
                    <div class="testimonial-author">Priya Mehta</div>
                    <div class="testimonial-role">Parent</div>
                </div>

                <div class="testimonial-card scale-in" style="transition-delay: 0.2s">
                    <p class="testimonial-text">
                        "We booked the venue for the IPL finals. Private screening with stadium-grade sound and gourmet
                        food—our clients were blown away. Knockout is now our go-to for client entertainment."
                    </p>
                    <div class="testimonial-author">Arjun Kapoor</div>
                    <div class="testimonial-role">Director, Digital Agency</div>
                </div>
            </div>

            <div class="trust-indicators fade-in-section">
                <div class="trust-item">
                    <span class="trust-number">500+</span>
                    <span class="trust-label">Successful Corporate Events</span>
                </div>
                <div class="trust-item">
                    <span class="trust-number">1,000+</span>
                    <span class="trust-label">Birthday Parties Hosted</span>
                </div>
                <div class="trust-item">
                    <span class="trust-number">10,000+</span>
                    <span class="trust-label">Happy Guests</span>
                </div>
                <div class="trust-item">
                    <span class="trust-number">4.8/5</span>
                    <span class="trust-label">Google Rating</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ===== -->
    <section class="ll-section" style="background: var(--bg-obsidian);">
        <div class="bg-strip">

            <div class="bg-strip-overlay"
                style="background: linear-gradient(to top, rgba(255,255,255,0.1) 0%, rgba(0,0,0,0.8) 100%), url('https://t3.ftcdn.net/jpg/19/22/04/20/360_F_1922042086_kM027lnKnBaTdYFPcPVxvuufdH9Rt7As.jpg') center/cover no-repeat; position: relative;">
            </div>
        </div>
        <div class="container">
            <span class="section-label fade-in-section">FAQ</span>
            <h2 class="section-title fade-in-section">Frequently Asked <span
                    style="color: var(--green-primary);">Questions</span>
            </h2>

            <div class="faq-container">
                <div class="faq-item fade-in-section">
                    <div class="faq-question">
                        <span>What's the capacity for private events?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We can accommodate up to 200 guests for seated events and 300 for cocktail-style gatherings.
                        </p>
                    </div>
                </div>

                <div class="faq-item fade-in-section">
                    <div class="faq-question">
                        <span>Do you provide catering?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! Our in-house kitchen offers gourmet international cuisine, customizable menus, and
                            special dietary options.</p>
                    </div>
                </div>

                <div class="faq-item fade-in-section">
                    <div class="faq-question">
                        <span>Can I bring my own decorations?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely! We encourage personalization. Our team can also assist with decor setup for an
                            additional fee.</p>
                    </div>
                </div>

                <div class="faq-item fade-in-section">
                    <div class="faq-question">
                        <span>How far in advance should I book?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We recommend booking 2-4 weeks in advance for private events. For weekends and peak season,
                            book 6-8 weeks ahead.</p>
                    </div>
                </div>

                <div class="faq-item fade-in-section">
                    <div class="faq-question">
                        <span>Is there parking available?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we have ample parking space for your guests at our Sector V location.</p>
                    </div>
                </div>

                <div class="faq-item fade-in-section">
                    <div class="faq-question">
                        <span>Can I do a site visit before booking?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely! We encourage site visits. Schedule yours by calling +91 98310 40034.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== INQUIRE/CONTACT ===== -->
    <section class="ll-section contact-section" id="inquire">
        <div class="bg-strip">
            <div class="bg-strip-overlay"
                style="background: url('https://i.pinimg.com/originals/6c/eb/11/6ceb11e2c9f57e8750fe5380184df426.gif') center/cover no-repeat; opacity: 0.5;">
            </div>
        </div>
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info fade-in-section">
                    <h3>Ready to Host a <span class="highlight">Knockout Event?</span></h3>
                    <p class="contact-description">
                        Don't just book a room—book an experience. Share your event details with us, and our team will
                        craft a bespoke itinerary that fits your vision perfectly.
                    </p>

                    <div class="contact-methods">
                        <div class="contact-method">
                            <span>📞</span>
                            <div><strong>Call us:</strong> +91 98310 40034</div>
                        </div>
                        <div class="contact-method">
                            <span>💬</span>
                            <div><strong>WhatsApp:</strong> Chat with our Event Manager</div>
                        </div>
                        <div class="contact-method">
                            <span>📍</span>
                            <div><strong>Visit us:</strong> Salt Lake, Sector V, Kolkata</div>
                        </div>
                    </div>

                    <div class="response-guarantee">
                        <div>We'll respond within 24 hours</div>
                        <div>Free event consultation</div>
                        <div>Custom quotes with no obligation</div>
                    </div>
                </div>

                <div class="event-form fade-in-section">
                    <form id="eventInquiryForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label>Name <span class="required">*</span></label>
                                <input type="text" name="name" required placeholder="Your full name">
                            </div>
                            <div class="form-group">
                                <label>Phone Number <span class="required">*</span></label>
                                <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email Address <span class="required">*</span></label>
                            <input type="email" name="email" required placeholder="your@email.com">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Event Type <span class="required">*</span></label>
                                <select name="event_type" required>
                                    <option value="">Select event type</option>
                                    <option value="corporate">Corporate Event</option>
                                    <option value="birthday">Birthday</option>
                                    <option value="screening">Sports Screening</option>
                                    <option value="social">Social</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Estimated Guest Count</label>
                                <input type="number" name="guests" placeholder="Number of guests">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Preferred Date</label>
                            <input type="date" name="preferred_date">
                        </div>

                        <div class="form-group">
                            <label>Special Requests</label>
                            <textarea name="message"
                                placeholder="Tell us about your event vision, special requirements..."></textarea>
                        </div>

                        <button type="submit" class="submit-btn">📋 INQUIRE NOW →</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER CTA ===== -->
    <section class="footer-cta">
        <h2>Your Venue for <span class="highlight">Legendary Events</span></h2>
        <p>Why settle for a boring banquet hall? Take your celebration to the arena. At Knockout, we combine world-class
            sports entertainment, immersive gaming, and gourmet hospitality.</p>
        <div class="cta-buttons">
            <a href="#inquire" class="btn-primary">🎳 BOOK YOUR PRIVATE ARENA</a>
            <a href="https://wa.me/919831040034" class="btn-outline">💬 CHAT WITH EVENT MANAGER</a>
        </div>
    </section>

</div>

<!-- Floating CTA -->
<a href="#inquire" class="floating-cta">📞 Book Event</a>

<!-- Scroll Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('.fade-in-section, .slide-left, .slide-right, .scale-in').forEach(el => {
            observer.observe(el);
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                const isActive = item.classList.contains('active');

                document.querySelectorAll('.faq-item').forEach(faq => {
                    faq.classList.remove('active');
                });

                if (!isActive) {
                    item.classList.add('active');
                }
            });
        });

        // Form Submission
        document.getElementById('eventInquiryForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Thank you for your inquiry! Our event manager will contact you within 24 hours.');
            this.reset();
        });
    });
</script>

<?php get_footer(); ?>