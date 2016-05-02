<?php function _homepage1($custom = []) {

    $options = array_replace_recursive([
        'billboard' => [
            'type' => 'homepage'
        ],
        'keyFeatures' => [],
        'promoBanner[1]' => [],
        'showcase' => [],
        'infoBanner[1]' => [],
        'keyFeatures2' => [],
        'promoSection[1]' => [],
        'responsive' => [],
        'promoBanner[2]' => [],
        'options' => [],
        'infoBanner[2]' => [],
        'layouts' => [],
        'statistics' => [],
        'shortcodes' => [],
        'promoSection[2]' => [
            'dark' => true
        ],
        'moreFeatures' => [],
        'promoBanner[3]' => [
            'minimal' => true
        ],
        'contactUs' => [],
        'googleMap' => []
    ], $custom);
    
    billboard($options['billboard']);
    
    keyFeatures($options['keyFeatures']);
    
    promoBanner($options['promoBanner[1]']);
    
    showcase($options['showcase']);
    
    infoBanner($options['infoBanner[1]']);
    
    keyFeatures2($options['keyFeatures2']);
    
    promoSection($options['promoSection[1]']);
    
    responsive($options['responsive']);
    
    promoBanner($options['promoBanner[2]']);
    
    options($options['options']);
    
    infoBanner($options['infoBanner[2]']);
    
    layouts($options['layouts']);
    
    statistics($options['statistics']);
    
    shortcodes($options['shortcodes']);
    
    promoSection($options['promoSection[2]']);
    
    moreFeatures($options['moreFeatures']);
    
    promoBanner($options['promoBanner[3]']);
    
    contactUs($options['contactUs']);
    
    googleMap($options['googleMap']);
            
} ?>