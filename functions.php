<?php
/**
 * finnimal functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mfgmicha
 * @subpackage finnimal
 * @since 0.0.1
 */

function finnimal_enqueue_styles() {
    wp_enqueue_style(
        'finnimal-style',
        get_parent_theme_file_uri( 'style.css' ),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'finnimal_enqueue_styles' );

function finnimal_theme_setup() {
	add_editor_style( get_parent_theme_file_uri( 'style.css' ) );
	add_theme_support( 'post-formats', array( 'image', 'status' ) );
}
add_action( 'after_setup_theme', 'finnimal_theme_setup' );

/**
 * Register the dynamic post listing block.
 */
function finnimal_register_blocks() {
	register_block_type(
		'finnimal/post-listing',
		array(
			'title'           => __( 'Post format listing', 'finnimal' ),
			'description'     => __( 'Displays the appropriate listing for the current post format.', 'finnimal' ),
			'category'        => 'theme',
			'uses_context'    => array( 'postId', 'postType' ),
			'render_callback' => 'finnimal_render_post_listing',
			'supports'        => array(
				'autoRegister' => true,
				'html'         => false,
			),
		)
	);
}
add_action( 'init', 'finnimal_register_blocks' );

/**
 * Render the listing pattern matching the current post's format.
 *
 * @param array    $attributes Block attributes.
 * @param string   $content    Block content.
 * @param WP_Block $block      Block instance.
 * @return string Rendered listing markup.
 */
function finnimal_render_post_listing( $attributes, $content, $block ) {
	$post_id = isset( $block->context['postId'] ) ? (int) $block->context['postId'] : 0;

	if ( ! $post_id ) {
		return '';
	}

	$pattern_slug = match ( get_post_format( $post_id ) ) {
		'image'  => 'finnimal/post-listing-image',
		'status' => 'finnimal/post-listing-status',
		default  => 'finnimal/post-listing-default',
	};

	$pattern = WP_Block_Patterns_Registry::get_instance()->get_registered( $pattern_slug );

	if ( empty( $pattern['content'] ) ) {
		return '';
	}

	$output = '';

	foreach ( parse_blocks( $pattern['content'] ) as $parsed_block ) {
		$output .= ( new WP_Block( $parsed_block, $block->context ) )->render();
	}

	return $output;
}
