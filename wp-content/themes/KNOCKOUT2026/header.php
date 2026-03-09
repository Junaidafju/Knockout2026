<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class('dark-theme'); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    
    <!-- MacBook Dock Style Navigation -->
    <header id="masthead" class="site-header">
        <div class="header-container">
            <div class="dock-navigation">
                
                <!-- Logo in Dock (Left) -->
                <div class="dock-logo">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-text">
                            <span class="logo-knock">KNOCK</span><span class="logo-out">OUT</span>
                        </a>
                    <?php endif; ?>
                </div>
                
                <!-- Navigation Items (Center/Dock Style) -->
                <nav class="dock-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'dock-items',
                        'container'      => false,
                        'fallback_cb'    => 'knockout_primary_menu_fallback',
                    ));
                    ?>
                </nav>
                
                <!-- Action Buttons (Right) -->
                <div class="dock-actions">
                    <a href="https://wa.me/919876543210" class="dock-button whatsapp-btn" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19.077 4.928C17.191 3.041 14.683 2 12.006 2 6.798 2 2.548 6.193 2.54 11.393c-.003 1.73.45 3.425 1.312 4.932L2.5 21.5l5.324-1.313c1.444.786 3.07 1.202 4.728 1.204h.004c5.2 0 9.46-4.192 9.468-9.393.004-2.51-.973-4.876-2.86-6.77zM12.02 19.75h-.003c-1.48-.001-2.93-.398-4.18-1.15l-.3-.178-3.226.795.84-3.114-.182-.314c-.803-1.338-1.23-2.888-1.228-4.47.007-4.335 3.54-7.864 7.89-7.864 2.106 0 4.087.822 5.577 2.314 1.49 1.492 2.312 3.472 2.308 5.578-.007 4.334-3.54 7.86-7.886 7.86zm4.33-5.888c-.237-.12-1.402-.692-1.62-.77-.217-.08-.375-.12-.533.12-.158.238-.613.77-.752.928-.14.158-.278.178-.515.06-.237-.12-1.002-.37-1.91-1.18-.706-.63-1.183-1.408-1.322-1.647-.14-.238-.015-.367.105-.486.108-.108.237-.278.356-.417.118-.14.158-.238.237-.397.08-.158.04-.297-.02-.416-.06-.12-.533-1.283-.73-1.756-.192-.46-.387-.398-.533-.406-.138-.007-.297-.01-.456-.01-.158 0-.416.06-.634.297-.218.238-.832.813-.832 1.983 0 1.17.85 2.3.97 2.46.12.158 1.674 2.56 4.058 3.59.567.246 1.01.393 1.355.502.57.18 1.09.155 1.5.094.457-.068 1.41-.576 1.61-1.133.198-.557.198-1.034.14-1.134-.06-.1-.22-.16-.456-.278z"/>
                        </svg>
                        <span>WhatsApp</span>
                    </a>
                    
                    <a href="tel:+919876543210" class="dock-button call-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <span>Call</span>
                    </a>
                    
                    <!-- Mobile Menu Toggle (Hidden on Desktop) -->
                    <button class="mobile-menu-toggle" aria-label="Menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu (Hidden by default) -->
        <div class="mobile-menu-container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'mobile-menu',
                'container'      => false,
            ));
            ?>
            
            <div class="mobile-actions">
                <a href="https://wa.me/919876543210" class="mobile-whatsapp" target="_blank">WhatsApp</a>
                <a href="tel:+919876543210" class="mobile-call">Call Us</a>
            </div>
        </div>
    </header>
    
    <div id="content" class="site-content">