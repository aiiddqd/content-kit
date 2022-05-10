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
    
    register_block_style(
        'core/heading',
        array(
            'name'         => 'heading--promo-2',
            'label'        => 'Promo 2',
            'inline_style' => '.is-style-heading--promo-2:before {
                    content: "";
                    display: block;
                    width: 8px;
                    height: 8px;
                    margin-bottom: 28px;
                    border-radius: 50%;
                    background: var(--p2-color-green);
            }',
        )
    );
    
    // unregister_block_style( 'core/button', '3d' );
});

