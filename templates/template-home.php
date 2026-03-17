<?php
/**
 * Template Name: Home Page
 *
 * @package Greenpasture_Foundation
 */

get_header(); ?>

<!-- Hero Slider Section - Premium Design -->
<section class="hero-section">
    <!-- Slide Counter - Top Right -->
    <div class="slide-counter">
        <span class="current-slide">01</span>
        <span class="slide-separator">/</span>
        <span class="total-slides">03</span>
    </div>

    <!-- Vertical Pagination - Right Side -->
    <div class="vertical-pagination">
        <button class="vpag-dot active" data-slide="0" aria-label="Slide 1"></button>
        <button class="vpag-dot" data-slide="1" aria-label="Slide 2"></button>
        <button class="vpag-dot" data-slide="2" aria-label="Slide 3"></button>
    </div>

    <!-- Navigation Arrows -->
    <button class="hero-nav hero-prev" aria-label="Previous slide">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M15 18l-6-6 6-6"/>
        </svg>
    </button>
    <button class="hero-nav hero-next" aria-label="Next slide">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 18l6-6-6-6"/>
        </svg>
    </button>

    <div class="hero-slider">
        <!-- Slide 1 -->
        <div class="hero-slide active" data-slide-index="0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slidermain.jpg" alt="Greenpasture Foundation Graduation Ceremony - Celebrating Youth Achievement and Skills Development Success in Gauteng" loading="eager" width="1920" height="800">
            <div class="hero-overlay">
                <div class="hero-content">
                    <h1 class="hero-title">
                        <span class="title-solid">EMPOWERING YOUTH</span>
                        <span class="title-outline">SKILLS DEVELOPMENT PROGRAMS</span>
                    </h1>
                    <div class="hero-cta">
                        <a href="#programs" class="cta-premium" aria-label="Explore Programs">
                            EXPLORE PROGRAMS <span class="cta-arrow">→</span>
                        </a>
                    </div>
                    <!-- Social Links -->
                    <div class="hero-social">
                        <a href="https://www.instagram.com/greenpasturefoundation?igsh=bWdwZWw3dzBzbWhh" target="_blank" rel="noopener">Instagram</a>
                        <a href="https://www.facebook.com/share/1YE9xk3r9h/" target="_blank" rel="noopener">Facebook</a>
                        <a href="https://www.tiktok.com/@greenpasture.foun?_t=ZS-8zAWDvdqCSP&_r=1" target="_blank" rel="noopener">TikTok</a>
                        <a href="https://x.com/GreenpastureF?t=ax0O9J1psuvFYNUqNKibng&s=08" target="_blank" rel="noopener">X</a>
                        <a href="https://www.linkedin.com/in/greenpasture-foundation-b60013382?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener">LinkedIn</a>
                        <a href="https://wa.me/27693695698" target="_blank" rel="noopener">WhatsApp</a>
                    </div>
                </div>
                <!-- Bottom Location Strip -->
                <div class="hero-location-strip">
                    <span class="location-text location-light">Ben</span>
                    <span class="location-text location-outline">Gauteng South Africa</span>
                    <span class="location-text location-solid">Benoni</span>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide" data-slide-index="1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider2.jpg" alt="Catering and Hospitality Skills Training Programs at Greenpasture Foundation" loading="lazy" width="1920" height="800">
            <div class="hero-overlay">
                <div class="hero-content">
                    <h1 class="hero-title">
                        <span class="title-solid">CATERING EXCELLENCE</span>
                        <span class="title-outline">FROM KITCHEN TO CAREER</span>
                    </h1>
                    <div class="hero-cta">
                        <a href="#about" class="cta-premium" aria-label="Learn More">
                            LEARN MORE <span class="cta-arrow">→</span>
                        </a>
                    </div>
                    <div class="hero-social">
                        <a href="https://www.instagram.com/greenpasturefoundation?igsh=bWdwZWw3dzBzbWhh" target="_blank" rel="noopener">Instagram</a>
                        <a href="https://www.facebook.com/share/1YE9xk3r9h/" target="_blank" rel="noopener">Facebook</a>
                        <a href="https://www.tiktok.com/@greenpasture.foun?_t=ZS-8zAWDvdqCSP&_r=1" target="_blank" rel="noopener">TikTok</a>
                        <a href="https://x.com/GreenpastureF?t=ax0O9J1psuvFYNUqNKibng&s=08" target="_blank" rel="noopener">X</a>
                        <a href="https://www.linkedin.com/in/greenpasture-foundation-b60013382?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener">LinkedIn</a>
                        <a href="https://wa.me/27693695698" target="_blank" rel="noopener">WhatsApp</a>
                    </div>
                </div>
                <div class="hero-location-strip">
                    <span class="location-text location-light">Food</span>
                    <span class="location-text location-outline">Hospitality Training</span>
                    <span class="location-text location-solid">Excellence</span>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="hero-slide" data-slide-index="2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider3.jpg" alt="Community Impact and Youth Empowerment Through Skills Development in Benoni Gauteng" loading="lazy" width="1920" height="800">
            <div class="hero-overlay">
                <div class="hero-content">
                    <h1 class="hero-title">
                        <span class="title-solid">CREATING PATHWAYS</span>
                        <span class="title-outline">TO SUCCESS AND GROWTH</span>
                    </h1>
                    <div class="hero-cta">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-premium" aria-label="Get Involved">
                            GET INVOLVED <span class="cta-arrow">→</span>
                        </a>
                    </div>
                    <div class="hero-social">
                        <a href="https://www.instagram.com/greenpasturefoundation?igsh=bWdwZWw3dzBzbWhh" target="_blank" rel="noopener">Instagram</a>
                        <a href="https://www.facebook.com/share/1YE9xk3r9h/" target="_blank" rel="noopener">Facebook</a>
                        <a href="https://www.tiktok.com/@greenpasture.foun?_t=ZS-8zAWDvdqCSP&_r=1" target="_blank" rel="noopener">TikTok</a>
                        <a href="https://x.com/GreenpastureF?t=ax0O9J1psuvFYNUqNKibng&s=08" target="_blank" rel="noopener">X</a>
                        <a href="https://www.linkedin.com/in/greenpasture-foundation-b60013382?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener">LinkedIn</a>
                        <a href="https://wa.me/27693695698" target="_blank" rel="noopener">WhatsApp</a>
                    </div>
                </div>
                <div class="hero-location-strip">
                    <span class="location-text location-light">Clo</span>
                    <span class="location-text location-outline">verdene Community</span>
                    <span class="location-text location-solid">Impact</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section - Premium Image-Based Design -->
