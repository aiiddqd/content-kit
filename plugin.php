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

function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}

function add_style(){
    if(wp_get_environment_type() == 'production'){
        $path = 'twcss/build.css';
        wp_enqueue_style( 'twcss', plugins_url($path, __FILE__), [], filemtime(__DIR__ . '/' . $path) );
    } else {
        wp_enqueue_script('twcss', 'https://cdn.tailwindcss.com');

    }
}

add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\add_style' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\add_style' );
