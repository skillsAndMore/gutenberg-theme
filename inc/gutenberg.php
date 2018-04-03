<?php

/**
 * Gutenberg Theme Gutenberg Features
 *
 * @package Gutenberg_Theme
 */

/**
 * Add support for wide images
 */
add_action('after_setup_theme', 'wctrn_add_gutenberg_support');
function wctrn_add_gutenberg_support(){
    add_theme_support('align-wide');

    add_theme_support( 'editor-color-palette',
        '#1abc9c',
        '#ef6c00',
        '#fff',
        '#444'
    );

    add_theme_support( 'disable-custom-colors' );

}

