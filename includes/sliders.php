<?php
add_action( 'init', 'create_sider_post_type' );


/*
CREATE CUSTOM POST TYPE FOR SLIDER
*/
function create_sider_post_type() {
  $labels = array(
    'name'                => _x('Project Sliders', 'post type general name'),
    'singular_name'       => _x('Project', 'post type singular name'),
    'archives'            => __( 'Projects' ),
    'add_new'             => _x('Add New Project', 'portfolio item'),
    'add_new_item'        => __('Add New Project'),
    'edit_item'           => __('Edit Project'),
    'new_item'            => __('New Project'),
    'view_item'           => __('View Project'),
    'search_items'        => __('Search Projects'),
    'not_found'           =>  __('Nothing found'),
    'not_found_in_trash'  => __('Nothing found in Trash'),
    'parent_item_colon'   => ''
  );

  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'query_var'           => true,
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'menu_position'       => null,
    'menu_icon'           => 'dashicons-camera',
    'supports'            => array('title'),
    'has_archive'         => true,
  );

  register_post_type( 'str-slider' , $args );

}
