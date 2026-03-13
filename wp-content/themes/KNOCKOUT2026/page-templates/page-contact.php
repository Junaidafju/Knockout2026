<?php
/**
 * Template Name: Contact Page
 * Description: Contact page with hero image, Lottie animations & arcade theme
 *
 * @package KnockOut
 */

get_header();

// Form handling via AJAX (no PRG needed here)
?>

<!-- Lottie Web Component -->
<script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>

<!-- =========================================
     CONTACT PAGE HERO (50% Viewport)
     ========================================= -->
<section class="contact-hero">
    <div class="contact-hero-bg">
        <!-- Replace with your arcade/club hero image -->
        <img src="https://assets.sygns.com/pages/about-us/handcrafted-multi-colour-neon.webp"
            alt="KnockOut Indoor Arena" class="hero-bg-img">
        <div class="hero-overlay"></div>
    </div>

    <!-- Hero Content Wrapper: Left Image | Center Content | Right Image -->
    <div class="contact-hero-inner">

        <!-- LEFT SIDE IMAGE - Full height -->
        <div class="hero-side-image hero-side-left">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/068/066/997/small/a-cheerful-asian-woman-in-a-white-shirt-presents-with-open-palms-isolated-on-transparent-background-png.png"
                alt="Arcade Games" class="side-img" loading="lazy">
            <div class="side-image-overlay"></div>
        </div>

        <!-- CENTER CONTENT (Get in Touch) -->
        <div class="contact-hero-content">
            <h1 class="hero-title">
                <span class="title-glow">GET IN TOUCH</span>
            </h1>
            <p class="hero-subtitle">
                Ready to book your lane? Planning an event? Or just have a question?<br>
                We're here to help you strike up the fun! 🎳
            </p>

            <!-- Hero CTA Buttons -->
            <div class="hero-ctas">
                <a href="#contact-form-section" class="btn-glow btn-primary">
                    <span class="btn-icon">📝</span> Send Message
                </a>
                <a href="tel:+919147763399" class="btn-glow btn-secondary">
                    <span class="btn-icon">📞</span> Call Now
                </a>
            </div>

            <!-- Scroll Indicator -->
            <div class="hero-scroll">
                <div class="scroll-arrow"></div>
                <span>Scroll Down</span>
            </div>
        </div>

        <!-- RIGHT SIDE IMAGE - Full height -->
        <div class="hero-side-image hero-side-right">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/068/066/997/small/a-cheerful-asian-woman-in-a-white-shirt-presents-with-open-palms-isolated-on-transparent-background-png.png"
                alt="Bowling Lanes" class="side-img" loading="lazy">
            <div class="side-image-overlay"></div>
        </div>

    </div>

    <!-- Animated Grid Overlay -->
    <div class="hero-grid-overlay"></div>
</section>

<!-- =========================================
     CONTACT INFO CARDS (Lottie Icons)
     ========================================= -->
