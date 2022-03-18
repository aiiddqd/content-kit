<?php 

add_action( 'after_setup_theme', function(){
    register_block_style(
        'core/heading',
        array(
            'name'         => 'heading--promo-1',
            'label'        => 'Promo 1',
            'inline_style' => '.is-style-heading--promo-1 {
                font-size: 7rem;
            }',
        )
    );
    
    // unregister_block_style( 'core/button', '3d' );
});

