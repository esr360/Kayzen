<?php 

    billboard([
        'type' => 'homepage',
        'wrapper-class' => 'container text-left',
        'headline'      => [
            'heading-uppercase-heavy-size-8 font-2',
            'Welcome to Kayzen'
        ],
        'title'         => [
            'heading-light-size-6',
            'A Unique & Modern Theme Framework'
        ],
        'ctas' => [
            [
                'button-size-4-white',
                '#',
                'Purchase Now'
            ],
            [
                'button-size-4-border-white',
                '#s-welcome',
                'Explore The Potential'
            ]
        ],
        'bg-parallax'   => false,
        'fade-parallax' => true,
        'wheel-anchor' => '#s-welcome'
    ]);

    earthSlider();
    
    skills();

    whyChooseUs();

    promoBanner();

    ourTeam();
    
    promoSection();
    
    services();
    
    statistics();
    
    keyFeatures2();
    
    clients();
    
    pricing();
    
    featureQuote();
    
    recentWork(array(
        'items' => 6
    ));
    
    testimonials();
    
    recentArticles();

    promoBanner();
    
    contactUs();
    
    googleMap();
    
?>