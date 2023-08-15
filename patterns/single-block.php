


<?php

/**
 * Title: Single Block
 * Slug: agency-block/single-block
 * Categories: agency-block-patterns
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:30px;padding-bottom:50px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66%","style":{"spacing":{"padding":{"right":"10px"}}}} -->
<div class="wp-block-column" style="padding-right:10px;flex-basis:66%"><!-- wp:post-featured-image /-->

<!-- wp:post-content /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}},"border":{"bottom":{"color":"#2121213b","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-bottom-color:#2121213b;border-bottom-width:1px;padding-top:20px;padding-bottom:20px"><!-- wp:paragraph -->
<p><strong>Tags</strong>:</p>
<!-- /wp:paragraph -->

<!-- wp:tag-cloud {"numberOfTags":4,"smallestFontSize":"14px","largestFontSize":"14px","className":"is-style-default","style":{"typography":{"textTransform":"capitalize"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-comments-form {"className":"comment_form","fontSize":"sm-r"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33%","style":{"spacing":{"padding":{"right":"10px","left":"10px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-right:10px;padding-left:10px;flex-basis:33%"><!-- wp:search {"label":"","buttonText":"Search","buttonUseIcon":true,"backgroundColor":"custom-primary-color"} /-->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"0px","top":"20px"},"padding":{"bottom":"20px"}}}} -->
<h4 class="wp-block-heading" style="margin-top:20px;margin-bottom:0px;padding-bottom:20px">Recent Posts</h4>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"custom-seconday-color"} -->
<hr class="wp-block-separator has-text-color has-custom-seconday-color-color has-alpha-channel-opacity has-custom-seconday-color-background-color has-background" style="margin-top:0px;margin-bottom:0px"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":18,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","width":"100%","align":"left"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:post-title {"level":5,"isLink":true,"style":{"typography":{"textTransform":"capitalize"}}} /-->

<!-- wp:post-date {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:20px"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"0px","top":"20px"},"padding":{"bottom":"20px"}}}} -->
<h4 class="wp-block-heading" style="margin-top:20px;margin-bottom:0px;padding-bottom:20px">Tag Cloud</h4>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"custom-seconday-color"} -->
<hr class="wp-block-separator has-text-color has-custom-seconday-color-color has-alpha-channel-opacity has-custom-seconday-color-background-color has-background" style="margin-top:0px;margin-bottom:0px"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:tag-cloud {"numberOfTags":8,"smallestFontSize":"14px","largestFontSize":"14px"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:20px"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"0px","top":"20px"},"padding":{"bottom":"20px"}}}} -->
<h4 class="wp-block-heading" style="margin-top:20px;margin-bottom:0px;padding-bottom:20px">Categories</h4>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"custom-seconday-color"} -->
<hr class="wp-block-separator has-text-color has-custom-seconday-color-color has-alpha-channel-opacity has-custom-seconday-color-background-color has-background" style="margin-top:0px;margin-bottom:0px"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:categories /-->

<!-- wp:spacer {"height":"24px"} -->
<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"id":136,"width":376,"height":244,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="http://agency-block.local/wp-content/uploads/2023/08/influencer-marketing-job-concept-1024x683.jpg" alt="" class="wp-image-136" style="width:376px;height:244px" width="376" height="244"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->