<section id="about" class="about-section section-padding" style="background-color: #000;">
    <div class="container">
        <div class="section-title" style="text-align: left; margin-bottom: 30px;">
            <h2 style="color: #fff; font-size: 3.5rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px;">ABOUT GREENPASTURE FOUNDATION</h2>
            <p style="color: rgba(255,255,255,0.7); max-width: 800px; font-size: 1.1rem; line-height: 1.8;">Greenpasture Foundation is a non-profit organization dedicated to empowering the youth of Gauteng through comprehensive skills development programs. We believe in creating pathways to success by providing practical, industry-relevant training that opens doors to employment and entrepreneurship opportunities.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; margin-top: 60px;">
            <!-- Mission Card with Image -->
            <div class="about-card" style="position: relative; height: 450px; border-radius: 0; overflow: hidden; cursor: pointer;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20251117-WA0044-min.jpg" alt="Greenpasture Foundation Mission - Empowering Youth Through Skills Development and Arts Culture Programs" loading="lazy" width="600" height="450" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.85) 100%); padding: 40px; display: flex; flex-direction: column; justify-content: flex-end;">
                    <div style="width: 60px; height: 3px; background: #679A50; margin-bottom: 25px;"></div>
                    <h3 style="color: #fff; margin-bottom: 20px; font-size: 2rem; font-weight: 700;">Our Mission</h3>
                    <p style="line-height: 1.7; color: rgba(255,255,255,0.85); font-size: 0.95rem;">To empower individuals through skills development and foster creativity, and appreciation for arts and culture. We aim to provide accessible and inclusive programs that enhances personal growth, promote cultural understanding and contribute to the enrichment of our communities.</p>
                </div>
            </div>

            <!-- Vision Card with Image -->
            <div class="about-card" style="position: relative; height: 450px; border-radius: 0; overflow: hidden; cursor: pointer;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20251117-WA0045-min.jpg" alt="Our Vision - Creating Vibrant Cultural Landscape Through Lifelong Learning and Artistic Expression" loading="lazy" width="600" height="450" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.85) 100%); padding: 40px; display: flex; flex-direction: column; justify-content: flex-end;">
                    <div style="width: 60px; height: 3px; background: #679A50; margin-bottom: 25px;"></div>
                    <h3 style="color: #fff; margin-bottom: 20px; font-size: 2rem; font-weight: 700;">Our Vision</h3>
                    <p style="line-height: 1.7; color: rgba(255,255,255,0.85); font-size: 0.95rem;">To cultivate a society where every individual can thrive through lifelong learning and artistic expression. We aspire to be a leading force in creating a vibrant and diverse cultural landscape, where creativity flourishes, skills are honed, and communities are united through the power of arts and culture.</p>
                </div>
            </div>

            <!-- Approach Card with Image -->
            <div class="about-card" style="position: relative; height: 450px; border-radius: 0; overflow: hidden; cursor: pointer;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider1.jpg" alt="Our Approach - Practical Industry-Relevant Training for Employment and Entrepreneurship" loading="lazy" width="600" height="450" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.85) 100%); padding: 40px; display: flex; flex-direction: column; justify-content: flex-end;">
                    <div style="width: 60px; height: 3px; background: #679A50; margin-bottom: 25px;"></div>
                    <h3 style="color: #fff; margin-bottom: 20px; font-size: 2rem; font-weight: 700;">Our Approach</h3>
                    <p style="line-height: 1.7; color: rgba(255,255,255,0.85); font-size: 0.95rem;">We believe in creating pathways to success by providing practical, industry-relevant training that opens doors to employment and entrepreneurship opportunities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section - Premium Image Grid -->
