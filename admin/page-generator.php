<?php
/**
 * Manual Page Generator Admin Panel
 * Greenpasture Foundation Theme
 */

// Security check
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add admin menu for page generator
 */
function greenpasture_add_admin_menu() {
    add_theme_page(
        'Setup Pages',
        'Setup Pages',
        'manage_options',
        'greenpasture-setup',
        'greenpasture_setup_page'
    );
}
add_action('admin_menu', 'greenpasture_add_admin_menu');

/**
 * Admin page content
 */
function greenpasture_setup_page() {
    // Handle form submission
    if (isset($_POST['greenpasture_generate_pages']) && check_admin_referer('greenpasture_setup_nonce')) {
        $result = greenpasture_manual_create_pages();
        echo '<div class="notice notice-' . ($result['success'] ? 'success' : 'error') . '"><p>' . $result['message'] . '</p></div>';

        if (!empty($result['details'])) {
            echo '<div class="notice notice-info"><p><strong>Details:</strong></p><ul>';
            foreach ($result['details'] as $detail) {
                echo '<li>' . esc_html($detail) . '</li>';
            }
            echo '</ul></div>';
        }
    }

    // Handle reset
    if (isset($_POST['greenpasture_reset_flag']) && check_admin_referer('greenpasture_reset_nonce')) {
        delete_option('greenpasture_pages_created');
        echo '<div class="notice notice-success"><p>Reset complete! You can now generate pages again.</p></div>';
    }

    // Check current status
    $pages_created = get_option('greenpasture_pages_created', false);
    $existing_pages = greenpasture_check_existing_pages();

    ?>
    <div class="wrap">
        <h1>Greenpasture Foundation - Setup Pages</h1>

        <div class="card" style="max-width: 800px; margin-top: 20px;">
            <h2>Page Status</h2>
            <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        <th>Page</th>
                        <th>Status</th>
                        <th>Template</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($existing_pages as $page_slug => $page_data): ?>
                        <tr>
                            <td><strong><?php echo esc_html(ucfirst($page_slug)); ?></strong></td>
                            <td>
                                <?php if ($page_data['exists']): ?>
                                    <span style="color: green;">✓ Exists (ID: <?php echo $page_data['id']; ?>)</span>
                                <?php else: ?>
                                    <span style="color: red;">✗ Not Found</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo esc_html($page_data['template']); ?></td>
                            <td>
                                <?php if ($page_data['exists']): ?>
                                    <a href="<?php echo get_edit_post_link($page_data['id']); ?>" class="button button-small">Edit</a>
                                    <a href="<?php echo get_permalink($page_data['id']); ?>" class="button button-small" target="_blank">View</a>
                                <?php else: ?>
                                    <span style="color: #999;">—</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <p style="margin-top: 20px;">
                <strong>Generation Flag:</strong>
                <?php if ($pages_created): ?>
                    <span style="color: orange;">SET</span> (Pages have been created before)
                <?php else: ?>
                    <span style="color: green;">NOT SET</span> (Ready to create pages)
                <?php endif; ?>
            </p>
        </div>

        <div class="card" style="max-width: 800px; margin-top: 20px;">
            <h2>Generate Pages</h2>
            <p>This will create the following pages if they don't exist:</p>
            <ul style="list-style: disc; margin-left: 20px;">
                <li><strong>Home</strong> - Premium slider with image-based sections</li>
                <li><strong>News</strong> - Blog posts listing page</li>
                <li><strong>Gallery</strong> - 36 training photos with filtering</li>
                <li><strong>Contact</strong> - Contact form and information</li>
                <li><strong>Get Involved</strong> - Tabbed forms for Volunteer, Partner, Donate</li>
            </ul>

            <form method="post" style="margin-top: 20px;">
                <?php wp_nonce_field('greenpasture_setup_nonce'); ?>
                <p>
                    <button type="submit" name="greenpasture_generate_pages" class="button button-primary button-large">
                        🚀 Generate All Pages
                    </button>
                </p>
                <p class="description">
                    This will also:
                    <ul style="list-style: disc; margin-left: 20px; margin-top: 10px;">
                        <li>Set Home as your front page</li>
                        <li>Create a Primary Menu with all pages</li>
                        <li>Apply the correct templates automatically</li>
                        <li>Skip pages that already exist</li>
                    </ul>
                </p>
            </form>
        </div>

        <div class="card" style="max-width: 800px; margin-top: 20px; background: #fff3cd; border-left: 4px solid #ffc107;">
            <h2>Reset Generation Flag</h2>
            <p>If pages already exist but the system thinks they haven't been created, reset the flag:</p>

            <form method="post" style="margin-top: 20px;">
                <?php wp_nonce_field('greenpasture_reset_nonce'); ?>
                <p>
                    <button type="submit" name="greenpasture_reset_flag" class="button button-secondary">
                        ↺ Reset Flag
                    </button>
                </p>
                <p class="description">
                    This allows you to run the generation process again if needed.
                </p>
            </form>
        </div>

        <div class="card" style="max-width: 800px; margin-top: 20px;">
            <h2>System Information</h2>
            <table class="form-table">
                <tr>
                    <th>WordPress Version:</th>
                    <td><?php echo get_bloginfo('version'); ?></td>
                </tr>
                <tr>
                    <th>PHP Version:</th>
                    <td><?php echo phpversion(); ?></td>
                </tr>
                <tr>
                    <th>Theme Version:</th>
                    <td><?php echo wp_get_theme()->get('Version'); ?></td>
                </tr>
                <tr>
                    <th>Current User ID:</th>
                    <td><?php echo get_current_user_id(); ?></td>
                </tr>
                <tr>
                    <th>Front Page Setting:</th>
                    <td>
                        <?php
                        $show_on_front = get_option('show_on_front');
                        $page_on_front = get_option('page_on_front');
                        echo ucfirst($show_on_front);
                        if ($show_on_front == 'page' && $page_on_front) {
                            echo ' (Page ID: ' . $page_on_front . ')';
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <?php
}

/**
 * Check which pages exist
 */
function greenpasture_check_existing_pages() {
    $pages = array(
        'home' => array(
            'exists' => false,
            'id' => null,
            'template' => 'Home Page'
        ),
        'news' => array(
            'exists' => false,
            'id' => null,
            'template' => 'News Page'
        ),
        'gallery' => array(
            'exists' => false,
            'id' => null,
            'template' => 'Gallery Page'
        ),
        'contact' => array(
            'exists' => false,
            'id' => null,
            'template' => 'Contact Page'
        ),
        'get-involved' => array(
            'exists' => false,
            'id' => null,
            'template' => 'Get Involved Page'
        )
    );

    foreach ($pages as $slug => $data) {
        $page = get_page_by_path($slug);
        if ($page) {
            $pages[$slug]['exists'] = true;
            $pages[$slug]['id'] = $page->ID;
        }
    }

    return $pages;
}

/**
 * Manual page creation function with detailed feedback
 */
function greenpasture_manual_create_pages() {
    $result = array(
        'success' => true,
        'message' => '',
        'details' => array()
    );

    // Get current user ID (don't hardcode to 1)
    $current_user_id = get_current_user_id();
    if (!$current_user_id) {
        $current_user_id = 1; // Fallback to admin
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

    $pages_created = 0;
    $pages_skipped = 0;

    // Create each page
    foreach ($pages as $page) {
        // Check if page already exists
        $page_check = get_page_by_path($page['slug']);

        if ($page_check) {
            $pages_skipped++;
            $result['details'][] = $page['title'] . ': Already exists (ID: ' . $page_check->ID . ')';
            continue;
        }

        // Create the page
        $page_id = wp_insert_post(array(
            'post_title' => $page['title'],
            'post_name' => $page['slug'],
            'post_content' => $page['content'],
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_author' => $current_user_id,
            'page_template' => $page['template']
        ));

        if (is_wp_error($page_id)) {
            $result['success'] = false;
            $result['details'][] = $page['title'] . ': ERROR - ' . $page_id->get_error_message();
            continue;
        }

        // Set page template
        update_post_meta($page_id, '_wp_page_template', $page['template']);

        // Set Home page as front page
        if ($page['slug'] == 'home') {
            update_option('page_on_front', $page_id);
            update_option('show_on_front', 'page');
            $result['details'][] = $page['title'] . ': Created successfully (ID: ' . $page_id . ') and set as front page';
        } else {
            $result['details'][] = $page['title'] . ': Created successfully (ID: ' . $page_id . ')';
        }

        $pages_created++;
    }

    // Create primary menu if it doesn't exist
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
        if (!is_array($locations)) {
            $locations = array();
        }
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);

        $result['details'][] = 'Primary Menu: Created and assigned to header';
    } else {
        $result['details'][] = 'Primary Menu: Already exists';
    }

    // Set the flag
    update_option('greenpasture_pages_created', true);

    // Summary message
    if ($pages_created > 0) {
        $result['message'] = "Success! Created {$pages_created} page(s).";
        if ($pages_skipped > 0) {
            $result['message'] .= " Skipped {$pages_skipped} existing page(s).";
        }
    } elseif ($pages_skipped > 0) {
        $result['message'] = "All pages already exist. No changes made.";
    } else {
        $result['success'] = false;
        $result['message'] = "Failed to create pages. Check details below.";
    }

    return $result;
}
