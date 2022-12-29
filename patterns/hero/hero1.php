<?php
/**
 * Title: Hero: cover, header, subheader, buttons, media with shadow #1
 * Slug: ck/hero1
 * Categories: ck-hero
 * Reference: https://github.com/uptimizt/content-kit/issues/1
 */

$media_url = plugins_url('../../media/screenshot/gutenberg.png', __FILE__);

?>

<!-- wp:cover {"dimRatio":0,"isDark":false,"align":"wide","className":"is-style-default","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}}} -->
<div class="wp-block-cover alignwide is-light is-style-default"
    style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><span aria-hidden="true"
        class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"3rem","fontStyle":"normal","fontWeight":"700"}}} -->
                <h2 class="has-text-align-left" style="font-size:3rem;font-style:normal;font-weight:700">Improve your
                    WordPress site with Gutenberg &amp; ContentKit</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"1.5rem"}},"textColor":"gray-600","className":"is-style-default"} -->
                <p class="has-text-align-left is-style-default has-gray-600-color has-text-color"
                    style="font-size:1.5rem">Use patterns, style-modifiers and CSS-utilities</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"className":"is-style-fill"} -->
                    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"
                            href="#">Demo</a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"
                            href="#" target="_blank"
                            rel="noreferrer noopener">GitHub</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"is-style-group-shadow","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-group-shadow">
                    <!-- wp:image {"id":221,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img
                            src="<?= $media_url ?>"
                            alt="" class="wp-image-221" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
</div>
<!-- /wp:cover -->