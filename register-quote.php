<?php
add_action( 'init', 'qtd_create_post_type' );
function qtd_create_post_type() {
  register_post_type( 'quote_display',
    array(
      'labels' => array(
        'name' => __( 'Quotes' ),
        'singular_name' => __( 'Quote' ),
        'add_new' => __('Add New Quote'),
        'add_new_item' => __('Add New Quote'),
        'edit_item' => __('Edit Quote'),
        'new_item' => __('New Quote'),
        'all_items' => __('All Quotes'),
        'view_item' => __('View Quote'),
        'search_items' => __('Search Quotes'),
        'not_found' =>  __('No Quotes Found'),
        'not_found_in_trash' => __('No Quotes found in Trash'), 
        'parent_item_colon' => '',
        'menu_name' => __('Quotes'),
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

function qtd_register_quote_type() {
// set up labels
  $labels = array(
    'name'              => __('Quote Categories'),
    'singular_name'     => __('Quote Category'),
    'search_items'      => __('Search Quote Categories'),
    'all_items'         => __('All Quote Categories'),
    'edit_item'         => __('Edit Quote Category'),
    'update_item'       => __('Update Quote Category'),
    'add_new_item'      => __('Add New Quote Category'),
    'new_item_name'     => __('New Quote Category'),
    'menu_name'         => __('Quote Categories')
  );
  // register taxonomy
  register_taxonomy( 'quotecat', 'quote_display', array(
    'hierarchical' => true,
    'labels' => $labels,
    'query_var' => true,
    'show_admin_column' => true
  ) );

}
add_action( 'init', 'qtd_register_quote_type' );

function qtd_register_quote_author() {
// set up labels
  $labels = array(
    'name'              => __('Quote Authors'),
    'singular_name'     => __('Quote Author'),
    'search_items'      => __('Search Quote Authors'),
    'all_items'         => __('All Quote Authors'),
    'edit_item'         => __('Edit Quote Author'),
    'update_item'       => __('Update Quote Author'),
    'add_new_item'      => __('Add New Quote Author'),
    'new_item_name'     => __('New Quote Author'),
    'menu_name'         => __('Quote Author')
  );
  // register taxonomy
  register_taxonomy( 'quoteauth', 'quote_display', array(
    'hierarchical' => true,
    'labels' => $labels,
    'query_var' => true,
    'show_admin_column' => true
  ) );

}
add_action( 'init', 'qtd_register_quote_author' );
