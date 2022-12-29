<?php
/**
 * Title: Parallax image
 * Slug: ck/parallax-image
 * Categories: ck-media
 */

$media_url = plugins_url('../../media/bg/Hai_Van_Pass_ocean_view.jpeg', __FILE__);

?>

<!-- wp:cover {"url":"<?= $media_url ?>","id":243,"hasParallax":true,"dimRatio":50,"minHeight":80,"minHeightUnit":"vh","isDark":false,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="margin-top:0;margin-bottom:0;min-height:80vh"><span
        aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
    <div role="img" class="wp-block-cover__image-background wp-image-243 has-parallax"
        style="background-position:50% 50%;background-image:url(<?= $media_url ?>)">
    </div>
    <div class="wp-block-cover__inner-container">
        <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
        <!-- /wp:paragraph -->
    </div>
</div>
<!-- /wp:cover -->