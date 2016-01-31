<?php

// Config
//-----------------------------------------------------------------

define('ROOT', dirname(__FILE__));
define('appDir', '/app'); 
define('env', 'dev');

// Templates
//-----------------------------------------------------------------

include (ROOT.'/includes/article-item.php');
include (ROOT.'/includes/dev-asset.php');

include (ROOT.'/modules/billboard.php');
include (ROOT.'/modules/earth-slider.php');
include (ROOT.'/modules/footer.php');
include (ROOT.'/modules/google-map.php');
include (ROOT.'/modules/header.php');
include (ROOT.'/modules/sidebar.php');
include (ROOT.'/modules/top-bar.php');

include (ROOT.'/sections/clients.php');
include (ROOT.'/sections/contact-us.php');
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
include (ROOT.'/sections/statistics.php');
include (ROOT.'/sections/testimonials.php');
include (ROOT.'/sections/twitter-feed.php');
include (ROOT.'/sections/utilities.php');
include (ROOT.'/sections/why-choose-us.php');

?>