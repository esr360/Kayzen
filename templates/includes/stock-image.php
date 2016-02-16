<?php function stockImage($path, $custom = array()) { 
    
    $options = array_merge(array(
        'resolution' => '990x660'
    ), $custom);
        
    if (host == 'server') { 
        echo appDir.'/images/'.$path;
    } else if (host == 'static') {
        echo 'http://placehold.it/'.$options['resolution'];
    }
      
 } ?>