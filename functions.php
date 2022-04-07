<?php
/**
 * Betheme Child Theme
 *
 * @package Betheme Child Theme
 * @author Muffin group
 * @link https://muffingroup.com
 */

/**
 * Child Theme constants
 * You can change below constants
 */

// white label

define('WHITE_LABEL', false);

// Add to functions.php
add_filter( 'jetpack_just_in_time_msgs', '_return_false' );

/**
 * Enqueue Styles
 */

function mfnch_enqueue_styles()
{
	// enqueue the parent stylesheet
	// however we do not need this if it is empty
	// wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css');


	// Custom CSS
	wp_register_style('betheme-scss', get_stylesheet_directory_uri() . '/assets/scss/betheme-css.css', array(), '', 'all');
	wp_enqueue_style('betheme-scss');

	// enqueue the parent RTL stylesheet

	if (is_rtl()) {
		wp_enqueue_style('mfn-rtl', get_template_directory_uri() . '/rtl.css');
	}
	
	// enqueue Bootstrap 5.1.3
  wp_register_style( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all' );
	wp_enqueue_style( 'bootstrap' );

	// enqueue the child stylesheet

	wp_dequeue_style('style');
	wp_enqueue_style('style', get_stylesheet_directory_uri() .'/style.css');
	
	wp_register_script( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '513', true );
	wp_enqueue_script( 'bootstrap' );
	
}
add_action('wp_enqueue_scripts', 'mfnch_enqueue_styles', 101);

/**
 * Load Textdomain
 */

function mfnch_textdomain()
{
	load_child_theme_textdomain('betheme', get_stylesheet_directory() . '/languages');
	load_child_theme_textdomain('mfn-opts', get_stylesheet_directory() . '/languages');
}
// custom function
//
//
add_action( 'woocommerce_thankyou', 'order_extracod' );
function order_extracod( $order_id) {
     $order = new WC_Order( $order_id );
		if($order->is_paid()){
		$order->update_meta_data( '_order_upload_data', 0 );
		$order->save();
		}
}

// end custom function

/**
 * @snippet       Redirect to Checkout Upon Add to Cart - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    Woo 3.8
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

add_filter( 'woocommerce_add_to_cart_redirect', 'bbloomer_redirect_checkout_add_cart' );

function bbloomer_redirect_checkout_add_cart() {
return wc_get_checkout_url();
}
