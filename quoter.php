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

error_log(print_r($_SERVER, true));
error_log(print_r($_POST, true));
error_log(print_r($_GET, true));

require_once( plugin_dir_path( __FILE__ ) . 'register-quote.php');
require_once( plugin_dir_path( __FILE__ ) . 'quote-widget.php');


function quote_display( $content ) {
remove_all_filters('posts_orderby'); 
$args=array('post_type'=>'quote_display', 'orderby'=>'rand', 'posts_per_page'=>'1'); 
$quote=new WP_Query($args); 
while ($quote->have_posts()) : $quote->the_post(); ?> 
<h3><?php esc_html('quote', the_content());?></h3>
<p><?php esc_html('quote-author-name', the_title()); ?></p> 
<?php endwhile; wp_reset_postdata(); 
}
add_shortcode('quotes', 'quote_display');
?>
