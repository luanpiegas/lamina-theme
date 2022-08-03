<?php

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader.'));
}

require $composer;

use StarringJane\WordpressBlade\WordpressBlade;

WordpressBlade::create(
    get_theme_file_path('views'), // Path to all blade files
    get_theme_file_path('cache/views'), // Path to blade cache
    get_theme_file_path('components') // Path to component classes (optional, but recommended)
);

add_filter('wordpress-blade/template-directories', function ($directories) {
    $directories[] = 'controllers';

    return $directories;
});