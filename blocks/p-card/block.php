<?php

/**
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */


if(isset($args['post_id'])){
    $attributes = $args; // different ways for get block from LB and from get_template_part
}

if(isset($args['post'])){
    $post = get_post($args['post']);
}


if(empty($post)){
  $post = get_post($attributes['post_id']);
}

if(empty($post)){
    return;
}


$data = [
    'url' => get_permalink($post->ID),
    'img_html' => get_the_post_thumbnail( $post, 'thumbnail' ),
    'title' => $post->post_title,
    'excerpt' => get_the_excerpt( $post ),
    'tag_h' => 'h2',
];

if(!empty($attributes['tag_h'])){
    $data['tag_h'] = $attributes['tag_h'];
}



?>
<article class="lb-post-card">

    <?php if(has_post_thumbnail($post)): ?>
    <figure class="post-thumbnail">
        <a href="<?= $data['url'] ?>" rel="bookmark" class="no-lightbox">
            <?= $data['img_html'] ?>
        </a>
    </figure><!-- .featured-image -->
    <?php endif; ?>

    <div class="entry-wrapper">
        <?php do_action('lb-post-card-before-title', $post) ?>
        <<?= $data['tag_h'] ?> class="lb-post-card--title">
            <a href="<?= $data['url'] ?>" rel="bookmark"><?= $data['title'] ?></a>
        </<?= $data['tag_h'] ?>>
        <p><?= $data['excerpt'] ?></p>
        <?php do_action('lb-post-card-after-excerpt', $post) ?>
    </div><!-- .entry-wrapper -->
</article>