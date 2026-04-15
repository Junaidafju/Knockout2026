<?php
/**
 * Template Name: The Knockout – Premium Landing
 * Description: Ultra-premium cinematic landing page with AlphaCorsa typography - Game Nights Theme
 * Version: 5.1 – Game Nights Edition
 */
get_header();
?>

<style>
    /* ============================================================
   GAME NIGHTS THEME - COLORS & FONTS
   ============================================================ */
    @font-face {
        font-family: 'Alphacorsa Personal Use';
        src: url('https://db.onlinewebfonts.com/t/7d95ff0e0cfdbc6d1e08868e082cbceb.woff2') format('woff2'),
            url('https://db.onlinewebfonts.com/t/7d95ff0e0cfdbc6d1e08868e082cbceb.woff') format('woff');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@400;500;600;700&family=Barlow+Condensed:wght@300;400;500;600&display=swap');

    :root {
        /* Game Nights Colors */
        --game-neon: #B0D136;
        --game-gold: #FFD700;
        --game-purple: #9b4dff;
        --game-cyan: #00E5FF;
        --game-pink: #FF2ED1;
        --game-dark: #0A0A0F;
        --game-darker: #050508;
        --game-dim: rgba(176, 209, 54, 0.15);
        --game-glow: 0 0 20px rgba(176, 209, 54, 0.4);
        --game-glow-strong: 0 0 40px rgba(176, 209, 54, 0.6);

        /* Text Colors */
        --text-white: #FFFFFF;
        --text-gray: rgba(255, 255, 255, 0.85);
        --text-muted: rgba(255, 255, 255, 0.6);

        /* Typography - Game Nights Style */
        --font-display: 'Alphacorsa Personal Use', 'Bebas Neue', 'Oswald', sans-serif;
        --font-body: 'Barlow Condensed', sans-serif;
        --font-ui: 'Barlow Condensed', sans-serif;

        /* Spacing - Preserved */
        --space-xs: 0.5rem;
        --space-sm: 1rem;
        --space-md: 2rem;
        --space-lg: 4rem;
        --space-xl: 6rem;
        --space-2xl: 8rem;

        /* Transitions - Preserved */
        --ease-smooth: cubic-bezier(0.22, 1, 0.36, 1);
        --ease-spring: cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .knockout-cinematic *,
    .knockout-cinematic *::before,
    .knockout-cinematic *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .knockout-cinematic {
        background: var(--game-dark);
        color: var(--text-white);
        font-family: var(--font-body);
        line-height: 1.6;
        overflow-x: hidden;
    }

    /* Gradient text utility */
    .kc-gradient-text {
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* ============================================================
   CINEMATIC HERO SECTION – STADIUM BACKGROUND
   ============================================================ */
    .kc-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .kc-hero__bg {
        position: absolute;
        inset: 0;
        background: url('https://us1.discourse-cdn.com/woot/original/4X/a/a/3/aa372f56d2a42b40586eafb823129c1687c82d0d.gif') center/cover no-repeat;
        filter: brightness(0.8) contrast(1.1) saturate(1.2);
        animation: slowZoom 20s ease-in-out infinite alternate;
    }

    @keyframes slowZoom {
        from {
            transform: scale(1);
        }

        to {
            transform: scale(1.1);
        }
    }

    .kc-hero__overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse at center, transparent 0%, rgba(10, 10, 15, 0.5) 100%);
    }

    .kc-hero__content {
        position: relative;
        z-index: 10;
        text-align: center;
        padding: 0 var(--space-md);
        margin-top: 15vh;
    }

    .kc-hero__eyebrow {
        font-family: var(--font-ui);
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.4em;
        text-transform: uppercase;
        color: var(--game-neon);
        margin-bottom: var(--space-md);
        display: inline-block;
        padding: var(--space-xs) var(--space-md);
        border: 1px solid rgba(176, 209, 54, 0.3);
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        text-shadow: 0 0 10px rgba(176, 209, 54, 0.5);
    }

    .kc-hero__title {
        font-family: var(--font-display);
        font-size: clamp(3rem, 10vw, 8rem);
        font-weight: 400;
        line-height: 0.95;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        color: var(--text-white);
        text-shadow: 0 4px 30px rgba(0, 0, 0, 0.8);
        margin-bottom: var(--space-sm);
    }

    .kc-hero__title span {
        display: block;
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: 0 0 40px rgba(176, 209, 54, 0.3);
    }

    .kc-hero__subtitle {
        font-family: var(--font-body);
        font-size: clamp(1rem, 2vw, 1.25rem);
        font-weight: 300;
        color: var(--text-gray);
        max-width: 600px;
        margin: 0 auto var(--space-lg);
        line-height: 1.8;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
    }

    .kc-hero__cta {
        display: flex;
        gap: var(--space-md);
        justify-content: center;
        flex-wrap: wrap;
    }

    .kc-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 1rem 2.5rem;
        font-family: var(--font-ui);
        font-size: 0.875rem;
        font-weight: 700;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        border: 2px solid var(--game-gold);
        color: var(--game-gold);
        background: transparent;
        backdrop-filter: blur(10px);
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border-radius: 50px;
        text-decoration: none;
    }

    .kc-btn::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        transform: translateY(100%);
        transition: transform 0.3s ease;
        z-index: 0;
        border-radius: 50px;
    }

    .kc-btn span {
        position: relative;
        z-index: 1;
    }

    .kc-btn:hover::before {
        transform: translateY(0);
    }

    .kc-btn:hover {
        color: var(--game-dark);
        box-shadow: var(--game-glow);
        transform: translateY(-3px);
    }

    .kc-btn--solid {
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        color: var(--game-dark);
        border: none;
        box-shadow: var(--game-glow);
    }

    .kc-btn--solid::before {
        background: var(--game-dark);
    }

    .kc-btn--solid:hover {
        color: var(--game-neon);
        box-shadow: var(--game-glow-strong);
    }

    .kc-hero__scroll {
        position: absolute;
        bottom: var(--space-lg);
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: var(--space-xs);
        opacity: 0.7;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateX(-50%) translateY(0);
        }

        40% {
            transform: translateX(-50%) translateY(-10px);
        }

        60% {
            transform: translateX(-50%) translateY(-5px);
        }
    }

    .kc-hero__scroll-line {
        width: 1px;
        height: 60px;
        background: linear-gradient(180deg, var(--game-neon), transparent);
    }

    .kc-hero__scroll span {
        font-family: var(--font-ui);
        font-size: 0.625rem;
        letter-spacing: 0.3em;
        text-transform: uppercase;
        color: var(--text-muted);
    }

    /* ============================================================
   HORIZONTAL BANNER CAROUSEL – RIGHT TO LEFT
   ============================================================ */
    .kc-carousel {
        position: relative;
        padding: var(--space-md) 0;
        background: var(--game-darker);
        border-top: 1px solid var(--game-dim);
        border-bottom: 1px solid var(--game-dim);
        overflow: hidden;
    }

    .kc-carousel__track {
        display: flex;
        gap: var(--space-md);
        animation: scrollRightToLeft 30s linear infinite;
        width: max-content;
    }

    .kc-carousel:hover .kc-carousel__track {
        animation-play-state: paused;
    }

    @keyframes scrollRightToLeft {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .kc-carousel__item {
        flex-shrink: 0;
        width: 400px;
        height: 250px;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        border: 1px solid var(--game-dim);
        background: rgba(10, 10, 15, 0.6);
        backdrop-filter: blur(10px);
        transition: all 0.4s ease;
    }

    .kc-carousel__item:hover {
        transform: translateY(-8px);
        border-color: var(--game-gold);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 25px rgba(255, 215, 0, 0.2);
    }

    .kc-carousel__item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.8) saturate(1.1);
        transition: transform 0.5s ease;
    }

    .kc-carousel__item:hover img {
        transform: scale(1.08);
    }

    .kc-carousel__overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, transparent 50%, rgba(0, 0, 0, 0.8) 100%);
        display: flex;
        align-items: flex-end;
        padding: var(--space-sm);
    }

    .kc-carousel__text {
        font-family: var(--font-ui);
        font-size: 0.875rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: var(--game-neon);
        text-shadow: 0 0 10px rgba(176, 209, 54, 0.5);
    }

    /* ============================================================
   BANNER LEFT + CONTENT RIGHT SECTION
   ============================================================ */
    .kc-split-banner {
        position: relative;
        min-height: 100vh;
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        overflow: hidden;
    }

    .kc-split-banner__media {
        position: relative;
        height: 100%;
        min-height: 100vh;
        overflow: hidden;
        clip-path: polygon(0 0, 90% 0, 100% 100%, 0 100%);
    }

    .kc-split-banner__media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.6) saturate(1.2);
        animation: panLeft 20s ease-in-out infinite alternate;
    }

    @keyframes panLeft {
        from {
            transform: scale(1.1) translateX(0);
        }

        to {
            transform: scale(1.1) translateX(-5%);
        }
    }

    .kc-split-banner__overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, transparent 60%, rgba(10, 10, 15, 0.8) 100%);
    }

    .kc-split-banner__content {
        padding: var(--space-xl);
        position: relative;
        z-index: 10;
    }

    .kc-split-banner__eyebrow {
        font-family: var(--font-ui);
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.3em;
        text-transform: uppercase;
        color: var(--game-neon);
        margin-bottom: var(--space-sm);
        display: flex;
        align-items: center;
        gap: var(--space-sm);
    }

    .kc-split-banner__eyebrow::before {
        content: '';
        width: 40px;
        height: 2px;
        background: linear-gradient(90deg, var(--game-neon), var(--game-gold));
    }

    .kc-split-banner__title {
        font-family: var(--font-display);
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 400;
        line-height: 1;
        text-transform: uppercase;
        margin-bottom: var(--space-md);
        color: var(--text-white);
    }

    .kc-split-banner__title em {
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-style: normal;
    }

    .kc-split-banner__text {
        font-family: var(--font-body);
        font-size: 1.125rem;
        color: var(--text-gray);
        line-height: 1.8;
        margin-bottom: var(--space-lg);
        max-width: 500px;
    }

    .kc-features {
        display: flex;
        flex-direction: column;
        gap: var(--space-sm);
        margin-bottom: var(--space-lg);
    }

    .kc-feature {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
        font-family: var(--font-ui);
        font-size: 0.9375rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: var(--text-white);
    }

    .kc-feature::before {
        content: '→';
        color: var(--game-neon);
        font-weight: 700;
        text-shadow: 0 0 10px rgba(176, 209, 54, 0.5);
    }

    /* ============================================================
   CONTENT LEFT + IMAGE RIGHT SECTION
   ============================================================ */
    .kc-split-content {
        position: relative;
        min-height: 100vh;
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        background: var(--game-dark);
    }

    .kc-split-content__content {
        padding: var(--space-xl);
        order: 1;
    }

    .kc-split-content__media {
        position: relative;
        height: 100%;
        min-height: 100vh;
        overflow: hidden;
        order: 2;
        clip-path: polygon(10% 0, 100% 0, 100% 100%, 0 100%);
    }

    .kc-split-content__media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.7) saturate(1.1);
        animation: panRight 20s ease-in-out infinite alternate;
    }

    @keyframes panRight {
        from {
            transform: scale(1.1) translateX(0);
        }

        to {
            transform: scale(1.1) translateX(5%);
        }
    }

    .kc-split-content__overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(270deg, transparent 60%, rgba(10, 10, 15, 0.8) 100%);
    }

    .kc-stats {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: var(--space-md);
        margin: var(--space-lg) 0;
    }

    .kc-stat {
        padding: var(--space-md);
        border: 1px solid var(--game-dim);
        background: rgba(176, 209, 54, 0.05);
        backdrop-filter: blur(10px);
        text-align: center;
        border-radius: 16px;
        transition: all 0.3s ease;
    }

    .kc-stat:hover {
        border-color: var(--game-neon);
        transform: translateY(-3px);
    }

    .kc-stat__value {
        font-family: var(--font-display);
        font-size: 2.5rem;
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        line-height: 1;
        margin-bottom: var(--space-xs);
        text-shadow: 0 0 15px rgba(255, 215, 0, 0.3);
    }

    .kc-stat__label {
        font-family: var(--font-ui);
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--text-muted);
    }

    /* ============================================================
   LINKEDIN-STYLE LANDSCAPE BANNER
   ============================================================ */
    .kc-landscape {
        position: relative;
        height: 500px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .kc-landscape__bg {
        position: absolute;
        inset: 0;
        background:
            linear-gradient(180deg, rgba(10, 10, 15, 0.6) 0%, rgba(10, 10, 15, 0.3) 50%, rgba(10, 10, 15, 0.8) 100%),
            url('https://i.makeagif.com/media/1-17-2017/dzYV1J.gif') center/cover no-repeat;
        background-attachment: fixed;
        filter: brightness(0.6) saturate(1.2);
    }

    .kc-landscape__content {
        position: relative;
        z-index: 10;
        text-align: center;
        padding: var(--space-md);
    }

    .kc-landscape__title {
        font-family: var(--font-display);
        font-size: clamp(2rem, 5vw, 4rem);
        font-weight: 400;
        text-transform: uppercase;
        color: var(--text-white);
        margin-bottom: var(--space-sm);
    }

    .kc-landscape__title span {
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .kc-landscape__text {
        font-family: var(--font-body);
        font-size: 1.125rem;
        color: var(--text-gray);
        max-width: 700px;
        margin: 0 auto;
    }

    /* ============================================================
   WHY CHOOSE SECTION
   ============================================================ */
    .kc-why {
        position: relative;
        padding: var(--space-2xl) 0;
        background: linear-gradient(135deg, var(--game-dark) 0%, rgba(176, 209, 54, 0.03) 50%, var(--game-dark) 100%);
    }

    .kc-why::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--game-dim), transparent);
    }

    .kc-section-header {
        text-align: center;
        margin-bottom: var(--space-xl);
        position: relative;
    }

    .kc-section-header__eyebrow {
        font-family: var(--font-ui);
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.4em;
        text-transform: uppercase;
        color: var(--game-neon);
        margin-bottom: var(--space-sm);
        display: inline-block;
    }

    .kc-section-header__title {
        font-family: var(--font-display);
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 400;
        text-transform: uppercase;
        color: var(--text-white);
        margin-bottom: var(--space-sm);
    }

    .kc-section-header__title em {
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-style: normal;
    }

    .kc-section-header__text {
        font-family: var(--font-body);
        font-size: 1.125rem;
        color: var(--text-gray);
        max-width: 600px;
        margin: 0 auto;
    }

    .kc-cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: var(--space-md);
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 var(--space-md);
    }

    .kc-card {
        position: relative;
        padding: var(--space-lg) var(--space-md);
        border: 1px solid var(--game-dim);
        background: rgba(255, 255, 255, 0.02);
        backdrop-filter: blur(10px);
        transition: all 0.4s var(--ease-smooth);
        overflow: hidden;
        border-radius: 20px;
    }

    .kc-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--game-neon), var(--game-gold), var(--game-purple));
        transform: scaleX(0);
        transition: transform 0.4s var(--ease-smooth);
        border-radius: 20px 20px 0 0;
    }

    .kc-card:hover {
        transform: translateY(-10px);
        border-color: var(--game-gold);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 25px rgba(255, 215, 0, 0.2);
    }

    .kc-card:hover::before {
        transform: scaleX(1);
    }

    .kc-card__icon {
        font-size: 3rem;
        margin-bottom: var(--space-sm);
        display: block;
        text-align: center;
    }

    .kc-card__title {
        font-family: var(--font-display);
        font-size: 1.5rem;
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: var(--space-sm);
        text-transform: uppercase;
        text-align: center;
    }

    .kc-card__text {
        font-family: var(--font-body);
        font-size: 0.9375rem;
        color: var(--text-gray);
        line-height: 1.7;
        text-align: center;
    }

    /* ============================================================
   CUSTOMER FEEDBACK SECTION
   ============================================================ */
    .kc-reviews {
        position: relative;
        padding: var(--space-2xl) 0;
        background: var(--game-darker);
    }

    .kc-reviews::before,
    .kc-reviews::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--game-dim), transparent);
    }

    .kc-reviews::before {
        top: 0;
    }

    .kc-reviews::after {
        bottom: 0;
    }

    .kc-reviews-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: var(--space-md);
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 var(--space-md);
    }

    .kc-review {
        position: relative;
        padding: var(--space-lg);
        border: 1px solid var(--game-dim);
        background: rgba(255, 255, 255, 0.02);
        transition: all 0.4s var(--ease-smooth);
        border-radius: 20px;
        backdrop-filter: blur(10px);
    }

    .kc-review:hover {
        border-color: var(--game-gold);
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 25px rgba(255, 215, 0, 0.2);
    }

    .kc-review__quote {
        position: absolute;
        top: var(--space-sm);
        right: var(--space-md);
        font-family: var(--font-display);
        font-size: 6rem;
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        opacity: 0.15;
        line-height: 1;
    }

    .kc-review__stars {
        display: flex;
        gap: 0.25rem;
        margin-bottom: var(--space-sm);
        color: var(--game-gold);
        font-size: 1.25rem;
        justify-content: center;
    }

    .kc-review__text {
        font-family: var(--font-body);
        font-size: 1rem;
        font-style: italic;
        color: var(--text-gray);
        line-height: 1.8;
        margin-bottom: var(--space-md);
        position: relative;
        z-index: 1;
        text-align: center;
    }

    .kc-review__author {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
        justify-content: center;
    }

    .kc-review__avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--game-neon);
        box-shadow: 0 0 15px rgba(176, 209, 54, 0.3);
    }

    .kc-review__name {
        font-family: var(--font-ui);
        font-size: 0.875rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: var(--game-neon);
    }

    .kc-review__role {
        font-size: 0.8125rem;
        color: var(--text-muted);
    }

    /* ============================================================
   FAQ SECTION
   ============================================================ */
    .kc-faq {
        position: relative;
        padding: var(--space-2xl) 0;
        background: var(--game-dark);
    }

    .kc-faq__container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 var(--space-md);
    }

    .kc-faq__list {
        display: flex;
        flex-direction: column;
        gap: var(--space-sm);
    }

    .kc-faq__item {
        border: 1px solid var(--game-dim);
        background: rgba(255, 255, 255, 0.02);
        overflow: hidden;
        transition: all 0.3s var(--ease-smooth);
        border-radius: 16px;
        backdrop-filter: blur(10px);
    }

    .kc-faq__item:hover {
        border-color: var(--game-neon);
    }

    .kc-faq__item.active {
        border-color: var(--game-gold);
        background: rgba(176, 209, 54, 0.05);
        box-shadow: 0 0 20px rgba(176, 209, 54, 0.1);
    }

    .kc-faq__question {
        width: 100%;
        padding: var(--space-md);
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: var(--space-sm);
        font-family: var(--font-ui);
        font-size: 1rem;
        font-weight: 700;
        color: var(--text-white);
        background: none;
        border: none;
        cursor: pointer;
        text-align: left;
        transition: color 0.3s;
    }

    .kc-faq__question:hover {
        color: var(--game-neon);
    }

    .kc-faq__icon {
        width: 30px;
        height: 30px;
        border: 1px solid var(--game-dim);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--game-neon);
        font-size: 1.25rem;
        transition: all 0.3s var(--ease-spring);
        flex-shrink: 0;
    }

    .kc-faq__item.active .kc-faq__icon {
        transform: rotate(45deg);
        border-color: var(--game-gold);
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        color: var(--game-dark);
    }

    .kc-faq__answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s var(--ease-smooth), padding 0.4s;
    }

    .kc-faq__item.active .kc-faq__answer {
        max-height: 300px;
        padding: 0 var(--space-md) var(--space-md);
    }

    .kc-faq__text {
        font-family: var(--font-body);
        font-size: 0.9375rem;
        color: var(--text-gray);
        line-height: 1.8;
    }

    /* ============================================================
   FINAL CTA SECTION
   ============================================================ */
    .kc-cta {
        position: relative;
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .kc-cta__bg {
        position: absolute;
        inset: 0;
        background:
            linear-gradient(180deg, rgba(10, 10, 15, 0.8) 0%, rgba(10, 10, 15, 0.6) 50%, rgba(10, 10, 15, 0.9) 100%),
            url('https://i.pinimg.com/originals/2a/57/8e/2a578eaf560cd2b82f89d01e4e2e2475.gif') center/cover no-repeat;
        filter: brightness(0.5) saturate(1.2);
    }

    .kc-cta__overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse at center, rgba(176, 209, 54, 0.1) 0%, transparent 70%);
    }

    .kc-cta__content {
        position: relative;
        z-index: 10;
        text-align: center;
        padding: var(--space-xl);
        max-width: 1400px;
    }

    .kc-cta__title {
        font-family: var(--font-display);
        font-size: clamp(2.5rem, 6vw, 5rem);
        font-weight: 400;
        text-transform: uppercase;
        color: var(--text-white);
        margin-bottom: var(--space-md);
    }

    .kc-cta__title em {
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-style: normal;
    }

    .kc-cta__text {
        font-family: var(--font-body);
        font-size: 1.25rem;
        color: var(--text-gray);
        margin-bottom: var(--space-lg);
    }

    .kc-cta__features {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: var(--space-sm);
        margin-bottom: var(--space-lg);
    }

    .kc-cta__feature {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.625rem 1.25rem;
        border: 1px solid var(--game-dim);
        font-family: var(--font-ui);
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--text-gray);
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        transition: all 0.3s ease;
    }

    .kc-cta__feature:hover {
        border-color: var(--game-neon);
        color: var(--game-neon);
    }

    .kc-cta__phone {
        display: inline-block;
        font-family: var(--font-display);
        font-size: clamp(1.5rem, 4vw, 3rem);
        background: linear-gradient(135deg, var(--game-neon), var(--game-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: var(--game-glow);
        margin-bottom: var(--space-lg);
        transition: transform 0.3s;
        text-decoration: none;
    }

    .kc-cta__phone:hover {
        transform: scale(1.05);
    }

    .kc-cta__buttons {
        display: flex;
        justify-content: center;
        gap: var(--space-md);
        flex-wrap: wrap;
    }

    /* ============================================================
   RESPONSIVE DESIGN - PRESERVED EXACTLY
   ============================================================ */
    @media (max-width: 1024px) {

        .kc-split-banner,
        .kc-split-content {
            grid-template-columns: 1fr;
        }

        .kc-split-banner__media,
        .kc-split-content__media {
            min-height: 50vh;
            clip-path: none;
        }

        .kc-split-content__content {
            order: 2;
        }

        .kc-split-content__media {
            order: 1;
        }

        .kc-cards,
        .kc-reviews-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .kc-carousel__item {
            width: 300px;
            height: 200px;
        }
    }

    @media (max-width: 768px) {
        .kc-hero__title {
            font-size: clamp(2rem, 12vw, 3.5rem);
        }

        .kc-cards,
        .kc-reviews-grid {
            grid-template-columns: 1fr;
        }

        .kc-stats {
            grid-template-columns: 1fr;
        }

        .kc-cta__buttons {
            flex-direction: column;
            align-items: center;
        }

        .kc-btn {
            width: 100%;
            max-width: 300px;
            justify-content: center;
        }
    }

    /* ============================================================
   ANIMATIONS - PRESERVED
   ============================================================ */
    .kc-reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s var(--ease-smooth), transform 0.8s var(--ease-smooth);
    }

    .kc-reveal.in-view {
        opacity: 1;
        transform: translateY(0);
    }

    .kc-reveal--delay-1 {
        transition-delay: 0.1s;
    }

    .kc-reveal--delay-2 {
        transition-delay: 0.2s;
    }

    .kc-reveal--delay-3 {
        transition-delay: 0.3s;
    }
</style>

<div class="knockout-cinematic">

    <!-- ═══════════════════════════════════════════════════════════
         1. CINEMATIC HERO – STADIUM BACKGROUND
    ═══════════════════════════════════════════════════════════ -->
    <section class="kc-hero">
        <div class="kc-hero__bg"></div>
        <div class="kc-hero__overlay"></div>

        <div class="kc-hero__content">
            <div class="kc-hero__eyebrow">✦ Premium Sports Experience</div>
            <h1 class="kc-hero__title">
                Live Sports at<br>
                <span>The Knockout</span>
            </h1>
            <p class="kc-hero__subtitle">
                Where Every Match Becomes Legend. Experience cricket, football, and global sports on cinematic 4K Ultra
                HD screens with immersive Dolby Atmos sound.
            </p>
            <div class="kc-hero__cta">
                <a href="tel:+919831040034" class="kc-btn kc-btn--solid">
                    <span>Reserve Your Seat</span>
                </a>
                <a href="#experience" class="kc-btn">
                    <span>Explore Experience</span>
                </a>
            </div>
        </div>

        <a href="#carousel" class="kc-hero__scroll">
            <div class="kc-hero__scroll-line"></div>
            <span>Scroll</span>
        </a>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         2. HORIZONTAL BANNER CAROUSEL – RIGHT TO LEFT
    ═══════════════════════════════════════════════════════════ -->
    <section class="kc-carousel" id="carousel">
        <div class="kc-carousel__track">
            <!-- Original items -->
            <div class="kc-carousel__item">
                <img src="https://images.bhaskarassets.com/web2images/1884/2026/03/28/comp-7-16_1774720203.gif"
                    alt="Cricket match">
                <div class="kc-carousel__overlay">
                    <span class="kc-carousel__text">IPL 2026 Live</span>
                </div>
            </div>
            <div class="kc-carousel__item">
                <img src="https://images.hive.blog/0x0/https://steemitimages.com/DQmYxrfbPm6WXm1HcRSixLdFgiRWNPPkWkiSwAxpUZ4YkGN/One%20of%20the%20best%20goal%20of%20Leonel%20Messi.gif"
                    alt="Football match">
                <div class="kc-carousel__overlay">
                    <span class="kc-carousel__text">ISL Premium</span>
                </div>
            </div>
            <div class="kc-carousel__item">
                <img src="https://media1.giphy.com/media/v1.Y2lkPTZjMDliOTUyN3VveHQwOGk0ZWJ6aW15em00cXluNHFpbWFkcjFhbGdjMjdndTBxYiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/VmjjnsdJFAmCc6iHmx/source.gif"
                    alt="Stadium atmosphere">
                <div class="kc-carousel__overlay">
                    <span class="kc-carousel__text">Stadium Atmosphere</span>
                </div>
            </div>
            <div class="kc-carousel__item">
                <img src="https://media1.giphy.com/media/nHXkxeDHMejjBKdFKY/giphy-downsized.gif" alt="VIP Lounge">
                <div class="kc-carousel__overlay">
                    <span class="kc-carousel__text">VIP Experience</span>
                </div>
            </div>
            <!-- Duplicated for seamless loop -->
            <div class="kc-carousel__item">
                <img src="https://static.gujaratsamachar.com/content_image/content_image_07c7d543-b0c5-43d1-9640-a82dbaee1735.gif"
                    alt="Cricket match">
                <div class="kc-carousel__overlay">
                    <span class="kc-carousel__text">IPL 2026 Live</span>
                </div>
            </div>
            <div class="kc-carousel__item">
                <img src="https://giffiles.alphacoders.com/218/218830.gif" alt="Football match">
                <div class="kc-carousel__overlay">
                    <span class="kc-carousel__text">ISL Premium</span>
                </div>
            </div>
            <div class="kc-carousel__item">
                <img src="https://static01.nyt.com/athletic/uploads/wp/2026/04/10043922/ssstwitter.com_17758041971511-ezgif.com-video-to-gif-converter.gif"
                    alt="Stadium atmosphere">
                <div class="kc-carousel__overlay">
                    <span class="kc-carousel__text">Stadium Atmosphere</span>
                </div>
            </div>
            <div class="kc-carousel__item">
                <img src="https://gifzz.com/storage/gifs/B6gmbpgMPVghxUry0oPNhn9SnIZ0iMKMNLehnwEV.gif" alt="VIP Lounge">
                <div class="kc-carousel__overlay">
                    <span class="kc-carousel__text">VIP Experience</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         3. BANNER LEFT + CONTENT RIGHT
    ═══════════════════════════════════════════════════════════ -->
    <section class="kc-split-banner" id="experience">
        <div class="kc-split-banner__media">
            <img src="https://static01.nyt.com/athletic/uploads/wp/2025/05/01054122/ssstwitter.com_1746046321035-ezgif.com-video-to-gif-converter.gif"
                alt="Live screening">
            <div class="kc-split-banner__overlay"></div>
        </div>
        <div class="kc-split-banner__content">
            <div class="kc-split-banner__eyebrow">✦ The Experience</div>
            <h2 class="kc-split-banner__title">
                Live Sports<br>
                <em>Screening</em>
            </h2>
            <p class="kc-split-banner__text">
                Experience the thrill of every boundary, every goal, and every victory on our cinematic 4K Ultra HD
                screens. Kolkata's most premium sports destination where every match feels like the finals.
            </p>
            <div class="kc-features">
                <div class="kc-feature">4K Ultra HD Screens</div>
                <div class="kc-feature">Dolby Atmos Sound</div>
                <div class="kc-feature">Zero Blind Spots</div>
                <div class="kc-feature">Premium Hospitality</div>
            </div>
            <a href="tel:+919831040034" class="kc-btn kc-btn--solid">
                <span>Book Now</span>
            </a>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         4. CONTENT LEFT + IMAGE RIGHT
    ═══════════════════════════════════════════════════════════ -->
    <section class="kc-split-content">
        <div class="kc-split-content__content">
            <div class="kc-split-banner__eyebrow">✦ Premium Venue</div>
            <h2 class="kc-split-banner__title">
                Where Kolkata<br>
                <em>Comes to Cheer</em>
            </h2>
            <p class="kc-split-banner__text">
                From nail-biting last-over finishes to stoppage-time winners — every moment is amplified here with
                immersive sound, perfect sightlines, and electric crowd energy.
            </p>
            <div class="kc-stats">
                <div class="kc-stat">
                    <div class="kc-stat__value">4K</div>
                    <div class="kc-stat__label">Ultra HD</div>
                </div>
                <div class="kc-stat">
                    <div class="kc-stat__value">500+</div>
                    <div class="kc-stat__label">Matches</div>
                </div>
                <div class="kc-stat">
                    <div class="kc-stat__value">10K+</div>
                    <div class="kc-stat__label">Fans</div>
                </div>
                <div class="kc-stat">
                    <div class="kc-stat__value">Dolby</div>
                    <div class="kc-stat__label">Atmos</div>
                </div>
            </div>
            <a href="tel:+919831040034" class="kc-btn kc-btn--solid">
                <span>Reserve Table</span>
            </a>
        </div>
        <div class="kc-split-content__media">
            <img src="https://i.pinimg.com/originals/a0/13/a8/a013a8808b9f78886b2015ba71078f73.gif"
                alt="Premium interior">
            <div class="kc-split-content__overlay"></div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         5. LINKEDIN-STYLE LANDSCAPE BANNER
    ═══════════════════════════════════════════════════════════ -->
    <section class="kc-landscape">
        <div class="kc-landscape__bg"></div>
        <div class="kc-landscape__content">
            <h2 class="kc-landscape__title">
                The Ultimate <span>Sports Destination</span>
            </h2>
            <p class="kc-landscape__text">
                Join thousands of passionate fans who choose The Knockout as their home for live sports. Where every
                seat is the best seat in the house.
            </p>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         6. WHY CHOOSE THE KNOCKOUT
    ═══════════════════════════════════════════════════════════ -->
    <section class="kc-why" id="why">
        <div class="kc-section-header kc-reveal">
            <div class="kc-section-header__eyebrow">✦ Our Distinction</div>
            <h2 class="kc-section-header__title">
                Why Choose <em>The Knockout</em>
            </h2>
            <p class="kc-section-header__text">
                Kolkata's Premier Sports Destination – Engineered for Discerning Fans
            </p>
        </div>

        <div class="kc-cards">
            <div class="kc-card kc-reveal kc-reveal--delay-1">
                <span class="kc-card__icon">📺</span>
                <h3 class="kc-card__title">Cinematic Viewing</h3>
                <p class="kc-card__text">Strategically placed 4K Ultra HD screens ensure you never miss a moment, no
                    matter where you're seated.</p>
            </div>
            <div class="kc-card kc-reveal kc-reveal--delay-2">
                <span class="kc-card__icon">🎤</span>
                <h3 class="kc-card__title">Immersive Sound</h3>
                <p class="kc-card__text">Feel the energy of fellow fans with our proprietary crowd mic system that
                    brings the stadium roar to you.</p>
            </div>
            <div class="kc-card kc-reveal kc-reveal--delay-3">
                <span class="kc-card__icon">🍾</span>
                <h3 class="kc-card__title">Premium Hospitality</h3>
                <p class="kc-card__text">Exclusive match-day offerings: craft beers, signature cocktails, and
                    chef-curated gourmet menus.</p>
            </div>
            <div class="kc-card kc-reveal kc-reveal--delay-1">
                <span class="kc-card__icon">🎙️</span>
                <h3 class="kc-card__title">Expert Insights</h3>
                <p class="kc-card__text">Enhanced viewing with expert commentary and analysis on select matches for
                    deeper understanding.</p>
            </div>
            <div class="kc-card kc-reveal kc-reveal--delay-2">
                <span class="kc-card__icon">🎁</span>
                <h3 class="kc-card__title">Exclusive Rewards</h3>
                <p class="kc-card__text">Win team jerseys, VIP match tickets, and limited-edition merchandise during
                    special events.</p>
            </div>
            <div class="kc-card kc-reveal kc-reveal--delay-3">
                <span class="kc-card__icon">📸</span>
                <h3 class="kc-card__title">Memorable Moments</h3>
                <p class="kc-card__text">Capture your experience at our themed photo installations with match-day props
                    and instant prints.</p>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         7. CUSTOMER FEEDBACK
    ═══════════════════════════════════════════════════════════ -->
    <section class="kc-reviews">
        <div class="kc-section-header kc-reveal">
            <div class="kc-section-header__eyebrow">✦ Testimonials</div>
            <h2 class="kc-section-header__title">
                <em>Guest</em> Experiences
            </h2>
        </div>

        <div class="kc-reviews-grid">
            <div class="kc-review kc-reveal kc-reveal--delay-1">
                <span class="kc-review__quote">"</span>
                <div class="kc-review__stars">★★★★★</div>
                <p class="kc-review__text">"The ultimate IPL experience in Kolkata. Crystal-clear 4K screens, Dolby
                    Atmos that makes you feel every cheer, and the cold craft beer is always perfect. Booked a VIP booth
                    for my group — absolutely worth every rupee."</p>
                <div class="kc-review__author">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face"
                        alt="Rahul M." class="kc-review__avatar">
                    <div>
                        <div class="kc-review__name">Rahul M.</div>
                        <div class="kc-review__role">KKR Enthusiast</div>
                    </div>
                </div>
            </div>

            <div class="kc-review kc-reveal kc-reveal--delay-2">
                <span class="kc-review__quote">"</span>
                <div class="kc-review__stars">★★★★★</div>
                <p class="kc-review__text">"Watched the ISL derby here and it genuinely felt like being pitch-side. The
                    crowd energy, the massive screens, the gourmet food — everything was flawless. The crowd mic
                    integration made it even more electrifying."</p>
                <div class="kc-review__author">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face"
                        alt="Priya S." class="kc-review__avatar">
                    <div>
                        <div class="kc-review__name">Priya S.</div>
                        <div class="kc-review__role">ATK Mohun Bagan Supporter</div>
                    </div>
                </div>
            </div>

            <div class="kc-review kc-reveal kc-reveal--delay-3">
                <span class="kc-review__quote">"</span>
                <div class="kc-review__stars">★★★★★</div>
                <p class="kc-review__text">"The VIP experience is truly exceptional. Private booth, premium bottle
                    service, dedicated concierge — the staff anticipated our every need. Without question, India's
                    finest sports hospitality experience."</p>
                <div class="kc-review__author">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop&crop=face"
                        alt="Arjun K." class="kc-review__avatar">
                    <div>
                        <div class="kc-review__name">Arjun K.</div>
                        <div class="kc-review__role">Premium Member</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         8. FAQ SECTION
    ═══════════════════════════════════════════════════════════ -->
    <section class="kc-faq">
        <div class="kc-section-header kc-reveal">
            <div class="kc-section-header__eyebrow">✦ Essential Information</div>
            <h2 class="kc-section-header__title">
                Frequently Asked <em>Questions</em>
            </h2>
        </div>

        <div class="kc-faq__container">
            <div class="kc-faq__list">
                <div class="kc-faq__item kc-reveal">
                    <button class="kc-faq__question" aria-expanded="false">
                        <span>Is advance booking recommended for matches?</span>
                        <span class="kc-faq__icon">+</span>
                    </button>
                    <div class="kc-faq__answer">
                        <p class="kc-faq__text">Yes, we strongly recommend booking in advance, particularly for premier
                            matches such as IPL playoffs, ISL derbies, or international fixtures. Walk-ins are welcomed
                            subject to availability.</p>
                    </div>
                </div>

                <div class="kc-faq__item kc-reveal">
                    <button class="kc-faq__question" aria-expanded="false">
                        <span>What are your operating hours on match days?</span>
                        <span class="kc-faq__icon">+</span>
                    </button>
                    <div class="kc-faq__answer">
                        <p class="kc-faq__text">We open daily 12PM - 12AM. For premium events including IPL Playoffs,
                            ISL Finals, or Champions League Finals, minimum spend requirements may apply.
                        </p>
                    </div>
                </div>

                <div class="kc-faq__item kc-reveal">
                    <button class="kc-faq__question" aria-expanded="false">
                        <span>Are there cover charges or minimum spends?</span>
                        <span class="kc-faq__icon">+</span>
                    </button>
                    <div class="kc-faq__answer">
                        <p class="kc-faq__text">No cover charge applies to regular season matches. For premium events
                            including IPL Playoffs, ISL Finals, or Champions League Finals, minimum spend requirements
                            may apply.</p>
                    </div>
                </div>

                <div class="kc-faq__item kc-reveal">
                    <button class="kc-faq__question" aria-expanded="false">
                        <span>What culinary offerings are available?</span>
                        <span class="kc-faq__icon">+</span>
                    </button>
                    <div class="kc-faq__answer">
                        <p class="kc-faq__text">Our curated menu features premium craft beers, signature cocktails,
                            artisanal mocktails, gourmet hot snacks, wood-fired pizzas, premium burgers, and chef's
                            special mains.</p>
                    </div>
                </div>

                <div class="kc-faq__item kc-reveal">
                    <button class="kc-faq__question" aria-expanded="false">
                        <span>Can I arrange private events during matches?</span>
                        <span class="kc-faq__icon">+</span>
                    </button>
                    <div class="kc-faq__answer">
                        <p class="kc-faq__text">Absolutely. We offer private booth reservations, corporate hospitality
                            packages, and bespoke group event solutions. Contact +91 98310 40034 for personalized
                            proposals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         9. FINAL CTA SECTION
    ═══════════════════════════════════════════════════════════ -->
    <section class="kc-cta">
        <div class="kc-cta__bg">
        </div>
        <div class="kc-cta__overlay"></div>

        <div class="kc-cta__content">
            <h2 class="kc-cta__title">
                Ready to Experience<br>
                <em>The Ultimate Fun?</em>
            </h2>
            <p class="kc-cta__text">
                Don't miss a moment of the action. Secure your seat now and join Kolkata's most passionate fans.
            </p>
            <div class="kc-cta__features">
                <span class="kc-cta__feature">✓ High-Speed WiFi</span>
                <span class="kc-cta__feature">✓ Climate-Controlled</span>
                <span class="kc-cta__feature">✓ Valet Parking</span>
                <span class="kc-cta__feature">✓ Premium Groups</span>
            </div>
            <a href="tel:+919831040034" class="kc-cta__phone">🤙 +91 98310 40034</a>
            <div class="kc-cta__buttons">
                <a href="tel:+919831040034" class="kc-btn kc-btn--solid kc-btn--large">
                    <span>Reserve Now</span>
                </a>
                <a href="#experience" class="kc-btn kc-btn--large">
                    <span>View Schedule</span>
                </a>
            </div>
        </div>
    </section>

</div><!-- /.knockout-cinematic -->

<script>
    jQuery(document).ready(function ($) {

        // FAQ Accordion
        $('.kc-faq__question').on('click', function () {
            const $item = $(this).closest('.kc-faq__item');
            const isActive = $item.hasClass('active');

            $('.kc-faq__item').removeClass('active');
            $('.kc-faq__question').attr('aria-expanded', 'false');

            if (!isActive) {
                $item.addClass('active');
                $(this).attr('aria-expanded', 'true');
            }
        });

        // Smooth Scroll
        $('a[href^="#"]').on('click', function (e) {
            const target = $($(this).attr('href'));
            if (target.length) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800);
            }
        });

        // Scroll Reveal Animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    $(entry.target).addClass('in-view');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        $('.kc-reveal').each(function () {
            observer.observe(this);
        });

    });
</script>

<?php get_footer(); ?>