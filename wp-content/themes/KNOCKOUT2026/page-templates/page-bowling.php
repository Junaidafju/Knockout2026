<?php
/**
 * Template Name: Premium Bowling Page
 * Description: 6-Lane Boutique Bowling Lounge with Full-Screen Carousel
 */

get_header();
?>

<style>
    /* =========================================
   BOWLING LANDING PAGE - ENHANCED VISIBILITY
   ========================================= */

    :root {
        --bowling-neon: #B0D136;
        --bowling-gold: #FFD700;
        --bowling-purple: #9b4dff;
        --bowling-cyan: #00E5FF;
        --bowling-dark: #0A0A0F;
        --bowling-darker: #050508;
        --bowling-dim: rgba(176, 209, 54, 0.15);
        --font-alphacorsa: 'Alphacorsa Personal Use', cursive;
        --font-display: 'Bebas Neue', 'Oswald', sans-serif;
        --font-body: 'Barlow Condensed', sans-serif;
    }

    /* Full Screen Carousel */
    .bowling-carousel {
        position: relative;
        height: 100vh;
        min-height: 600px;
        max-height: 900px;
        overflow: hidden;
    }

    .carousel-slides {
        position: relative;
        height: 100%;
        width: 100%;
    }

    .carousel-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.8s ease, visibility 0.8s ease;
    }

    .carousel-slide.active {
        opacity: 1;
        visibility: visible;
    }

    .slide-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.6) saturate(1.1);
    }

    /* Enhanced Gradient Overlay for Better Text Visibility */
    .slide-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg,
                rgba(10, 10, 15, 0.85) 0%,
                rgba(26, 16, 53, 0.75) 30%,
                rgba(10, 10, 15, 0.6) 60%,
                rgba(26, 16, 53, 0.8) 100%);
    }

    /* Additional Brushed Gradient for Text Area */
    .slide-text-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(ellipse at 50% 50%,
                rgba(0, 0, 0, 0.4) 0%,
                rgba(0, 0, 0, 0.2) 50%,
                transparent 100%);
        pointer-events: none;
    }

    /* Dark Brushed Effect Behind Text */
    .text-brush-bg {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        max-width: 1000px;
        height: auto;
        background: linear-gradient(110deg,
                rgba(10, 10, 15, 0.6) 0%,
                rgba(20, 20, 40, 0.5) 30%,
                rgba(10, 10, 15, 0.4) 60%,
                rgba(20, 20, 40, 0.5) 100%);
        backdrop-filter: blur(8px);
        border-radius: 60px;
        padding: 40px 60px;
        pointer-events: none;
        z-index: 2;
    }

    .slide-content {
        position: relative;
        z-index: 3;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        max-width: 900px;
        margin: 0 auto;
        padding: 0 40px;
    }

    .slide-inner {
        width: 100%;
        position: relative;
        z-index: 4;
    }

    .slide-eyebrow {
        display: inline-block;
        font-family: var(--font-body);
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 4px;
        color: var(--bowling-neon);
        margin-bottom: 15px;
        text-shadow: 0 0 15px rgba(176, 209, 54, 0.5);
        animation: fadeInUp 0.8s ease;
        background: rgba(0, 0, 0, 0.3);
        padding: 4px 12px;
        border-radius: 20px;
        display: inline-block;
    }

    .slide-title {
        font-family: var(--font-alphacorsa);
        font-size: clamp(2rem, 4vw, 3.5rem);
        font-weight: 400;
        color: #fff;
        line-height: 1.2;
        margin-bottom: 15px;
        text-transform: uppercase;
        animation: fadeInUp 0.8s ease 0.1s both;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
    }

    .slide-title span {
        background: linear-gradient(135deg, var(--bowling-neon), var(--bowling-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: inline-block;
        text-shadow: none;
    }

    .slide-description {
        font-family: var(--font-body);
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.95);
        line-height: 1.6;
        margin-bottom: 25px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        animation: fadeInUp 0.8s ease 0.2s both;
        text-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
        background: rgba(0, 0, 0, 0.2);
        padding: 8px 20px;
        border-radius: 30px;
        backdrop-filter: blur(4px);
    }

    .slide-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
        animation: fadeInUp 0.8s ease 0.3s both;
    }

    /* Optimized Button Styles */
    .bowling-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 0.8rem 2rem;
        font-family: var(--font-body);
        font-size: 0.9rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        text-decoration: none;
        border-radius: 50px;
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
        z-index: 5;
    }

    .bowling-btn-primary {
        background: linear-gradient(135deg, var(--bowling-neon), var(--bowling-gold));
        color: var(--bowling-dark);
        border: none;
        box-shadow: 0 0 20px rgba(176, 209, 54, 0.4);
    }

    .bowling-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 0 30px rgba(176, 209, 54, 0.7);
    }

    .bowling-btn-secondary {
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(10px);
        color: var(--bowling-gold);
        border: 2px solid var(--bowling-gold);
    }

    .bowling-btn-secondary:hover {
        background: rgba(255, 215, 0, 0.2);
        transform: translateY(-3px);
        box-shadow: 0 0 25px rgba(255, 215, 0, 0.3);
    }

    /* Carousel Navigation */
    .carousel-nav {
        position: absolute;
        bottom: 30px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 10px;
        z-index: 10;
    }

    .carousel-dot {
        width: 10px;
        height: 10px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .carousel-dot.active {
        width: 25px;
        background: var(--bowling-neon);
        border-radius: 10px;
        box-shadow: 0 0 10px var(--bowling-neon);
    }

    .carousel-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        background: rgba(10, 10, 15, 0.6);
        border: 1px solid rgba(176, 209, 54, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .carousel-arrow:hover {
        background: var(--bowling-neon);
        border-color: var(--bowling-neon);
        transform: translateY(-50%) scale(1.05);
    }

    .carousel-arrow.prev {
        left: 30px;
    }

    .carousel-arrow.next {
        right: 30px;
    }

    .carousel-arrow svg {
        width: 20px;
        height: 20px;
        stroke: #fff;
        transition: stroke 0.3s ease;
    }

    .carousel-arrow:hover svg {
        stroke: #0A0A0F;
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Section Styles */
    .bowling-section {
        padding: 80px 0;
        position: relative;
    }

    .bowling-section-dark {
        background: linear-gradient(180deg, var(--bowling-darker) 0%, var(--bowling-dark) 100%);
    }

    .bowling-section-gradient {
        background: linear-gradient(135deg, #0A0A0F 0%, #223510 50%, #0d0f0a 100%);
    }

    .bowling-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 40px;
        position: relative;
        z-index: 2;
    }

    /* Section Header */
    .section-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-subtitle {
        display: inline-block;
        font-family: var(--font-body);
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 4px;
        color: var(--bowling-neon);
        margin-bottom: 12px;
    }

    .section-title {
        font-family: var(--font-alphacorsa);
        font-size: clamp(1.8rem, 3.5vw, 2.5rem);
        font-weight: 400;
        color: #fff;
        text-transform: uppercase;
        line-height: 1.2;
    }

    .section-title span {
        background: linear-gradient(135deg, var(--bowling-neon), var(--bowling-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .neon-divider {
        width: 80px;
        height: 2px;
        background: linear-gradient(90deg, var(--bowling-neon), var(--bowling-gold), var(--bowling-purple));
        margin: 20px auto 0;
        border-radius: 2px;
    }

    /* Why Choose Grid */
    .why-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .why-card {
        background: rgba(10, 10, 15, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(176, 209, 54, 0.2);
        border-radius: 20px;
        padding: 30px 25px;
        text-align: center;
        transition: all 0.4s ease;
    }

    .why-card:hover {
        transform: translateY(-8px);
        border-color: var(--bowling-gold);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 25px rgba(255, 215, 0, 0.2);
    }

    .why-icon {
        font-size: 3rem;
        margin-bottom: 15px;
    }

    .why-card h3 {
        font-family: var(--font-alphacorsa);
        font-size: 1.4rem;
        color: var(--bowling-gold);
        margin-bottom: 12px;
    }

    .why-card p {
        font-family: var(--font-body);
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        font-size: 0.95rem;
    }

    /* Lane Features */
    .lane-features {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 40px;
        flex-wrap: wrap;
    }

    .feature-badge {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 20px;
        background: rgba(255, 215, 0, 0.1);
        border: 1px solid rgba(255, 215, 0, 0.3);
        border-radius: 50px;
    }

    .feature-badge span:first-child {
        font-size: 1.2rem;
    }

    .feature-badge span:last-child {
        font-family: var(--font-body);
        color: #fff;
        font-weight: 600;
        font-size: 0.9rem;
    }

    /* Split Layout */
    .split-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
    }

    .split-content h2 {
        font-family: var(--font-alphacorsa);
        font-size: clamp(1.8rem, 3.5vw, 2.5rem);
        color: #fff;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .split-content h2 span {
        background: linear-gradient(135deg, var(--bowling-neon), var(--bowling-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .split-content p {
        font-family: var(--font-body);
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
    }

    .features-list {
        list-style: none;
        margin: 25px 0;
    }

    .features-list li {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 0;
        font-family: var(--font-body);
        color: rgba(255, 255, 255, 0.8);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        font-size: 0.95rem;
    }

    .features-list li span:first-child {
        font-size: 1.2rem;
    }

    .split-image img {
        width: 100%;
        border-radius: 24px;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
    }

    /* Food Menu Grid */
    .food-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin: 25px 0;
    }

    .food-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 15px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .food-item:hover {
        background: rgba(176, 209, 54, 0.1);
        transform: translateX(5px);
    }

    .food-item span:first-child {
        font-size: 1.3rem;
    }

    .food-item span:last-child {
        font-family: var(--font-body);
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.95rem;
    }

    /* CTA Section */
    .bowling-cta {
        padding: 80px 0;
        background: linear-gradient(135deg, #0A0A0F 0%, #293510 100%);
        position: relative;
        overflow: hidden;
        text-align: center;
    }

    .cta-content {
        position: relative;
        z-index: 2;
        max-width: 700px;
        margin: 0 auto;
    }

    .cta-title {
        font-family: var(--font-alphacorsa);
        font-size: clamp(1.8rem, 4vw, 2.8rem);
        color: #fff;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .cta-title span {
        background: linear-gradient(135deg, var(--bowling-neon), var(--bowling-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .cta-description {
        font-family: var(--font-body);
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 30px;
        line-height: 1.6;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .why-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .split-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .split-content {
            text-align: center;
        }

        .features-list {
            text-align: left;
        }

        .food-grid {
            grid-template-columns: 1fr;
        }

        .text-brush-bg {
            width: 90%;
            padding: 30px 40px;
        }
    }

    @media (max-width: 768px) {
        .bowling-container {
            padding: 0 20px;
        }

        .bowling-section {
            padding: 60px 0;
        }

        .why-grid {
            grid-template-columns: 1fr;
        }

        .carousel-arrow {
            width: 35px;
            height: 35px;
        }

        .carousel-arrow.prev {
            left: 15px;
        }

        .carousel-arrow.next {
            right: 15px;
        }

        .slide-description {
            font-size: 0.95rem;
        }

        .slide-buttons {
            flex-direction: column;
            align-items: center;
        }

        .bowling-btn {
            width: 100%;
            max-width: 220px;
            padding: 0.7rem 1.5rem;
            font-size: 0.85rem;
        }

        .slide-title {
            font-size: clamp(1.5rem, 3.5vw, 2.5rem);
        }

        .section-title {
            font-size: 1.6rem;
        }

        .text-brush-bg {
            width: 95%;
            padding: 20px 25px;
        }
    }

    @media (max-width: 480px) {
        .carousel-dot {
            width: 8px;
            height: 8px;
        }

        .carousel-dot.active {
            width: 20px;
        }

        .slide-content {
            padding: 0 20px;
        }

        .slide-eyebrow {
            font-size: 0.75rem;
            letter-spacing: 3px;
        }

        .slide-title {
            font-size: 1.5rem;
        }

        .bowling-btn {
            max-width: 200px;
            padding: 0.6rem 1.2rem;
            font-size: 0.8rem;
        }

        .why-card {
            padding: 25px 20px;
        }

        .why-icon {
            font-size: 2.5rem;
        }

        .why-card h3 {
            font-size: 1.3rem;
        }

        .text-brush-bg {
            padding: 15px 20px;
        }
    }
</style>

<div class="bowling-page">
    <!-- Full Screen Carousel -->
    <div class="bowling-carousel">
        <div class="carousel-slides">
            <!-- Slide 1 -->
            <div class="carousel-slide active">
                <img src="https://images.pexels.com/photos/5320739/pexels-photo-5320739.jpeg?auto=compress&cs=tinysrgb&w=1600"
                    alt="Premium Bowling" class="slide-bg">
                <div class="slide-overlay"></div>
                <div class="slide-text-overlay"></div>
                <div class="slide-content">
                    <div class="text-brush-bg"></div>
                    <div class="slide-inner">
                        <span class="slide-eyebrow">✦ BOUTIQUE BOWLING LOUNGE</span>
                        <h1 class="slide-title">Luxury Strikes Here: <span>Kolkata's First</span> Boutique Bowling
                            Experience</h1>
                        <p class="slide-description">Forget the crowded arcades and sticky shoes. Welcome to Knockout,
                            an intimate 6-lane sanctuary designed for those who play with style.</p>
                        <div class="slide-buttons">
                            <a href="#book" class="bowling-btn bowling-btn-primary">🎳 BOOK A LANE</a>
                            <a href="#packages" class="bowling-btn bowling-btn-secondary">🎯 VIEW PARTY PACKAGES</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-slide">
                <img src="https://images.pexels.com/photos/2608517/pexels-photo-2608517.jpeg?auto=compress&cs=tinysrgb&w=1600"
                    alt="Corporate Events" class="slide-bg">
                <div class="slide-overlay"></div>
                <div class="slide-text-overlay"></div>
                <div class="slide-content">
                    <div class="text-brush-bg"></div>
                    <div class="slide-inner">
                        <span class="slide-eyebrow">✦ OWN THE ALLEY</span>
                        <h1 class="slide-title">Corporate & <span>Private Events</span></h1>
                        <p class="slide-description">Host tournaments for up to 40 guests with complete privacy. Perfect
                            for team building, boutique birthdays, and exclusive celebrations.</p>
                        <div class="slide-buttons">
                            <a href="#corporate" class="bowling-btn bowling-btn-primary">📅 PLAN YOUR EVENT</a>
                            <a href="#packages" class="bowling-btn bowling-btn-secondary">🎯 VIEW PACKAGES</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-slide">
                <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg?auto=compress&cs=tinysrgb&w=1600"
                    alt="Food & Beverage" class="slide-bg">
                <div class="slide-overlay"></div>
                <div class="slide-text-overlay"></div>
                <div class="slide-content">
                    <div class="text-brush-bg"></div>
                    <div class="slide-inner">
                        <span class="slide-eyebrow">✦ MORE THAN JUST BOWLING</span>
                        <h1 class="slide-title">Gourmet Dining & <span>Premium Lounge</span></h1>
                        <p class="slide-description">From truffle fries to artisanal pizzas, our chef-curated menu
                            rivals top Kolkata bistros. Pair your game with signature beverages.</p>
                        <div class="slide-buttons">
                            <a href="#menu" class="bowling-btn bowling-btn-primary">🍽️ EXPLORE MENU</a>
                            <a href="#reserve" class="bowling-btn bowling-btn-secondary">🍸 RESERVE A LANE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Navigation -->
        <div class="carousel-nav">
            <div class="carousel-dot active" data-slide="0"></div>
            <div class="carousel-dot" data-slide="1"></div>
            <div class="carousel-dot" data-slide="2"></div>
        </div>

        <div class="carousel-arrow prev">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 18l-6-6 6-6" />
            </svg>
        </div>
        <div class="carousel-arrow next">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 18l6-6-6-6" />
            </svg>
        </div>
    </div>

    <!-- Why Choose Section -->
    <section class="bowling-section bowling-section-dark">
        <div class="bowling-container">
            <div class="section-header">
                <span class="section-subtitle">✦ THE 6-LANE ADVANTAGE</span>
                <h2 class="section-title">Why Choose <span>Knockout Bowling?</span></h2>
                <div class="neon-divider"></div>
            </div>

            <div class="why-grid">
                <div class="why-card">
                    <div class="why-icon">🎳</div>
                    <h3>Intimate & Exclusive</h3>
                    <p>With only six lanes, we guarantee personal attention and a noise-controlled environment. No
                        waiting for hours—just seamless play.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon">🍸</div>
                    <h3>VIP Lane Service</h3>
                    <p>Order gourmet sliders and craft mocktails directly to your lane. Our "Butlers on the Lanes"
                        ensure you never miss a frame.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon">✨</div>
                    <h3>Tech-Driven Play</h3>
                    <p>Experience the latest lane tracking technology with interactive scoring animations and neon
                        "Cosmic Bowl" settings after 8 PM.</p>
                </div>
            </div>

            <div class="lane-features">
                <div class="feature-badge"><span>🎯</span><span>Brunswick Lanes</span></div>
                <div class="feature-badge"><span>🌈</span><span>Cosmic Bowling</span></div>
                <div class="feature-badge"><span>📊</span><span>Interactive Scoring</span></div>
                <div class="feature-badge"><span>🛋️</span><span>VIP Lounge Seating</span></div>
            </div>
        </div>
    </section>

    <!-- Corporate Events Section -->
    <section class="bowling-section bowling-section-gradient">
        <div class="bowling-container">
            <div class="split-grid">
                <div class="split-content">
                    <span class="section-subtitle" style="text-align: left; display: inline-block;">✦ EXCLUSIVE
                        BUYOUTS</span>
                    <h2>Own the Alley <span>for a Night</span></h2>
                    <p>Looking for a private venue? Our 6-lane configuration is perfect for full-venue buyouts.</p>

                    <ul class="features-list">
                        <li><span>🏢</span> Corporate Team Building — Host tournaments for up to 40 guests with complete
                            privacy.</li>
                        <li><span>🎂</span> Boutique Birthdays — A sophisticated celebration space without the chaos of
                            a mall food court.</li>
                        <li><span>🎧</span> Private DJ booth access & customizable digital scoreboards with your company
                            logo.</li>
                        <li><span>🍽️</span> Dedicated catering staff for your exclusive event.</li>
                    </ul>

                    <a href="#inquire" class="bowling-btn bowling-btn-secondary">📅 INQUIRE NOW</a>
                </div>
                <div class="split-image">
                    <img src="https://images.pexels.com/photos/2608517/pexels-photo-2608517.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Corporate Event Bowling" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Food & Beverage Section -->
    <section class="bowling-section bowling-section-dark">
        <div class="bowling-container">
            <div class="split-grid">
                <div class="split-image">
                    <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Gourmet Food" loading="lazy">
                </div>
                <div class="split-content">
                    <span class="section-subtitle" style="text-align: left; display: inline-block;">✦ MORE THAN JUST
                        BOWLING</span>
                    <h2>Food & <span>Beverage Experience</span></h2>
                    <p>Strike up an appetite with our chef-curated menu. From truffle fries to artisanal pizzas, our
                        kitchen rivals top Kolkata bistros.</p>

                    <div class="food-grid">
                        <div class="food-item"><span>🍔</span><span>Gourmet Sliders</span></div>
                        <div class="food-item"><span>🍕</span><span>Artisanal Pizzas</span></div>
                        <div class="food-item"><span>🍟</span><span>Truffle Fries</span></div>
                        <div class="food-item"><span>🥗</span><span>Signature Salads</span></div>
                        <div class="food-item"><span>🍸</span><span>Craft Mocktails</span></div>
                        <div class="food-item"><span>☕</span><span>Premium Coffee</span></div>
                    </div>

                    <a href="#menu" class="bowling-btn bowling-btn-secondary">🍽️ EXPLORE MENU</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bowling-cta">
        <div class="bowling-container">
            <div class="cta-content">
                <h2 class="cta-title">Lanes are Limited.<br><span>Reserve Your Private Experience Today.</span></h2>
                <p class="cta-description">Don't miss out on Kolkata's most exclusive bowling lounge. Book your lane now
                    for an unforgettable experience.</p>
                <div class="slide-buttons">
                    <a href="#book" class="bowling-btn bowling-btn-primary">🎳 BOOK A LANE</a>
                    <a href="#packages" class="bowling-btn bowling-btn-secondary">🎯 VIEW PARTY PACKAGES</a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Carousel Functionality
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.carousel-dot');
        const prevBtn = document.querySelector('.carousel-arrow.prev');
        const nextBtn = document.querySelector('.carousel-arrow.next');
        let currentSlide = 0;
        let slideInterval;

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            slides[index].classList.add('active');
            dots[index].classList.add('active');
            currentSlide = index;
        }

        function nextSlide() {
            let newIndex = currentSlide + 1;
            if (newIndex >= slides.length) newIndex = 0;
            showSlide(newIndex);
        }

        function prevSlide() {
            let newIndex = currentSlide - 1;
            if (newIndex < 0) newIndex = slides.length - 1;
            showSlide(newIndex);
        }

        function startAutoPlay() {
            slideInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoPlay() {
            clearInterval(slideInterval);
        }

        nextBtn.addEventListener('click', () => {
            stopAutoPlay();
            nextSlide();
            startAutoPlay();
        });

        prevBtn.addEventListener('click', () => {
            stopAutoPlay();
            prevSlide();
            startAutoPlay();
        });

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                stopAutoPlay();
                showSlide(index);
                startAutoPlay();
            });
        });

        const carousel = document.querySelector('.bowling-carousel');
        carousel.addEventListener('mouseenter', stopAutoPlay);
        carousel.addEventListener('mouseleave', startAutoPlay);

        startAutoPlay();
    });
</script>

<?php get_footer(); ?>