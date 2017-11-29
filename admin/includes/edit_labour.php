<?php
if (isset($_GET['p_id'])){
    //global $connection;
    $edit_p_id = $_GET['p_id'];
    //$query = "SELECT * FROM labour WHERE labour_id = $edit_p_id";
}

if (isset($_POST['update_labour'])){

    $first_name         = clean($_POST['first_name']);
    $last_name          = clean($_POST['last_name']);
    $govt_id            = clean($_POST['govt_id']);
    $phone_number       = clean($_POST['phone_number']);
    $state              = clean($_POST['state']);
    $address            = clean($_POST['address']);
    $email              = clean($_POST['email']);
    $category_id        = clean($_POST['category']);
    $status             = clean($_POST['status']);
    $labour_charges     = clean($_POST['labour_charges']);
    $long_description   = clean($_POST['long_description']);
    $short_description  = clean($_POST['short_description']);
    $labour_image       = $_FILES['image']['name'];
    $labour_tmp_image   = $_FILES['image']['tmp_name'];
    move_uploaded_file($labour_tmp_image, "../IMAGES/LABOUR_IMAGES/$labour_image");

    if (empty($labour_image)){

        $query = "SELECT labour_image FROM tbl_labour_info WHERE labour_id = $edit_p_id ";
        $select_image = mysqli_query($connection, $query) or mysqli_error($connection);
        $row = mysqli_fetch_array($select_image) or mysqli_error($connection);
        $labour_image = trim($row['labour_image']);
    }

    // $query  = "UPDATE tbl_labour SET ";
    // $query .= "labour_category_id ='{$category_id}', ";
    // $query .= "labour_first_name = '{$first_name}', ";
    // $query .= "labour_last_name = '{$last_name}', ";
    // $query .= "labour_govt_id = '{$govt_id}', ";
    // $query .= "labour_phone = '{$phone_number}', ";
    // $query .= "labour_state = '{$state}', ";
    // $query .= "labour_address = '{$address}', ";
    // $query .= "labour_email = '{$email}', ";
    // $query .= "labour_status = '{$status}', ";
    // $query .= "labour_image = '{$labour_image}' ";
    // $query .= " WHERE labour_id = '{$edit_p_id}'";


    $query = "UPDATE tbl_labour INNER JOIN tbl_labour_info on tbl_labour_info.labour_id=tbl_labour.labour_id  ";
    $query .= "INNER JOIN tbl_labour_address on tbl_labour_address.labour_id=tbl_labour.labour_id ";
    $query .= "SET tbl_labour.cat_id = '{$category_id}', tbl_labour.labour_status= '{$status}', ";
    $query .= "tbl_labour_info.first_name = '{$first_name}', tbl_labour_info.last_name = '{$last_name}', ";
    $query .= "tbl_labour_info.adhar_or_election_id = '{$govt_id}', tbl_labour_info.labour_image = '{$labour_image}', ";
    $query .= "tbl_labour_info.long_description = '{$long_description}', tbl_labour_info.short_description = '{$short_description}', tbl_labour_info.labour_charges = '{$labour_charges}', ";
    $query .= "tbl_labour_address.labour_email = '{$email}', tbl_labour_address.labour_phone = '{$phone_number}', tbl_labour_address.labour_address = '{$address}', tbl_labour_address.labour_state = '{$state}' ";
    $query .= "WHERE tbl_labour.labour_id = '{$edit_p_id}'";
    //var_dump($query);
    $query = mysqli_query($connection, $query);
    if (!$query){

        die("Query failed " . mysqli_error($connection));
    }
    else{
        echo "
            <div class='col-md-12 col-xs-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>{$first_name} has updated!</strong>
              </div>
            </div>
            ";
    }
}

 $query  = "SELECT tbl_labour.labour_id, tbl_labour.cat_id,tbl_labour.labour_status, tbl_labour_info.first_name, ";
$query .= "tbl_labour_info.last_name, tbl_labour_info.adhar_or_election_id, ";
$query .= "tbl_labour_info.labour_image, tbl_labour_info.long_description, ";
$query .= "tbl_labour_info.short_description, tbl_labour_info.labour_charges, ";
$query .= "tbl_labour_address.labour_email, tbl_labour_address.labour_phone, tbl_labour_address.labour_address, tbl_labour_address.labour_state, ";
$query .= "tbl_category.cat_name ";
$query .= "FROM tbl_labour LEFT JOIN tbl_labour_info ON (tbl_labour_info.labour_id = tbl_labour.labour_id) ";
$query .= "LEFT JOIN tbl_labour_address ON (tbl_labour_address.labour_id = tbl_labour.labour_id)";
$query .= "LEFT JOIN tbl_category ON (tbl_category.cat_id = tbl_labour.cat_id) WHERE tbl_labour.labour_id = $edit_p_id";


