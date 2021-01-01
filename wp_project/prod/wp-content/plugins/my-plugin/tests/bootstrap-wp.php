<?php

/**
 * @brief
 * Fix path on Windows
 * 
 * @param String $path
 * 
 * @return String
*/
function fixPathSeparators( string $path ): string
{
    return str_replace( '\\', '/', $path );
}

/** Path to a Test-desinged WordPress @var String */
$wp_dir = fixPathSeparators( getcwd() . '/../../../../dev/' );

// Disable Themes
define( 'WP_USE_THEMES', false );

// Load the WordPress library.
require_once $wp_dir . 'wp-load.php';

// Set up the WordPress query.
wp();
