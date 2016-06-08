<?php function themeAsset($theme, $path) {
    
    if (multiThemes) {
        $theme = $theme;
    } else {
        $theme = '';
    }
    
    devAsset($theme, $path);
       
} ?>