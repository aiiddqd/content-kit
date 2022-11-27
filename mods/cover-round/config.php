<?php 

add_action( 'after_setup_theme', function(){

    register_block_style(
        'core/cover',
        [
            'name'         => 'cover-round',
            'label'        => 'Round',
            'is_default' => false,
            'inline_style' => '
                .wp-block-cover.is-style-cover-round {
                    border-radius: 3rem;
                }
                
                .wp-block-cover.is-style-cover-round .wp-block-cover__background {
                    border-radius: 3rem;
                }
                ',
        ]
    );
    
});

