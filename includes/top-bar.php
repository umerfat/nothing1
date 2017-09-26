<main class="content-wrapper oh">

    <!-- Navigation -->
    <header class="nav-type-1">

        <div class="top-bar hidden-sm hidden-xs">
            <div class="container">
                <div class="top-bar-line">
                    <div class="row">
                        <div class="top-bar-links">
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
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- end top bar -->