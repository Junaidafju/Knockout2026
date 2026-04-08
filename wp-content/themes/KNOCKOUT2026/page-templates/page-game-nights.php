<?php
/**
 * Template Name: Game Nights Page
 * Description: Knockout Game Nights - Ultimate Gaming Experience
 */

get_header();
?>

<style>
    /* =========================================
   GAME NIGHTS PAGE - KNOCKOUT THEME
   ========================================= */

    :root {
        --game-neon: #B0D136;
        --game-gold: #FFD700;
        --game-purple: #9b4dff;
        --game-cyan: #00E5FF;
        --game-pink: #FF2ED1;
        --game-dark: #0A0A0F;
        --game-darker: #050508;
        --game-dim: rgba(176, 209, 54, 0.15);
        --font-alphacorsa: 'Alphacorsa Personal Use', cursive;
        --font-display: 'Bebas Neue', 'Oswald', sans-serif;
        --font-body: 'Barlow Condensed', sans-serif;
    }

    /* Hero Section */
    .game-hero {
        position: relative;
        min-height: 85vh;
        display: flex;
        align-items: center;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(https://theknockout.in/wp-content/uploads/2026/04/ChatGPT-Image-Apr-8-2026-01_33_21-PM.png);
        background-size: cover;
        background-position: center;
        overflow: hidden;
    }

    .game-hero-bg {
        position: absolute;
        inset: 0;
    }

    .game-hero-glow {
        position: absolute;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(176, 209, 54, 0.15), transparent);
        top: -200px;
        right: -200px;
        animation: heroGlow 15s ease-in-out infinite alternate;
    }

    @keyframes heroGlow {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
            opacity: 0.5;
        }

        100% {
            transform: translate(-50px, 50px) scale(1.2);
            opacity: 0.8;
        }
    }

    .game-container {
        position: relative;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 40px;
        z-index: 2;
    }

    .game-hero-content {
        text-align: center;
        max-width: 900px;
        margin: 0 auto;
    }

    .game-eyebrow {
        display: inline-block;
        font-family: var(--font-body);
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 4px;
        color: var(--game-neon);
        margin-bottom: 20px;
        text-shadow: 0 0 10px rgba(176, 209, 54, 0.5);
        background: rgba(0, 0, 0, 0.3);
        padding: 5px 15px;
        border-radius: 30px;
    }

    .game-hero h1 {
        font-family: var(--font-alphacorsa);
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 400;
        color: #fff;
        line-height: 1.2;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .game-hero h1 span {
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .game-hero-desc {
        font-family: var(--font-body);
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.8;
        margin-bottom: 30px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .game-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .game-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 0.9rem 2.2rem;
        font-family: var(--font-body);
        font-size: 0.9rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        text-decoration: none;
        border-radius: 50px;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .game-btn-primary {
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        color: var(--game-dark);
        border: none;
        box-shadow: 0 0 20px rgba(176, 209, 54, 0.4);
    }

    .game-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 0 30px rgba(176, 209, 54, 0.7);
    }

    .game-btn-secondary {
        background: transparent;
        color: var(--game-gold);
        border: 2px solid var(--game-gold);
    }

    .game-btn-secondary:hover {
        background: rgba(255, 215, 0, 0.1);
        transform: translateY(-3px);
    }

    /* Section Common */
    .game-section {
        padding: 80px 0;
        position: relative;
    }

    .game-section-dark {
        background: linear-gradient(180deg, var(--game-darker) 0%, var(--game-dark) 100%);
    }

    .game-section-gradient {
        background: linear-gradient(135deg, #0A0A0F 0%, #293510 50%, #0e0f0a 100%);
    }

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
        color: var(--game-neon);
        margin-bottom: 12px;
    }

    .section-title {
        font-family: var(--font-alphacorsa);
        font-size: clamp(1.8rem, 3.5vw, 2.8rem);
        font-weight: 400;
        color: #fff;
        text-transform: uppercase;
        line-height: 1.2;
    }

    .section-title span {
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .neon-divider {
        width: 80px;
        height: 2px;
        background: linear-gradient(90deg, var(--game-neon), var(--game-gold), var(--game-purple));
        margin: 20px auto 0;
        border-radius: 2px;
    }

    /* Experience Section Text */
    .experience-text {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .experience-text p {
        font-family: var(--font-body);
        font-size: 1.05rem;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.8;
        margin-bottom: 20px;
    }

    /* Blueprint Grid (Image + Title + Description) */
    .blueprint-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .blueprint-card {
        background: rgba(10, 10, 15, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(176, 209, 54, 0.2);
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.4s ease;
    }

    .blueprint-card:hover {
        transform: translateY(-8px);
        border-color: var(--game-gold);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 25px rgba(255, 215, 0, 0.2);
    }

    .blueprint-image {
        height: 200px;
        overflow: hidden;
    }

    .blueprint-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .blueprint-card:hover .blueprint-image img {
        transform: scale(1.08);
    }

    .blueprint-content {
        padding: 25px;
        text-align: center;
    }

    .blueprint-content h3 {
        font-family: var(--font-alphacorsa);
        font-size: 1.5rem;
        color: var(--game-gold);
        margin-bottom: 12px;
    }

    .blueprint-content p {
        font-family: var(--font-body);
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        font-size: 0.95rem;
    }

    /* Schedule Grid */
    .schedule-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
    }

    .schedule-card {
        background: rgba(10, 10, 15, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(176, 209, 54, 0.2);
        border-radius: 20px;
        padding: 30px 20px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .schedule-card:hover {
        transform: translateY(-5px);
        border-color: var(--game-neon);
    }

    .schedule-day {
        font-family: var(--font-alphacorsa);
        font-size: 1.8rem;
        color: var(--game-neon);
        margin-bottom: 15px;
    }

    .schedule-title {
        font-family: var(--font-body);
        font-size: 1.2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
    }

    .schedule-desc {
        font-family: var(--font-body);
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 10px;
    }

    .schedule-badge {
        display: inline-block;
        background: rgba(176, 209, 54, 0.15);
        border: 1px solid rgba(176, 209, 54, 0.3);
        border-radius: 20px;
        padding: 5px 12px;
        font-size: 0.75rem;
        color: var(--game-neon);
        margin-top: 10px;
    }

    .pro-tip {
        text-align: center;
        margin-top: 30px;
        padding: 15px;
        background: rgba(176, 209, 54, 0.1);
        border-radius: 50px;
        border-left: 3px solid var(--game-neon);
    }

    .pro-tip p {
        font-family: var(--font-body);
        color: rgba(255, 255, 255, 0.9);
        margin: 0;
    }

    /* Highlights Gallery */
    .highlights-gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .gallery-item {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        cursor: pointer;
        aspect-ratio: 1;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, transparent 100%);
        padding: 20px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        transform: translateY(0);
    }

    .gallery-overlay p {
        font-family: var(--font-body);
        color: var(--game-neon);
        font-weight: 700;
        margin: 0;
        font-size: 0.9rem;
    }

    /* Features List */
    .features-list {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-top: 40px;
    }

    .feature-item {
        text-align: center;
        padding: 20px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 16px;
        transition: all 0.3s ease;
    }

    .feature-item:hover {
        background: rgba(176, 209, 54, 0.1);
        transform: translateY(-5px);
    }

    .feature-icon {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }

    .feature-item h4 {
        font-family: var(--font-alphacorsa);
        font-size: 1.2rem;
        color: var(--game-gold);
        margin-bottom: 5px;
    }

    .feature-item p {
        font-family: var(--font-body);
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.7);
    }

    /* Stats Row */
    .stats-row {
        display: flex;
        justify-content: center;
        gap: 50px;
        margin: 40px 0;
        flex-wrap: wrap;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        display: block;
        font-family: var(--font-alphacorsa);
        font-size: 2.5rem;
        color: var(--game-gold);
        text-shadow: 0 0 15px rgba(255, 215, 0, 0.3);
    }

    .stat-label {
        font-family: var(--font-body);
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.7);
        text-transform: uppercase;
    }

    /* Testimonials */
    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .testimonial-card {
        background: rgba(10, 10, 15, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(176, 209, 54, 0.2);
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        border-color: var(--game-gold);
    }

    .testimonial-avatar {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        font-size: 2rem;
    }

    .testimonial-text {
        font-family: var(--font-body);
        font-size: 0.95rem;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.6;
        margin-bottom: 15px;
        font-style: italic;
    }

    .testimonial-author {
        font-family: var(--font-body);
        font-weight: 700;
        color: var(--game-neon);
    }

    .testimonial-title {
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.6);
    }

    /* FAQ Section */
    .faq-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .faq-item {
        background: rgba(10, 10, 15, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(176, 209, 54, 0.2);
        border-radius: 16px;
        padding: 20px 25px;
        transition: all 0.3s ease;
    }

    .faq-item:hover {
        border-color: var(--game-neon);
    }

    .faq-question {
        font-family: var(--font-alphacorsa);
        font-size: 1.1rem;
        color: var(--game-neon);
        margin-bottom: 10px;
        cursor: pointer;
    }

    .faq-answer {
        font-family: var(--font-body);
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
    }

    /* CTA Section */
    .game-cta {
        padding: 80px 0;
        background: linear-gradient(135deg, #0A0A0F 0%, #273511 110%);
        text-align: center;
        position: relative;
    }

    .cta-content {
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
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .cta-description {
        font-family: var(--font-body);
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 30px;
    }

    .trust-badges {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 30px;
        flex-wrap: wrap;
    }

    .trust-badge {
        font-family: var(--font-body);
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.7);
    }

    /* Responsive */
    @media (max-width: 1024px) {

        .blueprint-grid,
        .schedule-grid,
        .testimonials-grid,
        .highlights-gallery {
            grid-template-columns: repeat(2, 1fr);
        }

        .features-list {
            grid-template-columns: repeat(2, 1fr);
        }

        .faq-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .game-container {
            padding: 0 20px;
        }

        .game-section {
            padding: 60px 0;
        }

        .blueprint-grid,
        .schedule-grid,
        .testimonials-grid,
        .highlights-gallery {
            grid-template-columns: 1fr;
        }

        .features-list {
            grid-template-columns: 1fr;
        }

        .stats-row {
            gap: 30px;
        }

        .stat-number {
            font-size: 2rem;
        }

        .game-buttons {
            flex-direction: column;
            align-items: center;
        }

        .game-btn {
            width: 100%;
            max-width: 250px;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .section-title {
            font-size: 1.5rem;
        }

        .blueprint-content h3 {
            font-size: 1.3rem;
        }

        .schedule-day {
            font-size: 1.5rem;
        }
    }
</style>

<div class="game-nights-page">
    <!-- Hero Section -->
    <section class="game-hero">
        <div class="game-hero-bg">
            <div class="game-hero-glow"></div>
        </div>
        <div class="game-container">
            <div class="game-hero-content">
                <span class="game-eyebrow">✦ GAME NIGHTS AT KNOCKOUT</span>
                <h1>What is Game Night at <span>The Knockout?</span></h1>
                <p class="game-hero-desc">India's First All-in-One Sports Bar & Gaming Arena — where gaming meets
                    nightlife, competition meets cocktails, and every Thursday transforms into an unforgettable
                    experience.</p>
                <div class="game-buttons">
                    <a href="#reserve" class="game-btn game-btn-primary">🎮 RESERVE YOUR SPOT</a>
                    <a href="tel:+919831040034" class="game-btn game-btn-secondary">📞 CALL FOR INQUIRY</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="game-section game-section-dark">
        <div class="game-container">
            <div class="section-header">
                <span class="section-subtitle">✦ THE EXPERIENCE</span>
                <h2 class="section-title">More Than Just a <span>Game Night</span></h2>
                <div class="neon-divider"></div>
            </div>
            <div class="experience-text">
                <p>Imagine this — neon lights pulsing to the beat, giant 4K screens displaying live leaderboards, the
                    crash of bowling pins mixed with cheers of victory, and craft cocktails flowing. That's Game Night
                    at Knockout. We've transformed the traditional sports bar into an immersive playground where every
                    corner offers a new thrill.</p>
                <p>Unlike crowded arcades or dull pubs, Knockout offers a curated experience. Whether you're sinking a
                    strike on our premium 6-lane bowling alley, dominating the leaderboard on virtual golf, or
                    challenging friends to laser tag — every game counts toward your night's glory. Plus, with our
                    exclusive Game Night leaderboard, the winning team takes home bragging rights and epic prizes.</p>
            </div>
        </div>
    </section>

    <!-- Blueprint Section (Image + Title + Description) -->
    <section class="game-section game-section-gradient">
        <div class="game-container">
            <div class="section-header">
                <span class="section-subtitle">✦ YOUR GAME NIGHT</span>
                <h2 class="section-title">Game Night <span>Blueprint</span></h2>
                <div class="neon-divider"></div>
            </div>
            <div class="blueprint-grid">
                <!-- Card 1 -->
                <div class="blueprint-card">
                    <div class="blueprint-image">
                        <img src="https://theknockout.in/wp-content/uploads/2026/04/ChatGPT-Image-Apr-8-2026-01_33_21-PM.png"
                            alt="Bowling Showdown">
                    </div>
                    <div class="blueprint-content">
                        <h3>Bowling Showdown</h3>
                        <p>6 premium lanes with cosmic lighting and automated scoring. Perfect for friendly rivalries
                            and strike celebrations.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="blueprint-card">
                    <div class="blueprint-image">
                        <img src="https://images.pexels.com/photos/275033/pexels-photo-275033.jpeg?auto=compress&cs=tinysrgb&w=600"
                            alt="Gaming Arena">
                    </div>
                    <div class="blueprint-content">
                        <h3>Gaming Arena</h3>
                        <p>20+ gaming stations featuring FIFA, racing simulators, VR experiences, and arcade classics
                            for every type of gamer.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="blueprint-card">
                    <div class="blueprint-image">
                        <img src="https://knockout-2026.test/wp-content/uploads/2026/04/ChatGPT-Image-Apr-8-2026-03_22_48-PM.png"
                            alt="Live Sports Screening">
                    </div>
                    <div class="blueprint-content">
                        <h3>Live Sports Screening</h3>
                        <p>Catch the biggest matches on our massive 4K screens with surround sound and dedicated fan
                            zones for ultimate stadium feel.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="blueprint-card">
                    <div class="blueprint-image">
                        <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg?auto=compress&cs=tinysrgb&w=600"
                            alt="Mix & Mingle Bar">
                    </div>
                    <div class="blueprint-content">
                        <h3>Mix & Mingle Bar</h3>
                        <p>Signature Game Night cocktails — The "Power-Up Punch" and "Victory Lane" — crafted by our
                            expert flairtenders.</p>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="blueprint-card">
                    <div class="blueprint-image">
                        <img src="https://images.pexels.com/photos/2608517/pexels-photo-2608517.jpeg?auto=compress&cs=tinysrgb&w=600"
                            alt="Leaderboard Challenge">
                    </div>
                    <div class="blueprint-content">
                        <h3>Leaderboard Challenge</h3>
                        <p>Every game earns points. Top teams each night win exclusive Knockout merchandise and bottle
                            service.</p>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="blueprint-card">
                    <div class="blueprint-image">
                        <img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=600"
                            alt="Live DJ & Entertainment">
                    </div>
                    <div class="blueprint-content">
                        <h3>Live DJ & Entertainment</h3>
                        <p>Guest DJs spinning the hottest tracks, interactive games between matches, and photo ops with
                            neon props.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section class="game-section game-section-dark">
        <div class="game-container">
            <div class="section-header">
                <span class="section-subtitle">✦ WHEN THE GAMES BEGIN</span>
                <h2 class="section-title">Game Night <span>Schedule</span></h2>
                <div class="neon-divider"></div>
            </div>
            <div class="schedule-grid">
                <div class="schedule-card">
                    <div class="schedule-day">Tuesday</div>
                    <div class="schedule-title">Corporate Clash</div>
                    <div class="schedule-desc">Team building packages, private lanes, company leaderboard</div>
                    <div class="schedule-badge">Best for: Office teams (6-10 PM)</div>
                </div>
                <div class="schedule-card">
                    <div class="schedule-day">Wednesday</div>
                    <div class="schedule-title">Date Night Duos</div>
                    <div class="schedule-desc">2-player packages, couples bowling, romantic booth seating</div>
                    <div class="schedule-badge">Best for: Couples & Dates</div>
                </div>
                <div class="schedule-card">
                    <div class="schedule-day">Thursday</div>
                    <div class="schedule-title">Ultimate Game Night</div>
                    <div class="schedule-desc">Full experience, DJ night, prizes, extended hours</div>
                    <div class="schedule-badge">Best for: Friend groups (8 PM - 12 AM)</div>
                </div>
                <div class="schedule-card">
                    <div class="schedule-day">Friday</div>
                    <div class="schedule-title">TGIF Knockout</div>
                    <div class="schedule-desc">Pre-weekend party, happy hour deals, live music</div>
                    <div class="schedule-badge">Best for: Everyone</div>
                </div>
            </div>
            <div class="pro-tip">
                <p>✨ <strong>Pro Tip:</strong> Thursdays are our signature Ultimate Game Night — book 48 hours in
                    advance for priority lane access.</p>
            </div>
        </div>
    </section>

    <!-- Highlights Gallery Section -->
    <section class="game-section game-section-gradient">
        <div class="game-container">
            <div class="section-header">
                <span class="section-subtitle">✦ CAPTURE THE MOMENT</span>
                <h2 class="section-title">Game Night <span>Highlights</span></h2>
                <div class="neon-divider"></div>
            </div>
            <div class="highlights-gallery">
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/5320739/pexels-photo-5320739.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Cosmic Bowling">
                    <div class="gallery-overlay">
                        <p>🎳 Cosmic Bowling Experience — 6 premium lanes with neon glow</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/275033/pexels-photo-275033.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="VR Gaming">
                    <div class="gallery-overlay">
                        <p>🕶️ VR Gaming Zone — Immersive virtual reality experiences</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://knockout-2026.test/wp-content/uploads/2026/04/ChatGPT-Image-Apr-8-2026-03_22_48-PM.png"
                        alt="Live Screening">
                    <div class="gallery-overlay">
                        <p>📺 Live Match Screening — Stadium atmosphere for every game</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Craft Cocktails">
                    <div class="gallery-overlay">
                        <p>🍸 Craft Cocktail Bar — Game-themed signature drinks</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/2608517/pexels-photo-2608517.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Winner's Ceremony">
                    <div class="gallery-overlay">
                        <p>🏆 Winner's Ceremony — Leaderboard champions every night</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Live Entertainment">
                    <div class="gallery-overlay">
                        <p>🎧 Live Entertainment — High-energy music & vibes</p>
                    </div>
                </div>
            </div>

            <!-- Key Features List -->
            <div class="features-list">
                <div class="feature-item">
                    <div class="feature-icon">🎳</div>
                    <h4>6 Premium Lanes</h4>
                    <p>Boutique bowling experience</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🎮</div>
                    <h4>15+ Gaming Zones</h4>
                    <p>VR to arcade classics</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📺</div>
                    <h4>4K Live Sports</h4>
                    <p>Never miss the big game</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🍸</div>
                    <h4>Premium Bar</h4>
                    <p>Signature cocktails</p>
                </div>
            </div>

            <!-- Stats Row -->
            <!-- <div class="stats-row">
                <div class="stat-item">
                    <span class="stat-number">6</span>
                    <span class="stat-label">Premium Bowling Lanes</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">20+</span>
                    <span class="stat-label">Gaming Stations</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">4K</span>
                    <span class="stat-label">Live Sports Screening</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Happy Gamers Weekly</span>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="game-section game-section-dark">
        <div class="game-container">
            <div class="section-header">
                <span class="section-subtitle">✦ SOCIAL PROOF</span>
                <h2 class="section-title">What Gamers Are <span>Saying</span></h2>
                <div class="neon-divider"></div>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-avatar">🎮</div>
                    <p class="testimonial-text">"Best Thursday night plan in Kolkata! The bowling lanes are premium, the
                        cocktails are amazing, and the energy is unmatched. We're coming back every week!"</p>
                    <p class="testimonial-author">Rahul S.</p>
                    <p class="testimonial-title">Corporate Professional</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-avatar">👔</div>
                    <p class="testimonial-text">"Took my team for a corporate game night. Everyone loved it — from the
                        VR games to the private bowling lane. Best team outing we've ever had."</p>
                    <p class="testimonial-author">Priya M.</p>
                    <p class="testimonial-title">HR Manager</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-avatar">🏆</div>
                    <p class="testimonial-text">"Finally found a place that combines sports, gaming, and nightlife
                        perfectly. The live DJ and leaderboard competition made our night unforgettable."</p>
                    <p class="testimonial-author">Arjun K.</p>
                    <p class="testimonial-title">Entrepreneur</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="game-section game-section-gradient">
        <div class="game-container">
            <div class="section-header">
                <span class="section-subtitle">✦ GOT QUESTIONS?</span>
                <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
                <div class="neon-divider"></div>
            </div>
            <div class="faq-grid">
                <div class="faq-item">
                    <div class="faq-question">Do I need to book in advance?</div>
                    <div class="faq-answer">Yes, especially for Thursdays and weekends. Book 48 hours ahead to secure
                        your spot.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can I host a private game night?</div>
                    <div class="faq-answer">Absolutely! Contact our events team for corporate packages and private
                        buyouts.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What activities are included?</div>
                    <div class="faq-answer">Bowling, VR games, arcade gaming, live sports screening, and more.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Is there an age restriction?</div>
                    <div class="faq-answer">Game nights are 18+. Valid ID required for alcohol service.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can I walk in without booking?</div>
                    <div class="faq-answer">Walk-ins welcome based on availability, but booking is highly recommended.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you offer vegetarian options?</div>
                    <div class="faq-answer">Yes! Our menu includes extensive vegetarian and vegan options.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="game-cta">
        <div class="game-container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to <span>Level Up</span> Your Evenings?</h2>
                <p class="cta-description">Don't let another Thursday pass you by. Gather your squad, put on your gaming
                    shoes, and head to Knockout — where every night is game night.</p>
                <div class="game-buttons">
                    <a href="#reserve" class="game-btn game-btn-primary">🎮 RESERVE YOUR SPOT</a>
                    <a href="tel:+919831040034" class="game-btn game-btn-secondary">📞 +91 98310 40034</a>
                </div>
                <div class="trust-badges">
                    <span class="trust-badge">⭐ Rated 5.0/5 by 500+ happy gamers</span>
                    <span class="trust-badge">🏆 Best Sports Bar Kolkata 2024</span>
                    <span class="trust-badge">👥 10,000+ Happy Guests Served</span>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>