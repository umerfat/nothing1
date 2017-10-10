<?php
if (isset($_GET['p_id'])){
    global $connection;

    $edit_p_id = $_GET['p_id'];

    $query = "SELECT * FROM labour WHERE labour_id = $edit_p_id";

    //$stmt = mysqli_prepare($connection,$query);
    //mysqli_bind_param($stmt,i,$edit_p_id);  
    $select_labour_by_id = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_labour_by_id)) {

        $labour_id           = trim($row['labour_id']);
        $labour_first_name   = trim($row['labour_first_name']);
        $labour_last_name    = trim($row['labour_last_name']);
        $labour_category_id  = trim($row['labour_category_id']);
        $labour_govt_id      = trim($row['labour_govt_id']);
        $labour_phone        = trim($row['labour_phone']);
        $labour_state        = trim($row['labour_state']);
        $labour_address      = trim($row['labour_address']);
        $labour_email        = trim($row['labour_email']);
        $labour_status       = trim($row['labour_status']);
        $labour_image_old    = $row['labour_image'];
    }
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
    $labour_image       = $_FILES['image']['name'];
    $labour_tmp_image   = $_FILES['image']['tmp_name'];
    move_uploaded_file($labour_tmp_image, "../IMAGES/LABOUR_IMAGES/$labour_image");

    if (empty($labour_image)){
        $query = "SELECT * FROM labour WHERE labour_id = $edit_p_id ";
        $select_image = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($select_image)){
            $labour_image = trim($row['labour_image']);
        }
    }

    $query  = "UPDATE labour SET ";
    $query .= "labour_category_id ='{$category_id}', ";
    $query .= "labour_first_name = '{$first_name}', ";
    $query .= "labour_last_name = '{$last_name}', ";
    $query .= "labour_govt_id = '{$govt_id}', ";
    $query .= "labour_phone = '{$phone_number}', ";
    $query .= "labour_state = '{$state}', ";
    $query .= "labour_address = '{$address}', ";
    $query .= "labour_email = '{$email}', ";
    $query .= "labour_status = '{$status}', ";
    $query .= "labour_image = '{$labour_image}' ";
    $query .= " WHERE labour_id = '{$edit_p_id}'";

    $update_query = mysqli_query($connection, $query);
    if (!$update_query){

        die("Query failed " . mysqli_error($connection));
    }
    else{
        echo "
            <div class='col-md-12 col-xs-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;                 </a>
                <strong>{$first_name} has updated!</strong>
              </div>
            </div>
            ";
    }
}

?>

<form class="form-horizontal form-label-left" action="" method="post"
      enctype="multipart/form-data">
    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="FirstName">First Name </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="FirstName" class="form-control col-md-7 col-xs-12"
                   name="first_name" type="text" value="<?php echo $labour_first_name; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="LastName">Last Name </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="LastName" class="form-control col-md-7 col-xs-12"
                   name="last_name" type="text" value="<?php echo $labour_last_name; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="GovtId">Govt. Id </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="GovtId" name="govt_id" class="form-control col-md-7 col-xs-12" value="<?php echo $labour_govt_id; ?>" maxlength = "15">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="PhoneNumber">Phone Number </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="PhoneNumber" class="form-control col-md-7 col-xs-12" name="phone_number" value="<?php echo $labour_phone; ?>" maxlength = "12">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="state">State
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="state" name="state" class="form-control col-md-7
            col-xs-12" value="<?php echo $labour_state; ?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="address">Address </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="address" name="address" class="form-control col-md-7 col-xs-12" value="<?php echo $labour_address; ?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="Email">Email
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="email" id="Email" name="email" class="form-control col-md-7
            col-xs-12" value="<?php echo $labour_email; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="category">Category </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <select class="form-control" name="category">
                <?php
                $query = "SELECT * FROM categories";
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
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="status">Status </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <select class="form-control" name="status">
                <option value='<?php echo $labour_status; ?>'><?php echo ucfirst
                    ($labour_status); ?></option>
                <?php
                if ($labour_status == 'publish'){
                    echo "<option value='draft'>Draft</option>";
                }
                else{
                    echo "<option value='publish'>Publish</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="Image">Image </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <img src="../IMAGES/LABOUR_IMAGES/<?php echo $labour_image_old; ?>" width="200" alt="Image not
            displayed" class="img-responsive">
            <input type="file" id="Image" name="image" class="form-control col-md-7
            col-xs-12">
        </div>
    </div>


   <!--  <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="content">Content </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <textarea name="content" id="content" cols="30" rows="6" class="form-control
            col-md-7 col-xs-12"><?php echo $labour_content; ?></textarea>
        </div>
    </div> -->

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-1">
            <button id="post-submit" name="update_labour" type="submit" class="btn
            btn-success">Update</button>
        </div>
    </div>
</form>