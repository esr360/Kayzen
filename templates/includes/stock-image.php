<?php function stockImage($path, $custom = array()) { 
    
    $options = array_merge(array(
        'resolution' => '990x660'
    ), $custom);
        
    if (shippable) { 
        echo 'http://placehold.it/'.$options['resolution'];
    } else {
        echo appDir.'/images/'.$path;
    }
      
 } ?>