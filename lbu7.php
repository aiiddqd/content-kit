<?php
/*
* Plugin Name: @ Lazy Blocks by @uptimizt
* Description: Lazy Blocks by @uptimizt
* Author: uptimizt
* GitHub Plugin URI: https://github.com/uptimizt/lbu7
* Version: 0.20220318
*/

namespace uptimizt\LazyBlocks;


add_action('plugins_loaded', function () {
  add_filter('init', __NAMESPACE__ . '\\' . 'load_blocks');
  add_filter('lzb/block_render/include_template', __NAMESPACE__ . '\\' . 'chg_template_path', 10, 4);
  add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\' . 'frontend');
  add_action('enqueue_block_editor_assets', __NAMESPACE__ . '\\' . 'backend');
  add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\' . 'commone_style');
});


function load_blocks()
{
  foreach (get_directories() as $dir_name) {
    $dir_path = sprintf('%s/blocks/%s', __DIR__, $dir_name);
    if (!is_dir($dir_path)) {
      continue;
    }

    $file_path = sprintf('%s/config.php', $dir_path);

    if (!file_exists($file_path)) {
      continue;
    }
    require_once $file_path;
  }
}


function frontend()
{
  foreach (get_directories() as $dir_name) {
    $dir_path = sprintf('%s/blocks/%s', __DIR__, $dir_name);
    if (!is_dir($dir_path)) {
      continue;
    }

    $css_file_path = sprintf('%s/block.css', $dir_path);

    if (!file_exists($css_file_path)) {
      continue;
    }
    $block_css_url = plugins_url(sprintf('blocks/%s/block.css', $dir_name), __FILE__);
    $block_css_version = filemtime($css_file_path);;

    wp_enqueue_style($dir_name . '-style', $block_css_url, [], $block_css_version);
  }
}


function backend()
{
  foreach (get_directories() as $dir_name) {
    $dir_path = sprintf('%s/blocks/%s', __DIR__, $dir_name);
    if (!is_dir($dir_path)) {
      continue;
    }

    $css_file_path = sprintf('%s/block.css', $dir_path);

    if (!file_exists($css_file_path)) {
      continue;
    }
    $block_css_url = plugins_url(sprintf('blocks/%s/block.css', $dir_name), __FILE__);
    $block_css_version = filemtime($css_file_path);;

    wp_enqueue_style($dir_name . '-style', $block_css_url, ['wp-edit-blocks'], $block_css_version);
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


function get_directories()
{
  $directories = scandir(__DIR__ . '/blocks');
  $directories = array_diff($directories, array('..', '.'));
  return $directories;
}
