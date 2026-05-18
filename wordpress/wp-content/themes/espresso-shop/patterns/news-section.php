<?php
/**
 * News Section
 * 
 * slug: espresso-shop/news-section
 * title: News Section
 * categories: espresso-shop
 */

    return array(
        'title'      =>__( 'News Section', 'espresso-shop' ),
        'categories' => array( 'espresso-shop' ),
        'content'    => '<!-- wp:group {"className":"news-section ","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"80%"}} -->
        <div id="blog" class="wp-block-group news-section has-secaccent-background-color has-background" style="padding-top:0;padding-bottom:0"><!-- wp:spacer {"height":"30px"} -->
        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"align":"center","className":"testimonial-heading","style":{"typography":{"fontStyle":"italic","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"5px"}},"textColor":"accent","fontSize":"upper-heading","fontFamily":"lato"} -->
        <p class="has-text-align-center testimonial-heading has-accent-color has-text-color has-link-color has-lato-font-family has-upper-heading-font-size" style="border-radius:5px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50);font-style:italic;font-weight:700">'. esc_html__('News & Blogs','espresso-shop').'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"700","fontSize":"28px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}}},"textColor":"thirdaccent","fontFamily":"lato"} -->
        <h2 class="wp-block-heading has-text-align-center has-thirdaccent-color has-text-color has-link-color has-lato-font-family" style="font-size:28px;font-style:italic;font-weight:700;text-transform:capitalize">'. esc_html__('Our Latest News and blogs','espresso-shop').'</h2>
        <!-- /wp:heading -->

        <!-- wp:spacer {"height":"25px"} -->
        <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:query {"queryId":15,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"},"layout":{"type":"default"}} -->
        <div class="wp-block-query"><!-- wp:post-template {"className":"news-post-template wow bounceIn","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
        <!-- wp:group {"className":"news-image","layout":{"type":"constrained"}} -->
        <div class="wp-block-group news-image"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","height":"300px","align":"wide"} /--></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"news-info","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group news-info" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}}},"textColor":"fourthaccent","fontSize":"small","fontFamily":"lato"} /-->

        <!-- wp:post-date {"format":"j/n/Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"fourthaccent","fontSize":"medium","fontFamily":"lato"} /-->

        <!-- wp:comments {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-comments" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:comments-title {"showPostTitle":false,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}}},"textColor":"fourthaccent","fontSize":"medium","fontFamily":"lato"} /--></div>
        <!-- /wp:comments --></div>
        <!-- /wp:group -->

        <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontStyle":"italic","fontWeight":"700"}},"textColor":"fourthaccent","fontSize":"small","fontFamily":"lato"} /--></div>
        <!-- /wp:group -->
        <!-- /wp:post-template --></div>
        <!-- /wp:query --></div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"102px"} -->
        <div style="height:102px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer --></div>
        <!-- /wp:group -->',
    );