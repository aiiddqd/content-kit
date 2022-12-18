<?php
/**
 * Title: Page micro landing
 * Slug: content-kit/page-micro-landing
 * Categories: pages
 */
$logo_url = plugins_url('../../media/logo/wordpress.svg', __FILE__);
?>

<!-- wp:cover {"dimRatio":0,"overlayColor":"base","minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"wide"} -->
<div class="wp-block-cover alignwide is-light" style="min-height:100vh"><span aria-hidden="true"
        class="wp-block-cover__background has-base-background-color has-background-dim-0 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"0","bottom":"var:preset|spacing|80","left":"0"}}},"backgroundColor":"white","className":"is-style-default","layout":{"type":"constrained","contentSize":"550px","wideSize":"1024px"}} -->
        <div class="wp-block-group is-style-default has-white-background-color has-background"
            style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0">

            <!-- wp:image {"align":"center","id":215,"width":128,"height":128,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-large is-resized"><img
                    src="<?= $logo_url ?>" alt=""
                    class="wp-image-215" width="128" height="128" /></figure>
            <!-- /wp:image -->
            <!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} /-->

            <!-- wp:site-tagline {"textAlign":"center"} /-->

            <!-- wp:spacer {"height":"20px"} -->
            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"vertical"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"width":100} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100"><a
                        class="wp-block-button__link wp-element-button">Watch my latest videos</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"width":100} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100"><a
                        class="wp-block-button__link wp-element-button">Buy merch</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"width":100} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100"><a
                        class="wp-block-button__link wp-element-button">Support me on Patreon</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"width":100,"className":"is-style-fill"} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a
                        class="wp-block-button__link wp-element-button">Get tickets for my show</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:social-links {"iconColor":"black","iconColorValue":"#000000","iconBackgroundColor":"white","iconBackgroundColorValue":"#ffffff","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
            <ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color"
                style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
                <!-- wp:social-link {"url":"https://wordpress.org/patterns/","service":"instagram"} /-->

                <!-- wp:social-link {"url":"https://wordpress.org/patterns/","service":"bandcamp"} /-->

                <!-- wp:social-link {"url":"https://wordpress.org/patterns/","service":"twitter"} /-->

                <!-- wp:social-link {"url":"https://wordpress.org/patterns/","service":"twitch"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->