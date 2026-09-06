<?php
/**
 * Title: Image post listing
 * Slug: finnimal/post-listing-image
 * Inserter: false
 * Description: Featured image with a linked date and title for image posts.
 *
 * @package mfgmicha
 * @subpackage finnimal
 * @since 0.4.1
 */
?>

<!-- wp:group {"align":"full","className":"finnimal-post-image","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull finnimal-post-image">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","align":"wide"} /-->

		<!-- wp:group {"className":"finnimal-post-meta","layout":{"type":"flex","justifyContent":"left","alignItems":"center"}} -->
		<div class="wp-block-group finnimal-post-meta">
			<!-- wp:post-date {"isLink":true,"fontSize":"small"} /-->
			<!-- wp:post-title {"isLink":true,"fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
