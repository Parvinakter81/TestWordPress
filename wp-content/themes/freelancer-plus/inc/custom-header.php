<?php
/**
 * @package Freelancer Plus
 * Setup the WordPress core custom header feature.
 *
 * @uses freelancer_plus_header_style()
 */
function freelancer_plus_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'freelancer_plus_custom_header_args', array(		
		'default-text-color'     => 'fff',
		'width'                  => 2500,
		'height'                 => 280,
		'wp-head-callback'       => 'freelancer_plus_header_style',		
	) ) );
}
add_action( 'after_setup_theme', 'freelancer_plus_custom_header_setup' );

if ( ! function_exists( 'freelancer_plus_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see freelancer_plus_custom_header_setup().
 */
function freelancer_plus_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header {
			background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	
	</style>
	<?php 
}
endif;