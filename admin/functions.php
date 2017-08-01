<?php
function confirmQuery($result){

    global $connection;
    if (!$result) {
        die("Query Failed " . mysqli_error($connection));
    }
}

function clean($string){
    return htmlentities($string);
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
        $labour_category_id  = clean($_POST['category']);
        $labour_first_name   = clean($_POST['first_name']);
        $labour_last_name    = clean($_POST['last_name']);
        $labour_govt_id      = clean($_POST['govt_id']);
        $labour_phone_number = clean($_POST['phone_number']);
        $labour_state        = clean($_POST['state']);
        $labour_address      = clean($_POST['address']);
        $labour_email        = clean($_POST['email']);
        $labour_status       = clean($_POST['status']);
        $labour_date         = date("F j, Y");
        $labour_image        = $_FILES['image']['name'];
        $labour_tmp_image    = $_FILES['image']['tmp_name'];
        // $labour_content      = $_POST['content'];
        // $labour_content      = str_replace("'", "''", $post_content);
        move_uploaded_file($labour_tmp_image, "../LABOUR_IMAGES/$labour_image");

        // $query  = "INSERT INTO labour(labour_category_id, labour_first_name, labour_last_name, labour_govt_id, labour_phone,labour_state,labour_address,labour_email, labour_status, labour_creation_date, labour_image) ";
        // $query .= "VALUES('{$labour_category_id}', '{$labour_first_name}', '{$labour_last_name}', '{$labour_govt_id}','{$labour_phone_number}','{$labour_state}','{$labour_address}', '{$labour_email}', '{$labour_status}', '{$labour_date}', '{$labour_image}')";

        // $insert_query = mysqli_query($connection, $query);
        // if (!$insert_query){

        //     die("Query failed " . mysqli_error($connection));
        // }
        // else{
        //     echo "
        //     <div class='col-md-12 col-xs-12'>
        //       <div class='alert alert-success alert-dismissable fade in'>
        //         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;                 </a>
        //         <strong>New labour {$labour_first_name} {$labour_last_name} created!</strong>
        //       </div>
        //     </div>
        //     ";
        // }
        $query  = "INSERT INTO labour(labour_category_id, labour_first_name, labour_last_name, labour_govt_id, labour_phone,labour_state,labour_address,labour_email, labour_status, labour_creation_date, labour_image) ";
        $query .= "VALUES(?, ?, ?, ?,?,?,?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt, "issssssssss", $labour_category_id, $labour_first_name, $labour_last_name, $labour_govt_id, $labour_phone_number, $labour_state, $labour_address, $labour_email, $labour_status, $labour_date, $labour_image);
        $insert_query = mysqli_stmt_execute($stmt);
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

        $cat_id   = $row['cat_id'];
        $cat_name = $row['cat_name'];
        echo "<option value='{$cat_id}'>{$cat_name}</option>";
    }
}

function escape($string){
    global $connection;
    return mysqli_real_escape_string($connection,$string);
}
function login_user(){
    global $connection;
    if (isset($_POST['lb_user_login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = escape($username);
        $password = escape($password);

        $query = "SELECT * FROM users WHERE username = '{$username}'";
        $select_query = mysqli_query($connection, $query);
        if (!$select_query){
            die("Failed " . mysqli_error($connection));
        }
        while ($row = mysqli_fetch_assoc($select_query)){

            $db_id              = $row['user_id'];
            $db_username        = $row['username'];
            $db_password        = $row['user_password'];
            $db_user_firstname  = $row['user_firstname'];
            $db_user_lastname   = $row['user_lastname'];
            $db_role            = $row['user_role'];
        }
        if ($username !== $db_username && $password !== $db_password){

            redirect("index.php");
        }
        elseif (password_verify($password, $db_password)){

            $_SESSION['username'] = $db_username;
            $_SESSION['firstname'] = $db_user_firstname;
            $_SESSION['lastname'] = $db_user_lastname;
            $_SESSION['user_role'] = $db_role;
            redirect("admin/index.php");
        }
        else{

            redirect("index.php");
        }

//    login_user($_POST['username'], $_POST['password']);
    }
}

