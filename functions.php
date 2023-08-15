<?php

//theme setup


function agency_theme_setup(){
    add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'agency_theme_setup' );



function agency_theme_enqueue_style(){
    wp_enqueue_style('stylesheet', get_stylesheet_directory_uri());
    wp_enqueue_style('agency-block', get_template_directory_uri(  ). "/assets/css/agency-block.css");
}

add_action( 'wp_enqueue_scripts', 'agency_theme_enqueue_style' );



//Register block patterns
/**
 * Registers pattern categories.
 *
 * @since fse service 1.0.0
 *
 * @return void
 */
function agency_block_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'agency-block-patterns' => array('label' => __(' Agency Block Patterns', 'agencyblock')
    ));

    $block_pattern_categories = apply_filters('agency_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'agency_block_register_pattern_category', 9);