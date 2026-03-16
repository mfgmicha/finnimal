<?php
/**
 * mfgmicha functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mfgmicha
 * @subpackage wp-block-theme
 */

function mfgmicha_enqueue_styles() {
    wp_enqueue_style(
        'mfgmicha-style',
        get_parent_theme_file_uri( 'style.css' ),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'mfgmicha_enqueue_styles' );