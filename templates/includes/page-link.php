<?php function pageLink($path, $relative = false) {

    if ($relative) {
        echo $path;
    } else {
        echo pageTree.'/'.$path;
    }

} ?>