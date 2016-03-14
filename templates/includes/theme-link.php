<?php function themeLink($theme, $path) {

    return pageLink($theme.$path, $root = 'themes', $echo = false);

} ?>