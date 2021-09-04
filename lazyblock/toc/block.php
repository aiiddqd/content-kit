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
if(empty($post->ID)){
    return;
}

$blocks = parse_blocks(get_the_content());

function toc_filter_blocks($blocks){
    $blocks_for_table = [];
    foreach($blocks as $block){
        if(strpos($block['innerHTML'], '<h2') !== false){
            $blocks_for_table[] = $block;
        }
        if(strpos($block['innerHTML'], '<h3') !== false){
            $blocks_for_table[] = $block;
        }

        if(!empty($block['innerBlocks'])){
            $inner_blocks = toc_filter_blocks($block['innerBlocks']);
            foreach($inner_blocks as $ib){
                $blocks_for_table[] = $ib;
            }
        }
        
    }

    return $blocks_for_table;
}

$blocks = toc_filter_blocks($blocks);
// dd($blocks);
?>
<div class="lbu7-toc">
    <?= 134 ?>
</div>