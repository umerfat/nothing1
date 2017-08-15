<?php include "includes/header.php"; ?>

<?php include "includes/top-bar.php"; ?>

<?php include "includes/nav.php"; ?>

<?php include "includes/slider.php"; ?>

    <!-- Best Labours -->
    <section class="section-wrap pb-0">
        <div class="container">

            <div class="row heading-row">
                <div class="col-md-12 text-center">
                    <h2 class="heading uppercase">
                        <small>Best Labours</small>
                    </h2>
                </div>
            </div>
            <div class="row row-10">
            <?php
            $connection;
            $query_select = "SELECT * FROM labour WHERE labour_status = 'publish'";
            $query_result = mysqli_query($connection,$query_select);
            if (mysqli_num_rows($query_result) < 1) {
                echo "Oops... No labours available";
            }
            $labour_table = array();
            while ($row = mysqli_fetch_assoc($query_result)) {
                $labour_table[] = $row;
            }
            foreach ($labour_table as $row):
                $firstName   = trim($row['labour_first_name']);
                $lastName    = trim($row['labour_last_name']);
                $labourImage = trim($row['labour_image']);
            ?>
                <div class="col-md-3 col-xs-6 animated-from-left">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="labourDetails.php">
                                <img src="IMAGES/LABOUR_IMAGES/<?php echo $labourImage; ?>" alt="">

                            </a>
                            <div class="product-actions">
                                <a href="product.php" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <a href="product.php" class="product-quickview">Quick View</a>
                        </div>

                        <div class="product-details">
                            <h3>
                                <a class="product-title" href="#"><?php echo $firstName." ".$lastName?></a>
                            </h3>
                            <span class="price">
                              <ins>
                                <span class="ammount">Rs.33,000</span>
                              </ins>
                            </span>
                        </div>
                    </div>
                </div>
               <?php endforeach; ?>

            </div> <!-- end row -->
        </div>
    </section> <!-- end best labours -->

<?php include "includes/footer.php"; ?>