<?php include "includes/header.php"; ?>

<?php include "includes/top-bar.php"; ?>

<?php include "includes/nav.php"; ?>

<!-- Page Title -->
<section class="page-title text-center">
    <div class="container relative clearfix">
        <div class="title-holder">
            <div class="title-text">
                <h1 class="uppercase">Checkout</h1>
            </div>
        </div>
    </div>
</section> <!-- end page title -->

<!-- Checkout -->
<section class="section-wrap checkout pt-0 pb-50">
    <div class="container relative">
        <div class="row">

            <div class="ecommerce col-xs-12">

                <div class="row mb-30">
                    <div class="col-md-8">
                        <p class="ecommerce-info">
                            Returning Customer?
                            <a href="#" class="showlogin">Click here to login</a>
                        </p>
                    </div>
                </div>

                <form name="checkout" class="checkout ecommerce-checkout row">

                    <div class="col-md-8" id="customer_details">
                        <div>
                            <h2 class="heading uppercase mb-30">billing address</h2>

                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required ecommerce-validated" id="billing_country_field">
                                <label for="billing_country">State
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <select name="billing_country" id="billing_country" class="country_to_state country_select" title="State *">
                                    <option>Select a State…</option>
                                    <option value="JK">Jammu and Kashmir</option>
                                    <option value="LA">Ladakh</option>
                                </select>
                            </p>

                            <p class="form-row form-row-first validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_first_name_field">
                                <label for="billing_first_name">First Name
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="text" class="input-text" placeholder value name="billing_first_name" id="billing_first_name">
                            </p>

                            <p class="form-row form-row-last validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_last_name_field">
                                <label for="billing_last_name">Last Name
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="text" class="input-text" placeholder value name="billing_last_name" id="billing_last_name">
                            </p>

                            <p class="form-row form-row-wide" id="billing_company_field">
                                <label for="billing_company">Company</label>
                                <input type="text" class="input-text" placeholder value name="billing_company" id="billing_company">
                            </p>

                            <p class="form-row form-row-wide address-field validate-required ecommerce-invalid ecommerce-invalid-required-field" id="billing_address_1_field">
                                <label for="billing_address_1">Address
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="text" class="input-text" placeholder="Street address" value name="billing_address_1" id="billing_address_1">
                            </p>

                            <p class="form-row form-row-wide address-field" id="billing_address_2_field">
                                <input type="text" class="input-text" placeholder="Apartment (optional)" value name="billing_address_2" id="billing_address_2">
                            </p>

                            <p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-o_class="form-row form-row-wide address-field validate-required">
                                <label for="billing_city">Town / City
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="text" class="input-text" placeholder="Town / City" value name="billing_city" id="billing_city">
                            </p>

                            <p class="form-row form-row-first address-field validate-state" id="billing_state_field" data-o_class="form-row form-row-first address-field validate-state">
                                <label for="billing_state">County</label>
                                <input type="text" class="input-text" placeholder value name="billing_state" id="billing_state">
                            </p>

                            <p class="form-row form-row-last address-field validate-required validate-postcode ecommerce-invalid ecommerce-invalid-required-field" id="billing_postcode_field" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                <label for="billing_postcode">Postcode
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="text" class="input-text" placeholder="Postcode" value name="billing_postcode" id="billing_postcode">
                            </p>

                            <p class="form-row form-row-first validate-required validate-email" id="billing_email_field">
                                <label for="billing_email">Email Address
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="text" class="input-text" placeholder value name="billing_email" id="billing_email">
                            </p>

                            <p class="form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                                <label for="billing_phone">Phone
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="text" class="input-text" placeholder value name="billing_phone" id="billing_phone">
                            </p>

                            <div class="clear"></div>

                        </div>

                        <p class="form-row form-row-wide create-account">
                            <input type="checkbox" class="input-checkbox" id="createaccount" name="createaccount" value="1">
                            <label for="createaccount" class="checkbox">Create an account?</label>
                        </p>

                        <div class="clear"></div>

                        <div>
                            <div class="ecommerce-shipping-fields">
                                <input type="checkbox" id="ship-to-different-address-checkbox" class="input-checkbox" name="ship_to_different_address" value="1">
                                <label for="ship-to-different-address-checkbox" class="checkbox">Ship to a different address</label>
                            </div>
                            <p class="form-row notes ecommerce-validated" id="order_comments_field">
                                <label for="order_comments">Order Notes</label>
                                <textarea name="order_comments" class="input-text" id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                            </p>
                        </div>

                        <div class="clear"></div>

                    </div> <!-- end col -->


                    <div class="col-md-4">
                        <div class="order-review-wrap ecommerce-checkout-review-order" id="order_review">
                            <h2 class="heading uppercase mb-30">Your Order</h2>
                            <table class="table shop_table ecommerce-checkout-review-order-table">
                                <tbody>
                                <tr>
                                    <th>Carpenter<span class="count"> x 1</span></th>
                                    <td>
                                        <span class="amount">RS. 1599</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Mason<span class="count"> x 1</span></th>
                                    <td>
                                        <span class="amount">RS. 1299.00</span>
                                    </td>
                                </tr>
                                <tr class="cart-subtotal">
                                    <th>Cart Subtotal</th>
                                    <td>
                                        <span class="amount">RS. 1799.00</span>
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
                                        <strong><span class="amount">RS> 1799.00</span></strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <div id="payment" class="ecommerce-checkout-payment">
                                <h2 class="heading uppercase mb-30">payment method</h2>
                                <ul class="payment_methods methods">

                                    <li class="payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
                                        <label for="payment_method_bacs">Direct Bank Transfer</label>
                                        <div class="payment_box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </li>

                                    <li class="payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque">
                                        <label for="payment_method_cheque">Cheque payment</label>
                                        <div class="payment_box payment_method_cheque">
                                            <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </li>

                                    <li class="payment_method_paypal">
                                        <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal">
                                        <label for="payment_method_paypal">Paypal</label>
                                        <img src="IMAGES/paypal.png" alt="">
                                        <div class="payment_box payment_method_paypal">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                        </div>
                                    </li>

                                </ul>
                                <div class="form-row place-order">
                                    <input type="submit" name="ecommerce_checkout_place_order" class="btn btn-lg" id="place_order" value="Place order">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end order review -->
                </form>

            </div> <!-- end ecommerce -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end checkout -->

<?php include "includes/footer.php"; ?>
