</div><!-- #content -->
<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">

            <!-- About Section -->
            <div class="footer-about">
                <div class="footer-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="neon-logo">
                        <span class="logo-knock">tHe KnOCKOut</span>
                    </a>
                </div>
                <p>Kolkata's premier <span class="gradient-text">sports entertainment</span> destination where luxury
                    meets the game. Experience dining, bowling, and nightlife like never before.</p>
                <div class="social-links">
                    <a href="#" class="social-link">FB</a>
                    <a href="#" class="social-link">IG</a>
                    <a href="#" class="social-link">LI</a>
                    <a href="#" class="social-link">YT</a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-links">
                <h3><span class="gradient-text">EXPLORE</span></h3>
                <ul>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/menu">Menu</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>

            <!-- Experiences -->
            <div class="footer-links">
                <h3><span class="gradient-text">EXPERIENCES</span></h3>
                <ul>
                    <li><a href="/bowling">Bowling</a></li>
                    <li><a href="/game-nights">Game Nights</a></li>
                    <li><a href="/live-sports">Live Sports</a></li>
                    <li><a href="/bar">Bar Lounge</a></li>
                    <li><a href="/private-events">Private Events</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-links">
                <h3><span class="gradient-text">VISIT US</span></h3>

                <!-- Address with Icon -->
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"
                                stroke="#B0D136" stroke-width="2" fill="none" />
                            <circle cx="12" cy="9" r="3" stroke="#B0D136" stroke-width="2" fill="none" />
                        </svg>
                    </div>
                    <div class="footer-contact-text">
                        <a href="https://maps.app.goo.gl/Cj1vzsKXeAzhDygF8">SRIJAN CORPORATE PARK, GP 2, GP Block,<br>
                            Sector V, Bidhannagar, Kolkata,<br>
                            West Bengal 700091 </a>
                    </div>
                </div>

                <!-- Phone with Icon -->
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"
                                stroke="#B0D136" stroke-width="2" fill="none" />
                        </svg>
                    </div>
                    <div class="footer-contact-text">
                        <a href="tel:+919831040034">+91 98310 40034</a>
                    </div>
                </div>

                <!-- Email with Icon -->
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2" y="4" width="20" height="16" rx="2" stroke="#B0D136" stroke-width="2"
                                fill="none" />
                            <path d="M22 7L12 13 2 7" stroke="#B0D136" stroke-width="2" fill="none" />
                        </svg>
                    </div>
                    <div class="footer-contact-text">
                        <a href="mailto:info@theknockout.in">info@theknockout.in</a>
                    </div>
                </div>

                <!-- Hours with Icon -->
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" stroke="#B0D136" stroke-width="2" fill="none" />
                            <polyline points="12 6 12 12 16 14" stroke="#B0D136" stroke-width="2" fill="none" />
                        </svg>
                    </div>
                    <div class="footer-contact-text">
                        <span class="gradient-text">OPEN DAILY</span><br>
                        12PM - 12AM
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="copyright">
                © <?php echo date('Y'); ?> <span class="gradient-text">KNOCKOUT </span>. A unit by <span
                    class="gradient-text">The KNOCKOUT </span>
                . All rights reserved.
            </div>
            <div class="footer-links-small">
                <a href="/privacy">Privacy Policy</a>
                <a href="/terms">Terms of Use</a>
                <a href="/disclaimer">Disclaimer</a>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Neon Mouse Trail (Optional) -->
<script>
    document.addEventListener('mousemove', function (e) {
        const trail = document.createElement('div');
        trail.className = 'mouse-trail';
        trail.style.left = e.pageX + 'px';
        trail.style.top = e.pageY + 'px';
        trail.style.background = 'radial-gradient(circle, #b0d136 0%, transparent 70%)';
        trail.style.width = '20px';
        trail.style.height = '20px';
        trail.style.position = 'absolute';
        trail.style.borderRadius = '50%';
        trail.style.pointerEvents = 'none';
        trail.style.zIndex = '9999';
        trail.style.opacity = '0.3';
        trail.style.transform = 'translate(-50%, -50%)';

        document.body.appendChild(trail);

        setTimeout(() => {
            trail.remove();
        }, 500);
    });
</script>

</body>

</html>