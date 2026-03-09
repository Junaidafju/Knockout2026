<?php
/**
 * ACF Fields Configuration
 * 
 * @package Sports_Cafe_Theme
 */

if (function_exists('acf_add_local_field_group')):

// Menu Item Fields
acf_add_local_field_group(array(
    'key' => 'group_menu_item',
    'title' => 'Menu Item Details',
    'fields' => array(
        array(
            'key' => 'field_menu_price',
            'label' => 'Price',
            'name' => 'menu_price',
            'type' => 'number',
            'prefix' => '',
            'instructions' => 'Enter the price (e.g., 12.99)',
            'required' => 1,
            'default_value' => '',
            'placeholder' => '0.00',
            'prepend' => '$',
            'append' => '',
            'min' => 0,
            'max' => 999,
            'step' => 0.01,
        ),
        array(
            'key' => 'field_menu_spicy',
            'label' => 'Spicy?',
            'name' => 'menu_spicy',
            'type' => 'true_false',
            'instructions' => 'Check if this item is spicy',
            'ui' => 1,
            'ui_on_text' => 'Yes',
            'ui_off_text' => 'No',
        ),
        array(
            'key' => 'field_menu_gluten_free',
            'label' => 'Gluten Free?',
            'name' => 'menu_gluten_free',
            'type' => 'true_false',
            'instructions' => 'Check if this item is gluten-free',
            'ui' => 1,
            'ui_on_text' => 'Yes',
            'ui_off_text' => 'No',
        ),
        array(
            'key' => 'field_menu_vegetarian',
            'label' => 'Vegetarian?',
            'name' => 'menu_vegetarian',
            'type' => 'true_false',
            'ui' => 1,
            'ui_on_text' => 'Yes',
            'ui_off_text' => 'No',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'food_menu',
            ),
        ),
    ),
));

// Event Fields
acf_add_local_field_group(array(
    'key' => 'group_event',
    'title' => 'Event Details',
    'fields' => array(
        array(
            'key' => 'field_event_date',
            'label' => 'Event Date',
            'name' => 'event_date',
            'type' => 'date_picker',
            'required' => 1,
            'display_format' => 'F j, Y',
            'return_format' => 'Y-m-d',
            'first_day' => 0,
        ),
        array(
            'key' => 'field_event_time',
            'label' => 'Event Time',
            'name' => 'event_time',
            'type' => 'time_picker',
            'required' => 1,
            'display_format' => 'g:i a',
            'return_format' => 'H:i:s',
        ),
        array(
            'key' => 'field_event_cover',
            'label' => 'Cover Charge',
            'name' => 'event_cover',
            'type' => 'number',
            'instructions' => 'Enter cover charge (0 for free)',
            'default_value' => 0,
            'prepend' => '$',
            'min' => 0,
            'step' => 0.01,
        ),
        array(
            'key' => 'field_event_featured',
            'label' => 'Featured Event?',
            'name' => 'event_featured',
            'type' => 'true_false',
            'ui' => 1,
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'events',
            ),
        ),
    ),
));

// Match Fields
acf_add_local_field_group(array(
    'key' => 'group_match',
    'title' => 'Match Details',
    'fields' => array(
        array(
            'key' => 'field_match_teams',
            'label' => 'Teams',
            'name' => 'match_teams',
            'type' => 'text',
            'required' => 1,
            'placeholder' => 'e.g., Lakers vs Warriors',
        ),
        array(
            'key' => 'field_match_date',
            'label' => 'Match Date',
            'name' => 'match_date',
            'type' => 'date_picker',
            'required' => 1,
            'display_format' => 'F j, Y',
            'return_format' => 'Y-m-d',
        ),
        array(
            'key' => 'field_match_time',
            'label' => 'Match Time',
            'name' => 'match_time',
            'type' => 'time_picker',
            'required' => 1,
            'display_format' => 'g:i a',
            'return_format' => 'H:i:s',
        ),
        array(
            'key' => 'field_match_channel',
            'label' => 'TV Channel',
            'name' => 'match_channel',
            'type' => 'text',
            'placeholder' => 'e.g., ESPN, Fox Sports',
        ),
        array(
            'key' => 'field_match_live',
            'label' => 'Currently Live?',
            'name' => 'match_live',
            'type' => 'true_false',
            'ui' => 1,
            'ui_on_text' => 'Live Now',
            'ui_off_text' => 'Upcoming',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'live_matches',
            ),
        ),
    ),
));

endif;