//$stmt = mysqli_prepare($connection,$query);
//mysqli_bind_param($stmt,i,$edit_p_id);  
$select_labour_by_id = mysqli_query($connection, $query) or printf(mysqli_error($connection));
$row                 = mysqli_fetch_assoc($select_labour_by_id) or printf(mysqli_error($connection));
$labour_id           = trim($row['labour_id']);
$labour_first_name   = trim($row['first_name']);
$labour_last_name    = trim($row['last_name']);
$labour_category_id  = trim($row['cat_id']);
$labour_govt_id      = trim($row['adhar_or_election_id']);
$labour_charges      = trim($row['labour_charges']);
$labour_phone        = trim($row['labour_phone']);
$labour_state        = trim($row['labour_state']);
$labour_address      = trim($row['labour_address']);
$labour_email        = trim($row['labour_email']);
$labour_status       = trim($row['labour_status']);
$long_description    = trim($row['long_description']);
$short_description   = trim($row['short_description']);
$labour_image_old    = $row['labour_image'];
    
?>

<form class="form-label-left" action="" method="POST"
      enctype="multipart/form-data">
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="FirstName">First Name </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <input id="FirstName" class="form-control col-md-7 col-xs-12"
                   name="first_name" type="text" value="<?php echo $labour_first_name; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="LastName">Last Name </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <input id="LastName" class="form-control col-md-7 col-xs-12"
                   name="last_name" type="text" value="<?php echo $labour_last_name; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="GovtId">Govt. Id </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <input type="text" id="GovtId" name="govt_id" class="form-control col-md-7 col-xs-12" value="<?php echo $labour_govt_id; ?>" maxlength = "15">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="PhoneNumber">Phone Number </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <input type="text" id="PhoneNumber" class="form-control col-md-7 col-xs-12" name="phone_number" value="<?php echo $labour_phone; ?>" maxlength = "12">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="state">State
         </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <input type="text" id="state" name="state" class="form-control col-md-7
            col-xs-12" value="<?php echo $labour_state; ?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="address">Address </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <input type="text" id="address" name="address" class="form-control col-md-7 col-xs-12" value="<?php echo $labour_address; ?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="Email">Email
        </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <input type="email" id="Email" name="email" class="form-control col-md-7
            col-xs-12" value="<?php echo $labour_email; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="Email">Labour Charges
        </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <input type="text" id="labour_charges" name="labour_charges" class="form-control col-md-7
            col-xs-12" value="<?php echo $labour_charges; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="category">Category </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <select class="form-control" name="category">
                <?php
                $query = "SELECT * FROM tbl_category";
                $category_query = mysqli_query($connection, $query);
                confirmQuery($category_query);
                while($row = mysqli_fetch_assoc($category_query)) {

                    $cat_id = $row["cat_id"];
                    $cat_name = $row["cat_name"];
                    if ($cat_id == $labour_category_id){
                        echo "<option selected value='{$cat_id}'>{$cat_name}</option>";
                    }
                    else{
                        echo "<option value='{$cat_id}'>{$cat_name}</option>";
                    }
                }
                ?>
            </select>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="status">Status </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <select class="form-control" name="status">
                <option value='<?php echo $labour_status; ?>'><?php
                if ($labour_status == 1 ) {
                    echo "Active";
                }
                else{
                    echo "Inactive";
                }
                 ?></option>
                }
                <?php
                if ($labour_status == 1){
                    echo "<option value='0'>Inactive</option>";
                }
                else{
                    echo "<option value='1'>Active</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="long_description">Long Decsp </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <textarea name="long_description" id="long_description" cols="30" rows="6" class="form-control col-md-7 col-xs-12" value="Long Description"></textarea>
        </div>
    </div>
    <div class="item form-group">
    <label class="control-label col-md-2 col-sm-12 col-xs-12" for="short_description">Short Descp </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <textarea name="short_description" id="short_description" cols="30" rows="6" class="form-control col-md-7 col-xs-12" value="Short Description"></textarea>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="Image">Image </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <img src="../IMAGES/LABOUR_IMAGES/<?php echo $labour_image_old; ?>" width="200" alt="Image not
            displayed" class="img-responsive">
            <input type="file" id="Image" name="image" class="form-control col-md-7
            col-xs-12">
        </div>
    </div>

   <!--  <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="content">Content </label>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <textarea name="content" id="content" cols="30" rows="6" class="form-control
            col-md-7 col-xs-12"><?php echo $labour_content; ?></textarea>
        </div>
    </div> -->

    <div class="ln_solid"></div>
    <div class="clearfix"></div>
    <div class="form-group">
        <div class="col-md-12">
            <button id="post-submit" name="update_labour" type="submit" class="btn
            btn-success">Update</button>
        </div>
    </div>
</form>