<?php
/**
 * FAQ Section
 * 
 * slug: espresso-shop/faq-section
 * title: FAQ Section
 * categories: espresso-shop
 */

    return array(
        'title'      =>__( 'FAQ Section', 'espresso-shop' ),
        'categories' => array( 'espresso-shop' ),
        'content'    => '<!-- wp:group {"className":"faq-section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"0","bottom":"0"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group faq-section has-secaccent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><!-- wp:cover {"isUserOverlayColor":true,"gradient":"primary-gradient","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-cover" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-primary-gradient-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"className":"faq-left wow zoomInLeft","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column faq-left wow zoomInLeft"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"700","fontSize":"17px"}},"textColor":"fourthaccent","fontFamily":"lato"} -->
<p class="has-fourthaccent-color has-text-color has-link-color has-lato-font-family" style="font-size:17px;font-style:italic;font-weight:700">'. esc_html__('Frequently Asked Questions','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"italic","fontWeight":"700","fontSize":"26px"},"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}}},"textColor":"fourthaccent","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-fourthaccent-color has-text-color has-link-color has-lato-font-family" style="font-size:26px;font-style:italic;font-weight:700">'. esc_html__('Have Any Questions For Us?','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"short-para-text","style":{"typography":{"fontStyle":"italic","fontWeight":"400","lineHeight":"1.8"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"textColor":"secaccent","fontSize":"small","fontFamily":"lato"} -->
<p class="short-para-text has-secaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="padding-bottom:var(--wp--preset--spacing--30);font-style:italic;font-weight:400;line-height:1.8">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":8,"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/FAQ.png" alt="" class="wp-image-8" style="border-style:none;border-width:0px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"faq-right wow zoomInRight","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column faq-right wow zoomInRight"><!-- wp:details {"showContent":true,"className":"faq-list","style":{"typography":{"fontStyle":"italic","fontWeight":"700"}},"fontFamily":"lato"} -->
<details class="wp-block-details faq-list has-lato-font-family" style="font-style:italic;font-weight:700" open><summary>'. esc_html__('Where do you source your coffee beans from?','espresso-shop').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown prlato took a galley of type and scrambled it to make a type specimen book.','espresso-shop').'</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-list","style":{"typography":{"fontStyle":"italic","fontWeight":"700"}},"fontFamily":"lato"} -->
<details class="wp-block-details faq-list has-lato-font-family" style="font-style:italic;font-weight:700"><summary>'. esc_html__('Are your products organic and fair trade certified?','espresso-shop').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color" style="font-style:normal;font-weight:400">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown prlato took a galley of type and scrambled it to make a type specimen book.','espresso-shop').'</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-list","style":{"typography":{"fontStyle":"italic","fontWeight":"700"}},"fontFamily":"lato"} -->
<details class="wp-block-details faq-list has-lato-font-family" style="font-style:italic;font-weight:700"><summary>'. esc_html__('Do you ship internationally?','espresso-shop').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown prlato took a galley of type and scrambled it to make a type specimen book.','espresso-shop').'</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-list","style":{"typography":{"fontStyle":"italic","fontWeight":"700"}},"fontFamily":"lato"} -->
<details class="wp-block-details faq-list has-lato-font-family" style="font-style:italic;font-weight:700"><summary>What’s your return or exchange policy?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown prlato took a galley of type and scrambled it to make a type specimen book.','espresso-shop').'</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-list","style":{"typography":{"fontStyle":"italic","fontWeight":"700"}},"fontFamily":"lato"} -->
<details class="wp-block-details faq-list has-lato-font-family" style="font-style:italic;font-weight:700"><summary>'. esc_html__('How long does shipping take?','espresso-shop').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color" style="font-style:normal;font-weight:400">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown prlato took a galley of type and scrambled it to make a type specimen book.','espresso-shop').'</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
    );