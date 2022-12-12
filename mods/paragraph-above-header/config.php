<?php

add_action( 'init', function(){

    $css = file_get_contents(__DIR__ . '/style.css');
    register_block_style(
        'core/paragraph',
        [
            'name'         => 'above-header',
            'label'        => 'Above header',
            'is_default' => false,
            'inline_style' => $css,
        ]
    );
    
}, 33);
