<?php function _homepage5($custom = []) {

    $options = array_merge([
        'billboard' => [
            'type' => 'homepage',
            'wrapper-class' => 'container text-left',
            'headline'      => [
                'heading-uppercase-light-spaced-size-4',
                'This is Kayzen'
            ],
            'title'         => [
                'heading-uppercase-heavy-size-8 font-2',
                'The New Experience'
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
        ]
    ], $custom);

    billboard($options['billboard']);

    masonryFeatures();

    inStore();
    
    clients([
        'title' => [
            'content' => 'Popular Brands',
            'modifiers' => 'heading-uppercase-light-brand-1-size-4',
            'highlight' => false
        ],
        'sub-title' => [
            'content' => 'Get The Best Deals',
            'modifiers' => 'heading-heavy-size-6 font-2',
            'highlight' => false
        ]
    ]);
    
    featureCards();

    promoBanner();
    
    shareTheLove();
    
    googleMap();

} ?>