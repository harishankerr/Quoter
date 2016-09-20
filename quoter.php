<?php
/*
Plugin Name: Quoter
Plugin URI:  http://harishanker.net/
Description: The plugin to get a random quote displayed anywhere in your WordPress site. 
Version:     0.01
Author:      Hari Shanker R
Author URI:  https://harishanker.net/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/

// Including files to register the custom post type & widgets.

include( plugin_dir_path( __FILE__ ) . 'register-quote.php');
include( plugin_dir_path( __FILE__ ) . 'quote-widget.php');

// This function creates the shortcode and finds a random quote from the list of quotes available as custom post types.
function qtd_quote_display( $content ) {
//	remove_all_filters('posts_orderby'); 
	$args=array('post_type'=>'quote_display', 'orderby'=>'rand', 'posts_per_page'=>'1'); 
	$quote=new WP_Query($args); 
	while ($quote->have_posts()) : $quote->the_post(); 
/*		<h3><?php esc_html('quote', the_content());?></h3>
		<p><?php esc_html('quote-author-name', the_title()); ?></p> 
	<?php endwhile; wp_reset_postdata(); */?>
<?php

}

add_shortcode('quotes', 'qtd_quote_display');


function qtd_your_quote( $atts ) {
  	if ( ! $atts['id'] ) {
    	return __('Sorry!');
  	}

	$post_id = $atts['id'];
	$queried_post = get_post($post_id);
	$title = $queried_post->post_title;
	$content = $queried_post->post_content;?>
	<h3><?php echo $content;?></h3>
	<p><?php echo  $title; ?></p>
<?php
}
add_shortcode('quote', 'qtd_your_quote');

