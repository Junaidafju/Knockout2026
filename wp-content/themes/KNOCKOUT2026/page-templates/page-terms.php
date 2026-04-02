<?php
/**
 * Template Name: Terms & Conditions Page
 * Description: Knockout's official Terms & Conditions with modern design
 */

get_header();
?>

<style>
    /* =========================================
   TERMS & CONDITIONS PAGE STYLES
   ========================================= */

    :root {
        --terms-dark: #0A0A0F;
        --terms-darker: #050508;
        --terms-gold: #FFD700;
        --terms-green: #B0D136;
        --terms-cyan: #00D4FF;
        --terms-purple: #9b4dff;
        --terms-glow: rgba(176, 209, 54, 0.3);
        --terms-text: rgba(255, 255, 255, 0.85);
        --terms-text-dim: rgba(255, 255, 255, 0.6);
        --font-alphacorsa: 'Alphacorsa Personal Use', cursive;
        --font-body: 'Barlow Condensed', sans-serif;
    }

    /* Page Container */
    .page-template-page-terms {
        background: linear-gradient(135deg, var(--terms-dark) 0%, #0f0f1a 50%, var(--terms-dark) 100%);
        overflow-x: hidden;
    }

    .terms-page {
        position: relative;
        min-height: 100vh;
    }

    /* Background Effects */
    .terms-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 0;
    }

    .terms-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
    }

    .terms-glow--1 {
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(176, 209, 54, 0.08), transparent);
        top: -200px;
        right: -200px;
        animation: floatGlow 20s ease-in-out infinite alternate;
    }

    .terms-glow--2 {
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(0, 212, 255, 0.06), transparent);
        bottom: -150px;
        left: -150px;
        animation: floatGlow 25s ease-in-out infinite alternate-reverse;
    }

    .terms-glow--3 {
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(255, 215, 0, 0.05), transparent);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: pulseGlow 15s ease-in-out infinite;
    }

    .terms-grid {
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(176, 209, 54, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(176, 209, 54, 0.03) 1px, transparent 1px);
        background-size: 40px 40px;
    }

    /* Main Container */
    .terms-container {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        padding: 120px 20px 80px;
        z-index: 2;
    }

    /* Header Section */
    .terms-header {
        text-align: center;
        margin-bottom: 60px;
        position: relative;
    }

    .terms-badge {
        display: inline-block;
        font-family: var(--font-body);
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 4px;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, var(--terms-green), var(--terms-cyan));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: fadeInDown 1s ease-out;
    }

    .terms-title {
        font-family: var(--font-alphacorsa);
        font-size: clamp(2.5rem, 6vw, 4.5rem);
        font-weight: 400;
        color: #ffffff;
        margin-bottom: 1rem;
        text-transform: uppercase;
        animation: fadeInUp 1s ease-out 0.2s backwards;
    }

    .terms-title .gradient-text {
        background: linear-gradient(135deg, var(--terms-green), var(--terms-gold), var(--terms-cyan));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .terms-subtitle {
        color: var(--terms-text-dim);
        font-size: 1.1rem;
        font-family: var(--font-body);
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
        animation: fadeInUp 1s ease-out 0.4s backwards;
    }

    .terms-divider {
        width: 120px;
        height: 3px;
        background: linear-gradient(90deg, var(--terms-green), var(--terms-gold), var(--terms-cyan));
        margin: 30px auto 0;
        border-radius: 3px;
        box-shadow: 0 0 20px var(--terms-glow);
        animation: scaleIn 1s ease-out 0.6s backwards;
    }

    /* Last Updated Badge */
    .terms-updated {
        text-align: center;
        margin-bottom: 50px;
    }

    .updated-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(176, 209, 54, 0.1);
        border: 1px solid rgba(176, 209, 54, 0.3);
        padding: 8px 20px;
        border-radius: 50px;
        font-family: var(--font-body);
        font-size: 0.85rem;
        color: var(--terms-green);
        backdrop-filter: blur(5px);
    }

    .updated-badge span {
        font-size: 1rem;
    }

    /* Terms Grid Layout */
    .terms-grid-layout {
        display: grid;
        grid-template-columns: 280px 1fr;
        gap: 40px;
        margin-top: 30px;
    }

    /* Sidebar Navigation */
    .terms-sidebar {
        position: sticky;
        top: 100px;
        height: fit-content;
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
        color: var(--terms-green);
        padding: 0 20px 15px;
        border-bottom: 1px solid rgba(176, 209, 54, 0.2);
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .terms-nav {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .terms-nav li {
        border-left: 3px solid transparent;
        transition: all 0.3s ease;
    }

    .terms-nav li.active {
        border-left-color: var(--terms-green);
        background: rgba(176, 209, 54, 0.1);
    }

    .terms-nav li a {
        display: block;
        padding: 12px 20px;
        color: var(--terms-text-dim);
        text-decoration: none;
        font-family: var(--font-body);
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }

    .terms-nav li:hover a,
    .terms-nav li.active a {
        color: var(--terms-green);
        padding-left: 25px;
    }

    /* Main Content */
    .terms-content {
        background: rgba(10, 10, 15, 0.5);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(176, 209, 54, 0.15);
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    /* Section Styles */
    .terms-section {
        margin-bottom: 50px;
        scroll-margin-top: 100px;
    }

    .terms-section:last-child {
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
        color: var(--terms-green);
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 5px;
    }

    /* Rules List */
    .rules-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .rules-list li {
        position: relative;
        padding: 12px 0 12px 30px;
        color: var(--terms-text);
        font-family: var(--font-body);
        font-size: 1rem;
        line-height: 1.6;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .rules-list li:last-child {
        border-bottom: none;
    }

    .rules-list li::before {
        content: "▹";
        position: absolute;
        left: 0;
        color: var(--terms-green);
        font-size: 1rem;
    }

    /* Sub-lists */
    .sub-list {
        list-style: none;
        padding: 0;
        margin: 10px 0 0 20px;
    }

    .sub-list li {
        padding: 6px 0 6px 25px;
        border-bottom: none;
        font-size: 0.95rem;
        color: var(--terms-text-dim);
    }

    .sub-list li::before {
        content: "•";
        font-size: 0.8rem;
    }

    /* Highlight Box */
    .highlight-box {
        background: linear-gradient(135deg, rgba(176, 209, 54, 0.1), rgba(0, 212, 255, 0.05));
        border-left: 4px solid var(--terms-green);
        border-radius: 12px;
        padding: 20px 25px;
        margin: 20px 0;
    }

    .highlight-box p {
        margin: 0;
        font-family: var(--font-body);
        font-size: 1rem;
        color: var(--terms-text);
        font-style: italic;
    }

    .highlight-box strong {
        color: var(--terms-gold);
    }

    /* Two Column Layout */
    .two-columns {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-top: 15px;
    }

    .two-columns .rules-list li {
        padding: 8px 0 8px 25px;
    }

    /* Badge Tags */
    .badge-tag {
        display: inline-block;
        background: rgba(255, 215, 0, 0.15);
        border: 1px solid rgba(255, 215, 0, 0.3);
        padding: 2px 10px;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 700;
        color: var(--terms-gold);
        margin-left: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Footer Note */
    .terms-footer-note {
        margin-top: 50px;
        padding: 30px;
        background: linear-gradient(135deg, rgba(176, 209, 54, 0.08), rgba(0, 212, 255, 0.05));
        border-radius: 20px;
        text-align: center;
        border: 1px solid rgba(176, 209, 54, 0.2);
    }

    .terms-footer-note p {
        margin: 0;
        font-family: var(--font-body);
        font-size: 0.9rem;
        color: var(--terms-text-dim);
        line-height: 1.6;
    }

    .terms-footer-note strong {
        color: var(--terms-green);
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
        .terms-grid-layout {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .terms-sidebar {
            position: static;
            display: none;
        }

        .terms-content {
            padding: 30px;
        }

        .section-title {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .terms-container {
            padding: 100px 15px 60px;
        }

        .terms-header {
            margin-bottom: 40px;
        }

        .terms-title {
            font-size: 2rem;
        }

        .terms-subtitle {
            font-size: 1rem;
        }

        .terms-content {
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

        .rules-list li {
            font-size: 0.9rem;
            padding: 10px 0 10px 25px;
        }
    }

    @media (max-width: 480px) {
        .terms-title {
            font-size: 1.6rem;
        }

        .terms-badge {
            font-size: 0.7rem;
            letter-spacing: 3px;
        }

        .terms-content {
            padding: 20px;
        }

        .section-title {
            font-size: 1.2rem;
        }

        .rules-list li {
            font-size: 0.85rem;
        }

        .highlight-box {
            padding: 15px;
        }

        .terms-footer-note {
            padding: 20px;
        }
    }

    /* Print Styles */
    @media print {

        .terms-sidebar,
        .terms-bg,
        .terms-updated .updated-badge {
            display: none;
        }

        .terms-content {
            background: white;
            color: black;
            padding: 0;
        }

        .terms-page {
            background: white;
        }

        .section-title {
            color: black;
        }

        .rules-list li {
            color: #333;
        }
    }
</style>

<div class="terms-page">
    <div class="terms-bg">
        <div class="terms-glow terms-glow--1"></div>
        <div class="terms-glow terms-glow--2"></div>
        <div class="terms-glow terms-glow--3"></div>
        <div class="terms-grid"></div>
    </div>

    <div class="terms-container">
        <!-- Header -->
        <div class="terms-header">
            <span class="terms-badge">OFFICIAL DOCUMENT</span>
            <h1 class="terms-title">Terms & <span class="gradient-text">Conditions</span></h1>
            <p class="terms-subtitle">Welcome to Knockout - India's First All-in-One Sports Bar. Please read these terms
                carefully before using our facilities and services.</p>
            <div class="terms-divider"></div>
        </div>

        <!-- Last Updated -->
        <div class="terms-updated">
            <div class="updated-badge">
                <span>📅</span> Last Updated: April 2026 | Version 2.0
            </div>
        </div>

        <!-- Main Grid -->
        <div class="terms-grid-layout">
            <!-- Sidebar Navigation -->
            <aside class="terms-sidebar">
                <h3 class="sidebar-title">Quick Navigation</h3>
                <ul class="terms-nav">
                    <li><a href="#entry-rights">Entry & Access</a></li>
                    <li><a href="#age-restrictions">Age Restrictions</a></li>
                    <li><a href="#prohibited-items">Prohibited Items</a></li>
                    <li><a href="#participation">Participation & Liability</a></li>
                    <li><a href="#equipment">Equipment Usage</a></li>
                    <li><a href="#dining">Dining & Alcohol</a></li>
                    <li><a href="#reservations">Reservations & Payments</a></li>
                    <li><a href="#safety">Safety & Privacy</a></li>
                </ul>
            </aside>

            <!-- Main Content -->
            <div class="terms-content">
                <!-- Section 1: Right of Admission -->
                <div id="entry-rights" class="terms-section">
                    <div class="section-header">
                        <div class="section-icon">🚪</div>
                        <div>
                            <h2 class="section-title">Right of Admission</h2>
                            <div class="section-subtitle">Section 1</div>
                        </div>
                    </div>
                    <ul class="rules-list">
                        <li>Management reserves the right to refuse entry to any person without assigning reason.</li>
                        <li>Valid government ID (Aadhaar/Passport/Driving License) mandatory for age verification.</li>
                    </ul>
                </div>

                <!-- Section 2: Age Restrictions -->
                <div id="age-restrictions" class="terms-section">
                    <div class="section-header">
                        <div class="section-icon">🔞</div>
                        <div>
                            <h2 class="section-title">Age Restrictions</h2>
                            <div class="section-subtitle">Section 2</div>
                        </div>
                    </div>
                    <ul class="rules-list">
                        <li><strong>Gaming Zones:</strong> Minimum 8 years (children under 12 must be accompanied by
                            adult).</li>
                        <li><strong>Bar/Alcohol Areas:</strong> Strictly 21+ years (as per state excise law). <span
                                class="badge-tag">ID REQUIRED</span></li>
                        <li><strong>Laser Games Activities:</strong> Minimum age 14 years with parental consent form.
                        </li>
                    </ul>
                </div>

                <!-- Section 3: Prohibited Items -->
                <div id="prohibited-items" class="terms-section">
                    <div class="section-header">
                        <div class="section-icon">🚫</div>
                        <div>
                            <h2 class="section-title">Prohibited Items</h2>
                            <div class="section-subtitle">Section 3</div>
                        </div>
                    </div>
                    <ul class="rules-list">
                        <li>Outside food/beverages, weapons, illegal substances.</li>
                        <li>Professional cameras (only with prior consent/permission).</li>
                        <li>Glass bottles near gaming/sports zones (safety hazard).</li>
                    </ul>
                </div>

                <!-- Section 4: Participation at Own Risk -->
                <div id="participation" class="terms-section">
                    <div class="section-header">
                        <div class="section-icon">⚠️</div>
                        <div>
                            <h2 class="section-title">Participation at Own Risk</h2>
                            <div class="section-subtitle">Section 4</div>
                        </div>
                    </div>
                    <ul class="rules-list">
                        <li>All sports/gaming activities (bowling, shooting, laser tag) are undertaken at participant's
                            own risk.</li>
                        <li>Venue provides safety equipment and supervision but cannot guarantee against accidental
                            injury.</li>
                    </ul>

                    <div class="highlight-box">
                        <p><strong>Liability Waiver (High-Risk Activities):</strong> "I hereby waive, release, and
                            discharge Knockout Sports Bar from any liability for personal injury, property damage, or
                            loss arising from my participation in activities."</p>
                        <p style="margin-top: 10px;">📝 Parental signature mandatory for participants under 18.</p>
                    </div>
                </div>

                <!-- Section 5: Equipment Usage -->
                <div id="equipment" class="terms-section">
                    <div class="section-header">
                        <div class="section-icon">🎯</div>
                        <div>
                            <h2 class="section-title">Equipment Usage</h2>
                            <div class="section-subtitle">Section 5</div>
                        </div>
                    </div>
                    <ul class="rules-list">
                        <li>Misuse of equipment (e.g., throwing bowling balls, tampering with simulators) may result in
                            immediate expulsion + damage charges.</li>
                    </ul>
                </div>

                <!-- Section 6: Menu Pricing & Service Charge -->
                <div id="dining" class="terms-section">
                    <div class="section-header">
                        <div class="section-icon">🍽️</div>
                        <div>
                            <h2 class="section-title">Dining & Alcohol</h2>
                            <div class="section-subtitle">Section 6</div>
                        </div>
                    </div>

                    <h3 style="color: var(--terms-green); margin: 20px 0 10px; font-family: var(--font-body);">Menu
                        Pricing & Service Charge</h3>
                    <ul class="rules-list">
                        <li>All prices inclusive of GST. Service charge (if applicable) is discretionary and clearly
                            displayed on the menu.</li>
                        <li>As per CCPA guidelines, automatic service charge levy requires prior consumer consent.</li>
                    </ul>

                    <h3 style="color: var(--terms-green); margin: 20px 0 10px; font-family: var(--font-body);">Allergen
                        Disclosure</h3>
                    <ul class="rules-list">
                        <li>Guests with food allergies must inform staff before ordering. While we take precautions,
                            cross-contamination cannot be guaranteed in shared kitchens.</li>
                    </ul>

                    <h3 style="color: var(--terms-green); margin: 20px 0 10px; font-family: var(--font-body);">Outside
                        Food Policy</h3>
                    <ul class="rules-list">
                        <li>Outside food/beverages not permitted. Exceptions for infant food/medical dietary needs with
                            prior approval.</li>
                    </ul>

                    <h3 style="color: var(--terms-green); margin: 20px 0 10px; font-family: var(--font-body);">Alcohol
                        Service Compliance</h3>
                    <ul class="rules-list">
                        <li>Valid ID mandatory for alcohol purchase. Intoxicated guests will not be served further.</li>
                        <li>Drinking and driving is strictly prohibited. Venue not liable for guest actions
                            post-consumption.</li>
                    </ul>
                </div>

                <!-- Section 7: Reservations & Payments -->
                <div id="reservations" class="terms-section">
                    <div class="section-header">
                        <div class="section-icon">📅</div>
                        <div>
                            <h2 class="section-title">Reservations & Payments</h2>
                            <div class="section-subtitle">Section 7</div>
                        </div>
                    </div>

                    <div class="two-columns">
                        <div>
                            <h3 style="color: var(--terms-green); margin-bottom: 15px; font-family: var(--font-body);">
                                Reservations</h3>
                            <ul class="rules-list">
                                <li>Table/activity bookings require 50% advance payment (non-refundable within 24 hours
                                    of slot).</li>
                                <li>Group bookings (10+ pax) require 72-hour cancellation notice for full refund.</li>
                            </ul>
                        </div>
                        <div>
                            <h3 style="color: var(--terms-green); margin-bottom: 15px; font-family: var(--font-body);">
                                Payment Methods</h3>
                            <ul class="rules-list">
                                <li>Cash, UPI, Credit/Debit Cards accepted.</li>
                                <li>Digital payments preferred for speed.</li>
                            </ul>
                        </div>
                    </div>

                    <h3 style="color: var(--terms-green); margin: 20px 0 10px; font-family: var(--font-body);">No-Show
                        Policy</h3>
                    <ul class="rules-list">
                        <li>Unclaimed reservations after 15 minutes may be released. Advance payment forfeited.</li>
                    </ul>

                    <h3 style="color: var(--terms-green); margin: 20px 0 10px; font-family: var(--font-body);">Force
                        Majeure</h3>
                    <ul class="rules-list">
                        <li>Venue not liable for service disruption due to power failure, natural calamity, civil
                            unrest, or government directive.</li>
                    </ul>
                </div>

                <!-- Section 8: Liability & Safety -->
                <div id="safety" class="terms-section">
                    <div class="section-header">
                        <div class="section-icon">🛡️</div>
                        <div>
                            <h2 class="section-title">Liability, Safety & Privacy</h2>
                            <div class="section-subtitle">Section 8</div>
                        </div>
                    </div>

                    <h3 style="color: var(--terms-green); margin: 20px 0 10px; font-family: var(--font-body);">A.
                        Limitation of Liability</h3>
                    <ul class="rules-list">
                        <li>Venue liability limited to direct damages only. Not liable for indirect/consequential
                            losses.</li>
                        <li>Maximum liability capped at the amount paid by guests for the specific service/activity.
                        </li>
                        <li>Nothing excludes liability for death/personal injury caused by venue's proven negligence.
                        </li>
                    </ul>

                    <h3 style="color: var(--terms-green); margin: 20px 0 10px; font-family: var(--font-body);">B. Safety
                        & Emergency Protocols</h3>
                    <ul class="rules-list">
                        <li>First-aid station available on premises. For serious injuries, guests transferred to the
                            nearest empanelled hospital.</li>
                        <li>Fire exits clearly marked. Guests must follow staff instructions during emergencies.</li>
                        <li>CCTV surveillance in public areas for security. Footage retained for 30 days as per police
                            guidelines.</li>
                    </ul>

                    <h3 style="color: var(--terms-green); margin: 20px 0 10px; font-family: var(--font-body);">C.
                        Privacy & Data Usage</h3>
                    <ul class="rules-list">
                        <li>Personal data (name, contact, ID) collected only for booking, billing, and safety purposes.
                        </li>
                        <li>Data not shared with third parties except as required by law.</li>
                        <li>Guests may request data deletion by contacting <strong
                                style="color: var(--terms-green);">info@knockout.in</strong></li>
                    </ul>
                </div>

                <!-- Footer Note -->
                <div class="terms-footer-note">
                    <p>These Terms & Conditions are governed by the laws of India. Any disputes shall be subject to the
                        exclusive jurisdiction of courts in <strong>Kolkata</strong>.</p>
                    <p style="margin-top: 15px;">We reserve the right to modify these terms at any time; updated
                        versions will be posted on our website. Continued use of our services constitutes acceptance of
                        revised terms.</p>
                    <p style="margin-top: 15px;"><strong>Disclaimer:</strong> This document does not constitute legal
                        advice; consult a qualified attorney for specific guidance.</p>
                    <p style="margin-top: 20px; color: var(--terms-green);">© 2026 Knockout Sports Bar. All rights
                        reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Smooth scroll for anchor links
        document.querySelectorAll('.terms-nav a').forEach(link => {
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
                    document.querySelectorAll('.terms-nav li').forEach(li => li.classList.remove('active'));
                    this.parentElement.classList.add('active');
                }
            });
        });

        // Update active nav on scroll
        const sections = document.querySelectorAll('.terms-section');
        const navItems = document.querySelectorAll('.terms-nav li');

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