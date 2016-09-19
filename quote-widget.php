<?php

// Creating the widget 
class qtd_widget extends WP_Widget {

	function __construct() {
	parent::__construct(
	// Base ID of the widget
	'qtd_widget', 

	// Widget name that will appear in UI
	__('Quote Widget', 'qtd_widget_domain'), 

	// Widget description
	array( 'description' => __( 'Get a Quote widget in your site', 'qtd_widget_domain' ), ) 
	);
}

// Creating widget front-end
// This is where the action happens

public function widget( $args, $instance ) {
	$title = apply_filters( 'widget_title', $instance['title'] );
	// before and after widget arguments are defined by themes
	echo $args['before_widget'];
	if ( ! empty( $title ) )
	echo $args['before_title'] . $title . $args['after_title'];

// This is where the Quotes are randomly selected from the available ones using WP_Query.

	$myquery=array('post_type'=>'quote_display', 'orderby'=>'rand', 'posts_per_page'=>'1'); 
	$quote=new WP_Query($myquery); 
	while ($quote->have_posts()) : $quote->the_post(); ?> 
		<p><strong><?php esc_html('quote', the_content());?></strong></p>
		<p><?php esc_html('quote-author-name', the_title()); ?></p> 
	<?php endwhile; wp_reset_postdata(); 
	echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
}

else {
	$title = __( 'Your Quote Widget Title', 'qtd_widget_domain' );
}

// Widget admin form
?>

<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	return $instance;
	}
} // Class qtd_widget ends here

// Register and load the widget

function qtd_load_widget() {
	register_widget( 'qtd_widget' );
}
add_action( 'widgets_init', 'qtd_load_widget' );