<?php 

if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'title' => 'Post Card Commone',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.5 9C10.12 9 9 10.12 9 11.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5S12.88 9 11.5 9zM20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-3.21 14.21l-2.91-2.91c-.69.44-1.51.7-2.39.7C9.01 16 7 13.99 7 11.5S9.01 7 11.5 7 16 9.01 16 11.5c0 .88-.26 1.69-.7 2.39l2.91 2.9-1.42 1.42z" /></svg>',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/p-card',
        'description' => '',
        'category' => 'widgets',
        'category_label' => 'widgets',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
                'frame' => false,
                'customCSS' => false,
            ),
        ),
        'controls' => array(
            'control_a139f544e4' => array(
                'type' => 'number',
                'name' => 'post_id',
                'default' => '',
                'label' => 'post id',
                'help' => '',
                'child_of' => '',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'true',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'placeholder' => '',
                'characters_limit' => '',
            ),
        ),
        'code' => array(
            'output_method' => 'template',
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => false,
        ),
        'condition' => array(
        ),
    ) );
    
endif;