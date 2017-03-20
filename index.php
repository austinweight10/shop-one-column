<?php get_header(); ?>

	<body>

	<!-- product container -->
	<div class="pdpinfo">
	</div>

	<!-- checkout container -->
	<div class="checkoutajax">
	</div>

	<div class="home-page__clouds">
		<div id="background-wrap">
	    <div class="x1">
	        <div class="cloud"></div>
	    </div>

	    <div class="x2">
	        <div class="cloud"></div>
	    </div>

	    <div class="x3">
	        <div class="cloud"></div>
	    </div>

	    <div class="x4">
	        <div class="cloud"></div>
	    </div>

	    <div class="x5">
	        <div class="cloud"></div>
	    </div>
		</div>
	</div>

			<div class="home-page dragscroll">
				<div class="home-page-inner dragscroll">


					<!-- build a for each loop here -->

					<div class="product product1" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlayfire">
								<span class="price">£<?php $product = wc_get_product( 11 );
								echo $product->get_regular_price(); ?></span>
								<span class="saleprice">£<?php $product = wc_get_product( 11 );
								echo $product->get_sale_price(); ?></span>
								<div class="productbuttons">
									<a href="http://localhost:8888/wordpress/product/chgdfghh#?gf/" class="moreinfo">more info</a>
									 <a href="<?php $woocommerce->cart->add_to_cart($product,$qty); ?>" class="addtocart">add to cart</a>
								</div>
								<span class="outodstock"><?php $product = wc_get_product( 11 );
								echo $product->get_stock_quantity(); ?> left in stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/1.png">
					</div>

					<div class="product product2" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlayearth">
								<span class="price">£<?php $product = wc_get_product( 11 );
								echo $product->get_regular_price(); ?></span>
								<span class="saleprice">£<?php $product = wc_get_product( 11 );
								echo $product->get_sale_price(); ?></span>
								<div class="productbuttons">

									<a href="http://localhost:8888/wordpress/product/chgdfghh#?gf/" class="moreinfo">more info</a>
									 <a href="<?php $woocommerce->cart->add_to_cart($product,$qty); ?>" class="addtocart">add to cart</a>
								</div>
								<span class="outodstock">left in stock <?php $product = wc_get_product( 11 );
								echo $product->get_stock_quantity(); ?></span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/2.png">
					</div>

					<div class="product product3" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlaywater">
								<span class="price">£12:00</span>
								<span class="saleprice">£10:00</span>
								<div class="productbuttons">
									<a href="#?" class="moreinfo">more info</a>
									<!-- <a href="dgfgdfs" class="addtocart">add to cart</a> -->
								</div>
								<span class="outodstock">out of stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/3.png">
					</div>

					<div class="product product4" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlaywind">
								<span class="price">£12:00</span>
								<span class="saleprice">£10:00</span>
								<div class="productbuttons">
									<a href="#?" class="moreinfo">more info</a>
									<!-- <a href="dgfgdfs" class="addtocart">add to cart</a> -->
								</div>
								<span class="outodstock">out of stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/4.png">
					</div>

					<div class="product product5" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlayearth">
								<span class="price">£12:00</span>
								<span class="saleprice">£10:00</span>
								<div class="productbuttons">
									<a href="#?" class="moreinfo">more info</a>
									<!-- <a href="dgfgdfs" class="addtocart">add to cart</a> -->
								</div>
								<span class="outodstock">out of stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/5.png">
					</div>

					<div class="product product6" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlaywater">
								<span class="price">£12:00</span>
								<span class="saleprice">£10:00</span>
								<div class="productbuttons">
									<a href="#?" class="moreinfo">more info</a>
									<!-- <a href="dgfgdfs" class="addtocart">add to cart</a> -->
								</div>
								<span class="outodstock">out of stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/6.png">
					</div>

					<div class="product product7" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlaywind">
								<span class="price">£12:00</span>
								<span class="saleprice">£10:00</span>
								<div class="productbuttons">
									<a href="#?" class="moreinfo">more info</a>
									<!-- <a href="dgfgdfs" class="addtocart">add to cart</a> -->
								</div>
								<span class="outodstock">out of stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/7.png">
					</div>

					<div class="product product8" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlayearth">
								<span class="price">£12:00</span>
								<span class="saleprice">£10:00</span>
								<div class="productbuttons">
									<a href="#?" class="moreinfo">more info</a>
									<!-- <a href="dgfgdfs" class="addtocart">add to cart</a> -->
								</div>
								<span class="outodstock">out of stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/8.png">
					</div>

					<div class="product product9" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlaywater">
								<span class="price">£12:00</span>
								<span class="saleprice">£10:00</span>
								<div class="productbuttons">
									<a href="#?" class="moreinfo">more info</a>
									<!-- <a href="dgfgdfs" class="addtocart">add to cart</a> -->
								</div>
								<span class="outodstock">out of stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/9.png">
					</div>

					<div class="product product10" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlayearth">
								<span class="price">£12:00</span>
								<span class="saleprice">£10:00</span>
								<div class="productbuttons">
									<a href="#?" class="moreinfo">more info</a>
									<!-- <a href="dgfgdfs" class="addtocart">add to cart</a> -->
								</div>
								<span class="outodstock">out of stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/10.png">
					</div>

					<div class="product product11" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlaywater">
								<span class="price">£12:00</span>
								<span class="saleprice">£10:00</span>
								<div class="productbuttons">
									<a href="#?" class="moreinfo">more info</a>
									<!-- <a href="dgfgdfs" class="addtocart">add to cart</a> -->
								</div>
								<span class="outodstock">out of stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/11.png">
					</div>

					<div class="product product12" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlayfire">
								<span class="price">£12:00</span>
								<span class="saleprice">£10:00</span>
								<div class="productbuttons">
									<a href="#?" class="moreinfo">more info</a>
									<!-- <a href="dgfgdfs" class="addtocart">add to cart</a> -->
								</div>
								<span class="outodstock">out of stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/12.png">
					</div>

					<div class="product product13" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlayfire">
								<span class="price">£12:00</span>
								<span class="saleprice">£10:00</span>
								<div class="productbuttons">
									<a href="#?" class="moreinfo">more info</a>
									<!-- <a href="dgfgdfs" class="addtocart">add to cart</a> -->
								</div>
								<span class="outodstock">out of stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/13.png">
					</div>

					<div class="product product14" onmouseenter="hoveroverprod()" onmouseleave="hoveroutprod()">
						<div class="producthover">
						</div>
						<div class="productcontainer">
							<div class="productinfo overlaywater">
								<span class="price">£12:00</span>
								<span class="saleprice">£10:00</span>
								<div class="productbuttons">
									<a href="#?" class="moreinfo">more info</a>
									<!-- <a href="dgfgdfs" class="addtocart">add to cart</a> -->
								</div>
								<span class="outodstock">out of stock</span>
							</div>
						</div>
						<img src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/14.png">
					</div>

					<img class="site-background" src="/Yawp_Build/Yawp_Build/dev/img/png_jpg/site-bkg.jpg">
				</div>
			</div>

			<?php
			$cartcount = sprintf ( _n( '%d item', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() );

			?>

			<div class="cart">
				<div class="cart-menu-icon">
				</div>
				<p class="cart-menu-items"><?php echo $cartcount ?></p>
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
		            echo '<div class="menu-elements-cart" id="accordion"><h2 class="menu-accordian-line-cart">'.$_product->post_title.'</h2><div class="menu-content-cart collapsible"><p>  <br> Quantity: '.$values['quantity'].'<br>Price:'.$price.'';
		            echo "Regular Price: ".get_post_meta($values['product_id'] , '_regular_price', true)."<br>";
		            echo "Sale Price: ".get_post_meta($values['product_id'] , '_sale_price', true)."<br>";
								echo "</p>";
								echo '<a href="'.woocommerce_quantity_input().'" class="cart-remove">remove</a></div></div>';

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
					<h1 class="menu-menu">menu</h1><span class="menu-closing menu-menu-close">close</span>
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
