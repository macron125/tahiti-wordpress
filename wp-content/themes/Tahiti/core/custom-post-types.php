<?php

// Island Post Type

function create_islands_post_type() {

  $labels = array(
    'name'                  => __( 'Islands', 'Post Type General Name', 'tahiti' ),
    'singular_name'         => __( 'Island', 'Post Type Singular Name', 'tahiti' ),
    'menu_name'             => __( 'Islands', 'tahiti' ),
    'name_admin_bar'        => __( 'Island', 'tahiti' ),
    'archives'              => __( 'Archives', 'tahiti' ),
    'parent_item_colon'     => __( 'Island', 'tahiti' ),
    'all_items'             => __( 'All Islands', 'tahiti' ),
    'add_new_item'          => __( 'Add New Island', 'tahiti' ),
    'add_new'               => __( 'Add New', 'tahiti' ),
    'new_item'              => __( 'New Island', 'tahiti' ),
    'edit_item'             => __( 'Edit Island', 'tahiti' ),
    'update_item'           => __( 'Update Island', 'tahiti' ),
    'view_item'             => __( 'View Island', 'tahiti' ),
    'search_items'          => __( 'Search Island', 'tahiti' ),
    'not_found'             => __( 'Not found', 'tahiti' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'tahiti' ),
    'featured_image'        => __( 'Featured Image', 'tahiti' ),
    'set_featured_image'    => __( 'Set featured image', 'tahiti' ),
    'remove_featured_image' => __( 'Remove featured image', 'tahiti' ),
    'use_featured_image'    => __( 'Use as featured image', 'tahiti' ),
    'insert_into_item'      => __( 'Insert into Island', 'tahiti' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Island', 'tahiti' ),
    'items_list'            => __( 'Islands list', 'tahiti' ),
    'items_list_navigation' => __( 'Islands list navigation', 'tahiti' ),
    'filter_items_list'     => __( 'Filter Islands list', 'tahiti' ),
  );

  $args = array(
    'label'                 => __( 'Islands', 'tahiti' ),
    'description'           => __( 'Islands', 'tahiti' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-palmtree',
    'taxonomies'            => array( 'type' ),
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,        
    'exclude_from_search'   => false,
    'publicly_queryable'    => false,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
    'rewrite'               => array('with_front' => false)  
  );

  register_post_type( 'islands', $args );

}

add_action( 'init', 'create_islands_post_type', 0 );