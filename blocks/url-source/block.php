<?php
/**
 * Example Block Template.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>
<div class="my-test-block">
    <?php printf('<a href="%s" target="_blank">%s</a>', esc_html( $attributes['url'] ), esc_html( $attributes['text'] )); ?>
</div>