<?php
/**
 * Theme Setup Functions
 * 
 * @package Sports_Cafe_Theme
 */

// No direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add custom classes to body
 */
function sports_cafe_body_classes($classes) {
    // Adds a class for custom logo
    if (has_custom_logo()) {
        $classes[] = 'has-logo';
    }
    
    // Check if is mobile
    if (wp_is_mobile()) {
        $classes[] = 'is-mobile';
    }
    
    return $classes;
}
add_filter('body_class', 'sports_cafe_body_classes');

/**
 * Add custom image sizes to media library
 */
function sports_cafe_custom_image_sizes($sizes) {
    return array_merge($sizes, array(
        'sports-cafe-hero'      => __('Hero Image', 'sports-cafe'),
        'sports-cafe-menu'      => __('Menu Item', 'sports-cafe'),
        'sports-cafe-thumbnail' => __('Sports Cafe Thumbnail', 'sports-cafe'),
        'sports-cafe-gallery'   => __('Gallery Image', 'sports-cafe'),
    ));
}
add_filter('image_size_names_choose', 'sports_cafe_custom_image_sizes');