<?php
/*
* Plugin Name: _ Content Kit Base
* Description: Block based design system with additional styles and patterns
* Author: uptimizt
* GitHub Plugin URI: https://github.com/uptimizt/content-kit-base
* Version: 0.220510
*/

namespace uptimizt\LazyBlocks;

add_filter('lzb/block_render/include_template', __NAMESPACE__ . '\\' . 'chg_template_path', 10, 4);
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\' . 'frontend');
add_action('enqueue_block_editor_assets', __NAMESPACE__ . '\\' . 'backend');
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\' . 'commone_style');
add_action('plugins_loaded', __NAMESPACE__ . '\\blocks_load_configs');
add_action('plugins_loaded', __NAMESPACE__ . '\\styles_load_configs');



function styles_load_configs()
{
  $files = glob(__DIR__ . '/styles/*/config.php');
  foreach ($files as $file) {
    require_once $file;
  }
}


function blocks_load_configs()
{
  $files = glob(__DIR__ . '/blocks/*/config.php');
  foreach ($files as $file) {
    require_once $file;
  }
}

function backend()
{
  $files = glob(__DIR__ . '/blocks/*/block.css');
  foreach ($files as $file) {
    $version = filemtime($file);
    $key = basename(dirname($file));
    $rel_path = str_replace(get_stylesheet_directory(), '', $file);
    $url = get_theme_file_uri($rel_path);
    wp_enqueue_style($key . '-style', $url, ['wp-edit-blocks'], $version);
  }
}

function frontend()
{
  $files = glob(__DIR__ . '/*/block.css');
  foreach ($files as $file) {
    $version = filemtime($file);
    $key = basename(dirname($file));

    if (strpos($key, 'lazyblock-') !== false) {
      $block_name = str_replace('lazyblock-', 'lazyblock/', $key);
      if (!has_block($block_name)) {
        continue;
      }
    }

    $rel_path = str_replace(get_stylesheet_directory(), '', $file);
    $url = get_theme_file_uri($rel_path);
    wp_enqueue_style($key . '-style', $url, [], $version);
  }
}

function commone_style()
{
  $path = 'assets/commone.css';
  $url = plugins_url($path, __FILE__);
  $path = __DIR__ . '/' . $path;
  if (file_exists($path)) {
    wp_enqueue_style(
      'style-lbu7',
      $url,
      $dep = [],
      $var = filemtime($path)
    );
  }
}


function chg_template_path($template, $attributes, $block, $context)
{
  $plugin_path = sprintf('%s/%s/block.php', __DIR__, $block['slug']);
  if (file_exists($plugin_path)) {
    return $plugin_path;
  }

  return $template;
}
