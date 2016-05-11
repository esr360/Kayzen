<?php function _aboutUs2($custom = array()) {

    $options = array_merge([
        'media-type' => 'portfolio' // 'blog' | 'portfolio'
    ], $custom);
    
    blocksWithQuote();
    
    testimonials();
    
    responsive();
    
    promoBanner();
    
    ourTeam();
    
    clients();
    
    promoSection();

    statistics();
    
    if ($options['media-type'] == 'blog') {
        recentArticles();
    } else {
        recentWork();
    }
    
    googleMap();
            
} ?>