<?php
/**
 * Template Name: News Page
 *
 * @package Greenpasture_Foundation
 */

get_header(); ?>

<!-- Breadcrumb Section with Background Image -->
<section class="page-breadcrumb" style="position: relative; min-height: 50vh; display: flex; align-items: center; overflow: hidden; background: #000;">
    <!-- Background Image with Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/IMG-20250925-WA0029-min.jpg" alt="Greenpasture Foundation News Updates - Youth Empowerment Success Stories and Program Announcements" loading="eager" width="1920" height="600" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.3;">
    </div>

    <!-- Content -->
    <div class="container" style="position: relative; z-index: 2;">
        <div style="max-width: 800px;">
            <!-- Breadcrumb Navigation -->
            <div class="breadcrumb-nav" style="margin-bottom: 30px; display: flex; gap: 10px; align-items: center; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.3s;">Home</a>
                <span style="color: rgba(255,255,255,0.4);">/</span>
                <span style="color: #679A50;">News</span>
            </div>

            <!-- Page Title -->
            <h1 style="font-size: 4rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; color: #fff; margin-bottom: 20px; line-height: 1.1;">LATEST NEWS & UPDATES</h1>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.8); line-height: 1.8; max-width: 600px;">Stay informed about our latest programs, success stories, and community impact.</p>
        </div>
    </div>
</section>

<!-- News Content -->
<section class="news-section section-padding" style="background: #fff;">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title" style="text-align: left; margin-bottom: 60px;">
            <h2 style="font-size: 3.5rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; color: #000; margin-bottom: 20px;">OUR STORIES</h2>
            <p style="font-size: 1.1rem; color: #666; max-width: 700px; line-height: 1.8; margin: 0;">Discover the latest updates, success stories, and impactful moments from our programs and initiatives.</p>
        </div>

        <?php
        // Query for posts
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $news_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'paged' => $paged,
            'orderby' => 'date',
            'order' => 'DESC'
        ));

        if ($news_query->have_posts()) : ?>
            <div class="news-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 40px;">
                <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <article class="news-card" style="background: white; overflow: hidden; border: 1px solid #1a1a1a; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); position: relative;">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="news-thumbnail" style="height: 280px; overflow: hidden; position: relative;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);')); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="news-content" style="padding: 35px;">
                            <div class="news-meta" style="display: flex; gap: 20px; margin-bottom: 20px; font-size: 0.85rem; color: #888; text-transform: uppercase; letter-spacing: 1px;">
                                <span style="color: #679A50; font-weight: 600;"><?php echo get_the_date('M d, Y'); ?></span>
                                <span style="color: #666;">By <?php the_author(); ?></span>
                            </div>

                            <h3 style="margin-bottom: 20px; font-size: 1.5rem; font-weight: 700; line-height: 1.4;">
                                <a href="<?php the_permalink(); ?>" style="color: #000; text-decoration: none; transition: color 0.3s;">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <div class="news-excerpt" style="color: #666; margin-bottom: 25px; line-height: 1.8;">
                                <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="cta-premium cta-dark">
                                READ MORE <span class="cta-arrow">→</span>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination" style="margin-top: 80px; display: flex; justify-content: center; gap: 15px; align-items: center;">
                <?php
                echo paginate_links(array(
                    'total' => $news_query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => '<span style="display: inline-block; padding: 12px 25px; background: transparent; color: #000; border: 2px solid #000; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem; font-weight: 600; transition: all 0.3s;">← Previous</span>',
                    'next_text' => '<span style="display: inline-block; padding: 12px 25px; background: transparent; color: #000; border: 2px solid #000; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem; font-weight: 600; transition: all 0.3s;">Next →</span>',
                    'before_page_number' => '<span style="display: inline-block; padding: 12px 20px; background: transparent; color: #000; border: 2px solid #000; min-width: 50px; text-align: center; transition: all 0.3s; font-weight: 600;">',
                    'after_page_number' => '</span>',
                ));
                ?>
            </div>

            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <div class="no-news" style="text-align: left; padding: 80px 60px; background: #f5f5f5; border: 1px solid #e0e0e0;">
                <h2 style="font-size: 2.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px; color: #000;">NO NEWS YET</h2>
                <p style="color: #666; font-size: 1.1rem; line-height: 1.8; max-width: 600px;">Check back soon for updates on our programs and community impact stories.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
