<?php
/**
 * Coaching Pro - One-Click Theme Setup - About page content.
 *
 * Visit Genesis > Child Theme Setup to trigger import.
 *
 * @package Coaching Pro
 */

// Get default images.
$coachingpro_img_hero = CHILD_URL . '/config/import/images/demo-about-hero.jpg';

// Output page content.
return <<<CONTENT
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-roundedcorners"} -->
<figure class="wp-block-image size-full is-style-roundedcorners"><img src="$coachingpro_img_hero" alt="" class="wp-image-9999"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textColor":"textcolortwo"} -->
<h2 class="has-textcolortwo-color has-text-color">Lorem ipsum dolor sit amet</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Mauris in aliquam sem fringilla ut morbi tincidunt. Viverra adipiscing at in tellus. Quis vel eros donec ac odio tempor orci dapibus ultrices. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Integer enim neque volutpat ac tincidunt vitae semper. Morbi tempus iaculis urna id. Velit egestas dui id ornare arcu odio ut sem.</p>
<!-- /wp:paragraph -->

<!-- wp:genesis-blocks/gb-columns {"columns":1,"layout":"one-column","paddingTop":20,"paddingRight":20,"paddingBottom":16,"paddingLeft":20,"backgroundColor":"bgcolortwo"} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column has-bgcolortwo-background-color" style="padding-top:20px;padding-right:20px;padding-bottom:16px;padding-left:20px"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"30px"}},"textColor":"colortwo"} -->
<h3 class="has-text-align-center has-colortwo-color has-text-color" style="font-size:30px">"<br>Dignissim sodales ut eu sem integer. Risus nullam eget felis eget nunc lobortis mattis aliquam.</h3>
<!-- /wp:heading --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph -->
<p>Ut aliquam purus sit amet luctus venenatis lectus magna fringilla. Lacus vel facilisis volutpat est velit egestas dui id. Velit dignissim sodales ut eu sem integer vitae justo eget. Dictumst quisque sagittis purus sit amet. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Natoque penatibus et magnis dis parturient montes nascetur. Euismod lacinia at quis risus sed vulputate odio ut. Arcu felis bibendum ut tristique. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor. Convallis a cras semper auctor neque vitae. Morbi quis commodo odio aenean sed adipiscing diam. Orci nulla pellentesque dignissim enim sit.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"colortwo"} -->
<h2 class="has-colortwo-color has-text-color"><strong>Tellus rutrum tellus pellentesque</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Mauris rhoncus aenean vel elit scelerisque mauris. Dignissim cras tincidunt lobortis feugiat. Ullamcorper malesuada proin libero nunc consequat interdum varius sit amet. Cursus eget nunc scelerisque viverra mauris. Mattis enim ut tellus elementum sagittis vitae et. Tellus rutrum tellus pellentesque eu. Vel quam elementum pulvinar etiam non quam lacus suspendisse. Enim diam vulputate ut pharetra sit amet aliquam. Ligula ullamcorper malesuada proin libero. Maecenas pharetra convallis posuere morbi leo urna molestie at. Adipiscing diam donec adipiscing tristique. Tortor aliquam nulla facilisi cras fermentum. Lorem sed risus ultricies tristique nulla. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Leo duis ut diam quam nulla porttitor massa id neque. Sapien eget mi proin sed. Morbi tristique senectus et netus et malesuada. Aliquam purus sit amet luctus venenatis lectus magna fringilla. Metus aliquam eleifend mi in nulla.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"colortwo"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-colortwo-background-color has-background" href="#"><strong>Button</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
CONTENT;
