<?php
/**
 * Header Default
 * 
 * slug: espresso-shop/header-default
 * title: Header Default
 * categories: espresso-shop
 */

return array(
    'title'      =>__( 'Header Default', 'espresso-shop' ),
    'categories' => array( 'espresso-shop' ),
    'content'    => '<!-- wp:group {"className":"top-header-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"backgroundColor":"accent","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group top-header-section has-accent-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"className":"hedaer-content-wish","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group hedaer-content-wish"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"header-content","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group header-content" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"300"}},"textColor":"fourthaccent","fontSize":"medium"} -->
<p class="has-fourthaccent-color has-text-color has-link-color has-medium-font-size" style="font-style:italic;font-weight:300"><a href="tel:1234567890" class="header-number"><i class="fa-solid fa-phone"></i>'. esc_html__('+1234567890','espresso-shop').'</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"300","letterSpacing":"1px"}},"textColor":"fourthaccent","fontSize":"medium"} -->
<p class="has-fourthaccent-color has-text-color has-link-color has-medium-font-size" style="font-style:italic;font-weight:300;letter-spacing:1px"><i class="fa-solid fa-bullhorn"></i>'. esc_html__('Free worldwide shipping on orders over $50 – Taste the farm-fresh difference!','espresso-shop').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wish-cart-acc","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group wish-cart-acc"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:buttons {"className":"wishlist-button","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-buttons wishlist-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:button {"style":{"color":{"background":"#ffffff00"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" href="#" style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><img class="wp-image-144" style="width: 33px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/wishlist.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:woocommerce/cart-link {"fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"alt","iconClass":"wc-block-customer-account__account-icon","className":"account-btn-header","textColor":"fourthaccent","fontSize":"normal","style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-box-upper","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}}},"backgroundColor":"fourthaccent","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-box-upper has-fourthaccent-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:columns {"className":"menu-group","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"},"shadow":"none"}} -->
<div class="wp-block-columns menu-group" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;box-shadow:none"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"header-logo","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo has-primary-color has-text-color has-link-color" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0;flex-basis:30%"><!-- wp:site-title {"textAlign":"left","style":{"typography":{"fontStyle":"italic","fontWeight":"700","textTransform":"capitalize","fontSize":"27px","textDecoration":"underline"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"padding":{"right":"0","left":"0"}}},"textColor":"accent","fontFamily":"lato"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%","className":"header-inner-menu"} -->
<div class="wp-block-column is-vertically-aligned-center header-inner-menu" style="flex-basis:70%"><!-- wp:navigation {"textColor":"accent","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"typography":{"fontStyle":"italic","fontWeight":"500","fontSize":"17px"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Our Farm","type":"","url":"#aboutus","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Brew Guides","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Stories","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Get Pro","type":"","url":"https://www.wpradiant.net/products/coffee-shop-wordpress-theme","kind":"custom","isTopLevelLink":true,"className":"getpro"} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);