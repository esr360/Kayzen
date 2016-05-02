<?php function _homepage2($custom = []) {

    $options = array_replace_recursive([
        'billboard' => [
            'type' => 'homepage',
            'wrapper-class' => 'container text-left',
            'headline' => [
                'heading-uppercase-heavy-size-8 font-2',
                'Welcome to Kayzen'
            ],
            'title' => [
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
            'bg-parallax' => false,
            'fade-parallax' => true,
            'wheel-anchor' => '#s-welcome'
        ],
        'earthSlider' => [],
        'skills' => [],
        'whyChooseUs' => [],
        'promoBanner[1]' => [],
        'ourTeam' => [],
        'promoSection' => [],
        'services' => [],
        'statistics' => [],
        'keyFeatures2' => [],
        'clients' => [],
        'pricing' => [],
        'featureQuote' => [],
        'recentWork' => [
            'items' => 6
        ],
        'testimonials' => [],
        'recentArticles' => [],
        'promoBanner[2]' => [],
        'contactUs' => [],
        'googleMap' => []
    ], $custom);
    
    billboard($options['billboard']);
    
    earthSlider($options['earthSlider']);
    
    skills($options['skills']);
    
    whyChooseUs($options['whyChooseUs']);
    
    promoBanner($options['promoBanner[1]']);
    
    ourTeam($options['ourTeam']);
    
    promoSection($options['promoSection']);
    
    services($options['services']);
    
    statistics($options['statistics']);
    
    keyFeatures2($options['keyFeatures2']);
    
    clients($options['clients']);
    
    pricing($options['pricing']);
    
    featureQuote($options['featureQuote']);
    
    recentWork($options['recentWork']);
    
    testimonials($options['testimonials']);
    
    recentArticles($options['recentArticles']);
    
    promoBanner($options['promoBanner[2]']);
    
    contactUs($options['contactUs']);
    
    googleMap($options['googleMap']);
            
} ?>