<?php

add_action( 'after_setup_theme', function(){

    $css = file_get_contents(__DIR__ . '/style.css');
    register_block_style(
        'core/site-title',
        [
            'name'         => 'badge',
            'label'        => 'Badge',
            'is_default' => false,
            'inline_style' => $css,
        ]
    );
    
});
