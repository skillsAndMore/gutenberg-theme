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

/**
 * Registro CPT con Custom Template con layout a colonne
 */
function wctrn_register_book_post_type() {
	$args = array(
		'public' => true,
		'label'  => 'Books',
		'show_in_rest' => true,
        'template' => array(
            array( 'core/subhead'),
            array('core/columns', array(), array(
                array('core/image', array('layout' => 'column-1')),
                array('core/heading', array(
                    'placeholder' => 'Add Author...',
                    'layout' => 'column-2'
                )),
                array('core/paragraph', array(
                    'placeholder' => 'Add a inner paragraph',
                    'layout' => 'column-2'
                )),
            ))
        ),
        'template_lock' => 'all',
	);
	register_post_type( 'book', $args );
}
add_action( 'init', 'wctrn_register_book_post_type' );


function wctrn_add_template_to_posts(){
    $post_type_object = get_post_type_object('post'); // o page
    $post_type_object->template = array(
        array('core/subhead'),
        array('core/image', array('align' => 'left')),
        array('core/paragraph', array(
            'placeholder' => 'Aggiungi un paragrafo',
        )),
    );
}
add_action('init', 'wctrn_add_template_to_posts');