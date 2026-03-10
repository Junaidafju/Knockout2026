<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('dark-premium-theme'); ?>>
<?php wp_body_open(); ?>

<!-- Neon Particles Canvas -->
<canvas id="neon-particles"></canvas>

<div id="page" class="site">
    
    <!-- Glassmorphism Header -->
    <header class="site-header glass-header">
        <div class="header-container">
            
            <!-- Logo with Neon Glow -->
           <div class="logo-container">
<?php if (has_custom_logo()) : ?>
    <?php the_custom_logo(); ?>
<?php else : ?>
    <a href="<?php echo esc_url(home_url('/')); ?>" 
       class="neon-logo" 
       aria-label="<?php bloginfo('name'); ?>">

        <!-- Small Icon -->
        <img class="logo-icon"
             src="<?php echo get_template_directory_uri(); ?>/assets/images/knockout.gif"
             alt="KnockOut Icon">

        <!-- Logo Text -->

    </a>
<?php endif; ?>
</div>
            
            <!-- Navigation with Neon Hover -->
            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-menu neon-nav',
                    'container'      => false,
                    'fallback_cb'    => 'knockout_menu_fallback',
                ));
                ?>
            </nav>
            
            <!-- Action Buttons with Neon -->
            <div class="header-actions">
                <a href="https://wa.me/919876543210" class="neon-btn whatsapp-btn">
                    <span class="btn-icon">📱</span>
                    <span class="btn-text">WhatsApp</span>
                    <span class="neon-glow"></span>
                </a>
                
                <a href="tel:+919876543210" class="neon-btn call-btn">
                    <span class="btn-icon">📞</span>
                    <span class="btn-text">Call</span>
                    <span class="neon-glow"></span>
                </a>
                
            </div>

            <!-- Mobile Toggle (shown via responsive.css) -->
            <button class="mobile-toggle neon-toggle" aria-controls="mobile-menu-panel" aria-expanded="false" aria-label="Open menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu-panel" class="mobile-menu-panel glass-panel" hidden>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'mobile-nav',
                'container'      => false,
            ));
            ?>
        </div>
    </header>
    
    <!-- Neon Progress Bar -->
    <div class="neon-progress-bar"></div>
    
    <div id="content" class="site-content">