<section class="contact-info-section">
    <div class="container">
        <div class="info-cards-grid">

            <!-- Visit Us Card -->
            <div class="info-card card-visit">
                <div class="card-lottie">
                    <dotlottie-wc src="https://lottie.host/5286f78b-730a-4e73-91e8-8b3496faa558/nb9Kne86DF.lottie"
                        style="width: 100%; height: 100%;" speed="1" autoplay loop
                        data-speed-on-hover="1.5"></dotlottie-wc>
                </div>
                <h3>📍 Visit Us</h3>
                <p class="card-address">
                    Near RDB Cinemas, Salt Lake<br>
                    Sector 5, Kolkata<br>
                    West Bengal 700135
                </p>
                <a href="https://maps.app.goo.gl/Ub8dW7vTtQfEDYf37" target="_blank" rel="noopener" class="card-btn">
                    <span class="btn-icon">🗺️</span> Get Directions
                </a>
                <div class="card-glow"></div>
            </div>

            <!-- Call Us Card -->
            <div class="info-card card-call">
                <div class="card-lottie">
                    <dotlottie-wc src="https://lottie.host/1bd6604f-b0cb-4d58-b7e7-fb1889ed3dc0/W5o7m8w5dQ.lottie"
                        style="width: 100%; height: 100%;" speed="1" autoplay loop
                        data-speed-on-hover="1.5"></dotlottie-wc>
                </div>
                <h3>📞 Call Us</h3>
                <p class="card-phone">
                    <a href="tel:+919147763399">+91 91477 63399</a>
                </p>
                <div class="card-hours">
                    <strong>🕐 Hours:</strong><br>
                    Mon-Thu: 11AM - 11PM<br>
                    Fri-Sat: 10AM - 1AM<br>
                    Sun: 12PM - 1AM
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- Email Us Card -->
            <div class="info-card card-email">
                <div class="card-lottie">
                    <dotlottie-wc src="https://lottie.host/aed23d2f-422b-402b-bf90-0a7f58ffcbe7/F3aH0HiGuL.lottie"
                        style="width: 100%; height: 100%;" speed="1" autoplay loop
                        data-speed-on-hover="1.5"></dotlottie-wc>
                </div>
                <h3>✉️ Email Us</h3>
                <p class="card-email-link">
                    <a href="mailto:knockoutkolkata@gmail.com">knockoutkolkata@gmail.com</a>
                </p>
                <p class="card-note">
                    💬 We respond within 24 hours<br>
                    🎁 Ask about group discounts!
                </p>
                <div class="card-glow"></div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================
     CONTACT FORM SECTION
     ========================================= -->
<section class="contact-form-section" id="contact-form-section">
    <div class="container">
        <div class="form-wrapper">

            <!-- Section Header -->
            <div class="form-header">
                <h2 class="title-glow">Send Us a Message</h2>
                <p>Whether it's a birthday party, corporate event, or just a question — we'd love to hear from you!
                </p>
            </div>

            <!-- Form Messages (handled via SweetAlert popups at footer) -->

            <!-- Contact Form -->
            <form class="arcade-form" id="contact-form">
                <?php wp_nonce_field('knockout_contact_form', 'contact_nonce'); ?>

                <div class="form-grid">
                    <!-- Name -->
                    <div class="form-field">
                        <label for="contact-name">Your Name *</label>
                        <input type="text" id="contact-name" name="contact_name" required placeholder="Enter your name"
                            value="<?php echo isset($_POST['contact_name']) ? esc_attr($_POST['contact_name']) : ''; ?>">
                        <span class="field-glow"></span>
                    </div>

                    <!-- Email -->
                    <div class="form-field">
                        <label for="contact-email">Email Address *</label>
                        <input type="email" id="contact-email" name="contact_email" required
                            placeholder="your@email.com"
                            value="<?php echo isset($_POST['contact_email']) ? esc_attr($_POST['contact_email']) : ''; ?>">
                        <span class="field-glow"></span>
                    </div>

                    <!-- Phone -->
                    <div class="form-field">
                        <label for="contact-phone">Phone Number</label>
                        <input type="tel" id="contact-phone" name="contact_phone" placeholder="+91 XXXXX XXXXX"
                            value="<?php echo isset($_POST['contact_phone']) ? esc_attr($_POST['contact_phone']) : ''; ?>">
                        <span class="field-glow"></span>
                    </div>

                    <!-- Subject -->
                    <div class="form-field">
                        <label for="contact-subject">I'm Interested In...</label>
                        <select id="contact-subject" name="contact_subject">
                            <option value="">Select an option</option>
                            <option value="bowling" <?php selected($_POST['contact_subject'] ?? '', 'bowling'); ?>>🎳
                                Bowling Lane Booking</option>
                            <option value="arcade" <?php selected($_POST['contact_subject'] ?? '', 'arcade'); ?>>🕹️
                                Arcade Games</option>
                            <option value="birthday" <?php selected($_POST['contact_subject'] ?? '', 'birthday'); ?>>🎂
                                Birthday Party</option>
                            <option value="corporate" <?php selected($_POST['contact_subject'] ?? '', 'corporate'); ?>>
                                💼 Corporate Event</option>
                            <option value="league" <?php selected($_POST['contact_subject'] ?? '', 'league'); ?>>🏆
                                League Registration</option>
                            <option value="general" <?php selected($_POST['contact_subject'] ?? '', 'general'); ?>>❓
                                General Question</option>
                        </select>
                        <span class="field-glow"></span>
                    </div>
                </div>

                <!-- Message -->
                <div class="form-field full-width">
                    <label for="contact-message">Your Message *</label>
                    <textarea id="contact-message" name="contact_message" rows="5" required
                        placeholder="Tell us about your plans..."><?php echo isset($_POST['contact_message']) ? esc_textarea($_POST['contact_message']) : ''; ?></textarea>
                    <span class="field-glow"></span>
                </div>

                <!-- Newsletter Checkbox -->
                <div class="form-field checkbox-field">
                    <label class="neon-checkbox">
                        <input type="checkbox" name="contact_newsletter" <?php checked(!empty($_POST['contact_newsletter'])); ?>>
                        <span class="checkbox-box">
                            <svg viewBox="0 0 24 24" class="checkbox-check">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                        </span>
                        <span class="checkbox-label">Subscribe for exclusive offers & event updates</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-submit glow-button">
                    <span class="btn-text">Send Message</span>
                    <span class="btn-sparkles" aria-hidden="true"></span>
                </button>

            </form>
        </div>
    </div>
