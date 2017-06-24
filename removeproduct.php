<?php
  global $woocommerce;
  $items = $woocommerce->cart->get_cart();

  foreach($items as $item => $values) {

		wc()->cart->remove_cart_item($item)

  }
?>
