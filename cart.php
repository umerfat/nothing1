<?php include "includes/header.php"; ?>

<?php include "includes/top-bar.php"; ?>

<?php include "includes/nav.php"; ?>

<!-- Page Title -->
<section class="page-title text-center">
    <div class="container relative clearfix">
        <div class="title-holder">
            <div class="title-text">
                <h1 class="uppercase">Shopping Cart</h1>
            </div>
        </div>
    </div>
</section> <!-- end page title -->

<!-- Cart -->
<section class="section-wrap shopping-cart pt-0">
    <div class="container relative">
        <div class="row">

            <div class="col-md-12">
                <div class="table-wrap mb-30">
                    <table class="shop_table cart table">
                        <thead>
                        <tr>
                            <th class="product-name" colspan="2">Labour</th>
                            <th class="product-price">Price</th>
                            <th class="product-subtotal">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="cart_item">
                            <td class="product-thumbnail">
                                <a href="#">
                                    <img src="IMAGES/labour/labour1.jpeg" alt="">
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="#">Carpenter</a>
                                <ul>
                                    <li>Size: XL</li>
                                    <li>Color: White</li>
                                </ul>
                            </td>
                            <td class="product-price">
                                <span class="amount">RS. 1250.00</span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus"/><input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text"/><input type="button" value="+" class="plus">
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span class="amount">RS. 1250.00</span>
                            </td>
                            <td class="product-remove">
                                <a href="#" class="remove" title="Remove this item">
                                    <i class="icon icon_close"></i>
                                </a>
                            </td>
                        </tr>

                        <tr class="cart_item">
                            <td class="product-thumbnail">
                                <a href="#">
                                    <img src="IMAGES/labour/labour2.jpeg" alt="">
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="#">Mason</a>
                                <ul>
                                    <li>Size: L</li>
                                    <li>Color: Black</li>
                                </ul>
                            </td>
                            <td class="product-price">
                                <span class="amount">RS. 1240.00</span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus"/><input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text"/><input type="button" value="+" class="plus"/>
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span class="amount">RS. 1240.00</span>
                            </td>
                            <td class="product-remove">
                                <a href="#" class="remove" title="Remove this item">
                                    <i class="icon icon_close"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row mb-50">
                    <div class="col-md-5 col-sm-12">
                        <div class="coupon">
                            <input type="text" name="coupon_code" id="coupon_code" class="input-text form-control" value placeholder="Coupon code">
                            <input type="submit" name="apply_coupon" class="btn btn-md btn-dark" value="Apply">
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="actions right">
                            <input type="submit" name="update_cart" value="Update Cart" class="btn btn-md btn-dark">
                            <div class="wc-proceed-to-checkout">
                                <a href="" class="btn btn-md btn-color"><span>proceed to checkout</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-md-6 shipping-calculator-form">
                <h2 class="heading relative heading-small uppercase mb-30">Calculate Shipping</h2>
                <p class="form-row form-row-wide">
                    <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state" rel="calc_shipping_state">
                        <option value="">Select State</option>
                        <option value="jammu">Jammu</option>
                        <option value="kashmir">Kashmir</option>
                    </select>
                </p>

                <div class="row row-20">
                    <div class="col-sm-6">
                        <p class="form-row form-row-wide">
                            <input type="text" class="input-text" value placeholder="State / county" name="calc_shipping_state" id="calc_shipping_state">
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="form-row form-row-wide">
                            <input type="text" class="input-text" value placeholder="Postcode" name="calc_shipping_postcode" id="calc_shipping_postcode">
                        </p>
                    </div>
                </div>

                <p>
                    <button type="submit" name="calc_shipping" value="1" class="btn btn-md btn-dark mt-20 mb-mdm-40">Update Totals</button>
                </p>
            </div> <!-- end col shipping calculator -->

            <div class="col-md-4 col-md-offset-2">
                <div class="cart_totals">
                    <h2 class="heading relative heading-small uppercase mb-30">Cart Totals</h2>

                    <table class="table shop_table">
                        <tbody>
                        <tr class="cart-subtotal">
                            <th>Cart Subtotal</th>
                            <td>
                                <span class="amount">RS. 1490.00</span>
                            </td>
                        </tr>
                        <tr class="shipping">
                            <th>Shipping</th>
                            <td>
                                <span>Free Shipping</span>
                            </td>
                        </tr>
                        <tr class="order-total">
                            <th><strong>Order Total</strong></th>
                            <td>
                                <strong><span class="amount">RS. 1490.00</span></strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div> <!-- end col cart totals -->

        </div> <!-- end row -->


    </div> <!-- end container -->
</section> <!-- end cart -->

<?php include "includes/footer.php"; ?>