</section>

<!-- =========================================
     MAP & SOCIAL SECTION
     ========================================= -->
<section class="contact-map-section">
    <div class="container">
        <div class="map-wrapper">
            <div class="map-header">
                <h3>Find Us on the Map</h3>
                <p>Located in the heart of Salt Lake, Sector 5</p>
            </div>

            <div class="map-container">
                <iframe class="map-frame"
                    src="https://maps.google.com/maps?q=Near%20RDB%20Cinemas%2C%20Salt%20Lake%2C%20Sector%205%2C%20Kolkata%2C%20West%20Bengal%20700135&hl=en&z=15&output=embed"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen>
                </iframe>
                <div class="map-overlay"></div>
            </div>

            <!-- Social Links -->
            <div class="social-links">
                <span>Follow the action:</span>
                <a href="https://instagram.com/knockoutkolkata" target="_blank" rel="noopener"
                    class="social-btn instagram">
                    <span aria-hidden="true">📷</span> Instagram
                </a>
                <a href="https://facebook.com/knockoutkolkata" target="_blank" rel="noopener"
                    class="social-btn facebook">
                    <span aria-hidden="true">📘</span> Facebook
                </a>
                <a href="https://g.page/knockoutkolkata/review" target="_blank" rel="noopener"
                    class="social-btn google">
                    <span aria-hidden="true">⭐</span> Google Reviews
                </a>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contact-form');
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                const submitBtn = form.querySelector('button[type="submit"]');
                const submitText = submitBtn.querySelector('.btn-text');
                const originalText = submitText.innerText;

                submitText.innerText = 'Sending...';
                submitBtn.style.opacity = '0.7';
                submitBtn.disabled = true;

                const formData = new FormData(form);
                formData.append('action', 'knockout_submit_contact');

                fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        submitText.innerText = originalText;
                        submitBtn.style.opacity = '1';
                        submitBtn.disabled = false;

                        if (data.success) {
                            Swal.fire({
                                title: 'Successfully Sent!',
                                text: data.data.message,
                                icon: 'success',
                                background: '#0a0a0f',
                                color: '#fff',
                                confirmButtonColor: '#b0d136'
                            }).then(() => {
                                form.reset();
                                window.scrollTo({ top: 0, behavior: 'smooth' });
                            });
                        } else {
                            Swal.fire({
                                title: 'Failed to Send',
                                text: data.data.message || 'There was a problem sending your message.',
                                icon: 'error',
                                background: '#0a0a0f',
                                color: '#fff',
                                confirmButtonColor: '#ff4444'
                            });
                        }
                    })
                    .catch(error => {
                        submitText.innerText = originalText;
                        submitBtn.style.opacity = '1';
                        submitBtn.disabled = false;
                        Swal.fire({
                            title: 'Error',
                            text: 'An unexpected error occurred connecting to the server. Please try again.',
                            icon: 'error',
                            background: '#0a0a0f',
                            color: '#fff',
                            confirmButtonColor: '#ff4444'
                        });
                    });
            });
        }
    });
</script>

<?php get_footer(); ?>