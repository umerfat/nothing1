top_nav.php"; ?>
<?php

if (isset($_GET['c_id'])){

    $customer_id = $_GET['c_id'];

    $query = "SELECT * FROM customers WHERE customer_id = {$customer_id}";
    $select_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_query)){

        $customer_id        = $row['customer_id'];
        // $customer_password = $row['customer_password'];
        $customer_firstname = $row['customer_firstname'];
        $customer_lastname  = $row['customer_lastname'];
        $customer_email     = $row['customer_email'];
        $customer_email     = $row['customer_phone'];
        $customer_image     = $row['customer_image'];
        $customer_role      = $row['customer_status'];
    }
}

if (isset($_POST['update_customer'])){

    $customer_firstname  = $_POST['first_name'];
    $customer_lastname   = $_POST['last_name'];
    $customer_email      = $_POST['customer_email'];
    $customer_image      = $_FILES['customer_image']['name'];
    $customer_tmp_image  = $_FILES['customer_image']['tmp_name'];
    $customer_role       = $_POST['customer_status'];

    move_uploaded_file($customer_tmp_image, "../IMAGES/CUSTOMER_IMAGES/$customer_image");

    if (empty($customer_image)){
        $query = "SELECT * FROM customers WHERE customer_id = $edit_customer ";
        $select_image = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($select_image)){
            $customer_image = $row['customer_image'];
        }
    }

    $query  = "UPDATE customers SET ";
    $query .= "customer_firstname = '{$customer_firstname}', ";
    $query .= "customer_lastname = '{$customer_lastname}', ";
    $query .= "customername = '{$customername}', ";
    $query .= "customer_image = '{$customer_image}', ";
    $query .= "customer_role = '{$customer_role}', ";
    $query .= "customer_email = '{$customer_email}', ";
    $query .= "customer_password = '{$customer_password}' ";
    $query .= "WHERE customer_id = {$edit_customer}";

    $update_query = mysqli_query($connection, $query);
    if (!$update_query){

        die("Query failed " . mysqli_error($connection));
    }
    else{
        echo "
            <div class='col-md-12 col-xs-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;                 </a>
                <strong>{$customername} has updated!</strong>
              </div>
            </div>
            ";
    }
}

?>

<form class="form-horizontal form-label-left" action="" method="post"
      enctype="multipart/form-data">
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="first_name">First Name
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="firstname" class="form-control col-md-7 col-xs-12"
                   name="first_name" type="text" value="<?php echo $customer_firstname; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="last_name">Last Name
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="lastname" class="form-control col-md-7 col-xs-12"
                   name="last_name" type="text" value="<?php echo $customer_lastname; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="customername">customername
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="customername" class="form-control col-md-7 col-xs-12"
                   name="customername" type="text" value="<?php echo $customername; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="customer_image">Image
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <img src="../customer_IMAGES/<?php echo $customer_image; ?>" width="200" alt="Image not
            displayed" class="img-responsive">
            <input type="file" id="customer_image" name="customer_image" class="form-control col-md-7
            col-xs-12">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="role">Role
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <select class="form-control" name="role">
                <option value="<?php echo $customer_role; ?>"><?php echo $customer_role; ?></option>
                <?php
                if ($customer_role == 'Admin'){
                    echo "<option value='Staff'>Staff</option>";
                }
                else {
                    echo "<option value='Admin'>Admin</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="customer_email">Email
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="customer_email" class="form-control col-md-7 col-xs-12"
                   name="customer_email" type="email" value="<?php echo $customer_email; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="customer_password">Password
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="password" class="form-control col-md-7 col-xs-12"
                   name="customer_password" type="password" value="<?php echo $customer_password; ?>">
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-2">
            <button id="customer-submit" name="update_customer" type="submit" class="btn
            btn-success">Submit</button>
        </div>
    </div>
</form>