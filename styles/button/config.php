<?php 

add_action( 'after_setup_theme', function(){
    register_block_style(
        'core/button',
        array(
            'name'         => 'btn-link',
            'label'        => 'Link',
            'inline_style' => '.wp-block-button.is-style-btn-link .wp-block-button__link {}',
        )
    );
    
    // unregister_block_style( 'core/button', '3d' );
});

