<?php
/**
 * Greenpasture Foundation Theme Functions
 *
 * @package Greenpasture_Foundation
 */

// Include admin page generator
if (is_admin()) {
    require_once get_template_directory() . '/admin/page-generator.php';
}

// Show admin notice on theme activation
function greenpasture_activation_notice() {
    $pages_created = get_option('greenpasture_pages_created', false);

    // Only show if pages haven't been created yet
    if (!$pages_created) {
        $existing_pages = 0;
        foreach (array('home', 'news', 'gallery', 'contact', 'get-involved') as $slug) {
            if (get_page_by_path($slug)) {
                $existing_pages++;
            }
        }

        // Only show if no pages exist
        if ($existing_pages == 0) {
            ?>
            <div class="notice notice-info is-dismissible">
                <h2>🎉 Welcome to Greenpasture Foundation Theme!</h2>
                <p><strong>Important:</strong> Your theme is activated, but you need to generate the pages.</p>
                <p>
                    <a href="<?php echo admin_url('themes.php?page=greenpasture-setup'); ?>" class="button button-primary">
                        🚀 Generate Pages Now
                    </a>
                    <a href="<?php echo admin_url('themes.php?page=greenpasture-setup'); ?>" class="button">
                        View Setup Panel
                    </a>
                </p>
                <p><em>This will create: Home, News, Gallery, Contact, and Get Involved pages with premium templates.</em></p>
            </div>
            <?php
        }
    }
}
add_action('admin_notices', 'greenpasture_activation_notice');

// Theme Setup
function greenpasture_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'greenpasture'),
        'footer' => __('Footer Menu', 'greenpasture'),
    ));

    // Add image sizes
    add_image_size('hero-slider', 1920, 600, true);
    add_image_size('program-card', 600, 400, true);
    add_image_size('gallery-thumb', 400, 300, true);
}
add_action('after_setup_theme', 'greenpasture_theme_setup');

// Enqueue styles and scripts
function greenpasture_enqueue_scripts() {
    wp_enqueue_style('greenpasture-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('greenpasture-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');

    wp_enqueue_script('greenpasture-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'greenpasture_enqueue_scripts');

// Add SEO improvements
function greenpasture_seo_optimizations() {
    // Enable lazy loading for images
    add_filter('wp_lazy_loading_enabled', '__return_true');

    // Add defer to JavaScript
    add_filter('script_loader_tag', function($tag, $handle) {
        if (is_admin()) {
            return $tag;
        }
        return str_replace(' src', ' defer src', $tag);
    }, 10, 2);
}
add_action('init', 'greenpasture_seo_optimizations');

// Add structured data for organization
function greenpasture_structured_data() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Greenpasture Foundation',
            'url' => home_url(),
            'logo' => get_template_directory_uri() . '/assets/images/logo.png',
            'description' => 'Empowering youth in Gauteng through comprehensive skills development programs',
            'address' => array(
                '@type' => 'PostalAddress',
                'streetAddress' => '2240 Harry Gwala Street, Chief Albert Luthuli',
                'addressLocality' => 'Cloverdene, Benoni',
                'addressRegion' => 'Gauteng',
                'postalCode' => '1501',
                'addressCountry' => 'ZA'
            ),
            'contactPoint' => array(
                '@type' => 'ContactPoint',
                'telephone' => '+27-69-369-5698',
                'contactType' => 'Customer Service',
                'areaServed' => 'ZA',
                'availableLanguage' => 'English'
            ),
            'sameAs' => array(
                'https://www.facebook.com/share/1YE9xk3r9h/',
                'https://www.instagram.com/greenpasturefoundation',
                'https://www.linkedin.com/in/greenpasture-foundation-b60013382'
            )
        );
        echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
    }
}
add_action('wp_head', 'greenpasture_structured_data');

// Force allow search engine indexing - Remove noindex
function greenpasture_allow_indexing() {
    return '1'; // Changed from '0' to '1' for proper indexing
}
add_filter('pre_option_blog_public', 'greenpasture_allow_indexing');

// Remove noindex meta tag completely - Return proper array
function greenpasture_remove_noindex($robots) {
    // Ensure we always return an array
    if (!is_array($robots)) {
        $robots = array();
    }

    // Remove noindex and nofollow if they exist
    unset($robots['noindex']);
    unset($robots['nofollow']);

    // Force index and follow
    $robots['index'] = true;
    $robots['follow'] = true;
    $robots['max-image-preview'] = 'large';
    $robots['max-snippet'] = -1;
    $robots['max-video-preview'] = -1;

    return $robots;
}
add_filter('wp_robots', 'greenpasture_remove_noindex', 999);

// Force remove any noindex tags
function greenpasture_force_remove_noindex() {
    add_filter('option_blog_public', function() { return '1'; });
    remove_action('wp_head', 'noindex', 1);
    remove_action('wp_head', 'wp_no_robots');
}
add_action('init', 'greenpasture_force_remove_noindex');

// Add custom robots meta tag - only if WordPress doesn't add it
function greenpasture_add_robots_meta() {
    // Only add if no robots meta tag exists yet
    if (!has_action('wp_head', 'wp_robots')) {
        echo '<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />' . "\n";
    }
}
add_action('wp_head', 'greenpasture_add_robots_meta', 999);

