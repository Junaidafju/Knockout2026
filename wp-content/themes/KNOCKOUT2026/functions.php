<?php
/**
 * KnockOut Premium Theme Functions
 */

// Theme Setup
function knockout_premium_setup()
{
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');

    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'knockout-premium'),
        'footer' => __('Footer Menu', 'knockout-premium'),
        'social' => __('Social Menu', 'knockout-premium'),
    ));
}
add_action('after_setup_theme', 'knockout_premium_setup');

// Enqueue all scripts and styles
function knockout_premium_scripts()
{
    $theme_version = wp_get_theme()->get('Version');

    // Google Fonts - Roboto
    wp_enqueue_style(
        'knockout-fonts',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap',
        array(),
        null
    );

    // Alphacorsa Font (Custom Font)
    wp_enqueue_style(
        'alphacorsa-font',
        'https://db.onlinewebfonts.com/c/7736576106700fa2774f04bf3e04ebbb?family=Alphacorsa+Personal+Use',
        array(),
        null
    );

    // Font Awesome (for front-page feature icons)
    wp_enqueue_style(
        'knockout-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
        array(),
        '5.15.4'
    );

    // Main Stylesheet (includes everything)
    wp_enqueue_style(
        'knockout-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        $theme_version
    );

    // Responsive overrides
    wp_enqueue_style(
        'knockout-responsive',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array('knockout-style'),
        $theme_version
    );

    // Page-template specific styles (scoped to avoid conflicts)
    $is_knockout_page_template =
        is_page_template('page-templates/page-about.php') ||
        is_page_template('page-templates/page-activities.php') ||
        is_page_template('page-templates/page-menu.php') ||
        is_page_template('page-templates/page-events.php') ||
        is_page_template('page-templates/page-gallery.php') ||
        is_page_template('page-templates/page-contact.php') ||
        is_page_template('page-templates/page-blog.php');

    if ($is_knockout_page_template) {
        wp_enqueue_style('knockout-page-base', get_template_directory_uri() . '/assets/css/pages/page-base.css', array('knockout-style'), $theme_version);
    }
    if (is_page_template('page-templates/page-about.php')) {
        wp_enqueue_style('knockout-page-about', get_template_directory_uri() . '/assets/css/pages/about.css', array('knockout-style'), $theme_version);
    }

    if (is_page_template('page-templates/page-activities.php')) {
        wp_enqueue_style('knockout-page-activities', get_template_directory_uri() . '/assets/css/pages/activities.css', array('knockout-style'), $theme_version);
    }
    if (is_page_template('page-templates/page-menu.php')) {
        // (Optional) add later if Menu needs page-only overrides
    }
    if (is_page_template('page-templates/page-events.php')) {
        wp_enqueue_style('knockout-page-events', get_template_directory_uri() . '/assets/css/pages/events.css', array('knockout-style'), $theme_version);
    }
    if (is_page_template('page-templates/page-gallery.php')) {
        wp_enqueue_style('knockout-page-gallery', get_template_directory_uri() . '/assets/css/pages/gallery.css', array('knockout-style'), $theme_version);
    }
    if (is_page_template('page-templates/page-contact.php')) {
        wp_enqueue_style('knockout-page-contact', get_template_directory_uri() . '/assets/css/pages/contact.css', array('knockout-style'), $theme_version);
    }
    if (is_page_template('page-templates/page-blog.php')) {
        wp_enqueue_style('knockout-page-blog', get_template_directory_uri() . '/assets/css/pages/blog.css', array('knockout-style'), $theme_version);
    }

    // JavaScript
    wp_enqueue_script(
        'knockout-particles',
        get_template_directory_uri() . '/assets/js/particles.js',
        array(),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'knockout-animations',
        get_template_directory_uri() . '/assets/js/animations.js',
        array('jquery'),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'knockout-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        $theme_version,
        true
    );

    // Navigation / mobile menu behaviors
    wp_enqueue_script(
        'knockout-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        array(),
        $theme_version,
        true
    );

    // Localize script for AJAX (if needed)
    wp_localize_script('knockout-main', 'knockout_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('knockout_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'knockout_premium_scripts');

/**
 * One-time setup on theme activation:
 * - Create key pages if missing
 * - Assign correct page templates
 * - Create/assign Primary menu and add pages
 */
function knockout_theme_activate_setup()
{
    update_option('knockout_needs_initial_setup', 1, false);
}
add_action('after_switch_theme', 'knockout_theme_activate_setup');

function knockout_run_initial_setup()
{
    if (!is_admin())
        return;
    if (!current_user_can('manage_options'))
        return;
    if (!get_option('knockout_needs_initial_setup'))
        return;

    $pages = array(
        'about' => array('title' => 'About', 'template' => 'page-templates/page-about.php'),
        'activities' => array('title' => 'Activities', 'template' => 'page-templates/page-activities.php'),
        'menu' => array('title' => 'Menu', 'template' => 'page-templates/page-menu.php'),
        'events' => array('title' => 'Events', 'template' => 'page-templates/page-events.php'),
        'gallery' => array('title' => 'Gallery', 'template' => 'page-templates/page-gallery.php'),
        'contact' => array('title' => 'Contact', 'template' => 'page-templates/page-contact.php'),
        'blog' => array('title' => 'Blog', 'template' => 'page-templates/page-blog.php'),
    );

    $page_ids = array();
    foreach ($pages as $slug => $cfg) {
        $existing = get_page_by_path($slug);
        if ($existing) {
            $page_id = $existing->ID;
        } else {
            $page_id = wp_insert_post(array(
                'post_type' => 'page',
                'post_title' => $cfg['title'],
                'post_name' => $slug,
                'post_status' => 'publish',
            ));
        }

        if (!is_wp_error($page_id) && $page_id) {
            update_post_meta($page_id, '_wp_page_template', $cfg['template']);
            $page_ids[$slug] = (int) $page_id;
        }
    }

    // Create/assign primary menu
    $menu_name = 'Primary';
    $menu_obj = wp_get_nav_menu_object($menu_name);
    $menu_id = $menu_obj ? $menu_obj->term_id : wp_create_nav_menu($menu_name);

    if (!is_wp_error($menu_id) && $menu_id) {
        $locations = get_theme_mod('nav_menu_locations', array());
        $locations['primary'] = (int) $menu_id;
        set_theme_mod('nav_menu_locations', $locations);

        // Add menu items if missing (by title)
        $existing_items = wp_get_nav_menu_items($menu_id);
        $existing_titles = array();
        if (is_array($existing_items)) {
            foreach ($existing_items as $item) {
                $existing_titles[trim((string) $item->title)] = true;
            }
        }

        foreach (array('about', 'activities', 'menu', 'events', 'gallery', 'contact', 'blog') as $slug) {
            if (empty($page_ids[$slug]))
                continue;
            $title = $pages[$slug]['title'];
            if (!empty($existing_titles[$title]))
                continue;

            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => $title,
                'menu-item-object' => 'page',
                'menu-item-object-id' => $page_ids[$slug],
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish',
            ));
        }
    }

    delete_option('knockout_needs_initial_setup');
}
add_action('admin_init', 'knockout_run_initial_setup');

