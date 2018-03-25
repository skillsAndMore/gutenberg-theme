<?php

/**
 * Gutenberg Theme Gutenberg Features
 *
 * @package Gutenberg_Theme
 */

/**
 * Add support for wide images
 */
add_action('after_setup_theme', 'add_gutenberg_support');
function add_gutenberg_support(){
    add_theme_support('align-wide');
}
