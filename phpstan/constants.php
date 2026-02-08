<?php
/**
 * WP Constants used by PHPStan
 *
 * These should be updated to match constants that are set in any custom plugins or themes that will be anylised.
 *
 * @package TenUpPhpStan
 */

// Change these when you update the constants in the plugin.
define( 'FIREFLY_PLUGIN_VERSION', '0.1.0' );
define( 'FIREFLY_PLUGIN_URL', '' );
define( 'FIREFLY_PLUGIN_PATH', '' );
define( 'FIREFLY_PLUGIN_INC', FIREFLY_PLUGIN_PATH . 'includes/' );

// Change these when you update the constants in the theme.

define( 'FIREFLY_THEME_VERSION', '1.0.0' );
define( 'FIREFLY_THEME_TEMPLATE_URL', '' );
define( 'FIREFLY_THEME_PATH', '/' );
define( 'FIREFLY_THEME_DIST_PATH', FIREFLY_THEME_PATH . 'dist/' );
define( 'FIREFLY_THEME_DIST_URL', FIREFLY_THEME_TEMPLATE_URL . '/dist/' );
define( 'FIREFLY_THEME_INC', FIREFLY_THEME_PATH . 'includes/' );
define( 'FIREFLY_THEME_BLOCK_DIST_DIR', FIREFLY_THEME_DIST_PATH . '/blocks/' );
