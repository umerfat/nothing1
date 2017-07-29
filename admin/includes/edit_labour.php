<?php
include ("../functions.php");
if (isset($_GET['p_id'])){

    $edit_p_id = $_GET['p_id'];

    $query = "SELECT * FROM labour WHERE labour_id = $edit_p_id";
    $select_labour_by_id = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_labour_by_id)) {

        $labour_id           = trim($row['labour_id']);
        $labour_first_name   = $row['labour_first_name'];
        $labour_last_name    = $row['labour_last_name'];
        $labour_category_id  = $row['labour_category_id'];
        $labour_govt_id      = $row['labour_govt_id'];
        $labour_phone        = $row['labour_phone'];
        $labour_state        = $row['labour_state'];
        $labour_address      = $row['labour_address'];
        $labour_email        = $row['labour_email'];
        $labour_status       = $row['labour_status'];
        $labour_image        = $row['labour_image'];
        //$post_content = mysqli_real_escape_string($connection, $row['post_content']);
        //$post_tags = $row['post_tags'];
        //$post_comment_count = $row['post_comment_count'];
        //$post_date = $row['post_date'];
        //$publish_date = $row['publish_date'];
    }
}

if (isset($_POST['update_post'])){

    $labour_first_name   = clean($_POST['first_name']);
    $post_title          = $_POST['last_name'];
    $post_govt_id        = $_POST['govt_id'];
    $post_phone          = $_POST['phone_number'];
    $post_state          = $_POST['state'];
    $post_address        = $_POST['address'];
    $post_email          = $_POST['email'];
    $labour_category_id  = $_POST['category'];
    $post_status         = $_POST['status'];
    $post_image          = $_POST['image'];
    move_uploaded_file($post_tmp_image, "../images/$post_image");

    if (empty($post_image)){
        $query = "SELECT * FROM labour WHERE post_id = $edit_p_id ";
        $select_image = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($select_image)){
            $post_image = trim($row['post_image']);
        }
    }

    $query  = "UPDATE posts SET ";
    $query .= "post_title = '{$post_title}', ";
    $query .= "post_category_id ='{$post_category_id}', ";
    $query .= "post_date = '{$post_date}', ";
    $query .= "post_author = '{$post_author}', ";
    $query .= "post_status = '{$post_status}', ";
    $query .= "post_tags = '{$post_tags}', ";
    $query .= "post_content = '{$post_content}', ";
    $query .= "post_image = '{$post_image}' ";
    if($post_status == "publish") {
        $query .= ", publish_date =
          CASE
                WHEN publish_date IS NULL
                      THEN '{$post_date}'
                ELSE
                      publish_date
          END ";
    }
    $query .= " WHERE post_id = '{$edit_p_id}'";

    $update_query = mysqli_query($connection, $query);
    if (!$update_query){

        die("Query failed " . mysqli_error($connection));
    }
    else{
        echo "
            <div class='col-md-12 col-xs-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;                 </a>
                <strong>{$post_title} has updated!</strong>
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
            <input type="text" id="GovtId" name="govt_id" class="form-control col-md-7 col-xs-12" value="<?php echo $labour_govt_id; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="PhoneNumber">Phone Number </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="PhoneNumber" class="form-control col-md-7 col-xs-12" name="phone_number" value="<?php echo $labour_phone; ?>">
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
            <img src="../images/<?php echo $labour_image; ?>" width="200" alt="Image not
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