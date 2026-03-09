</div><!-- #content -->
    
    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-grid">
                
                <!-- Logo & About -->
                <div class="footer-about">
                    <div class="footer-logo">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-text">
                                <span class="logo-knock">KNOCK</span><span class="logo-out">OUT</span>
                            </a>
                        <?php endif; ?>
                    </div>
                    
                    <p>Knockout is the first sports café in Kolkata bringing energy, food, and sports together. With a modern design, 6-lane bowling alley, and a variety of games and activities, Knockout is the perfect place to relax and enjoy yourself.</p>
                </div>
                
                <!-- Products/Quick Links -->
                <div class="footer-links">
                    <h3>Products</h3>
                    <ul>
                        <li><a href="/menu">Menu</a></li>
                        <li><a href="/events">Events</a></li>
                        <li><a href="/membership">Membership</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div class="footer-links">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="/reservation">Table Booking</a></li>
                        <li><a href="/live-sports">Live Sports</a></li>
                        <li><a href="/private-events">Private Events</a></li>
                    </ul>
                </div>
                
                <!-- Company -->
                <div class="footer-links">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/careers">Careers</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Legal & Privacy -->
                <div class="footer-links">
                    <h3>Legal & Privacy</h3>
                    <ul>
                        <li><a href="/terms">Terms & Conditions</a></li>
                        <li><a href="/privacy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Social Links & Copyright -->
            <div class="footer-bottom">
                <div class="social-links">
                    <a href="#" target="_blank" class="social-link">FB</a>
                    <a href="#" target="_blank" class="social-link">IG</a>
                    <a href="#" target="_blank" class="social-link">TW</a>
                    <a href="#" target="_blank" class="social-link">YT</a>
                </div>
                
                <div class="copyright">
                    &copy; <?php echo date('Y'); ?> Knockout Sports Café. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>