<section id="programs" class="programs-section section-padding" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="section-title" style="text-align: left; margin-bottom: 30px;">
            <h2 style="color: #000; font-size: 3.5rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px;">OUR PROGRAMS</h2>
            <p style="color: #555; max-width: 800px; font-size: 1.1rem; line-height: 1.8;">Comprehensive skills development programs designed to empower and transform lives</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 0; margin-top: 60px;">
            <!-- End User Computing -->
            <div class="program-card-premium" style="position: relative; height: 400px; overflow: hidden; border: 1px solid #1a1a1a;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20251117-WA0044-min.jpg" alt="End User Computing Training - Microsoft Office and Digital Skills Development Program" loading="lazy" width="600" height="400" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                <div class="program-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.9) 100%); padding: 30px; display: flex; flex-direction: column; justify-content: flex-end; transition: background 0.4s;">
                    <div style="width: 40px; height: 2px; background: #679A50; margin-bottom: 15px;"></div>
                    <h3 style="color: #fff; margin-bottom: 15px; font-size: 1.5rem; font-weight: 700;">End User Computing</h3>
                    <p style="line-height: 1.6; color: rgba(255,255,255,0.8); font-size: 0.9rem;">Computer literacy training covering Microsoft Office Suite, internet skills, and digital communication tools.</p>
                </div>
            </div>

            <!-- Security Training -->
            <div class="program-card-premium" style="position: relative; height: 400px; overflow: hidden; border: 1px solid #1a1a1a;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/10c5d9c5b6f5df4dd0e38ac93ffa39e0-min.png" alt="Professional Security Guard Training and Certification Program in Gauteng" loading="lazy" width="600" height="400" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                <div class="program-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.9) 100%); padding: 30px; display: flex; flex-direction: column; justify-content: flex-end; transition: background 0.4s;">
                    <div style="width: 40px; height: 2px; background: #679A50; margin-bottom: 15px;"></div>
                    <h3 style="color: #fff; margin-bottom: 15px; font-size: 1.5rem; font-weight: 700;">Security Training</h3>
                    <p style="line-height: 1.6; color: rgba(255,255,255,0.8); font-size: 0.9rem;">Professional security training preparing participants for careers in private security and facility protection.</p>
                </div>
            </div>

            <!-- Cashier Training -->
            <div class="program-card-premium" style="position: relative; height: 400px; overflow: hidden; border: 1px solid #1a1a1a;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20250925-WA0110-min.jpg" alt="Cashier and Retail Customer Service Training Program" loading="lazy" width="600" height="400" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                <div class="program-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.9) 100%); padding: 30px; display: flex; flex-direction: column; justify-content: flex-end; transition: background 0.4s;">
                    <div style="width: 40px; height: 2px; background: #679A50; margin-bottom: 15px;"></div>
                    <h3 style="color: #fff; margin-bottom: 15px; font-size: 1.5rem; font-weight: 700;">Cashier Training</h3>
                    <p style="line-height: 1.6; color: rgba(255,255,255,0.8); font-size: 0.9rem;">Retail and customer service training focusing on point-of-sale systems and cash handling.</p>
                </div>
            </div>

            <!-- Business & Entrepreneurship -->
            <div class="program-card-premium" style="position: relative; height: 400px; overflow: hidden; border: 1px solid #1a1a1a;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20251117-WA0063-min.jpg" alt="Business Development and Entrepreneurship Skills Training for Youth" loading="lazy" width="600" height="400" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                <div class="program-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.9) 100%); padding: 30px; display: flex; flex-direction: column; justify-content: flex-end; transition: background 0.4s;">
                    <div style="width: 40px; height: 2px; background: #679A50; margin-bottom: 15px;"></div>
                    <h3 style="color: #fff; margin-bottom: 15px; font-size: 1.5rem; font-weight: 700;">Business & Entrepreneurship</h3>
                    <p style="line-height: 1.6; color: rgba(255,255,255,0.8); font-size: 0.9rem;">Essential skills to start and grow businesses through practical training in business planning and marketing.</p>
                </div>
            </div>

            <!-- Catering -->
            <div class="program-card-premium" style="position: relative; height: 400px; overflow: hidden; border: 1px solid #1a1a1a;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider2.jpg" alt="Catering and Culinary Arts Training - Food Preparation and Event Catering Skills" loading="lazy" width="600" height="400" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                <div class="program-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.9) 100%); padding: 30px; display: flex; flex-direction: column; justify-content: flex-end; transition: background 0.4s;">
                    <div style="width: 40px; height: 2px; background: #679A50; margin-bottom: 15px;"></div>
                    <h3 style="color: #fff; margin-bottom: 15px; font-size: 1.5rem; font-weight: 700;">Catering</h3>
                    <p style="line-height: 1.6; color: rgba(255,255,255,0.8); font-size: 0.9rem;">Hands-on training in food preparation, menu planning, and event catering with essential cooking techniques.</p>
                </div>
            </div>

            <!-- Work Readiness Training -->
            <div class="program-card-premium" style="position: relative; height: 400px; overflow: hidden; border: 1px solid #1a1a1a;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider3.jpg" alt="Work Readiness Training - CV Writing Interview Skills and Professional Development" loading="lazy" width="600" height="400" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                <div class="program-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.9) 100%); padding: 30px; display: flex; flex-direction: column; justify-content: flex-end; transition: background 0.4s;">
                    <div style="width: 40px; height: 2px; background: #679A50; margin-bottom: 15px;"></div>
                    <h3 style="color: #fff; margin-bottom: 15px; font-size: 1.5rem; font-weight: 700;">Work Readiness Training</h3>
                    <p style="line-height: 1.6; color: rgba(255,255,255,0.8); font-size: 0.9rem;">Comprehensive career preparation including CV writing, interview skills, workplace etiquette, and professional development workshops.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Stats Section -->
