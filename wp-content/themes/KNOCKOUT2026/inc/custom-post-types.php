<?php
/**
 * Custom Post Types Registration
 * 
 * @package Sports_Cafe_Theme
 */

function sports_cafe_register_post_types() {
    
    // Food Menu CPT
    $food_menu_labels = array(
        'name'               => __('Food Menu', 'sports-cafe'),
        'singular_name'      => __('Menu Item', 'sports-cafe'),
        'menu_name'          => __('Food Menu', 'sports-cafe'),
        'add_new'            => __('Add New Item', 'sports-cafe'),
        'add_new_item'       => __('Add New Menu Item', 'sports-cafe'),
        'edit_item'          => __('Edit Menu Item', 'sports-cafe'),
        'new_item'           => __('New Menu Item', 'sports-cafe'),
        'view_item'          => __('View Menu Item', 'sports-cafe'),
        'search_items'       => __('Search Menu', 'sports-cafe'),
        'not_found'          => __('No menu items found', 'sports-cafe'),
        'not_found_in_trash' => __('No menu items in trash', 'sports-cafe'),
    );
    
    $food_menu_args = array(
        'labels'              => $food_menu_labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'menu-item'),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-food',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'        => true, // Gutenberg support
    );
    
    register_post_type('food_menu', $food_menu_args);
    
    // Events CPT
    $events_labels = array(
        'name'               => __('Events', 'sports-cafe'),
        'singular_name'      => __('Event', 'sports-cafe'),
        'menu_name'          => __('Events', 'sports-cafe'),
        'add_new'            => __('Add New Event', 'sports-cafe'),
        'add_new_item'       => __('Add New Event', 'sports-cafe'),
        'edit_item'          => __('Edit Event', 'sports-cafe'),
        'new_item'           => __('New Event', 'sports-cafe'),
        'view_item'          => __('View Event', 'sports-cafe'),
        'search_items'       => __('Search Events', 'sports-cafe'),
        'not_found'          => __('No events found', 'sports-cafe'),
        'not_found_in_trash' => __('No events in trash', 'sports-cafe'),
    );
    
    $events_args = array(
        'labels'              => $events_labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'event'),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-calendar-alt',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'        => true,
    );
    
    register_post_type('events', $events_args);
    
    // Live Matches CPT
    $matches_labels = array(
        'name'               => __('Live Matches', 'sports-cafe'),
        'singular_name'      => __('Match', 'sports-cafe'),
        'menu_name'          => __('Live Matches', 'sports-cafe'),
        'add_new'            => __('Add New Match', 'sports-cafe'),
        'add_new_item'       => __('Add New Match', 'sports-cafe'),
        'edit_item'          => __('Edit Match', 'sports-cafe'),
        'new_item'           => __('New Match', 'sports-cafe'),
        'view_item'          => __('View Match', 'sports-cafe'),
        'search_items'       => __('Search Matches', 'sports-cafe'),
        'not_found'          => __('No matches found', 'sports-cafe'),
        'not_found_in_trash' => __('No matches in trash', 'sports-cafe'),
    );
    
    $matches_args = array(
        'labels'              => $matches_labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'match'),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-tickets-alt',
        'supports'            => array('title', 'thumbnail'),
        'show_in_rest'        => true,
    );
    
    register_post_type('live_matches', $matches_args);
    
    // Flush rewrite rules
    flush_rewrite_rules();
}
add_action('init', 'sports_cafe_register_post_types');

/**
 * Register Custom Taxonomies
 */
function sports_cafe_register_taxonomies() {
    
    // Menu Categories (for Food Menu)
    $menu_cat_labels = array(
        'name'              => __('Menu Categories', 'sports-cafe'),
        'singular_name'     => __('Menu Category', 'sports-cafe'),
        'search_items'      => __('Search Categories', 'sports-cafe'),
        'all_items'         => __('All Categories', 'sports-cafe'),
        'parent_item'       => __('Parent Category', 'sports-cafe'),
        'parent_item_colon' => __('Parent Category:', 'sports-cafe'),
        'edit_item'         => __('Edit Category', 'sports-cafe'),
        'update_item'       => __('Update Category', 'sports-cafe'),
        'add_new_item'      => __('Add New Category', 'sports-cafe'),
        'new_item_name'     => __('New Category Name', 'sports-cafe'),
        'menu_name'         => __('Categories', 'sports-cafe'),
    );
    
    $menu_cat_args = array(
        'hierarchical'      => true,
        'labels'            => $menu_cat_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'menu-category'),
        'show_in_rest'      => true,
    );
    
    register_taxonomy('menu_category', array('food_menu'), $menu_cat_args);
    
    // Event Types
    $event_type_labels = array(
        'name'              => __('Event Types', 'sports-cafe'),
        'singular_name'     => __('Event Type', 'sports-cafe'),
        'search_items'      => __('Search Event Types', 'sports-cafe'),
        'all_items'         => __('All Event Types', 'sports-cafe'),
        'parent_item'       => __('Parent Type', 'sports-cafe'),
        'parent_item_colon' => __('Parent Type:', 'sports-cafe'),
        'edit_item'         => __('Edit Type', 'sports-cafe'),
        'update_item'       => __('Update Type', 'sports-cafe'),
        'add_new_item'      => __('Add New Type', 'sports-cafe'),
        'new_item_name'     => __('New Type Name', 'sports-cafe'),
        'menu_name'         => __('Event Types', 'sports-cafe'),
    );
    
    $event_type_args = array(
        'hierarchical'      => true,
        'labels'            => $event_type_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'event-type'),
        'show_in_rest'      => true,
    );
    
    register_taxonomy('event_type', array('events'), $event_type_args);
    
    // Sport Types (for Live Matches)
    $sport_type_labels = array(
        'name'              => __('Sport Types', 'sports-cafe'),
        'singular_name'     => __('Sport Type', 'sports-cafe'),
        'search_items'      => __('Search Sports', 'sports-cafe'),
        'all_items'         => __('All Sports', 'sports-cafe'),
        'parent_item'       => __('Parent Sport', 'sports-cafe'),
        'parent_item_colon' => __('Parent Sport:', 'sports-cafe'),
        'edit_item'         => __('Edit Sport', 'sports-cafe'),
        'update_item'       => __('Update Sport', 'sports-cafe'),
        'add_new_item'      => __('Add New Sport', 'sports-cafe'),
        'new_item_name'     => __('New Sport Name', 'sports-cafe'),
        'menu_name'         => __('Sports', 'sports-cafe'),
    );
    
    $sport_type_args = array(
        'hierarchical'      => true,
        'labels'            => $sport_type_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'sport'),
        'show_in_rest'      => true,
    );
    
    register_taxonomy('sport_type', array('live_matches'), $sport_type_args);
}
add_action('init', 'sports_cafe_register_taxonomies');