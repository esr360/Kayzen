<?php

// Config
//-----------------------------------------------------------------

define('ROOT', dirname(__FILE__));
define('appDir', '/app'); 
define('env', 'dev');
	
$for = '';
$widgetTitle = '';
$style = '';
$type = '';
$container = '';

include (ROOT.'/includes/article-item.php');

// Debug to Console
//-----------------------------------------------------------------
	
function consoleLog($data) {
    if (is_array($data)) {
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    } else {
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
    }
    echo $output;
}

//consoleLog(appDir);

?>