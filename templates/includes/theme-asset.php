<?php function themeAsset($custom = array()) {
    
    $options = array_merge(array(
        'path'  => ''
    ), $custom);
    
    if (themes) {
        $theme = theme;
    } else {
        $theme = '';
    }
    
    devAsset(array(
        'path' => $options['path'],
        'theme' => $theme
    ));
       
} ?>