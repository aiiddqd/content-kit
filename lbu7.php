<?php
/*
* Plugin Name: @ Lazy Blocks by @uptimizt
* Description: Lazy Blocks by @uptimizt
* Author: uptimizt
* GitHub Plugin URI: https://github.com/uptimizt/lbu7
* Version: 0.20220122
*/

namespace uptimizt;

/**
 * Description class
 */
class LazyBlocks
{

  /**
   * The init
   */
  public static function init()
  {

    add_action('init', function () {
      // require_once __DIR__ . '/lazyblock/url-source/config.php';
      // require_once __DIR__ . '/lazyblock/toc/config.php';
      foreach (self::get_directories() as $dir_name) {
        $dir_path = sprintf('%s/lazyblock/%s',__DIR__, $dir_name);
        if (!is_dir($dir_path)) {
          continue;
        }
    
        $file_path = sprintf('%s/config.php', $dir_path);
  
        if (!file_exists($file_path)) {
          continue;
        }
        require_once $file_path;
      }
    });

    add_filter('lzb/block_render/include_template', [__CLASS__, 'chg_template_path'], 10, 4);

    add_action('wp_enqueue_scripts', [__CLASS__, 'frontend']);
    add_action('wp_enqueue_scripts', [__CLASS__, 'commone_style']);
    add_action('enqueue_block_editor_assets', [__CLASS__, 'backend']);
  }


  public static function frontend(){
  
    foreach (self::get_directories() as $dir_name) {
      $dir_path = sprintf('%s/lazyblock/%s',__DIR__, $dir_name);
      if (!is_dir($dir_path)) {
        continue;
      }
  
      $css_file_path = sprintf('%s/block.css', $dir_path);

      if (!file_exists($css_file_path)) {
        continue;
      }
      $block_css_url = plugins_url(sprintf('lazyblock/%s/block.css', $dir_name), __FILE__ );
      $block_css_version = filemtime($css_file_path);;
  
      wp_enqueue_style($dir_name . '-style', $block_css_url, [], $block_css_version);
    }
  }


  public static function backend(){
  
    foreach (self::get_directories() as $dir_name) {
      $dir_path = sprintf('%s/lazyblock/%s',__DIR__, $dir_name);
      if (!is_dir($dir_path)) {
        continue;
      }
  
      $css_file_path = sprintf('%s/block.css', $dir_path);

      if (!file_exists($css_file_path)) {
        continue;
      }
      $block_css_url = plugins_url(sprintf('lazyblock/%s/block.css', $dir_name), __FILE__ );
      $block_css_version = filemtime($css_file_path);;
  
      wp_enqueue_style($dir_name . '-style', $block_css_url, ['wp-edit-blocks'], $block_css_version);
    }
  }


  public static function commone_style()
  {
    $path = 'lazyblock/style.css';
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


  public static function chg_template_path($template, $attributes, $block, $context)
  {
    $plugin_path = sprintf('%s/%s/block.php', __DIR__, $block['slug']);
    if (file_exists($plugin_path)) {
      return $plugin_path;
    }

    return $template;
  }


  public static function get_directories(){
    $directories = scandir(__DIR__ . '/lazyblock');
    $directories = array_diff($directories, array('..', '.'));
    return $directories;
  }
}


LazyBlocks::init();
