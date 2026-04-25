<?php
/*
Template Name: Liquid & Lounge - Premium Bar
*/
get_header();
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Alpaca&display=swap');
    /* Note: Replace with your actual AlpacaCorsi font file if available */

    :root {
        --green-primary: #afd135;
        --green-dark: #96b623ff;
        --green-glow: rgba(169, 230, 0, 0.62);
        --green-subtle: rgba(0, 230, 118, 0.08);
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

    .liquid-lounge-page {
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
        background: url('https://images.squarespace-cdn.com/content/v1/5e4ebffeccd62403a77158ca/d3c49600-73aa-43ea-85e3-ab6c4af14822/OdeonCokeExplosion.gif?format=750w') center/cover no-repeat
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
            box-shadow: 0 0 40px var(--green-glow), 0 0 80px rgba(0, 230, 118, 0.2);
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

    /* ========== BACKGROUND TRANSITION STRIPS ========== */
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

    /* ========== TAPROOM SECTION ========== */
    .ll-taproom {
        /* background: var(--bg-charcoal); */
    }

    .ll-taproom .bg-strip {
        background: url('https://images2.alphacoders.com/212/thumb-1920-212450.jpg') center/cover no-repeat;
        /* opacity: 0.08; */
        transform: rotate(180deg);
    }

    .taproom-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
        margin-top: 60px;
    }

    .taproom-visual {
        position: relative;
        border-radius: 0;
        overflow: hidden;
    }

    .taproom-visual img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
    }

    .taproom-visual:hover img {
        transform: scale(1.03);
    }

    .taproom-visual .green-border {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: var(--green-primary);
    }

    .beer-cards {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .beer-card {
        display: flex;
        align-items: center;
        gap: 24px;
        padding: 28px;
        background: var(--bg-card);
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .beer-card::before {
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

    .beer-card:hover::before {
        transform: scaleY(1);
    }

    .beer-card:hover {
        border-color: var(--green-glow);
        transform: translateX(8px);
    }

    .beer-card-icon {
        flex-shrink: 0;
        width: 60px;
        height: 60px;
        background: var(--green-subtle);
        border: 1px solid var(--green-glow);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }

    .beer-card h4 {
        font-size: 1.1rem;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .beer-card p {
        color: var(--text-muted);
        font-size: 0.9rem;
        line-height: 1.5;
    }

    .beer-card .abv {
        color: var(--green-primary);
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 1px;
        margin-top: 4px;
    }

    /* ========== SPLIT SECTION (HOOKAH) ========== */
    .ll-hookah {
        background: var(--bg-obsidian);
    }

    .ll-hookah .bg-strip {
        background: url('https://images2.alphacoders.com/212/thumb-1920-212450.jpg') center/cover no-repeat;
        opacity: 0.5;
    }

    .split-layout {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        min-height: 500px;
    }

    .split-left {
        background: var(--green-primary);
        padding: 80px 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: var(--bg-obsidian);
    }

    .split-left .section-label {
        color: rgba(0, 0, 0, 0.5);
    }

    .split-left .section-label::before {
        background: rgba(0, 0, 0, 0.3);
    }

    .split-left .section-title {
        color: var(--bg-obsidian);
    }

    .split-left .section-desc {
        color: rgba(0, 0, 0, 0.7);
    }

    .split-right {
        position: relative;
        background: url('YOUR-HOOKAH-IMAGE.jpg') center/cover no-repeat;
        min-height: 500px;
    }

    .split-right::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(0, 230, 118, 0.2), transparent);
    }

    .hookah-flavors {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 50px;
    }

    .flavor-card {
        background: var(--bg-card);
        padding: 40px 28px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.4s ease;
        position: relative;
    }

    .flavor-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 3px;
        background: var(--green-primary);
        transition: width 0.3s ease;
    }

    .flavor-card:hover::after {
        width: 100%;
    }

    .flavor-card:hover {
        border-color: var(--green-glow);
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .flavor-icon {
        width: 70px;
        height: 70px;
        margin: 0 auto 20px;
        background: var(--green-subtle);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
    }

    .flavor-card h4 {
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .flavor-card p {
        color: var(--text-muted);
        font-size: 0.85rem;
        line-height: 1.6;
    }

    /* ========== COCKTAILS SECTION ========== */
    .ll-cocktails {
        background: var(--bg-charcoal);
    }

    .ll-cocktails .bg-strip {
        background: url('https://images.squarespace-cdn.com/content/v1/5e4ebffeccd62403a77158ca/6e734426-703b-4b20-8f90-75034eaedaf6/OdeonCokeGif1.gif?format=750w') center/cover no-repeat;
        opacity: 0.5;
    }

    .cocktails-showcase {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        margin-top: 60px;
    }

    .cocktail-item {
        position: relative;
        overflow: hidden;
        group: true;
        aspect-ratio: 3/4;
        background: var(--bg-card);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .cocktail-item img,
    .cocktail-item video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .cocktail-item:hover img,
    .cocktail-item:hover video {
        transform: scale(1.1);
    }

    .cocktail-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 30px 20px 20px;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
    }

    .cocktail-overlay h4 {
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 4px;
    }

    .cocktail-overlay p {
        color: var(--green-primary);
        font-size: 0.8rem;
        font-weight: 600;
    }

    /* ========== COMBO DEALS ========== */
    .ll-combos {
        background: var(--green-primary);
        padding: 80px 20px;
    }

    .combos-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 50px;
    }

    .combo-card {
        background: var(--bg-obsidian);
        padding: 40px 30px;
        text-align: center;
        border: 2px solid transparent;
        transition: all 0.3s ease;
        position: relative;
    }

    .combo-card.featured {
        border-color: var(--green-primary);
        transform: scale(1.05);
    }

    .combo-card.featured::before {
        content: 'BEST VALUE';
        position: absolute;
        top: -1px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--green-primary);
        color: var(--bg-obsidian);
        padding: 4px 20px;
        font-size: 0.7rem;
        font-weight: 800;
        letter-spacing: 2px;
    }

    .combo-card:hover {
        border-color: var(--green-primary);
        transform: translateY(-5px);
    }

    .combo-card h4 {
        font-size: 1.2rem;
        font-weight: 800;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .combo-card .price {
        font-size: 2.5rem;
        font-weight: 900;
        color: var(--green-primary);
        margin-bottom: 20px;
    }

    .combo-card ul {
        list-style: none;
        text-align: left;
    }

    .combo-card ul li {
        padding: 8px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        color: var(--text-muted);
        font-size: 0.9rem;
    }

    .combo-card ul li::before {
        content: '✦ ';
        color: var(--green-primary);
    }

    /* ========== CTA / RESERVATION ========== */
    .ll-cta {
        background: var(--bg-obsidian);
        text-align: center;
        padding: 120px 20px;
        position: relative;
    }

    .ll-cta .bg-strip {
        background: url('https://theknockout.in/wp-content/uploads/2026/04/JW_HT_JiggerPour.gif') center/cover no-repeat;
        /* opacity: 0.1; */
    }

    .ll-cta h2 {
        font-size: clamp(2rem, 5vw, 4rem);
        font-weight: 900;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .ll-cta p {
        color: var(--text-muted);
        font-size: 1.1rem;
        margin-bottom: 40px;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
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
        box-shadow: 0 4px 20px rgba(0, 230, 118, 0.4);
        transition: all 0.3s ease;
        animation: floatBounce 3s ease-in-out infinite;
    }

    .floating-cta:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 30px rgba(0, 230, 118, 0.6);
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
        .taproom-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .split-layout {
            grid-template-columns: 1fr;
        }

        .split-left {
            padding: 60px 40px;
        }

        .cocktails-showcase {
            grid-template-columns: repeat(2, 1fr);
        }

        .combos-grid {
            grid-template-columns: 1fr;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .combo-card.featured {
            transform: scale(1);
        }
    }

    @media (max-width: 768px) {
        .ll-section {
            padding: 60px 20px;
        }

        .hookah-flavors {
            grid-template-columns: 1fr;
        }

        .cocktails-showcase {
            grid-template-columns: 1fr;
        }

        .beer-card {
            flex-direction: column;
            text-align: center;
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

<div class="liquid-lounge-page">

    <!-- ===== HERO ===== -->
    <section class="ll-hero">
        <div class="bg-strip">
            <div class="bg-strip-overlay"
                style="background: linear-gradient(180deg, rgba(10,10,10,0.8) 0%, rgba(10,10,10,0.4) 60%, var(--bg-obsidian) 100%);">
            </div>
        </div>
        <div class="hero-content fade-in-section">
            <h1>Raise Your Game.<br><span class="green">Lower Your Guard.</span></h1>
            <p class="subheadline">India's most immersive sports bar brings you a world-class cellar and an elite hookah
                lounge. From craft brews to exotic blends, the real play starts here.</p>
            <a href="#taproom" class="hero-cta">Explore The Lounge</a>
        </div>
        <div class="hero-neon-line"></div>
    </section>

    <!-- ===== TAPROOM ===== -->
    <section class="ll-section ll-taproom" id="taproom">
        <div class="bg-strip">
            <div class="bg-strip-overlay"></div>
        </div>
        <div class="container">
            <span class="section-label fade-in-section">Section 01</span>
            <h2 class="section-title fade-in-section">The Starting Lineup:<br>Beers on Tap</h2>
            <p class="section-desc fade-in-section">Whether it's a celebration glass of bubbly for a hole-in-one or a
                pitcher of lager for the match, our taps never run dry.</p>

            <div class="taproom-grid">
                <div class="taproom-visual slide-left">
                    <img src="https://theknockout.in/wp-content/uploads/2026/04/ballantine-s-12-year-old-scotch-whiskey-51q7zyvdpgqdjr9h.gif"
                        alt="Taproom Draft Beer">
                    <div class="green-border"></div>
                </div>
                <div class="beer-cards slide-right">
                    <div class="beer-card">
                        <div class="beer-card-icon">🍺</div>
                        <div>
                            <h4>The MVP Draught</h4>
                            <p>Our freshest, ice-cold pour — perfect for post-game victory toasts.</p>
                            <span class="abv">★ CHILLED TO PERFECTION</span>
                        </div>
                    </div>
                    <div class="beer-card">
                        <div class="beer-card-icon">🍻</div>
                        <div>
                            <h4>Craft League</h4>
                            <p>A rotating selection of local and premium brews for the true connoisseur.</p>
                            <span class="abv">ROTATING TAPS</span>
                        </div>
                    </div>
                    <div class="beer-card">
                        <div class="beer-card-icon">🥃</div>
                        <div>
                            <h4>Pitcher Perfection</h4>
                            <p>Giant shareable pitchers because no fan should drink alone.</p>
                            <span class="abv">GROUP FAVORITE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ===== SIGNATURE COCKTAILS ===== -->
    <section class="ll-section ll-cocktails" id="cocktails">
        <div class="bg-strip">
            <div class="bg-strip-overlay"></div>
        </div>
        <div class="container">
            <span class="section-label fade-in-section">Section 03</span>
            <h2 class="section-title fade-in-section">Signature<br>Game-Mix Drinks</h2>
            <p class="section-desc fade-in-section">Cocktails and mocktails named after sports achievements and VR
                moments.</p>

            <div class="cocktails-showcase">
                <div class="cocktail-item fade-in-section">
                    <video autoplay loop muted playsinline
                        src="https://theknockout.in/wp-content/uploads/2026/04/Premium-Whisky.mp4"></video>
                    <div class="cocktail-overlay">
                        <h4>The Grand Slam</h4>
                        <p>Gin · Botanical · Bold</p>
                    </div>
                </div>
                <div class="cocktail-item fade-in-section" style="transition-delay: 0.1s;">
                    <video autoplay loop muted playsinline
                        src="https://theknockout.in/wp-content/uploads/2026/04/Fire-Shots.mp4"></video>
                    <div class="cocktail-overlay">
                        <h4>The Powerplay</h4>
                        <p>Vodka · Caffeine Kick</p>
                    </div>
                </div>
                <div class="cocktail-item fade-in-section" style="transition-delay: 0.2s;">
                    <video autoplay loop muted playsinline
                        src="https://theknockout.in/wp-content/uploads/2026/04/Classy-Colourfull-Cocktails.mp4"></video>
                    <div class="cocktail-overlay">
                        <h4>Virtual Sunset</h4>
                        <p>Tequila · Layered Neon</p>
                    </div>
                </div>
                <div class="cocktail-item fade-in-section" style="transition-delay: 0.3s;">
                    <video autoplay loop muted playsinline
                        src="https://theknockout.in/wp-content/uploads/2026/04/BeerPouring.mp4"></video>
                    <div class="cocktail-overlay">
                        <h4>Boundary Punch</h4>
                        <p>Shareable · Fruity</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== COMBO DEALS ===== -->
    <section class="ll-section ll-combos" id="combos">
        <div class="container">
            <span class="section-label fade-in-section" style="color: rgba(0,0,0,0.5);">Section 04</span>
            <h2 class="section-title fade-in-section" style="color: var(--bg-obsidian);">The Combo Deals</h2>
            <p class="section-desc fade-in-section" style="color: rgba(0,0,0,0.6);">Bundle your experience. More game,
                more flavor, more value.</p>

            <div class="cocktails-showcase">
                <div class="cocktail-item fade-in-section">
                    <video autoplay loop muted playsinline
                        src="https://theknockout.in/wp-content/uploads/2026/04/Happy-Republic-Day-1.mp4"></video>
                    <div class="cocktail-overlay">
                        <h4>The Grand Slam</h4>
                        <p>Gin · Botanical · Bold</p>
                    </div>
                </div>
                <div class="cocktail-item fade-in-section" style="transition-delay: 0.1s;">
                    <video autoplay loop muted playsinline
                        src="https://theknockout.in/wp-content/uploads/2026/04/Happy-Republic-Day.mp4"></video>
                    <div class="cocktail-overlay">
                        <h4>The Powerplay</h4>
                        <p>Vodka · Caffeine Kick</p>
                    </div>
                </div>
                <div class="cocktail-item fade-in-section" style="transition-delay: 0.2s;">
                    <video autoplay loop muted playsinline
                        src="https://theknockout.in/wp-content/uploads/2026/04/Happy-Republic-Day-2.mp4"></video>
                    <div class="cocktail-overlay">
                        <h4>Virtual Sunset</h4>
                        <p>Tequila · Layered Neon</p>
                    </div>
                </div>
                <div class="cocktail-item fade-in-section" style="transition-delay: 0.3s;">
                    <video autoplay loop muted playsinline
                        src="https://theknockout.in/wp-content/uploads/2026/04/Happy-Republic-Day-4.mp4"></video>
                    <div class="cocktail-overlay">
                        <h4>Boundary Punch</h4>
                        <p>Shareable · Fruity</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== HOOKAH SMOKE ZONE ===== -->
    <section class="ll-section ll-hookah" id="hookah">
        <div class="bg-strip">
            <div class="bg-strip-overlay"
                style="background: linear-gradient(135deg, rgba(0,230,118,0.05), transparent);"></div>
        </div>
        <div class="container">
            <span class="section-label fade-in-section">Section 02</span>
            <h2 class="section-title fade-in-section">The Relaxation Zone:<br>Elite Hookah Experiences</h2>
            <p class="section-desc fade-in-section">Unwind in our dedicated lounge area with curated tobacco blends.
                Choose your base and let the stress fade away.</p>

            <div class="hookah-flavors">
                <div class="flavor-card fade-in-section scale-in">
                    <div class="flavor-icon">⭐</div>
                    <h4>The All-Stars</h4>
                    <p>Unique, secret blends crafted by our master mixologists.</p>
                </div>
                <div class="flavor-card fade-in-section scale-in" style="transition-delay: 0.15s;">
                    <div class="flavor-icon">🍊</div>
                    <h4>Fruity League</h4>
                    <p>Fresh and vibrant — Blueberry Spring Water, Orange Rasna & more.</p>
                </div>
                <div class="flavor-card fade-in-section scale-in" style="transition-delay: 0.3s;">
                    <div class="flavor-icon">🧊</div>
                    <h4>The Brain Freezers</h4>
                    <p>Intense, minty, and cooling after a high-intensity simulation.</p>
                </div>
            </div>

            <div style="margin-top: 40px; padding: 30px; background: var(--bg-card); border-left: 4px solid var(--green-primary);"
                class="fade-in-section">
                <h4 style="margin-bottom: 10px; text-transform: uppercase; font-size: 0.9rem;">Base Upgrades</h4>
                <p style="color: var(--text-muted); font-size: 0.9rem;">
                    <strong style="color: var(--green-primary);">Milk Base</strong> — thicker smoke &nbsp;|&nbsp;
                    <strong style="color: var(--green-primary);">Ice Base</strong> — extra chill &nbsp;|&nbsp;
                    <strong style="color: var(--green-primary);">Red Bull Base</strong> — for those still in gaming mode
                </p>
            </div>
        </div>
    </section>
    <!-- ===== CTA / RESERVATION ===== -->
    <section class="ll-section ll-cta" id="reserve">
        <div class="bg-strip">
            <div class="bg-strip-overlay"
                style="background: radial-gradient(ellipse at center, var(--green-subtle), transparent 70%);"></div>
        </div>
        <div class="container fade-in-section">
            <span class="section-label" style="color: var(--green-primary);">Ready?</span>
            <h2>Get In <span style="color: var(--green-primary);">Touch</span></h2>
            <p>Reserve your table, book a hookah session, or plan your next game night.</p>
            <div class="cta-buttons">
                <a href="#" class="btn-primary">Reserve a Table</a>
                <a href="#" class="btn-outline">View Full Menu</a>
            </div>
        </div>
    </section>

</div>

<!-- Floating CTA -->
<a href="#reserve" class="floating-cta">📞 Reserve Now</a>

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
    });
</script>

<?php get_footer(); ?>