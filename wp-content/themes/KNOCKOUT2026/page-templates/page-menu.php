<?php
/*
Template Name: Knockout Sports Cafe - Food Menu
*/
get_header();
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    :root {
        --neon-green: #aed034;
        --neon-green-dim: rgba(174, 208, 52, 0.5);
        --neon-green-soft: rgba(174, 208, 52, 0.15);
        --neon-green-border: rgba(174, 208, 52, 0.3);
        --neon-green-glow: rgba(174, 208, 52, 0.25);
        --bg-primary: #0a0f1a;
        --bg-secondary: #0d1220;
        --bg-card: rgba(15, 25, 45, 0.6);
        --bg-card-solid: #111b2e;
        --text-white: #ffffff;
        --text-gray: #8a9bb5;
        --text-light: #c5d0e0;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: var(--bg-primary);
        color: var(--text-white);
        overflow-x: hidden;
        line-height: 1.6;
    }

    /* ========== DECORATIVE LEAVES ========== */
    .deco-leaf {
        position: absolute;
        z-index: 1;
        pointer-events: none;
        opacity: 0.6;
    }

    .deco-leaf img {
        width: 100%;
        height: auto;
    }

    /* ========== ANIMATIONS ========== */
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-12px) rotate(5deg);
        }
    }

    @keyframes floatSlow {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-18px) rotate(-5deg);
        }
    }

    @keyframes floatMedium {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes pulseGlow {

        0%,
        100% {
            filter: drop-shadow(0 0 8px rgba(174, 208, 52, 0.4));
        }

        50% {
            filter: drop-shadow(0 0 16px rgba(174, 208, 52, 0.7));
        }
    }

    @keyframes cardGlow {

        0%,
        100% {
            box-shadow: 0 0 15px rgba(174, 208, 52, 0.1);
        }

        50% {
            box-shadow: 0 0 25px rgba(174, 208, 52, 0.2);
        }
    }

    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* ========== HERO SECTION ========== */
    .hero-section {
        position: relative;
        min-height: 90vh;
        display: flex;
        align-items: center;
        padding: 100px 8% 80px;
        overflow: hidden;
        background:
            url('https://images.squarespace-cdn.com/content/v1/5e4ebffeccd62403a77158ca/1594718378609-EBCPMRFVOB2WYXAI4N9X/200710_Christmas_TurkeyTableFFWIDE.jpg?w=1600') center/cover no-repeat;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(10, 15, 26, 0.5);
        z-index: 1;
        pointer-events: none;
    }

    .hero-container {
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
        position: relative;
        z-index: 2;
    }

    .hero-left {
        padding-right: 20px;
    }

    .hero-title {
        font-size: clamp(2rem, 4.5vw, 3.2rem);
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 15px;
        text-transform: uppercase;
        color: var(--text-white);
    }

    .hero-title .highlight {
        color: var(--neon-green);
        text-shadow: 0 0 30px rgba(174, 208, 52, 0.4);
    }

    .hero-subtitle {
        font-size: 0.9rem;
        color: var(--text-white);
        margin-bottom: 30px;
        line-height: 1.6;
        max-width: 420px;
    }

    .hero-buttons {
        display: flex;

        gap: 15px;
        flex-wrap: wrap;
    }

    .btn-order {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: var(--neon-green);
        color: #000;
        font-weight: 700;
        font-size: 0.85rem;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        box-shadow: 0 0 20px rgba(174, 208, 52, 0.3);
    }

    .btn-order:hover {
        box-shadow: 0 0 35px rgba(174, 208, 52, 0.5);
        transform: translateY(-2px);
    }

    .btn-explore {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 28px;
        background: transparent;
        color: var(--neon-green);
        font-weight: 600;
        font-size: 0.85rem;
        border: 1px solid var(--neon-green-border);
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .btn-explore:hover {
        background: var(--neon-green-soft);
        border-color: var(--neon-green);
    }

    /* Hero Right Visual */
    .hero-right {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 450px;
    }

    .hero-main-circle {
        width: 360px;
        height: 360px;
        position: relative;
        z-index: 2;
        animation: spin 20s linear infinite;
    }

    .hero-main-circle img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        filter: drop-shadow(0 30px 25px rgba(174, 208, 52, 0.45));
    }

    .hero-float {
        position: absolute;
        width: 85px;
        height: 85px;
        z-index: 3;
    }

    .hero-float img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        filter: drop-shadow(0 15px 15px rgba(174, 208, 52, 0.3));
    }

    .hero-float-1 {
        top: 0;
        right: 60px;
        animation: float 5s ease-in-out infinite;
    }

    .hero-float-2 {
        top: 60px;
        right: -5px;
        animation: floatSlow 6s ease-in-out infinite;
    }

    .hero-float-3 {
        bottom: 50px;
        right: 10px;
        animation: float 5.5s ease-in-out infinite;
    }

    .hero-float-4 {
        bottom: 0;
        left: 70px;
        animation: floatSlow 6.5s ease-in-out infinite;
    }

    .hero-float-5 {
        top: 50%;
        left: 0;
        animation: float 5s ease-in-out infinite;
    }

    .hero-float-6 {
        top: 30%;
        left: -10px;
        animation: floatMedium 7s ease-in-out infinite;
    }

    /* ========== SECTION COMMON ========== */
    .section {
        padding: 80px 8%;
        position: relative;
    }

    .section-alt {
        background: linear-gradient(to bottom, var(--bg-primary, rgba(0, 0, 0, 0.9)) 0%, rgba(0, 0, 0, 0.4) 100%), url('https://images.squarespace-cdn.com/content/v1/5e4ebffeccd62403a77158ca/60b95e3b-a691-42e0-bb9a-0bc01fbee38d/HellmannsBBQGrills.gif?format=750w') center/cover no-repeat;
    }

    .section-why-us {
        background: linear-gradient(to bottom, var(--bg-primary, rgba(0, 0, 0, 0.9)) 0%, rgba(0, 0, 0, 0.6) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/images/games.jpg') center/cover no-repeat;
    }

    .section-special {
        background: linear-gradient(to bottom, var(--bg-primary, rgba(0, 0, 0, 0.9)) 0%, rgba(0, 0, 0, 0.6) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/images/bar-area.avif') center/cover no-repeat;
    }

    .section-chef {
        background: linear-gradient(to bottom, var(--bg-primary, rgba(0, 0, 0, 0.9)) 0%, rgba(0, 0, 0, 0.6) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/images/vip-lounge.jpg') center/cover no-repeat;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .section-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-title {
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 900;
        text-transform: uppercase;
        margin-bottom: 8px;
        color: var(--text-white);
        letter-spacing: 1px;
    }

    .section-title .highlight {
        color: var(--neon-green);
    }

    .section-desc {
        color: var(--text-gray);
        font-size: 0.85rem;
        max-width: 500px;
        margin: 0 auto;
        line-height: 1.5;
    }

    /* ========== FEATURED ITEMS (4 cards) ========== */
    .featured-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        padding-top: 40px;
    }

    .featured-card {
        background: var(--bg-card);
        backdrop-filter: blur(10px);
        border: 1px solid var(--neon-green-border);
        border-radius: 16px;
        padding: 20px 15px 18px;
        text-align: center;
        transition: all 0.35s ease;
        position: relative;
    }

    .featured-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--neon-green), transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .featured-card:hover {
        border-color: var(--neon-green);
        box-shadow: 0 0 25px rgba(174, 208, 52, 0.15), 0 10px 40px rgba(0, 0, 0, 0.3);
        transform: translateY(-8px);
    }

    .featured-card:hover::before {
        opacity: 1;
    }

    .featured-img-wrap {
        width: 110px;
        height: 110px;
        margin: -100px auto 17px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid var(--neon-green);
        box-shadow: 0 0 20px rgba(174, 208, 52, 0.2);
        position: relative;
        z-index: 2;
    }

    .featured-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .featured-card:hover .featured-img-wrap img {
        transform: scale(1.1);
    }

    .featured-name {
        font-size: 0.95rem;
        font-weight: 700;
        margin-bottom: 6px;
        color: var(--text-white);
    }

    .featured-desc {
        font-size: 0.72rem;
        color: var(--text-gray);
        margin-bottom: 14px;
        line-height: 1.5;
        min-height: 34px;
    }

    .featured-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 8px;
    }

    .featured-stars {
        color: #FFD700;
        font-size: 0.8rem;
    }

    .featured-stars .count {
        color: var(--text-gray);
        font-size: 0.7rem;
    }

    .btn-buy {
        padding: 7px 16px;
        background: var(--neon-green);
        color: #000;
        border: none;
        font-weight: 700;
        font-size: 0.7rem;
        text-transform: uppercase;
        cursor: pointer;
        border-radius: 20px;
        transition: all 0.3s ease;
    }

    .btn-buy:hover {
        box-shadow: 0 0 15px rgba(174, 208, 52, 0.4);
    }

    /* ========== WHY CHOOSE US ========== */
    .why-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .why-card {
        background: var(--bg-card);
        backdrop-filter: blur(10px);
        border: 1px solid var(--neon-green-border);
        border-radius: 16px;
        padding: 30px 20px;
        text-align: center;
        transition: all 0.35s ease;
    }

    .why-card:hover {
        border-color: var(--neon-green);
        box-shadow: 0 0 20px rgba(174, 208, 52, 0.15);
        transform: translateY(-5px);
    }

    .why-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: var(--neon-green);
        border: 2px solid var(--neon-green);
        border-radius: 12px;
        background: rgba(174, 208, 52, 0.05);
    }

    .why-title {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--text-white);
    }

    .why-text {
        font-size: 0.78rem;
        color: var(--text-gray);
        line-height: 1.6;
    }

    /* ========== SPECIAL MENU ========== */
    .special-slider-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        padding: 0 40px;
    }

    .special-slider-viewport {
        overflow: hidden;
        width: 100%;
    }

    .special-slider-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
        gap: 25px;
        padding-top: 40px;
    }

    .slider-item {
        flex: 0 0 calc((100% - 50px) / 3);
    }

    .slider-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: var(--neon-green);
        color: #000;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 1.2rem;
        cursor: pointer;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 15px rgba(174, 208, 52, 0.4);
    }

    .slider-btn:hover {
        background: #fff;
    }

    .prev-btn {
        left: 0;
    }

    .next-btn {
        right: 0;
    }

    @media (max-width: 1024px) {
        .slider-item {
            flex: 0 0 calc((100% - 25px) / 2);
        }
    }

    @media (max-width: 768px) {
        .slider-item {
            flex: 0 0 100%;
        }

        .special-slider-container {
            padding: 0 30px;
        }
    }

    .special-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        position: relative;
    }

    .special-card {
        background: var(--bg-card);
        backdrop-filter: blur(10px);
        border: 1px solid var(--neon-green-border);
        border-radius: 16px;
        padding: 22px 18px 18px;
        text-align: center;
        transition: all 0.35s ease;
        position: relative;
    }

    .special-card:hover {
        border-color: var(--neon-green);
        box-shadow: 0 0 25px rgba(174, 208, 52, 0.15);
        transform: translateY(-6px);
    }

    .special-img-wrap {
        width: 130px;
        height: 130px;
        margin: -45px auto 12px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid var(--neon-green);
        box-shadow: 0 0 25px rgba(174, 208, 52, 0.2);
        position: relative;
        z-index: 2;
    }

    .special-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .special-card:hover .special-img-wrap img {
        transform: scale(1.1);
    }

    .special-name {
        font-size: 1.05rem;
        font-weight: 700;
        margin-bottom: 4px;
        color: var(--text-white);
    }

    .special-stars {
        color: #FFD700;
        font-size: 0.75rem;
        margin-bottom: 10px;
    }

    .special-stars .count {
        color: var(--text-gray);
        font-size: 0.65rem;
    }

    .special-desc {
        font-size: 0.72rem;
        color: var(--text-gray);
        margin-bottom: 14px;
        line-height: 1.5;
        min-height: 34px;
    }

    .special-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 6px;
    }

    .special-price {
        font-size: 1.2rem;
        font-weight: 800;
        color: var(--neon-green);
    }

    .btn-cart {
        width: 40px;
        height: 40px;
        background: rgba(174, 208, 52, 0.1);
        border: 1px solid var(--neon-green-border);
        border-radius: 10px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        color: var(--neon-green);
        transition: all 0.3s ease;
    }

    .btn-cart:hover {
        background: var(--neon-green);
        color: #000;
        box-shadow: 0 0 15px rgba(174, 208, 52, 0.3);
    }

    .carousel-dots {
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-top: 25px;
    }

    .dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgba(174, 208, 52, 0.2);
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .dot.active {
        background: var(--neon-green);
        width: 24px;
        border-radius: 4px;
        box-shadow: 0 0 8px rgba(174, 208, 52, 0.4);
    }

    /* ========== REGULAR FOOD (6 cards) ========== */
    .regular-slider-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        padding: 0 40px;
    }

    .regular-slider-viewport {
        overflow: hidden;
        width: 100%;
    }

    .regular-slider-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .regular-slider-item {
        flex: 0 0 100%;
        width: 100%;
        padding: 5px 0;
    }

    .regular-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .regular-card {
        background: var(--bg-card);
        backdrop-filter: blur(10px);
        border: 1px solid var(--neon-green-border);
        border-radius: 16px;
        padding: 22px 18px 18px;
        text-align: center;
        transition: all 0.35s ease;
        position: relative;
    }

    .regular-card:hover {
        border-color: var(--neon-green);
        box-shadow: 0 0 25px rgba(174, 208, 52, 0.15), 0 8px 30px rgba(0, 0, 0, 0.2);
        transform: translateY(-6px);
    }

    .regular-img-wrap {
        width: 120px;
        height: 120px;
        margin: -45px auto 12px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid var(--neon-green);
        box-shadow: 0 0 20px rgba(174, 208, 52, 0.2);
        position: relative;
        z-index: 2;
    }

    .regular-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .regular-card:hover .regular-img-wrap img {
        transform: scale(1.1);
    }

    .regular-name {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 4px;
        color: var(--text-white);
    }

    .regular-stars {
        color: #FFD700;
        font-size: 0.7rem;
        margin-bottom: 6px;
    }

    .regular-stars .count {
        color: var(--text-gray);
        font-size: 0.65rem;
    }

    .regular-desc {
        font-size: 0.72rem;
        color: var(--text-gray);
        margin-bottom: 14px;
        line-height: 1.5;
        min-height: 40px;
    }

    .regular-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 8px;
    }

    .regular-price {
        font-size: 0.9rem;
        font-weight: 700;
        color: var(--neon-green);
        background: rgba(174, 208, 52, 0.1);
        padding: 5px 14px;
        border-radius: 20px;
        border: 1px solid rgba(174, 208, 52, 0.2);
    }

    .btn-buy-regular {
        padding: 7px 18px;
        background: var(--neon-green);
        color: #000;
        border: none;
        font-weight: 700;
        font-size: 0.7rem;
        text-transform: uppercase;
        cursor: pointer;
        border-radius: 20px;
        transition: all 0.3s ease;
    }

    .btn-buy-regular:hover {
        box-shadow: 0 0 15px rgba(174, 208, 52, 0.4);
    }

    /* ========== CHEF SECTION ========== */
    .chefs-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        align-items: start;
        padding: 20px 0 60px;
        max-width: 900px;
        margin: 0 auto;
    }

    .chef-card {
        background: radial-gradient(circle at center, rgba(174, 208, 52, 0.4) 0%, rgba(10, 15, 10, 1) 70%);
        border: 2px solid var(--neon-green);
        border-radius: 20px;
        position: relative;
        overflow: hidden;
        aspect-ratio: 3 / 4;
        transition: all 0.35s ease;
        box-shadow: 0 0 20px rgba(174, 208, 52, 0.15);
    }

    .chef-card:nth-child(2) {
        transform: translateY(40px);
    }

    .chef-card:hover {
        box-shadow: 0 0 35px rgba(174, 208, 52, 0.4);
        transform: translateY(-5px);
    }

    .chef-card:nth-child(2):hover {
        transform: translateY(35px);
    }

    .chef-img-wrap {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
    }

    .chef-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .chef-card:hover .chef-img-wrap img {
        transform: scale(1.05);
    }

    /* ========== FINAL CTA ========== */
    .final-cta {
        text-align: center;
        padding: 80px 8%;
        background: var(--bg-primary);
        position: relative;
    }

    .final-cta h2 {
        font-size: clamp(1.5rem, 3vw, 2.2rem);
        font-weight: 900;
        text-transform: uppercase;
        margin-bottom: 10px;
        color: var(--text-white);
        letter-spacing: 1px;
    }

    .final-cta h2 .highlight {
        color: var(--neon-green);
    }

    .final-cta p {
        color: var(--text-gray);
        font-size: 0.9rem;
        margin-bottom: 30px;
    }

    .btn-menu-large {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 36px;
        background: var(--neon-green);
        color: #000;
        font-weight: 800;
        font-size: 0.9rem;
        text-transform: uppercase;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 25px rgba(174, 208, 52, 0.3);
    }

    .btn-menu-large:hover {
        box-shadow: 0 0 40px rgba(174, 208, 52, 0.5);
        transform: translateY(-3px);
    }

    /* ========== DECORATIVE ELEMENTS ========== */
    .leaf-corner {
        position: absolute;
        pointer-events: none;
        z-index: 0;
        opacity: 0.3;
    }

    .leaf-top-right {
        top: -20px;
        right: -20px;
        width: 150px;
    }

    .leaf-bottom-left {
        bottom: -20px;
        left: -20px;
        width: 120px;
    }

    .leaf-top-left {
        top: -20px;
        left: -20px;
        width: 100px;
    }

    .leaf-bottom-right {
        bottom: -20px;
        right: -20px;
        width: 100px;
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 1024px) {
        .featured-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .special-grid,
        .regular-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .why-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .hero-container {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .hero-subtitle {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-buttons {
            justify-content: center;
        }

        .hero-right {
            min-height: 350px;
            order: -1;
        }

        .hero-main-circle {
            width: 260px;
            height: 260px;
        }

        .hero-float {
            width: 60px;
            height: 60px;
        }

        .featured-grid,
        .special-grid,
        .regular-grid,
        .why-grid,
        .chefs-grid {
            grid-template-columns: 1fr;
            max-width: 350px;
            margin: 0 auto;
        }

        .chefs-grid {
            max-width: 300px;
            padding-bottom: 20px;
        }

        .chef-card:nth-child(2) {
            transform: none;
        }

        .chef-card:nth-child(2):hover {
            transform: translateY(-5px);
        }

        .section {
            padding: 60px 5%;
        }

        .featured-img-wrap,
        .special-img-wrap,
        .regular-img-wrap {
            margin-top: -35px;
        }
    }
</style>

<!-- ========== HERO SECTION ========== -->
<section class="hero-section">
    <div class="hero-container">
        <div class="hero-left fade-in">
            <h1 class="hero-title">Just Come To <span class="highlight">Knockout</span> & Fuel Your Game</h1>
            <p class="hero-subtitle">High-energy gourmet food served fast, fuel your hunger and power up your gaming
                experience.</p>
            <div class="hero-buttons">
                <a href="#menu" class="btn-order">Order Now</a>
                <a href="#menu" class="btn-explore">Explore Menu →</a>
            </div>
        </div>

        <div class="hero-right fade-in">
            <div class="hero-main-circle">
                <img src="https://theknockout.in/wp-content/uploads/2026/04/food-Main.png" alt="Sports Cafe Food Bowl">
            </div>
            <!-- Floating elements around main image -->
            <div class="hero-float hero-float-1">
                <img src="https://theknockout.in/wp-content/uploads/2026/04/dhaniya.png" alt="Coriander - REPLACE">
            </div>
            <div class="hero-float hero-float-2">
                <img src="https://theknockout.in/wp-content/uploads/2026/04/Untitled-design-5.png"
                    alt="Chili - REPLACE">
            </div>
            <div class="hero-float hero-float-3">
                <img src="https://theknockout.in/wp-content/uploads/2026/04/pudina.png" alt="Herbs - REPLACE">
            </div>
            <div class="hero-float hero-float-4">
                <img src="https://theknockout.in/wp-content/uploads/2026/04/Untitled-design-7-1.png"
                    alt="Spices - REPLACE">
            </div>
            <div class="hero-float hero-float-5">
                <img src="https://theknockout.in/wp-content/uploads/2026/04/Untitled-design-6-1.png"
                    alt="Garnish - REPLACE">
            </div>
            <div class="hero-float hero-float-6">
                <img src="https://theknockout.in/wp-content/uploads/2026/04/Untitled-design-8.png" alt="onion">
            </div>
        </div>
    </div>
</section>

<!-- ========== FEATURED ITEMS (4 cards) ========== -->
<section class="section section-alt">
    <div class="container">
        <div class="featured-grid fade-in">
            <!-- Card 1 -->
            <div class="featured-card">
                <div class="featured-img-wrap">
                    <img src="https://theknockout.in/wp-content/uploads/2026/04/food-Main.png" alt="Knockout Burger">
                </div>
                <h3 class="featured-name">Knockout Burger</h3>
                <p class="featured-desc">Premium grilled chicken burger with fresh veggies and special sauce</p>
                <div class="featured-footer">
                    <div class="featured-stars">★★★★★ <span class="count">(120)</span></div>
                    <button class="btn-buy">Buy Now</button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="featured-card">
                <div class="featured-img-wrap">
                    <img src="https://theknockout.in/wp-content/uploads/2026/04/food-Main.png" alt="Victory Pizza">
                </div>
                <h3 class="featured-name">Victory Pizza</h3>
                <p class="featured-desc">Wood-fired pizza loaded with premium toppings and extra cheese</p>
                <div class="featured-footer">
                    <div class="featured-stars">★★★★★ <span class="count">(85)</span></div>
                    <button class="btn-buy">Buy Now</button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="featured-card">
                <div class="featured-img-wrap">
                    <img src="https://theknockout.in/wp-content/uploads/2026/04/food-Main.png" alt="Energy Bowl">
                </div>
                <h3 class="featured-name">Energy Bowl</h3>
                <p class="featured-desc">Protein-packed rice bowl with grilled chicken and fresh greens</p>
                <div class="featured-footer">
                    <div class="featured-stars">★★★★★ <span class="count">(92)</span></div>
                    <button class="btn-buy">Buy Now</button>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="featured-card">
                <div class="featured-img-wrap">
                    <img src="https://theknockout.in/wp-content/uploads/2026/04/food-Main.png" alt="Champs Dessert">
                </div>
                <h3 class="featured-name">Champs Dessert</h3>
                <p class="featured-desc">Rich chocolate cake with cream and fresh berries topping</p>
                <div class="featured-footer">
                    <div class="featured-stars">★★★★★ <span class="count">(64)</span></div>
                    <button class="btn-buy">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== WHY CHOOSE US ========== -->
<section class="section section-why-us">
    <div class="container">
        <div class="section-header fade-in">
            <h2 class="section-title">Why Choose Us?</h2>
            <p class="section-desc">Handpicked for quality and fast delivery to keep you fueled</p>
        </div>

        <div class="why-grid">
            <div class="why-card fade-in">
                <div class="why-icon">🥗</div>
                <h3 class="why-title">Serve Healthy Food</h3>
                <p class="why-text">Fresh ingredients, balanced nutrition, and zero compromise on quality.</p>
            </div>

            <div class="why-card fade-in">
                <div class="why-icon">✓</div>
                <h3 class="why-title">Best Quality</h3>
                <p class="why-text">Premium sourced ingredients, expert preparation, consistent excellence.</p>
            </div>

            <div class="why-card fade-in">
                <div class="why-icon">🚚</div>
                <h3 class="why-title">Fast Delivery</h3>
                <p class="why-text">Quick service right to your table. Fresh food, delivered hot and fast.</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== SPECIAL MENU ========== -->
<section class="section section-special">
    <div class="container">
        <div class="section-header fade-in">
            <h2 class="section-title">Special Menu</h2>
            <p class="section-desc">Our chef's handpicked specials that keep our guests coming back</p>
        </div>

        <div class="special-slider-container fade-in">
            <button class="slider-btn prev-btn">&#10094;</button>
            <div class="special-slider-viewport">
                <div class="special-slider-track" id="specialMenuSlider">
                    <!-- Special 1 -->
                    <div class="special-card slider-item">
                        <div class="special-img-wrap">
                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=400"
                                alt="Power Salad">
                        </div>
                        <h3 class="special-name">Power Salad</h3>
                        <div class="special-stars">★★★★★</div>
                        <p class="special-desc">A refreshing mix of seasonal greens, proteins, and premium dressing.</p>
                        <div class="special-footer">
                            <span class="special-price">$2.50</span>
                            <button class="btn-cart">+</button>
                        </div>
                    </div>

                    <!-- Special 2 -->
                    <div class="special-card slider-item">
                        <div class="special-img-wrap">
                            <img src="https://images.unsplash.com/photo-1525351484163-7529414344d8?w=400"
                                alt="Egg-Xtreme Masala">
                        </div>
                        <h3 class="special-name">Egg-Xtreme Masala</h3>
                        <div class="special-stars">★★★★★</div>
                        <p class="special-desc">A spicy, rich masala featuring perfectly cooked eggs and special herbs.
                        </p>
                        <div class="special-footer">
                            <span class="special-price">$3.40</span>
                            <button class="btn-cart">+</button>
                        </div>
                    </div>

                    <!-- Special 3 -->
                    <div class="special-card slider-item">
                        <div class="special-img-wrap">
                            <img src="https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?w=400"
                                alt="Fried Fish-n-Chips">
                        </div>
                        <h3 class="special-name">Fried Fish-n-Chips</h3>
                        <div class="special-stars">★★★★★</div>
                        <p class="special-desc">Classic crispy battered fish served with golden fries and tartar sauce.
                        </p>
                        <div class="special-footer">
                            <span class="special-price">$4.00</span>
                            <button class="btn-cart">+</button>
                        </div>
                    </div>

                    <!-- Duplicate for slider loop effect -->
                    <!-- Special 4 -->
                    <div class="special-card slider-item">
                        <div class="special-img-wrap">
                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=400"
                                alt="Power Salad">
                        </div>
                        <h3 class="special-name">Power Salad</h3>
                        <div class="special-stars">★★★★★</div>
                        <p class="special-desc">A refreshing mix of seasonal greens, proteins, and premium dressing.</p>
                        <div class="special-footer">
                            <span class="special-price">$2.50</span>
                            <button class="btn-cart">+</button>
                        </div>
                    </div>

                    <!-- Special 5 -->
                    <div class="special-card slider-item">
                        <div class="special-img-wrap">
                            <img src="https://images.unsplash.com/photo-1525351484163-7529414344d8?w=400"
                                alt="Egg-Xtreme Masala">
                        </div>
                        <h3 class="special-name">Egg-Xtreme Masala</h3>
                        <div class="special-stars">★★★★★</div>
                        <p class="special-desc">A spicy, rich masala featuring perfectly cooked eggs and special herbs.
                        </p>
                        <div class="special-footer">
                            <span class="special-price">$3.40</span>
                            <button class="btn-cart">+</button>
                        </div>
                    </div>

                    <!-- Special 6 -->
                    <div class="special-card slider-item">
                        <div class="special-img-wrap">
                            <img src="https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?w=400"
                                alt="Fried Fish-n-Chips">
                        </div>
                        <h3 class="special-name">Fried Fish-n-Chips</h3>
                        <div class="special-stars">★★★★★</div>
                        <p class="special-desc">Classic crispy battered fish served with golden fries and tartar sauce.
                        </p>
                        <div class="special-footer">
                            <span class="special-price">$4.00</span>
                            <button class="btn-cart">+</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="slider-btn next-btn">&#10095;</button>
        </div>
    </div>
</section>

<!-- ========== OUR REGULAR FOOD (6 cards) ========== -->
<section class="section" id="menu">
    <div class="container">
        <div class="section-header fade-in">
            <h2 class="section-title">Our Regular Food</h2>
            <p class="section-desc">Fresh daily preparations crafted with care and premium ingredients</p>
        </div>

        <div class="regular-slider-container fade-in">
            <button class="slider-btn prev-btn regular-prev-btn">&#10094;</button>
            <div class="regular-slider-viewport">
                <div class="regular-slider-track" id="regularMenuSlider">
                    <!-- Slide 1 -->
                    <div class="regular-slider-item">
                        <div class="regular-grid">
                            <!-- Row 1 -->
                            <div class="regular-card">
                                <div class="regular-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=400"
                                        alt="Salads">
                                </div>
                                <h3 class="regular-name">Salads</h3>
                                <div class="regular-stars">★★★★★ <span class="count">(36)</span></div>
                                <p class="regular-desc">Fresh green salad with mixed vegetables and house dressing</p>
                                <div class="regular-footer">
                                    <span class="regular-price">$0.35</span>
                                    <button class="btn-buy-regular">Buy Now</button>
                                </div>
                            </div>

                            <div class="regular-card">
                                <div class="regular-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1603894584373-5ac82b2ae398?w=400"
                                        alt="Chicken Masala">
                                </div>
                                <h3 class="regular-name">Chicken Masala</h3>
                                <div class="regular-stars">★★★★★ <span class="count">(86)</span></div>
                                <p class="regular-desc">Rich and creamy chicken curry with aromatic spices</p>
                                <div class="regular-footer">
                                    <span class="regular-price">$4.00</span>
                                    <button class="btn-buy-regular">Buy Now</button>
                                </div>
                            </div>

                            <div class="regular-card">
                                <div class="regular-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1606491956689-2ea866880c84?w=400"
                                        alt="Mutton Kheema">
                                </div>
                                <h3 class="regular-name">Mutton Kheema</h3>
                                <div class="regular-stars">★★★★★ <span class="count">(36)</span></div>
                                <p class="regular-desc">Traditional spiced minced mutton with fresh herbs</p>
                                <div class="regular-footer">
                                    <span class="regular-price">$4.00</span>
                                    <button class="btn-buy-regular">Buy Now</button>
                                </div>
                            </div>

                            <!-- Row 2 -->
                            <div class="regular-card">
                                <div class="regular-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1551183053-bf91b1dca034?w=400"
                                        alt="Beef Pasta">
                                </div>
                                <h3 class="regular-name">Beef Pasta</h3>
                                <div class="regular-stars">★★★★★ <span class="count">(45)</span></div>
                                <p class="regular-desc">Creamy pasta with tender beef chunks and parmesan</p>
                                <div class="regular-footer">
                                    <span class="regular-price">$3.00</span>
                                    <button class="btn-buy-regular">Buy Now</button>
                                </div>
                            </div>

                            <div class="regular-card">
                                <div class="regular-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?w=400"
                                        alt="Chicken Fry">
                                </div>
                                <h3 class="regular-name">Chicken Fry</h3>
                                <div class="regular-stars">★★★★★ <span class="count">(56)</span></div>
                                <p class="regular-desc">Crispy fried chicken with our signature spice blend</p>
                                <div class="regular-footer">
                                    <span class="regular-price">$3.00</span>
                                    <button class="btn-buy-regular">Buy Now</button>
                                </div>
                            </div>

                            <div class="regular-card">
                                <div class="regular-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?w=400"
                                        alt="Special Dessert">
                                </div>
                                <h3 class="regular-name">Special Dessert</h3>
                                <div class="regular-stars">★★★★★ <span class="count">(75)</span></div>
                                <p class="regular-desc">Decadent chocolate dessert with fresh cream and berries</p>
                                <div class="regular-footer">
                                    <span class="regular-price">$3.50</span>
                                    <button class="btn-buy-regular">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="regular-slider-item">
                        <div class="regular-grid">
                            <!-- Repeating existing cards for scroll effect -->
                            <div class="regular-card">
                                <div class="regular-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=400"
                                        alt="Salads">
                                </div>
                                <h3 class="regular-name">Salads</h3>
                                <div class="regular-stars">★★★★★ <span class="count">(36)</span></div>
                                <p class="regular-desc">Fresh green salad with mixed vegetables and house dressing</p>
                                <div class="regular-footer">
                                    <span class="regular-price">$0.35</span>
                                    <button class="btn-buy-regular">Buy Now</button>
                                </div>
                            </div>
                            <div class="regular-card">
                                <div class="regular-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1603894584373-5ac82b2ae398?w=400"
                                        alt="Chicken Masala">
                                </div>
                                <h3 class="regular-name">Chicken Masala</h3>
                                <div class="regular-stars">★★★★★ <span class="count">(86)</span></div>
                                <p class="regular-desc">Rich and creamy chicken curry with aromatic spices</p>
                                <div class="regular-footer">
                                    <span class="regular-price">$4.00</span>
                                    <button class="btn-buy-regular">Buy Now</button>
                                </div>
                            </div>
                            <div class="regular-card">
                                <div class="regular-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1606491956689-2ea866880c84?w=400"
                                        alt="Mutton Kheema">
                                </div>
                                <h3 class="regular-name">Mutton Kheema</h3>
                                <div class="regular-stars">★★★★★ <span class="count">(36)</span></div>
                                <p class="regular-desc">Traditional spiced minced mutton with fresh herbs</p>
                                <div class="regular-footer">
                                    <span class="regular-price">$4.00</span>
                                    <button class="btn-buy-regular">Buy Now</button>
                                </div>
                            </div>
                            <div class="regular-card">
                                <div class="regular-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1551183053-bf91b1dca034?w=400"
                                        alt="Beef Pasta">
                                </div>
                                <h3 class="regular-name">Beef Pasta</h3>
                                <div class="regular-stars">★★★★★ <span class="count">(45)</span></div>
                                <p class="regular-desc">Creamy pasta with tender beef chunks and parmesan</p>
                                <div class="regular-footer">
                                    <span class="regular-price">$3.00</span>
                                    <button class="btn-buy-regular">Buy Now</button>
                                </div>
                            </div>
                            <div class="regular-card">
                                <div class="regular-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?w=400"
                                        alt="Chicken Fry">
                                </div>
                                <h3 class="regular-name">Chicken Fry</h3>
                                <div class="regular-stars">★★★★★ <span class="count">(56)</span></div>
                                <p class="regular-desc">Crispy fried chicken with our signature spice blend</p>
                                <div class="regular-footer">
                                    <span class="regular-price">$3.00</span>
                                    <button class="btn-buy-regular">Buy Now</button>
                                </div>
                            </div>
                            <div class="regular-card">
                                <div class="regular-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?w=400"
                                        alt="Special Dessert">
                                </div>
                                <h3 class="regular-name">Special Dessert</h3>
                                <div class="regular-stars">★★★★★ <span class="count">(75)</span></div>
                                <p class="regular-desc">Decadent chocolate dessert with fresh cream and berries</p>
                                <div class="regular-footer">
                                    <span class="regular-price">$3.50</span>
                                    <button class="btn-buy-regular">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="slider-btn next-btn regular-next-btn">&#10095;</button>
        </div>
    </div>
</section>

<!-- ========== OUR SPECIAL CHEF ========== -->
<section class="section section-chef">
    <div class="container">
        <div class="section-header fade-in">
            <h2 class="section-title">OUR SPECIAL CHEF</h2>
            <p class="section-desc">Pactiser Inomrat the mons of toa gusrttie pero protaems.<br>Regalancd your havior
            </p>
        </div>

        <div class="chefs-grid">
            <div class="chef-card fade-in">
                <div class="chef-img-wrap">
                    <img src="https://theknockout.in/wp-content/uploads/2026/04/Untitled-design-9.png"
                        alt="Chef Marcus">
                </div>
            </div>

            <div class="chef-card fade-in">
                <div class="chef-img-wrap">
                    <img src="https://theknockout.in/wp-content/uploads/2026/04/Untitled-design-11.png"
                        alt="Chef Sarah">
                </div>
            </div>

            <div class="chef-card fade-in">
                <div class="chef-img-wrap">
                    <img src="https://theknockout.in/wp-content/uploads/2026/04/Untitled-design-10.png"
                        alt="Chef Antonio">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== FINAL CTA ========== -->
<section class="final-cta">
    <h2>Ready To <span class="highlight">Fuel Your Game?</span></h2>
    <p>Explore our full menu and power up your experience.</p>
    <button class="btn-menu-large">[ View Full Menu ]</button>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

        // Carousel dots interaction
        document.querySelectorAll('.carousel-dots').forEach(dotsContainer => {
            const dots = dotsContainer.querySelectorAll('.dot');
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    dots.forEach(d => d.classList.remove('active'));
                    dot.classList.add('active');
                });
            });
        });

        // Special Menu Slider Logic
        const specialSliderTrack = document.getElementById('specialMenuSlider');
        if (specialSliderTrack) {
            const items = specialSliderTrack.querySelectorAll('.slider-item');
            const prevBtn = document.querySelector('.prev-btn');
            const nextBtn = document.querySelector('.next-btn');

            let index = 0;
            const totalItems = items.length;

            function updateSlider() {
                const itemWidth = items[0].offsetWidth;
                const gap = 25; // CSS gap
                let itemsInView = window.innerWidth <= 768 ? 1 : window.innerWidth <= 1024 ? 2 : 3;

                const maxIndex = totalItems - itemsInView;
                if (index > maxIndex) index = 0;
                if (index < 0) index = maxIndex;

                const offset = index * (itemWidth + gap);
                specialSliderTrack.style.transform = `translateX(-${offset}px)`;
            }

            if (nextBtn && prevBtn) {
                nextBtn.addEventListener('click', () => { index++; updateSlider(); });
                prevBtn.addEventListener('click', () => { index--; updateSlider(); });
            }

            // Auto slide every 3 sec
            setInterval(() => {
                index++;
                updateSlider();
            }, 3000);

            window.addEventListener('resize', updateSlider);
            updateSlider();
        }

        // Regular Menu Slider Logic
        const regularSliderTrack = document.getElementById('regularMenuSlider');
        if (regularSliderTrack) {
            const items = regularSliderTrack.querySelectorAll('.regular-slider-item');
            const prevBtn = document.querySelector('.regular-prev-btn');
            const nextBtn = document.querySelector('.regular-next-btn');

            let index = 0;
            const totalItems = items.length;

            function updateRegularSlider() {
                const itemWidth = items[0].offsetWidth;
                const gap = 0; // Outer container handles it

                const maxIndex = totalItems - 1; // 1 item (the 6-card grid) per slide
                if (index > maxIndex) index = 0;
                if (index < 0) index = maxIndex;

                const offset = index * (itemWidth + gap);
                regularSliderTrack.style.transform = `translateX(-${offset}px)`;
            }

            if (nextBtn && prevBtn) {
                nextBtn.addEventListener('click', () => { index++; updateRegularSlider(); });
                prevBtn.addEventListener('click', () => { index--; updateRegularSlider(); });
            }

            setInterval(() => {
                index++;
                updateRegularSlider();
            }, 5000);

            window.addEventListener('resize', updateRegularSlider);
            updateRegularSlider();
        }

        // Buy Now Modal Logic
        const buyBtns = document.querySelectorAll('.btn-buy, .btn-buy-regular');
        const modal = document.getElementById('buy-now-modal');
        const closeBtn = document.querySelector('.modal-close');

        if (modal) {
            buyBtns.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    modal.classList.add('active');
                });
            });

            closeBtn.addEventListener('click', function () {
                modal.classList.remove('active');
            });

            window.addEventListener('click', function (e) {
                if (e.target === modal) {
                    modal.classList.remove('active');
                }
            });
        }
    });
</script>

<!-- ========== BUY NOW MODAL ========== -->
<div id="buy-now-modal" class="modal-overlay">
    <div class="modal-content">
        <button class="modal-close">&times;</button>
        <h3>Under Construction</h3>
        <p>Online buying of food/drinks is currently under construction. Please order from the food counter directly.
        </p>
    </div>
</div>

<style>
    /* Modal CSS */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 10000;
    }

    .modal-overlay.active {
        display: flex;
    }

    .modal-content {
        background: var(--bg-card);
        backdrop-filter: blur(10px);
        border: 1px solid var(--neon-green);
        padding: 30px;
        border-radius: 16px;
        max-width: 400px;
        text-align: center;
        position: relative;
        box-shadow: 0 0 30px rgba(174, 208, 52, 0.2);
    }

    .modal-content h3 {
        color: var(--neon-green);
        margin-bottom: 15px;
    }

    .modal-content p {
        color: var(--text-white);
    }

    .modal-close {
        position: absolute;
        top: 10px;
        right: 15px;
        background: transparent;
        border: none;
        color: var(--text-white);
        font-size: 1.5rem;
        cursor: pointer;
    }

    .modal-close:hover {
        color: var(--neon-green);
    }
</style>

<?php get_footer(); ?>