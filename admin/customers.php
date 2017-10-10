<?php include "includes/header.php"; ?>

<?php include "includes/side_top.php"; ?>

<?php include "includes/sidebar_menu.php"; ?>

<?php include "includes/top_nav.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Customers</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <?php

                        if (isset($_GET['customer'])){

                            $customer = $_GET['customer'];
                        }
                        else{
                            $customer = "";
                        }
                        switch ($customer){

                            case 'edit_customer':
                                include "includes/edit_customer.php";
                                break;

                            default:
                                include "includes/view_all_customers.php";
                                break;
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div> -->
        <table id="datatable-responsive" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>F Name</th>
                <th>L Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Take Action</th>
            </tr>
            </thead>
            <tbody>

            <?php
            // $test = "select * from labour";
            $query  = "SELECT * FROM customers";
         //var_dump($query);
            $select_customers = mysqli_query($connection, $query);
            //var_dump($select_labours);
            while ($row = mysqli_fetch_assoc($select_customers)){

                $customer_id           = $row['customer_id'];
                $customer_first_name   = $row['customer_first_name'];
                $customer_last_name    = $row['customer_last_name'];
                $customer_phone        = $row['customer_phone'];
                $customer_email        = $row['customer_email'];
                $customer_image        = $row['customer_image'];

                echo "<tr>";
                echo "<td>{$customer_id}</td>";
                if (empty($customer_image)) {
                   echo "<td><img src='../IMAGES/CUSTOMER_IMAGES/default.png' height='40px'></td>"; 
                }
                else{
                    echo "<td><img src='../IMAGES/CUSTOMER_IMAGES/customer_image' height='40px'></td>";
                }
                echo "<td>{$customer_first_name}</td>";
                echo "<td>{$customer_last_name}</td>";
                echo "<td>{$customer_phone}</td>";
                echo "<td>{$customer_email}</td>";
                echo "<td class='col-sm-2'>
                    <ul class='take-action'>
                    <li><a href='customers.php' class='btn btn-info'><i class='fa fa-pencil'></i> 
                </a></li>
                    <li><a onclick=\"javascript:; return confirm('Are you sure you want to delete')\" href='customers.php?delete={$customer_id}' class='btn btn-danger'><i
                 class='fa fa-trash-o'></i> 
                </a></li>
                    </ul>
              </td>";
               echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <?php

        //deleting post
        if (isset($_GET['delete'])){

            $delete_customer_id = $_GET['delete'];
            $query = "DELETE FROM customers WHERE customer_id = {$delete_customer_id}";
            $delete_query = mysqli_query($connection, $query);

            redirect("customers.php");
        }
?>
    </div>
</div>

<?php include "includes/footer.php"; ?>
