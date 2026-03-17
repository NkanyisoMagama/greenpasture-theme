<?php
/**
 * Template Name: Get Involved Page
 *
 * @package Greenpasture_Foundation
 */

get_header(); ?>

<!-- Breadcrumb Section with Background Image -->
<section class="page-breadcrumb" style="position: relative; min-height: 50vh; display: flex; align-items: center; overflow: hidden; background: #000;">
    <!-- Background Image with Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20250925-WA0013-min.jpg" alt="Get Involved with Greenpasture Foundation - Volunteer Partner or Donate to Youth Skills Development Programs" loading="eager" width="1920" height="600" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.3;">
    </div>

    <!-- Content -->
    <div class="container" style="position: relative; z-index: 2;">
        <div style="max-width: 800px;">
            <!-- Breadcrumb Navigation -->
            <div class="breadcrumb-nav" style="margin-bottom: 30px; display: flex; gap: 10px; align-items: center; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.3s;">Home</a>
                <span style="color: rgba(255,255,255,0.4);">/</span>
                <span style="color: #679A50;">Get Involved</span>
            </div>

            <!-- Page Title -->
            <h1 style="font-size: 4rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; color: #fff; margin-bottom: 20px; line-height: 1.1;">GET INVOLVED</h1>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.8); line-height: 1.8; max-width: 600px;">Join us in empowering youth and transforming communities. Whether through volunteering, partnerships, or donations, your contribution makes a difference.</p>
        </div>
    </div>
</section>

<!-- Get Involved Content -->
<section class="get-involved-section section-padding" style="background: #fff;">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title" style="text-align: left; margin-bottom: 60px;">
            <h2 style="font-size: 3.5rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; color: #000; margin-bottom: 20px;">MAKE AN IMPACT</h2>
            <p style="font-size: 1.1rem; color: #666; max-width: 700px; line-height: 1.8; margin: 0;">Choose how you'd like to contribute to our mission of empowering youth through skills development.</p>
        </div>

        <!-- Tabbed Interface -->
        <div class="involved-tabs-wrapper">
            <!-- Tab Buttons -->
            <div class="involved-tabs" style="display: flex; gap: 20px; margin-bottom: 50px; border-bottom: 2px solid #e0e0e0; flex-wrap: wrap;">
                <button class="tab-btn active" data-tab="volunteer" style="background: transparent; border: none; padding: 20px 30px; font-size: 1.1rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #000; cursor: pointer; position: relative; transition: all 0.3s;">
                    Volunteer
                </button>
                <button class="tab-btn" data-tab="partner" style="background: transparent; border: none; padding: 20px 30px; font-size: 1.1rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #666; cursor: pointer; position: relative; transition: all 0.3s;">
                    Partner
                </button>
                <button class="tab-btn" data-tab="donate" style="background: transparent; border: none; padding: 20px 30px; font-size: 1.1rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #666; cursor: pointer; position: relative; transition: all 0.3s;">
                    Donate
                </button>
            </div>

            <!-- Tab Content -->
            <div class="tab-content-wrapper">
                <!-- Volunteer Tab -->
                <div class="tab-content active" id="volunteer-tab" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
                    <div>
                        <h3 style="font-size: 1.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #000; margin-bottom: 20px;">VOLUNTEER WITH US</h3>
                        <p style="font-size: 1rem; color: #666; line-height: 1.8; margin-bottom: 40px;">Share your skills, time, and passion to help empower youth in our community. Whether you can commit a few hours a week or join us for special events, your contribution matters.</p>

                        <!-- Contact Form 7 Shortcode -->
                        <div class="form-wrapper" style="background: transparent; padding: 0; border: none;">
                            <?php echo do_shortcode('[contact-form-7 id="3c12f42" title="Volunteer Form"]'); ?>
                        </div>
                    </div>

                    <!-- Image Side -->
                    <div style="position: relative; height: 600px; overflow: hidden; border: 1px solid #1a1a1a;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20250925-WA0022-min.jpg" alt="Volunteer" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 30px; color: white;">
                            <h4 style="color: #679A50; font-size: 1.2rem; font-weight: 700; text-transform: uppercase; margin-bottom: 10px;">Join Our Team</h4>
                            <p style="color: rgba(255,255,255,0.9); margin: 0;">Make a difference in young people's lives through volunteering.</p>
                        </div>
                    </div>
                </div>

                <!-- Partner Tab -->
                <div class="tab-content" id="partner-tab" style="display: none; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
                    <div>
                        <h3 style="font-size: 1.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #000; margin-bottom: 20px;">PARTNER WITH US</h3>
                        <p style="font-size: 1rem; color: #666; line-height: 1.8; margin-bottom: 40px;">Join forces with Greenpasture Foundation to create lasting impact. We're looking for corporate partners, educational institutions, and organizations that share our vision.</p>

                        <!-- Contact Form 7 Shortcode -->
                        <div class="form-wrapper" style="background: transparent; padding: 0; border: none;">
                            <?php echo do_shortcode('[contact-form-7 id="75dae5f" title="Partner Form"]'); ?>
                        </div>
                    </div>

                    <!-- Image Side -->
                    <div style="position: relative; height: 600px; overflow: hidden; border: 1px solid #1a1a1a;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20251006-WA0014-min.jpg" alt="Partner" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 30px; color: white;">
                            <h4 style="color: #679A50; font-size: 1.2rem; font-weight: 700; text-transform: uppercase; margin-bottom: 10px;">Strategic Partnerships</h4>
                            <p style="color: rgba(255,255,255,0.9); margin: 0;">Collaborate with us to create sustainable community impact.</p>
                        </div>
                    </div>
                </div>

                <!-- Donate Tab -->
                <div class="tab-content" id="donate-tab" style="display: none; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
                    <div>
                        <h3 style="font-size: 1.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #000; margin-bottom: 20px;">SUPPORT OUR MISSION</h3>
                        <p style="font-size: 1rem; color: #666; line-height: 1.8; margin-bottom: 40px;">Your financial support helps us provide quality training programs, resources, and opportunities to youth in need. Every contribution makes a difference.</p>

                        <!-- Contact Form 7 Shortcode -->
                        <div class="form-wrapper" style="background: transparent; padding: 0; border: none;">
                            <?php echo do_shortcode('[contact-form-7 id="bf39450" title="Donation Form"]'); ?>
                        </div>
                    </div>

                    <!-- Image Side -->
                    <div style="position: relative; height: 600px; overflow: hidden; border: 1px solid #1a1a1a;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20251117-WA0049-min.jpg" alt="Donate" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 30px; color: white;">
                            <h4 style="color: #679A50; font-size: 1.2rem; font-weight: 700; text-transform: uppercase; margin-bottom: 10px;">Invest In Future</h4>
                            <p style="color: rgba(255,255,255,0.9); margin: 0;">Your donation empowers youth with skills for success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Section -->
