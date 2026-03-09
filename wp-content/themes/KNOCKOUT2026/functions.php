<?php
/**
 * KnockOut Theme Functions
 * 
 * @package KnockOut_Theme
 */

// Theme Setup
function knockout_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register Navigation Menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'knockout'),
        'footer'    => __('Footer Menu', 'knockout'),
    ));
}
add_action('after_setup_theme', 'knockout_setup');

// Enqueue Scripts and Styles
function knockout_scripts() {
    // Google Fonts - Stylish & Readable
    wp_enqueue_style('knockout-fonts', 'https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap', array(), null);
    
    // Main Stylesheet
    wp_enqueue_style('knockout-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style('knockout-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array('knockout-style'), '1.0.0');
    
    // JavaScript
    wp_enqueue_script('knockout-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true);
    wp_enqueue_script('knockout-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'knockout_scripts');

// Register Widget Areas
function knockout_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area 1', 'knockout'),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area 2', 'knockout'),
        'id'            => 'footer-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area 3', 'knockout'),
        'id'            => 'footer-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area 4', 'knockout'),
        'id'            => 'footer-4',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'knockout_widgets_init');

// Custom excerpt length
function knockout_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'knockout_excerpt_length');

// Custom excerpt more
function knockout_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'knockout_excerpt_more');

// Fallback menu if no menu is assigned
function knockout_primary_menu_fallback() {
    ?>
    <ul class="dock-items">
        <li class="menu-item <?php if(is_front_page()) echo 'current-menu-item'; ?>">
            <a href="<?php echo home_url('/'); ?>">HOME</a>
        </li>
        <li class="menu-item">
            <a href="<?php echo home_url('/about-us'); ?>">ABOUT US</a>
        </li>
        <li class="menu-item">
            <a href="<?php echo home_url('/activities'); ?>">ACTIVITIES</a>
        </li>
        <li class="menu-item">
            <a href="<?php echo home_url('/events'); ?>">EVENTS</a>
        </li>
        <li class="menu-item">
            <a href="<?php echo home_url('/gallery'); ?>">GALLERY</a>
        </li>
        <li class="menu-item">
            <a href="<?php echo home_url('/blogs'); ?>">BLOGS</a>
        </li>
        <li class="menu-item">
            <a href="<?php echo home_url('/contact'); ?>">CONTACT US</a>
        </li>
    </ul>
    <?php
}