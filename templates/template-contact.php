<?php
/**
 * Template Name: Contact Page
 *
 * @package Greenpasture_Foundation
 */

get_header(); ?>

<!-- Breadcrumb Section with Background Image -->
<section class="page-breadcrumb" style="position: relative; min-height: 50vh; display: flex; align-items: center; overflow: hidden; background: #000;">
    <!-- Background Image with Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20251006-WA0014-min.jpg" alt="Contact Greenpasture Foundation - Youth Skills Development Programs in Gauteng South Africa" loading="eager" width="1920" height="600" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.3;">
    </div>

    <!-- Content -->
    <div class="container" style="position: relative; z-index: 2;">
        <div style="max-width: 800px;">
            <!-- Breadcrumb Navigation -->
            <div class="breadcrumb-nav" style="margin-bottom: 30px; display: flex; gap: 10px; align-items: center; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.3s;">Home</a>
                <span style="color: rgba(255,255,255,0.4);">/</span>
                <span style="color: #679A50;">Contact</span>
            </div>

            <!-- Page Title -->
            <h1 style="font-size: 4rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; color: #fff; margin-bottom: 20px; line-height: 1.1;">GET IN TOUCH</h1>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.8); line-height: 1.8; max-width: 600px;">Contact us to learn more about our programs or get involved.</p>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="contact-section section-padding" style="background: #fff;">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title" style="text-align: left; margin-bottom: 60px;">
            <h2 style="font-size: 3.5rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; color: #000; margin-bottom: 20px;">LET'S CONNECT</h2>
            <p style="font-size: 1.1rem; color: #666; max-width: 700px; line-height: 1.8; margin: 0;">We're here to answer your questions and help you get started on your skills development journey.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 60px;">

            <!-- Contact Information -->
            <div class="contact-info-section">
                <h3 style="margin-bottom: 40px; color: #000; font-size: 1.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">CONTACT INFORMATION</h3>

                <div class="contact-info-item" style="margin-bottom: 30px; padding: 30px; background: transparent; border: 1px solid #1a1a1a; transition: all 0.3s;">
                    <h4 style="color: #679A50; margin-bottom: 15px; display: flex; align-items: center; gap: 12px; font-size: 1.1rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <svg width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                        Address
                    </h4>
                    <p style="color: #666; line-height: 1.8; margin: 0; font-size: 1rem;">
                        2240 Harry Gwala Rd<br>
                        Chief Albert Luthuli<br>
                        Cloverdene, Benoni 1501<br>
                        Gauteng, South Africa
                    </p>
                </div>

                <div class="contact-info-item" style="margin-bottom: 30px; padding: 30px; background: transparent; border: 1px solid #1a1a1a; transition: all 0.3s;">
                    <h4 style="color: #679A50; margin-bottom: 15px; display: flex; align-items: center; gap: 12px; font-size: 1.1rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <svg width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
                        </svg>
                        Phone
                    </h4>
                    <p style="color: #666; margin: 0; font-size: 1rem;"><a href="tel:0693695698" style="color: #679A50; text-decoration: none; transition: color 0.3s;">069-369-5698</a></p>
                </div>

                <div class="contact-info-item" style="margin-bottom: 30px; padding: 30px; background: transparent; border: 1px solid #1a1a1a; transition: all 0.3s;">
                    <h4 style="color: #679A50; margin-bottom: 15px; display: flex; align-items: center; gap: 12px; font-size: 1.1rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <svg width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                        WhatsApp
                    </h4>
                    <p style="color: #666; margin: 0; font-size: 1rem;"><a href="https://wa.me/27693695698" target="_blank" rel="noopener" style="color: #679A50; text-decoration: none; transition: color 0.3s;">069-369-5698</a></p>
                </div>

                <div class="contact-info-item" style="margin-bottom: 30px; padding: 30px; background: transparent; border: 1px solid #1a1a1a; transition: all 0.3s;">
                    <h4 style="color: #679A50; margin-bottom: 15px; display: flex; align-items: center; gap: 12px; font-size: 1.1rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <svg width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>
                        Email
                    </h4>
                    <p style="color: #666; margin: 0; font-size: 1rem; word-break: break-word;"><a href="mailto:info@greenpasturefoundation.org.za" style="color: #679A50; text-decoration: none; transition: color 0.3s;">info@greenpasturefoundation.org.za</a></p>
                </div>

                <div class="contact-info-item" style="padding: 30px; background: transparent; border: 1px solid #1a1a1a; transition: all 0.3s;">
                    <h4 style="color: #679A50; margin-bottom: 15px; display: flex; align-items: center; gap: 12px; font-size: 1.1rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        <svg width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                        </svg>
                        Office Hours
                    </h4>
                    <p style="color: #666; line-height: 1.8; margin: 0; font-size: 1rem;">
                        Monday - Thursday: 8:30 AM - 5:00 PM<br>
                        Friday: 8:30 AM - 4:30 PM<br>
                        <em style="color: #999; font-size: 0.9rem;">We don't work on weekends & holidays</em>
                    </p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-section">
                <h3 style="margin-bottom: 40px; color: #000; font-size: 1.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">SEND US A MESSAGE</h3>

                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="contact-form">
                    <input type="hidden" name="action" value="contact_form_submit">

                    <div class="form-group" style="margin-bottom: 25px;">
                        <label for="name" style="display: block; margin-bottom: 10px; color: #000; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Your Name *</label>
                        <input type="text" id="name" name="name" required style="width: 100%; padding: 15px; border: 2px solid #1a1a1a; background: #fff; font-size: 16px; transition: all 0.3s;">
                    </div>

                    <div class="form-group" style="margin-bottom: 25px;">
                        <label for="email" style="display: block; margin-bottom: 10px; color: #000; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Your Email *</label>
                        <input type="email" id="email" name="email" required style="width: 100%; padding: 15px; border: 2px solid #1a1a1a; background: #fff; font-size: 16px; transition: all 0.3s;">
                    </div>

                    <div class="form-group" style="margin-bottom: 25px;">
                        <label for="phone" style="display: block; margin-bottom: 10px; color: #000; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Phone Number</label>
                        <input type="tel" id="phone" name="phone" style="width: 100%; padding: 15px; border: 2px solid #1a1a1a; background: #fff; font-size: 16px; transition: all 0.3s;">
                    </div>

                    <div class="form-group" style="margin-bottom: 25px;">
                        <label for="subject" style="display: block; margin-bottom: 10px; color: #000; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Subject *</label>
                        <input type="text" id="subject" name="subject" required style="width: 100%; padding: 15px; border: 2px solid #1a1a1a; background: #fff; font-size: 16px; transition: all 0.3s;">
                    </div>

                    <div class="form-group" style="margin-bottom: 30px;">
                        <label for="message" style="display: block; margin-bottom: 10px; color: #000; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Message *</label>
                        <textarea id="message" name="message" rows="6" required style="width: 100%; padding: 15px; border: 2px solid #1a1a1a; background: #fff; font-size: 16px; transition: all 0.3s; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="cta-premium cta-dark" style="display: inline-block; width: 100%; padding: 18px 0; background: #000; color: #fff; border: 2px solid #000; font-size: 1rem; text-transform: uppercase; letter-spacing: 2px; font-weight: 700; cursor: pointer; transition: all 0.3s; text-align: center;">
                        SEND MESSAGE
                    </button>
                </form>

                <div class="form-note" style="margin-top: 30px; padding: 25px; background: #f5f5f5; border: 1px solid #e0e0e0;">
                    <p style="margin: 0; color: #666; font-size: 0.95rem; line-height: 1.6;">We typically respond within 24-48 hours during business days.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
