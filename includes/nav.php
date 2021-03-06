<nav class="navbar navbar-static-top">
    <div class="navigation" id="sticky-nav">
        <div class="container relative">

            <div class="row">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Mobile cart -->
                    <div class="nav-cart mobile-cart hidden-lg hidden-md">
                        <div class="nav-cart-outer">
                            <div class="nav-cart-inner">
                                <a href="#" class="nav-cart-icon">2</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end navbar-header -->

                <div class="header-wrap">
                    <div class="header-wrap-holder">

                        <!-- Logo -->
                        <div class="logo-container">
                            <div class="logo-wrap text-center">
                                <a href="index.php">
                                    <img class="logo" src="IMAGES/labourlogo.png" alt="logo" height="100px" width="100px">
                                </a>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="nav-search hidden-sm hidden-xs">
                            <form method="get">
                                <input type="search" class="form-control" placeholder="Search">
                                <button type="submit" class="search-button">
                                    <i class="icon icon_search"></i>
                                </button>
                            </form>
                        </div>

                        <!-- Wishlist -->
                        <div class="nav-cart-wrap hidden-sm hidden-xs">
                            <div class="nav-cart right">
                                <div class="nav-wishlist">
                                    <a href="#">Wishlist <i class="fa fa-heart"></i> </a>
                                </div>
                            </div>
                        </div> <!-- end cart -->

                        <!-- Cart -->
                        <div class="nav-cart-wrap hidden-sm hidden-xs">
                            <div class="nav-cart right">
                                <div class="nav-cart-outer">
                                    <div class="nav-cart-inner">
                                        <a href="#" class="nav-cart-icon">2</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end cart -->

                    </div>
                </div> <!-- end header wrap -->

                <div class="nav-wrap">
                    <div class="collapse navbar-collapse" id="navbar-collapse">

                        <ul class="nav navbar-nav">

                            <li id="mobile-search" class="hidden-lg hidden-md">
                                <form method="get" class="mobile-search relative">
                                    <input type="search" class="form-control" placeholder="Search...">
                                    <button type="submit" class="search-button">
                                        <i class="icon icon_search"></i>
                                    </button>
                                </form>
                            </li>

                            <li class="dropdown">
                                <a href="index.php">Home</a>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                                <ul class="dropdown-menu megamenu">
                                    <li>
                                        <div class="megamenu-wrap">
                                            <div class="row">
                                            <?php
                                            $select_cat  = "SELECT * FROM categories";
                                            $result_cat = mysqli_query($connection, $select_cat);
                                            while($row = mysqli_fetch_assoc($result_cat)){
                                                $cat_arr[] = $row;
                                            }
                                            foreach($cat_arr as $cat_row):
                                                $cat_id   = $cat_row['cat_id'];
                                                $cat_name = $cat_row['cat_name'];
                                                //echo "<h6>{$cat_name}</h6>";
                                                echo "<div class='col-md-3 megamenu-item'>";
                                                echo "<h6>{$cat_name}</h6>";
                                                echo "<ul class='menu-list'>";
                                                $select_sub_cat = "SELECT * FROM tbl_sub_categories WHERE cat_id = $cat_id";
                                                $result_sub_cat = mysqli_query($connection, $select_sub_cat);
                                                while($sub_row = mysqli_fetch_assoc($result_sub_cat)){
                                                    $sub_cat_arr[] = $sub_row;
                                                }
                                                foreach($sub_cat_arr as $sub_cat_row):
                                                    $sub_cat_id = $sub_cat_row['sub_cat_id'];
                                                $sub_cat_name = $sub_cat_row['sub_cat_name'];
                                                echo " <li><a href='#'>{$sub_cat_name}</a></li>";
                                                $sub_cat_arr = null;
                                                    endforeach;
                                                echo "</ul>";
                                                echo "</div>"; 
                                            endforeach;
                                            ?>

                                               <!--  <div class="col-md-3 megamenu-item">
                                                    <h6>General Labours</h6>
                                                    <ul class="menu-list">
                                                        <li><a href="#">Construction Works</a></li>
                                                        <li><a href="#">Agricultural Works</a></li>
                                                        <li><a href="#">Construction And Agricultural Works</a></li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> <!-- end categories -->

                            <li class="dropdown">
                                <a href="about-us.php">About Us</a>
                            </li>

                            <li class="dropdown">
                                <a href="contact.php">Contact</a>
                            </li>

                            <!-- <li class="dropdown">
                                <a href="#">My Account</a>
                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    <li><a href="">Login</a></li>
                                    <li><a href="">Sign Up</a></li>
                                </ul>
                            </li> -->
                            
                            <li class="mobile-links">
                                <ul>
                                    <li>
                                        <a href="login.php">Login</a>
                                    </li>
                                    <li>
                                        <a href="#">My Account</a>
                                    </li>
                                    <li>
                                        <a href="#">My Wishlist</a>
                                    </li>
                                </ul>
                            </li>

                        </ul> <!-- end menu -->
                    </div> <!-- end collapse -->
                </div> <!-- end col -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end navigation -->
</nav> <!-- end navbar -->
</header> <!-- end navigation -->