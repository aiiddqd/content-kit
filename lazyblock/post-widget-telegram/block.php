<?php

/**
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

$url = $attributes['url'];
$url_parts = wp_parse_url($url);
$path = ltrim( $url_parts['path'], '/' );

// echo 1;
?>
<div class="lb-telegram-widget">
    <script async src="https://telegram.org/js/telegram-widget.js?15" data-telegram-post="<?= $path ?>" data-width="100%" data-userpic="false">
    </script>
</div>