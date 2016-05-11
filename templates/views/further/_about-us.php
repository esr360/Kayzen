<?php function _aboutUs($custom = array()) {

    $options = array_merge([
        'media-type' => 'portfolio' // 'blog' | 'portfolio'
    ], $custom);
    
    earthSlider();

    skills();

    whyChooseUs();

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