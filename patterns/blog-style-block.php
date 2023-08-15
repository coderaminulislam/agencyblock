

<?php

/**
 * Title: Blog Style Block
 * Slug: agency-block/block-style-block
 * Categories: agency-block-patterns
 */
?>


<!-- wp:group {"align":"full","style":{"color":{"background":"#f5f5f5"},"spacing":{"padding":{"bottom":"90px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f5f5f5;padding-bottom:90px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"70px","bottom":"60px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:70px;padding-bottom:60px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"custom-heading-black"} -->
<h2 class="wp-block-heading has-text-align-center has-custom-heading-black-color has-text-color" style="font-style:normal;font-weight:300">Our Latest News</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"custom-heading-black","fontSize":"base"} -->
<p class="has-text-align-center has-custom-heading-black-color has-text-color has-base-font-size">Curabitur Semper Dui Diam</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"70px"}} -->
<div class="wp-block-group"><!-- wp:separator {"backgroundColor":"custom-seconday-color","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-custom-seconday-color-color has-alpha-channel-opacity has-custom-seconday-color-background-color has-background is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":17,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"border":{"radius":"5px"}},"backgroundColor":"white","className":"blog_item"} -->
<div class="wp-block-columns blog_item has-white-background-color has-background" style="border-radius:5px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":""}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-title {"textAlign":"center","level":6} /-->

<!-- wp:post-excerpt {"textAlign":"center","moreText":"Read More","excerptLength":22,"fontSize":"sm-r"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->