// Customize document title
function greenpasture_custom_title($title) {
    if (is_front_page() && is_home()) {
        return 'Greenpasture Foundation - Youth Skills Development Programs in Gauteng';
    } elseif (is_front_page()) {
        return 'Greenpasture Foundation - Empowering Youth Through Skills Development';
    } elseif (is_page('gallery')) {
        return 'Gallery - Greenpasture Foundation Success Stories';
    } elseif (is_page('contact')) {
        return 'Contact Us - Greenpasture Foundation';
    } elseif (is_page('news')) {
        return 'News & Updates - Greenpasture Foundation';
    } elseif (is_page('get-involved')) {
        return 'Get Involved - Greenpasture Foundation';
    }
    return $title;
}
add_filter('pre_get_document_title', 'greenpasture_custom_title', 10);

// Create pages on theme activation
function greenpasture_create_pages() {
    // Check if pages already exist
    if (get_option('greenpasture_pages_created')) {
        return;
    }

    // Define pages to create
    $pages = array(
        array(
            'title' => 'Home',
            'slug' => 'home',
            'template' => 'templates/template-home.php',
            'content' => '<h2>Welcome to Greenpasture Foundation</h2><p>Empowering youth through skills development and creating pathways to success in Gauteng communities.</p>'
        ),
        array(
            'title' => 'News',
            'slug' => 'news',
            'template' => 'templates/template-news.php',
            'content' => '<h2>Latest News & Updates</h2><p>Stay informed about our latest programs, success stories, and community impact.</p>'
        ),
        array(
            'title' => 'Gallery',
            'slug' => 'gallery',
            'template' => 'templates/template-gallery.php',
            'content' => '<h2>Our Gallery</h2><p>Explore photos from our programs, training sessions, and student achievements.</p>'
        ),
        array(
            'title' => 'Contact',
            'slug' => 'contact',
            'template' => 'templates/template-contact.php',
            'content' => '<h2>Get In Touch</h2><p>Contact us to learn more about our programs or to get involved.</p>'
        ),
        array(
            'title' => 'Get Involved',
            'slug' => 'get-involved',
            'template' => 'templates/template-get-involved.php',
            'content' => '<h2>Get Involved</h2><p>Join us in empowering youth and transforming communities through volunteering, partnerships, or donations.</p>'
        )
    );

    // Create each page
    foreach ($pages as $page) {
        // Check if page already exists
        $page_check = get_page_by_path($page['slug']);

        if (!$page_check) {
            $page_id = wp_insert_post(array(
                'post_title' => $page['title'],
                'post_name' => $page['slug'],
                'post_content' => $page['content'],
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_author' => 1,
                'page_template' => $page['template']
            ));

            // Set page template
            if ($page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', $page['template']);

                // Set Home page as front page
                if ($page['slug'] == 'home') {
                    update_option('page_on_front', $page_id);
                    update_option('show_on_front', 'page');
                }
            }
        }
    }

    // Create primary menu and assign pages
    $menu_name = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);

    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);

        // Add menu items
        foreach ($pages as $index => $page) {
            $page_obj = get_page_by_path($page['slug']);
            if ($page_obj) {
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' => $page['title'],
                    'menu-item-object' => 'page',
                    'menu-item-object-id' => $page_obj->ID,
                    'menu-item-type' => 'post_type',
                    'menu-item-status' => 'publish',
                    'menu-item-position' => $index + 1
                ));
            }
        }

        // Assign menu to primary location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }

    // Mark that pages have been created
    update_option('greenpasture_pages_created', true);
}

// Register widget areas
function greenpasture_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer Widget Area 1', 'greenpasture'),
        'id' => 'footer-1',
        'description' => __('Appears in the footer area', 'greenpasture'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Area 2', 'greenpasture'),
        'id' => 'footer-2',
        'description' => __('Appears in the footer area', 'greenpasture'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Area 3', 'greenpasture'),
        'id' => 'footer-3',
        'description' => __('Appears in the footer area', 'greenpasture'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Area 4', 'greenpasture'),
        'id' => 'footer-4',
        'description' => __('Appears in the footer area', 'greenpasture'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'greenpasture_widgets_init');

// Custom excerpt length
function greenpasture_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'greenpasture_excerpt_length');

// Custom excerpt more text
function greenpasture_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'greenpasture_excerpt_more');

// Add custom body classes
function greenpasture_body_classes($classes) {
    if (!is_front_page()) {
        $classes[] = 'inner-page';
    }
    return $classes;
}
add_filter('body_class', 'greenpasture_body_classes');

// Theme cleanup on deactivation
function greenpasture_theme_cleanup() {
    // Uncomment the line below to allow page regeneration on next activation
    // delete_option('greenpasture_pages_created');
}
register_deactivation_hook(__FILE__, 'greenpasture_theme_cleanup');

// Manual page generation trigger (for debugging)
// To use: Add ?greenpasture_setup=true to any URL while logged in as admin
function greenpasture_manual_setup() {
    if (isset($_GET['greenpasture_setup']) && $_GET['greenpasture_setup'] === 'true' && current_user_can('administrator')) {
        delete_option('greenpasture_pages_created');
        greenpasture_create_pages();
        wp_redirect(admin_url('edit.php?post_type=page'));
        exit;
    }
}
add_action('init', 'greenpasture_manual_setup');

// Force page creation on theme switch (better approach)
function greenpasture_activation() {
    greenpasture_create_pages();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'greenpasture_activation');
