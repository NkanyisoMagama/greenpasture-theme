# Greenpasture Foundation Theme

A custom WordPress theme built for Greenpasture Foundation, featuring a modern design with full-screen sliders, image galleries, and an easy-to-use admin panel for page generation.

## About

This theme was designed specifically for the Greenpasture Foundation to showcase their training programs, success stories, and community impact. It includes custom page templates for Home, News, Gallery, and Contact pages.

## Features

- **Full-screen hero slider** with navigation and pagination
- **Image-based sections** for Mission, Vision, and Programs
- **Training gallery** with 36 photos and category filtering
- **Testimonials section** with professional styling
- **Admin panel** for easy page generation
- **Responsive design** that works on all devices
- **Custom templates** for different page types

## Installation

1. Download the theme files
2. Go to your WordPress admin: **Appearance → Themes → Add New → Upload Theme**
3. Upload the theme zip file
4. Click **Activate**

After activation, you'll see a welcome notice at the top of your admin dashboard.

## Quick Setup

### Generate Pages

Once you activate the theme, you'll see a notice with a button to generate pages:

1. Click **Generate Pages Now** in the welcome notice
2. Or go to **Appearance → Setup Pages**
3. Click the **Generate All Pages** button
4. Wait for the confirmation message

The system will create:
- Home page (set as front page)
- News page
- Gallery page
- Contact page
- Primary menu with all pages

### If Something Goes Wrong

If pages don't generate or you need to start over:

1. Go to **Appearance → Setup Pages**
2. Check the Page Status table to see what exists
3. Click **Reset Flag** if needed
4. Click **Generate All Pages** again

The generator is safe to run multiple times - it won't delete or overwrite existing content.

## Page Templates

### Home Page
- Full-screen image slider
- About section with Mission, Vision, and Approach
- Programs showcase with 6 training categories
- Success stories from students
- Impact statistics
- Call-to-action section

### News Page
- Blog post listing with excerpts
- Pagination for older posts
- Featured images

### Gallery Page
- 36 training photos
- Category filtering (Computing, Security, Catering, etc.)
- Lightbox view for full-size images

### Contact Page
- Contact form
- Organization address and phone
- Office hours
- Internet services pricing

## Customization

### Changing Colors

The theme uses green (#2d5016) as the primary accent color. To change it:

1. Open `/style.css`
2. Find all instances of `#2d5016`
3. Replace with your preferred color

### Adding Images

To add your own images:

1. Upload images via **Media → Add New**
2. Edit the page you want to update
3. Replace image URLs in the content

### Modifying the Slider

Edit the Home page and update the slider images in the template. The slider supports multiple slides with captions.

## Technical Details

**Theme Version:** 2.0.0
**WordPress Version:** 6.0 or higher
**PHP Version:** 7.4 or higher

### File Structure

```
greenpasture-theme/
├── admin/
│   └── page-generator.php
├── assets/
│   ├── css/
│   ├── images/
│   └── js/
│       └── main.js
├── templates/
│   ├── template-home.php
│   ├── template-news.php
│   ├── template-gallery.php
│   └── template-contact.php
├── functions.php
├── style.css
├── header.php
├── footer.php
├── index.php
└── screenshot.png
```

### Key Functions

- `greenpasture_add_admin_menu()` - Adds the Setup Pages menu
- `greenpasture_setup_page()` - Displays the admin panel
- `greenpasture_manual_create_pages()` - Creates theme pages
- `greenpasture_check_existing_pages()` - Checks page status
- `greenpasture_activation_notice()` - Shows welcome notice

## Documentation

For more detailed information, check these files:

- **ADMIN-PANEL-GUIDE.md** - Complete guide to the admin panel
- **CHANGES-MADE.md** - Recent design changes
- **DIAGNOSIS-AND-FIX.md** - Technical analysis and troubleshooting

## Troubleshooting

### Admin panel doesn't appear

1. Make sure the theme is activated
2. Check that you're logged in as Administrator
3. Verify the file `/admin/page-generator.php` exists
4. Enable WP_DEBUG in wp-config.php to see errors

### Pages won't generate

1. Go to **Appearance → Setup Pages**
2. Look at the Page Status table
3. Click **Reset Flag**
4. Try **Generate All Pages** again

### Slider not working

1. Clear your browser cache (Cmd/Ctrl + Shift + R)
2. Check that JavaScript is enabled
3. Make sure images are uploaded and accessible

### Images not showing

1. Check image file paths are correct
2. Verify images exist in `/assets/images/`
3. Check file permissions (should be 644)

## Security

The theme includes:
- Nonce verification for admin actions
- Capability checking (admin-only functions)
- Input sanitization
- Output escaping
- WordPress coding standards

## Support

For issues or questions about this theme, refer to the documentation files included in the theme folder.

## Credits

Built for Greenpasture Foundation
Version 2.0.0
November 2024

## License

This theme is proprietary software created for Greenpasture Foundation.
