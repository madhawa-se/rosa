<?php

// Creating the widget 
class wpb_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			// Base ID of your widget
			'wpb_widget',

			// Widget name will appear in UI
			__( 'WPBeginner Widget', 'wpb_widget_domain' ),

			// Widget description
			array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
		);
	}

	// Creating widget front-end
	// This is where the action happens
	public  function widget( $args, $instance ) {
		$name = apply_filters( 'widget_title', $instance[ 'name' ] );
		$url = apply_filters( 'widget_title', $instance[ 'url' ] );
		$comment= apply_filters( 'widget_title', $instance[ 'comment' ] );
		// before and after widget arguments are defined by themes
		echo $args[ 'before_widget' ];
			
			?>
			
			<div class="ur-block">
				<div><h4><?php echo $name ?></h4></div>
				<div class="img"><img src="<?php echo $url ?>" alt=""></div>
				<div><p><?php echo $comment ?></p></div>
			</div>
			
			<?php

		// This is where you run the code and display the output
		//echo __( 'Hello, World!', 'wpb_widget_domain' );
		echo $args[ 'after_widget' ];
	}

	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'name' ] ) ) {
			$name = $instance[ 'name' ];
		} else {
			$name = 'defaults';
		}

		if ( isset( $instance[ 'url' ] ) ) {
			$url = $instance[ 'url' ];
		} else {
			$url = 'defaults';
		}

		if ( isset( $instance[ 'comment' ] ) ) {
			$comment = $instance[ 'comment' ];
		} else {
			$comment = 'defaults';
		}
		// Widget admin form
		?>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>">
				<?php _e( 'name:' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name); ?>"/>
		</p>
		
		
		<p>
			<label for="<?php echo $this->get_field_id( 'url' ); ?>">
				<?php _e( 'url:' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>"/>
		</p>
		
		
		<p>
			<label for="<?php echo $this->get_field_id( 'comment' ); ?>">
				<?php _e( 'comment' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'comment' ); ?>" name="<?php echo $this->get_field_name( 'comment' ); ?>" type="text" value="<?php echo esc_attr( $comment); ?>"/>
		</p>
		<?php
	}

	// Updating widget replacing old instances with new
	public  function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance[ 'name' ] = ( !empty( $new_instance[ 'name' ] ) ) ? strip_tags( $new_instance[ 'name' ] ) : '';
		$instance[ 'url' ] = ( !empty( $new_instance[ 'url' ] ) ) ? strip_tags( $new_instance[ 'url' ] ) : '';
		$instance[ 'comment' ] = ( !empty( $new_instance[ 'comment' ] ) ) ? strip_tags( $new_instance[ 'comment' ] ) : '';
		return $instance;
	}

} // Class wpb_widget ends here