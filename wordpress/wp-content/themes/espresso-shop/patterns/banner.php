<?php
/**
 * Banner Section
 * 
 * slug: espresso-shop/banner
 * title: Banner
 * categories: espresso-shop
 */

return array(
    'title'      =>__( 'Banner', 'espresso-shop' ),
    'categories' => array( 'espresso-shop' ),
    'content'    => '<!-- wp:group {"className":"coffee-banner-main-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group coffee-banner-main-section has-secaccent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"coffe-banner-section","style":{"dimensions":{"minHeight":"600px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"background":{"backgroundImage":{"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png","id":43,"source":"file","title":"Rectangle 11"},"backgroundSize":"cover"}},"backgroundColor":"fourthaccent","layout":{"type":"constrained","contentSize":"80%"}} -->
<div id="banner-section" class="wp-block-group coffe-banner-section has-fourthaccent-background-color has-background" style="min-height:600px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"className":"banner-section-coffe","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns banner-section-coffe"><!-- wp:column {"verticalAlignment":"top","width":"60%","className":"banner-col01","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column is-vertically-aligned-top banner-col01" style="flex-basis:60%"><!-- wp:columns {"verticalAlignment":"center","className":"menu-group","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"},"shadow":"none"}} -->
<div class="wp-block-columns are-vertically-aligned-center menu-group" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0;box-shadow:none"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"header-logo","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo has-primary-color has-text-color has-link-color" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0;flex-basis:30%"><!-- wp:site-title {"textAlign":"left","style":{"typography":{"fontStyle":"italic","fontWeight":"700","textTransform":"capitalize","fontSize":"27px","textDecoration":"underline"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"padding":{"right":"0","left":"0"}}},"textColor":"accent","fontFamily":"lato"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%","className":"header-inner-menu"} -->
<div class="wp-block-column is-vertically-aligned-center header-inner-menu" style="flex-basis:70%"><!-- wp:navigation {"textColor":"accent","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"typography":{"fontStyle":"italic","fontWeight":"500","fontSize":"17px"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Our Farm","type":"","url":"#aboutus","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Brew Guides","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Stories","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Get Pro","type":"","url":"https://www.wpradiant.net/products/coffee-shop-wordpress-theme","kind":"custom","isTopLevelLink":true,"className":"getpro","opensInNewTab":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"content-group","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group content-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","className":"banner-heading wow fadeInUp","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"53px","fontStyle":"italic","fontWeight":"700"}},"textColor":"accent","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-text-align-center banner-heading wow fadeInUp has-accent-color has-text-color has-link-color has-lato-font-family" style="font-size:53px;font-style:italic;font-weight:700">'. esc_html__('From Farm to Your Cup','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"wow fadeInDown","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|20"}}},"textColor":"accent","fontSize":"content-heading","fontFamily":"lato"} -->
<p class="has-text-align-center wow fadeInDown has-accent-color has-text-color has-link-color has-lato-font-family has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--20);font-style:italic;font-weight:400">'. esc_html__('Discover ethically sourced, freshly roasted coffee','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"wow fadeInDown","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"accent","fontSize":"content-heading","fontFamily":"lato"} -->
<p class="has-text-align-center wow fadeInDown has-accent-color has-text-color has-link-color has-lato-font-family has-content-heading-font-size" style="font-style:italic;font-weight:400">'. esc_html__(' delivered worldwide.','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"wow fadeInDown","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"textColor":"accent","fontSize":"normal","fontFamily":"lato"} -->
<p class="has-text-align-center wow fadeInDown has-accent-color has-text-color has-link-color has-lato-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);font-style:italic;font-weight:400">'. esc_html__('from farms to your cup – authentic and natural.','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-button wow zoomIn","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons banner-button wow zoomIn"><!-- wp:button {"textAlign":"center","textColor":"accent","gradient":"fourth-gradient","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px","color":"#382521"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"fontSize":"medium"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-medium-font-size has-text-align-center has-custom-font-size wp-element-button" href="#" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">'. esc_html__('Explore Our Farm','espresso-shop').'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"600px","className":"banner-col02","style":{"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|accent","width":"0px","style":"none"},"bottom":{"color":"var:preset|color|accent","width":"0px","style":"none"},"left":{"color":"var:preset|color|accent","width":"0px","style":"none"}}}} -->
<div class="wp-block-column is-vertically-aligned-top banner-col02" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--accent);border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--accent);border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--accent);border-left-style:none;border-left-width:0px;flex-basis:600px"><!-- wp:group {"className":"banner-img-group","style":{"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","color":"var:preset|color|accent","style":"none"},"bottom":{"width":"0px","color":"var:preset|color|accent","style":"none"},"left":{"width":"0px","color":"var:preset|color|accent","style":"none"}},"spacing":{"padding":{"right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-img-group" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--accent);border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--accent);border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--accent);border-left-style:none;border-left-width:0px;padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"id":59,"width":"500px","height":"250px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"bottomLeft":"300px","bottomRight":"300px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner-img.png" alt="" class="wp-image-59" style="border-bottom-left-radius:300px;border-bottom-right-radius:300px;object-fit:cover;width:500px;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"box-img-grp","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group box-img-grp"><!-- wp:image {"id":69,"sizeSlug":"full","linkDestination":"none","className":"banner-box01 wow zoomInRight"} -->
<figure class="wp-block-image size-full banner-box01 wow zoomInRight"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/box2.png" alt="" class="wp-image-69"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":74,"sizeSlug":"full","linkDestination":"none","className":"banner-box02 wow zoomIn"} -->
<figure class="wp-block-image size-full banner-box02 wow zoomIn"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/box1.png" alt="" class="wp-image-74"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":76,"sizeSlug":"full","linkDestination":"none","className":"banner-box03 wow zoomInLeft"} -->
<figure class="wp-block-image size-full banner-box03 wow zoomInLeft"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/box3.png" alt="" class="wp-image-76"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"information-section","style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group information-section has-secaccent-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"wow zoomIn","style":{"border":{"radius":{"topLeft":"60px","topRight":"60px","bottomLeft":"60px","bottomRight":"60px"},"width":"3px"}},"gradient":"fourth-gradient","borderColor":"thirdaccent","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group wow zoomIn has-border-color has-thirdaccent-border-color has-fourth-gradient-gradient-background has-background" style="border-width:3px;border-top-left-radius:60px;border-top-right-radius:60px;border-bottom-left-radius:60px;border-bottom-right-radius:60px"><!-- wp:group {"className":"info-inner-grp","layout":{"type":"constrained"}} -->
<div class="wp-block-group info-inner-grp"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"icon-info-grp icon-info-grp01","fontSize":"upper-heading","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group icon-info-grp icon-info-grp01 has-upper-heading-font-size"><!-- wp:html -->
<i class="fa-solid fa-mug-saucer"></i>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"italic","fontWeight":"400","fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-accent-color has-text-color has-link-color has-lato-font-family" style="font-size:20px;font-style:italic;font-weight:400">'. esc_html__('Harvested Fresh','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"accent","fontSize":"small","fontFamily":"lato"} -->
<p class="has-accent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);font-style:italic;font-weight:400">'. esc_html__('Handpicked cherries straight ','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"accent","fontSize":"small","fontFamily":"lato"} -->
<p class="has-accent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('from our highland farms.','espresso-shop').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"info-inner-grp","layout":{"type":"constrained"}} -->
<div class="wp-block-group info-inner-grp"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"icon-info-grp icon-info-grp02","fontSize":"upper-heading","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group icon-info-grp icon-info-grp02 has-upper-heading-font-size"><!-- wp:html -->
<i class="fa-solid fa-fire-flame-curved"></i>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"italic","fontWeight":"400","fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-accent-color has-text-color has-link-color has-lato-font-family" style="font-size:20px;font-style:italic;font-weight:400">'. esc_html__('Expertly Roasted','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"accent","fontSize":"small","fontFamily":"lato"} -->
<p class="has-accent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);font-style:italic;font-weight:400">'. esc_html__('Beans roasted to perfection for rich,','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"0"}}},"textColor":"accent","fontSize":"small","fontFamily":"lato"} -->
<p class="has-accent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:0;font-style:italic;font-weight:400">'. esc_html__(' balanced flavor. ','espresso-shop').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"info-inner-grp","layout":{"type":"constrained"}} -->
<div class="wp-block-group info-inner-grp"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"icon-info-grp icon-info-grp03","fontSize":"upper-heading","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group icon-info-grp icon-info-grp03 has-upper-heading-font-size"><!-- wp:html -->
<i class="fa-solid fa-truck-ramp-box"></i>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"italic","fontWeight":"400","fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontFamily":"lato"} -->
<h2 class="wp-block-heading has-accent-color has-text-color has-link-color has-lato-font-family" style="font-size:20px;font-style:italic;font-weight:400">'. esc_html__('Delivered to You','espresso-shop').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"accent","fontSize":"small","fontFamily":"lato"} -->
<p class="has-accent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);font-style:italic;font-weight:400">'. esc_html__('Handpicked cherries straight ','espresso-shop').'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"accent","fontSize":"small","fontFamily":"lato"} -->
<p class="has-accent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('from our highland farms.','espresso-shop').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);