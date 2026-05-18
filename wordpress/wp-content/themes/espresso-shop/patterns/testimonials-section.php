<?php
/**
 * Testimonials Section
 * 
 * slug: espresso-shop/testimonials-section
 * title: Testimonials Section
 * categories: espresso-shop
 */

return array(
    'title'      =>__( 'Testimonials Section', 'espresso-shop' ),
    'categories' => array( 'espresso-shop' ),
    'content'    => '<!-- wp:group {"className":"testimonials-section","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group testimonials-section has-secaccent-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","className":"testimonial-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"medium","fontFamily":"lato"} -->
<p class="has-text-align-center testimonial-heading has-accent-color has-text-color has-link-color has-lato-font-family has-medium-font-size" style="border-radius:5px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Testimonials','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"700","fontSize":"28px"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"thirdaccent","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-size:28px;font-style:italic;font-weight:700">'. esc_html__('What Say Clients','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"test-prev-next"} -->
<div class="wp-block-columns test-prev-next"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons {"className":"swiper-test-button","style":{"spacing":{"blockGap":{"top":"0"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons swiper-test-button"><!-- wp:button {"backgroundColor":"sixthaccent","className":"testimonial-swiper-button-prev","style":{"border":{"radius":"26px"}}} -->
<div class="wp-block-button testimonial-swiper-button-prev"><a class="wp-block-button__link has-sixthaccent-background-color has-background wp-element-button" style="border-radius:26px"><img class="wp-image-132" style="width: 10px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/prev.png" alt=""></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"sixthaccent","className":"testimonial-swiper-button-next","style":{"border":{"radius":"26px"}}} -->
<div class="wp-block-button testimonial-swiper-button-next"><a class="wp-block-button__link has-sixthaccent-background-color has-background wp-element-button" style="border-radius:26px"><img class="wp-image-131" style="width: 10px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/next.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"testimonial-swiper-slider mySwiper","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group testimonial-swiper-slider mySwiper" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"testimonials-slider swiper-wrapper","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<div class="wp-block-group testimonials-slider swiper-wrapper" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"testimonials-slider-block swiper-slide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"fourthaccent","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonials-slider-block swiper-slide has-fourthaccent-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"accent","fontSize":"extra-small","fontFamily":"lato"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color has-lato-font-family has-extra-small-font-size" style="margin-bottom:var(--wp--preset--spacing--60);font-style:italic;font-weight:400;line-height:1.9">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown prlato took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry standard dummy text ever since the 1500s','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"testimonial-author-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"accent","fontSize":"upper-heading","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-text-align-center testimonial-author-name has-accent-color has-text-color has-link-color has-lato-font-family has-upper-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-style:italic;font-weight:700">'. esc_html__('Jean Kalvin','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"accent","fontSize":"small"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:italic;font-weight:500">'. esc_html__('Manager','espresso-shop').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"testimonials-slider-block swiper-slide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"fourthaccent","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonials-slider-block swiper-slide has-fourthaccent-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"accent","fontSize":"extra-small","fontFamily":"lato"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color has-lato-font-family has-extra-small-font-size" style="margin-bottom:var(--wp--preset--spacing--60);font-style:italic;font-weight:400;line-height:1.9">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown prlato took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry standard dummy text ever since the 1500s','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"testimonial-author-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"accent","fontSize":"upper-heading","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-text-align-center testimonial-author-name has-accent-color has-text-color has-link-color has-lato-font-family has-upper-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-style:italic;font-weight:700">'. esc_html__('Alex Morgan','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"accent","fontSize":"small"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:italic;font-weight:500">'. esc_html__('CEO','espresso-shop').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"testimonials-slider-block swiper-slide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"fourthaccent","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonials-slider-block swiper-slide has-fourthaccent-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"accent","fontSize":"extra-small","fontFamily":"lato"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color has-lato-font-family has-extra-small-font-size" style="margin-bottom:var(--wp--preset--spacing--60);font-style:italic;font-weight:400;line-height:1.9">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown prlato took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry standard dummy text ever since the 1500s','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"testimonial-author-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"accent","fontSize":"upper-heading","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-text-align-center testimonial-author-name has-accent-color has-text-color has-link-color has-lato-font-family has-upper-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-style:italic;font-weight:700">'. esc_html__('Jordan Blake','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"accent","fontSize":"small"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:italic;font-weight:500">'. esc_html__('Director','espresso-shop').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"testimonials-slider-block swiper-slide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"fourthaccent","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonials-slider-block swiper-slide has-fourthaccent-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"accent","fontSize":"extra-small","fontFamily":"lato"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color has-lato-font-family has-extra-small-font-size" style="margin-bottom:var(--wp--preset--spacing--60);font-style:italic;font-weight:400;line-height:1.9">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown prlato took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry standard dummy text ever since the 1500s','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"testimonial-author-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"accent","fontSize":"upper-heading","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-text-align-center testimonial-author-name has-accent-color has-text-color has-link-color has-lato-font-family has-upper-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-style:italic;font-weight:700">'. esc_html__('Taylor Reed','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"accent","fontSize":"small"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:italic;font-weight:500">'. esc_html__('Product Manager','espresso-shop').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"testimonials-slider-block swiper-slide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"fourthaccent","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonials-slider-block swiper-slide has-fourthaccent-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"accent","fontSize":"extra-small","fontFamily":"lato"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color has-lato-font-family has-extra-small-font-size" style="margin-bottom:var(--wp--preset--spacing--60);font-style:italic;font-weight:400;line-height:1.9">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown prlato took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry standard dummy text ever since the 1500s','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"testimonial-author-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"accent","fontSize":"upper-heading","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-text-align-center testimonial-author-name has-accent-color has-text-color has-link-color has-lato-font-family has-upper-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-style:italic;font-weight:700">'. esc_html__('Alex Reed','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"accent","fontSize":"small"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:italic;font-weight:500">'. esc_html__('Operations Manager','espresso-shop').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"testimonials-slider-block swiper-slide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"fourthaccent","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonials-slider-block swiper-slide has-fourthaccent-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"accent","fontSize":"extra-small","fontFamily":"lato"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color has-lato-font-family has-extra-small-font-size" style="margin-bottom:var(--wp--preset--spacing--60);font-style:italic;font-weight:400;line-height:1.9">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown prlato took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry standard dummy text ever since the 1500s','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"testimonial-author-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"accent","fontSize":"upper-heading","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-text-align-center testimonial-author-name has-accent-color has-text-color has-link-color has-lato-font-family has-upper-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-style:italic;font-weight:700">'. esc_html__('Nikita Kalvin','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"accent","fontSize":"small"} -->
<p class="has-text-align-center has-accent-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:italic;font-weight:500">'. esc_html__('CEO','espresso-shop').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"65px"} -->
<div style="height:65px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
);