/**
 * Force `front-page.php` for the site root even when "Your homepage displays"
 * is set to "Your latest posts" (is_home + is_front_page).
 */
function knockout_force_front_page_template($template)
{
    if (is_front_page() && is_home()) {
        $front_page_template = locate_template('front-page.php');
        if (!empty($front_page_template)) {
            return $front_page_template;
        }
    }
    return $template;
}
add_filter('template_include', 'knockout_force_front_page_template', 99);

// Register Widget Areas
function knockout_widgets_init()
{
    register_sidebar(array(
        'name' => __('Footer Widget Area 1', 'knockout-premium'),
        'id' => 'footer-1',
        'description' => __('Add widgets here.', 'knockout-premium'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title gradient-text">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Area 2', 'knockout-premium'),
        'id' => 'footer-2',
        'description' => __('Add widgets here.', 'knockout-premium'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title gradient-text">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Area 3', 'knockout-premium'),
        'id' => 'footer-3',
        'description' => __('Add widgets here.', 'knockout-premium'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title gradient-text">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Area 4', 'knockout-premium'),
        'id' => 'footer-4',
        'description' => __('Add widgets here.', 'knockout-premium'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title gradient-text">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'knockout_widgets_init');

// Fallback menu if no menu is assigned
function knockout_fallback_menu()
{
    ?>
    <ul class="nav-menu">
        <li class="<?php if (is_front_page())
            echo 'current-menu-item'; ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>">HOME</a>
        </li>
        <li><a href="<?php echo esc_url(home_url('/about')); ?>">ABOUT</a></li>
        <li><a href="<?php echo esc_url(home_url('/events')); ?>">EVENTS</a></li>
        <li><a href="<?php echo esc_url(home_url('/gallery')); ?>">GALLERY</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">CONTACT</a></li>
        <li><a href="<?php echo esc_url(home_url('/blog')); ?>">BLOG</a></li>
    </ul>
    <?php
}

// Custom excerpt length
function knockout_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'knockout_excerpt_length');

// Add custom classes to body
function knockout_body_classes($classes)
{
    if (is_front_page()) {
        $classes[] = 'front-page';
    }
    if (wp_is_mobile()) {
        $classes[] = 'is-mobile';
    }
    return $classes;
}
add_filter('body_class', 'knockout_body_classes');

// Add theme version to styles/scripts for cache busting
function knockout_theme_version()
{
    return wp_get_theme()->get('Version');
}