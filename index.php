<?php include "includes/header.php"; ?>

<?php include "includes/top-bar.php"; ?>

<?php include "includes/nav.php"; ?>

<?php include "includes/slider.php"; ?>

    <!-- Best Labours -->
    <section class="section-wrap pb-0">
        <div class="container">
            <div class="row row-10">
            <?php
            if (isset($_POST['lb_search']) AND !empty($_POST['search_key'])) { 
                $search_key = $_POST['search_key'];
                $query_search  = "SELECT tbl_labour.labour_id, tbl_labour_info.first_name, ";
                $query_search .= "tbl_labour_info.last_name, tbl_labour_info.labour_image, tbl_labour_info.labour_charges ";
                $query_search .= "FROM tbl_labour LEFT JOIN tbl_labour_info ON (tbl_labour_info.labour_id = tbl_labour.labour_id) ";
                $query_search .= "LEFT JOIN tbl_labour_address ON (tbl_labour_address.labour_id = tbl_labour.labour_id) WHERE labour_status = 1 AND tbl_labour_info.first_name LIKE '%$search_key%' OR tbl_labour_address.labour_address LIKE '%$search_key%' OR tbl_labour_info.labour_charges LIKE '%$search_key%' ";
                $query_result = mysqli_query($connection,$query_search) or printf(mysqli_error($connection));
                if (mysqli_num_rows($query_result) < 1) {
                    echo "No match found for your search ";
                }
                else{
                      $labour_table = array();
                      while ($row = mysqli_fetch_assoc($query_result)) {
                          $labour_table[] = $row;
                      }
                      foreach ($labour_table as $row):
                          $labour_id     = trim($row['labour_id']);
                          $firstName     = trim($row['first_name']);
                          $lastName      = trim($row['last_name']);
                          $labourImage   = trim($row['labour_image']);
                          $labour_charge = trim($row['labour_charges']);
                      ?>
                          <div class="col-md-3 col-xs-6 animated-from-left">
                              <div class="product-item">
                                  <div class="product-img">
                                  <?php $labour_id = base64_encode($labour_id+313131);?>
                                      <a href="labourDetails.php?l_id=<?php echo $labour_id?>">
                                          <img src="IMAGES/LABOUR_IMAGES/<?php echo $labourImage; ?>" alt="">
                                      </a>
                                      <div class="product-actions">
                                          <a href="" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                                              <i class="fa fa-heart"></i>
                                          </a>
                                      </div>
                                      <a href="labourDetails.php?l_id=<?php echo base64_encode($labour_id);?>" class="product-quickview">Quick View</a>
                                  </div>

                                  <div class="product-details">
                                      <h3>
                                          <a class="product-title" href="labourDetails.php"><?php echo $firstName." ".$lastName?></a>
                                      </h3>
                                      <span class="price">
                                        <ins>
                                          <span class="ammount">(&#x20B9;)<?php echo $labour_charge ?></span>
                                        </ins>
                                      </span>
                                  </div>
                              </div>
                          </div>
                      <!-- <h2 class="heading uppercase text-center">
                          <small>Ohooooo no data found</small>
                      </h2> -->
                <?php endforeach;
                }
            } else { ?>
                
            <div class="row heading-row">
                <div class="col-md-12 text-center">
                    <h2 class="heading uppercase">
                        <small>Best Labours</small>
                    </h2>
                </div>
            </div>
            <?php
                $connection;
                $query_select  = "SELECT tbl_labour.labour_id, tbl_labour_info.first_name, ";
                $query_select .= "tbl_labour_info.last_name, tbl_labour_info.labour_image, tbl_labour_info.labour_charges ";
                $query_select .= "FROM tbl_labour LEFT JOIN tbl_labour_info ON (tbl_labour_info.labour_id = tbl_labour.labour_id) ";
                $query_select .= "LEFT JOIN tbl_labour_address ON (tbl_labour_address.labour_id = tbl_labour.labour_id) WHERE labour_status = 1";
                $query_result = mysqli_query($connection,$query_select) or printf(mysqli_error($connection));
                if (mysqli_num_rows($query_result) < 1) {
                    echo "Oops... No labours available";
                }
                $labour_table = array();
                while ($row = mysqli_fetch_assoc($query_result)) {
                    $labour_table[] = $row;
                }
                foreach ($labour_table as $row):
                    $labour_id     = trim($row['labour_id']);
                    $firstName     = trim($row['first_name']);
                    $lastName      = trim($row['last_name']);
                    $labourImage   = trim($row['labour_image']);
                    $labour_charge = trim($row['labour_charges']);
                ?>
                    <div class="col-md-3 col-xs-6 animated-from-left">
                        <div class="product-item">
                            <div class="product-img">
                            <?php $labour_id = base64_encode($labour_id+313131);?>
                                <a href="labourDetails.php?l_id=<?php echo $labour_id?>">
                                    <img src="IMAGES/LABOUR_IMAGES/<?php echo $labourImage; ?>" alt="">
                                </a>
                                <div class="product-actions">
                                    <a href="" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                                <a href="labourDetails.php?l_id=<?php echo base64_encode($labour_id);?>" class="product-quickview">Quick View</a>
                            </div>

                            <div class="product-details">
                                <h3>
                                    <a class="product-title" href="labourDetails.php"><?php echo $firstName." ".$lastName?></a>
                                </h3>
                                <span class="price">
                                  <ins>
                                    <span class="ammount">(&#x20B9;)<?php echo $labour_charge ?></span>
                                  </ins>
                                </span>
                            </div>

                        </div>
                    </div>
                   <?php endforeach; } ?>

            </div> <!-- end row -->
        </div>
    </section> <!-- end best labours -->

<?php include "includes/footer.php"; ?>