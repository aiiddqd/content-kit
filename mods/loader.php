<?php

namespace ContentKitBase\Styles\Loader;

$files = glob(__DIR__ . '/*/config.php');
foreach ($files as $file) {
    require_once $file;
}

// add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\frontend');
// // add_action('enqueue_block_editor_assets', __NAMESPACE__ . '\\backend');


// function frontend()
// {
//     $files = glob(__DIR__ . '/*/block.css');
//     foreach ($files as $file) {
//         $key = basename(dirname($file));

//         $block_name = $key;
//         if (!has_block($block_name)) {
//             continue;
//         }

//         $version = filemtime($file);
//         $rel_path = str_replace(get_stylesheet_directory(), '', $file);
//         $url = get_theme_file_uri($rel_path);
//         wp_enqueue_style($key . '-style', $url, [], $version);
//     }
// }

// function backend()
// {
//     $files = glob(__DIR__ . '/*/block.css');
//     foreach ($files as $file) {
//         $version = filemtime($file);
//         $handle = basename(dirname($file));
//         $rel_path = str_replace(get_stylesheet_directory(), '', $file);
//         $url = get_theme_file_uri($rel_path);
//         wp_enqueue_style($handle . '-style', $url, ['wp-edit-blocks'], $version);
//     }
// }
