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
                    <li><a href="/arcade">VR Arcade</a></li>
                    <li><a href="/sports">Live Sports</a></li>
                    <li><a href="/hookah">Hookah Lounge</a></li>
                    <li><a href="/private-events">Private Events</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-links">
                <h3><span class="gradient-text">VISIT US</span></h3>
                <ul>
                    <li>🚩 SRIJAN CORPORATE PARK, GP 2, GP Block, Sector V, Bidhannagar, Kolkata, West Bengal
                        700091</li>
                    <li>📲+91 98310 40034</li>
                    <li>📨info@theknockout.in</li>
                </ul>
                <div class="hours">
                    <span class="gradient-text">OPEN DAILY</span>
                    <p>12PM - 12AM</p>
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