<?php
/**
 * Template Name: Disclaimer Page
 * Description: Knockout's official Disclaimer with modern design
 */

get_header();
?>

<style>
    /* =========================================
   DISCLAIMER PAGE STYLES
   ========================================= */

    :root {
        --disc-dark: #0A0A0F;
        --disc-darker: #050508;
        --disc-gold: #FFD700;
        --disc-green: #B0D136;
        --disc-cyan: #00D4FF;
        --disc-purple: #9b4dff;
        --disc-red: #ff4444;
        --disc-orange: #ff884d;
        --disc-glow: rgba(176, 209, 54, 0.3);
        --disc-text: rgba(255, 255, 255, 0.85);
        --disc-text-dim: rgba(255, 255, 255, 0.6);
        --font-alphacorsa: 'Alphacorsa Personal Use', cursive;
        --font-body: 'Barlow Condensed', sans-serif;
    }

    /* Page Container */
    .page-template-page-disclaimer {
        background: linear-gradient(135deg, var(--disc-dark) 0%, #0f0f1a 50%, var(--disc-dark) 100%);
        overflow-x: hidden;
    }

    .disclaimer-page {
        position: relative;
        min-height: 100vh;
    }

    /* Background Effects */
    .disclaimer-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 0;
    }

    .disclaimer-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
    }

    .disclaimer-glow--1 {
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(176, 209, 54, 0.08), transparent);
        top: -200px;
        right: -200px;
        animation: floatGlow 20s ease-in-out infinite alternate;
    }

    .disclaimer-glow--2 {
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(255, 68, 68, 0.05), transparent);
        bottom: -150px;
        left: -150px;
        animation: floatGlow 25s ease-in-out infinite alternate-reverse;
    }

    .disclaimer-glow--3 {
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(255, 215, 0, 0.05), transparent);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: pulseGlow 15s ease-in-out infinite;
    }

    .disclaimer-grid {
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(176, 209, 54, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(176, 209, 54, 0.03) 1px, transparent 1px);
        background-size: 40px 40px;
    }

    /* Main Container */
    .disclaimer-container {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        padding: 120px 20px 80px;
        z-index: 2;
    }

    /* Header Section */
    .disclaimer-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .disclaimer-badge {
        display: inline-block;
        font-family: var(--font-body);
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 4px;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, var(--disc-green), var(--disc-cyan));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: fadeInDown 1s ease-out;
    }

    .disclaimer-title {
        font-family: var(--font-alphacorsa);
        font-size: clamp(2.5rem, 6vw, 4.5rem);
        font-weight: 400;
        color: #ffffff;
        margin-bottom: 1rem;
        text-transform: uppercase;
        animation: fadeInUp 1s ease-out 0.2s backwards;
    }

    .disclaimer-title .gradient-text {
        background: linear-gradient(135deg, var(--disc-green), var(--disc-gold), var(--disc-cyan));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .disclaimer-subtitle {
        color: var(--disc-text-dim);
        font-size: 1.1rem;
        font-family: var(--font-body);
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
        animation: fadeInUp 1s ease-out 0.4s backwards;
    }

    .disclaimer-divider {
        width: 120px;
        height: 3px;
        background: linear-gradient(90deg, var(--disc-green), var(--disc-gold), var(--disc-cyan));
        margin: 30px auto 0;
        border-radius: 3px;
        box-shadow: 0 0 20px var(--disc-glow);
        animation: scaleIn 1s ease-out 0.6s backwards;
    }

    /* Important Notice Banner */
    .important-notice {
        background: linear-gradient(135deg, rgba(255, 68, 68, 0.15), rgba(255, 215, 0, 0.1));
        border: 1px solid rgba(255, 68, 68, 0.3);
        border-radius: 20px;
        padding: 25px 35px;
        margin-bottom: 50px;
        text-align: center;
        position: relative;
        overflow: hidden;
        backdrop-filter: blur(10px);
    }

    .important-notice::before {
        content: '⚠️';
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 3rem;
        opacity: 0.1;
    }

    .notice-title {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-family: var(--font-alphacorsa);
        font-size: 1.5rem;
        color: var(--disc-red);
        margin-bottom: 15px;
    }

    .notice-text {
        color: var(--disc-text);
        font-family: var(--font-body);
        font-size: 1rem;
        line-height: 1.6;
        margin: 0;
    }

    /* Sidebar Navigation */
    .disclaimer-sidebar {
        position: sticky;
        top: 100px;
        background: rgba(10, 10, 15, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(176, 209, 54, 0.2);
        border-radius: 20px;
        padding: 20px 0;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .sidebar-title {
        font-family: var(--font-alphacorsa);
        font-size: 1.3rem;
        color: var(--disc-green);
        padding: 0 20px 15px;
        border-bottom: 1px solid rgba(176, 209, 54, 0.2);
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .disclaimer-nav {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .disclaimer-nav li {
        border-left: 3px solid transparent;
        transition: all 0.3s ease;
    }

    .disclaimer-nav li.active {
        border-left-color: var(--disc-green);
        background: rgba(176, 209, 54, 0.1);
    }

    .disclaimer-nav li a {
        display: block;
        padding: 10px 20px;
        color: var(--disc-text-dim);
        text-decoration: none;
        font-family: var(--font-body);
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .disclaimer-nav li:hover a,
    .disclaimer-nav li.active a {
        color: var(--disc-green);
        padding-left: 25px;
    }

    /* Main Content Grid */
    .disclaimer-grid-layout {
        display: grid;
        grid-template-columns: 280px 1fr;
        gap: 40px;
        margin-top: 30px;
    }

    /* Content Styles */
    .disclaimer-content {
        background: rgba(10, 10, 15, 0.5);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(176, 209, 54, 0.15);
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    /* Section Styles */
    .disclaimer-section {
        margin-bottom: 50px;
        scroll-margin-top: 100px;
    }

    .disclaimer-section:last-child {
        margin-bottom: 0;
    }

    .section-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid rgba(176, 209, 54, 0.2);
    }

    .section-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, rgba(176, 209, 54, 0.15), rgba(0, 212, 255, 0.1));
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        border: 1px solid rgba(176, 209, 54, 0.3);
    }

    .section-title {
        font-family: var(--font-alphacorsa);
        font-size: 1.8rem;
        font-weight: 400;
        color: #ffffff;
        margin: 0;
        letter-spacing: 1px;
    }

    .section-subtitle {
        color: var(--disc-green);
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 5px;
    }

    /* Content Lists */
    .content-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .content-list li {
        position: relative;
        padding: 12px 0 12px 30px;
        color: var(--disc-text);
        font-family: var(--font-body);
        font-size: 1rem;
        line-height: 1.6;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .content-list li:last-child {
        border-bottom: none;
    }

    .content-list li::before {
        content: "▹";
        position: absolute;
        left: 0;
        color: var(--disc-green);
        font-size: 1rem;
    }

    /* Warning Box */
    .warning-box {
        background: linear-gradient(135deg, rgba(255, 68, 68, 0.15), rgba(255, 68, 68, 0.05));
        border-left: 4px solid var(--disc-red);
        border-radius: 12px;
        padding: 20px 25px;
        margin: 20px 0;
    }

    .warning-box p {
        margin: 0;
        font-family: var(--font-body);
        font-size: 1rem;
        color: var(--disc-text);
    }

    .warning-box strong {
        color: var(--disc-red);
    }

    /* Info Box */
    .info-box {
        background: linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(176, 209, 54, 0.05));
        border-left: 4px solid var(--disc-cyan);
        border-radius: 12px;
        padding: 20px 25px;
        margin: 20px 0;
    }

    .info-box p {
        margin: 0;
        font-family: var(--font-body);
        font-size: 1rem;
        color: var(--disc-text);
    }

    .info-box strong {
        color: var(--disc-cyan);
    }

    /* Highlight Text */
    .highlight-green {
        color: var(--disc-green);
        font-weight: 600;
    }

    .highlight-gold {
        color: var(--disc-gold);
        font-weight: 600;
    }

    /* Badge Tags */
    .badge-tag {
        display: inline-block;
        background: rgba(255, 68, 68, 0.15);
        border: 1px solid rgba(255, 68, 68, 0.3);
        padding: 2px 10px;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 700;
        color: var(--disc-red);
        margin-left: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .badge-tag-green {
        background: rgba(176, 209, 54, 0.15);
        border-color: rgba(176, 209, 54, 0.3);
        color: var(--disc-green);
    }

    /* Sub-lists */
    .sub-list {
        list-style: none;
        padding: 0;
        margin: 10px 0 0 25px;
    }

    .sub-list li {
        padding: 6px 0 6px 25px;
        border-bottom: none;
        font-size: 0.95rem;
        color: var(--disc-text-dim);
    }

    .sub-list li::before {
        content: "•";
        font-size: 0.8rem;
    }

    /* Two Column Layout */
    .two-columns {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-top: 15px;
    }

    /* Contact Section */
    .contact-section {
        margin-top: 40px;
        padding: 30px;
        background: linear-gradient(135deg, rgba(176, 209, 54, 0.08), rgba(0, 212, 255, 0.05));
        border-radius: 20px;
        border: 1px solid rgba(176, 209, 54, 0.2);
        text-align: center;
    }

    .contact-section h3 {
        font-family: var(--font-alphacorsa);
        font-size: 1.5rem;
        color: var(--disc-gold);
        margin-bottom: 20px;
    }

    .contact-details {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
    }

    .contact-item {
        text-align: center;
    }

    .contact-icon {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    .contact-item p {
        color: var(--disc-text);
        font-family: var(--font-body);
        font-size: 0.95rem;
        margin: 5px 0;
    }

    .contact-item strong {
        color: var(--disc-green);
    }

    /* Footer Note */
    .disclaimer-footer-note {
        margin-top: 40px;
        padding: 25px;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 16px;
        text-align: center;
        border: 1px solid rgba(176, 209, 54, 0.15);
    }

    .disclaimer-footer-note p {
        margin: 0;
        font-family: var(--font-body);
        font-size: 0.85rem;
        color: var(--disc-text-dim);
        line-height: 1.6;
    }

    .disclaimer-footer-note strong {
        color: var(--disc-green);
    }

    /* Animations */
    @keyframes floatGlow {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
            opacity: 0.3;
        }

        50% {
            transform: translate(30px, 20px) scale(1.1);
            opacity: 0.5;
        }
    }

    @keyframes pulseGlow {

        0%,
        100% {
            opacity: 0.2;
            transform: translate(-50%, -50%) scale(1);
        }

        50% {
            opacity: 0.4;
            transform: translate(-50%, -50%) scale(1.2);
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scaleX(0);
        }

        to {
            opacity: 1;
            transform: scaleX(1);
        }
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .disclaimer-grid-layout {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .disclaimer-sidebar {
            position: static;
            display: none;
        }

        .disclaimer-content {
            padding: 30px;
        }

        .section-title {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .disclaimer-container {
            padding: 100px 15px 60px;
        }

        .disclaimer-header {
            margin-bottom: 40px;
        }

        .disclaimer-title {
            font-size: 2rem;
        }

        .disclaimer-subtitle {
            font-size: 1rem;
        }

        .disclaimer-content {
            padding: 25px;
        }

        .section-header {
            gap: 10px;
        }

        .section-icon {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }

        .section-title {
            font-size: 1.3rem;
        }

        .two-columns {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .important-notice {
            padding: 20px;
        }

        .notice-title {
            font-size: 1.2rem;
        }

        .contact-details {
            flex-direction: column;
            gap: 20px;
        }
    }

    @media (max-width: 480px) {
        .disclaimer-title {
            font-size: 1.6rem;
        }

        .disclaimer-badge {
            font-size: 0.7rem;
            letter-spacing: 3px;
        }

        .disclaimer-content {
            padding: 20px;
        }

        .section-title {
            font-size: 1.2rem;
        }

        .content-list li {
            font-size: 0.85rem;
            padding: 10px 0 10px 25px;
        }

        .warning-box,
        .info-box {
            padding: 15px;
        }
    }

    /* Print Styles */
    @media print {

        .disclaimer-sidebar,
        .disclaimer-bg,
        .important-notice .notice-title span:first-child {
            display: none;
        }

        .disclaimer-content {
            background: white;
            color: black;
            padding: 0;
        }

        .disclaimer-page {
            background: white;
        }

        .section-title {
            color: black;
        }

        .content-list li {
            color: #333;
        }
    }
</style>

<div class="disclaimer-page">
    <div class="disclaimer-bg">
        <div class="disclaimer-glow disclaimer-glow--1"></div>
        <div class="disclaimer-glow disclaimer-glow--2"></div>
        <div class="disclaimer-glow disclaimer-glow--3"></div>
        <div class="disclaimer-grid"></div>
    </div>

    <div class="disclaimer-container">
        <!-- Header -->
        <div class="disclaimer-header">
            <span class="disclaimer-badge">📋 LEGAL DOCUMENT</span>
            <h1 class="disclaimer-title"><span class="gradient-text">Disclaimer</span></h1>
            <p class="disclaimer-subtitle">Please read this disclaimer carefully before using our services,
                participating in activities, or consuming food/beverages at Knockout. By entering our premises,
                accessing our website, or booking our services, you acknowledge and agree to the terms outlined below.
            </p>
            <div class="disclaimer-divider"></div>
        </div>

        <!-- Important Notice Banner -->
        <div class="important-notice">
            <div class="notice-title">
                <span>⚠️</span> IMPORTANT NOTICE
                <span>⚠️</span>
            </div>
            <p class="notice-text">This document contains important legal information regarding your rights,
                liabilities, and responsibilities while using Knockout's facilities and services. Please read carefully
                before proceeding.</p>
        </div>

        <!-- Main Grid -->
        <div class="disclaimer-grid-layout">
            <!-- Sidebar Navigation -->
            <aside class="disclaimer-sidebar">
                <h3 class="sidebar-title">Quick Navigation</h3>
                <ul class="disclaimer-nav">
                    <li><a href="#general">General Disclaimer</a></li>
                    <li><a href="#food-beverage">Food & Beverage</a></li>
                    <li><a href="#activities">Sports & Gaming</a></li>
                    <li><a href="#real-shooting">Real Bullet Shooting</a></li>
                    <li><a href="#website">Website & Digital</a></li>
                    <li><a href="#liability">Limitation of Liability</a></li>
                    <li><a href="#privacy">Privacy & Data</a></li>
                    <li><a href="#intellectual">Intellectual Property</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </aside>

            <!-- Main Content -->
            <div class="disclaimer-content">
                <!-- Section 1: General Disclaimer -->
                <div id="general" class="disclaimer-section">
                    <div class="section-header">
                        <div class="section-icon">🔐</div>
                        <div>
                            <h2 class="section-title">General Disclaimer</h2>
                            <div class="section-subtitle">Section 1</div>
                        </div>
                    </div>

                    <h3 style="color: var(--disc-green); margin: 20px 0 10px; font-family: var(--font-body);">1.1 No
                        Professional Advice</h3>
                    <ul class="content-list">
                        <li>The content on this website and at our venue is for general informational and entertainment
                            purposes only. It does not constitute professional advice (legal, medical, financial, or
                            otherwise). Always consult qualified professionals for specific guidance.</li>
                    </ul>

                    <h3 style="color: var(--disc-green); margin: 20px 0 10px; font-family: var(--font-body);">1.2
                        Accuracy of Information</h3>
                    <ul class="content-list">
                        <li>While we strive to keep information accurate and up-to-date, Knockout makes no
                            representations or warranties regarding the completeness, reliability, or accuracy of menu
                            items, pricing, activity schedules, promotional offers, or third-party content linked from
                            our website.</li>
                    </ul>

                    <h3 style="color: var(--disc-green); margin: 20px 0 10px; font-family: var(--font-body);">1.3 Right
                        to Modify</h3>
                    <ul class="content-list">
                        <li>We reserve the right to modify, suspend, or discontinue any aspect of our services, menu,
                            activities, or website content at any time without prior notice.</li>
                    </ul>
                </div>

                <!-- Section 2: Food & Beverage Disclaimer -->
                <div id="food-beverage" class="disclaimer-section">
                    <div class="section-header">
                        <div class="section-icon">🍽️</div>
                        <div>
                            <h2 class="section-title">Food & Beverage Disclaimer</h2>
                            <div class="section-subtitle">Section 2</div>
                        </div>
                    </div>

                    <div class="warning-box">
                        <p><strong>⚠️ ALLERGEN & DIETARY INFORMATION:</strong> Our kitchen handles common allergens
                            including gluten, dairy, nuts, soy, eggs, seafood, and mustard. While we take precautions,
                            <strong>CROSS-CONTAMINATION cannot be guaranteed</strong> against shared preparation areas.
                            Guests with severe allergies, dietary restrictions, or medical conditions MUST inform staff
                            BEFORE ordering. Knockout shall not be liable for allergic reactions, food sensitivities, or
                            adverse health effects arising from consumption.</p>
                    </div>

                    <h3 style="color: var(--disc-green); margin: 20px 0 10px; font-family: var(--font-body);">2.2 Food
                        Safety & Consumption</h3>
                    <ul class="content-list">
                        <li>All food is prepared following FSSAI guidelines and standard hygiene protocols.</li>
                        <li>Consuming raw or undercooked meats, seafood, eggs, or unpasteurized products may increase
                            risk of foodborne illness.</li>
                        <li>Guests consume food and beverages at their own risk.</li>
                    </ul>

                    <div class="warning-box">
                        <p><strong>🍺 ALCOHOL CONSUMPTION WARNING:</strong> Alcohol service is strictly limited to
                            persons 21+ years with valid government ID (as per State Excise Act). Knockout follows
                            "Responsible Service of Alcohol" protocols. Staff may refuse service to visibly intoxicated
                            persons. Drinking and driving is illegal and dangerous. <strong>Knockout is NOT LIABLE for
                                any accidents, injuries, legal consequences, or damages arising from alcohol consumption
                                by guests.</strong> Management reserves the right to deny entry or remove any person
                            under the influence of alcohol or drugs.</p>
                    </div>
                </div>

                <!-- Section 3: Sports, Gaming & Activity Disclaimer -->
                <div id="activities" class="disclaimer-section">
                    <div class="section-header">
                        <div class="section-icon">🎯</div>
                        <div>
                            <h2 class="section-title">Sports, Gaming & Activity Disclaimer</h2>
                            <div class="section-subtitle">Section 3</div>
                        </div>
                    </div>

                    <div class="warning-box">
                        <p><strong>⚠️ WAIVER OF LIABILITY:</strong> By participating in any activity at Knockout
                            (including but not limited to: Bowling, Laser Tag, Archery, Rifle Shooting, Real Bullet
                            Shooting, Trampoline, Simulators, Digital Sports), you expressly agree that:</p>
                        <ul class="sub-list" style="margin-top: 10px;">
                            <li>Participation is VOLUNTARY and undertaken at your OWN RISK.</li>
                            <li>You acknowledge the inherent risks of physical activity, including but not limited to:
                                slips, falls, collisions, equipment malfunction, strain, or injury.</li>
                            <li>You are physically fit and have no medical condition that would prevent safe
                                participation.</li>
                            <li>You agree to follow all safety instructions, wear provided protective gear, and comply
                                with staff directions.</li>
                        </ul>
                    </div>

                    <h3 style="color: var(--disc-green); margin: 20px 0 10px; font-family: var(--font-body);">3.3
                        Equipment & Facility Use</h3>
                    <ul class="content-list">
                        <li>All equipment is maintained per manufacturer guidelines and inspected regularly.</li>
                        <li>Misuse, tampering, or reckless behavior with equipment may result in immediate expulsion
                            from the activity/venue, financial liability for damages, or legal action if warranted.</li>
                        <li>Knockout is not liable for injuries arising from participant negligence or failure to follow
                            instructions.</li>
                    </ul>

                    <div class="info-box">
                        <p><strong>👶 FOR PARTICIPANTS UNDER 18:</strong> Parent/Legal Guardian must accompany minors
                            for most activities. Guardian must sign a Minor Participation Waiver on behalf of the child.
                            Guardian acknowledges risks and assumes full responsibility for minor's safety and conduct.
                            Certain activities (Real Bullet Shooting, high-intensity simulators) have higher age limits
                            – check with staff.</p>
                    </div>
                </div>

                <!-- Section 4: Real Bullet Shooting - SPECIAL DISCLAIMER -->
                <div id="real-shooting" class="disclaimer-section">
                    <div class="section-header">
                        <div class="section-icon">🔫</div>
                        <div>
                            <h2 class="section-title">Real Bullet Shooting</h2>
                            <div class="section-subtitle">HIGH-RISK ACTIVITY NOTICE</div>
                        </div>
                    </div>

                    <div class="warning-box">
                        <p><strong>🔫 SPECIAL DISCLAIMER:</strong> Real Bullet Shooting is an advanced activity with
                            elevated risks. Additional terms apply:</p>
                        <ul class="sub-list" style="margin-top: 10px;">
                            <li>Mandatory valid government ID + age verification (minimum 21 years).</li>
                            <li>Mandatory safety briefing and supervision by certified range instructor.</li>
                            <li>Zero tolerance for alcohol/drug influence before or during shooting.</li>
                            <li>Participants must sign a separate, detailed Liability Waiver before participation.</li>
                            <li>Knockout provides safety equipment and protocols but CANNOT guarantee against accidental
                                injury, equipment failure, or human error.</li>
                            <li><strong>By participating, you RELEASE, WAIVE, and DISCHARGE Knockout, its owners, staff,
                                    and affiliates from ANY liability for personal injury, property damage, or wrongful
                                    death arising from this activity.</strong></li>
                        </ul>
                    </div>
                </div>

                <!-- Section 5: Website & Digital Content Disclaimer -->
                <div id="website" class="disclaimer-section">
                    <div class="section-header">
                        <div class="section-icon">🌐</div>
                        <div>
                            <h2 class="section-title">Website & Digital Content</h2>
                            <div class="section-subtitle">Section 4</div>
                        </div>
                    </div>

                    <h3 style="color: var(--disc-green); margin: 20px 0 10px; font-family: var(--font-body);">4.1
                        External Links</h3>
                    <ul class="content-list">
                        <li>Our website may contain links to third-party websites. Knockout does not control, endorse,
                            or guarantee the content, privacy policies, or practices of external sites and is not
                            responsible for any damage or loss arising from your use of third-party sites.</li>
                    </ul>

                    <h3 style="color: var(--disc-green); margin: 20px 0 10px; font-family: var(--font-body);">4.2
                        User-Generated Content</h3>
                    <ul class="content-list">
                        <li>If you submit reviews, photos, comments, or other content to our website or social media,
                            you grant Knockout a non-exclusive, royalty-free license to use, reproduce, or display such
                            content for promotional purposes. Knockout reserves the right to remove any content deemed
                            inappropriate, offensive, or violating our policies.</li>
                    </ul>
                </div>

                <!-- Section 6: Limitation of Liability -->
                <div id="liability" class="disclaimer-section">
                    <div class="section-header">
                        <div class="section-icon">⚖️</div>
                        <div>
                            <h2 class="section-title">Limitation of Liability</h2>
                            <div class="section-subtitle">Section 5</div>
                        </div>
                    </div>

                    <div class="warning-box">
                        <p><strong>TO THE MAXIMUM EXTENT PERMITTED BY LAW:</strong> IN NO EVENT SHALL KNOCKOUT, ITS
                            OWNERS, DIRECTORS, EMPLOYEES, OR AFFILIATES BE LIABLE FOR any indirect, incidental, special,
                            consequential, or punitive damages; loss of profits, data, revenue, or business
                            opportunities; personal injury, property damage, or emotional distress; claims arising from
                            your use or inability to use our services, unauthorized access to our systems, or
                            third-party conduct at our venue.</p>
                        <p style="margin-top: 15px;"><strong>OUR TOTAL AGGREGATE LIABILITY SHALL NOT EXCEED THE AMOUNT
                                PAID BY YOU FOR THE SPECIFIC SERVICE OR ACTIVITY GIVING RISE TO THE CLAIM.</strong></p>
                    </div>

                    <h3 style="color: var(--disc-green); margin: 20px 0 10px; font-family: var(--font-body);">5.2
                        Exceptions</h3>
                    <ul class="content-list">
                        <li>Nothing in this disclaimer excludes or limits liability for death or personal injury caused
                            by proven negligence of Knockout, fraud or fraudulent misrepresentation, or any liability
                            that cannot be excluded under applicable Indian law.</li>
                    </ul>
                </div>

                <!-- Section 7: Privacy & Data Protection -->
                <div id="privacy" class="disclaimer-section">
                    <div class="section-header">
                        <div class="section-icon">🔒</div>
                        <div>
                            <h2 class="section-title">Privacy & Data Protection</h2>
                            <div class="section-subtitle">Section 6</div>
                        </div>
                    </div>

                    <ul class="content-list">
                        <li>Personal data collected (name, contact, ID, payment info) is used solely for booking
                            confirmations, service delivery, safety and security, legal compliance (excise, FSSAI,
                            police records), and marketing communications (only with explicit consent).</li>
                        <li>We comply with India's Digital Personal Data Protection Act, 2023. Data is processed
                            lawfully, fairly, and transparently. You have rights to access, correct, or request deletion
                            of your data. Data is retained only as long as necessary for stated purposes.</li>
                    </ul>
                </div>

                <!-- Section 8: Intellectual Property -->
                <div id="intellectual" class="disclaimer-section">
                    <div class="section-header">
                        <div class="section-icon">®️</div>
                        <div>
                            <h2 class="section-title">Intellectual Property</h2>
                            <div class="section-subtitle">Section 7</div>
                        </div>
                    </div>

                    <ul class="content-list">
                        <li>All content on this website and at our venue (logos, branding, menu designs, photos,
                            software, activity concepts) is the intellectual property of Knockout or its licensors.
                            Unauthorized use, reproduction, or distribution is prohibited.</li>
                        <li>"Knockout" and associated logos are trademarks of Knockout. Use without written permission
                            is strictly prohibited.</li>
                    </ul>
                </div>

                <!-- Governing Law -->
                <div class="disclaimer-section">
                    <div class="section-header">
                        <div class="section-icon">⚖️</div>
                        <div>
                            <h2 class="section-title">Governing Law & Dispute Resolution</h2>
                            <div class="section-subtitle">Section 9</div>
                        </div>
                    </div>
                    <ul class="content-list">
                        <li>This disclaimer and your use of Knockout services shall be governed by the laws of India.
                        </li>
                        <li>Any disputes shall be subject to the exclusive jurisdiction of courts in Kolkata, West
                            Bengal.</li>
                        <li>We encourage amicable resolution; please contact legal@knockout.com before initiating legal
                            action.</li>
                    </ul>
                </div>

                <!-- Changes to Disclaimer -->
                <div class="disclaimer-section">
                    <div class="section-header">
                        <div class="section-icon">🔄</div>
                        <div>
                            <h2 class="section-title">Changes to This Disclaimer</h2>
                            <div class="section-subtitle">Section 8</div>
                        </div>
                    </div>
                    <ul class="content-list">
                        <li>We may update this disclaimer periodically to reflect legal, operational, or service
                            changes. The "Last Updated" date indicates the most recent revision. Continued use of our
                            services after changes constitutes acceptance of the updated terms.</li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div id="contact" class="contact-section">
                    <h3>📞 Disclaimer Queries</h3>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">📧</div>
                            <p><strong>Email:</strong> marketing.head@knockout.com</p>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📞</div>
                            <p><strong>Phone:</strong> +91 98310 40034</p>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <p><strong>Address:</strong> Tower 2, SRIJAN CORPORATE PARK, GP 2, GP Block, Sector V,
                                Bidhannagar, Kolkata, West Bengal 700091</p>
                        </div>
                    </div>
                    <p style="margin-top: 20px; font-size: 0.85rem; color: var(--disc-text-dim);">Office Hours: Mon-Sat,
                        11AM - 8PM</p>
                </div>

                <!-- Footer Note -->
                <div class="disclaimer-footer-note">
                    <p>© 2026 Knockout Sports Bar. All rights reserved. | Version 2.0 | Last Updated: April 2026</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Smooth scroll for anchor links
        document.querySelectorAll('.disclaimer-nav a').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });

                    // Update active state
                    document.querySelectorAll('.disclaimer-nav li').forEach(li => li.classList.remove('active'));
                    this.parentElement.classList.add('active');
                }
            });
        });

        // Update active nav on scroll
        const sections = document.querySelectorAll('.disclaimer-section');
        const navItems = document.querySelectorAll('.disclaimer-nav li');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 150) {
                    current = section.getAttribute('id');
                }
            });

            navItems.forEach(item => {
                item.classList.remove('active');
                const link = item.querySelector('a');
                if (link && link.getAttribute('href') === `#${current}`) {
                    item.classList.add('active');
                }
            });
        });
    });
</script>

<?php get_footer(); ?>