<?php include "includes/header.php"; ?>

<!-- Page Title -->
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
                    <form method="POST">
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
    </div>
</section> <!-- end login -->

<?php include "includes/footer.php"; ?>
