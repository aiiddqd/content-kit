<?php 

add_action( 'after_setup_theme', function(){

    register_block_style(
        'core/button',
        [
            'name'         => 'btn-link',
            'label'        => 'Link',
            'is_default' => false,
            'inline_style' => '.wp-block-button.is-style-btn-link .wp-block-button__link {
                background-color: transparent;
                color: var(--wp--preset--color--contrast);
                text-decoration: none;
            }',
        ]
    );
    
});

