<?php
	
class user_review_widget extends WP_Widget{
	
	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'ur_widget',
		// Widget name will appear in UI
		__('user review widget', 'ur_widget_domain'),
		// Widget description
		array( 'description' => __( 'user review widget', 'ur_widget_domain' ), )
		);
	}

	public function widget( $args, $instance ) {
		
		$facebook_link=esc_attr($instance['facebook_link']);
		var_dump($instance);
		echo $args["before_widget"];
		var_dump($facebook_link);
		$this->print_widget($facebook_link);
		//echo $args["after_widget"];
	}
	
	public function form( $instance ) {
		$this->get_form($instance);
	}
	
	public function get_form($instance){
		if ( isset( $instance['facebook_link'] ) ) {
			$facebook_link=esc_attr($instance['facebook_link']);
		}else{
			$facebook_link="ww.facebook.com/1";
		}
		?>
		<!-- html bigin-->
		
		
		<p>
<label for="<?php echo $this->get_field_id( 'facebook_link' ); ?>"><?php _e( 'facebook link:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'facebook_link' ); ?>" name="<?php echo $this->get_field_name( 'facebook_link' ); ?>" type="text" value="<?php echo esc_attr( $facebook_link ); ?>" />
</p>
			<!-- html end-->
		
		<?php
	}
	
	public function print_widget($facebook_link){
		?>
		
		<div class="ur-block">
			<div><h2>name</h2></div>
			<div class="img"><img src="<?php echo $facebook_link ?>" alt=""></div>
			<div><p>nice house for stay cool</p></div>
		</div>
		
		<?php
			var_dump( $facebook_link);
	}
	
	public function update( $new_instance, $old_instance ) {
		var_dump( $new_instance);
		$instance=array('facebook_link'=>(!empty($new_instance["facebook_link"])) ? strip_tags($new_instance["facebook_link"]) : 'hmm');
		return $instance;
	}
}