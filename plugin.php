<?php
/*
 * Plugin Name: @ ContentKit
 * Description: Block based design system with additional styles and patterns
 * Author: uptimizt
 * GitHub Plugin URI: https://github.com/uptimizt/content-kit
 * Text Domain: content-kit
 * Domain Path: /languages
 * Version: 0.221223
 */

namespace ContentKit;

defined('ABSPATH') || die;

require_once __DIR__ . '/mods/loader.php';
require_once __DIR__ . '/patterns/_loader.php';
require_once __DIR__ . '/includes/ColorsTypical.php';

add_action('plugins_loaded', function () {
    load_plugin_textdomain('content-kit', false, __DIR__ . '/languages/');
});