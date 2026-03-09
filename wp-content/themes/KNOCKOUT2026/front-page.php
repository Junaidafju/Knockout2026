<?php
/**
 * Front Page Template
 * 
 * @package KnockOut_Theme
 */

get_header(); ?>

<main id="primary" class="site-main front-page">
    
    <!-- Hero Section with Video Background -->
    <section class="hero-section">
        <div class="video-background">
            <video autoplay muted loop playsinline>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/hero-background.mp4" type="video/mp4">
            </video>
            <div class="overlay"></div>
        </div>
        
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="line1">KNOCKOUT</span>
                <span class="line2">Kolkata's Ultimate Bowling Destination</span>
            </h1>
            
            <div class="hero-buttons">
                <a href="/menu" class="btn btn-primary">EXPLORE MENU</a>
                <a href="/events" class="btn btn-outline">VIEW EVENTS</a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </section>
    
    <!-- Moving Marquee Text (Wave Style) -->
    <section class="marquee-section">
        <div class="marquee">
            <div class="marquee-content">
                <span>KNOCKOUT BRINGS, FOR THE FIRST TIME IN KOLKATA, AN UNMATCHED SPORTS AND ENTERTAINMENT DESTINATION! </span>
                <span>INDULGE IN GOURMET FOOD, SIGNATURE DRINKS, LIVE SCREENINGS, EXCLUSIVE HOOKAH, AND THE CITY'S BEST AMBIANCE — ALL UNDER ONE VIBRANT ROOF. </span>
                <span>EXPERIENCE FUN, FLAVOR, AND EXCITEMENT REDEFINED — ONLY AT KNOCKOUT, KOLKATA'S ULTIMATE HANGOUT SPOT! </span>
            </div>
            <div class="marquee-content" aria-hidden="true">
                <span>KNOCKOUT BRINGS, FOR THE FIRST TIME IN KOLKATA, AN UNMATCHED SPORTS AND ENTERTAINMENT DESTINATION! </span>
                <span>INDULGE IN GOURMET FOOD, SIGNATURE DRINKS, LIVE SCREENINGS, EXCLUSIVE HOOKAH, AND THE CITY'S BEST AMBIANCE — ALL UNDER ONE VIBRANT ROOF. </span>
                <span>EXPERIENCE FUN, FLAVOR, AND EXCITEMENT REDEFINED — ONLY AT KNOCKOUT, KOLKATA'S ULTIMATE HANGOUT SPOT! </span>
            </div>
        </div>
    </section>
    
    <!-- About KnockOut Section -->
    <section class="about-knockout">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">About KnockOut</span>
                <h2 class="section-title">Kolkata's Premier Experiential Hub where the thrill of cutting-edge sports technology meets the indulgence of a lavish culinary experience.</h2>
            </div>
            
            <div class="about-content">
                <p class="about-text">We are more than just a venue - we're a destination that transforms ordinary moments into extraordinary experiences, bringing together the excitement of sports with the pleasure of dining.</p>
                
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon">📍</div>
                        <h3>Premium Location</h3>
                        <p>Strategically located in the heart of Kolkata for easy accessibility.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">✨</div>
                        <h3>Modern Ambiance</h3>
                        <p>Contemporary design blending sports energy with sophisticated dining.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">🤝</div>
                        <h3>Community Hub</h3>
                        <p>A gathering place for sports enthusiasts and food lovers alike.</p>
                    </div>
                </div>
                
                <div class="about-cta">
                    <a href="/about" class="btn btn-secondary">Discover More →</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Our Vision Section -->
    <section class="vision-section">
        <div class="container">
            <div class="vision-grid">
                <div class="vision-content">
                    <h2>Our Vision</h2>
                    <p>Our vision is to transcend the ordinary, offering a dynamic and immersive environment that caters to every facet of leisure. We envision a space where friends, families, and corporate teams can connect, compete, and celebrate, creating unforgettable memories through a seamless fusion of active entertainment, sophisticated dining, and vibrant social spaces.</p>
                    
                    <div class="vision-stats">
                        <div class="stat">
                            <span class="stat-number">6</span>
                            <span class="stat-label">Lane Bowling</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">10+</span>
                            <span class="stat-label">Games</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Menu Items</span>
                        </div>
                    </div>
                </div>
                
                <div class="vision-features">
                    <div class="vision-feature">
                        <h3>State-of-the-Art Facilities</h3>
                        <p>Featuring the latest in sports simulation technology and interactive gaming.</p>
                    </div>
                    
                    <div class="vision-feature">
                        <h3>Gourmet Dining</h3>
                        <p>Curated menu featuring international cuisine and signature cocktails.</p>
                    </div>
                    
                    <div class="vision-feature">
                        <h3>Exclusive Events</h3>
                        <p>Host your next corporate event or private party in our premium spaces.</p>
                    </div>
                </div>
            </div>
            
            <div class="vision-cta">
                <a href="/menu" class="btn btn-primary">Explore Our Menu →</a>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us Section -->
    <section class="why-choose">
        <div class="container">
            <h2 class="section-title">Why Choose Us</h2>
            <p class="section-subtitle">Discover what makes KnockOut the ultimate destination for sports enthusiasts and food lovers alike.</p>
            
            <div class="reasons-grid">
                <div class="reason-card">
                    <div class="reason-icon">🏆</div>
                    <h3>Championship Experience</h3>
                    <p>Compete in our regular tournaments and leagues with professional-grade equipment.</p>
                </div>
                
                <div class="reason-card">
                    <div class="reason-icon">🍽️</div>
                    <h3>Gourmet Cuisine</h3>
                    <p>Savor dishes crafted by award-winning chefs using locally-sourced ingredients.</p>
                </div>
                
                <div class="reason-card">
                    <div class="reason-icon">🍸</div>
                    <h3>Craft Cocktails</h3>
                    <p>Enjoy signature drinks and premium spirits at our fully-stocked bar.</p>
                </div>
                
                <div class="reason-card">
                    <div class="reason-icon">🎉</div>
                    <h3>Event Hosting</h3>
                    <p>Perfect venue for birthdays, corporate events, and private parties.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Meet Our Leader Section -->
    <section class="leader-section">
        <div class="container">
            <div class="leader-grid">
                <div class="leader-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sumit-bathwal.jpg" alt="Mr. Sumit Bathwal - Founder">
                </div>
                
                <div class="leader-content">
                    <span class="section-subtitle">Meet Our Leader</span>
                    <h2>Visionary leadership driving innovation and excellence.</h2>
                    
                    <h3 class="leader-name">Mr. Sumit Bathwal</h3>
                    <p class="leader-title">Founder</p>
                    
                    <p class="leader-bio">With over a decade of experience in hospitality and sports management, Sumit Bathwal brings visionary leadership to KnockOut. His passion for creating unique experiences and commitment to excellence drives our mission to revolutionize the sports and dining landscape in Kolkata.</p>
                    
                    <p class="leader-bio">Under his leadership, KnockOut has become a premier destination that seamlessly blends cutting-edge technology with exceptional culinary experiences, setting new standards in the industry.</p>
                    
                    <div class="leader-stats">
                        <div class="leader-stat">
                            <span class="stat-value">10+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                        <div class="leader-stat">
                            <span class="stat-value">🏆</span>
                            <span class="stat-label">Innovation Leader</span>
                        </div>
                        <div class="leader-stat">
                            <span class="stat-value">🤝</span>
                            <span class="stat-label">Community Builder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Our Services Section -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Six exceptional experiences under one roof, designed to create unforgettable memories</p>
            
            <div class="services-grid">
                <!-- Service 1: Food Menu -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/food-menu.jpg" alt="Lavish Food Menu">
                    </div>
                    <div class="service-content">
                        <h3>Lavish Food Menu</h3>
                        <p>Exquisite culinary experiences with diverse international cuisines crafted by expert chefs</p>
                        <div class="service-tags">
                            <span>Multi-cuisine Restaurant</span>
                            <span>Fine Dining</span>
                            <span>Quick Bites</span>
                            <span>Special Menu</span>
                        </div>
                    </div>
                </div>
                
                <!-- Service 2: Pubs & Bars -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bar.jpg" alt="Extraordinary Pubs & Bars">
                    </div>
                    <div class="service-content">
                        <h3>Extraordinary Pubs & Bars</h3>
                        <p>Premium beverages, craft cocktails, and vibrant nightlife in our sophisticated lounge</p>
                        <div class="service-tags">
                            <span>Craft Cocktails</span>
                            <span>Premium Spirits</span>
                            <span>Live Music</span>
                            <span>Night Events</span>
                        </div>
                    </div>
                </div>
                
                <!-- Service 3: Hookah Lounge -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hookah.jpg" alt="Hookah Lounge">
                    </div>
                    <div class="service-content">
                        <h3>Hookah Lounge</h3>
                        <p>Relaxing hookah experience in our elegantly designed lounge with premium flavors</p>
                        <div class="service-tags">
                            <span>Premium Flavors</span>
                            <span>Cozy Ambiance</span>
                            <span>Private Sections</span>
                            <span>Expert Service</span>
                        </div>
                    </div>
                </div>
                
                <!-- Service 4: Bowling -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bowling.jpg" alt="6 Lane Bowling">
                    </div>
                    <div class="service-content">
                        <h3>6 Lane Bowling</h3>
                        <p>First-of-its-kind 6 lane bowling experience in Kolkata with state-of-the-art equipment</p>
                        <div class="service-tags">
                            <span>6 Professional Lanes</span>
                            <span>Digital Scoring</span>
                            <span>Party Packages</span>
                            <span>First in Kolkata</span>
                        </div>
                    </div>
                </div>
                
                <!-- Service 5: AR/VR & Arcade -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arcade.jpg" alt="AR/VR & Arcade Games">
                    </div>
                    <div class="service-content">
                        <h3>AR/VR & Arcade Games</h3>
                        <p>Cutting-edge AR/VR experiences and classic arcade games for ultimate entertainment</p>
                        <div class="service-tags">
                            <span>VR Gaming Zones</span>
                            <span>AR Experiences</span>
                            <span>Classic Arcade</span>
                            <span>Racing Simulators</span>
                        </div>
                    </div>
                </div>
                
                <!-- Service 6: Live Screenings -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screenings.jpg" alt="Live Screenings">
                    </div>
                    <div class="service-content">
                        <h3>Live Screenings</h3>
                        <p>Experience live sports screenings on giant screens with an electrifying atmosphere.</p>
                        <div class="service-tags">
                            <span>Giant Screens</span>
                            <span>Stadium Sound</span>
                            <span>Live Commentary</span>
                            <span>Special Offers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Choose KnockOut (Compact) -->
    <section class="why-compact">
        <div class="container">
            <h2>Why Choose KnockOut?</h2>
            <p class="compact-subtitle">We've created Kolkata's first comprehensive entertainment complex where you don't need to go anywhere else for a complete experience</p>
            
            <div class="compact-grid">
                <div class="compact-item">
                    <div class="compact-icon">🏢</div>
                    <h3>Everything Under One Roof</h3>
                    <p>No need to travel between places - dining, bowling, and nightlife all in one location</p>
                </div>
                
                <div class="compact-item">
                    <div class="compact-icon">🥇</div>
                    <h3>First-of-its-Kind in Kolkata</h3>
                    <p>Experience the city's first 6-lane bowling alley and most advanced AR/VR gaming zone</p>
                </div>
                
                <div class="compact-item">
                    <div class="compact-icon">⭐</div>
                    <h3>Premium Quality Experience</h3>
                    <p>Every service is designed with attention to detail and premium standards</p>
                </div>
            </div>
            
            <div class="compact-stats">
                <div class="compact-stat">
                    <span class="stat-number">5+</span>
                    <span class="stat-label">Unique Experiences</span>
                </div>
                <div class="compact-stat">
                    <span class="stat-number">Premium</span>
                    <span class="stat-label">Dining Options</span>
                </div>
                <div class="compact-stat">
                    <span class="stat-number">1st</span>
                    <span class="stat-label">in Kolkata</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Events Section -->
    <section class="events-section">
        <div class="container">
            <h2 class="section-title">Events at KnockOut</h2>
            <p class="section-subtitle">Upcoming Events</p>
            
            <div class="events-grid">
                <!-- Event 1 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event1.jpg" alt="Rochelle Fernandez">
                    </div>
                    <div class="event-content">
                        <h3>Rochelle Fernandez</h3>
                        <p class="event-artist">DJ Maaru & DJ Rindi</p>
                        <p class="event-info">Tickets available at all Knockout outlets. Free entry for members.</p>
                        <a href="/events" class="btn btn-small">Event Details →</a>
                    </div>
                </div>
                
                <!-- Event 2 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event2.jpg" alt="Billie Elish">
                    </div>
                    <div class="event-content">
                        <h3>Billie Elish</h3>
                        <p class="event-artist">Green Party</p>
                        <p class="event-info">Tickets available at all Knockout outlets. Free entry for members.</p>
                        <a href="/events" class="btn btn-small">Event Details →</a>
                    </div>
                </div>
                
                <!-- Event 3 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event3.jpg" alt="Michael Scott">
                    </div>
                    <div class="event-content">
                        <h3>Michael Scott</h3>
                        <p class="event-artist">DJ Dinda & DJ Scott</p>
                        <p class="event-info">Tickets available at all Knockout outlets. Free entry for members.</p>
                        <a href="/events" class="btn btn-small">Event Details →</a>
                    </div>
                </div>
                
                <!-- Event 4 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event4.jpg" alt="James Fisher">
                    </div>
                    <div class="event-content">
                        <h3>James Fisher</h3>
                        <p class="event-artist">Special Show At Knockout</p>
                        <p class="event-info">Tickets available at all Knockout outlets. Free entry for members.</p>
                        <a href="/events" class="btn btn-small">Event Details →</a>
                    </div>
                </div>
                
                <!-- Event 5 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event5.jpg" alt="Sao Paulo">
                    </div>
                    <div class="event-content">
                        <h3>Sao Paulo</h3>
                        <p class="event-artist">Party Nights</p>
                        <p class="event-info">Chillout this party night with Sao Paulo</p>
                        <a href="/events" class="btn btn-small">Event Details →</a>
                    </div>
                </div>
                
                <!-- Event 6 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event6.jpg" alt="DJ vega">
                    </div>
                    <div class="event-content">
                        <h3>DJ vega</h3>
                        <p class="event-artist">Party Nights</p>
                        <p class="event-info">Deep dive into green party.</p>
                        <a href="/events" class="btn btn-small">Event Details →</a>
                    </div>
                </div>
                
                <!-- Event 7 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event7.jpg" alt="Mascaken">
                    </div>
                    <div class="event-content">
                        <h3>Mascaken</h3>
                        <p class="event-artist">DJ Party</p>
                        <p class="event-info">Free Parking | DJ Party | 25 Dec 2024 | 10:00 AM</p>
                        <a href="/events" class="btn btn-small">Event Details →</a>
                    </div>
                </div>
                
                <!-- Event 8 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event8.jpg" alt="DJ Karibo">
                    </div>
                    <div class="event-content">
                        <h3>DJ Karibo</h3>
                        <p class="event-artist">After Work Party</p>
                        <p class="event-info">Start your weekend journey with night DJ party.</p>
                        <a href="/events" class="btn btn-small">Event Details →</a>
                    </div>
                </div>
                
                <!-- Event 9 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event9.jpg" alt="DJ Laotaro">
                    </div>
                    <div class="event-content">
                        <h3>DJ Laotaro</h3>
                        <p class="event-artist">Glow Night Party</p>
                        <p class="event-info">Fre Drinks | DJ Laotaro | 25 Dec 2024 | 10:00 AM</p>
                        <a href="/events" class="btn btn-small">Event Details →</a>
                    </div>
                </div>
            </div>
            
            <!-- Events CTA -->
            <div class="events-cta">
                <h3>Ready to Join Our Events?</h3>
                <p>Don't miss out on these amazing learning opportunities!</p>
                <a href="/events" class="btn btn-primary">Register Now</a>
            </div>
        </div>
    </section>
    
</main>

<?php get_footer(); ?>