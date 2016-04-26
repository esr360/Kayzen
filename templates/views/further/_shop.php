<?php

    masonryFeatures();

    inStore();
    
    clients(array(
        'title' => array(
            'content' => 'Popular Brands',
            'modifiers' => 'heading-uppercase-light-brand-1-size-4',
            'highlight' => false
        ),
        'sub-title' => array(
            'content' => 'Get The Best Deals',
            'modifiers' => 'heading-heavy-size-6 font-2',
            'highlight' => false
        )
    ));
    
    featureCards();
    
    promoBanner();
            
?>