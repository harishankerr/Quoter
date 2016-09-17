<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'quote_display',
    array(
      'labels' => array(
        'name' => __( 'Quotes' ),
        'singular_name' => __( 'Quote' ),
        'add_new' => 'Add New Quote',
        'add_new_item' => 'Add New Quote',
        'edit_item' => 'Edit Quote',
        'new_item' => 'New Quote',
        'all_items' => 'All Quotes',
        'view_item' => 'View Quote',
        'search_items' => 'Search Quotes',
        'not_found' =>  'No Quotes Found',
        'not_found_in_trash' => 'No Quotes found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Quotes',
      ),
      'public' => true,
      'has_archive' => true,
      'public' => true,
      'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
      'exclude_from_search' => false,
      'capability_type' => 'post',
      'rewrite' => array( 'slug' => 'quotes' ),
    )
  );
}

function register_quote_type() {
// set up labels
  $labels = array(
    'name'              => 'Quote Categories',
    'singular_name'     => 'Quote Category',
    'search_items'      => 'Search Quote Categories',
    'all_items'         => 'All Quote Categories',
    'edit_item'         => 'Edit Quote Category',
    'update_item'       => 'Update Quote Category',
    'add_new_item'      => 'Add New Quote Category',
    'new_item_name'     => 'New Quote Category',
    'menu_name'         => 'Quote Categories'
  );
  // register taxonomy
  register_taxonomy( 'quotecat', 'quote_display', array(
    'hierarchical' => true,
    'labels' => $labels,
    'query_var' => true,
    'show_admin_column' => true
  ) );

}
add_action( 'init', 'register_quote_type' );

function register_quote_author() {
// set up labels
  $labels = array(
    'name'              => 'Quote Authors',
    'singular_name'     => 'Quote Author',
    'search_items'      => 'Search Quote Authors',
    'all_items'         => 'All Quote Authors',
    'edit_item'         => 'Edit Quote Author',
    'update_item'       => 'Update Quote Author',
    'add_new_item'      => 'Add New Quote Author',
    'new_item_name'     => 'New Quote Author',
    'menu_name'         => 'Quote Author'
  );
  // register taxonomy
  register_taxonomy( 'quoteauth', 'quote_display', array(
    'hierarchical' => true,
    'labels' => $labels,
    'query_var' => true,
    'show_admin_column' => true
  ) );

}
add_action( 'init', 'register_quote_author' );


?>