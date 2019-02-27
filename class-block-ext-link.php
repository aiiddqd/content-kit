<?php


namespace uptimizt;
/**
 * Ext_Link_U7 Core Class
 */
final class Ext_Link_Block
{
  /**
   * The init
   */
  public static function init()
  {
    add_action( 'init', function(){

      register_meta( 'post', 'ext-link-block', array(
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
      ));
      register_meta( 'post', 'ext-link-block-title', array(
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
      ));

      /**
       * editor style
       */
      wp_register_style(
        'gutenberg-ext-link-u7-style-editor',
        plugins_url( 'assets/style.css', __FILE__ ),
        array( 'wp-edit-blocks' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'assets/editor.css' )
      );

      /**
       * frontend style
       */
      wp_register_style(
        'gutenberg-ext-link-u7-style',
        plugins_url( 'assets/style.css', __FILE__ ),
        array( 'wp-edit-blocks' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'assets/style.css' )
      );

      /**
       * Register the block
       */
      register_block_type( 'gb-u7/ext-link', array(
        'editor_script' => 'gutenberg-ext-link-u7',
        'editor_style' => 'gutenberg-ext-link-u7-style-editor',
        'style' => 'gutenberg-ext-link-u7-style',
        'render_callback' => array(__CLASS__, 'render_block'),
      ));

      wp_register_script(
          'gutenberg-ext-link-u7',
          plugins_url( 'assets/main.js', __FILE__ ),
          array(
            'wp-blocks',
            'wp-element',
            'wp-components',
          ),
          $ver = filemtime( plugin_dir_path( __FILE__ ) . 'assets/main.js' )
      );
    });

  }

  /**
   * render_block
   */
  public static function render_block($attributes, $content){

    $value = get_post_meta( get_the_ID(), 'ext-link-block', true );
    $title = get_post_meta( get_the_ID(), 'ext-link-block-title', true );
    if(empty($title)){
      $title = sprintf('Ссылка: <br/>%s', $value);
    }

    $link = untrailingslashit(get_permalink(get_the_ID())) . '/extlink';

    if ( $value ) {
        return sprintf(
          '<noindex><div>
            <a href="%s" target="_blank" rel="nofollow">%s</a>
          </div></noindex>',
          esc_html( $link ),
          $title
        );
    } else {
        return $content;
    }
  }

}

Ext_Link_Block::init();