<section class="impact-section section-padding" style="background: #000; color: white; position: relative; overflow: hidden;">
    <div class="container" style="position: relative; z-index: 1;">
        <div class="section-title" style="text-align: left; margin-bottom: 60px;">
            <h2 style="color: white; font-size: 3.5rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px;">OUR IMPACT</h2>
            <p style="color: rgba(255,255,255,0.7); max-width: 800px; font-size: 1.1rem; line-height: 1.8;">Making a difference in the lives of Gauteng youth</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 30px; text-align: left;">
            <div style="padding: 40px 30px; background: #0a0a0a; border-radius: 0; border: 1px solid #1a1a1a; position: relative; overflow: hidden; transition: all 0.4s ease;">
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: #679A50;"></div>
                <h3 style="font-size: 4rem; color: white; margin-bottom: 15px; font-weight: 900;">500+</h3>
                <p style="font-size: 1.1rem; color: rgba(255,255,255,0.7); font-weight: 500; text-transform: uppercase; letter-spacing: 1px;">Youth Trained</p>
            </div>
            <div style="padding: 40px 30px; background: #0a0a0a; border-radius: 0; border: 1px solid #1a1a1a; position: relative; overflow: hidden; transition: all 0.4s ease;">
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: #679A50;"></div>
                <h3 style="font-size: 4rem; color: white; margin-bottom: 15px; font-weight: 900;">47%</h3>
                <p style="font-size: 1.1rem; color: rgba(255,255,255,0.7); font-weight: 500; text-transform: uppercase; letter-spacing: 1px;">Employment Rate</p>
            </div>
            <div style="padding: 40px 30px; background: #0a0a0a; border-radius: 0; border: 1px solid #1a1a1a; position: relative; overflow: hidden; transition: all 0.4s ease;">
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: #679A50;"></div>
                <h3 style="font-size: 4rem; color: white; margin-bottom: 15px; font-weight: 900;">5</h3>
                <p style="font-size: 1.1rem; color: rgba(255,255,255,0.7); font-weight: 500; text-transform: uppercase; letter-spacing: 1px;">Skill Programs</p>
            </div>
            <div style="padding: 40px 30px; background: #0a0a0a; border-radius: 0; border: 1px solid #1a1a1a; position: relative; overflow: hidden; transition: all 0.4s ease;">
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: #679A50;"></div>
                <h3 style="font-size: 4rem; color: white; margin-bottom: 15px; font-weight: 900;">7</h3>
                <p style="font-size: 1.1rem; color: rgba(255,255,255,0.7); font-weight: 500; text-transform: uppercase; letter-spacing: 1px;">Partner Organizations</p>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories - Premium Carousel Design -->
