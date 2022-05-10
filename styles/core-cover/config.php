<?php 

add_action('init', function(){

    $path = '/style.css';
    $url = plugins_url($path, __FILE__);
    $version = filemtime(__DIR__ . $path);
    wp_register_style( 'bbds-cover-styles', $url, [], $version );
});


add_action( 'after_setup_theme', function(){

    register_block_style(
        'core/cover',
        array(
            'name'         => 'cover-radius-1rem',
            'label'        => 'Cover Radius 1rem',
            'style_handle' => 'bbds-cover-styles',
        )
    );

    register_block_style(
        'core/cover',
        array(
            'name'         => 'cover-radius-3rem',
            'label'        => 'Cover Radius 3rem',
            'style_handle' => 'bbds-cover-styles',
        )
    );
});
