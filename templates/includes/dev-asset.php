<?php function devAsset($custom = array()) { 
    
    $options = array_merge(array(
        'path'  => '',
        'theme' => ''
    ), $custom);

    $extension = pathinfo($options['path'], PATHINFO_EXTENSION);
    $path = pathinfo($options['path'], PATHINFO_FILENAME);

    if ($options['theme']) {
        $themePath = '/themes/'.$options['theme'];
    } else {
        $themePath = '';
    }      
            
    if ($extension === 'js') {
            
        if (env == 'dev') {
            echo '<script src="'.appDir.$themePath.'/scripts/'.$path.'.js"></script>';
        } else if (env == 'prod') {
            echo '<script src="'.appDir.$themePath.'/scripts/'.$path.'.min.js"></script>';
        } 
    
    } else if ($extension === 'css') {
        
        if (env == 'dev') {
            echo '<link rel="stylesheet" href="'.appDir.$themePath.'/styles/'.$path.'.css">';
        } else if (env == 'prod') {
            echo '<link rel="stylesheet" href="'.appDir.$themePath.'/styles/'.$path.'.min.css">';
        }
        
    }      
                     
} ?>