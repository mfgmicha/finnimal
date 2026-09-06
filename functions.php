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
