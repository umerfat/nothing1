<?php include "includes/header.php"; ?>

<?php include "includes/top-bar.php"; ?>

<?php include "includes/nav.php"; ?>

<!-- Page Title -->
<section class="page-title text-center">
    <div class="container relative clearfix">
        <div class="title-holder">
            <div class="title-text">
                <h1 class="uppercase">My Account</h1>
            </div>
        </div>
    </div>
</section> <!-- end page title -->

<!-- login -->
<section class="section-wrap login-register pt-0 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1 mb-40">
            <?php 
            if (isset($_POST['lb_customer_login'])) {
                login_customer();
            }
            ?>
                <div class="login">
                    <h4 class="uppercase">login</h4>
                    <form method="POST" role ="form" id="customer_login_id" data-toggle="validator">
                        <div class="form-group">
                            <p class="form-row form-row-wide">
                                <label>email
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="email" class="input-text" name = "cus_email_phone" placeholder="Email" value="" data-error="Email Address is invalid" required>
                            <div class="help-block with-errors"></div>
                            </p>
                        </div>
                        <div class="form-group">
                            <p class="form-row form-row-wide">
                                <label>password
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="password" class="input-text" name="cus_password" placeholder="Password" value="" data-error="Password is required" required>
                            <div class="help-block with-errors"></div>
                            </p>
                        </div>
                        <input type="submit" value="Login" name = "lb_customer_login" class="btn">
                        <input type="checkbox" class="input-checkbox" id="remember" name="remember" value="1">
                        <label for="remember" class="checkbox">Remember me</label>
                        <a href="#">Lost Password?</a>
                    </form>
                </div>
            </div>
            <div class="col-sm-5">
             <?php 
            if (isset($_POST['lb_cus_register'])) {
                register_customer();
            }
            ?>
                <div class="register">
                    <h4 class="uppercase">Register</h4>
                    <form method="POST" role="form" id ="customer_register_id" style="display: block;" data-toggle="validator">
                        <div class="form-group">
                            <p class="form-row form-row-wide">
                                <label>First Name
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="text" class="input-text" placeholder="Umer" value="" name="cus_first_name" pattern="[A-Za-z]" data-error="First Name is required" required>
                            <div class="help-block with-errors"></div>
                            </p>
                        </div>
                        <div class="form-group">
                            <p class="form-row form-row-wide">
                                <label>Last Name
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="text" class="input-text" placeholder="Hurrah" value="" name="cus_last_name" pattern="[A-Za-z]" data-error="Last Name is required" required>
                            <div class="help-block with-errors"></div>
                            </p>
                        </div>
                        <div class="form-group">
                            <p class="form-row form-row-wide">
                                <label>email
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="email" class="input-text" placeholder="Email" value="" name="cus_email" data-error="Email Address is invalid" required>
                            <div class="help-block with-errors"></div>
                            </p>
                        </div>
                        <div class="form-group">
                            <p class="form-row form-row-wide">
                                <label>phone
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="text" class="input-text" placeholder="Phone Number" value="" name = "cus_phone_no" pattern="[789][0-9]{9}" data-error="Mobile Number is required" required>
                            <div class="help-block with-errors"></div>
                            </p>
                        </div>
                        <div class="form-group">
                            <p class="form-row form-row-wide">
                                <label>password
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="password" class="input-text" placeholder="Password" value="" name="cus_password" data-error="Password is required" required>
                            <div class="help-block with-errors"></div>
                            </p>
                        </div>
                        <input type="submit" value="Register" class="btn" name="lb_cus_register">
                    </form>
                </div>
        </div>
    </div>
</section> <!-- end login -->

<?php include "includes/footer.php"; ?>
