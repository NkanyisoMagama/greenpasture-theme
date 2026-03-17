<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo is_front_page() ? 'Greenpasture Foundation - Empowering youth in Gauteng through skills development programs including computing, security, catering, and work readiness training.' : wp_strip_all_tags(get_the_excerpt()); ?>">
    <meta name="keywords" content="skills development, youth empowerment, training programs, Gauteng, South Africa, computing training, security training, catering, work readiness">
    <meta name="author" content="Greenpasture Foundation">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo is_front_page() ? 'Greenpasture Foundation - Empowering Youth Through Skills Development' : wp_get_document_title(); ?>">
    <meta property="og:description" content="<?php echo is_front_page() ? 'Empowering youth in Gauteng through comprehensive skills development programs.' : wp_strip_all_tags(get_the_excerpt()); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta property="og:site_name" content="Greenpasture Foundation">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo is_front_page() ? 'Greenpasture Foundation - Empowering Youth' : wp_get_document_title(); ?>">
    <meta name="twitter:description" content="<?php echo is_front_page() ? 'Skills development programs for youth in Gauteng' : wp_strip_all_tags(get_the_excerpt()); ?>">

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header <?php echo (is_front_page() || is_single() || is_page_template('templates/template-gallery.php') || is_page_template('templates/template-news.php') || is_page_template('templates/template-contact.php') || is_page_template('templates/template-get-involved.php')) ? 'transparent-header' : ''; ?>">
    <!-- Main Header - Transparent on homepage and pages with breadcrumb hero -->
    <div class="header-main">
        <div class="container">
            <div class="site-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Greenpasture Foundation Logo" class="site-logo-img">
                </a>
            </div>

            <nav class="main-navigation" role="navigation" aria-label="Primary Navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                    'fallback_cb' => false,
                ));
                ?>
            </nav>

            <button class="mobile-menu-toggle" aria-label="Toggle Mobile Menu" aria-expanded="false">
                <span class="menu-text">Menu</span>
                <span class="menu-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </span>
            </button>
        </div>
    </div>
</header>

<main id="main-content" class="site-content">
