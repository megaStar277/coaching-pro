<?php
/**
 * Coaching Pro - One-Click Theme Setup - Contact page content.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Coaching Pro
 * @author  brandiD
 */

// Get default images.
$coachingpro_contact1 = CHILD_URL . '/config/import/images/demo-contact-1.jpg';
$coachingpro_contact2 = CHILD_URL . '/config/import/images/demo-homepage-hero.jpg';

// Output page content.
return <<<CONTENT
<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-equal","align":"wide","marginTop":50,"paddingRight":30,"paddingLeft":30} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal alignwide" style="margin-top:50px;padding-right:30px;padding-left:30px"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner"><!-- wp:heading {"level":3,"textColor":"colortwo"} -->
<h3 class="has-colortwo-color has-text-color">We're here to help</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"textcolorone","fontSize":"small"} -->
<p class="has-textcolorone-color has-text-color"><strong>Note:</strong> This form is for demonstration purposes only. This is not a working form.</p>
<!-- /wp:paragraph -->

<!-- wp:wpforms/form-selector {} /--></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"columnVerticalAlignment":"top"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-top"><div class="gb-block-layout-column-inner"><!-- wp:image {"sizeSlug":"full","linkDestination":"media","className":"is-style-roundedcorners"} -->
<figure class="wp-block-image size-full is-style-roundedcorners"><img src="$coachingpro_contact1" alt="" class="wp-image-9999"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"media","className":"is-style-roundedcorners"} -->
<figure class="wp-block-image size-large is-style-roundedcorners"><img src="$coachingpro_contact2" alt="" class="wp-image-9999"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
CONTENT;
