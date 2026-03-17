<?php
/**
 * Template Name: Gallery Page
 *
 * @package Greenpasture_Foundation
 */

get_header(); ?>

<!-- Breadcrumb Section with Background Image -->
<section class="page-breadcrumb" style="position: relative; min-height: 50vh; display: flex; align-items: center; overflow: hidden; background: #000;">
    <!-- Background Image with Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20251117-WA0049-min.jpg" alt="Greenpasture Foundation Gallery - Skills Development Programs and Student Success Stories" loading="eager" width="1920" height="600" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.3;">
    </div>

    <!-- Content -->
    <div class="container" style="position: relative; z-index: 2;">
        <div style="max-width: 800px;">
            <!-- Breadcrumb Navigation -->
            <div class="breadcrumb-nav" style="margin-bottom: 30px; display: flex; gap: 10px; align-items: center; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.3s;">Home</a>
                <span style="color: rgba(255,255,255,0.4);">/</span>
                <span style="color: #679A50;">Gallery</span>
            </div>

            <!-- Page Title -->
            <h1 style="font-size: 4rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; color: #fff; margin-bottom: 20px; line-height: 1.1;">OUR GALLERY</h1>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.8); line-height: 1.8; max-width: 600px;">Explore photos from our programs, training sessions, and student achievements across all our initiatives.</p>
        </div>
    </div>
</section>

<!-- Gallery Content -->
<section class="gallery-section section-padding" style="background: #fff;">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title" style="text-align: left; margin-bottom: 60px;">
            <h2 style="font-size: 3.5rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; color: #000; margin-bottom: 20px;">BROWSE OUR WORK</h2>
            <p style="font-size: 1.1rem; color: #666; max-width: 700px; line-height: 1.8; margin: 0;">Filter by program category to explore specific areas of our impact across computing, security, catering, and training initiatives.</p>
        </div>

        <!-- Gallery Filters -->
        <div class="gallery-filters" style="margin-bottom: 60px;">
            <button class="filter-btn active" data-filter="all" aria-label="Show all gallery images" style="background: #000; color: white; border: none; padding: 15px 35px; margin-right: 15px; margin-bottom: 15px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; transition: all 0.3s; font-weight: 600;">All</button>
            <button class="filter-btn" data-filter="graduation" aria-label="Show graduation photos" style="background: transparent; color: #000; border: 2px solid #000; padding: 15px 35px; margin-right: 15px; margin-bottom: 15px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; transition: all 0.3s; font-weight: 600;">Graduation</button>
            <button class="filter-btn" data-filter="computing" aria-label="Show computing program photos" style="background: transparent; color: #000; border: 2px solid #000; padding: 15px 35px; margin-right: 15px; margin-bottom: 15px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; transition: all 0.3s; font-weight: 600;">Computing</button>
            <button class="filter-btn" data-filter="security" aria-label="Show security training photos" style="background: transparent; color: #000; border: 2px solid #000; padding: 15px 35px; margin-right: 15px; margin-bottom: 15px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; transition: all 0.3s; font-weight: 600;">Security</button>
            <button class="filter-btn" data-filter="catering" aria-label="Show catering program photos" style="background: transparent; color: #000; border: 2px solid #000; padding: 15px 35px; margin-right: 15px; margin-bottom: 15px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; transition: all 0.3s; font-weight: 600;">Catering</button>
            <button class="filter-btn" data-filter="training" aria-label="Show work readiness training photos" style="background: transparent; color: #000; border: 2px solid #000; padding: 15px 35px; margin-right: 15px; margin-bottom: 15px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; transition: all 0.3s; font-weight: 600;">Training</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
            <?php
            // Get graduation images
            $graduation_path = get_template_directory() . '/assets/images/graduation_images/';
            $graduation_url = get_template_directory_uri() . '/assets/images/graduation_images/';

            $graduation_files = array();
            if (is_dir($graduation_path)) {
                $files = scandir($graduation_path);
                foreach ($files as $file) {
                    if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                        $graduation_files[] = $file;
                    }
                }
            }

            // Get gallery images from theme folder
            $gallery_path = get_template_directory() . '/assets/images/gallery/';
            $gallery_url = get_template_directory_uri() . '/assets/images/gallery/';

            $image_files = array();
            if (is_dir($gallery_path)) {
                $files = scandir($gallery_path);
                foreach ($files as $file) {
                    if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                        $image_files[] = $file;
                    }
                }
            }

            // Categorize images based on filename patterns
            function get_image_category($filename) {
                if (stripos($filename, 'WA0044') !== false || stripos($filename, 'WA0051') !== false ||
                    stripos($filename, 'WA0052') !== false || stripos($filename, 'WA0062') !== false) {
                    return 'computing';
                } elseif (stripos($filename, '.png') !== false) {
                    return 'security';
                } elseif (stripos($filename, 'WA0001') !== false || stripos($filename, 'WA0003') !== false) {
                    return 'catering';
                } else {
                    return 'training';
                }
            }

            // Display graduation images first
            if (!empty($graduation_files)) :
                foreach ($graduation_files as $image) :
                    $image_url = $graduation_url . $image;
                    ?>
                    <div class="gallery-item" data-category="graduation" style="position: relative; overflow: hidden; cursor: pointer; aspect-ratio: 4/3; border: 1px solid #1a1a1a;">
                        <img src="<?php echo esc_url($image_url); ?>" alt="Greenpasture Foundation Graduation Ceremony - <?php echo basename($image, '.jpg'); ?>" loading="lazy" width="400" height="300" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.85); opacity: 0; transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 20px;">
                            <span style="color: #679A50; font-size: 3rem; font-weight: 300; margin-bottom: 10px;">+</span>
                            <span style="color: #fff; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Graduation</span>
                        </div>
                    </div>
                <?php endforeach;
            endif;

            // Display other gallery images
            if (!empty($image_files)) :
                foreach ($image_files as $image) :
                    $category = get_image_category($image);
                    $image_url = $gallery_url . $image;
                    ?>
                    <div class="gallery-item" data-category="<?php echo $category; ?>" style="position: relative; overflow: hidden; cursor: pointer; aspect-ratio: 4/3; border: 1px solid #1a1a1a;">
                        <img src="<?php echo esc_url($image_url); ?>" alt="Greenpasture Foundation <?php echo ucfirst($category); ?> Training Program - Youth Skills Development" loading="lazy" width="400" height="300" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.85); opacity: 0; transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 20px;">
                            <span style="color: #679A50; font-size: 3rem; font-weight: 300; margin-bottom: 10px;">+</span>
                            <span style="color: #fff; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;"><?php echo ucfirst($category); ?></span>
                        </div>
                    </div>
                <?php endforeach;
            endif;

            if (empty($graduation_files) && empty($image_files)) : ?>
                <!-- Placeholder content when no images -->
                <div class="gallery-placeholder" style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; background: #f5f5f5; border-radius: 10px;">
                    <h3 style="margin-bottom: 15px;">Gallery Coming Soon</h3>
                    <p style="color: #555;">We're building our photo gallery. Check back soon to see photos from our programs and events.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<!-- Program Highlights Section -->
