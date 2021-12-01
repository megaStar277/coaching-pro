<?php
/**
 * Coaching Pro - One-Click Theme Setup - Services page content.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Coaching Pro
 */

$home_url = get_bloginfo( 'url' );

// Get default images.
$coachingpro_services_1 = CHILD_URL . '/config/import/images/demo-services-1.jpg';
$coachingpro_services_2 = CHILD_URL . '/config/import/images/demo-services-2.jpg';
$coachingpro_services_3 = CHILD_URL . '/config/import/images/demo-services-3.jpg';
$coachingpro_services_4 = CHILD_URL . '/config/import/images/demo-services-4.jpg';
$coachingpro_services_5 = CHILD_URL . '/config/import/images/demo-services-5.jpg';
$coachingpro_services_6 = CHILD_URL . '/config/import/images/demo-services-6.jpg';

// Output page content.
return <<<CONTENT
<!-- wp:genesis-blocks/gb-columns {"columns":1,"layout":"one-column","align":"full","padding":40,"paddingTop":80,"paddingRight":40,"paddingBottom":80,"paddingLeft":40,"backgroundColor":"white","columnMaxWidth":1000} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column has-white-background-color gb-columns-center alignfull" style="padding-top:80px;padding-right:40px;padding-bottom:80px;padding-left:40px"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1000px"><!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:heading {"style":{"typography":{"fontSize":"52px","fontWeight":"500"}},"textColor":"textcolortwo"} -->
<h2 class="has-textcolortwo-color has-text-color" style="font-size:52px;font-weight:500">Services</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"textColor":"colortwo","fontSize":"large"} -->
<h3 class="has-colortwo-color has-text-color has-large-font-size">Morbi Tristique Senectus et Netus et Malesuada</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"textcolorone"} -->
<p class="has-textcolorone-color has-text-color">Aliquam purus sit amet luctus venenatis lectus magna fringilla.</p>
<!-- /wp:paragraph -->

<!-- wp:genesis-blocks/gb-columns {"columns":3,"layout":"gb-3-col-equal","columnsGap":4,"marginTop":40} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-3 gb-3-col-equal" style="margin-top:40px"><div class="gb-layout-column-wrap gb-block-layout-column-gap-4 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-roundedcorners"} -->
<div class="wp-block-image is-style-roundedcorners"><figure class="aligncenter size-full"><img src="$coachingpro_services_1" alt="" class="wp-image-9999"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4,"textColor":"colortwo"} -->
<h4 class="has-text-align-left has-colortwo-color has-text-color"><strong>Nec feugiat nisl pretium</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"textcolorone"} -->
<p class="has-text-align-left has-textcolorone-color has-text-color">Viverra orci sagittis eu volutpat odio. Orci sagittis eu volutpat odio facilisis mauris. Aliquam nulla facilisi cras.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-roundedcorners"} -->
<div class="wp-block-image is-style-roundedcorners"><figure class="aligncenter size-full"><img src="$coachingpro_services_2" alt="" class="wp-image-9999"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4,"textColor":"colortwo"} -->
<h4 class="has-text-align-left has-colortwo-color has-text-color"><strong>Ut aliquam purus sit amet</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"textcolorone"} -->
<p class="has-text-align-left has-textcolorone-color has-text-color">Viverra orci sagittis eu volutpat odio. Orci sagittis eu volutpat odio facilisis mauris. Aliquam nulla facilisi cras.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-roundedcorners"} -->
<div class="wp-block-image is-style-roundedcorners"><figure class="aligncenter size-full"><img src="$coachingpro_services_3" alt="" class="wp-image-9999"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4,"textColor":"colortwo"} -->
<h4 class="has-text-align-left has-colortwo-color has-text-color"><strong>Dictumst quisque sagittis</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"textcolorone"} -->
<p class="has-text-align-left has-textcolorone-color has-text-color">Viverra orci sagittis eu volutpat odio. Orci sagittis eu volutpat odio facilisis mauris. Aliquam nulla facilisi cras.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"columns":3,"layout":"gb-3-col-equal","columnsGap":4,"marginTop":40} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-3 gb-3-col-equal" style="margin-top:40px"><div class="gb-layout-column-wrap gb-block-layout-column-gap-4 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-roundedcorners"} -->
<div class="wp-block-image is-style-roundedcorners"><figure class="aligncenter size-full"><img src="$coachingpro_services_4" alt="" class="wp-image-9999"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4,"textColor":"colortwo"} -->
<h4 class="has-text-align-left has-colortwo-color has-text-color"><strong>Viverra accumsan in nisl</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"textcolorone"} -->
<p class="has-text-align-left has-textcolorone-color has-text-color">Viverra orci sagittis eu volutpat odio. Orci sagittis eu volutpat odio facilisis mauris. Aliquam nulla facilisi cras.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-roundedcorners"} -->
<div class="wp-block-image is-style-roundedcorners"><figure class="aligncenter size-full"><img src="$coachingpro_services_5" alt="" class="wp-image-9999"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4,"textColor":"colortwo"} -->
<h4 class="has-text-align-left has-colortwo-color has-text-color"><strong>Convallis a cras semper</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"textcolorone"} -->
<p class="has-text-align-left has-textcolorone-color has-text-color">Viverra orci sagittis eu volutpat odio. Orci sagittis eu volutpat odio facilisis mauris. Aliquam nulla facilisi cras.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-roundedcorners"} -->
<div class="wp-block-image is-style-roundedcorners"><figure class="aligncenter size-full"><img src="$coachingpro_services_6" alt="" class="wp-image-9999"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4,"textColor":"colortwo"} -->
<h4 class="has-text-align-left has-colortwo-color has-text-color"><strong>At tempor commodo ulla</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"textcolorone"} -->
<p class="has-text-align-left has-textcolorone-color has-text-color">Viverra orci sagittis eu volutpat odio. Orci sagittis eu volutpat odio facilisis mauris. Aliquam nulla facilisi cras.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:buttons {"contentJustification":"center"} -->
<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"colortwo","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link has-colortwo-background-color has-background" href="#">Button</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"columns":1,"layout":"one-column","align":"full","padding":40,"paddingTop":80,"paddingRight":40,"paddingBottom":40,"paddingLeft":40,"backgroundColor":"bgcolorone","columnMaxWidth":800} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column has-bgcolorone-background-color gb-columns-center alignfull" style="padding-top:80px;padding-right:40px;padding-bottom:40px;padding-left:40px"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:800px"><!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:heading {"style":{"typography":{"fontSize":"52px"}},"textColor":"textcolortwo"} -->
<h2 class="has-textcolortwo-color has-text-color" style="font-size:52px">What people are saying</h2>
<!-- /wp:heading -->

<!-- wp:social-proof-slider/main {"showfeaturedimages":true,"imageborderradius":50,"showarrows":true,"showdots":true,"padding":0,"arrowscolor":"#d46a43","arrowshovercolor":"#6e6872","dotscolor":"#d46a43","dotshovercolor":"#6e6872","authornamecolor":"#d46a43"} /--></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->
CONTENT;
