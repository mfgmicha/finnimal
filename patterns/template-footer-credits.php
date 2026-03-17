<?php
/**
 * Title: Footer credits
 * Slug: finnimal/template-footer-credits
 * Inserter: false
 * Categories: widget
 * Block Types: core/paragraph
 * Description: A paragraph for footer credit line
 *
 * @package mfgmicha
 * @subpackage finnimal
 * @since 0.1
 */
?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">
    <span>© <?php echo date( "Y" ); ?> · An </span>
    <a href="https://mkwp.de" target="_blank">MKWP</a>
    <span> Project. Powered by </span>
    <a href="https://wordpress.org" target="_blank" rel="noreferrer noopener">WordPress</a>
</p>
<!-- /wp:paragraph -->