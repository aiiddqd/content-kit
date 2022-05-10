<?php

add_action('init', function () {

    $args = [
        'title'       => 'Cover 1',
        'description' => 'The main cover image',
        'categories'  => ['bbds', 'text'],
        'keywords'    => ['cover', 'head', 'title'],
        'content'     => '',
    ];

    $slug = basename(dirname(__FILE__));
    $path = __DIR__ . '/pattern.php';
    ob_start();
    include_once $path;
    $pattern = ob_get_clean();

    $args['content'] = wp_kses_post($pattern);
    register_block_pattern('bbds/' . $slug, $args);
});
