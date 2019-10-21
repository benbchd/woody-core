<?php
/**
 * Configuration overrides for WP_ENV === 'dev'
 */
use Roots\WPConfig\Config;

ini_set('display_errors', 1);

if (defined('WP_CLI') && WP_CLI) {
    // Do WP-CLI-specific things.
    Config::define('SAVEQUERIES', false);
} else {
    Config::define('SAVEQUERIES', true);
}

//Config::define('ENABLE_LOG_FILES', true);
