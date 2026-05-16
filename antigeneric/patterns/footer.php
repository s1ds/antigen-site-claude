<?php
/**
 * Title: footer
 * Slug: antigeneric/footer
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"color":{"background":"#111111"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"textColor":"base","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-base-color has-text-color has-background" style="background-color:#111111;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:site-title {"level":0,"isLink":true} /-->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|micro","letterSpacing":"0.14em","fontWeight":"800","textTransform":"uppercase"}},"textColor":"grey"} -->
<p class="has-grey-color has-text-color" style="font-size:var(--wp--preset--font-size--micro);letter-spacing:0.14em;font-weight:800;text-transform:uppercase"><?php esc_html_e( 'A Post-Algorithm Organism', 'antigeneric' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0","bottom":"0"}}}} /-->

</div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"smoke","align":"wide","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-smoke-background-color has-background is-style-wide alignwide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|micro","letterSpacing":"0.06em"}},"textColor":"grey"} -->
<p class="has-grey-color has-text-color" style="font-size:var(--wp--preset--font-size--micro);letter-spacing:0.06em"><?php echo esc_html( sprintf( '© ANTIGEN %s', date( 'Y' ) ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|micro","letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"grey"} -->
<p class="has-grey-color has-text-color" style="font-size:var(--wp--preset--font-size--micro);letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Post-Algorithm · Purpose-Built · Anti-Stagnation', 'antigeneric' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</footer>
<!-- /wp:group -->