<section class="testimonials-section section-padding" style="background: #f9f9f9; position: relative;">
    <div class="container">
        <div class="section-title" style="text-align: left; margin-bottom: 30px;">
            <h2 style="color: #000; font-size: 3.5rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px;">SUCCESS STORIES</h2>
            <p style="color: #555; max-width: 800px; font-size: 1.1rem; line-height: 1.8;">Hear from graduates who transformed their lives through our programs</p>
        </div>

        <div class="testimonials-carousel" style="position: relative; margin-top: 60px; max-width: 1000px;">
            <div class="testimonials-wrapper" style="overflow: hidden;">
                <div class="testimonials-track" style="display: flex; transition: transform 0.5s ease;">

                    <!-- Testimonial 1 - Gladjuli Mamaribe -->
                    <div class="testimonial-slide" style="min-width: 100%; padding: 0 20px;">
                        <div style="background: #fff; padding: 50px; border-radius: 0; position: relative; overflow: hidden; box-shadow: 0 2px 20px rgba(0,0,0,0.08);">
                            <div style="position: absolute; top: 0; left: 0; width: 3px; height: 100%; background: #679A50;"></div>
                            <div style="margin-bottom: 30px;">
                                <svg width="50" height="50" viewBox="0 0 40 40" fill="none" style="opacity: 0.3;">
                                    <path d="M10 20C10 14.477 14.477 10 20 10V20H10Z" fill="#679A50"/>
                                    <path d="M30 20C30 25.523 25.523 30 20 30V20H30Z" fill="#679A50"/>
                                </svg>
                            </div>
                            <p style="font-style: italic; color: #333; line-height: 1.9; margin-bottom: 40px; font-size: 1.2rem;">"The End User Computing program completely transformed my career. I went from being unemployed to working as an office administrator within three months of graduating. The skills I learned here gave me the confidence to excel in the digital workplace."</p>
                            <div style="display: flex; align-items: center; gap: 20px;">
                                <div style="width: 70px; height: 70px; background: #679A50; border-radius: 0; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.4rem;">GM</div>
                                <div>
                                    <strong style="color: #000; display: block; font-size: 1.2rem; margin-bottom: 5px;">Gladjuli Mamaribe</strong>
                                    <span style="font-size: 0.9rem; color: #679A50; text-transform: uppercase; letter-spacing: 1px;">Office Administrator</span>
                                    <span style="display: block; font-size: 0.85rem; color: #666; margin-top: 3px;">Program Graduate 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 - Lerato Masuku -->
                    <div class="testimonial-slide" style="min-width: 100%; padding: 0 20px;">
                        <div style="background: #fff; padding: 50px; border-radius: 0; position: relative; overflow: hidden; box-shadow: 0 2px 20px rgba(0,0,0,0.08);">
                            <div style="position: absolute; top: 0; left: 0; width: 3px; height: 100%; background: #679A50;"></div>
                            <div style="margin-bottom: 30px;">
                                <svg width="50" height="50" viewBox="0 0 40 40" fill="none" style="opacity: 0.3;">
                                    <path d="M10 20C10 14.477 14.477 10 20 10V20H10Z" fill="#679A50"/>
                                    <path d="M30 20C30 25.523 25.523 30 20 30V20H30Z" fill="#679A50"/>
                                </svg>
                            </div>
                            <p style="font-style: italic; color: #333; line-height: 1.9; margin-bottom: 40px; font-size: 1.2rem;">"The security training program exceeded all my expectations. The instructors were professional, the curriculum was comprehensive, and the job placement support was incredible. I'm now working for a leading security company in Johannesburg."</p>
                            <div style="display: flex; align-items: center; gap: 20px;">
                                <div style="width: 70px; height: 70px; background: #679A50; border-radius: 0; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.4rem;">LM</div>
                                <div>
                                    <strong style="color: #000; display: block; font-size: 1.2rem; margin-bottom: 5px;">Lerato Masuku</strong>
                                    <span style="font-size: 0.9rem; color: #679A50; text-transform: uppercase; letter-spacing: 1px;">Security Officer</span>
                                    <span style="display: block; font-size: 0.85rem; color: #666; margin-top: 3px;">Program Graduate 2025</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 - Millicent Mmamogobo -->
                    <div class="testimonial-slide" style="min-width: 100%; padding: 0 20px;">
                        <div style="background: #fff; padding: 50px; border-radius: 0; position: relative; overflow: hidden; box-shadow: 0 2px 20px rgba(0,0,0,0.08);">
                            <div style="position: absolute; top: 0; left: 0; width: 3px; height: 100%; background: #679A50;"></div>
                            <div style="margin-bottom: 30px;">
                                <svg width="50" height="50" viewBox="0 0 40 40" fill="none" style="opacity: 0.3;">
                                    <path d="M10 20C10 14.477 14.477 10 20 10V20H10Z" fill="#679A50"/>
                                    <path d="M30 20C30 25.523 25.523 30 20 30V20H30Z" fill="#679A50"/>
                                </svg>
                            </div>
                            <p style="font-style: italic; color: #333; line-height: 1.9; margin-bottom: 40px; font-size: 1.2rem;">"Greenpasture Foundation didn't just teach me cashier skills; they taught me customer service, professionalism, and confidence. The job readiness workshops prepared me for interviews, and I landed my first job within two weeks!"</p>
                            <div style="display: flex; align-items: center; gap: 20px;">
                                <div style="width: 70px; height: 70px; background: #679A50; border-radius: 0; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.4rem;">MM</div>
                                <div>
                                    <strong style="color: #000; display: block; font-size: 1.2rem; margin-bottom: 5px;">Millicent Mmamogobo</strong>
                                    <span style="font-size: 0.9rem; color: #679A50; text-transform: uppercase; letter-spacing: 1px;">Retail Supervisor</span>
                                    <span style="display: block; font-size: 0.85rem; color: #666; margin-top: 3px;">Program Graduate 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 4 - Vuyelwa Manitshana -->
                    <div class="testimonial-slide" style="min-width: 100%; padding: 0 20px;">
                        <div style="background: #fff; padding: 50px; border-radius: 0; position: relative; overflow: hidden; box-shadow: 0 2px 20px rgba(0,0,0,0.08);">
                            <div style="position: absolute; top: 0; left: 0; width: 3px; height: 100%; background: #679A50;"></div>
                            <div style="margin-bottom: 30px;">
                                <svg width="50" height="50" viewBox="0 0 40 40" fill="none" style="opacity: 0.3;">
                                    <path d="M10 20C10 14.477 14.477 10 20 10V20H10Z" fill="#679A50"/>
                                    <path d="M30 20C30 25.523 25.523 30 20 30V20H30Z" fill="#679A50"/>
                                </svg>
                            </div>
                            <p style="font-style: italic; color: #333; line-height: 1.9; margin-bottom: 40px; font-size: 1.2rem;">"As a volunteer mentor, I've witnessed firsthand the incredible transformation that happens here. The dedication of the staff and the determination of the students create an environment where dreams become reality."</p>
                            <div style="display: flex; align-items: center; gap: 20px;">
                                <div style="width: 70px; height: 70px; background: #679A50; border-radius: 0; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.4rem;">VM</div>
                                <div>
                                    <strong style="color: #000; display: block; font-size: 1.2rem; margin-bottom: 5px;">Vuyelwa Manitshana</strong>
                                    <span style="font-size: 0.9rem; color: #679A50; text-transform: uppercase; letter-spacing: 1px;">Volunteer Mentor</span>
                                    <span style="display: block; font-size: 0.85rem; color: #666; margin-top: 3px;">2+ Years</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 5 - Silungisiwe Dasi -->
                    <div class="testimonial-slide" style="min-width: 100%; padding: 0 20px;">
                        <div style="background: #fff; padding: 50px; border-radius: 0; position: relative; overflow: hidden; box-shadow: 0 2px 20px rgba(0,0,0,0.08);">
                            <div style="position: absolute; top: 0; left: 0; width: 3px; height: 100%; background: #679A50;"></div>
                            <div style="margin-bottom: 30px;">
                                <svg width="50" height="50" viewBox="0 0 40 40" fill="none" style="opacity: 0.3;">
                                    <path d="M10 20C10 14.477 14.477 10 20 10V20H10Z" fill="#679A50"/>
                                    <path d="M30 20C30 25.523 25.523 30 20 30V20H30Z" fill="#679A50"/>
                                </svg>
                            </div>
                            <p style="font-style: italic; color: #333; line-height: 1.9; margin-bottom: 40px; font-size: 1.2rem;">"The combination of technical skills and soft skills training made all the difference. I not only learned how to use computers effectively but also how to communicate professionally and work in a team environment."</p>
                            <div style="display: flex; align-items: center; gap: 20px;">
                                <div style="width: 70px; height: 70px; background: #679A50; border-radius: 0; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.4rem;">SD</div>
                                <div>
                                    <strong style="color: #000; display: block; font-size: 1.2rem; margin-bottom: 5px;">Silungisiwe Dasi</strong>
                                    <span style="font-size: 0.9rem; color: #679A50; text-transform: uppercase; letter-spacing: 1px;">Data Capturer</span>
                                    <span style="display: block; font-size: 0.85rem; color: #666; margin-top: 3px;">Program Graduate 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 6 - Siyaboga Mulaudzi -->
                    <div class="testimonial-slide" style="min-width: 100%; padding: 0 20px;">
                        <div style="background: #fff; padding: 50px; border-radius: 0; position: relative; overflow: hidden; box-shadow: 0 2px 20px rgba(0,0,0,0.08);">
                            <div style="position: absolute; top: 0; left: 0; width: 3px; height: 100%; background: #679A50;"></div>
                            <div style="margin-bottom: 30px;">
                                <svg width="50" height="50" viewBox="0 0 40 40" fill="none" style="opacity: 0.3;">
                                    <path d="M10 20C10 14.477 14.477 10 20 10V20H10Z" fill="#679A50"/>
                                    <path d="M30 20C30 25.523 25.523 30 20 30V20H30Z" fill="#679A50"/>
                                </svg>
                            </div>
                            <p style="font-style: italic; color: #333; line-height: 1.9; margin-bottom: 40px; font-size: 1.2rem;">"The foundation's approach to skills development is holistic. They don't just prepare you for a job; they prepare you for a career. The ongoing support even after graduation shows they truly care about long-term success."</p>
                            <div style="display: flex; align-items: center; gap: 20px;">
                                <div style="width: 70px; height: 70px; background: #679A50; border-radius: 0; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 1.4rem;">SM</div>
                                <div>
                                    <strong style="color: #000; display: block; font-size: 1.2rem; margin-bottom: 5px;">Siyaboga Mulaudzi</strong>
                                    <span style="font-size: 0.9rem; color: #679A50; text-transform: uppercase; letter-spacing: 1px;">IT Support Specialist</span>
                                    <span style="display: block; font-size: 0.85rem; color: #666; margin-top: 3px;">Program Graduate 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Navigation Arrows -->
            <button class="testimonial-prev" aria-label="Previous testimonial" style="position: absolute; left: -60px; top: 50%; transform: translateY(-50%); width: 50px; height: 50px; border-radius: 50%; background: transparent; border: 2px solid rgba(0,0,0,0.2); color: #000; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; z-index: 10;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M15 18l-6-6 6-6"/>
                </svg>
            </button>
            <button class="testimonial-next" aria-label="Next testimonial" style="position: absolute; right: -60px; top: 50%; transform: translateY(-50%); width: 50px; height: 50px; border-radius: 50%; background: transparent; border: 2px solid rgba(0,0,0,0.2); color: #000; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; z-index: 10;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M9 18l6-6-6-6"/>
                </svg>
            </button>

            <!-- Dots Indicator -->
            <div class="testimonial-dots" style="display: flex; justify-content: center; gap: 15px; margin-top: 40px;">
                <button class="testimonial-dot active" data-index="0" aria-label="Go to testimonial 1" style="width: 16px; height: 16px; padding: 8px; border-radius: 50%; background: #679A50; border: none; cursor: pointer; transition: all 0.3s ease;"></button>
                <button class="testimonial-dot" data-index="1" aria-label="Go to testimonial 2" style="width: 16px; height: 16px; padding: 8px; border-radius: 50%; background: rgba(0,0,0,0.2); border: none; cursor: pointer; transition: all 0.3s ease;"></button>
                <button class="testimonial-dot" data-index="2" aria-label="Go to testimonial 3" style="width: 16px; height: 16px; padding: 8px; border-radius: 50%; background: rgba(0,0,0,0.2); border: none; cursor: pointer; transition: all 0.3s ease;"></button>
                <button class="testimonial-dot" data-index="3" aria-label="Go to testimonial 4" style="width: 16px; height: 16px; padding: 8px; border-radius: 50%; background: rgba(0,0,0,0.2); border: none; cursor: pointer; transition: all 0.3s ease;"></button>
                <button class="testimonial-dot" data-index="4" aria-label="Go to testimonial 5" style="width: 16px; height: 16px; padding: 8px; border-radius: 50%; background: rgba(0,0,0,0.2); border: none; cursor: pointer; transition: all 0.3s ease;"></button>
                <button class="testimonial-dot" data-index="5" aria-label="Go to testimonial 6" style="width: 16px; height: 16px; padding: 8px; border-radius: 50%; background: rgba(0,0,0,0.2); border: none; cursor: pointer; transition: all 0.3s ease;"></button>
            </div>
        </div>
    </div>
