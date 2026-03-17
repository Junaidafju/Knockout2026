<?php
/**
 * Template Name: Activities Page
 * Description: Hardcoded neon gaming activities page
 */

get_header();
?>
<div class="activities-page">
    <div class="circuit-bg"></div>

    <!-- Loading Animation -->
    <div class="loading-skeleton" id="loading">
        <div class="neon-loader"></div>
    </div>

    <!-- 1️⃣ Hero Section -->
    <section class="activities-hero">
        <canvas id="particle-canvas"></canvas>
        <div class="hero-content">
            <div class="glitch-wrapper">
                <h1 class="glitch-text" data-text="Ultimate Sports Cafe & Gaming Arena">
                    Ultimate Sports Cafe & Gaming Arena
                </h1>
                <p>Experience Electrifying Sports Bar & Lounge, Futuristic Sports Technology, Signature Spirits, Fine
                    Dining & Live DJ Music
                </p>
            </div>

            <div class="game-tags">
                <span class="game-tag" style="--i:1">🎮 Golf</span>
                <span class="game-tag" style="--i:2">🏀 Basketball</span>
                <span class="game-tag" style="--i:3">🎯 Shooting</span>
                <span class="game-tag" style="--i:4">🔫 Laser Tag</span>
                <span class="game-tag" style="--i:5">⚽ Football</span>
                <span class="game-tag" style="--i:6">🎯 Darts</span>
            </div>

            <a href="#activities" class="btn-neon blue">
                Explore Activities
                <span>→</span>
            </a>
        </div>
    </section>


    <!-- ===== PREMIUM HIGHLIGHTS SECTION ===== -->
    <section class="premium-highlights-section">
        <!-- Complex Dark Patterned Background -->
        <div class="premium-bg" aria-hidden="true">
            <!-- Gradient Orbs -->
            <div class="bg-orb bg-orb--1"></div>
            <div class="bg-orb bg-orb--2"></div>
            <div class="bg-orb bg-orb--3"></div>
            <div class="bg-orb bg-orb--4"></div>

            <!-- Cyber Grid Pattern -->
            <div class="bg-grid"></div>

            <!-- Circuit Board Pattern -->
            <div class="bg-circuit"></div>

            <!-- Geometric Pattern -->
            <div class="bg-geometric"></div>

            <!-- Floating Particles -->
            <div class="bg-particles">
                <span class="particle" style="--i:1"></span>
                <span class="particle" style="--i:2"></span>
                <span class="particle" style="--i:3"></span>
                <span class="particle" style="--i:4"></span>
                <span class="particle" style="--i:5"></span>
                <span class="particle" style="--i:6"></span>
                <span class="particle" style="--i:7"></span>
                <span class="particle" style="--i:8"></span>
                <span class="particle" style="--i:9"></span>
                <span class="particle" style="--i:10"></span>
            </div>

            <!-- Scan Lines -->
            <div class="bg-scanlines"></div>

            <!-- Vignette Effect -->
            <div class="bg-vignette"></div>
        </div>

        <div class="premium-container">
            <!-- Header -->
            <div class="premium-header">
                <span class="premium-eyebrow gradient-text">THE KNOCKOUT EXPERIENCE</span>
                <h2 class="premium-title">Ultimate Sports Cafe & <span class="gradient-text">Gaming Arena</span></h2>
                <p class="premium-subtitle">Experience the stadium-like thrill of sports and gaming at our luxurious
                    sports café. With vibrant atmosphere, delicious bites, and a premium drinks menu, turn competitions
                    into celebrations at KnockOut.</p>
                <div class="premium-divider"></div>
            </div>

            <!-- Highlights Grid - 6 Cards -->
            <div class="highlights-grid">
                <!-- Card 1: Grand Parties -->
                <div class="highlight-card">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=600&auto=format"
                            alt="Grand Parties" loading="lazy">
                        <div class="media-overlay"></div>
                        <div class="card-icon">🎉</div>
                    </div>
                    <div class="card-content">
                        <h3>Grand Parties</h3>
                        <p class="card-description">Raise the bar of how you celebrate your special occasions. With
                            Gourmet dining, action-packed sports entertainment, sophisticated bar lounge, and radiant
                            vibes, every party night at Knockout gets only better.</p>
                        <a href="#" class="card-link">Explore Parties <span>→</span></a>
                    </div>
                    <div class="card-glow"></div>
                </div>

                <!-- Card 2: Luxury Dining -->
                <div class="highlight-card">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600&auto=format"
                            alt="Luxury Dining" loading="lazy">
                        <div class="media-overlay"></div>
                        <div class="card-icon">🍽️</div>
                    </div>
                    <div class="card-content">
                        <h3>Luxury Dining</h3>
                        <p class="card-description">Indulge in a luxurious culinary affair at Knockout Sports Café &
                            Restaurant. Global flavours, handpicked ingredients, and an elite setup at Knockout redefine
                            fine dining in Kolkata.</p>
                        <a href="#" class="card-link">View Menu <span>→</span></a>
                    </div>
                    <div class="card-glow"></div>
                </div>

                <!-- Card 3: Corporate Events -->
                <div class="highlight-card">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?w=600&auto=format"
                            alt="Corporate Events" loading="lazy">
                        <div class="media-overlay"></div>
                        <div class="card-icon">💼</div>
                    </div>
                    <div class="card-content">
                        <h3>Corporate Events</h3>
                        <p class="card-description">Host vibrant corporate events at Knockout, where stress takes a
                            break. From corporate team meetups to grand office celebrations, Knockout curates exclusive
                            corporate nights with premium dining, signature sips, and limitless fun.</p>
                        <a href="#" class="card-link">Plan Event <span>→</span></a>
                    </div>
                    <div class="card-glow"></div>
                </div>

                <!-- Card 4: Live Sports Screening -->
                <div class="highlight-card">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?w=600&auto=format"
                            alt="Live Sports Screening" loading="lazy">
                        <div class="media-overlay"></div>
                        <div class="card-icon">📺</div>
                    </div>
                    <div class="card-content">
                        <h3>Live Sports Screening</h3>
                        <p class="card-description">Experience nail-biting finishes to historical victories in a
                            stadium-like atmosphere at Knockout Sports Bar & Lounge. With live sports screening,
                            surround sound, and dedicated fan zones, celebrate your wins with premium drinks & luxury
                            bites.</p>
                        <a href="#" class="card-link">View Schedule <span>→</span></a>
                    </div>
                    <div class="card-glow"></div>
                </div>

                <!-- Card 5: Premium Bar Lounge -->
                <div class="highlight-card">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187?w=600&auto=format"
                            alt="Premium Bar Lounge" loading="lazy">
                        <div class="media-overlay"></div>
                        <div class="card-icon">🍸</div>
                    </div>
                    <div class="card-content">
                        <h3>Premium Bar Lounge</h3>
                        <p class="card-description">Raise your glasses at Knockout's luxury sports bar in Kolkata. Set
                            your mood with Knockout's stylish surroundings, handcrafted cocktails, signature spirits,
                            and radiant vibes. Ultimate destination to release your party animal.</p>
                        <a href="#" class="card-link">Explore Drinks <span>→</span></a>
                    </div>
                    <div class="card-glow"></div>
                </div>

                <!-- Card 6: Gaming Arena -->
                <div class="highlight-card">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1542751110-97427bbecf20?w=600&auto=format"
                            alt="Gaming Arena" loading="lazy">
                        <div class="media-overlay"></div>
                        <div class="card-icon">🎮</div>
                    </div>
                    <div class="card-content">
                        <h3>Gaming Arena</h3>
                        <p class="card-description">Step into Kolkata's most advanced gaming arena. With
                            state-of-the-art simulators, VR experiences, and competitive gaming zones, experience the
                            thrill of next-level entertainment at Knockout.</p>
                        <a href="#" class="card-link">Explore Games <span>→</span></a>
                    </div>
                    <div class="card-glow"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2️⃣ Activities Grid - MOBILE OPTIMIZED -->
    <section id="activities" class="activities-grid-section">
        <div class="section-container">
            <div class="section-header">
                <span class="section-subtitle gradient-text">GET KNOCKED OUT</span>
                <h2 class="section-title">One-of-a-Kind <span class="gradient-text">Gaming Zone</span></h2>
                <div class="neon-divider"></div>
            </div>

            <div class="grid-container">
                <!-- Virtual Tennis Challenge -->
                <div class="game-card" data-category="sports">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg"
                                alt="Virtual Tennis Challenge">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">🎾</div>
                        <h3>Virtual Tennis Challenge</h3>
                        <p class="card-excerpt">Test your sharp reflexes and surgical precision with Knockout's
                            fast-paced digital tennis game in Kolkata.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>

                <!-- Rapid Basketball Challenge -->
                <div class="game-card" data-category="sports">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg"
                                alt="Rapid Basketball Challenge">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">🏀</div>
                        <h3>Rapid Basketball Challenge</h3>
                        <p class="card-excerpt">Beat the clock with your free-throwing skills. Beat the timer and win
                            the challenge with our rapid basketball game.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>

                <!-- Video Archery -->
                <div class="game-card" data-category="shooting">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg" alt="Video Archery">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">🏹</div>
                        <h3>Video Archery</h3>
                        <p class="card-excerpt">Draw the arrows, hit the bullseye & dominate the leader board of our
                            fast-paced archery challenge at Knockout Sports Bar.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>

                <!-- Digital Football Game -->
                <div class="game-card" data-category="sports">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg" alt="Digital Football Game">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">⚽</div>
                        <h3>Digital Football Game</h3>
                        <p class="card-excerpt">Aim sharp, kick strong, and score like the super striker of the town.
                            Test your shooting skills in our interactive football arena.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>

                <!-- Live Shooting Range -->
                <div class="game-card" data-category="shooting">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg" alt="Live Shooting Range">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">🔫</div>
                        <h3>Live Shooting Range</h3>
                        <p class="card-excerpt">Feel the adrenaline rushing through your veins as you put your deadly
                            accuracy to the test in our live shooting range.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>

                <!-- Basketball Frenzy -->
                <div class="game-card" data-category="sports">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg" alt="Basketball Frenzy">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">🏀</div>
                        <h3>Basketball Frenzy</h3>
                        <p class="card-excerpt">Step up to the basketball rim and score as many points as you can before
                            the timer runs out. Ultimate fun time guaranteed.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>

                <!-- Dart Machine -->
                <div class="game-card" data-category="arcade">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg" alt="Dart Machine">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">🎯</div>
                        <h3>Dart Machine</h3>
                        <p class="card-excerpt">Steady your aim and hit the bullseye. Challenge friends in Knockout
                            Sports Bar's classic darts showdown.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>

                <!-- Shooting Hero -->
                <div class="game-card" data-category="shooting">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg" alt="Shooting Hero">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">🎯</div>
                        <h3>Shooting Hero</h3>
                        <p class="card-excerpt">Lock your aim and Knockout your targets with surgical precision.
                            Dominate the scoreboard like a real pro.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>

                <!-- Golf Simulation -->
                <div class="game-card" data-category="sports">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg" alt="Golf Simulation">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">⛳</div>
                        <h3>Golf Simulation</h3>
                        <p class="card-excerpt">Take on world-class golf courses with the pro golf simulators at
                            Knockout and keep swinging hard.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>

                <!-- Virtual Table Tennis -->
                <div class="game-card" data-category="sports">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg" alt="Virtual Table Tennis">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">🏓</div>
                        <h3>Virtual Table Tennis</h3>
                        <p class="card-excerpt">Experience real-life serve, swing, and smashes with Knockout's immersive
                            ping pong simulation. Outplay the opponents with swift reflexes.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>

                <!-- Line Line -->
                <div class="game-card" data-category="arcade">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg" alt="Line Line">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">📏</div>
                        <h3>Line Line</h3>
                        <p class="card-excerpt">Guide the line, avoid obstacles, and test your reflexes in this
                            addictive game.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>

                <!-- Laser Reflex Arena -->
                <div class="game-card" data-category="arcade">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg" alt="Laser Reflex Arena">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">⚡</div>
                        <h3>Laser Reflex Arena</h3>
                        <p class="card-excerpt">Move smart, stay sharp, and beat the laser grid in this high-energy
                            challenge.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>

                <!-- Shooting (Precision) -->
                <div class="game-card" data-category="shooting">
                    <div class="card-media">
                        <div class="placeholder-img">
                            <img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg" alt="Shooting">
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="game-icon">🔫</div>
                        <h3>Shooting</h3>
                        <p class="card-excerpt">Focus your aim and take on a thrilling shooting experience built for
                            precision.</p>
                        <a href="#" class="card-btn">Play Now <span>→</span></a>
                    </div>
                    <div class="circuit-lines"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== GAME ZONES SECTION ===== -->
    <section class="game-zones-section">
        <div class="section-container">
            <div class="section-header">
                <span class="section-subtitle gradient-text">THE EXPERIENCE ZONES</span>
                <h2 class="section-title">Game <span class="gradient-text">Zones</span></h2>
                <div class="neon-divider"></div>
            </div>

            <div class="zones-container">
                <!-- Fan Zone Card -->
                <div class="zone-card fan-zone">
                    <div class="zone-icon">📺</div>
                    <h3>Fan Zone</h3>
                    <ul class="zone-features">
                        <li>
                            <span class="feature-icon">⚡</span>
                            <span class="feature-text">Live Screening</span>
                        </li>
                        <li>
                            <span class="feature-icon">🔊</span>
                            <span class="feature-text">Surround Sound</span>
                        </li>
                        <li>
                            <span class="feature-icon">📺</span>
                            <span class="feature-text">Giant 4k Screen</span>
                        </li>
                        <li>
                            <span class="feature-icon">🏟️</span>
                            <span class="feature-text">Stadium-Like Atmosphere</span>
                        </li>
                    </ul>
                    <div class="zone-glow"></div>
                    <div class="zone-particles"></div>
                </div>

                <!-- Bar Lounge Card -->
                <div class="zone-card bar-lounge">
                    <div class="zone-icon">🍸</div>
                    <h3>Bar Lounge</h3>
                    <ul class="zone-features">
                        <li>
                            <span class="feature-icon">🥃</span>
                            <span class="feature-text">Signature Spirits</span>
                        </li>
                        <li>
                            <span class="feature-icon">🍹</span>
                            <span class="feature-text">Handcrafted Cocktails</span>
                        </li>
                        <li>
                            <span class="feature-icon">🎭</span>
                            <span class="feature-text">Flairtenders</span>
                        </li>
                        <li>
                            <span class="feature-icon">✨</span>
                            <span class="feature-text">Luxury Bar Lounge</span>
                        </li>
                    </ul>
                    <div class="zone-glow"></div>
                    <div class="zone-particles"></div>
                </div>

                <!-- Food Fiesta Card -->
                <div class="zone-card food-fiesta">
                    <div class="zone-icon">🍽️</div>
                    <h3>Food Fiesta</h3>
                    <ul class="zone-features">
                        <li>
                            <span class="feature-icon">🍔</span>
                            <span class="feature-text">Gourmet Menu</span>
                        </li>
                        <li>
                            <span class="feature-icon">🌍</span>
                            <span class="feature-text">Global Flavours</span>
                        </li>
                        <li>
                            <span class="feature-icon">🌱</span>
                            <span class="feature-text">Locally-Sourced Ingredients</span>
                        </li>
                        <li>
                            <span class="feature-icon">🏆</span>
                            <span class="feature-text">MVP Bites</span>
                        </li>
                    </ul>
                    <div class="zone-glow"></div>
                    <div class="zone-particles"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- 4️⃣ Featured Game Section -->
    <section class="featured-section">
        <div class="laser-bg">
            <div class="laser laser-1"></div>
            <div class="laser laser-2"></div>
            <div class="laser laser-3"></div>
        </div>

        <div class="section-container">
            <div class="featured-container">
                <div class="featured-content">
                    <div class="featured-header">
                        <span class="featured-badge">⚡ MOST POPULAR</span>
                        <h2 class="featured-title">
                            LASER TAG
                            <span class="title-accent">ARENA</span>
                        </h2>
                    </div>

                    <p class="featured-description">
                        Enter the glowing battlefield and defeat your opponents in the ultimate laser war.
                        State-of-the-art phaser equipment, immersive neon environments, and real-time scoring
                        make every match unforgettable. Perfect for team building, birthday parties, and
                        competitive tournaments.
                    </p>

                    <div class="featured-stats">
                        <div class="stat-item">
                            <span class="stat-value">4-12</span>
                            <span class="stat-label">Players</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-value">15</span>
                            <span class="stat-label">Minutes</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-value">★★★★★</span>
                            <span class="stat-label">Top Rated</span>
                        </div>
                    </div>

                    <div class="featured-actions">
                        <a href="#book" class="btn-primary pulse-animation">
                            <span>Book Now</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                        <a href="#details" class="btn-secondary">View Details</a>
                    </div>
                </div>

                <div class="featured-media">
                    <div class="media-frame">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/laser.gif"
                            alt="Laser Tag Arena">
                        <div class="media-overlay"></div>
                    </div>
                    <div class="media-glow"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- 6️⃣ Call to Action Section -->
    <section class="cta-section">
        <div class="laser-bg">
            <div class="laser laser-1"></div>
            <div class="laser laser-2"></div>
            <div class="laser laser-3"></div>
        </div>

        <div class="section-container">
            <div class="cta-wrapper">
                <div class="cta-header">
                    <h2 class="cta-title">Ready to Go Beyond the Game?</h2>
                    <p class="cta-subtitle">
                        Join the champions squad at Knockout's ultimate gaming zone and dominate the leaderboard.
                        Book your slot today and experience stadium-like thrill.
                    </p>
                </div>

                <div class="cta-metrics">
                    <div class="metric-item">
                        <span class="metric-number" data-count="15">15</span>
                        <span class="metric-suffix">+</span>
                        <span class="metric-label">Premium Games</span>
                    </div>
                    <div class="metric-divider"></div>
                    <div class="metric-item">
                        <span class="metric-number" data-count="5">5</span>
                        <span class="metric-label">Unique Experiences</span>
                    </div>
                    <div class="metric-divider"></div>
                    <div class="metric-item">
                        <span class="metric-number" data-count="1000">1000</span>
                        <span class="metric-suffix">+</span>
                        <span class="metric-label">Happy Guests</span>
                    </div>
                </div>

                <div class="cta-actions">
                    <a href="#book" class="btn-primary pulse-animation">
                        <span>🎮 Book Your Game</span>
                    </a>
                    <a href="#packages" class="btn-secondary">
                        <span>🏆 View Packages</span>
                    </a>
                </div>

                <div class="cta-trust">
                    <div class="trust-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg>
                        <span>Instant Confirmation</span>
                    </div>
                    <div class="trust-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                        <span>Secure Payment</span>
                    </div>
                    <div class="trust-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 6v6l4 2" />
                        </svg>
                        <span>24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script> // Add this to your main.js
    document.addEventListener('DOMContentLoaded', function () {
        const track = document.querySelector('.carousel-track');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const dots = document.querySelectorAll('.dot');

        if (track && prevBtn && nextBtn) {
            let currentIndex = 0;
            const cards = document.querySelectorAll('.champ-card');
            const cardWidth = cards[0]?.offsetWidth + 25; // width + gap

            const updateCarousel = () => {
                track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

                // Update dots
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            };

            nextBtn.addEventListener('click', () => {
                if (currentIndex < cards.length - 3) {
                    currentIndex++;
                    updateCarousel();
                }
            });

            prevBtn.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateCarousel();
                }
            });

            // Dot navigation
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentIndex = index;
                    updateCarousel();
                });
            });
        }
    });</script>
<?php get_footer(); ?>