/**
 * Greenpasture Foundation Theme JavaScript
 */

(function($) {
    'use strict';

    // Initialize when DOM is ready
    $(document).ready(function() {

        // Mobile Menu Toggle
        initMobileMenu();

        // Hero Slider
        initHeroSlider();

        // Gallery Filter
        initGalleryFilter();

        // Smooth Scroll for Anchor Links
        initSmoothScroll();

        // Form Validation
        initFormValidation();

        // Active Menu Item
        setActiveMenuItem();

        // Sticky Header with Scroll Effect
        initStickyHeader();

        // Testimonial Carousel
        initTestimonialCarousel();

        // Get Involved Tabs
        initGetInvolvedTabs();
    });

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const menuToggle = $('.mobile-menu-toggle');
        const navigation = $('.main-navigation');
        const body = $('body');

        // Create overlay
        if (!$('.mobile-menu-overlay').length) {
            $('<div class="mobile-menu-overlay"></div>').appendTo(body);
        }
        const overlay = $('.mobile-menu-overlay');

        // Create close button if it doesn't exist
        if (!navigation.find('.mobile-menu-close').length) {
            const closeBtn = $('<button class="mobile-menu-close" aria-label="Close Menu"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg></button>');
            navigation.prepend(closeBtn);
        }
        const closeBtn = navigation.find('.mobile-menu-close');

        menuToggle.on('click', function() {
            navigation.toggleClass('active');
            overlay.toggleClass('active');
            $(this).attr('aria-expanded', navigation.hasClass('active'));
            body.toggleClass('menu-open');
        });

        // Close menu when clicking close button
        closeBtn.on('click', function() {
            navigation.removeClass('active');
            overlay.removeClass('active');
            menuToggle.attr('aria-expanded', 'false');
            body.removeClass('menu-open');
        });

        // Close menu when clicking overlay
        overlay.on('click', function() {
            navigation.removeClass('active');
            overlay.removeClass('active');
            menuToggle.attr('aria-expanded', 'false');
            body.removeClass('menu-open');
        });

        // Close menu when clicking a link
        navigation.find('a').on('click', function() {
            if ($(window).width() <= 768) {
                navigation.removeClass('active');
                overlay.removeClass('active');
                menuToggle.attr('aria-expanded', 'false');
                body.removeClass('menu-open');
            }
        });
    }

    /**
     * Premium Hero Slider
     */
    function initHeroSlider() {
        const slides = $('.hero-slide');
        if (slides.length <= 1) return;

        let currentSlide = 0;
        const slideCount = slides.length;
        let slideInterval;

        // Update slide counter
        function updateCounter() {
            const counter = String(currentSlide + 1).padStart(2, '0');
            $('.current-slide').text(counter);
        }

        // Go to specific slide
        function goToSlide(index) {
            if (index === currentSlide) return;

            // Remove active from current
            slides.eq(currentSlide).removeClass('active');
            $('.vpag-dot').eq(currentSlide).removeClass('active');

            // Reset animations by removing and re-adding elements
            const newSlide = slides.eq(index);
            newSlide.find('.hero-meta, .title-solid, .title-outline, .hero-description, .hero-cta, .hero-social').css('animation', 'none');

            setTimeout(function() {
                newSlide.find('.hero-meta, .title-solid, .title-outline, .hero-description, .hero-cta, .hero-social').css('animation', '');
            }, 10);

            // Set new slide as active
            currentSlide = index;
            slides.eq(currentSlide).addClass('active');
            $('.vpag-dot').eq(currentSlide).addClass('active');

            updateCounter();
        }

        // Next slide
        function nextSlide() {
            const next = (currentSlide + 1) % slideCount;
            goToSlide(next);
        }

        // Previous slide
        function prevSlide() {
            const prev = (currentSlide - 1 + slideCount) % slideCount;
            goToSlide(prev);
        }

        // Start auto-slide
        function startAutoSlide() {
            slideInterval = setInterval(nextSlide, 6000);
        }

        // Stop auto-slide
        function stopAutoSlide() {
            clearInterval(slideInterval);
        }

        // Initialize
        updateCounter();
        startAutoSlide();

        // Vertical pagination dots
        $('.vpag-dot').on('click', function() {
            stopAutoSlide();
            const slideIndex = $(this).data('slide');
            goToSlide(slideIndex);
            startAutoSlide();
        });

        // Navigation arrows
        $('.hero-next').on('click', function() {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });

        $('.hero-prev').on('click', function() {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });

        // Keyboard navigation
        $(document).on('keydown', function(e) {
            if (e.key === 'ArrowRight') {
                stopAutoSlide();
                nextSlide();
                startAutoSlide();
            } else if (e.key === 'ArrowLeft') {
                stopAutoSlide();
                prevSlide();
                startAutoSlide();
            }
        });

        // Pause on hover
        $('.hero-section').hover(
            function() { stopAutoSlide(); },
            function() { startAutoSlide(); }
        );

        // Touch/Swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        $('.hero-slider').on('touchstart', function(e) {
            touchStartX = e.originalEvent.changedTouches[0].screenX;
        });

        $('.hero-slider').on('touchend', function(e) {
            touchEndX = e.originalEvent.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            if (touchEndX < touchStartX - 50) {
                // Swipe left - next slide
                stopAutoSlide();
                nextSlide();
                startAutoSlide();
            }
            if (touchEndX > touchStartX + 50) {
                // Swipe right - previous slide
                stopAutoSlide();
                prevSlide();
                startAutoSlide();
            }
        }
    }

    /**
     * Gallery Filter
     */
    function initGalleryFilter() {
        $('.filter-btn').on('click', function() {
            const filter = $(this).data('filter');

            // Update active button
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');

            // Filter gallery items
            if (filter === 'all') {
                $('.gallery-item').fadeIn(300);
            } else {
                $('.gallery-item').hide();
                $(`.gallery-item[data-category="${filter}"]`).fadeIn(300);
            }
        });

        // Gallery lightbox effect (simple version)
        $('.gallery-item').on('click', function() {
            const imgSrc = $(this).find('img').attr('src');
            const imgAlt = $(this).find('img').attr('alt');

            // Create lightbox
            const lightbox = $(`
                <div class="gallery-lightbox" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); z-index: 9999; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                    <img src="${imgSrc}" alt="${imgAlt}" style="max-width: 90%; max-height: 90%; object-fit: contain;">
                    <button class="close-lightbox" style="position: absolute; top: 20px; right: 20px; background: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 24px; cursor: pointer;">&times;</button>
                </div>
            `);

            $('body').append(lightbox);
            lightbox.fadeIn(300);

            // Close lightbox
            lightbox.on('click', function() {
                $(this).fadeOut(300, function() {
                    $(this).remove();
                });
            });
        });
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').on('click', function(e) {
            const target = $(this.hash);

            if (target.length) {
                e.preventDefault();

                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800, 'swing');
            }
        });
    }

    /**
     * Form Validation
     */
    function initFormValidation() {
        $('.contact-form').on('submit', function(e) {
            let isValid = true;
            const form = $(this);

            // Clear previous errors
            form.find('.error-message').remove();
            form.find('.error').removeClass('error');

            // Validate required fields
            form.find('[required]').each(function() {
                if ($(this).val().trim() === '') {
                    isValid = false;
                    $(this).addClass('error');
                    $(this).after('<span class="error-message" style="color: #d32f2f; font-size: 0.85rem; margin-top: 5px; display: block;">This field is required</span>');
                }
            });

            // Validate email
            const email = form.find('input[type="email"]');
            if (email.length && email.val() !== '') {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email.val())) {
                    isValid = false;
                    email.addClass('error');
                    email.after('<span class="error-message" style="color: #d32f2f; font-size: 0.85rem; margin-top: 5px; display: block;">Please enter a valid email address</span>');
                }
            }

            if (!isValid) {
                e.preventDefault();

                // Scroll to first error
                const firstError = form.find('.error').first();
                if (firstError.length) {
                    $('html, body').animate({
                        scrollTop: firstError.offset().top - 100
                    }, 300);
                }
            }
        });

        // Remove error on input
        $('.contact-form input, .contact-form textarea').on('input', function() {
            $(this).removeClass('error');
            $(this).next('.error-message').remove();
        });
    }

    /**
     * Set Active Menu Item
     */
    function setActiveMenuItem() {
        const currentPath = window.location.pathname;

        $('.main-navigation a').each(function() {
            const linkPath = $(this).attr('href');

            if (linkPath && (currentPath === linkPath || currentPath.includes(linkPath) && linkPath !== '/')) {
                $(this).addClass('active');
            }
        });
    }

    /**
     * Scroll to Top Button (optional enhancement)
     */
    function initScrollToTop() {
        const scrollBtn = $('<button class="scroll-to-top" style="position: fixed; bottom: 30px; right: 30px; width: 50px; height: 50px; background: #679A50; color: white; border: none; border-radius: 50%; font-size: 20px; cursor: pointer; display: none; z-index: 999; transition: all 0.3s ease;">&uarr;</button>');

        $('body').append(scrollBtn);

        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 300) {
                scrollBtn.fadeIn();
            } else {
                scrollBtn.fadeOut();
            }
        });

        scrollBtn.on('click', function() {
            $('html, body').animate({ scrollTop: 0 }, 600);
        });
    }

    // Initialize scroll to top
    initScrollToTop();

    /**
     * Sticky Header with Scroll Effect
     */
    function initStickyHeader() {
        const header = $('.site-header');
        const scrollThreshold = 100;

        $(window).on('scroll', function() {
            const scrollPos = $(this).scrollTop();

            if (scrollPos > scrollThreshold) {
                header.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
            }
        });

        // Trigger once on load in case page is already scrolled
        $(window).trigger('scroll');
    }

    /**
     * Testimonial Carousel
     */
    function initTestimonialCarousel() {
        const track = $('.testimonials-track');
        const slides = $('.testimonial-slide');
        const dots = $('.testimonial-dot');
        const prevBtn = $('.testimonial-prev');
        const nextBtn = $('.testimonial-next');

        if (slides.length === 0) return;

        let currentIndex = 0;
        const totalSlides = slides.length;

        function goToSlide(index) {
            if (index < 0) {
                currentIndex = totalSlides - 1;
            } else if (index >= totalSlides) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }

            const offset = -currentIndex * 100;
            track.css('transform', `translateX(${offset}%)`);

            // Update dots
            dots.removeClass('active').css('background', 'rgba(255,255,255,0.3)');
            dots.eq(currentIndex).addClass('active').css('background', '#679A50');
        }

        // Previous button
        prevBtn.on('click', function() {
            goToSlide(currentIndex - 1);
        });

        // Next button
        nextBtn.on('click', function() {
            goToSlide(currentIndex + 1);
        });

        // Dot navigation
        dots.on('click', function() {
            const index = $(this).data('index');
            goToSlide(index);
        });

        // Auto-advance every 7 seconds
        setInterval(function() {
            goToSlide(currentIndex + 1);
        }, 7000);

        // Hover effects for arrows
        $('.testimonial-prev, .testimonial-next').hover(
            function() {
                $(this).css({
                    'background': 'rgba(0,0,0,0.05)',
                    'border-color': '#679A50'
                });
            },
            function() {
                $(this).css({
                    'background': 'transparent',
                    'border-color': 'rgba(0,0,0,0.2)'
                });
            }
        );
    }

    /**
     * Get Involved Tabs
     */
    function initGetInvolvedTabs() {
        const tabBtns = $('.tab-btn');
        const tabContents = $('.tab-content');

        if (tabBtns.length === 0) return;

        tabBtns.on('click', function() {
            const targetTab = $(this).data('tab');

            // Remove active class from all buttons
            tabBtns.removeClass('active').css('color', '#666');

            // Add active class to clicked button
            $(this).addClass('active').css('color', '#000');

            // Hide all tab contents
            tabContents.hide().removeClass('active').css('display', 'none');

            // Show target tab content with grid display
            $('#' + targetTab + '-tab').css('display', 'grid').fadeIn(300).addClass('active');
        });
    }

})(jQuery);
