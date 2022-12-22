<?php

add_action('init', function () {

    $css = '
    p.is-style-belove-header {
        color: var(--wp--preset--color--foreground);
        font-size: 1.2rem;
    }
    ';
    register_block_style(
        'core/paragraph',
        [
            'name'         => 'belove-header',
            'label'        => 'Belove header',
            'is_default' => false,
            'inline_style' => $css,
        ]
    );
    
}, 33);
