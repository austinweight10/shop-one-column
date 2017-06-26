<?php get_header(); ?>

	<body>

		<!-- loader -->
		<div class="loader">
		</div>

		<!-- product container -->
		<div class="pdpinfo">
		</div>

		<!-- checkout container -->
		<div class="checkoutajax">
		</div>

		<!-- clouds -->
		<div class="home--clouds">
			<div class="home-page__clouds">
				<div id="background-wrap">
					<?php
						for ($x = 1; $x <= 5; $x++) {
								echo '<div class="x' . $x . '"><div class="cloud"></div></div>';
						}
					?>
				</div>
			</div>
		</div>

		<!-- main homepage -->
		<div class="home-page dragscroll">
			<div class="home-page-inner dragscroll">

				<?php

					for ($x = 1; $x <= 14; $x++) {

							if ($x === 2 || $x === 5 || $x === 8 || $x === 10) {
								$naturalElement = 'overlayearth';
							} else if ($x === 3 || $x === 6 || $x === 9 || $x === 11 || $x === 14) {
								$naturalElement = 'overlaywater';
							} else if ($x === 4 || $x === 7) {
								$naturalElement = 'overlaywind';
							} else if ($x === 1 || $x === 12 || $x === 13) {
								$naturalElement = 'overlayfire';
							};

							$product = wc_get_product(11); // get right products
							$productURL = get_permalink($x);  // to pull into ajax call
							$mediaURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

							echo '<div class="product product' . $x . '">';
								echo '<div class="producthover"></div>';
								echo '<div class="productcontainer">';
									echo '<div class="productinfo ' . $naturalElement . '">';
										echo '<span class="price">£' . $product->get_regular_price() . '</span>';

										if ($product->get_sale_price()) {
											echo '<span class="saleprice">£';
											echo $product->get_sale_price();
											echo '</span>';
										};

										echo '<div class="productbuttons">';
											echo '<a href="' . $productURL . '" class="moreinfo">more info</a>';
										echo '</div>';
										echo '<span class="outodstock">' . $product->get_stock_quantity() . 'left in stock</span>';
									echo '</div>';
								echo '</div>';
								echo '<img src="' . $mediaURL . 'wp-content/themes/shop-one-column/prod/img/png_jpg/' . $x . '.png">';
							echo '</div>';
					}

					echo '<img class="site-background" src="'. $mediaURL . 'wp-content/themes/shop-one-column/prod/img/png_jpg/site-bkg.jpg">';

				?>
			</div>
		</div>


			<!-- cart -->
			<div class="cart">
				<div class="cart-menu-icon">
				</div>
				<p class="cart-menu-items">
					<?php
						$cartcount = sprintf ( _n( '%d item', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() );
						echo $cartcount;
					?>
				</p>
			</div>

			<nav class="cart-menu col-xs-9 col-md-4" role="navigation">
				<div class="menu-content-cart">
					<h1 class="menu-menu-cart">CART</h1><span class="menu-closing menu-menu-close-cart">close</span>

					<?php

				    global $woocommerce;
				    $items = $woocommerce->cart->get_cart();

		        foreach($items as $item => $values) {

	            $_product = $values['data']->post;
							$price = get_post_meta($values['product_id'] , '_price', true);

	            echo '<div class="menu-elements-cart" id="accordion"><h2 class="menu-accordian-line-cart">'.$_product->post_title.'</h2><div class="menu-content-cart collapsible">';
							echo '<p>  <br>Price:'.$price.'';
	            // echo "<br>Regular Price: ".get_post_meta($values['product_id'] , '_regular_price', true)."<br>";
	            // echo "Sale Price: ".get_post_meta($values['product_id'] , '_sale_price', true)."<br>";
							echo "</p>";
							echo '<a class="cart-remove">remove</a></div></div>';

		        }

					?>

					<p class="cart-contents"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></p>

					<div class="checkout-button">
						<a href="<?php echo esc_url( wc_get_checkout_url() );?>" class="checkout-button button alt wc-forward">
							<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
						</a>
					</div>
				</div>
			</nav>


			<!-- logo -->
			<div class="menu-logo">
				<img class="menu-Yawp-logo">
			</div>

			<!-- main nav  -->
			<nav class="menu menu-open menu-close col-xs-9 col-md-4" role="navigation">
				<div class="menu-logo-inner">
					<img class="menu-Yawp-logo-inner">
				</div>
				<div class="menu-content">
					<h1 class="menu-menu">menu</h1><span class="menu-closing-main">close</span>
					<div class="menu-elements" id="accordion">
						<h2 class="menu-ember menu-accordian-line">Ember<span class="menu-ember-icon"></span></h2>
						<div class="menu-content collapsible">
							<p>Beautiful amber, ebony and charcoal grey toned jewellery that help encapsulate the essence of warmth and a fiery nature.</p>
						</div>
						<h2 class="menu-origin menu-accordian-line">Origin<span class="menu-origin-icon"></span></h2>
						<div class="menu-content collapsible">
							<p>Let these pieces of cool aqua with a splash of turquoise, white and teal wash over you with a calm collectiveness.</p>
						</div>
						<h2 class="menu-elixer menu-accordian-line">Elixer<span class="menu-elixer-icon"></span></h2>
						<div class="menu-content collapsible">
							<p>Feel the rush of the wind with flight inspired necklaces and earrings that elevate you to a new level of freedom and tranquility.</p>
						</div>
						<h2 class="menu-soar menu-accordian-line">Soar<span class="menu-soar-icon"></span></h2>
						<div class="menu-content collapsible">
							<p>Be at one with nature in statement jewellery in neutral and nude colours that can finish off any outfit with style.</p>
						</div>
					</div>
					<div class="menu-info" id="accordion2">
						<h2 class="menu-contact">Contact</h2>
						<div class="menu-content">
							<ul>
								<li>Please subscribe to our newsletter below:<?php
								if( function_exists( 'mc4wp_show_form' ) ) {
								    mc4wp_show_form();
								} ?></li>
								<li>Or contact us on: <a href="mailto:hello@yawp.co.uk">hello@yawp.co.uk</a></li>
							</ul>
						</div>
						<h2 class="menu-about">About</h2>
						<div class="menu-content">
							<p>Yawp is when life presents you with little gems that fill you with excitement (and you cant help but shout out). We are proud to present four collections of hand-picked jewellery inspired by the seasons of nature. As the seasons change, our jewellery stock will also transition into fresh new pieces.</p>
						</div>
					</div>
					<div class="menu-social">
						<a href="https://www.instagram.com/yawpjewellery/">
							<img class="menu-instagram-logo" src="/Yawp_Build/Yawp_Build/dev/img/svg/instagram.svg">
						</a>
						<a href="https://mobile.twitter.com/yawp_jewellery">
							<img class="menu-twitter-logo" src="/Yawp_Build/Yawp_Build/dev/img/svg/twitter.svg">
						</a>
					</div>
				<div>
		</nav>
	</body>
</html>

<?php get_footer(); ?>
