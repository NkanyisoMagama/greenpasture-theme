<?php
/**
 * Single Post Template
 *
 * @package Greenpasture_Foundation
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<!-- Breadcrumb Section with Background Image -->
<section class="page-breadcrumb" style="position: relative; min-height: 50vh; display: flex; align-items: center; overflow: hidden; background: #000;">
    <!-- Background Image with Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', array('style' => 'width: 100%; height: 100%; object-fit: cover; opacity: 0.3;')); ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20250925-WA0029-min.jpg" alt="<?php the_title(); ?>" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.3;">
        <?php endif; ?>
    </div>

    <!-- Content -->
    <div class="container" style="position: relative; z-index: 2;">
        <div style="max-width: 900px;">
            <!-- Breadcrumb Navigation -->
            <div class="breadcrumb-nav" style="margin-bottom: 30px; display: flex; gap: 10px; align-items: center; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.3s;">Home</a>
                <span style="color: rgba(255,255,255,0.4);">/</span>
                <a href="<?php echo esc_url(home_url('/news')); ?>" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.3s;">News</a>
                <span style="color: rgba(255,255,255,0.4);">/</span>
                <span style="color: #679A50;">Article</span>
            </div>

            <!-- Post Title -->
            <h1 style="font-size: 3.5rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; color: #fff; margin-bottom: 20px; line-height: 1.1;"><?php the_title(); ?></h1>

            <!-- Post Meta -->
            <div style="display: flex; gap: 30px; align-items: center; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; color: rgba(255,255,255,0.6);">
                <span><?php echo get_the_date('F j, Y'); ?></span>
                <span>By <?php the_author(); ?></span>
                <?php if (has_category()) : ?>
                    <span><?php the_category(', '); ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Post Content Section -->
<section class="post-content-section section-padding" style="background: #fff;">
    <div class="container" style="max-width: 900px;">
        <!-- Featured Image (if different from breadcrumb) -->
        <?php if (has_post_thumbnail()) : ?>
            <div style="margin-bottom: 60px; border: 1px solid #1a1a1a; overflow: hidden;">
                <?php the_post_thumbnail('full', array('style' => 'width: 100%; height: auto; display: block;')); ?>
            </div>
        <?php endif; ?>

        <!-- Post Content -->
        <div class="post-content" style="font-size: 1.1rem; line-height: 1.9; color: #333;">
            <?php the_content(); ?>
        </div>

        <!-- Post Tags -->
        <?php if (has_tag()) : ?>
            <div style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #e0e0e0;">
                <div style="display: flex; gap: 10px; flex-wrap: wrap; align-items: center;">
                    <span style="font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Tags:</span>
                    <?php
                    $tags = get_the_tags();
                    if ($tags) {
                        foreach ($tags as $tag) {
                            echo '<a href="' . get_tag_link($tag->term_id) . '" style="display: inline-block; padding: 8px 20px; background: transparent; border: 1px solid #1a1a1a; color: #000; text-decoration: none; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; transition: all 0.3s;" onmouseover="this.style.background=\'#000\'; this.style.color=\'#fff\';" onmouseout="this.style.background=\'transparent\'; this.style.color=\'#000\';">' . $tag->name . '</a>';
                        }
                    }
                    ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- Post Navigation -->
        <div style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #e0e0e0;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>

                <!-- Previous Post -->
                <div>
                    <?php if ($prev_post) : ?>
                        <span style="display: block; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; color: #666; margin-bottom: 10px;">← Previous Article</span>
                        <a href="<?php echo get_permalink($prev_post); ?>" class="cta-premium cta-dark">
                            <?php echo get_the_title($prev_post); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Next Post -->
                <div style="text-align: right;">
                    <?php if ($next_post) : ?>
                        <span style="display: block; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; color: #666; margin-bottom: 10px;">Next Article →</span>
                        <a href="<?php echo get_permalink($next_post); ?>" class="cta-premium cta-dark">
                            <?php echo get_the_title($next_post); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Back to News -->
        <div style="margin-top: 60px; text-align: center;">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="cta-premium cta-dark">
                ← BACK TO ALL NEWS
            </a>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
