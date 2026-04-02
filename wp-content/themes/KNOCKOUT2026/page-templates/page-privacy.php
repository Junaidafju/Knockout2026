<?php
/**
 * Template Name: Privacy Policy Page
 * Description: Knockout's official Privacy Policy compliant with DPDP Act 2023
 */

get_header();
?>

<style>
    /* =========================================
   PRIVACY POLICY PAGE STYLES
   ========================================= */

    :root {
        --priv-dark: #0A0A0F;
        --priv-darker: #050508;
        --priv-blue: #00D4FF;
        --priv-green: #B0D136;
        --priv-gold: #FFD700;
        --priv-purple: #9b4dff;
        --priv-glow: rgba(0, 212, 255, 0.3);
        --priv-text: rgba(255, 255, 255, 0.85);
        --priv-text-dim: rgba(255, 255, 255, 0.6);
        --font-alphacorsa: 'Alphacorsa Personal Use', cursive;
        --font-body: 'Barlow Condensed', sans-serif;
    }

    /* Page Container */
    .page-template-page-privacy-policy {
        background: linear-gradient(135deg, var(--priv-dark) 0%, #0f0f1a 50%, var(--priv-dark) 100%);
        overflow-x: hidden;
    }

    .privacy-page {
        position: relative;
        min-height: 100vh;
    }

    /* Background Effects */
    .privacy-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 0;
    }

    .privacy-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
    }

    .privacy-glow--1 {
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(0, 212, 255, 0.08), transparent);
        top: -200px;
        right: -200px;
        animation: floatGlow 20s ease-in-out infinite alternate;
    }

    .privacy-glow--2 {
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(176, 209, 54, 0.06), transparent);
        bottom: -150px;
        left: -150px;
        animation: floatGlow 25s ease-in-out infinite alternate-reverse;
    }

    .privacy-glow--3 {
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(255, 215, 0, 0.05), transparent);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: pulseGlow 15s ease-in-out infinite;
    }

    .privacy-grid {
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(0, 212, 255, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 212, 255, 0.03) 1px, transparent 1px);
        background-size: 40px 40px;
    }

    /* Main Container */
    .privacy-container {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        padding: 120px 20px 80px;
        z-index: 2;
    }

    /* Header Section */
    .privacy-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .privacy-badge {
        display: inline-block;
        font-family: var(--font-body);
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 4px;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, var(--priv-blue), var(--priv-green));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: fadeInDown 1s ease-out;
    }

    .privacy-title {
        font-family: var(--font-alphacorsa);
        font-size: clamp(2.5rem, 6vw, 4.5rem);
        font-weight: 400;
        color: #ffffff;
        margin-bottom: 1rem;
        text-transform: uppercase;
        animation: fadeInUp 1s ease-out 0.2s backwards;
    }

    .privacy-title .gradient-text {
        background: linear-gradient(135deg, var(--priv-blue), var(--priv-green), var(--priv-gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .privacy-subtitle {
        color: var(--priv-text-dim);
        font-size: 1.1rem;
        font-family: var(--font-body);
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
        animation: fadeInUp 1s ease-out 0.4s backwards;
    }

    .privacy-divider {
        width: 120px;
        height: 3px;
        background: linear-gradient(90deg, var(--priv-blue), var(--priv-green), var(--priv-gold));
        margin: 30px auto 0;
        border-radius: 3px;
        box-shadow: 0 0 20px var(--priv-glow);
        animation: scaleIn 1s ease-out 0.6s backwards;
    }

    /* Last Updated Banner */
    .last-updated {
        text-align: center;
        margin-bottom: 50px;
    }

    .update-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(0, 212, 255, 0.1);
        border: 1px solid rgba(0, 212, 255, 0.3);
        padding: 10px 25px;
        border-radius: 50px;
        font-family: var(--font-body);
        font-size: 0.85rem;
        color: var(--priv-blue);
        backdrop-filter: blur(5px);
    }

    .update-badge span {
        font-size: 1rem;
    }

    /* Sidebar Navigation */
    .privacy-sidebar {
        position: sticky;
        top: 100px;
        background: rgba(10, 10, 15, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(0, 212, 255, 0.2);
        border-radius: 20px;
        padding: 20px 0;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .sidebar-title {
        font-family: var(--font-alphacorsa);
        font-size: 1.3rem;
        color: var(--priv-blue);
        padding: 0 20px 15px;
        border-bottom: 1px solid rgba(0, 212, 255, 0.2);
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .privacy-nav {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .privacy-nav li {
        border-left: 3px solid transparent;
        transition: all 0.3s ease;
    }

    .privacy-nav li.active {
        border-left-color: var(--priv-blue);
        background: rgba(0, 212, 255, 0.1);
    }

    .privacy-nav li a {
        display: block;
        padding: 10px 20px;
        color: var(--priv-text-dim);
        text-decoration: none;
        font-family: var(--font-body);
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .privacy-nav li:hover a,
    .privacy-nav li.active a {
        color: var(--priv-blue);
        padding-left: 25px;
    }

    /* Main Content Grid */
    .privacy-grid-layout {
        display: grid;
        grid-template-columns: 280px 1fr;
        gap: 40px;
        margin-top: 30px;
    }

    /* Content Styles */
    .privacy-content {
        background: rgba(10, 10, 15, 0.5);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(0, 212, 255, 0.15);
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    /* Section Styles */
    .privacy-section {
        margin-bottom: 50px;
        scroll-margin-top: 100px;
    }

    .privacy-section:last-child {
        margin-bottom: 0;
    }

    .section-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid rgba(0, 212, 255, 0.2);
    }

    .section-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, rgba(0, 212, 255, 0.15), rgba(176, 209, 54, 0.1));
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        border: 1px solid rgba(0, 212, 255, 0.3);
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
        color: var(--priv-blue);
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
        color: var(--priv-text);
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
        color: var(--priv-blue);
        font-size: 1rem;
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
        color: var(--priv-text-dim);
    }

    .sub-list li::before {
        content: "•";
        font-size: 0.8rem;
        color: var(--priv-blue);
    }

    /* Info Box */
    .info-box {
        background: linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(176, 209, 54, 0.05));
        border-left: 4px solid var(--priv-blue);
        border-radius: 12px;
        padding: 20px 25px;
        margin: 20px 0;
    }

    .info-box p {
        margin: 0;
        font-family: var(--font-body);
        font-size: 1rem;
        color: var(--priv-text);
    }

    .info-box strong {
        color: var(--priv-blue);
    }

    /* Warning Box */
    .warning-box {
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), rgba(255, 68, 68, 0.05));
        border-left: 4px solid var(--priv-gold);
        border-radius: 12px;
        padding: 20px 25px;
        margin: 20px 0;
    }

    .warning-box p {
        margin: 0;
        font-family: var(--font-body);
        font-size: 1rem;
        color: var(--priv-text);
    }

    .warning-box strong {
        color: var(--priv-gold);
    }

    /* Rights Grid */
    .rights-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin: 20px 0;
    }

    .right-card {
        background: rgba(0, 212, 255, 0.05);
        border: 1px solid rgba(0, 212, 255, 0.2);
        border-radius: 16px;
        padding: 20px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .right-card:hover {
        transform: translateY(-5px);
        border-color: var(--priv-blue);
        box-shadow: 0 10px 30px rgba(0, 212, 255, 0.1);
    }

    .right-icon {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    .right-card h4 {
        font-family: var(--font-alphacorsa);
        font-size: 1.2rem;
        color: var(--priv-blue);
        margin-bottom: 10px;
    }

    .right-card p {
        color: var(--priv-text-dim);
        font-size: 0.85rem;
        margin: 0;
    }

    /* Contact Section */
    .contact-section {
        margin-top: 40px;
        padding: 30px;
        background: linear-gradient(135deg, rgba(0, 212, 255, 0.08), rgba(176, 209, 54, 0.05));
        border-radius: 20px;
        border: 1px solid rgba(0, 212, 255, 0.2);
        text-align: center;
    }

    .contact-section h3 {
        font-family: var(--font-alphacorsa);
        font-size: 1.5rem;
        color: var(--priv-gold);
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
        color: var(--priv-text);
        font-family: var(--font-body);
        font-size: 0.95rem;
        margin: 5px 0;
    }

    .contact-item strong {
        color: var(--priv-blue);
    }

    .response-badge {
        display: inline-block;
        margin-top: 20px;
        padding: 8px 20px;
        background: rgba(0, 212, 255, 0.1);
        border: 1px solid rgba(0, 212, 255, 0.3);
        border-radius: 30px;
        font-size: 0.85rem;
        color: var(--priv-blue);
    }

    /* Footer Note */
    .privacy-footer-note {
        margin-top: 40px;
        padding: 25px;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 16px;
        text-align: center;
        border: 1px solid rgba(0, 212, 255, 0.15);
    }

    .privacy-footer-note p {
        margin: 0;
        font-family: var(--font-body);
        font-size: 0.85rem;
        color: var(--priv-text-dim);
        line-height: 1.6;
    }

    .privacy-footer-note strong {
        color: var(--priv-blue);
    }

    /* Badge Tags */
    .badge-tag {
        display: inline-block;
        background: rgba(0, 212, 255, 0.15);
        border: 1px solid rgba(0, 212, 255, 0.3);
        padding: 2px 10px;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 700;
        color: var(--priv-blue);
        margin-left: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
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
        .privacy-grid-layout {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .privacy-sidebar {
            position: static;
            display: none;
        }

        .privacy-content {
            padding: 30px;
        }

        .section-title {
            font-size: 1.5rem;
        }

        .rights-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }
    }

    @media (max-width: 768px) {
        .privacy-container {
            padding: 100px 15px 60px;
        }

        .privacy-header {
            margin-bottom: 40px;
        }

        .privacy-title {
            font-size: 2rem;
        }

        .privacy-subtitle {
            font-size: 1rem;
        }

        .privacy-content {
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

        .contact-details {
            flex-direction: column;
            gap: 20px;
        }
    }

    @media (max-width: 480px) {
        .privacy-title {
            font-size: 1.6rem;
        }

        .privacy-badge {
            font-size: 0.7rem;
            letter-spacing: 3px;
        }

        .privacy-content {
            padding: 20px;
        }

        .section-title {
            font-size: 1.2rem;
        }

        .content-list li {
            font-size: 0.85rem;
            padding: 10px 0 10px 25px;
        }

        .info-box,
        .warning-box {
            padding: 15px;
        }

        .right-card h4 {
            font-size: 1rem;
        }
    }

    /* Print Styles */
    @media print {

        .privacy-sidebar,
        .privacy-bg,
        .update-badge {
            display: none;
        }

        .privacy-content {
            background: white;
            color: black;
            padding: 0;
        }

        .privacy-page {
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

<div class="privacy-page">
    <div class="privacy-bg">
        <div class="privacy-glow privacy-glow--1"></div>
        <div class="privacy-glow privacy-glow--2"></div>
        <div class="privacy-glow privacy-glow--3"></div>
        <div class="privacy-grid"></div>
    </div>

    <div class="privacy-container">
        <!-- Header -->
        <div class="privacy-header">
            <span class="privacy-badge">🔒 DATA PROTECTION</span>
            <h1 class="privacy-title">Privacy <span class="gradient-text">Policy</span></h1>
            <p class="privacy-subtitle">Welcome to Knockout. We respect your privacy and are committed to protecting
                your personal data in compliance with India's Digital Personal Data Protection Act, 2023 (DPDP Act) and
                other applicable laws.</p>
            <div class="privacy-divider"></div>
        </div>

        <!-- Last Updated Banner -->
        <div class="last-updated">
            <div class="update-badge">
                <span>📅</span> Last Updated: April 2026 | Effective Date: April 2026
                <span>📧</span> info@knockout.com
            </div>
        </div>

        <!-- Main Grid -->
        <div class="privacy-grid-layout">
            <!-- Sidebar Navigation -->
            <aside class="privacy-sidebar">
                <h3 class="sidebar-title">Quick Navigation</h3>
                <ul class="privacy-nav">
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#information">Information We Collect</a></li>
                    <li><a href="#usage">How We Use Your Data</a></li>
                    <li><a href="#sharing">Data Sharing & Disclosure</a></li>
                    <li><a href="#security">Data Security</a></li>
                    <li><a href="#retention">Data Retention</a></li>
                    <li><a href="#rights">Your Rights</a></li>
                    <li><a href="#cookies">Cookies</a></li>
                    <li><a href="#children">Children's Privacy</a></li>
                    <li><a href="#changes">Changes to This Policy</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </aside>

            <!-- Main Content -->
            <div class="privacy-content">
                <!-- Section 1: Introduction -->
                <div id="introduction" class="privacy-section">
                    <div class="section-header">
                        <div class="section-icon">📖</div>
                        <div>
                            <h2 class="section-title">Introduction</h2>
                            <div class="section-subtitle">Section 1</div>
                        </div>
                    </div>
                    <ul class="content-list">
                        <li>Welcome to Knockout ("we", "us", "our"). We respect your privacy and are committed to
                            protecting your personal data in compliance with India's Digital Personal Data Protection
                            Act, 2023 (DPDP Act) and other applicable laws.</li>
                        <li>This policy explains how we collect, use, and safeguard your information when you visit our
                            venue, use our website, or book our services.</li>
                    </ul>
                </div>

                <!-- Section 2: Information We Collect -->
                <div id="information" class="privacy-section">
                    <div class="section-header">
                        <div class="section-icon">📋</div>
                        <div>
                            <h2 class="section-title">Information We Collect</h2>
                            <div class="section-subtitle">Section 2</div>
                        </div>
                    </div>

                    <h3 style="color: var(--priv-blue); margin: 20px 0 10px; font-family: var(--font-body);">Personal
                        Data</h3>
                    <ul class="content-list">
                        <li>Name, phone number, email address, date of birth, government ID (for age
                            verification/shooting), payment details.</li>
                    </ul>

                    <h3 style="color: var(--priv-blue); margin: 20px 0 10px; font-family: var(--font-body);">Sensitive
                        Data</h3>
                    <ul class="content-list">
                        <li>Dietary allergies, health information (for activity safety), CCTV footage.</li>
                    </ul>

                    <h3 style="color: var(--priv-blue); margin: 20px 0 10px; font-family: var(--font-body);">Automated
                        Data</h3>
                    <ul class="content-list">
                        <li>IP address, browser type, device info, cookies, usage patterns.</li>
                    </ul>

                    <div class="info-box">
                        <p><strong>🔐 NOTE:</strong> We only collect data that is necessary for providing our services
                            and complying with legal requirements. Sensitive data is collected only with your explicit
                            consent.</p>
                    </div>
                </div>

                <!-- Section 3: How We Use Your Data -->
                <div id="usage" class="privacy-section">
                    <div class="section-header">
                        <div class="section-icon">⚙️</div>
                        <div>
                            <h2 class="section-title">How We Use Your Data</h2>
                            <div class="section-subtitle">Section 3</div>
                        </div>
                    </div>
                    <ul class="content-list">
                        <li>To process bookings and payments.</li>
                        <li>To verify age for alcohol and shooting activities <span class="badge-tag">Legal
                                Compliance</span></li>
                        <li>To ensure safety and security (CCTV, emergency contact).</li>
                        <li>To personalize your experience (preferences, allergies).</li>
                        <li>To send promotional offers (only with your explicit consent).</li>
                    </ul>
                </div>

                <!-- Section 4: Data Sharing & Disclosure -->
                <div id="sharing" class="privacy-section">
                    <div class="section-header">
                        <div class="section-icon">🔄</div>
                        <div>
                            <h2 class="section-title">Data Sharing & Disclosure</h2>
                            <div class="section-subtitle">Section 4</div>
                        </div>
                    </div>
                    <ul class="content-list">
                        <li><strong>We do not sell your personal data.</strong> We may share data with:</li>
                    </ul>

                    <div class="two-columns"
                        style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 15px 0;">
                        <div class="info-box" style="margin: 0;">
                            <p><strong>🏢 Service Providers:</strong> Payment gateways, cloud storage, and booking
                                platforms.</p>
                        </div>
                        <div class="info-box" style="margin: 0;">
                            <p><strong>⚖️ Legal Authorities:</strong> If required by law (Police, Excise, FSSAI).</p>
                        </div>
                    </div>
                    <ul class="content-list">
                        <li><strong>Partners:</strong> Only with your explicit consent for marketing.</li>
                    </ul>
                </div>

                <!-- Section 5: Data Security -->
                <div id="security" class="privacy-section">
                    <div class="section-header">
                        <div class="section-icon">🛡️</div>
                        <div>
                            <h2 class="section-title">Data Security</h2>
                            <div class="section-subtitle">Section 5</div>
                        </div>
                    </div>
                    <ul class="content-list">
                        <li>We implement industry-standard security measures (encryption, firewalls, access controls) to
                            protect your data.</li>
                        <li>However, no internet transmission is 100% secure. We cannot guarantee absolute security.
                        </li>
                    </ul>
                </div>

                <!-- Section 6: Data Retention -->
                <div id="retention" class="privacy-section">
                    <div class="section-header">
                        <div class="section-icon">⏱️</div>
                        <div>
                            <h2 class="section-title">Data Retention</h2>
                            <div class="section-subtitle">Section 6</div>
                        </div>
                    </div>
                    <ul class="content-list">
                        <li>We retain data only as long as necessary for the purpose collected or as required by law
                            (e.g., tax records for 6 years, CCTV for 30 days).</li>
                        <li>Afterward, data is securely deleted or anonymized.</li>
                    </ul>
                </div>

                <!-- Section 7: Your Rights (Data Principal) -->
                <div id="rights" class="privacy-section">
                    <div class="section-header">
                        <div class="section-icon">👤</div>
                        <div>
                            <h2 class="section-title">Your Rights</h2>
                            <div class="section-subtitle">Section 7 - DPDP Act, 2023</div>
                        </div>
                    </div>

                    <div class="rights-grid">
                        <div class="right-card">
                            <div class="right-icon">📖</div>
                            <h4>Access</h4>
                            <p>Request a copy of your personal data</p>
                        </div>
                        <div class="right-card">
                            <div class="right-icon">✏️</div>
                            <h4>Correct</h4>
                            <p>Update inaccurate or incomplete data</p>
                        </div>
                        <div class="right-card">
                            <div class="right-icon">🗑️</div>
                            <h4>Erase</h4>
                            <p>Request deletion (subject to legal retention)</p>
                        </div>
                        <div class="right-card">
                            <div class="right-icon">📞</div>
                            <h4>Grievance</h4>
                            <p>Lodge a complaint with our Grievance Officer</p>
                        </div>
                    </div>
                </div>

                <!-- Section 8: Cookies -->
                <div id="cookies" class="privacy-section">
                    <div class="section-header">
                        <div class="section-icon">🍪</div>
                        <div>
                            <h2 class="section-title">Cookies</h2>
                            <div class="section-subtitle">Section 8</div>
                        </div>
                    </div>
                    <ul class="content-list">
                        <li>We use cookies to enhance user experience. You can manage cookie preferences via your
                            browser or our Cookie Banner.</li>
                    </ul>
                </div>

                <!-- Section 9: Children's Privacy -->
                <div id="children" class="privacy-section">
                    <div class="section-header">
                        <div class="section-icon">👶</div>
                        <div>
                            <h2 class="section-title">Children's Privacy</h2>
                            <div class="section-subtitle">Section 9</div>
                        </div>
                    </div>
                    <div class="warning-box">
                        <p><strong>⚠️ IMPORTANT:</strong> We do not knowingly collect data from children under 18
                            without parental consent. Certain activities (Alcohol, Shooting) have higher age
                            restrictions (21+/25+). Parental supervision required for minors.</p>
                    </div>
                </div>

                <!-- Section 10: Changes to This Policy -->
                <div id="changes" class="privacy-section">
                    <div class="section-header">
                        <div class="section-icon">🔄</div>
                        <div>
                            <h2 class="section-title">Changes to This Policy</h2>
                            <div class="section-subtitle">Section 10</div>
                        </div>
                    </div>
                    <ul class="content-list">
                        <li>We may update this policy periodically. Changes will be posted on this page with a new "Last
                            Updated" date.</li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div id="contact" class="contact-section">
                    <h3>📞 Contact Us</h3>
                    <p style="margin-bottom: 20px; color: var(--priv-text-dim);">For privacy concerns or grievances:</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">👤</div>
                            <p><strong>Grievance Officer:</strong> [Name]</p>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📧</div>
                            <p><strong>Email:</strong> info@knockout.com</p>
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
                    <div class="response-badge">
                        ⏱️ Response Time: Within 7 business days
                    </div>
                </div>

                <!-- Footer Note -->
                <div class="privacy-footer-note">
                    <p>© 2026 Knockout Sports Bar. All rights reserved. | Compliant with Digital Personal Data
                        Protection Act, 2023 | Version 2.0</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Smooth scroll for anchor links
        document.querySelectorAll('.privacy-nav a').forEach(link => {
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
                    document.querySelectorAll('.privacy-nav li').forEach(li => li.classList.remove('active'));
                    this.parentElement.classList.add('active');
                }
            });
        });

        // Update active nav on scroll
        const sections = document.querySelectorAll('.privacy-section');
        const navItems = document.querySelectorAll('.privacy-nav li');

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