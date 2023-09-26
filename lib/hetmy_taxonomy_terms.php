<?php


add_action('init', 'create_prop_type_taxonomies', 0);

function create_prop_type_taxonomies()
{
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x('Procedures Categorys', 'taxonomy general name', 'hetmy'),
        'singular_name'     => _x('Procedures Category', 'taxonomy singular name', 'hetmy'),
        'search_items'      => __('Search Procedures Categorys', 'hetmy'),
        'all_items'         => __('All Procedures Categorys', 'hetmy'),
        'parent_item'       => __('Parent Procedures Category', 'hetmy'),
        'parent_item_colon' => __('Parent Procedures Category:', 'hetmy'),
        'edit_item'         => __('Edit Procedures Category', 'hetmy'),
        'update_item'       => __('Update Procedures Category', 'hetmy'),
        'add_new_item'      => __('Add New Procedures Category', 'hetmy'),
        'new_item_name'     => __('New Procedures Category Name', 'hetmy'),
        'menu_name'         => __('Procedures Category', 'hetmy'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'procedures-category'),
    );

    register_taxonomy('procedures-category', array('procedures'), $args);

     // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x('Procedures Gallery', 'taxonomy general name', 'hetmy'),
        'singular_name'     => _x('Procedures Gallery', 'taxonomy singular name', 'hetmy'),
        'search_items'      => __('Search Procedures Gallery', 'hetmy'),
        'all_items'         => __('All Procedures Gallery', 'hetmy'),
        'parent_item'       => __('Parent Procedures Gallery', 'hetmy'),
        'parent_item_colon' => __('Parent Procedures Gallery:', 'hetmy'),
        'edit_item'         => __('Edit Procedures Gallery', 'hetmy'),
        'update_item'       => __('Update Procedures Gallery', 'hetmy'),
        'add_new_item'      => __('Add New Procedures Gallery', 'hetmy'),
        'new_item_name'     => __('New Procedures Gallery Name', 'hetmy'),
        'menu_name'         => __('Procedures Gallery', 'hetmy'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'procedures-gallery'),
    );

    register_taxonomy('procedures-gallery', array('gallery'), $args);

}