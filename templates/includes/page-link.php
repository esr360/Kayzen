<?php function pageLink($path, $relative = false) {

    $filename  = pathinfo($path, PATHINFO_FILENAME);
    $extension = pathinfo($path, PATHINFO_EXTENSION);
    $directory = pathinfo($path, PATHINFO_DIRNAME);
    
    // remove the trailing dot from the directory path
    $directory = rtrim($directory, '.');
    
    // add a required slash where appropriate
    if ($directory) {
        $directory = $directory.'/';
    }
   
    if (host == 'server') {
        $pageTree = '/templates/pages/';
    } else if (host == 'static') {
        $pageTree = realpath(__DIR__ . '/../../pages').'/';
    }
    
    if (host == 'static' && $extension == 'php') {
        $extension = '.html';
    } else {
        $extension = '.'.$extension;
    }

    if ($relative) {
        echo $filename.$extension;
    } else {
        echo $pageTree.$directory.$filename.$extension;
    }

} ?>