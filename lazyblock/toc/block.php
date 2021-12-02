<?php
/**
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

// if(!isset($_GET['dd'])){
    // return;
// }

$post = get_post();

$js_url = plugins_url('html-contents.js', __FILE__);
?>
<div class="lbu7-toc-header"><?= $attributes['header'] ?></div>
<div class="lbu7-toc-separator" style="height:2px"></div>
<div class="lbu7-toc"></div>

<script src="<?= $js_url ?>"></script>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
    htmlContents('.lbu7-toc', {
            top: <?= $attributes['top'] ?>,         // 1-6: biggest header to include in outline
            bottom: <?= $attributes['bottom'] ?>,      // 1-6: smallest header to include in outline
            addIds: true,   // true/false: add ids to H* that don't have them
            addLinks: true, //true/false: add links to outline? 
            listType: '<?= $attributes['type'] ?>',  // 'u' or 'o': (u)nordered or (o)rdered list type
            filter: false   // String or function: CSS style selector to exclude from outline
                            //   or function to filter to pass to Array.filter
        })
    })
    
</script>