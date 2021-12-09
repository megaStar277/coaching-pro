<?php
/**
 * Coaching Pro - One-Click Theme Setup - Homepage content.
 *
 * Visit Genesis > Child Theme Setup to trigger import.
 *
 * @package Coaching Pro
 */

$home_url = get_bloginfo( 'url' );

// Get default images.
$coachingpro_img_hero             = CHILD_URL . '/config/import/images/demo-homepage-hero.jpg';
$coachingpro_img_video_screenshot = CHILD_URL . '/config/import/images/demo-homepage-video-screenshot.jpg';
$coachingpro_img_book             = CHILD_URL . '/config/import/images/demo-homepage-book.png';
$coachingpro_logo_womansday       = CHILD_URL . '/config/import/images/demo-logo-womansday.png';
$coachingpro_logo_living          = CHILD_URL . '/config/import/images/demo-logo-marthastewartliving.png';
$coachingpro_logo_own             = CHILD_URL . '/config/import/images/demo-logo-own.png';
$coachingpro_logo_droz            = CHILD_URL . '/config/import/images/demo-logo-drozshow.png';
$coachingpro_icon_leap            = CHILD_URL . '/config/import/images/demo-icon-leap.png';
$coachingpro_icon_learn           = CHILD_URL . '/config/import/images/demo-icon-learn.png';
$coachingpro_icon_life            = CHILD_URL . '/config/import/images/demo-icon-life.png';

// Output page content.
return <<<CONTENT
<!-- wp:genesis-blocks/gb-columns {"backgroundImgURL":"$coachingpro_img_hero","backgroundDimRatio":50,"columns":1,"layout":"one-column","align":"full","paddingTop":200,"paddingRight":30,"paddingBottom":200,"paddingLeft":30,"textColor":"white","backgroundColor":"black","columnMaxWidth":835} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column gb-has-background-dim gb-has-background-dim-50 gb-background-cover gb-background-no-repeat has-black-background-color has-white-color gb-columns-center alignfull" style="padding-top:200px;padding-right:30px;padding-bottom:200px;padding-left:30px;background-image:url($coachingpro_img_hero)"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:835px"><!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:heading {"level":1} -->
<h1><strong>Coaching just got better</strong></h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4>Whatever your expertise, whatever your calling, <strong>Coaching Pro</strong> makes it easy to put yourself out there.</h4>
<!-- /wp:heading -->

<!-- wp:buttons {"contentJustification":"center"} -->
<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"white","textColor":"colortwo"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-colortwo-color has-white-background-color has-text-color has-background" href="https://www.thebrandid.me/coaching-pro" target="_blank" rel="noreferrer noopener">Buy Theme</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-equal","columnsGap":0,"align":"full","backgroundColor":"white","columnMaxWidth":0} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal has-white-background-color alignfull"><div class="gb-layout-column-wrap gb-block-layout-column-gap-0 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column {"backgroundColor":"bgcolorone","textAlign":"right","paddingSync":true,"paddingUnit":"%","padding":10,"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner has-bgcolorone-background-color" style="padding:10%;text-align:right"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="has-large-font-size"><strong>High Impact<br>Video Feature</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"22px"}}} -->
<p style="font-size:22px">Intrigue your audience with valuable<br>information they can’t possibly pass up.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":2976,"width":542,"height":361,"sizeSlug":"full","linkDestination":"custom","className":"is-style-roundedcorners"} -->
<figure class="wp-block-image size-full is-resized is-style-roundedcorners"><a href="https://www.youtube.com/watch?v=C0DPdy98e4c" target="_blank" rel="noopener"><img src="$coachingpro_img_video_screenshot" alt="Watch this video on YouTube" class="wp-image-2976" width="542" height="361"/></a></figure>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"textAlign":"center","paddingSync":true,"padding":30,"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner" style="padding:30px;text-align:center"><!-- wp:genesis-blocks/gb-columns {"columns":1,"layout":"one-column","columnMaxWidth":600} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column gb-columns-center"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:600px"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:heading {"style":{"typography":{"fontSize":"51px"}}} -->
<h2 style="font-size:51px"><strong>Share your Story</strong></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"textColor":"colortwo"} -->
<h3 class="has-colortwo-color has-text-color">Build trust and captivate your audience</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"22px"}}} -->
<p style="font-size:22px">From sunrise to sunset, helping people is your passion and doing it full-heartedly is part of your DNA. Allow your audience to peek inside your true calling.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"contentJustification":"center"} -->
<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"colorone","textColor":"white","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link has-white-color has-colorone-background-color has-text-color has-background" href="$home_url/about/">Read My Story</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-equal","columnsGap":0,"align":"full","backgroundColor":"bgcolortwo","columnMaxWidth":0} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal has-bgcolortwo-background-color alignfull"><div class="gb-layout-column-wrap gb-block-layout-column-gap-0 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column {"textAlign":"center","paddingSync":true,"padding":40,"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner" style="padding:40px;text-align:center"><!-- wp:image {"align":"center","id":2778,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full"><img src="$coachingpro_img_book" alt="Sample product photo" class="wp-image-2778"/></figure></div>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"textAlign":"left","paddingSync":true,"padding":40,"columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner" style="padding:40px;text-align:left"><!-- wp:genesis-blocks/gb-columns {"columns":1,"layout":"one-column","columnMaxWidth":600,"centerColumns":false} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:600px"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:heading {"style":{"typography":{"fontSize":"51px"}}} -->
<h2 style="font-size:51px"><strong>Showcase your</strong><br><strong>latest product</strong></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"textColor":"colortwo"} -->
<h3 class="has-colortwo-color has-text-color">Coach by day, Author by night</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Books, courses, products, whatever the tools needed to further guide and educate your audience.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"contentJustification":"left"} -->
<div class="wp-block-buttons is-content-justification-left"><!-- wp:button {"backgroundColor":"colortwo","textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-colortwo-background-color has-text-color has-background" href="https://www.thebrandid.me/coaching-pro" target="_blank" rel="noreferrer noopener">Buy Theme</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"colorfour","fontSize":"normal"} -->
<p class="has-colorfour-color has-text-color has-normal-font-size"><strong>AS FEATURED IN</strong></p>
<!-- /wp:paragraph -->

