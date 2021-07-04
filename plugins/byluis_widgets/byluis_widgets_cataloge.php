<?php
/*

    * Plugin Name:       byluis_widgets_cataloge
    * Plugin URI:        https://luiscasamajor.trimetastudio.com/
    * Description:       Este plugin añade widgets personalizados para el tema logolate-byluis
    * Version:           1.0.0
    * Requires at least: 5.7.2
    * Requires PHP:      8.0
    * Author:            Luis Casamajor Paloma
    * Author URI:        https://luiscasamajor.trimetastudio.com/
    * License:           GPL v2 or later
    * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
    * Text Domain:       byluis_widgets_cataloge
    * Domain Path:       /languages

*/


# Sirve para ocultar el codigo editable dentro del wordpress
if(!defined('ABSPATH')) die();


/**
 * Adds byluis_widget_cataloges widget.
 */
class byluis_widget_cataloges extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'byluis_widget_cataloges', // Base ID
			esc_html__( 'Cataloge', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Add list of new cataloges', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
		$num_cataloges =  $instance['num_cataloges'];
		if (isset($num_cataloges)){
			$num_cataloges = 3;
		 }
		?>
		<ul>
			<?php
				$args = array(
					'post_type' => 'luis_logolate_clases',
					'posts_per_page' => $num_cataloges,
				);
				$catalogos = new WP_Query($args);
				while ($catalogos->have_posts()){ 
					$catalogos->the_post(); ?>

					<li class="catalogo-sidebar">
						<div class="sidebar-image">
							<a href="<?php the_permalink(); ?>">
								<?php  the_post_thumbnail('thumbnail'); ?>
							</a>
						</div>

						<div class="container-sidebar">
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
							</a>
						</div>

					</li>

			<?php } ?>
		</ul>

		<?php
		// echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Titulo', 'text_domain' );
		$num_cataloges = !empty( $instance['num_cataloges'] ) ? $instance['num_cataloges'] : esc_html__( 'Numero de Catalogos:', 'byluis');
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Titulo:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'num_cataloges' ) ); ?>"><?php esc_attr_e( '¿Cuantos catálogos a mostrar?:', 'byluis' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'num_cataloges' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'num_cataloges' ) ); ?>" type="number" value="<?php echo esc_attr( $num_cataloges ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['num_cataloges'] = ( ! empty( $new_instance['num_cataloges'] ) ) ? sanitize_text_field( $new_instance['num_cataloges'] ) : '';

		return $instance;
	}

} //byluis_widget_cataloges

// byluis_widget_cataloges widget
function register_byluis_widget_cataloges() {
    register_widget( 'byluis_widget_cataloges' );
}
add_action( 'widgets_init', 'register_byluis_widget_cataloges' );












?>