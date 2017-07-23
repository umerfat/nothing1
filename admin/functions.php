<?php
function confirmQuery($result){

    global $connection;
    if (!$result) {
        die("Query Failed " . mysqli_error($connection));
    }
}

function redirect($location){

    header("Location: " . $location);
}

function set_message($message){

    if(!empty($message)){

        $_SESSION['message'] = $message;
    }
    else{
        $message = "";
    }
}
function display_message(){

    if(isset($_SESSION['message'])){

        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function validation_errors($error_message){
    $alert_error_message = "
    <div class='alert alert-danger alert-dismissible' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    <strong>Warning!</strong>
    {$error_message}
    </div>
    ";
    return $alert_error_message;
}

//Add labour
function add_labour(){

    global $connection;
    if (isset($_POST['create_labour'])){
echo "string";
        $labour_category_id  = $_POST['category'];
        $labour_first_name   = $_POST['first_name'];
        $labour_last_name    = $_POST['last_name'];
        $labour_govt_id      = $_POST['govt_id'];
        $labour_phone_number = $_POST['phone_number'];
        $labour_address      = $_POST['address'];
        $labour_email        = $_POST['email'];
        $labour_status       = $_POST['status'];
        $labour_date         = date("F j, Y");
        $labour_image        = $_FILES['image']['name'];
        $labour_tmp_image    = $_FILES['image']['tmp_name'];
        // $labour_content      = $_POST['content'];
        // $labour_content      = str_replace("'", "''", $post_content);
        $labour_comment_count = 0;

        move_uploaded_file($labour_tmp_image, "../images/$labour_image");

        $query  = "INSERT INTO labour(labour_category_id, labour_first_name, labour_last_name, labour_govt_id, labour_phone,labour_address,labour_email, labour_status, labour_creation_date, labour_image) ";
        $query .= "VALUES('{$labour_category_id}', '{$labour_first_name}', '{$labour_last_name}', '{$labour_govt_id}','{$labour_phone_number}','{$labour_address}', '{$labour_email}', '{$labour_status}', '{$labour_date}', '{$labour_image}')";

        $insert_query = mysqli_query($connection, $query);
        if (!$insert_query){

            die("Query failed " . mysqli_error($connection));
        }
        else{
            echo "
            <div class='col-md-12 col-xs-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;                 </a>
                <strong>New labour {$labour_first_name} {$labour_last_name} created!</strong>
              </div>
            </div>
            ";
        }
    }
}

function add_labour_category(){

    global $connection;
    $query = "SELECT * FROM categories";
    $category_query = mysqli_query($connection, $query);
    if (!$category_query){

        die("Query failed " . mysqli_error($connection));
    }
    while ($row = mysqli_fetch_assoc($category_query)){

        $cat_id = $row['cat_id'];
        $cat_name = $row['cat_name'];
        echo "<option value='{$cat_id}'>{$cat_name}</option>";
    }
}
