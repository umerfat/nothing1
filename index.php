<?php include "includes/header.php"; ?>

<main class="content-wrapper oh">

    <!-- Navigation -->
    <header class="nav-type-1">

        <div class="top-bar hidden-sm hidden-xs">
            <div class="container">
                <div class="top-bar-line">
                    <div class="row">
                        <div class="top-bar-links">
                            <ul class="col-sm-6 top-bar-acc">
                                <li class="top-bar-link"><a href="#">My Account</a></li>
                                <li class="top-bar-link"><a href="#">My Wishlist</a></li>
                                <li class="top-bar-link"><a href="#">Login</a></li>
                                <li class="top-bar-link"><a href="">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- end top bar -->

        <nav class="navbar navbar-static-top">
            <div class="navigation" id="sticky-nav">
                <div class="container relative">

                    <div class="row">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Mobile cart -->
                            <div class="nav-cart mobile-cart hidden-lg hidden-md">
                                <div class="nav-cart-outer">
                                    <div class="nav-cart-inner">
                                        <a href="#" class="nav-cart-icon">2</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end navbar-header -->

                        <div class="header-wrap">
                            <div class="header-wrap-holder">

                                <!-- Logo -->
                                <div class="logo-container">
                                    <div class="logo-wrap text-center">
                                        <a href="index.php">
                                            <img class="logo" src="" alt="logo">
                                        </a>
                                    </div>
                                </div>

                                <!-- Search -->
                                <div class="nav-search hidden-sm hidden-xs">
                                    <form method="get">
                                        <input type="search" class="form-control" placeholder="Search">
                                        <button type="submit" class="search-button">
                                            <i class="icon icon_search"></i>
                                        </button>
                                    </form>
                                </div>

                                <!-- Cart -->
                                <div class="nav-cart-wrap hidden-sm hidden-xs">
                                    <div class="nav-cart right">
                                        <div class="nav-cart-outer">
                                            <div class="nav-cart-inner">
                                                <a href="#" class="nav-cart-icon">2</a>
                                            </div>
                                        </div>
                                        <div class="nav-cart-container">
                                            <div class="nav-cart-items">

                                                <div class="nav-cart-item clearfix">
                                                    <div class="nav-cart-img">
                                                        <a href="#">
                                                            <img src="" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="nav-cart-title">
                                                        <a href="#">
                                                            Ladies Bag
                                                        </a>
                                                        <div class="nav-cart-price">
                                                            <span>1 x</span>
                                                            <span>1250.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="nav-cart-remove">
                                                        <a href="#"><i class="icon icon_close"></i></a>
                                                    </div>
                                                </div>

                                                <div class="nav-cart-item clearfix">
                                                    <div class="nav-cart-img">
                                                        <a href="#">
                                                            <img src="" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="nav-cart-title">
                                                        <a href="#">
                                                            Sequin Suit longer title
                                                        </a>
                                                        <div class="nav-cart-price">
                                                            <span>1 x</span>
                                                            <span>1250.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="nav-cart-remove">
                                                        <a href="#"><i class="icon icon_close"></i></a>
                                                    </div>
                                                </div>

                                            </div> <!-- end cart items -->

                                            <div class="nav-cart-summary">
                                                <span>Cart Subtotal</span>
                                                <span class="total-price">$1799.00</span>
                                            </div>

                                            <div class="nav-cart-actions mt-20">
                                                <a href="" class="btn btn-md btn-dark"><span>View Cart</span></a>
                                                <a href="" class="btn btn-md btn-color mt-10"><span>Proceed to Checkout</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-cart-amount right">
                      <span>
                        Cart /
                        <a href="#"> $1299.50</a>
                      </span>
                                    </div>
                                </div> <!-- end cart -->

                            </div>
                        </div> <!-- end header wrap -->

                        <div class="nav-wrap">
                            <div class="collapse navbar-collapse" id="navbar-collapse">

                                <ul class="nav navbar-nav">

                                    <li id="mobile-search" class="hidden-lg hidden-md">
                                        <form method="get" class="mobile-search relative">
                                            <input type="search" class="form-control" placeholder="Search...">
                                            <button type="submit" class="search-button">
                                                <i class="icon icon_search"></i>
                                            </button>
                                        </form>
                                    </li>

                                    <li class="dropdown">
                                        <a href="index.php">Home</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                                        <ul class="dropdown-menu megamenu">
                                            <li>
                                                <div class="megamenu-wrap">
                                                    <div class="row">

                                                        <div class="col-md-3 megamenu-item">
                                                            <h6>For Man</h6>
                                                            <ul class="menu-list">
                                                                <li><a href="#">Shirts</a></li>
                                                                <li><a href="#">Jeans</a></li>
                                                                <li><a href="#">Accessories</a></li>
                                                                <li><a href="#">Shoes</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-3 megamenu-item">
                                                            <h6>For Woman</h6>
                                                            <ul class="menu-list">
                                                                <li><a href="#">Dresses</a></li>
                                                                <li><a href="#">Coats</a></li>
                                                                <li><a href="#">Accessories</a></li>
                                                                <li><a href="#">Sandals</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-3 megamenu-item">
                                                            <h6>Accessories</h6>
                                                            <ul class="menu-list">
                                                                <li><a href="#">Wallets</a></li>
                                                                <li><a href="#">Watches</a></li>
                                                                <li><a href="#">Belts</a></li>
                                                                <li><a href="#">Scarfs</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-3 megamenu-item">
                                                            <h6>Bags</h6>
                                                            <ul class="menu-list">
                                                                <li><a href="#">Leather</a></li>
                                                                <li><a href="#">Sports</a></li>
                                                                <li><a href="#">Street Style</a></li>
                                                                <li><a href="#">Creative</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li> <!-- end categories -->

                                    <li class="dropdown">
                                        <a href="#">Shop</a>
                                        <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                                        <ul class="dropdown-menu">
                                            <li><a href="">Single Product</a></li>
                                            <li><a href="">Cart</a></li>
                                            <li><a href="">Checkout</a></li>
                                        </ul>
                                    </li>

                                    <li class="mobile-links">
                                        <ul>
                                            <li>
                                                <a href="#">Login</a>
                                            </li>
                                            <li>
                                                <a href="#">My Account</a>
                                            </li>
                                            <li>
                                                <a href="#">My Wishlist</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul> <!-- end menu -->
                            </div> <!-- end collapse -->
                        </div> <!-- end col -->

                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div> <!-- end navigation -->
        </nav> <!-- end navbar -->
    </header> <!-- end navigation -->

    <!-- Hero Slider -->
    <section class="section-wrap nopadding">
        <div class="container">
            <div class="entry-slider">
                <div class="flexslider" id="flexslider-hero">
                    <ul class="slides clearfix">
                        <li>
                            <img src="img/slider/1.jpg" alt="">
                            <div class="img-holder img-1"></div>
                            <div class="hero-holder text-center right-align">
                                <div class="hero-lines">
                                    <h1 class="hero-heading white">Collection 2017</h1>
                                    <h4 class="hero-subheading white uppercase">BLAhhhhh</h4>
                                </div>
                                <a href="#" class="btn btn-lg btn-white"><span>Shop Now</span></a>
                            </div>
                        </li>
                        <li>
                            <img src="img/slider/2.jpg" alt="">
                            <div class="img-holder img-2"></div>
                            <div class="hero-holder text-center">
                                <div class="hero-lines">
                                    <h1 class="hero-heading white large">Winter Sales</h1>
                                </div>
                                <a href="#" class="btn btn-lg btn-white"><span>Shop Now</span></a>
                            </div>
                        </li>
                        <li>
                            <img src="img/slider/3.jpg" alt="">
                            <div class="img-holder img-3"></div>
                            <div class="hero-holder left-align">
                                <div class="hero-lines">
                                    <h1 class="hero-heading white">Autumn 2017</h1>
                                    <p class="white">Some other text</p>
                                    <p class="white">Some other text</p>
                                </div>
                                <a href="#" class="btn btn-lg btn-white"><span>Shop Now</span></a>
                            </div>
                        </li>
                        <li>
                            <img src="img/slider/4.jpg" alt="">
                            <div class="img-holder img-4"></div>
                            <div class="hero-holder text-center right-align">
                                <div class="hero-lines">
                                    <h1 class="hero-heading white">Summer 2017</h1>
                                    <p class="white">Some random text</p>
                                    <p class="white">Some random text</p>
                                </div>
                                <a href="#" class="btn btn-lg btn-white"><span>Shop Now</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end slider -->
        </div>
    </section> <!-- end hero slider -->

    <!-- Best Labours -->
    <section class="section-wrap pb-0">
        <div class="container">

            <div class="row heading-row">
                <div class="col-md-12 text-center">
                    <h2 class="heading uppercase">
                        <small>Best Labours</small>
                    </h2>
                </div>
            </div>

            <div class="row row-10">

                <div class="col-md-3 col-xs-6 animated-from-left">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="#">
                                <img src="img/shop/item1.jpeg" alt="">

                            </a>
                            <div class="product-actions">
                                <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>

                        <div class="product-details">
                            <h3>
                                <a class="product-title" href="#">Albert</a>
                            </h3>
                            <span class="price">
                              <ins>
                                <span class="ammount">Rs.33,000</span>
                              </ins>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 animated-from-left">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="#">
                                <img src="img/shop/item2.jpeg" alt="">
                            </a>
                            <div class="product-label">
                                <span class="sale">sale</span>
                            </div>
                            <div class="product-actions">
                                <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>

                        <div class="product-details">
                            <h3>
                                <a class="product-title" href="">Jose</a>
                            </h3>
                            <span class="price">
                              <ins>
                                <span class="ammount">Rs.45,000</span>
                              </ins>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 animated-from-left">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="#">
                                <img src="img/shop/item3.jpeg" alt="">
                            </a>
                            <div class="product-actions">
                                <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>

                        <div class="product-details">
                            <h3>
                                <a class="product-title" href="">Maroon Kale</a>
                            </h3>
                            <span class="price">
                              <ins>
                                <span class="ammount">Rs.25,450</span>
                              </ins>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 animated-from-left">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="#">
                                <img src="img/shop/item4.jpeg" alt="">
                            </a>
                            <div class="product-label">
                                <span class="sale">sale</span>
                            </div>
                            <div class="product-actions">
                                <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>

                        <div class="product-details">
                            <h3>
                                <a class="product-title" href="">Sita</a>
                            </h3>
                            <span class="price">
                              <del>
                                <span>Rs.52,000</span>
                              </del>
                              <ins>
                                <span class="ammount">Rs.22,00</span>
                              </ins>
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-xs-6 animated-from-left">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="#">
                                <img src="img/shop/item1.jpeg" alt="">

                            </a>
                            <div class="product-actions">
                                <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>

                        <div class="product-details">
                            <h3>
                                <a class="product-title" href="#">Albert</a>
                            </h3>
                            <span class="price">
                              <ins>
                                <span class="ammount">Rs.33,000</span>
                              </ins>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 animated-from-left">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="#">
                                <img src="img/shop/item2.jpeg" alt="">
                            </a>
                            <div class="product-label">
                                <span class="sale">sale</span>
                            </div>
                            <div class="product-actions">
                                <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>

                        <div class="product-details">
                            <h3>
                                <a class="product-title" href="">Jose</a>
                            </h3>
                            <span class="price">
                              <ins>
                                <span class="ammount">Rs.45,000</span>
                              </ins>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 animated-from-left">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="#">
                                <img src="img/shop/item3.jpeg" alt="">
                            </a>
                            <div class="product-actions">
                                <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>

                        <div class="product-details">
                            <h3>
                                <a class="product-title" href="">Maroon Kale</a>
                            </h3>
                            <span class="price">
                              <ins>
                                <span class="ammount">Rs.25,450</span>
                              </ins>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 animated-from-left">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="#">
                                <img src="img/shop/item4.jpeg" alt="">
                            </a>
                            <div class="product-label">
                                <span class="sale">sale</span>
                            </div>
                            <div class="product-actions">
                                <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>

                        <div class="product-details">
                            <h3>
                                <a class="product-title" href="">Sita</a>
                            </h3>
                            <span class="price">
                              <del>
                                <span>Rs.52,000</span>
                              </del>
                              <ins>
                                <span class="ammount">Rs.22,00</span>
                              </ins>
                            </span>
                        </div>

                    </div>
                </div>

            </div> <!-- end row -->
        </div>
    </section> <!-- end best labours -->
    <!-- Footer Type-1 -->
    <footer class="footer footer-type-1 bg-white">
        <div class="container">
            <div class="footer-widgets top-bottom-dividers pb-mdm-20">
                <div class="row">

                    <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
                        <div class="widget footer-links">
                            <h5 class="widget-title uppercase">Information</h5>
                            <ul class="list-no-dividers">
                                <li><a href="#">Our stores</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Business with us</a></li>
                                <li><a href="#">Delivery information</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
                        <div class="widget footer-links">
                            <h5 class="widget-title uppercase">Help</h5>
                            <ul class="list-no-dividers">
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Track order</a></li>
                                <li><a href="#">F.A.Q</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Returns</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
                        <div class="widget footer-links">
                            <h5 class="widget-title uppercase">Account</h5>
                            <ul class="list-no-dividers">
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Order history</a></li>
                                <li><a href="#">Special gifts</a></li>
                                <li><a href="#">Track order</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">
                            <h5 class="widget-title uppercase">about us</h5>
                            <p class="mb-0">It's no longer just the privilege of a metro city or an urban area to shop online for their favorite products. Flipkart is one online shopping site that has made it possible for consumers even in the remote areas of India to avail products from the best brands at low prices online.</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget footer-get-in-touch">
                            <h5 class="widget-title uppercase">Contact</h5>
                            <address class="footer-address"><span>Address:</span> Jammu and Kashmir, Ladakh, Srinagar, Jammu</address>
                            <p>Phone: <a href="tel:+91-8956235689">+ 1-888-1554-456-123</a></p>
                            <p>Email: <a href="mailto:vakadu10@gmail.com">vakadu10@gmail.com</a></p>
                            <div class="social-icons rounded mt-20">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div> <!-- end stay in touch -->

                </div>
            </div>
        </div> <!-- end container -->

        <div class="bottom-footer bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 copyright sm-text-center">
              <span>
                &copy; 2017 Designed by <a href="">Umer Hurrah</a> and <a href="">Vinod Kumar</a>
              </span>
                    </div>

                    <div class="col-sm-4 text-center">
                        <div id="back-to-top">
                            <a href="#top">
                                <i class="fa fa-angle-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-amex"></i>
                    </div>
                </div>
            </div>
        </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->

</main> <!-- end main container -->

<!-- jQuery Scripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>