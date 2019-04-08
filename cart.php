<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shopping Cart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place Dairest icon in the url location -->
        <link rel="icon" href="img/logo/logo1.png" />

        <!-- google-font -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- nivo-slider css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!--linearicons css -->
        <link rel="stylesheet" href="css/linearicons-icon-font.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
    </head>

    <body>
		<!-- header-start -->
		<header>
			<div class="header-top-area ptb-10 hidden-xs header-top-area-4">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-5">
              <div class="header-top-right header-top-left-4">
								<p>FREE SHIPPING ON ORDERS OVER $49</p>
							</div>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-7 header-top-right-4">
							<div class="header-top-left">
								<ul>
                   <li><a href="cart.php">My Orders</a></li>
                    <li class="click_menu"><a href="#"> <?php echo $_SESSION['username'] ?><i class="fa fa-angle-down"></i></a>
										  <ul class="click_menu_show">
											  <li><a href="sign-in.php">My Account</a></li>
											  <li><a href="wishlist.php">My Wish List</a></li>
											  <li><a href="sign-in.php">Compare Products</a></li>
                                              <li><a href="logout.php">Log Out</a></li>
										  </ul>
									</li>
								
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="header-bottom-area home-page-2 ptb-10" style="background-color:rgb(110,65,10)">
				<div class="container">
					<div class="row">

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="menu-search-box scnd-fix">
								<form action="#">
									<input type="text" placeholder="Search here..."/>
									<button><span class="lnr lnr-magnifier"></span></button>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="logo logo2">
								<a href="index.php"><img src="img/logo/logo2.png" width="300px" height="100px" alt="" /></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
							<div class="header-bottom-right-4-inner">
								<a href="#" style="color:#ffffff"><span class="lnr lnr-heart"></span></a>
							</div>
							<div class="header-bottom-right header-bottom-right-4">
								<div class="shop-cart shop-cart-4">
									<a href="#" style="color:#ffffff"><span class="lnr lnr-cart"></span></a>
								</div>
								<div class="shop-cart-hover shop-cart-hover-4 fix">
									<ul>
										<li>
											<div class="cart-img">
												<a href="#"><img src="img/cart/1.jpg" alt="" /></a>
											</div>
                      <div class="cart-content">
                        <h4><a href="#">1 x Classic French Macarons...</a></h4>
                        <span><a href="#">18 pieces</a></span>
                        <span class="cart-price">$ 34.99</span>
                      </div>
											<div class="cart-del">
												<i class="fa fa-times-circle"></i>
											</div>
										</li>
										<li>
											<div class="cart-img">
												<a href="#"><img src="img/cart/2.jpg" alt="" /></a>
											</div>
                      <div class="cart-content">
												<h4><a href="#">1 x MoonCake Mid-Autumn Festival...</a></h4>
												<span><a href="#">16 pieces</a></span>
												<span class="cart-price">$ 28.59</span>
											</div>
											<div class="cart-del">
												<i class="fa fa-times-circle"></i>
											</div>
										</li>

										<li class="total-price"><span> Total $ 63.58 </span></li>
										<li class="checkout-bg">
											<a href="checkout.php">checkout <i class="fa fa-angle-right"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header-end -->

    <!-- mainmenu-area-start -->
		<div class="mainmenu-area home-page-2 mainmenu-area-4" id="main_h">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="mainmenu hidden-xs">
							<nav>
								<ul>
                                    <li><a href="index.php">Home</a></li>
                  <li><a href="#">Navigation</a>
                    <ul>
                      <li><a href="wishlist.php">my wishlist</a></li>
                      <li><a href="cart.php">cart page</a></li>
                      <li><a href="checkout.php">checkout</a></li>
                      <li><a href="product-details.php">product-details</a></li>
                      <li><a href="user_accountpage.php">User account</a></li>
                      <li><a href="sign-in.php">login</a></li>
                                            <li><a href="sign-up.php">Register</a></li>
                      <li><a href="shop.php">shop </a></li>
                      <li><a href="contact.php">contact us</a></li>
                    </ul>
                  </li>

                  <li><a href="#">Category</a>
                    <ul>
                      <li><a href=#>New Arrivals</a></li>
                      <li><a href=#>Famous Brands</a></li>
                      <li><a href=#>Local Popular</a></li>
                      <li><a href=#>Snickers</a></li>
                      <li><a href=#>Creations</a></li>
                    </ul>
                  </li>

                  <li><a href="shop.php">Gifts</a>
                    <ul>
                      <li><a href=#>Birthday Gifts</a></li>
                      <li><a href=#>Anniversary</a></li>
                      <li><a href=#>Baby Showers</a></li>
                      <li><a href=#>Business Gifts</a></li>
                      <li><a href=#>Treat Yourself</a></li>
                    </ul>
                  </li>

                  <li><a href="shop.php">Chocolate</a>
                    <ul>
                      <li><a href=#>Dark Chocolate</a></li>
                      <li><a href=#>Milk Chocolate</a></li>
                      <li><a href=#>White Chocolate</a></li>
                      <li><a href=#>Kosher Chocolate</a></li>
                      <li><a href=#>Associated Chocolate</a></li>
                    </ul>
                  </li>

                  <li><a href="shop.php">Sprinkles</a>
                    <ul>
                      <li><a href=#>Mixes</a></li>
                      <li><a href=#>Candy</a></li>
                      <li><a href=#>Kits</a></li>
                      <li><a href=#>Quins</a></li>
                      <li><a href=#>Vegan</a></li>
                    </ul>
                  </li>

									<li><a href="contact.php">contact</a></li>

								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mobile-menu">
							<nav id="mobile-menu">
								<ul>
                  <li><a href="#">Navigation</a>
                    <ul>
                      <li><a href="wishlist.php">my wishlist</a></li>
                      <li><a href="cart.php">cart page</a></li>
                      <li><a href="checkout.php">checkout</a></li>
                      <li><a href="product-details.php">product-details</a></li>
                      <li><a href="user_accountpage.php">User account</a></li>
                      <li><a href="sign-in.php">login</a></li>
                                            <li><a href="sign-up.php">Register</a></li>
                      <li><a href="shop.php">shop </a></li>
                      <li><a href="contact.php">contact us</a></li>
                    </ul>
                  </li>

                  <li><a href="shop.php">Shop</a></li>
									<li><a href="contact.php">contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- mainmenu-area-end -->

		<!-- page-title-wrapper-start -->
		<div class="page-title-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="page-title">
							<h3>Cart</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- page-title-wrapper-end -->

		<!-- entry-header-area start -->
		<div class="entry-header-area pt-40">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="entry-header">
							<h1 class="entry-title">Cart</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- entry-header-area end -->

		<!-- cart-main-area start -->
		<div class="cart-main-area ptb-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<form action="#">
							<div class="table-content table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-thumbnail">Image</th>
											<th class="product-name">Product</th>
											<th class="product-price">Price</th>
											<th class="product-quantity">Quantity</th>
											<th class="product-subtotal">Total</th>
											<th class="product-remove">Remove</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="product-thumbnail"><a href="#"><img src="img/cart/1.jpg" alt="" /></a></td>
											<td class="product-name"><a href="#">Classic French Macarons</a></td>
											<td class="product-price"><span class="amount">$34.99</span></td>
											<td class="product-quantity"><input type="number" value="1" /></td>
											<td class="product-subtotal">$34.99</td>
											<td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
										</tr>
										<tr>
											<td class="product-thumbnail"><a href="#"><img src="img/cart/2.jpg" alt="" /></a></td>
											<td class="product-name"><a href="#">Mooncake Mid-Autumn Festival</a></td>
											<td class="product-price"><span class="amount">$28.59</span></td>
											<td class="product-quantity"><input type="number" value="1" /></td>
											<td class="product-subtotal">$28.59</td>
											<td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
									<div class="buttons-cart">
										<input type="submit" value="Update Cart" />
										<a href="#">Continue Shopping</a>
									</div>
									<div class="coupon">
										<h3>Coupon</h3>
										<p>Enter your coupon code if you have one.</p>
										<input type="text" placeholder="Coupon code" />
										<input type="submit" value="Apply Coupon" />
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
									<div class="cart_totals">
										<h2>Cart Totals</h2>
										<table>
											<tbody>
												<tr class="cart-subtotal">
													<th>Subtotal</th>
													<td><span class="amount">$63.58</span></td>
												</tr>
												<tr class="shipping">
													<th>Shipping</th>
													<td>
														<ul id="shipping_method">
															<li>
																<input type="radio" />
																<label>
																	Flat Rate: <span class="amount">$15.00</span>
																</label>
															</li>
															<li>
																<input type="radio" checked/>
																<label>
																	Free Shipping
																</label>
															</li>
															<li></li>
														</ul>
														<p><a class="shipping-calculator-button" href="#">Calculate Shipping</a></p>
													</td>
												</tr>
												<tr class="order-total">
													<th>Total</th>
													<td>
														<strong><span class="amount">$63.58</span></strong>
													</td>
												</tr>
											</tbody>
										</table>
										<div class="wc-proceed-to-checkout">
											<a href="#">Proceed to Checkout</a>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- cart-main-area end -->

    <!-- contact-area-start -->
    <div class="contact-area ptb-40">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar_b-30">
            <div class="contuct-info text-center">
              <h4>Sign up for news & offers!</h4>
              <p>You may safely unsubscribe at any time</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-1 col-xs-12">
            <div class="search-box">
              <form action="#">
                <input type="email" placeholder="Enter your email address"/>
                <button><span class="lnr lnr-envelope"></span></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contact-area-end -->

  <!-- footer-area-start -->
		<div class="footer-area footer-area-4 ptb-80" style="background-color:rgb(110,65,30); width:100%; height:55%"  >
			<div class="container" >
				<div class="row" >
					<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 mar_b-30">
						<div class="footer-wrapper">
							<div class="footer-logo">
								<a href="#"><img src="img/logo/logo2.png" width="200px" height="50px" alt="" /></a>
							</div>
							<p style="color:#ffffff">We devote to provide you the best shopping experience with sweets and treats.</p>
							

						</div>
					</div>

          <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
          </div>

          <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
          </div>

					<div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
						<div class="footer-wrapper">
							<div class="footer-title">
								<a href="#"><h3 	style="color:rgba(240,128,128,0.99)">useful links</h3></a>
							</div>
							<div class="footer-wrapper">
								<ul class="usefull-link" >
									<li ><a href="#" style="color:#ffffff">Contact us</a></li>
									<li><a href="#" style="color:#ffffff">Site map</a></li>
									<li><a href="#" style="color:#ffffff">About us</a></li>
									<li><a href="#" style="color:#ffffff">Specials</a></li>
									<li><a href="#" style="color:#ffffff">Customer service</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

   <!-- footer-area-end -->

   <!-- .copyright-area-start -->
   <div class="copyright-area">
     <div class="container">
       <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mar_b-30">
           <div class="copyright text-left">
             <p>2019 @ All Rights Reserved - <a href="#"></a></p>
           </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
           <div class="copyright-img text-right">
             <a href="#"><img src="img/support/payment.png" alt="" /></a>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- .copyright-area-end -->

   <!-- all js here -->
   <!-- jquery latest version -->
       <script src="js/vendor/jquery-1.12.0.min.js"></script>
   <!-- bootstrap js -->
       <script src="js/bootstrap.min.js"></script>
   <!-- owl.carousel js -->
       <script src="js/owl.carousel.min.js"></script>
   <!-- meanmenu js -->
       <script src="js/jquery.meanmenu.js"></script>
   <!-- jquery-ui js -->
       <script src="js/jquery-ui.min.js"></script>
   <!-- wow js -->
       <script src="js/wow.min.js"></script>
   <!-- nivo.slider js -->
       <script src="js/jquery.nivo.slider.js"></script>
   <!-- magnific-popup js -->
       <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- scrolly js -->
       <script src="js/jquery.scrolly.js"></script>
   <!-- plugins js -->
       <script src="js/plugins.js"></script>
   <!-- main js -->
       <script src="js/main.js"></script>
        
        <script type="text/javascript">

if (screen.width <= 699) {
location.replace("mobile-cart.php")
}


   
</script>  
   </body>
</html>
