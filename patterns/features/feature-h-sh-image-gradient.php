patterns/features/.php
<?php
/**
 * Title: Features: header, above header, subheader, link, image
 * Slug: ck/feature-h-sh-image-gradient
 * Categories: ck-features
 */

$media_url = plugins_url('../../media/screenshot/gutenberg.png', __FILE__);


?>
<!-- wp:media-text {"mediaPosition":"right","mediaId":27,"mediaLink":"#","mediaType":"image","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"color":{"gradient":"linear-gradient(180deg,rgb(255,255,255) 0%,rgb(219,234,254) 100%)"}}} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile has-background"
    style="background:linear-gradient(180deg,rgb(255,255,255) 0%,rgb(219,234,254) 100%);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
    <div class="wp-block-media-text__content">
        <!-- wp:paragraph {"className":"is-style-above-header"} -->
        <p class="is-style-above-header">color palette</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading -->
        <h2>Extended the color palette for your project</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>like <a href="#" target="_blank" rel="noreferrer noopener">TailwindCSS</a></p>
        <!-- /wp:paragraph -->
    </div>
    <figure class="wp-block-media-text__media"><img src="<?= $media_url ?>" alt="" class="wp-image-27 size-full" />
    </figure>
</div>
<!-- /wp:media-text -->