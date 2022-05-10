<?php 

namespace ContentKitBase\Styles\Shadows;

use function ContentKitBase\add_style;

const STYLE_HANDLE = 'block-styles-shadows';

//.is-style-shadow-round-1rem
add_style('shadow-round-1rem', [
    'label' => 'Shadow & round: 1rem',
    'style_handle' => STYLE_HANDLE,
    'blocks' => [
        'core/quote',
        'core/cover',
    ],
]);



add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\add_assets');
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\add_assets');

function add_assets(){
    if($file = glob(__DIR__ . '/style.css')){
        $file = $file[0];
        $url = plugins_url('style.css', $file);
        $version = filemtime($file);
        wp_register_style( STYLE_HANDLE, $url, [], $version );
    }
}


// register_block_style(
//     'core/cover',
//     array(
//         'name'         => 'shadow-1rem-round',
//         'label'        => 'Shadow & 1rem round',
//         'is_default'   => false,
//         'style_handle' => 'block-styles-shadows',
//         // 'inline_style' => '.is-style-shadow1 { box-shadow: 0 1px 3px 0 #0000001a; }',
//     )
// );

