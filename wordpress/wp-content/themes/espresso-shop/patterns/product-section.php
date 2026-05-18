<?php
/**
 * Product Section
 * 
 * slug: espresso-shop/product-section
 * title: Product Section
 * categories: espresso-shop
 */

 $espresso_shop_plugins_list = get_option('active_plugins');
    $espresso_shop_woocommerce_plugin = 'woocommerce/woocommerce.php';
 $espresso_shop_results = in_array($espresso_shop_woocommerce_plugin, $espresso_shop_plugins_list) ;

if ($espresso_shop_results) {

    return array(
        'title'      =>__( 'Product Section', 'espresso-shop' ),
        'categories' => array( 'espresso-shop' ),
        'content'    => '<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"product-static-heading","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group product-static-heading"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"2px","color":"var:preset|color|accent"},"left":{"width":"0px","style":"none"}}},"textColor":"accent","fontSize":"large","fontFamily":"lato"} -->
        <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-lato-font-family has-large-font-size" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--accent);border-bottom-width:2px;border-left-style:none;border-left-width:0px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-style:italic;font-weight:700">'. esc_html__('Find Your Flavor ','espresso-shop').'</h2>
        <!-- /wp:heading --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"500"}},"textColor":"thirdaccent","fontSize":"small"} -->
        <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-small-font-size" style="font-style:italic;font-weight:500">'. esc_html__('Choose from blends, single origins, and brewing essentials.','espresso-shop').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:buttons {"className":"main-tab","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|70"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons main-tab"><!-- wp:button {"textColor":"thirdaccent","className":"tab-title","style":{"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lato"} -->
        <div class="wp-block-button tab-title"><a class="wp-block-button__link has-thirdaccent-color has-text-color has-background has-link-color has-lato-font-family has-upper-heading-font-size has-custom-font-size wp-element-button" style="background-color:#ffffff00;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0;font-style:italic;font-weight:400">'. esc_html__('Coffee Beans','espresso-shop').'</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"textColor":"thirdaccent","className":"tab-title","style":{"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lato"} -->
        <div class="wp-block-button tab-title"><a class="wp-block-button__link has-thirdaccent-color has-text-color has-background has-link-color has-lato-font-family has-upper-heading-font-size has-custom-font-size wp-element-button" style="background-color:#ffffff00;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0;font-style:italic;font-weight:400">'. esc_html__('Ground Coffee','espresso-shop').'</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"textColor":"thirdaccent","className":"tab-title","style":{"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lato"} -->
        <div class="wp-block-button tab-title"><a class="wp-block-button__link has-thirdaccent-color has-text-color has-background has-link-color has-lato-font-family has-upper-heading-font-size has-custom-font-size wp-element-button" style="background-color:#ffffff00;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0;font-style:italic;font-weight:400">'. esc_html__('Accessories','espresso-shop').'</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"textColor":"thirdaccent","className":"tab-title","style":{"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lato"} -->
        <div class="wp-block-button tab-title"><a class="wp-block-button__link has-thirdaccent-color has-text-color has-background has-link-color has-lato-font-family has-upper-heading-font-size has-custom-font-size wp-element-button" style="background-color:#ffffff00;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0;font-style:italic;font-weight:400">'. esc_html__('Brewing Gear','espresso-shop').'</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons -->

        <!-- wp:group {"className":"dynamic-product-sec-grp","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group dynamic-product-sec-grp"><!-- wp:group {"className":"tab-content","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group tab-content"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template {"className":"static-product-grid owl-carousel"} -->
        <!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"300px","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
        <!-- wp:woocommerce/product-sale-badge {"align":"right"} /-->
        <!-- /wp:woocommerce/product-image -->

        <!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.4","fontStyle":"italic","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}}},"textColor":"thirdaccent","fontSize":"normal","fontFamily":"lato","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

        <!-- wp:woocommerce/product-summary {"isDescendentOfQueryLoop":true,"showDescriptionIfEmpty":true,"summaryLength":17,"textColor":"thirdaccent","fontFamily":"lato","style":{"typography":{"textAlign":"center","fontStyle":"italic","fontWeight":"400","lineHeight":1.6,"fontSize":"17px"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}}}} /-->

        <!-- wp:group {"className":"dynamic-product-buttons","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group dynamic-product-buttons"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"accent","fontFamily":"lato","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"17px","fontStyle":"italic","fontWeight":"700"}}} /-->

        <!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small"} /--></div>
        <!-- /wp:group -->
        <!-- /wp:woocommerce/product-template --></div>
        <!-- /wp:woocommerce/product-collection --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"tab-content","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group tab-content"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template {"className":"static-product-grid owl-carousel"} -->
        <!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"300px","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
        <!-- wp:woocommerce/product-sale-badge {"align":"right"} /-->
        <!-- /wp:woocommerce/product-image -->

        <!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.4","fontStyle":"italic","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}}},"textColor":"thirdaccent","fontSize":"normal","fontFamily":"lato","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

        <!-- wp:woocommerce/product-summary {"isDescendentOfQueryLoop":true,"showDescriptionIfEmpty":true,"summaryLength":17,"textColor":"thirdaccent","fontFamily":"lato","style":{"typography":{"textAlign":"center","fontStyle":"italic","fontWeight":"400","lineHeight":1.6,"fontSize":"17px"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}}}} /-->

        <!-- wp:group {"className":"dynamic-product-buttons","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group dynamic-product-buttons"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"accent","fontFamily":"lato","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"17px","fontStyle":"italic","fontWeight":"700"}}} /-->

        <!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small"} /--></div>
        <!-- /wp:group -->
        <!-- /wp:woocommerce/product-template --></div>
        <!-- /wp:woocommerce/product-collection --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"tab-content","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group tab-content"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:woocommerce/product-collection {"queryId":2,"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template {"className":"static-product-grid owl-carousel"} -->
        <!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"300px","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
        <!-- wp:woocommerce/product-sale-badge {"align":"right"} /-->
        <!-- /wp:woocommerce/product-image -->

        <!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.4","fontStyle":"italic","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}}},"textColor":"thirdaccent","fontSize":"normal","fontFamily":"lato","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

        <!-- wp:woocommerce/product-summary {"isDescendentOfQueryLoop":true,"showDescriptionIfEmpty":true,"summaryLength":17,"textColor":"thirdaccent","fontFamily":"lato","style":{"typography":{"textAlign":"center","fontStyle":"italic","fontWeight":"400","lineHeight":1.6,"fontSize":"17px"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}}}} /-->

        <!-- wp:group {"className":"dynamic-product-buttons","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group dynamic-product-buttons"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"accent","fontFamily":"lato","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"17px","fontStyle":"italic","fontWeight":"700"}}} /-->

        <!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small"} /--></div>
        <!-- /wp:group -->
        <!-- /wp:woocommerce/product-template --></div>
        <!-- /wp:woocommerce/product-collection --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"tab-content","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group tab-content"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:woocommerce/product-collection {"queryId":3,"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template {"className":"static-product-grid owl-carousel"} -->
        <!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"300px","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
        <!-- wp:woocommerce/product-sale-badge {"align":"right"} /-->
        <!-- /wp:woocommerce/product-image -->

        <!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.4","fontStyle":"italic","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}}},"textColor":"thirdaccent","fontSize":"normal","fontFamily":"lato","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

        <!-- wp:woocommerce/product-summary {"isDescendentOfQueryLoop":true,"showDescriptionIfEmpty":true,"summaryLength":17,"textColor":"thirdaccent","fontFamily":"lato","style":{"typography":{"textAlign":"center","fontStyle":"italic","fontWeight":"400","lineHeight":1.6,"fontSize":"17px"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}}}} /-->

        <!-- wp:group {"className":"dynamic-product-buttons","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group dynamic-product-buttons"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"accent","fontFamily":"lato","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"17px","fontStyle":"italic","fontWeight":"700"}}} /-->

        <!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small"} /--></div>
        <!-- /wp:group -->
        <!-- /wp:woocommerce/product-template --></div>
        <!-- /wp:woocommerce/product-collection --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"70px"} -->
        <div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer --></div>
        <!-- /wp:group -->',
);
} else {

    return array(
    'title'      =>__( 'Product Section', 'espresso-shop' ),
    'categories' => array( 'espresso-shop' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"product-static-heading","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group product-static-heading"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"2px","color":"var:preset|color|accent"},"left":{"width":"0px","style":"none"}}},"textColor":"accent","fontSize":"large","fontFamily":"lato"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-lato-font-family has-large-font-size" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--accent);border-bottom-width:2px;border-left-style:none;border-left-width:0px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-style:italic;font-weight:700">'. esc_html__('Find Your Flavor','espresso-shop').'</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"500"}},"textColor":"thirdaccent","fontSize":"small"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-small-font-size" style="font-style:italic;font-weight:500">'. esc_html__('Choose from blends, single origins, and brewing essentials.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:buttons {"className":"main-tab","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|70"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons main-tab"><!-- wp:button {"textColor":"thirdaccent","className":"tab-title","style":{"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lato"} -->
    <div class="wp-block-button tab-title"><a class="wp-block-button__link has-thirdaccent-color has-text-color has-background has-link-color has-lato-font-family has-upper-heading-font-size has-custom-font-size wp-element-button" style="background-color:#ffffff00;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0;font-style:italic;font-weight:400">'. esc_html__('Coffee Beans','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"thirdaccent","className":"tab-title","style":{"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lato"} -->
    <div class="wp-block-button tab-title"><a class="wp-block-button__link has-thirdaccent-color has-text-color has-background has-link-color has-lato-font-family has-upper-heading-font-size has-custom-font-size wp-element-button" style="background-color:#ffffff00;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0;font-style:italic;font-weight:400">'. esc_html__('Ground Coffee','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"thirdaccent","className":"tab-title","style":{"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lato"} -->
    <div class="wp-block-button tab-title"><a class="wp-block-button__link has-thirdaccent-color has-text-color has-background has-link-color has-lato-font-family has-upper-heading-font-size has-custom-font-size wp-element-button" style="background-color:#ffffff00;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0;font-style:italic;font-weight:400">'. esc_html__('Accessories','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"thirdaccent","className":"tab-title","style":{"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lato"} -->
    <div class="wp-block-button tab-title"><a class="wp-block-button__link has-thirdaccent-color has-text-color has-background has-link-color has-lato-font-family has-upper-heading-font-size has-custom-font-size wp-element-button" style="background-color:#ffffff00;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0;font-style:italic;font-weight:400">'. esc_html__('Brewing Gearh','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:group {"className":"tab-content","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group tab-content"><!-- wp:group {"className":"static-product-grid owl-carousel","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group static-product-grid owl-carousel"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":178,"scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product01.png" alt="" class="wp-image-178" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;object-fit:contain"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"content-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Sunrise Blend – Whole Beans','espresso-shop').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:400">'. esc_html__('A smooth, balanced coffee with sweet undertones ','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('— ideal for both espresso and drip brew.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","textColor":"accent","className":"button-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"width":"1px","color":"#382521","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"background":"#ffffff00"}},"fontSize":"small"} -->
    <div class="wp-block-button button-price"><a class="wp-block-button__link has-accent-color has-text-color has-background has-link-color has-border-color has-small-font-size has-text-align-left has-custom-font-size wp-element-button" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#ffffff00;font-style:normal;font-weight:700">'. esc_html__('$17.99','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent","gradient":"fourth-gradient","className":"button-tittle","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontSize":"small","borderColor":"accent"} -->
    <div class="wp-block-button button-tittle"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-accent-border-color has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-style:normal;font-weight:500">'. esc_html__('Add to Cart','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":179,"scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product02.png" alt="" class="wp-image-179" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;object-fit:contain"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"content-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Mountain Mist – Single Origin','espresso-shop').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:400">'. esc_html__('A smooth, balanced coffee with sweet undertones ','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('— ideal for both espresso and drip brew.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","textColor":"accent","className":"button-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"width":"1px","color":"#382521","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"background":"#ffffff00"}},"fontSize":"small"} -->
    <div class="wp-block-button button-price"><a class="wp-block-button__link has-accent-color has-text-color has-background has-link-color has-border-color has-small-font-size has-text-align-left has-custom-font-size wp-element-button" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#ffffff00;font-style:normal;font-weight:700">'. esc_html__('$17.99','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent","gradient":"fourth-gradient","className":"button-tittle","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontSize":"small","borderColor":"accent"} -->
    <div class="wp-block-button button-tittle"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-accent-border-color has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-style:normal;font-weight:500">'. esc_html__('Add to Cart','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":180,"scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product03.png" alt="" class="wp-image-180" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;object-fit:contain"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"content-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Ember Reserve – Dark Roast','espresso-shop').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:400">'. esc_html__('A smooth, balanced coffee with sweet undertones ','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('— ideal for both espresso and drip brew.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","textColor":"accent","className":"button-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"width":"1px","color":"#382521","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"background":"#ffffff00"}},"fontSize":"small"} -->
    <div class="wp-block-button button-price"><a class="wp-block-button__link has-accent-color has-text-color has-background has-link-color has-border-color has-small-font-size has-text-align-left has-custom-font-size wp-element-button" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#ffffff00;font-style:normal;font-weight:700">'. esc_html__('$17.99','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent","gradient":"fourth-gradient","className":"button-tittle","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontSize":"small","borderColor":"accent"} -->
    <div class="wp-block-button button-tittle"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-accent-border-color has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-style:normal;font-weight:500">'. esc_html__('Add to Cart','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"tab-content","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group tab-content"><!-- wp:group {"className":"static-product-grid owl-carousel","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group static-product-grid owl-carousel"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":178,"scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product04.png" alt="" class="wp-image-178" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;object-fit:contain"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"content-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Sunrise Blend – Whole Beans','espresso-shop').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:400"> '. esc_html__('A smooth, balanced coffee with sweet undertones','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('— ideal for both espresso and drip brew.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","textColor":"accent","className":"button-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"width":"1px","color":"#382521","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"background":"#ffffff00"}},"fontSize":"small"} -->
    <div class="wp-block-button button-price"><a class="wp-block-button__link has-accent-color has-text-color has-background has-link-color has-border-color has-small-font-size has-text-align-left has-custom-font-size wp-element-button" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#ffffff00;font-style:normal;font-weight:700">'. esc_html__('$17.99','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent","gradient":"fourth-gradient","className":"button-tittle","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontSize":"small","borderColor":"accent"} -->
    <div class="wp-block-button button-tittle"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-accent-border-color has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-style:normal;font-weight:500">'. esc_html__('Add to Cart','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":179,"scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product05.png" alt="" class="wp-image-179" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;object-fit:contain"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"content-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Mountain Mist – Single Origin','espresso-shop').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:400"> '. esc_html__('A smooth, balanced coffee with sweet undertones','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('— ideal for both espresso and drip brew.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","textColor":"accent","className":"button-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"width":"1px","color":"#382521","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"background":"#ffffff00"}},"fontSize":"small"} -->
    <div class="wp-block-button button-price"><a class="wp-block-button__link has-accent-color has-text-color has-background has-link-color has-border-color has-small-font-size has-text-align-left has-custom-font-size wp-element-button" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#ffffff00;font-style:normal;font-weight:700">'. esc_html__('$17.99','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent","gradient":"fourth-gradient","className":"button-tittle","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontSize":"small","borderColor":"accent"} -->
    <div class="wp-block-button button-tittle"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-accent-border-color has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-style:normal;font-weight:500">'. esc_html__('Add to Cart','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":180,"scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product06.png" alt="" class="wp-image-180" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;object-fit:contain"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"content-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Ember Reserve – Dark Roast','espresso-shop').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:400"> '. esc_html__('A smooth, balanced coffee with sweet undertones','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('— ideal for both espresso and drip brew.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","textColor":"accent","className":"button-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"width":"1px","color":"#382521","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"background":"#ffffff00"}},"fontSize":"small"} -->
    <div class="wp-block-button button-price"><a class="wp-block-button__link has-accent-color has-text-color has-background has-link-color has-border-color has-small-font-size has-text-align-left has-custom-font-size wp-element-button" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#ffffff00;font-style:normal;font-weight:700">'. esc_html__('$17.99','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent","gradient":"fourth-gradient","className":"button-tittle","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontSize":"small","borderColor":"accent"} -->
    <div class="wp-block-button button-tittle"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-accent-border-color has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-style:normal;font-weight:500">'. esc_html__('Add to Cart','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"tab-content","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group tab-content"><!-- wp:group {"className":"static-product-grid owl-carousel","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group static-product-grid owl-carousel"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":178,"scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product07.png" alt="" class="wp-image-178" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;object-fit:contain"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"content-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Sunrise Blend – Whole Beans','espresso-shop').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:400"> '. esc_html__('A smooth, balanced coffee with sweet undertones','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('— ideal for both espresso and drip brew.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","textColor":"accent","className":"button-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"width":"1px","color":"#382521","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"background":"#ffffff00"}},"fontSize":"small"} -->
    <div class="wp-block-button button-price"><a class="wp-block-button__link has-accent-color has-text-color has-background has-link-color has-border-color has-small-font-size has-text-align-left has-custom-font-size wp-element-button" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#ffffff00;font-style:normal;font-weight:700">'. esc_html__('$17.99','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent","gradient":"fourth-gradient","className":"button-tittle","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontSize":"small","borderColor":"accent"} -->
    <div class="wp-block-button button-tittle"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-accent-border-color has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-style:normal;font-weight:500">'. esc_html__('Add to Cart','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":179,"scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product08.png" alt="" class="wp-image-179" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;object-fit:contain"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"content-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Mountain Mist – Single Origin','espresso-shop').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:400"> '. esc_html__('A smooth, balanced coffee with sweet undertones','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('— ideal for both espresso and drip brew.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","textColor":"accent","className":"button-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"width":"1px","color":"#382521","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"background":"#ffffff00"}},"fontSize":"small"} -->
    <div class="wp-block-button button-price"><a class="wp-block-button__link has-accent-color has-text-color has-background has-link-color has-border-color has-small-font-size has-text-align-left has-custom-font-size wp-element-button" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#ffffff00;font-style:normal;font-weight:700">'. esc_html__('$17.99','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent","gradient":"fourth-gradient","className":"button-tittle","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontSize":"small","borderColor":"accent"} -->
    <div class="wp-block-button button-tittle"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-accent-border-color has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-style:normal;font-weight:500">'. esc_html__('Add to Cart','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":180,"scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product09.png" alt="" class="wp-image-180" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;object-fit:contain"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"content-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Ember Reserve – Dark Roast','espresso-shop').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:400"> '. esc_html__('A smooth, balanced coffee with sweet undertones','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('— ideal for both espresso and drip brew.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","textColor":"accent","className":"button-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"width":"1px","color":"#382521","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"background":"#ffffff00"}},"fontSize":"small"} -->
    <div class="wp-block-button button-price"><a class="wp-block-button__link has-accent-color has-text-color has-background has-link-color has-border-color has-small-font-size has-text-align-left has-custom-font-size wp-element-button" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#ffffff00;font-style:normal;font-weight:700">'. esc_html__('$17.99','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent","gradient":"fourth-gradient","className":"button-tittle","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontSize":"small","borderColor":"accent"} -->
    <div class="wp-block-button button-tittle"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-accent-border-color has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-style:normal;font-weight:500">'. esc_html__('Add to Cart','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"tab-content","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group tab-content"><!-- wp:group {"className":"static-product-grid owl-carousel","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group static-product-grid owl-carousel"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":178,"scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product10.png" alt="" class="wp-image-178" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;object-fit:contain"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"content-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Sunrise Blend – Whole Beans','espresso-shop').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:400"> '. esc_html__('A smooth, balanced coffee with sweet undertones','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('— ideal for both espresso and drip brew.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","textColor":"accent","className":"button-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"width":"1px","color":"#382521","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"background":"#ffffff00"}},"fontSize":"small"} -->
    <div class="wp-block-button button-price"><a class="wp-block-button__link has-accent-color has-text-color has-background has-link-color has-border-color has-small-font-size has-text-align-left has-custom-font-size wp-element-button" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#ffffff00;font-style:normal;font-weight:700">'. esc_html__('$17.99','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent","gradient":"fourth-gradient","className":"button-tittle","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontSize":"small","borderColor":"accent"} -->
    <div class="wp-block-button button-tittle"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-accent-border-color has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-style:normal;font-weight:500">'. esc_html__('Add to Cart','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":179,"scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product11.png" alt="" class="wp-image-179" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;object-fit:contain"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"content-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Mountain Mist – Single Origin','espresso-shop').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:400"> '. esc_html__('A smooth, balanced coffee with sweet undertones','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('— ideal for both espresso and drip brew.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","textColor":"accent","className":"button-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"width":"1px","color":"#382521","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"background":"#ffffff00"}},"fontSize":"small"} -->
    <div class="wp-block-button button-price"><a class="wp-block-button__link has-accent-color has-text-color has-background has-link-color has-border-color has-small-font-size has-text-align-left has-custom-font-size wp-element-button" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#ffffff00;font-style:normal;font-weight:700">'. esc_html__('$17.99','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent","gradient":"fourth-gradient","className":"button-tittle","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontSize":"small","borderColor":"accent"} -->
    <div class="wp-block-button button-tittle"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-accent-border-color has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-style:normal;font-weight:500">'. esc_html__('Add to Cart','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":180,"scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product12.png" alt="" class="wp-image-180" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;object-fit:contain"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"accent","fontSize":"content-heading"} -->
    <h2 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-link-color has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">'. esc_html__('Ember Reserve – Dark Roast','espresso-shop').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:italic;font-weight:400"> '. esc_html__('A smooth, balanced coffee with sweet undertones','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"thirdaccent","fontSize":"small","fontFamily":"lato"} -->
    <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family has-small-font-size" style="font-style:italic;font-weight:400">'. esc_html__('— ideal for both espresso and drip brew.','espresso-shop').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","textColor":"accent","className":"button-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"width":"1px","color":"#382521","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"background":"#ffffff00"}},"fontSize":"small"} -->
    <div class="wp-block-button button-price"><a class="wp-block-button__link has-accent-color has-text-color has-background has-link-color has-border-color has-small-font-size has-text-align-left has-custom-font-size wp-element-button" style="border-color:#382521;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#ffffff00;font-style:normal;font-weight:700">'. esc_html__('$17.99','espresso-shop').'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent","gradient":"fourth-gradient","className":"button-tittle","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontSize":"small","borderColor":"accent"} -->
    <div class="wp-block-button button-tittle"><a class="wp-block-button__link has-accent-color has-fourth-gradient-gradient-background has-text-color has-background has-link-color has-border-color has-accent-border-color has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-style:normal;font-weight:500">'. esc_html__('Add to Cart','espresso-shop').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"70px"} -->
    <div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->',
   );

   }