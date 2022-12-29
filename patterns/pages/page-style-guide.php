<?php
/**
 * Title: Style guide with logo, colors, buttons ...
 * Slug: ck/page-style-guide
 * Categories: ck-pages
 * Viewport Width: 1280
 */

$logo_base = plugins_url('../../media/logo/wordpress-logotype-wmark.png', __FILE__);
$logo_contrast = plugins_url('../../media/logo/wordpress-logotype-wmark-white.png', __FILE__);

?>
<!-- wp:group {"backgroundColor":"base"} -->
<div class="wp-block-group has-base-background-color has-background">
    <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"small"} -->
    <h2 class="has-small-font-size" style="margin-bottom:20px;text-transform:uppercase">Logo Design</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"id":259,"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"1px"}},"borderColor":"contrast"} -->
            <figure class="wp-block-image size-full has-custom-border"><img
                    src="<?= $logo_base ?>"
                    alt="" class="has-border-color has-contrast-border-color wp-image-259" style="border-width:1px" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"backgroundColor":"contrast"} -->
        <div class="wp-block-column has-contrast-background-color has-background">
            <!-- wp:image {"id":258,"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"1px"}},"borderColor":"contrast"} -->
            <figure class="wp-block-image size-full has-custom-border"><img
            src="<?= $logo_contrast ?>"
                    alt="" class="has-border-color has-contrast-border-color wp-image-258" style="border-width:1px" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"80px"} -->
    <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
    <!-- wp:heading {"align":"wide","style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"small"} -->
    <h2 class="alignwide has-small-font-size" style="margin-bottom:20px;text-transform:uppercase">Colour palette</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"10px"}}} -->
        <div class="wp-block-column">
            <!-- wp:cover {"overlayColor":"base","minHeight":11,"minHeightUnit":"rem","isDark":false} -->
            <div class="wp-block-cover is-light" style="min-height:11rem"><span aria-hidden="true"
                    class="wp-block-cover__background has-base-background-color has-background-dim-100 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph -->
                    <p>Base</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:code -->
                    <pre class="wp-block-code"><code>#ffffff</code></pre>
                    <!-- /wp:code -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"10px"}}} -->
        <div class="wp-block-column"><!-- wp:cover {"overlayColor":"contrast","minHeight":11,"minHeightUnit":"rem"} -->
            <div class="wp-block-cover" style="min-height:11rem"><span aria-hidden="true"
                    class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph -->
                    <p>contrast</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:code -->
                    <pre class="wp-block-code"><code>#212529</code></pre>
                    <!-- /wp:code -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"10px"}}} -->
        <div class="wp-block-column"><!-- wp:cover {"overlayColor":"primary","minHeight":11,"minHeightUnit":"rem"} -->
            <div class="wp-block-cover" style="min-height:11rem"><span aria-hidden="true"
                    class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph -->
                    <p>primary</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:code -->
                    <pre class="wp-block-code"><code>#0d6efd</code></pre>
                    <!-- /wp:code -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"10px"}}} -->
        <div class="wp-block-column"><!-- wp:cover {"overlayColor":"secondary","minHeight":11,"minHeightUnit":"rem"} -->
            <div class="wp-block-cover" style="min-height:11rem"><span aria-hidden="true"
                    class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph -->
                    <p>secondary</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:code -->
                    <pre class="wp-block-code"><code>#6c757d</code></pre>
                    <!-- /wp:code -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"10px"}}} -->
        <div class="wp-block-column"><!-- wp:cover {"overlayColor":"tertiary","minHeight":11,"minHeightUnit":"rem"} -->
            <div class="wp-block-cover" style="min-height:11rem"><span aria-hidden="true"
                    class="wp-block-cover__background has-tertiary-background-color has-background-dim-100 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph -->
                    <p>tertiary</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:code -->
                    <pre class="wp-block-code"><code>#198754</code></pre>
                    <!-- /wp:code -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"80px"} -->
    <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
        <div class="wp-block-column" style="flex-basis:70%">
            <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"small"} -->
            <h2 class="has-small-font-size" style="margin-bottom:20px;text-transform:uppercase">Outfit Regular / Light
            </h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"fontSize":"x-large"} -->
            <h2 class="has-x-large-font-size">Sample Heading</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Enimin veniam, quis nostrud exercitation ullamco laboris nisi aliquip taylora
                commodo consequat. Duis aute irure dolor in voluptate velitar esse cillum dolore eu fugiat nulla
                pariatur.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><a href="#">This is a sample link</a>.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"30%"} -->
        <div class="wp-block-column" style="flex-basis:30%">
            <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"small"} -->
            <h2 class="has-small-font-size" style="margin-bottom:20px;text-transform:uppercase">Buttons</h2>
            <!-- /wp:heading -->

            <!-- wp:buttons {"style":{"spacing":{"blockGap":"10px"}}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"primary","textColor":"background","width":100,"className":"is-style-fill"} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a
                        class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background wp-element-button">Primary</a>
                </div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"secondary","textColor":"background","width":100} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100"><a
                        class="wp-block-button__link has-background-color has-secondary-background-color has-text-color has-background wp-element-button">Secondary</a>
                </div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"tertiary","textColor":"background","width":100} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100"><a
                        class="wp-block-button__link has-background-color has-tertiary-background-color has-text-color has-background wp-element-button">Tertiary</a>
                </div>
                <!-- /wp:button -->

                <!-- wp:button {"width":100,"className":"is-style-outline"} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a
                        class="wp-block-button__link wp-element-button">Outline</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"80px"} -->
    <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->