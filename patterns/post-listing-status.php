<?php
/**
 * Title: Status post listing
 * Slug: finnimal/post-listing-status
 * Inserter: false
 * Description: Framed post content with a linked date and title for status posts.
 *
 * @package mfgmicha
 * @subpackage finnimal
 * @since 0.4.1
 */
?>

<!-- wp:group {"align":"full","className":"finnimal-post-status","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull finnimal-post-status">
	<!-- wp:group {"className":"finnimal-status-card","layout":{"type":"constrained"}} -->
	<div class="wp-block-group finnimal-status-card">
		<!-- wp:post-content /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"finnimal-post-meta","layout":{"type":"flex","justifyContent":"left","alignItems":"center"}} -->
	<div class="wp-block-group finnimal-post-meta">
		<!-- wp:post-date {"isLink":true,"fontSize":"small"} /-->
		<!-- wp:post-title {"isLink":true,"fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
