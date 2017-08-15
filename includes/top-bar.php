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
                                <?php 
                                if (isset($_SESSION['customer_firstname'])) {
                                    echo "<li class='top-bar-link'><a href='admin/logout.php'>Logout</a></li>";
                                }
                                else{
                                    echo "<li class='top-bar-link'><a href='login.php'>Login</a></li>";
                                }
                                ?>
                                <li class="top-bar-link"><a href="">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- end top bar -->