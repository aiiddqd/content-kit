<?php
/**
 * Title: Banner with text, overlay and image background
 * Slug: ck/banner-text-overlay-and-image-background
 * Categories: ck-media
 */

$media_url = plugins_url('../../media/bg/3557932377_ecc738545d_c.jpg', __FILE__);

?>
<!-- wp:cover {"url":"<?= $media_url ?>","id":239,"customGradient":"linear-gradient(271deg,rgba(0,0,0,0) 27%,rgb(63,37,20) 62%)","align":"wide","className":"is-style-default","style":{"color":{"duotone":"unset"},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignwide is-style-default"
    style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
    <span aria-hidden="true"
        class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient"
        style="background:linear-gradient(271deg,rgba(0,0,0,0) 27%,rgb(63,37,20) 62%)"></span><img
        class="wp-block-cover__image-background wp-image-239" alt=""
        src="<?= $media_url ?>"
        data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
        <h2 class="has-text-align-left has-x-large-font-size" style="font-style:normal;font-weight:700">Equip your
            office <br>with modern tech</h2>
        <!-- /wp:heading -->
    </div>
</div>
<!-- /wp:cover -->