<?php
/******************************************************************
 * Config
 *****************************************************************/

/**
 * Set your work environment
 * @const env
 *
 * Values: 'dev' | 'prod'
 */
define('env', 'dev');

/**
 * Set which theme you are using
 * @const theme
 */
define('theme', 'Tempus');

/**
 * Are you using multiple themes?
 * @const multiThemes
 *
 * Set to 'true' if your theme's assets are inside their own
 * directory e.g. app/themes/Kayzen
 */
define('multiThemes', true);

/**
 * Set how you intend to access your project's assets
 * @const path
 *
 * Values: 'root' | 'relative'
 */
define('path', 'root');

/**
 * Set which realm you would like
 * @const realm
 *
 * Values: 'demo' | 'live'
 */
define('realm', 'live');

/**
 * Set the path to the app directory
 * @const appDir
 */
define('appDir', '/app');

/**
 * Set the root php/template directory
 * @const ROOT
 *
 * This should probably be left untouched
 */
define('ROOT', dirname(__FILE__));

/*
 * Set the default timezone
 */
date_default_timezone_set('Europe/London');

/**
 * Global variables
 */
 $GLOBALS['theme'] = theme;
 $GLOBALS['iphone-colors'] = ['white', 'purple', 'blue'];
    
/******************************************************************
 * Templates
 *****************************************************************/

include (ROOT.'/helpers/merge-options.php');
include (ROOT.'/helpers/dev-asset.php');
include (ROOT.'/helpers/page-link.php');
include (ROOT.'/helpers/stock-image.php');
include (ROOT.'/helpers/theme-asset.php');
include (ROOT.'/helpers/theme-link.php');

include (ROOT.'/includes/article-item.php');
include (ROOT.'/includes/head.php');
include (ROOT.'/includes/scripts.php');
include (ROOT.'/includes/section-title.php');

include (ROOT.'/modules/billboard.php');
include (ROOT.'/modules/earth-slider.php');
include (ROOT.'/modules/footer.php');
include (ROOT.'/modules/google-map.php');
include (ROOT.'/modules/header.php');
include (ROOT.'/modules/navigation.php');
include (ROOT.'/modules/preloader.php');
include (ROOT.'/modules/sidebar.php');
include (ROOT.'/modules/top-bar.php');

include (ROOT.'/sections/article-carousel.php');
include (ROOT.'/sections/blocks-with-quote.php');
include (ROOT.'/sections/clients.php');
include (ROOT.'/sections/comments.php');
include (ROOT.'/sections/contact-us.php');
include (ROOT.'/sections/demo-post.php');
include (ROOT.'/sections/elements.php');
include (ROOT.'/sections/feature-cards.php');
include (ROOT.'/sections/feature-quote.php');
include (ROOT.'/sections/feature-spectrum-blocks.php');
include (ROOT.'/sections/in-store.php');
include (ROOT.'/sections/info-banner.php');
include (ROOT.'/sections/key-features.php');
include (ROOT.'/sections/key-features-2.php');
include (ROOT.'/sections/layouts.php');
include (ROOT.'/sections/masonry-features.php');
include (ROOT.'/sections/more-features.php');
include (ROOT.'/sections/objects.php');
include (ROOT.'/sections/options.php');
include (ROOT.'/sections/our-team.php');
include (ROOT.'/sections/pricing.php');
include (ROOT.'/sections/project-sections.php');
include (ROOT.'/sections/promo-banner.php');
include (ROOT.'/sections/promo-section.php');
include (ROOT.'/sections/recent-work.php');
include (ROOT.'/sections/recent-articles.php');
include (ROOT.'/sections/responsive.php');
include (ROOT.'/sections/services.php');
include (ROOT.'/sections/share-the-love.php');
include (ROOT.'/sections/shortcodes.php');
include (ROOT.'/sections/showcase.php');
include (ROOT.'/sections/skills.php');
include (ROOT.'/sections/social-widgets.php');
include (ROOT.'/sections/statistics.php');
include (ROOT.'/sections/testimonials.php');
include (ROOT.'/sections/twitter-feed.php');
include (ROOT.'/sections/utilities.php');
include (ROOT.'/sections/why-choose-us.php');

include (ROOT.'/views/blog/classic/_full-width-sidebar.php');
include (ROOT.'/views/blog/_single-sidebar.php');

include (ROOT.'/views/further/_about-us.php');
include (ROOT.'/views/further/_about-us-2.php');
include (ROOT.'/views/further/_shop-category.php');
include (ROOT.'/views/further/_shop-category-sidebar.php');
include (ROOT.'/views/further/_shop-single.php');
include (ROOT.'/views/further/_shop-single-sidebar.php');

include (ROOT.'/views/homepages/_homepage-1.php');
include (ROOT.'/views/homepages/_homepage-2.php');
include (ROOT.'/views/homepages/_homepage-3.php');
include (ROOT.'/views/homepages/_homepage-4.php');
include (ROOT.'/views/homepages/_homepage-5.php');
include (ROOT.'/views/homepages/_homepage-6.php');

?>