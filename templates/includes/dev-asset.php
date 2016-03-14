<?php function devAsset($theme, $path) { 

    $extension = pathinfo($path, PATHINFO_EXTENSION);
    $path = pathinfo($path, PATHINFO_FILENAME);

    if ($theme) {
        $themePath = '/themes/'.$theme;
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