<!-- wp:genesis-blocks/gb-columns {"columns":4,"layout":"gb-4-col-equal","className":"logos-small"} -->
<div class="wp-block-genesis-blocks-gb-columns logos-small gb-layout-columns-4 gb-4-col-equal"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column {"textAlign":"center","columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"align":"center","id":3074,"sizeSlug":"full","linkDestination":"none","style":{"color":{}}} -->
<div class="wp-block-image"><figure class="aligncenter size-full"><img src="$coachingpro_logo_womansday" alt="" class="wp-image-3074"/></figure></div>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"textAlign":"center","columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"align":"center","id":3073,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full"><img src="$coachingpro_logo_own" alt="" class="wp-image-3073"/></figure></div>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"textAlign":"center","columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"align":"center","id":3072,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full"><img src="$coachingpro_logo_living" alt="" class="wp-image-3072"/></figure></div>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"textAlign":"center","columnVerticalAlignment":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column gb-is-vertically-aligned-center"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"align":"center","id":3071,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full"><img src="$coachingpro_logo_droz" alt="" class="wp-image-3071"/></figure></div>
<!-- /wp:image --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"columns":1,"layout":"one-column","align":"full","padding":40,"paddingTop":80,"paddingRight":40,"paddingBottom":80,"paddingLeft":40,"backgroundColor":"bgcolorone","columnMaxWidth":900} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column has-bgcolorone-background-color gb-columns-center alignfull" style="padding-top:80px;padding-right:40px;padding-bottom:80px;padding-left:40px"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:900px"><!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:heading -->
<h2><strong>How it all works</strong></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"textColor":"colortwo"} -->
<h3 class="has-colortwo-color has-text-color"><strong>Steps to Your Success</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"textcolortwo"} -->
<p class="has-textcolortwo-color has-text-color">Outline your philosophy, method, training plan, or course so it’s inviting and inspiring.</p>
<!-- /wp:paragraph -->

<!-- wp:genesis-blocks/gb-columns {"columns":3,"layout":"gb-3-col-equal","columnsGap":4,"marginTop":40} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-3 gb-3-col-equal" style="margin-top:40px"><div class="gb-layout-column-wrap gb-block-layout-column-gap-4 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"align":"center","id":9999,"sizeSlug":"large","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-large"><img src="$coachingpro_icon_leap" alt="" class="wp-image-9999"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"textColor":"colortwo"} -->
<h4 class="has-text-align-center has-colortwo-color has-text-color"><strong>Take the leap</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Start with your call to action, whether it relates to getting healthier, working strategically or living better.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"align":"center","id":9999,"sizeSlug":"large","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-large"><img src="$coachingpro_icon_learn" alt="" class="wp-image-9999"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"textColor":"colortwo"} -->
<h4 class="has-text-align-center has-colortwo-color has-text-color"><strong>Learn every day</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Let potential clients know what happens next, after they’ve made the decision to work with you.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:image {"id":9999,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="$coachingpro_icon_life" alt="" class="wp-image-9999"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"textColor":"colortwo"} -->
<h4 class="has-text-align-center has-colortwo-color has-text-color"><strong>Enjoy life</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Show viewers the happy outcome and bright future you’ll help them build for themselves.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"columns":1,"layout":"one-column","align":"full","padding":40,"paddingTop":80,"paddingRight":40,"paddingBottom":40,"paddingLeft":40,"columnMaxWidth":1200} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column gb-columns-center alignfull" style="padding-top:80px;padding-right:40px;padding-bottom:40px;padding-left:40px"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:1200px"><!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:heading -->
<h2><strong>Blog</strong></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"textColor":"colortwo"} -->
<h3 class="has-colortwo-color has-text-color"><strong>Articles, media, research and more</strong></h3>
<!-- /wp:heading -->

<!-- wp:genesis-blocks/gb-post-grid {"postsToShow":4,"displayPostDate":false,"displayPostAuthor":false,"postTitleTag":"h4","readMoreText":"Read More","excerptLength":35,"imageSize":"featured-image"} /--></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:genesis-blocks/gb-columns {"columns":1,"layout":"one-column","align":"full","padding":40,"paddingTop":80,"paddingRight":40,"paddingBottom":40,"paddingLeft":40,"backgroundColor":"bgcolorone","columnMaxWidth":800} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-1 one-column has-bgcolorone-background-color gb-columns-center alignfull" style="padding-top:80px;padding-right:40px;padding-bottom:40px;padding-left:40px"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column" style="max-width:800px"><!-- wp:genesis-blocks/gb-column {"textAlign":"center"} -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner" style="text-align:center"><!-- wp:heading -->
<h2><strong>What people are saying</strong></h2>
<!-- /wp:heading -->

<!-- wp:social-proof-slider/main {"showfeaturedimages":true,"imageborderradius":50,"showarrows":true,"showdots":true,"padding":0,"arrowscolor":"#d46a43","arrowshovercolor":"#6e6872","dotscolor":"#d46a43","dotshovercolor":"#6e6872","authornamecolor":"#d46a43"} /--></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->
CONTENT;
