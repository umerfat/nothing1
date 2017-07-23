<?php

if (isset($_GET['p_id'])){

    $edit_p_id = $_GET['p_id'];

    $query = "SELECT * FROM posts WHERE post_id = $edit_p_id";
    $select_posts_by_id = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_posts_by_id)) {

        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_category_id = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_content = mysqli_real_escape_string($connection, $row['post_content']);
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];
        $publish_date = $row['publish_date'];
    }
}

if (isset($_POST['update_post'])){

    $post_title = $_POST['title'];
    $post_category_id = $_POST['category'];
    $post_author = $_POST['author'];
    $post_status = $_POST['status'];
    $post_image = $_FILES['image']['name'];
    $post_tmp_image = $_FILES['image']['tmp_name'];
    $post_tags = $_POST['tags'];
    $post_date  = date("F j, Y");
    $post_content = $_POST['content'];
    $post_content = str_replace("'", "''", $post_content);

    move_uploaded_file($post_tmp_image, "../images/$post_image");

    if (empty($post_image)){
        $query = "SELECT * FROM posts WHERE post_id = $edit_p_id ";
        $select_image = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($select_image)){
            $post_image = $row['post_image'];
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
                   name="first_name" type="text" value="<?php echo $first_name; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="LastName">Last Name </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="LastName" class="form-control col-md-7 col-xs-12"
                   name="last_name" type="text" value="<?php echo $last_name; ?>">
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
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="GovtId">Govt. Id </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="GovtId" name="govt_id" class="form-control col-md-7
            col-xs-12" value="<?php echo $govt_id; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="PhoneNumber">Phone Number </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="PhoneNumber" name="author" class="form-control col-md-7
            col-xs-12" value="<?php echo $phone_number; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="author">Author </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="author" name="author" class="form-control col-md-7
            col-xs-12" value="<?php echo $post_author; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="status">Status </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <select class="form-control" name="status">
                <option value='<?php echo $post_status; ?>'><?php echo ucfirst
                    ($post_status); ?></option>
                <?php
                if ($post_status == 'publish'){
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
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="image">Image </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <img src="../images/<?php echo $post_image; ?>" width="200" alt="Image not
            displayed" class="img-responsive">
            <input type="file" id="image" name="image" class="form-control col-md-7
            col-xs-12">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="tags">Tags </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="tags" name="tags" class="form-control col-md-7
            col-xs-12" value="<?php echo $post_tags; ?>">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-1 col-sm-12 col-xs-12" for="content">Content </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <textarea name="content" id="content" cols="30" rows="6" class="form-control
            col-md-7 col-xs-12"><?php echo $post_content; ?></textarea>
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-1">
            <button id="post-submit" name="update_post" type="submit" class="btn
            btn-success">Submit</button>
        </div>
    </div>
</form>