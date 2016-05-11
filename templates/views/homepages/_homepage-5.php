<?php function _homepage5($custom = []) {

    $options = array_replace_recursive([
        'billboard' => [
            'type' => 'homepage',
            'wrapper-class' => 'text-left',
            'headline' => [
                'class' => 'heading-uppercase-light-spaced-size-4',
                'text' => 'This is Kayzen'
            ],
            'title' => [
                'class' => 'heading-uppercase-heavy-size-8 font-2',
                'text' => 'The New Experience'
            ],
            'ctas' => [
                [
                    'button-size-4-white',
                    '#',
                    'Purchase Now'
                ],
                [
                    'button-size-4-border-white',
                    '#featuredArticles',
                    'Explore The Potential'
                ]
            ],
            'wheel-anchor' => '#featuredArticles',
            'bg-parallax' => false,
        ],
        'masonryFeatures' => [
            'id' => 'featuredArticles',
            'link' => pageLink('further/shop-single.php', 'pages', false)
        ],
        'inStore' => [],
        'clients' => [
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
        ],
        'featureCards' => [],
        'promoBanner' => [],
        'shareTheLove' => [],
        'googleMap' => []
    ], $custom);

    billboard($options['billboard']);

    masonryFeatures($options['masonryFeatures']);

    inStore($options['inStore']);
    
    clients($options['clients']);
    
    featureCards($options['featureCards']);

    promoBanner($options['promoBanner']);
    
    shareTheLove($options['shareTheLove']);
    
    googleMap($options['googleMap']);

} ?>