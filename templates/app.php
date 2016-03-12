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
define('env', 'prod');

/**
 * Set which theme to use
 * @const theme
 *
 * You can view list of available themes in 'assets/themes'
 */
define('theme', 'Nexus');

/**
 * Are you using multiple themes?
 * @const themes
 *
 * Set to 'true' if your theme's assets are inside their own
 * directory e.g. app/themes/Kayzen
 */
define('themes', true);

/**
 * Set how you intend to access your project's assets
 * @const path
 *
 * Values: 'root' | 'relative' | 'real' 
 */
define('path', 'root');

/**
 * Set which realm you would like
 * @const realm
 *
 * Values: 'demo' | 'live'
 */
define('realm', 'demo');

/**
 * Set the relative path to Kayzen if it is not in the root
 * @const projectPath
 */
define('projectPath', '/Kayzen');

/**
 * Set the root php/template directory
 * @const ROOT
 *
 * This should probably be left untouched
 */
define('ROOT', dirname(__FILE__));

/**
 * Set the path to the app directory
 */
 if (path == 'root') {
    define('appDir', '/app');
} else if (path == 'relative') {
    define('appDir', projectPath.'/app');
} else if (path == 'real') {
    define('appDir', realpath(__DIR__ . '/../app'));
}

/******************************************************************
 * Templates
 *****************************************************************/

include (ROOT.'/includes/article-item.php');
include (ROOT.'/includes/dev-asset.php');
include (ROOT.'/includes/page-link.php');
include (ROOT.'/includes/stock-image.php');
include (ROOT.'/includes/theme-asset.php');
include (ROOT.'/includes/theme-link.php');

include (ROOT.'/modules/billboard.php');
include (ROOT.'/modules/earth-slider.php');
include (ROOT.'/modules/footer.php');
include (ROOT.'/modules/google-map.php');
include (ROOT.'/modules/header.php');
include (ROOT.'/modules/navigation.php');
include (ROOT.'/modules/preloader.php');
include (ROOT.'/modules/sidebar.php');
include (ROOT.'/modules/top-bar.php');

include (ROOT.'/sections/clients.php');
include (ROOT.'/sections/comments.php');
include (ROOT.'/sections/contact-us.php');
include (ROOT.'/sections/demo-post.php');
include (ROOT.'/sections/elements.php');
include (ROOT.'/sections/feature-cards.php');
include (ROOT.'/sections/feature-quote.php');
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

?>