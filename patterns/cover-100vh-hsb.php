<?php
/**
 * Title: Cover 100vh-hsb
 * Description: Cover height 100vh, header, subheader and button
 * Slug: content-kit/cover-100vh-hsb
 * Categories: cover
 */

$cover_url = plugins_url('/_media/banner-nature.jpg', __FILE__);

?>
<!-- wp:cover {"url":"<?= $cover_url ?>","id":39,"dimRatio":10,"overlayColor":"base","minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:100vh"><span aria-hidden="true"
        class="wp-block-cover__background has-base-background-color has-background-dim-10 has-background-dim"></span><img
        class="wp-block-cover__image-background wp-image-39" alt=""
        src="<?= $cover_url ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"textAlign":"center","level":1,"textColor":"primary"} -->
        <h1 class="has-text-align-center has-primary-color has-text-color">Title Page</h1>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","textColor":"tertiary"} -->
        <h2 class="has-text-align-center has-tertiary-color has-text-color">Sub heading</h2>
        <!-- /wp:heading -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Call to Action</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

    </div>
</div>
<!-- /wp:cover -->