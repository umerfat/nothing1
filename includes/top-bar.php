<main class="content-wrapper oh">

    <!-- Navigation -->
    <header class="nav-type-1">

        <div class="top-bar hidden-sm hidden-xs">
            <div class="container">
                <div class="top-bar-line">
                    <div class="row">
                        <div class="top-bar-links">
                            <ul class="col-sm-6 top-bar-acc text-left">
                               <li class="top-bar-link"><a href="#">Track</a></li>
                               <li class="top-bar-link"><a href="#">F.A.Q</a></li>
                               <li class="top-bar-link"><a href="#">Help</a></li>
                               <?php if (empty($_SESSION['customer_firstname'])) {
                                echo "<li class='top-bar-link'><a href='login.php'>Sign Up</a></li>
                                   <li class='top-bar-link'><a href='login.php'>Login</a></li>";
                               }?>
                            </ul>
                            <ul class="col-sm-6 top-bar-account">
                                <?php
                                if (isset($_SESSION['customer_firstname'])) {
                                    echo " <li class='account'>
                                    <a href='#'>My Account<i class='fa fa-angle-down'></i></a>
                                    <div class='account-dropdown'>
                                        <ul>
                                            <li><a href='#'>My Profile</a></li>
                                            <li><a href='#'>Wishlist</a></li>
                                            <li><a href='#'>Bookings</a></li>
                                            <li><a href='logout.php'>Logout</a></li>
                                        </ul>
                                    </div>
                                </li>";
                                 } 
                                ?>
                                <li>
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- end top bar -->
