<?php
/**
 * Template Name: Gallery Page
 * Description: Dynamic masonry gallery with filters and neon effects
 */

get_header();
?>
<div class="gallery-page">
    <div class="circuit-bg"></div>

    <!-- Loading Animation -->
    <div class="loading-skeleton" id="loading">
        <div class="neon-loader"></div>
    </div>

    <div class="gallery-container">
        <!-- Header Section -->
        <div class="gallery-header">
            <h1 class="gallery-title">EXPERIENCE THE ACTION</h1>
            <p class="gallery-subtitle">
                Step inside our immersive sports café where gaming meets real-world sports.
                Browse through our collection of epic moments, gaming arenas, and unforgettable events.
            </p>
        </div>

        <!-- Video Highlight -->
        <div class="video-highlight">
            <div class="video-wrapper">
                <video autoplay muted loop playsinline
                    poster="https://static.vecteezy.com/system/resources/previews/029/197/062/large_2x/interior-of-a-beautiful-night-club-with-bright-lights-and-sofas-colorful-interior-of-bright-and-beautiful-night-club-with-dark-seats-and-glowing-lights-ai-generated-free-photo.jpg">
                    <source src="https://theknockout.co/wp-content/themes/knockout/assets/videos/hero.mp4"
                        type="video/mp4">
                    <!-- Fallback image -->
                    <img src="https://static.vecteezy.com/system/resources/previews/029/197/062/large_2x/interior-of-a-beautiful-night-club-with-bright-lights-and-sofas-colorful-interior-of-bright-and-beautiful-night-club-with-dark-seats-and-glowing-lights-ai-generated-free-photo.jpg"
                        alt="Experience Highlight">
                </video>
                <div class="video-overlay">
                    <span class="play-icon">▶</span>
                    <span class="video-text">Watch the Experience</span>
                </div>
            </div>
        </div>

        <!-- Filter Buttons -->
        <div class="gallery-filters">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="gaming-arena">Gaming Arena</button>
            <button class="filter-btn" data-filter="vr-games">VR Games</button>
            <button class="filter-btn" data-filter="cafe">Café & Lounge</button>
            <button class="filter-btn" data-filter="events">Events</button>
            <button class="filter-btn" data-filter="action">Action Shots</button>
        </div>

        <!-- Masonry Gallery Grid -->
        <div class="gallery-grid" id="masonry-gallery">
            <!-- Gaming Arena - Large -->
            <div class="gallery-item large" data-category="gaming-arena">
                <span class="category-badge">Gaming Arena</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gaming-arena-1.jpg"
                    alt="Gaming Arena"
                    onerror="this.src='https://nodwingaming.com/wp-content/uploads/2024/08/A743094-1536x1024-1.jpg'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>🎮 Main Gaming Arena</h4>
                        <p>32 high-end gaming stations with RGB lighting and premium peripherals</p>
                        <span class="hover-hint">Hover to explore →</span>
                    </div>
                </div>
            </div>

            <!-- Gaming Arena - Small -->
            <div class="gallery-item small" data-category="gaming-arena">
                <span class="category-badge">Gaming Arena</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gaming-arena-2.jpg"
                    alt="Gaming Setup"
                    onerror="this.src='https://eventlocatie.h20.gg/wp-content/uploads/2023/06/PXL_20210317_191043189.MP_-1024x768.jpg'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>⚡ Premium Setup</h4>
                        <p>RTX 4080 • 240Hz monitors • Gaming chairs</p>
                    </div>
                </div>
            </div>

            <!-- Gaming Arena - Small -->
            <div class="gallery-item small" data-category="gaming-arena">
                <span class="category-badge">Gaming Arena</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gaming-arena-3.jpg"
                    alt="RGB Paradise"
                    onerror="this.src='https://arena27.pl/wp-content/uploads/2023/05/DSC06365-scaled.jpg'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>🎧 RGB Paradise</h4>
                        <p>Fully customizable lighting setups with gaming peripherals</p>
                    </div>
                </div>
            </div>

            <!-- VR Games - Small -->
            <div class="gallery-item small" data-category="vr-games">
                <span class="category-badge">VR Games</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/vr-1.jpg" alt="VR Archery"
                    onerror="this.src='https://i.ytimg.com/vi/4zYybMm8X9I/sddefault.jpg?v=68282ced'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>🥽 VR Archery</h4>
                        <p>Test your aim in immersive virtual reality</p>
                    </div>
                </div>
            </div>

            <!-- VR Games - Large -->
            <div class="gallery-item large" data-category="vr-games">
                <span class="category-badge">VR Games</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/vr-2.jpg"
                    alt="VR Experience"
                    onerror="this.src='https://vartvrarcade.com/wp-content/uploads/2022/01/vr-shooting-simulator.jpg'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>🔫 VR Shooting Range</h4>
                        <p>Immersive combat training simulations with realistic physics</p>
                    </div>
                </div>
            </div>

            <!-- VR Games - Small -->
            <div class="gallery-item small" data-category="vr-games">
                <span class="category-badge">VR Games</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/vr-3.jpg" alt="VR Headset"
                    onerror="this.src='https://images.indianexpress.com/2023/12/Meta-Quest.jpg?w=1200'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>👓 Meta Quest 3</h4>
                        <p>Latest VR technology with wireless freedom</p>
                    </div>
                </div>
            </div>

            <!-- Café - Large -->
            <div class="gallery-item large" data-category="cafe">
                <span class="category-badge">Café & Lounge</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/cafe-1.jpg" alt="Café Area"
                    onerror="this.src='https://png.pngtree.com/thumb_back/fh260/background/20250227/pngtree-a-vibrant-lounge-with-neon-lighting-showcasing-shelves-of-drinks-and-image_17004698.jpg'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>☕ Gaming Café</h4>
                        <p>Premium coffee, energy drinks, and gamer-focused menu</p>
                    </div>
                </div>
            </div>

            <!-- Café - Small -->
            <div class="gallery-item small" data-category="cafe">
                <span class="category-badge">Café & Lounge</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/cafe-2.jpg"
                    alt="Food & Drinks"
                    onerror="this.src='https://images.stockcake.com/public/d/d/1/dd176a5b-6dbe-45c2-8f81-301376019707_large/neon-lit-bar-entrance-stockcake.jpg'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>🍔 Gamer's Menu</h4>
                        <p>Specially crafted gaming snacks and meals</p>
                    </div>
                </div>
            </div>

            <!-- Café - Small -->
            <div class="gallery-item small" data-category="cafe">
                <span class="category-badge">Café & Lounge</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/cafe-3.jpg" alt="Bar Area"
                    onerror="this.src='https://images.stockcake.com/public/2/8/5/28538a53-71f8-4df6-8d67-dcbfcd3b4dff_large/vibrant-neon-lounge-stockcake.jpg'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>🍸 Neon Bar</h4>
                        <p>Signature mocktails and cocktails with neon lighting</p>
                    </div>
                </div>
            </div>

            <!-- Events - Small -->
            <div class="gallery-item small" data-category="events">
                <span class="category-badge">Events</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/event-1.jpg"
                    alt="Tournament"
                    onerror="this.src='https://mgnevents.b-cdn.net/app/uploads/2025/05/18th-birthday-party-marquee-26.webp'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>🏆 Weekly Tournaments</h4>
                        <p>Compete for cash prizes and glory</p>
                    </div>
                </div>
            </div>

            <!-- Events - Large -->
            <div class="gallery-item large" data-category="events">
                <span class="category-badge">Events</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/event-2.jpg"
                    alt="Birthday Party"
                    onerror="this.src='https://cdn.venuelook.com/uploads/space_38260/1709637719_595x400.png'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>🎉 Birthday Specials</h4>
                        <p>Private gaming parties with dedicated hosts</p>
                    </div>
                </div>
            </div>

            <!-- Events - Small -->
            <div class="gallery-item small" data-category="events">
                <span class="category-badge">Events</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/event-3.jpg"
                    alt="Corporate Event"
                    onerror="this.src='https://assets.eventflare.io/eventflare.io/11ba52574f30a9a7dcdbdb39b0b1e2aa.webp?updated_at=2023-02-24T10:40:19.225Z'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>👔 Team Building</h4>
                        <p>Corporate gaming events and company outings</p>
                    </div>
                </div>
            </div>

            <!-- Action Shots - Large -->
            <div class="gallery-item large" data-category="action">
                <span class="category-badge">Action Shots</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/action-1.jpg"
                    alt="Golf Simulator"
                    onerror="this.src='https://golfdigestme.com/wp-content/uploads/2024/07/L9A2617.jpg'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>⛳ Golf Simulator</h4>
                        <p>Perfect your swing on world-famous courses</p>
                    </div>
                </div>
            </div>

            <!-- Action Shots - Small -->
            <div class="gallery-item small" data-category="action">
                <span class="category-badge">Action Shots</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/action-2.jpg"
                    alt="VR Boxing"
                    onerror="this.src='https://blogs-images.forbes.com/johnkoetsier/files/2018/01/Mayweather-VR-Image.jpg'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>🥊 VR Boxing</h4>
                        <p>Get your heart pumping with fitness gaming</p>
                    </div>
                </div>
            </div>

            <!-- Action Shots - Small -->
            <div class="gallery-item small" data-category="action">
                <span class="category-badge">Action Shots</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/action-3.jpg"
                    alt="Friends Celebrating"
                    onerror="this.src='https://instagram.fccu3-1.fna.fbcdn.net/v/t51.82787-15/649224928_17964815805024139_6820442518209601063_n.heic?stp=dst-jpg_e35_tt6&_nc_cat=107&ig_cache_key=Mzg0OTE4OTgwMTkzODExNzY5Ng%3D%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjE0NDB4OTYwLnNkci5DMyJ9&_nc_ohc=aldBgu4pfjwQ7kNvwGa6N5O&_nc_oc=Adn_Kdo6TKSERVp6Is4W0v2V9nM5hZ8mCgpheGHkmGf98RCom-ORgbxyVfdw5wjS8g8&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=instagram.fccu3-1.fna&_nc_gid=TMPDs74YETiRjeHB4phbjQ&_nc_ss=8&oh=00_Afx0DI7bYlXC1aJ5TlUS9SgqwxwwGwDH2Ct2clzWk7YJkg&oe=69B840AA'">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h4>👥 Victory Moments</h4>
                        <p>Celebrate with friends after epic wins</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="gallery-cta">
            <h2 class="cta-title">Ready to Experience the Action?</h2>
            <p class="cta-text">Book your slot and enjoy the ultimate sports gaming experience with friends and family.
            </p>
            <a href="<?php echo home_url('/reservation'); ?>" class="btn-neon pink pulse-animation">
                🎮 BOOK YOUR GAME NOW
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Hide loading screen
        setTimeout(function () {
            document.getElementById('loading').classList.add('hidden');
        }, 800);

        // ===== 1. MASONRY GRID ROTATION =====
        const gallery = document.getElementById('masonry-gallery');
        if (gallery) {
            let rotationInterval;

            function rotateMasonry() {
                const largeItems = document.querySelectorAll('.gallery-item.large');
                const smallItems = document.querySelectorAll('.gallery-item.small');

                if (largeItems.length > 0 && smallItems.length > 0) {
                    const randomLargeIndex = Math.floor(Math.random() * largeItems.length);
                    const randomSmallIndex = Math.floor(Math.random() * smallItems.length);

                    const selectedLarge = largeItems[randomLargeIndex];
                    const selectedSmall = smallItems[randomSmallIndex];

                    // Don't swap if same item
                    if (selectedLarge === selectedSmall) return;

                    // Add transition effect
                    selectedLarge.style.transition = 'all 0.5s ease';
                    selectedSmall.style.transition = 'all 0.5s ease';

                    // Swap classes
                    selectedLarge.classList.remove('large');
                    selectedLarge.classList.add('small');

                    selectedSmall.classList.remove('small');
                    selectedSmall.classList.add('large');

                    // Reset transitions
                    setTimeout(() => {
                        selectedLarge.style.transition = '';
                        selectedSmall.style.transition = '';
                    }, 500);
                }
            }

            // Start rotation every 3 seconds
            rotationInterval = setInterval(rotateMasonry, 3000);

            // Pause on hover
            gallery.addEventListener('mouseenter', () => {
                clearInterval(rotationInterval);
            });

            gallery.addEventListener('mouseleave', () => {
                rotationInterval = setInterval(rotateMasonry, 3000);
            });
        }

        // ===== 2. FILTER FUNCTIONALITY =====
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                // Update active button
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                // Filter items with animation
                galleryItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');

                    if (filterValue === 'all' || itemCategory === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 50);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // ===== 3. VIDEO HIGHLIGHT =====
        const videoWrapper = document.querySelector('.video-wrapper');
        const video = document.querySelector('.video-wrapper video');

        if (videoWrapper && video) {
            videoWrapper.addEventListener('click', function () {
                if (video.paused) {
                    video.play();
                    this.querySelector('.video-overlay').style.opacity = '0';
                } else {
                    video.pause();
                    this.querySelector('.video-overlay').style.opacity = '1';
                }
            });
        }

        // ===== 4. LIGHTBOX EFFECT (Optional) =====
        galleryItems.forEach(item => {
            item.addEventListener('click', function () {
                const img = this.querySelector('img');
                const title = this.querySelector('h4')?.textContent || 'Gallery Image';

                // You can implement a lightbox here if needed
                console.log('Open lightbox for:', title);
            });
        });

        // ===== 5. INTERSECTION OBSERVER FOR FADE-IN =====
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        galleryItems.forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(30px)';
            item.style.transition = 'all 0.6s ease-out';
            observer.observe(item);
        });
    });
</script>

<?php get_footer(); ?>