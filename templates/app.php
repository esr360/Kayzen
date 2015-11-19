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

include (ROOT.'/sections/clients.php');
include (ROOT.'/sections/our-team.php');
include (ROOT.'/sections/promo-banner.php');
include (ROOT.'/sections/promo-section.php');
include (ROOT.'/sections/skills.php');
include (ROOT.'/sections/why-choose-us.php');

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