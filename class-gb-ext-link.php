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
    add_action( 'init', array(__CLASS__, 'assets') );
    add_action( 'enqueue_block_editor_assets', array(__CLASS__, 'block_editor_assets') );
  }

  /**
   * block_editor_assets
   */
  public static function block_editor_assets(){
    /**
     * script
     */
    wp_register_script(
        'gutenberg-ext-link-u7',
        plugins_url( 'assets/main.js', __FILE__ ),
        array(
          'wp-blocks',
          'wp-element',
          'wp-components',
        )
    );
  }

  /**
   * The assets
   */
  public static function assets(){

    register_meta( 'post', 'ext-link-block', array(
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
  }

  /**
   * render_block
   */
  public static function render_block($attributes, $content){
    $value = get_post_meta( get_the_ID(), 'ext-link-block', true );
    $link = untrailingslashit(get_permalink(get_the_ID())) . '/extlink';
    // check value is set before outputting
    if ( $value ) {
        return sprintf( '<a href="%s" target="_blank">ссылка</a>', esc_html( $link ) );
    } else {
        return $content;
    }
  }


}

Ext_Link_Block::init();