<section class="impact-section section-padding" style="background: #000;">
    <div class="container">
        <div class="section-title" style="text-align: left; margin-bottom: 60px;">
            <h2 style="font-size: 3.5rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; color: #fff; margin-bottom: 20px;">WHY GET INVOLVED?</h2>
            <p style="font-size: 1.1rem; color: rgba(255,255,255,0.7); max-width: 700px; line-height: 1.8; margin: 0;">Your involvement directly impacts the lives of young people in our community.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div style="background: transparent; padding: 40px; border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s;" onmouseover="this.style.borderColor='#679A50'; this.style.background='rgba(103,154,80,0.05)';" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.background='transparent';">
                <h3 style="color: #679A50; margin-bottom: 20px; font-size: 1.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">EMPOWER YOUTH</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.8; margin: 0;">Help young people gain valuable skills and confidence for their future careers.</p>
            </div>
            <div style="background: transparent; padding: 40px; border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s;" onmouseover="this.style.borderColor='#679A50'; this.style.background='rgba(103,154,80,0.05)';" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.background='transparent';">
                <h3 style="color: #679A50; margin-bottom: 20px; font-size: 1.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">TRANSFORM COMMUNITIES</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.8; margin: 0;">Be part of creating positive change in Gauteng communities through education.</p>
            </div>
            <div style="background: transparent; padding: 40px; border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s;" onmouseover="this.style.borderColor='#679A50'; this.style.background='rgba(103,154,80,0.05)';" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.background='transparent';">
                <h3 style="color: #679A50; margin-bottom: 20px; font-size: 1.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">CREATE OPPORTUNITIES</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.8; margin: 0;">Open doors to employment and entrepreneurship for aspiring professionals.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
