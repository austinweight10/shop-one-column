<?php
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_script( 'jqueryui', get_template_directory_uri() . '/prod/js/jquery-ui.min.js', array ( 'jquery' ), 1.12, true);
wp_enqueue_script( 'home', get_template_directory_uri() . '/prod/js/home.js', array ( 'jquery' ), 1.12, true);
wp_enqueue_script( 'cart', get_template_directory_uri() . '/prod/js/cart.js', array ( 'jquery' ), 1.12, true);
wp_enqueue_script( 'menu', get_template_directory_uri() . '/prod/js/menu.js', array ( 'jquery' ), 1.12, true);
wp_enqueue_script( 'pdp', get_template_directory_uri() . '/prod/js/pdp.js', array ( 'jquery' ), 1.12, true);
wp_enqueue_script( 'pdp', get_template_directory_uri() . '/prod/js/swiper.jquery.umd.min.js', array ( 'jquery' ), 1.12, true);
wp_enqueue_script( 'snow', get_template_directory_uri() . '/prod/js/snowstorm-min.js', array ( 'jquery' ), 1.12, true);
wp_enqueue_script( 'drag', get_template_directory_uri() . '/prod/js/dragscroll.js', array ( 'jquery' ), 1.12, true);

add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
	<?php

	$fragments['a.cart-contents'] = ob_get_clean();

	return $fragments;
}

?>