<section class="program-highlights-section section-padding" style="background: #000;">
    <div class="container">
        <div class="section-title" style="text-align: left; margin-bottom: 60px;">
            <h2 style="font-size: 3.5rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; color: #fff; margin-bottom: 20px;">PROGRAM HIGHLIGHTS</h2>
            <p style="font-size: 1.1rem; color: rgba(255,255,255,0.7); max-width: 700px; line-height: 1.8; margin: 0;">Witness the transformation and success of our students across multiple skill development programs.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div style="background: transparent; padding: 40px; border: 1px solid rgba(255,255,255,0.1); position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);" onmouseover="this.style.borderColor='#679A50'; this.style.background='rgba(103,154,80,0.05)';" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.background='transparent';">
                <h3 style="color: #679A50; margin-bottom: 20px; font-size: 1.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">End User Computing</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.8; margin: 0;">Students learning essential digital skills for modern workplaces</p>
            </div>
            <div style="background: transparent; padding: 40px; border: 1px solid rgba(255,255,255,0.1); position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);" onmouseover="this.style.borderColor='#679A50'; this.style.background='rgba(103,154,80,0.05)';" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.background='transparent';">
                <h3 style="color: #679A50; margin-bottom: 20px; font-size: 1.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Security Training</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.8; margin: 0;">Professional training preparing youth for security careers</p>
            </div>
            <div style="background: transparent; padding: 40px; border: 1px solid rgba(255,255,255,0.1); position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);" onmouseover="this.style.borderColor='#679A50'; this.style.background='rgba(103,154,80,0.05)';" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.background='transparent';">
                <h3 style="color: #679A50; margin-bottom: 20px; font-size: 1.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Catering Programs</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.8; margin: 0;">Hands-on culinary training and food preparation skills</p>
            </div>
            <div style="background: transparent; padding: 40px; border: 1px solid rgba(255,255,255,0.1); position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);" onmouseover="this.style.borderColor='#679A50'; this.style.background='rgba(103,154,80,0.05)';" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.background='transparent';">
                <h3 style="color: #679A50; margin-bottom: 20px; font-size: 1.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Work Readiness</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.8; margin: 0;">Building confidence and professional skills for career success</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
