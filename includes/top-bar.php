<main class="content-wrapper oh">

    <!-- Navigation -->
    <header class="nav-type-1">

        <div class="top-bar hidden-sm hidden-xs">
            <div class="container">
                <div class="top-bar-line">
                    <div class="row">
                        <div class="top-bar-links">
<!-- <<<<<<< HEAD
                            <ul class="col-sm-12 top-bar-acc">
                                <li class="top-bar-link"><a href="#">Track</a></li>
                                <li class="top-bar-link"><a href="#">F.A.Q</a></li>
                                <li class="top-bar-link"><a href="#">Help</a></li>
                                <?php
                                if (isset($_SESSION['customer_firstname'])) {

                                     echo "<li class='top-bar-links'>
                                    <select class='' name ='myaccount' onchange='location = this.value;'>
                                        <option value='login'>My Account</option>
                                        <option value='signup'>Wishlist</option>
                                        <option value='signup'>Bookings</option>
                                        <option value = ''>Logout</option>
                                        </select>        
                                </li>";
                                 }
                                 else{
                                    echo "<li class='top-bar-link'><a href='login.php'>Sign Up</a></li>
                                <li class=''><a href='login.php'>Login</a></li>";
                                 }
                                ?>
======= -->
                            <ul class="col-sm-10 top-bar-acc" style="left: 50px">
                               <li class="top-bar-link"><a href="#">Track</a></li>
                               <li class="top-bar-link"><a href="faq.php">F.A.Q</a></li>
                               <li class="top-bar-link"><a href="#">Help</a></li>
                               <li class="top-bar-link"><a href="register.php">Sign Up</a></li>
                               <li class="top-bar-link"><a href="login.php">Login</a></li>
                               <li class="top-bar-link"><a href="contact.php">Contact</a></li>
                            </ul>
                            <ul class="col-sm-2 top-bar-account">
                                <li class="account">
                                    <a href="#">My Account<i class="fa fa-angle-down"></i></a>
                                    <div class="account-dropdown">
                                        <ul>
                                            <li><a href="#">Wishlist</a></li>
                                            <li><a href="#">Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- end top bar -->
