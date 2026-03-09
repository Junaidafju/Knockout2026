<?php
/**
 * Enqueue Scripts and Styles
 * 
 * @package Sports_Cafe_Theme
 */

function sports_cafe_scripts() {
    // Enqueue CSS
    wp_enqueue_style(
        'sports-cafe-main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0.0'
    );
    
    wp_enqueue_style(
        'sports-cafe-responsive',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array('sports-cafe-main-style'),
        '1.0.0'
    );
    
    // Enqueue Google Fonts
    wp_enqueue_style(
        'sports-cafe-fonts',
        'https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap',
        array(),
        null
    );
    
    // Enqueue JavaScript
    wp_enqueue_script(
        'sports-cafe-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        array(),
        '1.0.0',
        true
    );
    
    wp_enqueue_script(
        'sports-cafe-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('sports-cafe-main', 'sports_cafe_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('sports_cafe_nonce'),
    ));
    
    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'sports_cafe_scripts');