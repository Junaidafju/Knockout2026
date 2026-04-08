<?php
/**
 * Front Page Template - Video First, Content Second
 */

get_header(); ?>

<main class="site-main premium-front">

    <!-- ===== SECTION 1: CLEAN 16:9 VIDEO ONLY ===== -->
    <section class="video-showcase">
        <div class="video-wrapper-16x9">
            <video autoplay muted loop playsinline class="showcase-video">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/hero.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <!-- ===== SPORTS MARQUEE ===== -->
    <section class="sports-marquee marquee-visible">
        <div class="marquee-container">
            <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="marquee-text">
                    Knockout brings, for the first time in Kolkata, an unmatched sports and entertainment destination!
                    Indulge in gourmet food, signature drinks, live screenings, exclusive hookah, and the city’s best
                    ambiance — all under one vibrant roof. Experience fun, flavor, and excitement redefined — only at
                    Knockout, Kolkata’s ultimate hangout spot!
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- ===== SECTION 2: HERO CONTENT WITH NEON IMAGE ===== -->
    <section class="hero-content-section">
        <div class="container">
            <div class="hero-split-layout">

                <!-- Left Column: Neon Framed Image -->
                <div class="hero-image-col">
                    <div class="neon-image-frame">
                        <div class="neon-frame-glow"></div>
                        <div class="neon-frame-corners">
                            <span class="corner top-left"></span>
                            <span class="corner top-right"></span>
                            <span class="corner bottom-left"></span>
                            <span class="corner bottom-right"></span>
                        </div>
                        <div class="neon-frame-lines">
                            <span class="line top"></span>
                            <span class="line right"></span>
                            <span class="line bottom"></span>
                            <span class="line left"></span>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-image.jpg"
                            alt="KnockOut Interior" class="framed-image">
                        <div class="electric-pulse"></div>

                        <!-- New: Floating badges for extra flair -->
                        <div class="floating-badge badge-1">
                            <span class="badge-text">PREMIUM</span>
                        </div>
                        <div class="floating-badge badge-2">
                            <span class="badge-text">SPORTS BAR</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Hero Content with NEW Text -->
                <div class="hero-content-col">
                    <div class="neon-badge animate-fade-in">
                        <span class="neon-text">WELCOME TO KNOCKOUT</span>
                    </div>

                    <h1 class="hero-title animate-slide-up">
                        <span class="title-line">LEVEL UP YOUR</span>
                        <span class="title-line gradient-text gradient-animate">GAME NIGHTS</span>
                    </h1>

                    <div class="hero-description animate-slide-up delay-1">
                        <p class="highlight-text">Kolkata's premier sports bar and restaurant</p>
                        <p class="sub-text">The ultimate hangout spot in Kolkata — One Truly Sports bar in Kolkata</p>
                        <p class="tagline">Where game nights peak with every sip</p>
                    </div>

                    <div class="hero-stats animate-slide-up delay-2">
                        <div class="stat-item">
                            <span class="stat-number gradient-text">6 Lane</span>
                            <span class="stat-label">BOWLING ALLEY</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number gradient-text">15+</span>
                            <span class="stat-label">GAMES</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number gradient-text">∞</span>
                            <span class="stat-label">VIBES</span>
                        </div>
                    </div>

                    <div class="hero-cta animate-slide-up delay-3">
                        <a href="#experience" class="neon-cta primary-cta">
                            <span>EXPLORE THE EXPERIENCE</span>
                            <span class="cta-glow"></span>
                        </a>
                        <a href="/reservation" class="neon-cta secondary-cta">
                            <span><span class="gradient-text">BOOK</span> NOW</span>
                            <span class="cta-glow"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US / FEATURES ===== -->
    <section class="ko-about-section ko-features">
        <!-- Lightning Bugs - Floating neon effects -->
        <div class="lightning-bug"></div>
        <div class="lightning-bug"></div>
        <div class="lightning-bug"></div>
        <div class="lightning-bug"></div>
        <div class="lightning-bug"></div>
        <div class="lightning-bug"></div>
        <div class="lightning-bug"></div>
        <div class="lightning-bug"></div>

        <div class="ko-container container">
            <div class="ko-section-header ko-fade-in-up">
                <!-- Redesigned heading in the style of "LEVEL UP YOUR GAME NIGHTS" -->
                <h2 class="features-title">
                    <span class="title-line">WHY <span class="gradient-text">CHOOSE</span></span>
                    <span class="title-line"><span class="gradient-text gradient-animate">US</span> ?</span>
                </h2>
                <p class="features-subtitle">More than Just a Sports Bar - an electrifying play arena for sports fans,
                    foodies, and unforgettable nights.</p>
            </div>

            <div class="ko-features-grid">
                <!-- Gaming Fever -->
                <div class="ko-feature-card ko-fade-in-up ko-delay-1">
                    <div class="ko-feature-icon-circle">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <h3 class="ko-feature-card-title">Gaming Fever</h3>
                    <p class="ko-feature-card-desc">Experience cutting-edge sports simulation & stadium-like thrill at
                        Knockout.</p>
                </div>

                <!-- Victory Plates -->
                <div class="ko-feature-card ko-fade-in-up ko-delay-2">
                    <div class="ko-feature-icon-circle">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="ko-feature-card-title">Victory Plates</h3>
                    <p class="ko-feature-card-desc">Iconic dishes curated by our legendary chefs with hand-picked
                        ingredients.</p>
                </div>

                <!-- Sips & Spirits -->
                <div class="ko-feature-card ko-fade-in-up ko-delay-3">
                    <div class="ko-feature-icon-circle">
                        <i class="fas fa-cocktail"></i>
                    </div>
                    <h3 class="ko-feature-card-title">Sips & Spirits</h3>
                    <p class="ko-feature-card-desc">Indulge in refined cocktails and premium spirits at the best sports
                        lounge in Kolkata.</p>
                </div>

                <!-- Elite Celebration -->
                <div class="ko-feature-card ko-fade-in-up ko-delay-4">
                    <div class="ko-feature-icon-circle">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="ko-feature-card-title">Elite Celebration</h3>
                    <p class="ko-feature-card-desc">Energy-filled venue for birthday parties, epic corporate events, and
                        private parties.</p>
                </div>
            </div>
        </div>
    </section>



    <!-- ===== OUR SERVICES ===== -->
    <div class="services-wrapper section-wrapper animate-in">
        <!-- Pattern Background from URL -->
        <div class="services-pattern-bg"></div>

        <!-- Floating Particles (Optional extra ambiance) -->
        <div class="services-particle"></div>
        <div class="services-particle"></div>
        <div class="services-particle"></div>
        <div class="services-particle"></div>

        <section class="services-section" id="services">
            <div class="container">
                <!-- Redesigned Header in "Level Up" Style -->
                <div class="ko-section-header ko-fade-in-up">
                    <h2 class="services-title">
                        <span class="title-line">OUR <span class="gradient-text">SERVICES</span></span>
                    </h2>
                    <p class="services-subtitle">Perfect blend of six unique experiences under the same roof,
                        meticulously designed to level up your game</p>
                </div>

                <div class="services-grid">
                    <!-- 1. Elevated Dining -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="https://png.pngtree.com/thumb_back/fw800/background/20231022/pngtree-indulge-in-a-delectable-meal-grilled-chicken-salad-on-a-stylish-image_13645831.png"
                                alt="Elevated Dining">
                            <div class="card-overlay">
                                <div class="card-icon"><i class="fas fa-utensils"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="service-title">Elevated Dining</h3>
                            <p class="service-description">Dive into our diverse gourmet menu crafted with precision by
                                our extraordinary chefs</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Global Menu</li>
                                <li><i class="fas fa-check"></i> Fine Dining</li>
                                <li><i class="fas fa-check"></i> Victory Bites</li>
                                <li><i class="fas fa-check"></i> Finest Ingredients</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 2. Truly Sports Bar & Lounge -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?w=800&amp;h=600&amp;fit=crop&amp;crop=center"
                                alt="Truly Sports Bar & Lounge">
                            <div class="card-overlay">
                                <div class="card-icon"><i class="fas fa-cocktail"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="service-title">Truly Sports Bar & Lounge</h3>
                            <p class="service-description">Sip on the finest spirits, crafted cocktails and enjoy the
                                electrifying ambience</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Elite Pours</li>
                                <li><i class="fas fa-check"></i> Craft Cocktails</li>
                                <li><i class="fas fa-check"></i> Live DJ Music</li>
                                <li><i class="fas fa-check"></i> Exclusive Events</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 3. Royal Shisha Lounge -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="https://t4.ftcdn.net/jpg/04/68/57/69/360_F_468576967_Z41MAuOX6z7uyv3S9uq49MN6iDaUnfGW.jpg"
                                alt="Royal Shisha Lounge">
                            <div class="card-overlay">
                                <div class="card-icon"><i class="fas fa-smoking"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="service-title">Royal Shisha Lounge</h3>
                            <p class="service-description">Indulge in premium hookah blends at our sophisticated sports
                                bar lounge</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Finest Flavours</li>
                                <li><i class="fas fa-check"></i> Luxury Lounge</li>
                                <li><i class="fas fa-check"></i> VIP Spaces</li>
                                <li><i class="fas fa-check"></i> Top-notch Hospitality</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 4. Elite Bowling Alley -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="https://lh3.googleusercontent.com/gps-cs-s/AHVAweqCNRC2YWZpGwJh49rmG4CNe3eNckH_EdHl0E-yw0dLiVUi-VeMfxjxtGTVwfhqPMQkFQSBUnxVI7q28TZuM4aPuYc2CO2mA-cHkve09KDggTezoFcfjoI-EJ-iFZRxXeITeVoxyggkta7x=s680-w680-h510-rw"
                                alt="Elite Bowling Alley">
                            <div class="card-overlay">
                                <div class="card-icon"><i class="fas fa-bowling-ball"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="service-title">Elite Bowling Alley</h3>
                            <p class="service-description">The very first 6 lane bowling alley in Kolkata with
                                top-of-the-line equipment</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Six Premium Lanes</li>
                                <li><i class="fas fa-check"></i> Automated Scoring</li>
                                <li><i class="fas fa-check"></i> Group Packages</li>
                                <li><i class="fas fa-check"></i> First time in Kolkata</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 5. Ultimate Gaming Café -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?w=800&amp;h=600&amp;fit=crop&amp;crop=center"
                                alt="Ultimate Gaming Café">
                            <div class="card-overlay">
                                <div class="card-icon"><i class="fas fa-gamepad"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="service-title">Pro Gaming Café</h3>
                            <p class="service-description">Dive into a brand new experience of digital sports simulation
                                & arcade excitement</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Sports Simulators</li>
                                <li><i class="fas fa-check"></i> Competitive Arena</li>
                                <li><i class="fas fa-check"></i> Interactive Games</li>
                                <li><i class="fas fa-check"></i> Skill-Based Challenges</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 6. Matchday Live -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="https://www.fanzo.com/_next/image?url=https%3A%2F%2Fmatchpint-cdn.matchpint.cloud%2Fshared%2Fimg%2Fpub%2F17843%2F240865805-1656583041_banner.jpeg&amp;w=3840&amp;q=75"
                                alt="Matchday Live">
                            <div class="card-overlay">
                                <div class="card-icon"><i class="fas fa-tv"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="service-title">Matchday Live</h3>
                            <p class="service-description">Experience live sports screenings on giant screens with an
                                electrifying atmosphere.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Ultra HD Screening</li>
                                <li><i class="fas fa-check"></i> Surround Sound</li>
                                <li><i class="fas fa-check"></i> Dedicated Fan Zone</li>
                                <li><i class="fas fa-check"></i> Luxury Sports Lounge</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Why Choose KnockOut Section (Keeping existing) -->
                <!-- <div class="why-choose-section"> -->
                <!-- ... your existing why-choose content ... -->
            </div>
    </div>
    </section>
    </div>

    <!-- ===== WHY ONLY KNOCKOUT? ===== -->
    <div class="why-wrapper">
        <!-- Background Pattern -->
        <div class="why-pattern-bg"></div>

        <!-- Floating Neon Particles -->
        <div class="why-particle"></div>
        <div class="why-particle"></div>
        <div class="why-particle"></div>
        <div class="why-particle"></div>

        <section class="why-section">
            <div class="container">
                <div class="why-choose-section">
                    <!-- Left Content -->
                    <div class="why-choose-content animate-slide-right">
                        <!-- Section Badge -->
                        <div class="section-badge">
                            <span class="badge-text">WHY ONLY KNOCKOUT?</span>
                            <span class="badge-glow"></span>
                        </div>

                        <!-- Main Heading -->
                        <h2 class="why-main-title">
                            <span class="title-line">Knockout is not just a</span>
                            <span class="title-line gradient-text">sports bar & restaurant</span>
                            <span class="title-line">in Kolkata, we are the</span>
                            <span class="title-line highlight">first experiential entertainment zone</span>
                            <span class="title-line">where you don't just</span>
                            <span class="title-line gradient-text">watch the game,</span>
                            <span class="title-line">but</span>
                            <span class="title-line big-gradient">BE THE GAME.</span>
                        </h2>

                        <!-- Features Grid -->
                        <div class="why-features-grid">
                            <!-- Feature 1 -->
                            <div class="feature-card">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-dice-d6"></i>
                                    <span class="icon-glow"></span>
                                </div>
                                <div class="feature-text">
                                    <h3>Ultimate Entertainment Hub</h3>
                                    <p>Confused between Bowling & Dining, also don't want to miss the Derby? Visit
                                        Knockout</p>
                                </div>
                            </div>

                            <!-- Feature 2 -->
                            <div class="feature-card">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-map-marked-alt"></i>
                                    <span class="icon-glow"></span>
                                </div>
                                <div class="feature-text">
                                    <h3>One-of-a-Kind Hangout Destination</h3>
                                    <p>Kolkata's first experiential entertainment hub — live matches, luxury dining &
                                        unlimited gaming</p>
                                </div>
                            </div>

                            <!-- Feature 3 -->
                            <div class="feature-card">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-glass-cheers"></i>
                                    <span class="icon-glow"></span>
                                </div>
                                <div class="feature-text">
                                    <h3>Luxury Bar Lounge</h3>
                                    <p>Finest of the spirits to quench the thirst of the winners at our elite bar
                                        lounge.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Stats Cards -->
                    <div class="why-stats-wrapper animate-slide-left">
                        <!-- Stat Card 1 -->
                        <div class="stat-card premium">
                            <div class="stat-inner">
                                <div class="stat-number">1st</div>
                                <div class="stat-label">In Kolkata</div>
                                <div class="stat-glow"></div>
                            </div>
                        </div>

                        <!-- Stat Card 2 -->
                        <div class="stat-card">
                            <div class="stat-inner">
                                <div class="stat-number">15+</div>
                                <div class="stat-label">Sports Activities</div>
                                <div class="stat-glow"></div>
                            </div>
                        </div>

                        <!-- Stat Card 3 -->
                        <div class="stat-card">
                            <div class="stat-inner">
                                <div class="stat-number">50+</div>
                                <div class="stat-label">Dishes & Signature Drinks</div>
                                <div class="stat-glow"></div>
                            </div>
                        </div>

                        <!-- Decorative Element -->
                        <div class="stats-decoration">
                            <span class="decoration-line"></span>
                            <span class="decoration-dot"></span>
                            <span class="decoration-line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ===== EVENTS AT KNOCKOUT ===== -->
    <section class="events-section">
        <!-- Firefly Background Container -->
        <div class="firefly-container">
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
            <div class="firefly-dot"></div>
        </div>

        <!-- Floating Orbs -->
        <div class="events-orb"></div>
        <div class="events-orb"></div>
        <div class="events-orb"></div>

        <div class="container">
            <!-- Capsule Pile Style Title -->
            <div class="events-capsule-wrapper">
                <div class="capsule-pile">
                    <span class="capsule primary">EVENTS</span>
                    <span class="capsule secondary">AT</span>
                    <span class="capsule primary gradient">KNOCKOUT</span>
                </div>
                <div class="capsule-glow"></div>
            </div>

            <!-- Main Heading -->
            <div class="events-header">
                <h2 class="events-main-title">
                    <span class="title-line">PARTY NIGHTS</span>
                    <span class="title-line gradient-text">AT KNOCKOUT</span>
                </h2>
                <div class="neon-divider"></div>
                <p class="events-subtitle">Experience the ultimate nightlife with electrifying DJ nights, premium
                    bowling, and unforgettable memories</p>
            </div>

            <!-- Carousel Section -->
            <div class="events-carousel-wrapper">
                <!-- Navigation Arrows -->
                <button class="carousel-nav carousel-nav-prev" aria-label="Previous events">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-nav carousel-nav-next" aria-label="Next events">
                    <i class="fas fa-chevron-right"></i>
                </button>

                <!-- Carousel Container -->
                <div class="events-carousel-container">
                    <div class="events-carousel-track">

                        <!-- Card 1 - DJ Night -->
                        <div class="event-card premium" data-index="0" data-date="March 15, 2026"
                            data-time="9:00 PM — 5:00 AM" data-venue="Knockout Main Stage" data-price="₹999">
                            <div class="card-background">
                                <div class="character-image">
                                    <img src="https://img.freepik.com/free-psd/club-dj-party-flyer-social-media-post_505751-3062.jpg"
                                        alt="Rochelle Fernandez" class="instructor-photo" loading="lazy">
                                    <div class="image-overlay"></div>
                                </div>
                                <div class="card-content">
                                    <div class="event-badge">🔥 FEATURED</div>
                                    <div class="event-footer">
                                        <div class="event-info">
                                            <div class="instructor-name">ROCHELLE FERNANDEZ</div>
                                            <h3 class="event-title">DJ Maaru & DJ Rindi</h3>
                                            <div class="event-meta">
                                                <span><i class="fas fa-calendar-alt"></i> MAR 15</span>
                                                <span><i class="fas fa-clock"></i> 9:00 PM</span>
                                            </div>
                                        </div>
                                        <button class="event-details-btn">
                                            <span>BOOK NOW</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-reflection"></div>
                        </div>

                        <!-- Card 2 - Green Party -->
                        <div class="event-card" data-index="1" data-date="March 22, 2026" data-time="8:00 PM — 3:00 AM"
                            data-venue="Knockout Lounge" data-price="₹799">
                            <div class="card-background">
                                <div class="character-image">
                                    <img src="https://img.freepik.com/premium-psd/green-party-neon-social-media-post-flyer-template_516218-199.jpg"
                                        alt="Billie Elish" class="instructor-photo" loading="lazy">
                                    <div class="image-overlay"></div>
                                </div>
                                <div class="card-content">
                                    <div class="event-footer">
                                        <div class="event-info">
                                            <div class="instructor-name">BILLIE ELISH</div>
                                            <h3 class="event-title">Green Party</h3>
                                            <div class="event-meta">
                                                <span><i class="fas fa-calendar-alt"></i> MAR 22</span>
                                                <span><i class="fas fa-clock"></i> 8:00 PM</span>
                                            </div>
                                        </div>
                                        <button class="event-details-btn">
                                            <span>BOOK NOW</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-reflection"></div>
                        </div>

                        <!-- Card 3 - DJ Dinda -->
                        <div class="event-card" data-index="2" data-date="March 29, 2026" data-time="9:30 PM — 4:00 AM"
                            data-venue="Knockout Main Stage" data-price="₹899">
                            <div class="card-background">
                                <div class="character-image">
                                    <img src="https://img.freepik.com/free-psd/saturday-party-promotion-post_505751-5167.jpg?semt=ais_hybrid&amp;w=740&amp;q=80"
                                        alt="Michael Scott" class="instructor-photo" loading="lazy">
                                    <div class="image-overlay"></div>
                                </div>
                                <div class="card-content">
                                    <div class="event-footer">
                                        <div class="event-info">
                                            <div class="instructor-name">MICHAEL SCOTT</div>
                                            <h3 class="event-title">DJ Dinda & DJ Scott</h3>
                                            <div class="event-meta">
                                                <span><i class="fas fa-calendar-alt"></i> MAR 29</span>
                                                <span><i class="fas fa-clock"></i> 9:30 PM</span>
                                            </div>
                                        </div>
                                        <button class="event-details-btn">
                                            <span>BOOK NOW</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-reflection"></div>
                        </div>

                        <!-- Card 4 - Special Show -->
                        <div class="event-card premium" data-index="3" data-date="April 5, 2026"
                            data-time="8:00 PM — 2:00 AM" data-venue="Knockout VIP Deck" data-price="₹1,499">
                            <div class="card-background">
                                <div class="character-image">
                                    <img src="https://www.creative-flyers.com/wp-content/uploads/2023/03/DJ-Event-Promo-Design-1.jpg"
                                        alt="James Fisher" class="instructor-photo" loading="lazy">
                                    <div class="image-overlay"></div>
                                </div>
                                <div class="card-content">
                                    <div class="event-badge">⚡ VIP</div>
                                    <div class="event-footer">
                                        <div class="event-info">
                                            <div class="instructor-name">JAMES FISHER</div>
                                            <h3 class="event-title">Special Show At Knockout</h3>
                                            <div class="event-meta">
                                                <span><i class="fas fa-calendar-alt"></i> APR 5</span>
                                                <span><i class="fas fa-clock"></i> 8:00 PM</span>
                                            </div>
                                        </div>
                                        <button class="event-details-btn">
                                            <span>BOOK NOW</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-reflection"></div>
                        </div>

                        <!-- Card 5 - Party Nights -->
                        <div class="event-card" data-index="4" data-date="April 12, 2026" data-time="10:00 PM — 5:00 AM"
                            data-venue="Knockout Main Stage" data-price="₹699">
                            <div class="card-background">
                                <div class="character-image">
                                    <img src="https://img.freepik.com/premium-psd/mix-electro-party-dj-event-flyer-template_951415-802.jpg?semt=ais_hybrid&amp;w=740&amp;q=80"
                                        alt="Sao Paulo" class="instructor-photo" loading="lazy">
                                    <div class="image-overlay"></div>
                                </div>
                                <div class="card-content">
                                    <div class="event-footer">
                                        <div class="event-info">
                                            <div class="instructor-name">SAO PAULO</div>
                                            <h3 class="event-title">Party Nights</h3>
                                            <div class="event-meta">
                                                <span><i class="fas fa-calendar-alt"></i> APR 12</span>
                                                <span><i class="fas fa-clock"></i> 10:00 PM</span>
                                            </div>
                                        </div>
                                        <button class="event-details-btn">
                                            <span>BOOK NOW</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-reflection"></div>
                        </div>

                        <!-- Card 6 - DJ Vega -->
                        <div class="event-card" data-index="5" data-date="April 19, 2026" data-time="9:00 PM — 4:00 AM"
                            data-venue="Knockout Lounge" data-price="₹599">
                            <div class="card-background">
                                <div class="character-image">
                                    <img src="https://img.freepik.com/premium-psd/green-party-flyer-social-media-post-web-banner_483912-893.jpg"
                                        alt="DJ Vega" class="instructor-photo" loading="lazy">
                                    <div class="image-overlay"></div>
                                </div>
                                <div class="card-content">
                                    <div class="event-footer">
                                        <div class="event-info">
                                            <div class="instructor-name">DJ VEGA</div>
                                            <h3 class="event-title">Party Nights</h3>
                                            <div class="event-meta">
                                                <span><i class="fas fa-calendar-alt"></i> APR 19</span>
                                                <span><i class="fas fa-clock"></i> 9:00 PM</span>
                                            </div>
                                        </div>
                                        <button class="event-details-btn">
                                            <span>BOOK NOW</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-reflection"></div>
                        </div>

                        <!-- Card 7 - Christmas Party -->
                        <div class="event-card" data-index="6" data-date="December 25, 2024"
                            data-time="10:00 AM — 6:00 PM" data-venue="Knockout Party Hall" data-price="FREE">
                            <div class="card-background">
                                <div class="character-image">
                                    <img src="https://img.freepik.com/premium-psd/night-dj-party-flyer-social-media-post-with-green-color_507402-362.jpg"
                                        alt="Mascaken" class="instructor-photo" loading="lazy">
                                    <div class="image-overlay"></div>
                                </div>
                                <div class="card-content">
                                    <div class="event-badge">🎄 SPECIAL</div>
                                    <div class="event-footer">
                                        <div class="event-info">
                                            <div class="instructor-name">MASCAKEN</div>
                                            <h3 class="event-title">Christmas DJ Party</h3>
                                            <div class="event-meta">
                                                <span><i class="fas fa-calendar-alt"></i> DEC 25</span>
                                                <span><i class="fas fa-clock"></i> 10:00 AM</span>
                                            </div>
                                        </div>
                                        <button class="event-details-btn">
                                            <span>BOOK NOW</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-reflection"></div>
                        </div>

                        <!-- Card 8 - Knockout Friday -->
                        <div class="event-card" data-index="7" data-date="Every Friday" data-time="9:00 PM — 3:00 AM"
                            data-venue="Knockout Main Stage" data-price="₹499">
                            <div class="card-background">
                                <div class="character-image">
                                    <img src="https://img.freepik.com/premium-psd/club-dj-party-flyer-social-media-post_373138-1188.jpg"
                                        alt="DJ Karibo" class="instructor-photo" loading="lazy">
                                    <div class="image-overlay"></div>
                                </div>
                                <div class="card-content">
                                    <div class="event-badge">📅 WEEKLY</div>
                                    <div class="event-footer">
                                        <div class="event-info">
                                            <div class="instructor-name">DJ KARIBO</div>
                                            <h3 class="event-title">Knockout Friday</h3>
                                            <div class="event-meta">
                                                <span><i class="fas fa-calendar-alt"></i> EVERY FRI</span>
                                                <span><i class="fas fa-clock"></i> 9:00 PM</span>
                                            </div>
                                        </div>
                                        <button class="event-details-btn">
                                            <span>BOOK NOW</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-reflection"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="events-cta-wrapper">
                <div class="events-cta">
                    <h3 class="cta-title">Visit Us For Ultimate <span class="gradient-text">Bowling Events & DJ
                            Nights</span></h3>
                    <div class="cta-buttons">
                        <a href="#book" class="cta-btn-primary">
                            <span class="btn-text">BOOK YOUR NIGHT</span>
                            <span class="btn-glow"></span>
                        </a>
                        <a href="#events" class="cta-btn-secondary">
                            <span class="btn-text">VIEW ALL EVENTS</span>
                            <span class="btn-glow"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Details Modal -->
    <div class="event-modal-overlay" id="eventModal">
        <div class="event-modal">
            <button class="event-modal-close" aria-label="Close modal">
                <i class="fas fa-times"></i>
            </button>
            <div class="event-modal-image">
                <img id="modalImage" src="" alt="">
                <div class="event-modal-image-overlay"></div>
            </div>
            <div class="event-modal-body">
                <span class="event-modal-artist" id="modalArtist"></span>
                <h2 class="event-modal-title" id="modalTitle"></h2>
                <p class="event-modal-description" id="modalDescription"></p>
                <div class="event-modal-details">
                    <div class="event-modal-detail">
                        <i class="fas fa-calendar-alt"></i>
                        <div>
                            <span class="detail-label">Date</span>
                            <span class="detail-value" id="modalDate"></span>
                        </div>
                    </div>
                    <div class="event-modal-detail">
                        <i class="fas fa-clock"></i>
                        <div>
                            <span class="detail-label">Time</span>
                            <span class="detail-value" id="modalTime"></span>
                        </div>
                    </div>
                    <div class="event-modal-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <span class="detail-label">Venue</span>
                            <span class="detail-value" id="modalVenue"></span>
                        </div>
                    </div>
                    <div class="event-modal-detail">
                        <i class="fas fa-ticket-alt"></i>
                        <div>
                            <span class="detail-label">Price</span>
                            <span class="detail-value" id="modalPrice"></span>
                        </div>
                    </div>
                </div>
                <div class="event-modal-actions">
                    <a href="https://wa.me/919876543210" class="cta-btn cta-btn-primary">
                        <span class="cta-btn-text">BOOK NOW</span>
                        <span class="cta-btn-glow"></span>
                    </a>
                    <a href="tel:+919876543210" class="cta-btn cta-btn-secondary">
                        <span class="cta-btn-text">CALL US</span>
                        <span class="cta-btn-glow"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ===== AMBIANCE GALLERY ===== -->
    <section class="ambiance-gallery">
        <div class="gallery-grid">
            <div class="gallery-item glass-card" style="grid-column: span 2; grid-row: span 2;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bar-area.avif" alt="Bar Area">
                <div class="image-overlay">
                    <span class="neon-text">THE BAR</span>
                </div>
            </div>
            <div class="gallery-item glass-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bowling.avif" alt="Bowling">
                <div class="image-overlay">
                    <span class="neon-text">BOWLING</span>
                </div>
            </div>
            <div class="gallery-item glass-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vip-lounge.jpg" alt="VIP Lounge">
                <div class="image-overlay">
                    <span class="neon-text">VIP</span>
                </div>
            </div>
            <div class="gallery-item glass-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/games.jpg" alt="Games">
                <div class="image-overlay">
                    <span class="neon-text">ARCADE</span>
                </div>
            </div>
            <div class="gallery-item glass-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hookah.avif" alt="Hookah">
                <div class="image-overlay">
                    <span class="neon-text">LOUNGE</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <!-- Animated Blob Backgrounds -->
        <div class="cta-blob cta-blob-1"></div>
        <div class="cta-blob cta-blob-2"></div>
        <div class="cta-blob cta-blob-3"></div>

        <div class="container">
            <div class="cta-content glass-panel">
                <h2 class="cta-title">
                    READY FOR THE <span class="gradient-text gradient-animate">ULTIMATE</span> EXPERIENCE?
                </h2>

                <div class="cta-stats">
                    <div class="cta-stat">
                        <span class="stat-value gradient-text">5000+</span>
                        <span class="stat-label">HAPPY GUESTS</span>
                    </div>
                    <div class="cta-stat">
                        <span class="stat-value gradient-text">100+</span>
                        <span class="stat-label">5-STAR REVIEWS</span>
                    </div>
                    <div class="cta-stat">
                        <span class="stat-value gradient-text">24/7</span>
                        <span class="stat-label">PARTY VIBES</span>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="/reservation" class="cta-btn cta-btn-primary">
                        <span class="cta-btn-text">BOOK YOUR TABLE</span>
                        <span class="cta-btn-glow"></span>
                    </a>
                    <a href="/contact" class="cta-btn cta-btn-secondary">
                        <span class="cta-btn-text">CONTACT US</span>
                        <span class="cta-btn-glow"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>