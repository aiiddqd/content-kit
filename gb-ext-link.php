<?php
/*
* Plugin Name: External Link Block
* Description: external link block for Gutenberg WordPress Editor
* Author: uptimizt
* Author URI: https://github.com/uptimizt
* Version: 0.2
* Lang: ext_link_u7
*/

namespace uptimizt;

/**
 * Ext_Link_Core
 */
final class Ext_Link_Core
{
  /**
   * Endpoint key
   */
  public static $ep_key = 'extlink';

  /**
   * meta_key_link
   */
  public static $meta_key_link = 'ext-link-block';

  /**
   * The init
   */
  public static function init()
  {
    add_action('plugins_loaded', function(){
      require_once 'class-gb-ext-link.php';
    });

    add_action('init', array(__CLASS__, 'add_rewrite_endpoint'));

    add_action( 'template_redirect', array(__CLASS__, 'redirect_url'));

  }


  /**
   * redirect_url
   */
  public static function redirect_url(){

    if( ! is_singular()){
      return;
    }

    $check = get_query_var(self::$ep_key, false);

    if('' !== $check){
      return;
    }

    $post_id = get_the_ID();

    $url = get_post_meta($post_id, self::$meta_key_link, true);
    $url = wp_specialchars_decode($url);

    //Уточняем число переходов в метаполе если адрес есть и будет переход
    if( ! empty($url) ){

      $count = get_post_meta($post_id, 'wcpee_count', true);
      if( ! empty($count) ) {
        update_post_meta($post_id, 'wcpee_count', (int)$count +1);
      } else {
        update_post_meta($post_id, 'wcpee_count', 1);
      }

      wp_redirect($url, 301);
      exit;

    } else {

      wp_redirect(home_url(), 302);
      exit;

    }
  }

  /**
   * add_rewrite_endpoint
   */
  public static function add_rewrite_endpoint() {
    add_rewrite_endpoint( self::$ep_key, EP_PERMALINK | EP_PAGES );
  }
}

Ext_Link_Core::init();
