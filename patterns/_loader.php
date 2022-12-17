<?php

namespace ContentKit\Patterns\Loader;


/**
 * load patterns with config
 */
$configs = glob(__DIR__ . '/*/config.php');
foreach ($configs as $config) {
    require_once $config;
}

add_action('init', function () {
    $categories = [
        'hero' => [
            'label' => 'Hero'
        ],
        'media' => [
            'label' => 'Media'
        ],
    ];
    foreach($categories as $key => $args){
        register_block_pattern_category(
            $key,
            $args
        );
    }
    
    
});

/**
 * Load simple patterns
 * example https://developer.wordpress.org/reference/functions/_register_theme_block_patterns/
 */
add_action('init', function () {
    $default_headers = array(
        'title' => 'Title',
        'slug' => 'Slug',
        'description' => 'Description',
        'viewportWidth' => 'Viewport Width',
        'categories' => 'Categories',
        'keywords' => 'Keywords',
        'blockTypes' => 'Block Types',
        'postTypes' => 'Post Types',
        'inserter' => 'Inserter',
    );

    $patterns = glob(__DIR__ . '/*.php');
    foreach ($patterns as $pattern) {
        if (str_contains($pattern, '_loader.php')) {
            continue;
        }

        $pattern_data = get_file_data($pattern, $default_headers);
        if (\WP_Block_Patterns_Registry::get_instance()->is_registered($pattern_data['slug'])) {
            continue;
        }
        // For properties of type array, parse data as comma-separated.
        foreach (array('categories', 'keywords', 'blockTypes', 'postTypes') as $property) {
            if (!empty($pattern_data[$property])) {
                $pattern_data[$property] = array_filter(
                    preg_split(
                        '/[\s,]+/',
                        (string) $pattern_data[$property]
                    )
                );
            } else {
                unset($pattern_data[$property]);
            }
        }

        // Parse properties of type int.
        foreach (array('viewportWidth') as $property) {
            if (!empty($pattern_data[$property])) {
                $pattern_data[$property] = (int) $pattern_data[$property];
            } else {
                unset($pattern_data[$property]);
            }
        }

        // Parse properties of type bool.
        foreach (array('inserter') as $property) {
            if (!empty($pattern_data[$property])) {
                $pattern_data[$property] = in_array(
                    strtolower($pattern_data[$property]),
                    array('yes', 'true'),
                    true
                );
            } else {
                unset($pattern_data[$property]);
            }
        }

        // The actual pattern content is the output of the file.
        ob_start();
        include $pattern;
        $pattern_data['content'] = ob_get_clean();
        if (!$pattern_data['content']) {
            continue;
        }

        register_block_pattern($pattern_data['slug'], $pattern_data);

    }

});

