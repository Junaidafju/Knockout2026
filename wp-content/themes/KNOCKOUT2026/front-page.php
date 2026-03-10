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
                    </div>
                </div>

                <!-- Right Column: Hero Content with Gradient -->
                <div class="hero-content-col">
                    <div class="neon-badge animate-fade-in">
                        <span class="neon-text">KOLKATA'S FINEST</span>
                    </div>

                    <h1 class="hero-title animate-slide-up">
                        <span class="title-line">WHERE <span class="gradient-text">SPORTS</span></span>
                        <span class="title-line">MEETS <span
                                class="gradient-text gradient-animate">NIGHTLIFE</span></span>
                    </h1>

                    <div class="hero-stats animate-slide-up delay-1">
                        <div class="stat-item">
                            <span class="stat-number gradient-text">6 Lane</span>
                            <span class="stat-label">BOWLING ALLEY</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number gradient-text">50+</span>
                            <span class="stat-label">GAMES</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number gradient-text">∞</span>
                            <span class="stat-label">VIBES</span>
                        </div>
                    </div>

                    <div class="hero-cta animate-slide-up delay-2">
                        <a href="#experience" class="neon-cta primary-cta">
                            <span>EXPLORE THE <span class="gradient-text">EXPERIENCE</span></span>
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
        <div class="ko-container container">
            <div class="ko-section-header ko-fade-in-up">
                <h2>Why <span>Choose Us</span></h2>
                <p>Discover what makes KnockOut the ultimate destination for sports enthusiasts and food lovers alike.
                </p>
            </div>

            <div class="ko-features-grid">
                <div class="ko-feature-card ko-fade-in-up ko-delay-1">
                    <div class="ko-feature-icon-circle">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3 class="ko-feature-card-title">Championship Experience</h3>
                    <p class="ko-feature-card-desc">Compete in our regular tournaments and leagues with
                        professional-grade equipment.</p>
                </div>

                <div class="ko-feature-card ko-fade-in-up ko-delay-2">
                    <div class="ko-feature-icon-circle">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="ko-feature-card-title">Gourmet Cuisine</h3>
                    <p class="ko-feature-card-desc">Savor dishes crafted by award-winning chefs using locally-sourced
                        ingredients.</p>
                </div>

                <div class="ko-feature-card ko-fade-in-up ko-delay-3">
                    <div class="ko-feature-icon-circle">
                        <i class="fas fa-cocktail"></i>
                    </div>
                    <h3 class="ko-feature-card-title">Craft Cocktails</h3>
                    <p class="ko-feature-card-desc">Enjoy signature drinks and premium spirits at our fully-stocked bar.
                    </p>
                </div>

                <div class="ko-feature-card ko-fade-in-up ko-delay-1">
                    <div class="ko-feature-icon-circle">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="ko-feature-card-title">Event Hosting</h3>
                    <p class="ko-feature-card-desc">Perfect venue for birthdays, corporate events, and private parties.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- ===== OUR SERVICES ===== -->
    <div class="services-wrapper section-wrapper animate-in">
        <section class="services-section" id="services">
            <div class="container">
                <div class="ko-section-header ko-fade-in-up">
                    <h2>Our <span>Services</span></h2>
                    <p>Six exceptional experiences under one roof, designed to create unforgettable memories</p>
                </div>

                <div class="services-grid">
                    <div class="service-card food-card">
                        <div class="card-image">
                            <img src="https://png.pngtree.com/thumb_back/fw800/background/20231022/pngtree-indulge-in-a-delectable-meal-grilled-chicken-salad-on-a-stylish-image_13645831.png"
                                alt="Lavish Food Menu">
                            <div class="card-overlay">
                                <div class="card-icon"><i class="fas fa-utensils"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="service-title">Lavish Food Menu</h3>
                            <p class="service-description">Exquisite culinary experiences with diverse international
                                cuisines crafted by expert chefs</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Multi-cuisine Restaurant</li>
                                <li><i class="fas fa-check"></i> Fine Dining</li>
                                <li><i class="fas fa-check"></i> Quick Bites</li>
                                <li><i class="fas fa-check"></i> Special Menu</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-card bar-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?w=800&amp;h=600&amp;fit=crop&amp;crop=center"
                                alt="Extraordinary Pubs &amp; Bars">
                            <div class="card-overlay">
                                <div class="card-icon"><i class="fas fa-cocktail"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="service-title">Extraordinary Pubs &amp; Bars</h3>
                            <p class="service-description">Premium beverages, craft cocktails, and vibrant nightlife in
                                our sophisticated lounge</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Craft Cocktails</li>
                                <li><i class="fas fa-check"></i> Premium Spirits</li>
                                <li><i class="fas fa-check"></i> Live Music</li>
                                <li><i class="fas fa-check"></i> Night Events</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-card hookah-card">
                        <div class="card-image">
                            <img src="https://t4.ftcdn.net/jpg/04/68/57/69/360_F_468576967_Z41MAuOX6z7uyv3S9uq49MN6iDaUnfGW.jpg"
                                alt="Hookah Lounge">
                            <div class="card-overlay">
                                <div class="card-icon"><i class="fas fa-smoking"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="service-title">Hookah Lounge</h3>
                            <p class="service-description">Relaxing hookah experience in our elegantly designed lounge
                                with premium flavors</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Premium Flavors</li>
                                <li><i class="fas fa-check"></i> Cozy Ambiance</li>
                                <li><i class="fas fa-check"></i> Private Sections</li>
                                <li><i class="fas fa-check"></i> Expert Service</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-card bowling-card">
                        <div class="card-image">
                            <img src="https://torq03.com/wp-content/uploads/2024/11/PowerClip-Rectangle-3.jpg"
                                alt="6 Lane Bowling">
                            <div class="card-overlay">
                                <div class="card-icon"><i class="fas fa-bowling-ball"></i></div>
                                <div class="card-highlight">
                                    <span class="highlight-number">6</span>
                                    <span class="highlight-text">Lane Bowling</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="service-title">6 Lane Bowling</h3>
                            <p class="service-description">First-of-its-kind 6 lane bowling experience in Kolkata with
                                state-of-the-art equipment</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> 6 Professional Lanes</li>
                                <li><i class="fas fa-check"></i> Digital Scoring</li>
                                <li><i class="fas fa-check"></i> Party Packages</li>
                                <li><i class="fas fa-check"></i> First in Kolkata</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-card gaming-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?w=800&amp;h=600&amp;fit=crop&amp;crop=center"
                                alt="AR/VR &amp; Arcade Games">
                            <div class="card-overlay">
                                <div class="card-icon"><i class="fas fa-vr-cardboard"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="service-title">AR/VR &amp; Arcade Games</h3>
                            <p class="service-description">Cutting-edge AR/VR experiences and classic arcade games for
                                ultimate entertainment</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> VR Gaming Zones</li>
                                <li><i class="fas fa-check"></i> AR Experiences</li>
                                <li><i class="fas fa-check"></i> Classic Arcade</li>
                                <li><i class="fas fa-check"></i> Racing Simulators</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-card live-screening-card">
                        <div class="card-image">
                            <img src="https://www.fanzo.com/_next/image?url=https%3A%2F%2Fmatchpint-cdn.matchpint.cloud%2Fshared%2Fimg%2Fpub%2F17843%2F240865805-1656583041_banner.jpeg&amp;w=3840&amp;q=75"
                                alt="Live Screenings">
                            <div class="card-overlay">
                                <div class="card-icon"><i class="fas fa-tv"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="service-title">Live Screenings</h3>
                            <p class="service-description">Experience live sports screenings on giant screens with an
                                electrifying atmosphere.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Giant Screens</li>
                                <li><i class="fas fa-check"></i> Stadium Sound</li>
                                <li><i class="fas fa-check"></i> Live Commentary</li>
                                <li><i class="fas fa-check"></i> Special Offers</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="why-choose-section">
                    <div class="why-choose-content">
                        <h3 class="why-title">Why Choose KnockOut?</h3>
                        <p class="why-subtitle">We've created Kolkata's first comprehensive entertainment complex where
                            you don't need to go anywhere else for a complete experience</p>

                        <div class="why-features">
                            <div class="feature-item">
                                <div class="feature-icon"><i class="fas fa-check-circle"></i></div>
                                <div class="feature-content">
                                    <h4>Everything Under One Roof</h4>
                                    <p>No need to travel between places - dining, bowling, and nightlife all in one
                                        location</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon"><i class="fas fa-star"></i></div>
                                <div class="feature-content">
                                    <h4>First-of-its-Kind in Kolkata</h4>
                                    <p>Experience the city's first 6-lane bowling alley and most advanced AR/VR gaming
                                        zone</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon"><i class="fas fa-gem"></i></div>
                                <div class="feature-content">
                                    <h4>Premium Quality Experience</h4>
                                    <p>Every service is designed with attention to detail and premium standards</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="why-stats">
                        <div class="stat-card">
                            <div class="stat-number">5+</div>
                            <div class="stat-label">Unique Experiences</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">Premium</div>
                            <div class="stat-label">Dining Options</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">1st</div>
                            <div class="stat-label">in Kolkata</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== EVENTS CAROUSEL ===== -->
        <section class="events-section">
            <div class="container">
                <div class="section-header">
                    <span class="section-subtitle neon-text">NIGHTLIFE</span>
                    <h2 class="section-title">UPCOMING <span class="gradient-text gradient-animate">EVENTS</span></h2>
                    <div class="neon-divider"></div>
                </div>

                <div class="events-carousel-wrapper">
                    <!-- Navigation Arrows -->
                    <button class="carousel-nav carousel-nav-prev" aria-label="Previous events">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="carousel-nav carousel-nav-next" aria-label="Next events">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <!-- Carousel Container with Fixed Viewport -->
                    <div class="events-carousel-container">
                        <div class="events-carousel-track">

                            <!-- Card 1 -->
                            <div class="event-card" data-index="0" data-date="March 15, 2026"
                                data-time="9:00 PM — 5:00 AM" data-venue="Knockout Main Stage" data-price="₹999">
                                <div class="card-background">
                                    <div class="character-image">
                                        <img src="https://img.freepik.com/free-psd/club-dj-party-flyer-social-media-post_505751-3062.jpg"
                                            alt="Rochelle Fernandez" class="instructor-photo" loading="lazy">
                                    </div>
                                    <div class="card-content">
                                        <div class="event-footer">
                                            <div class="event-info">
                                                <div class="instructor-name">Rochelle Fernandez</div>
                                                <h3 class="event-title">DJ Maaru &amp; DJ Rindi</h3>
                                                <p class="event-description">Tickets available at all Knockout outlets.
                                                    Free entry for members.</p>
                                            </div>
                                            <button class="event-details-btn">Event Details <i
                                                    class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-reflection"></div>
                            </div>

                            <!-- Card 2 -->
                            <div class="event-card" data-index="1" data-date="March 22, 2026"
                                data-time="8:00 PM — 3:00 AM" data-venue="Knockout Lounge" data-price="₹799">
                                <div class="card-background">
                                    <div class="character-image">
                                        <img src="https://img.freepik.com/premium-psd/green-party-neon-social-media-post-flyer-template_516218-199.jpg"
                                            alt="Billie Elish" class="instructor-photo" loading="lazy">
                                    </div>
                                    <div class="card-content">
                                        <div class="event-footer">
                                            <div class="event-info">
                                                <div class="instructor-name">Billie Elish</div>
                                                <h3 class="event-title">Green Party</h3>
                                                <p class="event-description">Tickets available at all Knockout outlets.
                                                    Free entry for members.</p>
                                            </div>
                                            <button class="event-details-btn">Event Details <i
                                                    class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-reflection"></div>
                            </div>

                            <!-- Card 3 -->
                            <div class="event-card" data-index="2" data-date="March 29, 2026"
                                data-time="9:30 PM — 4:00 AM" data-venue="Knockout Main Stage" data-price="₹899">
                                <div class="card-background">
                                    <div class="character-image">
                                        <img src="https://img.freepik.com/free-psd/saturday-party-promotion-post_505751-5167.jpg?semt=ais_hybrid&amp;w=740&amp;q=80"
                                            alt="Michael Scott" class="instructor-photo" loading="lazy">
                                    </div>
                                    <div class="card-content">
                                        <div class="event-footer">
                                            <div class="event-info">
                                                <div class="instructor-name">Michael Scott</div>
                                                <h3 class="event-title">DJ Dinda &amp; DJ Scott</h3>
                                                <p class="event-description">Tickets available at all Knockout outlets.
                                                    Free entry for members.</p>
                                            </div>
                                            <button class="event-details-btn">Event Details <i
                                                    class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-reflection"></div>
                            </div>

                            <!-- Card 4 -->
                            <div class="event-card" data-index="3" data-date="April 5, 2026"
                                data-time="8:00 PM — 2:00 AM" data-venue="Knockout VIP Deck" data-price="₹1,499">
                                <div class="card-background">
                                    <div class="character-image">
                                        <img src="https://www.creative-flyers.com/wp-content/uploads/2023/03/DJ-Event-Promo-Design-1.jpg"
                                            alt="James Fisher" class="instructor-photo" loading="lazy">
                                    </div>
                                    <div class="card-content">
                                        <div class="event-footer">
                                            <div class="event-info">
                                                <div class="instructor-name">James Fisher</div>
                                                <h3 class="event-title">Special Show At Knockout</h3>
                                                <p class="event-description">Tickets available at all Knockout outlets.
                                                    Free entry for members.</p>
                                            </div>
                                            <button class="event-details-btn">Event Details <i
                                                    class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-reflection"></div>
                            </div>

                            <!-- Card 5 -->
                            <div class="event-card" data-index="4" data-date="April 12, 2026"
                                data-time="10:00 PM — 5:00 AM" data-venue="Knockout Main Stage" data-price="₹699">
                                <div class="card-background">
                                    <div class="character-image">
                                        <img src="https://img.freepik.com/premium-psd/mix-electro-party-dj-event-flyer-template_951415-802.jpg?semt=ais_hybrid&amp;w=740&amp;q=80"
                                            alt="Sao Paulo" class="instructor-photo" loading="lazy">
                                    </div>
                                    <div class="card-content">
                                        <div class="event-footer">
                                            <div class="event-info">
                                                <div class="instructor-name">Sao Paulo</div>
                                                <h3 class="event-title">Party Nights</h3>
                                                <p class="event-description">Chillout this party night with Sao Paulo
                                                </p>
                                            </div>
                                            <button class="event-details-btn">Event Details <i
                                                    class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-reflection"></div>
                            </div>

                            <!-- Card 6 -->
                            <div class="event-card" data-index="5" data-date="April 19, 2026"
                                data-time="9:00 PM — 4:00 AM" data-venue="Knockout Lounge" data-price="₹599">
                                <div class="card-background">
                                    <div class="character-image">
                                        <img src="https://img.freepik.com/premium-psd/green-party-flyer-social-media-post-web-banner_483912-893.jpg"
                                            alt="DJ vega" class="instructor-photo" loading="lazy">
                                    </div>
                                    <div class="card-content">
                                        <div class="event-footer">
                                            <div class="event-info">
                                                <div class="instructor-name">DJ Vega</div>
                                                <h3 class="event-title">Party Nights</h3>
                                                <p class="event-description">Deep dive into green party.</p>
                                            </div>
                                            <button class="event-details-btn">Event Details <i
                                                    class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-reflection"></div>
                            </div>

                            <!-- Card 7 -->
                            <div class="event-card" data-index="6" data-date="December 25, 2024"
                                data-time="10:00 AM — 6:00 PM" data-venue="Knockout Party Hall" data-price="FREE">
                                <div class="card-background">
                                    <div class="character-image">
                                        <img src="https://img.freepik.com/premium-psd/night-dj-party-flyer-social-media-post-with-green-color_507402-362.jpg"
                                            alt="Mascaken" class="instructor-photo" loading="lazy">
                                    </div>
                                    <div class="card-content">
                                        <div class="event-footer">
                                            <div class="event-info">
                                                <div class="instructor-name">Mascaken</div>
                                                <h3 class="event-title">DJ Party</h3>
                                                <p class="event-description">Free Parking | DJ Party | 25 Dec 2024 |
                                                    10:00 AM</p>
                                            </div>
                                            <button class="event-details-btn">Event Details <i
                                                    class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-reflection"></div>
                            </div>

                            <!-- Card 8 -->
                            <div class="event-card" data-index="7" data-date="Every Friday"
                                data-time="9:00 PM — 3:00 AM" data-venue="Knockout Main Stage" data-price="₹499">
                                <div class="card-background">
                                    <div class="character-image">
                                        <img src="https://img.freepik.com/premium-psd/club-dj-party-flyer-social-media-post_373138-1188.jpg"
                                            alt="DJ Karibo" class="instructor-photo" loading="lazy">
                                    </div>
                                    <div class="card-content">
                                        <div class="event-footer">
                                            <div class="event-info">
                                                <div class="instructor-name">DJ Karibo</div>
                                                <h3 class="event-title">Knockout Friday</h3>
                                                <p class="event-description">Every Friday is a knockout at Knockout.
                                                    Special DJ sets all night.</p>
                                            </div>
                                            <button class="event-details-btn">Event Details <i
                                                    class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-reflection"></div>
                            </div>

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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vip-lounge.jpg"
                        alt="VIP Lounge">
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