</section>

<!-- Branches Section -->
<section id="branches" class="branches-section section-padding" style="background: #000; position: relative; overflow: hidden;">
    <div class="container" style="position: relative; z-index: 1;">
        <div class="section-title" style="text-align: left; margin-bottom: 60px;">
            <h2 style="color: #fff; font-size: 3.5rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px;">OUR BRANCHES</h2>
            <p style="color: rgba(255,255,255,0.7); max-width: 800px; font-size: 1.1rem; line-height: 1.8;">Visit us at our locations across South Africa</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 40px;">
            <!-- Gauteng Branch -->
            <div class="branch-card" style="background: #0a0a0a; padding: 50px 40px; border: 1px solid #1a1a1a; position: relative; overflow: hidden; transition: all 0.4s ease;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 3px; background: #679A50;"></div>
                <div style="margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: rgba(103, 154, 80, 0.1); border: 2px solid #679A50; display: flex; align-items: center; justify-content: center; border-radius: 0;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#679A50" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                </div>
                <h3 style="color: #fff; font-size: 1.8rem; font-weight: 700; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px;">GAUTENG</h3>
                <div style="width: 40px; height: 2px; background: #679A50; margin-bottom: 25px;"></div>
                <div style="color: rgba(255,255,255,0.85); line-height: 1.8; font-size: 1rem;">
                    <p style="margin-bottom: 10px; font-weight: 500; color: #679A50; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Head Office</p>
                    <p style="margin-bottom: 5px;">2240 Harry Gwala Street,</p>
                    <p style="margin-bottom: 5px;">Chief Albert Luthuli,</p>
                    <p style="margin-bottom: 5px;">Cloverdene, Benoni 1501</p>
                    <p style="color: #679A50; font-weight: 600; margin-top: 15px;">Gauteng</p>
                </div>
                <div style="margin-top: 30px; padding-top: 30px; border-top: 1px solid #1a1a1a;">
                    <a href="https://maps.google.com/?q=2240+Harry+Gwala+Street,+Cloverdene,+Benoni+1501" target="_blank" rel="noopener" style="color: #679A50; text-decoration: none; font-weight: 600; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; display: inline-flex; align-items: center; gap: 10px; transition: gap 0.3s ease;">
                        GET DIRECTIONS
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- North West Branch -->
            <div class="branch-card" style="background: #0a0a0a; padding: 50px 40px; border: 1px solid #1a1a1a; position: relative; overflow: hidden; transition: all 0.4s ease;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 3px; background: #679A50;"></div>
                <div style="margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: rgba(103, 154, 80, 0.1); border: 2px solid #679A50; display: flex; align-items: center; justify-content: center; border-radius: 0;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#679A50" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                </div>
                <h3 style="color: #fff; font-size: 1.8rem; font-weight: 700; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px;">NORTH WEST</h3>
                <div style="width: 40px; height: 2px; background: #679A50; margin-bottom: 25px;"></div>
                <div style="color: rgba(255,255,255,0.85); line-height: 1.8; font-size: 1rem;">
                    <p style="margin-bottom: 10px; font-weight: 500; color: #679A50; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Regional Office</p>
                    <p style="margin-bottom: 5px;">2827 Modimokwane Street,</p>
                    <p style="margin-bottom: 5px;">Thlabane,</p>
                    <p style="margin-bottom: 5px;">Rustenburg 0299</p>
                    <p style="color: #679A50; font-weight: 600; margin-top: 15px;">North West</p>
                </div>
                <div style="margin-top: 30px; padding-top: 30px; border-top: 1px solid #1a1a1a;">
                    <a href="https://maps.google.com/?q=2827+Modimokwane+Street,+Thlabane,+Rustenburg+0299" target="_blank" rel="noopener" style="color: #679A50; text-decoration: none; font-weight: 600; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; display: inline-flex; align-items: center; gap: 10px; transition: gap 0.3s ease;">
                        GET DIRECTIONS
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section section-padding" style="background: #fff;">
    <div class="container" style="max-width: 1200px;">
        <div style="text-align: left;">
            <h2 style="font-size: 3.5rem; margin-bottom: 25px; font-weight: 900; color: #000; text-transform: uppercase; letter-spacing: 2px;">READY TO TRANSFORM YOUR FUTURE?</h2>
            <p style="font-size: 1.1rem; margin-bottom: 50px; color: #555; line-height: 1.8; max-width: 800px;">Join our programs and take the first step towards a brighter tomorrow. We're here to support your journey to success.</p>
            <div style="display: flex; gap: 40px; flex-wrap: wrap; align-items: center;">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-premium cta-dark">
                    GET STARTED TODAY <span class="cta-arrow">→</span>
                </a>
                <a href="<?php echo esc_url(home_url('/gallery')); ?>" class="cta-premium cta-dark">
                    VIEW GALLERY <span class="cta-arrow">→</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
