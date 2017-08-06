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
            if (isset($_POST['lb_user_login'])) {
                login_user();
            }
            ?>
                <div class="login">
                    <h4 class="uppercase">login</h4>
                    <form method="POST" role ="form" id="customer_login_id">
                        <p class="form-row form-row-wide">
                            <label>username or email
                                <abbr class="required" title="required">*</abbr>
                            </label>
                            <input type="text" class="input-text" name = "username" placeholder="username" value="">
                        </p>
                        <p class="form-row form-row-wide">
                            <label>password
                                <abbr class="required" title="required">*</abbr>
                            </label>
                            <input type="password" class="input-text" name="password" placeholder="password" value="">
                        </p>
                        <input type="submit" value="Login" name = "lb_user_login" class="btn">
                        <input type="checkbox" class="input-checkbox" id="remember" name="remember" value="1">
                        <label for="remember" class="checkbox">Remember me</label>
                        <a href="#">Lost Password?</a>
                    </form>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="register">
                    <h4 class="uppercase">Register</h4>
                    <form method="POST" role="form" id ="customer_register_id" style="display: block;">
                        <p class="form-row form-row-wide">
                            <label>email
                                <abbr class="required" title="required">*</abbr>
                            </label>
                            <input type="text" class="input-text" placeholder="E.g your email id" value="" name="cus_email">
                        </p>
                        <p class="form-row form-row-wide">
                            <label>phone
                                <abbr class="required" title="required">*</abbr>
                            </label>
                            <input type="text" class="input-text" placeholder="E.g phone number" value="" name = "cus_phone-no">
                        </p>
                        <p class="form-row form-row-wide">
                            <label>password
                                <abbr class="required" title="required">*</abbr>
                            </label>
                            <input type="text" class="input-text" placeholder="Password" value="" name="cus_password">
                        </p>
                        <input type="submit" value="Register" class="btn" name="lb_cus_registration">
                    </form>
                </div>
        </div>
    </div>
</section> <!-- end login -->

<?php include "includes/footer.php"; ?>
