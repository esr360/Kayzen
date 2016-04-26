<?php function devAsset($theme, $path) { 
    
    $extension = pathinfo($path, PATHINFO_EXTENSION);
    $path = pathinfo($path, PATHINFO_FILENAME);
    
    if ($theme) {
        $themePath = '/themes/'.$theme.'/';
        $stylesPath = null;
        $scriptsPath = null;
    } else {
        $themePath = '';
        $stylesPath = '/styles/';
        $scriptsPath = '/scripts/';
    }    
            
    if ($extension === 'js') {
        echo '<script src="'.appDir.$themePath.$scriptsPath.$path.((env === 'dev') ? '' : '.min').'.js"></script>';
    }
     else if ($extension === 'css') {
        echo '<link rel="stylesheet" href="'.appDir.$themePath.$stylesPath.$path.((env == 'dev') ? '' : '.min').'.css">';
    }
                     
} ?>