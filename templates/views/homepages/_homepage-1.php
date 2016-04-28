<?php function _homepage1($custom = []) {

    $options = array_merge([
        ['billboard', [
            'type' => 'homepage'
        ]],
        ['keyFeatures', []],
        ['promoBanner', []],
        ['showcase', []],
        ['infoBanner', []],
        ['keyFeatures2', []],
        ['promoSection', []],
        ['responsive', []],
        ['promoBanner', []],
        ['options', []],
        ['infoBanner', []],
        ['layouts', []],
        ['statistics', []],
        ['shortcodes', []],
        ['promoSection', [
            'dark'    => true
        ]],
        ['moreFeatures', []],
        ['promoBanner', [
            'minimal' => true
        ]],
        ['contactUs', []],
        ['googleMap', []]
    ], $custom);
    
    foreach($options as $option) {
        call_user_func($option[0], $option[1]);
    }
            
} ?>