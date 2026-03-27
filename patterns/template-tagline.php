<?php
/**
 * Title: Template Tagline
 * Slug: finnimal/template-tagline
 * Inserter: false
 * Categories: widget
 * Block Types: core/paragraph
 * Description: A paragraph for tagline with hover effect.
 *
 * @package mfgmicha
 * @subpackage finnimal
 * @since 0.2
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);">
	<!-- wp:paragraph -->
	<p class="tagline-hover">
		<span>Co</span><span class="fade">ffee&nbsp;</span><span>De</span><span class="fade">veloper</span>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<style>
.tagline-hover .fade {
	transition: opacity 0.3s ease;
}

.tagline-hover:hover .fade {
	opacity: 0;
}
</style>
