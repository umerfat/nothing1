<main class="content-wrapper oh">

    <!-- Navigation -->
    <header class="nav-type-1">

        <div class="top-bar hidden-sm hidden-xs">
            <div class="container">
                <div class="top-bar-line">
                    <div class="row">
                        <div class="col-md-12 top-bar-links">
                           <ul class="top-bar-acc" style="display: inline-block">
                               <li class="top-bar-link"><a href="#">Track</a></li>
                               <li class="top-bar-link"><a href="faq.php">F.A.Q</a></li>
                               <li class="top-bar-link"><a href="#">Help</a></li>
                               <li class="top-bar-link"><a href="contact.php">Contact</a></li>
                            </ul>
                            <ul class="top-bar-account" style="display: inline-block">
                                <?php
                                if (isset($_SESSION['customer_username'])){
                                    echo "<li class='account'>
                                    <a href='#'>My Account<i class='fa fa-angle-down'></i></a>
                                    <div class='account-dropdown'>
                                        <ul>
                                            <li><a href='#'>Profile</a></li>
                                            <li><a href='#'>Wishlist</a></li>
                                            <li><a href='#'>Bookings</a></li>
                                            <li><a href='logout.php'>Logout</a></li>
                                        </ul>
                                    </div>
                                </li>";
                                }
                                else{
                                    echo "<li style='padding-right: 0'><a href='register.php'>Sign Up&nbsp;|&nbsp;</a></li>
                                          <li class=''><a href='login.php'>&nbsp;Login</a></li>
";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- end top bar -->
