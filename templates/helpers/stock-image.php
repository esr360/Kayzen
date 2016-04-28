<?php function stockImage($path, $custom = array()) { 
    
    $options = array_merge(array(
        'resolution' => '990x660'
    ), $custom);
        
    if (realm == 'live') { 
        return 'http://placehold.it/'.$options['resolution'];
    } else if (realm == 'demo') {
        return appDir.'/images/'.$path;
    }
      
 } ?>