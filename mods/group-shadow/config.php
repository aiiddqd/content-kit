<?php 

add_action( 'after_setup_theme', function(){

    register_block_style(
        'core/group',
        [
            'name'         => 'group-shadow',
            'label'        => 'Group Shadow',
            'is_default' => false,
            'inline_style' => '
                .is-style-group-shadow {
                    box-shadow: rgb(0 0 0 / 50%) 0px 0px 70px 0px;
                }
                ',
        ]
    );
    
});

