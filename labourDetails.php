<?php include "includes/header.php"; ?>

<?php include "includes/top-bar.php"; ?>

<?php include "includes/nav.php"; ?>

<!-- Single Product -->
<section class="section-wrap single-product">
    <div class="container relative">
        <div class="row">

        <?php
        $connection;
        //$labour_id = ;
        if (isset($_GET['l_id'])) {
            $labour_id = base64_decode($_GET['l_id']);
            $labour_id = $labour_id -313131;
        }
        $query_details  = "SELECT tbl_labour.labour_id, tbl_labour.cat_id,tbl_labour.created_date, tbl_labour_info.first_name, ";
        $query_details .= "tbl_labour_info.last_name, tbl_labour_info.labour_image, tbl_labour_info.labour_charges, ";
        $query_details .= "tbl_labour_info.long_description,tbl_labour_info.short_description, ";
        $query_details .= "tbl_labour_address.labour_email, tbl_labour_address.labour_phone, tbl_category.cat_name ";
        $query_details .= "FROM tbl_labour LEFT JOIN tbl_labour_info ON (tbl_labour_info.labour_id = tbl_labour.labour_id) ";
        $query_details .= "LEFT JOIN tbl_labour_address ON (tbl_labour_address.labour_id = tbl_labour.labour_id)";
        $query_details .= "LEFT JOIN tbl_category ON (tbl_category.cat_id = tbl_labour.cat_id) WHERE tbl_labour.labour_id = $labour_id";
        //$query_select = "SELECT * FROM labour WHERE labour_id = '$labour_id'";
        $query_result      = mysqli_query($connection,$query_details);
        $row               = mysqli_fetch_assoc($query_result);
        $labour_id         = trim($row['labour_id']);
        $firstName         = trim($row['first_name']);
        $lastName          = trim($row['last_name']);
        $labourImage       = trim($row['labour_image']);
        $labour_charges    = trim($row['labour_charges']);
        $long_description  = trim($row['long_description']);
        $short_description = trim($row['short_description']);
        $cat_name          = trim($row['cat_name']);
        ?>
            <div class="col-sm-6 col-xs-12 mb-60">
                <div class="gallery-cell">
                    <a href="IMAGES/LABOUR_IMAGES/<?php echo $labourImage;?>" class="lightbox-img">
                        <img src="IMAGES/LABOUR_IMAGES/<?php echo $labourImage;?>" alt="" />
                    </a>
                </div>
            </div> <!-- end col img slider -->

            <div class="col-sm-6 col-xs-12 product-description-wrap">
                <h1 class="product-title"><?php echo $firstName." ".$lastName?></h1>
                <span class="rating">
                  <a href="javascript::void(0)">3 Reviews</a>
                </span>
                <span class="price">
                  <del>
                    <span>Rs. 1550.00</span>
                  </del>
                  <ins>
                    <span class="ammount">(&#x20B9;)<?php echo $labour_charges ;?></span>
                  </ins>
                </span>
                <p class="product-description"><?php echo $short_description ?></p>

                <ul class="product-actions clearfix">
                    <li>
                        <a href="labourInfo.php" class="btn btn-color btn-lg add-to-cart left"><span>Add to Hire</span></a>
                    </li>
                </ul>
            </div> <!-- end col product description -->
        </div> <!-- end row -->

        <!-- tabs -->
        <div class="row">
            <div class="col-md-12">
                <div class="tabs tabs-bb">
                    <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab-info" data-toggle="tab">Information</a>
                    </li>
                    <li>
                        <a href="#tab-description" data-toggle="tab">Description</a>
                    </li>
                    <li>
                        <a href="#tab-reviews" data-toggle="tab">Reviews</a>
                    </li>
                    </ul> <!-- end tabs -->

                    <!-- tab content -->
                    <div class="tab-content">

                        <div class="tab-pane fade" id="tab-description">
                            <p>
                                <?php echo $long_description ?>
                            </p>
                        </div>

                        <div class="tab-pane fade in active" id="tab-info">
                            <table class="table">

                                <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $firstName." ".$lastName?></td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td><?php echo $cat_name ?></td>
                                </tr>
                               <!--  <tr>
                                    <th>Skills</th>
                                    <td>Carpenter</td>
                                </tr> -->
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="tab-reviews">

                            <div class="reviews">
                                <ul class="reviews-list">
                                    <li>
                                        <div class="review-body">
                                            <div class="review-content">
                                                <p class="review-author"><strong>Batman</strong> - May 6, 2017 at 12:48 pm</p>
                                                <div class="rating">
                                                    <a href="#"></a>
                                                </div>
                                                <p>I know who superman is......</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="review-body">
                                            <div class="review-content">
                                                <p class="review-author"><strong>Superman</strong> - January 16, 2017 at 01:25 pm</p>
                                                <div class="rating">
                                                    <a href="#"></a>
                                                </div>
                                                <p>Iam seeing you batman... right now</p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div> <!--  end reviews -->
                        </div>

                    </div> <!-- end tab content -->

                </div>
            </div> <!-- end tabs -->
        </div> <!-- end row -->


    </div> <!-- end container -->
</section> <!-- end single product -->

<?php include "includes/footer.php"; ?>
