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
                <h1 class="glitch-text" data-text="EXPERIENCE THE ULTIMATE GAMING ARENA">
                    EXPERIENCE THE ULTIMATE GAMING ARENA
                </h1>
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

    <!-- 2️⃣ Activities Grid - HARDCODED -->
    <section id="activities" class="activities-grid-section">
        <div class="section-container">
            <h2 class="section-title neon-title">OUR ACTIVITIES</h2>

            <div class="grid-container">
                <!-- Golf Card -->
                <div class="game-card" data-category="sports">
                    <div class="card-media">
                        <div class="placeholder-img"><img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg"
                                alt="Virtual Golf"></div>
                        <div class="card-overlay"></div>
                    </div>

                    <div class="card-content">
                        <div class="game-icon">⛳</div>
                        <h3>Virtual Golf</h3>
                        <p class="card-excerpt">Professional golf simulators with real courses. Perfect your swing in
                            any weather.</p>

                        <a href="#" class="card-btn">
                            Play Now <span>→</span>
                        </a>
                    </div>

                    <div class="circuit-lines"></div>
                </div>

                <!-- Basketball Card -->
                <div class="game-card" data-category="sports">
                    <div class="card-media">
                        <div class="placeholder-img"><img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg"
                                alt=""></div>
                        <div class="card-overlay"></div>
                    </div>

                    <div class="card-content">
                        <div class="game-icon">🏀</div>
                        <h3>Arcade Basketball</h3>
                        <p class="card-excerpt">Fast paced hoop game with multiple challenges. Compete for the high
                            score!</p>

                        <a href="#" class="card-btn">
                            Play Now <span>→</span>
                        </a>
                    </div>

                    <div class="circuit-lines"></div>
                </div>

                <!-- Laser Tag Card -->
                <div class="game-card" data-category="arcade">
                    <div class="card-media">
                        <div class="placeholder-img"><img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg"
                                alt="Laser Tag Arena"></div>
                        <div class="card-overlay"></div>
                    </div>

                    <div class="card-content">
                        <div class="game-icon">🔫</div>
                        <h3>Laser Tag Arena</h3>
                        <p class="card-excerpt">Multiplayer laser battle in neon arena. Team up and dominate the
                            battlefield!</p>

                        <a href="#" class="card-btn">
                            Play Now <span>→</span>
                        </a>
                    </div>

                    <div class="circuit-lines"></div>
                </div>

                <!-- Archery Card -->
                <div class="game-card" data-category="shooting">
                    <div class="card-media">
                        <div class="placeholder-img"><img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg"
                                alt="Archery Challenge"></div>
                        <div class="card-overlay"></div>
                    </div>

                    <div class="card-content">
                        <div class="game-icon">🏹</div>
                        <h3>Archery Challenge</h3>
                        <p class="card-excerpt">Test your aim with our high-tech archery range. Multiple difficulty
                            levels.</p>

                        <a href="#" class="card-btn">
                            Play Now <span>→</span>
                        </a>
                    </div>

                    <div class="circuit-lines"></div>
                </div>

                <!-- Football Card -->
                <div class="game-card" data-category="sports">
                    <div class="card-media">
                        <div class="placeholder-img"><img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg"
                                alt="Football Arena"></div>
                        <div class="card-overlay"></div>
                    </div>

                    <div class="card-content">
                        <div class="game-icon">⚽</div>
                        <h3>Football Arena</h3>
                        <p class="card-excerpt">Virtual football simulator. Play as your favorite teams and players.</p>

                        <a href="#" class="card-btn">
                            Play Now <span>→</span>
                        </a>
                    </div>

                    <div class="circuit-lines"></div>
                </div>

                <!-- Darts Card -->
                <div class="game-card" data-category="arcade">
                    <div class="card-media">
                        <div class="placeholder-img"><img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg"
                                alt="Darts Pro"></div>
                        <div class="card-overlay"></div>
                    </div>

                    <div class="card-content">
                        <div class="game-icon">🎯</div>
                        <h3>Darts Pro</h3>
                        <p class="card-excerpt">Electronic dartboards with automatic scoring. Perfect for friendly
                            competition.</p>

                        <a href="#" class="card-btn">
                            Play Now <span>→</span>
                        </a>
                    </div>

                    <div class="circuit-lines"></div>
                </div>

                <!-- Shooting Range Card -->
                <div class="game-card" data-category="shooting">
                    <div class="card-media">
                        <div class="placeholder-img"><img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg"
                                alt="Shooting Range"></div>
                        <div class="card-overlay"></div>
                    </div>

                    <div class="card-content">
                        <div class="game-icon">🔫</div>
                        <h3>Shooting Range</h3>
                        <p class="card-excerpt">Laser shooting range with moving targets. Test your accuracy and speed.
                        </p>

                        <a href="#" class="card-btn">
                            Play Now <span>→</span>
                        </a>
                    </div>

                    <div class="circuit-lines"></div>
                </div>

                <!-- Ping Pong Card -->
                <div class="game-card" data-category="sports">
                    <div class="card-media">
                        <div class="placeholder-img"><img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg"
                                alt="Ping Pong"></div>
                        <div class="card-overlay"></div>
                    </div>

                    <div class="card-content">
                        <div class="game-icon">🏓</div>
                        <h3>Ping Pong</h3>
                        <p class="card-excerpt">Professional ping pong tables. Tournaments every Friday night!</p>

                        <a href="#" class="card-btn">
                            Play Now <span>→</span>
                        </a>
                    </div>

                    <div class="circuit-lines"></div>
                </div>

                <!-- Puzzle Games Card -->
                <div class="game-card" data-category="arcade">
                    <div class="card-media">
                        <div class="placeholder-img"><img src="https://i.ytimg.com/vi/ucR0Dg3VTYA/maxresdefault.jpg"
                                alt="Puzzle Games"></div>
                        <div class="card-overlay"></div>
                    </div>

                    <div class="card-content">
                        <div class="game-icon">🧩</div>
                        <h3>Puzzle Games</h3>
                        <p class="card-excerpt">Interactive puzzle challenges for all ages. Play solo or with friends.
                        </p>

                        <a href="#" class="card-btn">
                            Play Now <span>→</span>
                        </a>
                    </div>

                    <div class="circuit-lines"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3️⃣ Game Zones / Categories - HARDCODED -->
    <section class="game-zones-section">
        <div class="section-container">
            <h2 class="section-title neon-title">GAME ZONES</h2>

            <div class="zones-container">
                <div class="zone-card shooting">
                    <div class="zone-icon">🎯</div>
                    <h3>Shooting Zone</h3>
                    <ul class="zone-games">
                        <li>Shooting Range</li>
                        <li>Archery Challenge</li>
                        <li>Hero Shooting</li>
                        <li>Laser Aim</li>
                    </ul>
                    <div class="zone-glow"></div>
                </div>

                <div class="zone-card sports">
                    <div class="zone-icon">⚽</div>
                    <h3>Sports Zone</h3>
                    <ul class="zone-games">
                        <li>Virtual Golf</li>
                        <li>Basketball Arcade</li>
                        <li>Football Arena</li>
                        <li>Ping Pong</li>
                    </ul>
                    <div class="zone-glow"></div>
                </div>

                <div class="zone-card arcade">
                    <div class="zone-icon">🎮</div>
                    <h3>Arcade Zone</h3>
                    <ul class="zone-games">
                        <li>Laser Tag</li>
                        <li>Darts Pro</li>
                        <li>Puzzle Games</li>
                        <li>Racing Simulators</li>
                    </ul>
                    <div class="zone-glow"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4️⃣ Featured Game - HARDCODED -->
    <section class="featured-section">
        <div class="laser-bg">
            <div class="laser laser-1"></div>
            <div class="laser laser-2"></div>
            <div class="laser laser-3"></div>
        </div>

        <div class="featured-container">
            <div class="featured-content">
                <span class="featured-badge">⚡ MOST POPULAR</span>
                <h2>
                    LASER TAG
                    <span>ARENA</span>
                </h2>
                <p class="featured-description">
                    Enter the glowing battlefield and defeat your opponents in the ultimate laser war.
                    Perfect for team building and competitive fun! State-of-the-art equipment and
                    immersive neon environment.
                </p>

                <div class="featured-stats">
                    <div class="stat">
                        <span class="stat-number">4-12</span>
                        <span class="stat-label">Players</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">15min</span>
                        <span class="stat-label">Game Time</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">⭐⭐⭐⭐⭐</span>
                        <span class="stat-label">Most Popular</span>
                    </div>
                </div>

                <a href="#" class="btn-neon pink pulse-animation">
                    Book Now <span>→</span>
                </a>
            </div>

            <div class="featured-media">
                <div class="placeholder-video">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/laser.gif"
                        alt="Laser Tag Arena">
                </div>
                <div class="media-glow"></div>
            </div>
        </div>
    </section>

    <!-- 5️⃣ Experience Gallery - HARDCODED -->
    <section class="gallery-section">
        <div class="section-container">
            <h2 class="section-title neon-title">PLAYER MOMENTS</h2>

            <div class="gallery-grid">
                <!-- Gallery Item 1 -->
                <div class="gallery-item">
                    <div class="placeholder-img"><img
                            src="https://media.istockphoto.com/id/1069585042/photo/for-the-crazy-night.jpg?s=612x612&w=0&k=20&c=qH6CDoOlH5yz6WftbcGYCBf6V_NiWUkwOMdqLkl2KKE="
                            alt="Tournament Winners"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <span>Tournament Winners</span>
                            <strong>Champions 2024</strong>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="gallery-item">
                    <div class="placeholder-img"><img
                            src="https://media.istockphoto.com/id/1069585042/photo/for-the-crazy-night.jpg?s=612x612&w=0&k=20&c=qH6CDoOlH5yz6WftbcGYCBf6V_NiWUkwOMdqLkl2KKE="
                            alt="Perfect Shot"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <span>Perfect Shot</span>
                            <strong>Archery Master</strong>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="gallery-item">
                    <div class="placeholder-img"><img
                            src="https://media.istockphoto.com/id/1069585042/photo/for-the-crazy-night.jpg?s=612x612&w=0&k=20&c=qH6CDoOlH5yz6WftbcGYCBf6V_NiWUkwOMdqLkl2KKE="
                            alt="Laser Tag Battle"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <span>Laser Tag Battle</span>
                            <strong>Team Victory</strong>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="gallery-item">
                    <div class="placeholder-img"><img
                            src="https://media.istockphoto.com/id/1069585042/photo/for-the-crazy-night.jpg?s=612x612&w=0&k=20&c=qH6CDoOlH5yz6WftbcGYCBf6V_NiWUkwOMdqLkl2KKE="
                            alt="Hole in One"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <span>Hole in One</span>
                            <strong>Golf Champion</strong>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="gallery-item">
                    <div class="placeholder-img"><img
                            src="https://media.istockphoto.com/id/1069585042/photo/for-the-crazy-night.jpg?s=612x612&w=0&k=20&c=qH6CDoOlH5yz6WftbcGYCBf6V_NiWUkwOMdqLkl2KKE="
                            alt="Birthday Party"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <span>Birthday Party</span>
                            <strong>Celebration</strong>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="gallery-item">
                    <div class="placeholder-img"><img
                            src="https://media.istockphoto.com/id/1069585042/photo/for-the-crazy-night.jpg?s=612x612&w=0&k=20&c=qH6CDoOlH5yz6WftbcGYCBf6V_NiWUkwOMdqLkl2KKE="
                            alt="High Score"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <span>High Score</span>
                            <strong>Basketball Pro</strong>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 7 -->
                <div class="gallery-item">
                    <div class="placeholder-img"><img
                            src="https://media.istockphoto.com/id/1069585042/photo/for-the-crazy-night.jpg?s=612x612&w=0&k=20&c=qH6CDoOlH5yz6WftbcGYCBf6V_NiWUkwOMdqLkl2KKE="
                            alt="Team Building"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <span>Team Building</span>
                            <strong>Corporate Event</strong>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 8 -->
                <div class="gallery-item">
                    <div class="placeholder-img"><img
                            src="https://media.istockphoto.com/id/1069585042/photo/for-the-crazy-night.jpg?s=612x612&w=0&k=20&c=qH6CDoOlH5yz6WftbcGYCBf6V_NiWUkwOMdqLkl2KKE="
                            alt="Weekend Fun"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <span>Weekend Fun</span>
                            <strong>Family Time</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6️⃣ Call to Action -->
    <section class="cta-section">
        <div class="laser-bg">
            <div class="laser laser-1"></div>
            <div class="laser laser-2"></div>
            <div class="laser laser-3"></div>
        </div>

        <div class="cta-content">
            <h2 class="cta-title">READY TO PLAY?</h2>
            <p class="cta-description">
                Challenge your friends in the ultimate indoor gaming arena.<br>
                Book your games now and experience the thrill!
            </p>

            <div class="cta-buttons">
                <a href="#" class="btn-neon pink pulse-animation">
                    🎮 BOOK YOUR GAME
                </a>
                <a href="#" class="btn-neon purple">
                    🏆 VIEW PACKAGES
                </a>
            </div>

            <!-- Quick stats -->
            <div style="margin-top: 50px; display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 900; color: var(--neon-green);">20+</div>
                    <div style="color: var(--text-dim);">Games</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 900; color: var(--neon-green);">5</div>
                    <div style="color: var(--text-dim);">Zones</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 900; color: var(--neon-green);">1000+</div>
                    <div style="color: var(--text-dim);">Happy Players</div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>