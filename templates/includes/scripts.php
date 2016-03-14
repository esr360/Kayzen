<!-- SCRIPTS -->
<?php function scripts($theme = 'Kayzen') { 
    
    devAsset(null, 'jquery.js');
    devAsset(null, 'pseudojQuery-end.js');
    themeAsset($theme, 'app.js');
    
} ?>