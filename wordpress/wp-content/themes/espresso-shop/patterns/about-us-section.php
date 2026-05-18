<?php
/**
 * About Us Section
 * 
 * slug: espresso-shop/about-us-section
 * title: About Us Section
 * categories: espresso-shop
 */

    return array(
        'title'      =>__( 'About Us Section', 'espresso-shop' ),
        'categories' => array( 'espresso-shop' ),
        'content'    => '<!-- wp:group {"className":"about-us-section","backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"90%"}} -->
<div id="aboutus" class="wp-block-group about-us-section has-secaccent-background-color has-background"><!-- wp:cover {"isUserOverlayColor":true,"gradient":"primary-gradient","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-cover" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-primary-gradient-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"about-us-col01 wow zoomInLeft"} -->
<div class="wp-block-column is-vertically-aligned-center about-us-col01 wow zoomInLeft"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":11,"sizeSlug":"full","linkDestination":"none","className":"about-img01","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border about-img01"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about01.png" alt="" class="wp-image-11" style="border-radius:10px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":10,"sizeSlug":"full","linkDestination":"none","align":"right","className":"about-img02","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image alignright size-full has-custom-border about-img02"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about02.png" alt="" class="wp-image-10" style="border-radius:10px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":9,"sizeSlug":"full","linkDestination":"none","className":"about-img03","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border about-img03"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about03.png" alt="" class="wp-image-9" style="border-radius:10px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"about-us-col02 wow zoomInRight","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center about-us-col02 wow zoomInRight"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"}},"textColor":"secaccent","fontSize":"upper-heading","fontFamily":"lato"} -->
<p class="has-secaccent-color has-text-color has-link-color has-lato-font-family has-upper-heading-font-size" style="font-style:italic;font-weight:700">'. esc_html__('About Us','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"about-us-heading","style":{"typography":{"fontSize":"33px","textTransform":"capitalize","fontStyle":"italic","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}}},"textColor":"fourthaccent","fontFamily":"lato"} -->
<h2 class="wp-block-heading about-us-heading has-fourthaccent-color has-text-color has-link-color has-lato-font-family" style="font-size:33px;font-style:italic;font-weight:700;text-transform:capitalize">'. esc_html__('We want to give you the best services','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400","lineHeight":"1.6"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"small","fontFamily":"lato"} -->
<p class="has-secaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400;line-height:1.6">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"about-col02-list","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns about-col02-list" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":8,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about-icon01.png" alt="" class="wp-image-8"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"italic","fontWeight":"700","fontSize":"21px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"secaccent","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-secaccent-color has-text-color has-link-color has-lato-font-family" style="margin-top:var(--wp--preset--spacing--40);font-size:21px;font-style:italic;font-weight:700;text-transform:capitalize">'. esc_html__('Guaranteed Results','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"small","fontFamily":"lato"} -->
<p class="has-secaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400;line-height:1.5">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','espresso-shop').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":7,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about-icon02.png" alt="" class="wp-image-7"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"italic","fontWeight":"700","fontSize":"21px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"secaccent","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-secaccent-color has-text-color has-link-color has-lato-font-family" style="margin-top:var(--wp--preset--spacing--40);font-size:21px;font-style:italic;font-weight:700;text-transform:capitalize">'. esc_html__('Quality Services','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"small","fontFamily":"rubik"} -->
<p class="has-secaccent-color has-text-color has-link-color has-rubik-font-family has-small-font-size" style="font-style:italic;font-weight:400;line-height:1.5">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','espresso-shop').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
    );