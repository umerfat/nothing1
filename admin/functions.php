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
    //header("Refresh:3; url=".$location);
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
        move_uploaded_file($labour_tmp_image, "../IMAGES/LABOUR_IMAGES/$labour_image");

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
        if ($username == $db_username && password_verify($password, $db_password)){

            $_SESSION['admin_username']  = $db_username;
            $_SESSION['admin_firstname'] = $db_user_firstname;
            $_SESSION['admin_lastname']  = $db_user_lastname;
            $_SESSION['admin_user_role'] = $db_role;
            redirect("dashboard.php");   
        }
        else{
            echo validation_errors("Username or Password Wrong. Please try again.");
            return false;
        }
    }
}

function insert_category(){

    global $connection;
    if (isset($_POST['submit_category'])) {

        $cat_name = $_POST['cat_name'];

        if ($cat_name == "" || empty($cat_name)) {

            echo "
            <div class='col-md-12'>
              <div class='alert alert-danger alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>This field cannot be empty.!</strong>
              </div>
            </div>
            ";
        } else {
            $query = "INSERT INTO categories(cat_name) ";
            $query .= "VALUES('{$cat_name}')";
            $create_category_query = mysqli_query($connection, $query);
            if (!$create_category_query) {

                die("Query failed " . mysqli_error($connection));
            } else {
                echo "
            <div class='col-md-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Category inserted successfully.!</strong>
              </div>
            </div>
            ";
            }
        }
    }
}

function findAllCategories(){

    global $connection;
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_categories)) {

        $cat_id = $row['cat_id'];
        $cat_name = ucfirst($row['cat_name']);
        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_name}</td>";
        echo "<td>
                <a href='categories.php?edit={$cat_id}' class='btn btn-info'><i class='fa fa-pencil'></i>
                </a>
                <a onclick=\"javascript:; return confirm('Are you sure you want to delete')\" href='categories.php?delete={$cat_id}' class='btn btn-danger'><i class='fa fa-trash-o'></i>
                </a>
               </td>";
        echo "</tr>";
    }
}

function deleteCategories(){

    global $connection;

    if (isset($_GET['delete'])) {

        $cat_id_delete = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$cat_id_delete} ";
        $delete_query = mysqli_query($connection, $query);
        redirect("categories.php");
    }
}


function recordCount($table){

    global $connection;
    $query = "SELECT * FROM " . $table;
    $select_query = mysqli_query($connection, $query);
    $count_rows = mysqli_num_rows($select_query);
    return $count_rows;
}

function add_user(){

    global $connection;
    if (isset($_POST['create_user'])){

        $user_firstname = $_POST['first_name'];
        $user_lastname = $_POST['last_name'];
        $username = $_POST['username'];
        $user_image = $_FILES['user_image']['name'];
        $user_tmp_image = $_FILES['user_image']['tmp_name'];
        $user_role = $_POST['role'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_password = password_hash($user_password, PASSWORD_BCRYPT);

        move_uploaded_file($user_tmp_image, "../USER_IMAGES/$user_image");

        $query  = "INSERT INTO users(username, user_firstname, user_lastname, user_image, user_role, user_email, user_password) ";
        $query .= "VALUES('{$username}', '{$user_firstname}', '{$user_lastname}', '{$user_image}', '{$user_role}', '{$user_email}', '{$user_password}')";

        $insert_query = mysqli_query($connection, $query);
        if (!$insert_query){

            die("Query failed " . mysqli_error($connection));
        }
        else{
            echo "
            <div class='col-md-12 col-xs-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert'
                aria-label='close'>&times;                 </a>
                <strong>User with {$username} is created!</strong>
              </div>
            </div>
            ";
        }
    }
}

function update_user_profile(){

    global $connection;
    if (isset($_POST['update_profile'])) {

        $user_firstname = $_POST['first_name'];
        $user_lastname = $_POST['last_name'];
        $username = $_POST['username'];
        $user_image = $_FILES['user_image']['name'];
        $user_tmp_image = $_FILES['user_image']['tmp_name'];
        $user_role = $_POST['role'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        //$user_password = password_hash($user_password, PASSWORD_BCRYPT);

        move_uploaded_file($user_tmp_image, "../USER_IMAGE/$user_image");

        if (empty($user_image)) {
            $query = "SELECT * FROM users WHERE username = '{$username}'";
            $select_image = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_array($select_image)) {
                $user_image = $row['user_image'];
            }
        }

        $query = "UPDATE users SET ";
        $query .= "user_firstname = '{$user_firstname}', ";
        $query .= "user_lastname = '{$user_lastname}', ";
        $query .= "username = '{$username}', ";
        $query .= "user_image = '{$user_image}', ";
        $query .= "user_role = '{$user_role}', ";
        $query .= "user_email = '{$user_email}', ";
        $query .= "user_password = '{$user_password}' ";
        $query .= "WHERE username = '{$username}'";

        $update_query = mysqli_query($connection, $query);
        if (!$update_query) {

            die("Query failed " . mysqli_error($connection));
        } else {
            echo "
                        <div class='col-md-12 col-xs-12'>
                            <div class='alert alert-success alert-dismissable fade in'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;                 
                                </a>
                                <strong>{$username} has updated!</strong>
                            </div>
                        </div>
                        ";
        }
    }
}

function register_customer(){
    if (isset($_POST['lb_cus_register'])) {

        global $connection;
        $firstName         = clean($_POST['cus_first_name']);
        $lastName          = clean($_POST['cus_last_name']);
        $email             = clean($_POST['cus_email']);
        $phone             = clean($_POST['cus_phone_no']);
        $password          = clean($_POST['cus_password']);
        $password          = password_hash($password, PASSWORD_BCRYPT);
        $registration_date = date("F j, Y");
        $query  = "INSERT INTO customers(customer_first_name,customer_last_name,customer_email,customer_phone,customer_password,registration_date) ";
        $query .= "VALUES(?,?,?,?,?,?)";
        $stmt   = mysqli_prepare($connection,$query);
        mysqli_stmt_bind_param($stmt,"ssssss", $firstName, $lastName, $email, $phone, $password, $registration_date);
        $query_result = mysqli_stmt_execute($stmt);
        if (!$query_result){

            die("Query failed " . mysqli_error($connection));
        }
        else{
            echo "
            <div class='col-md-12 col-xs-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;                 </a>
                <strong>Congratulations {$firstName} {$lastName}! your account has been created!</strong>
              </div>
            </div>
            ";
        }
    }
}

function login_customer(){
    global $connection;
    if (isset($_POST['lb_customer_login'])){

        if (empty($_POST['cus_email_phone']) && empty($_POST['cus_password'])) {
            echo validation_errors("Email/Phone or Password Can not be empty ");
            //redirect("login.php");
            return false;
        }
        $email_phone = clean($_POST['cus_email_phone']);
        $password    = clean($_POST['cus_password']);
        $remember    = clean($_POST['remember']);

        $email_phone = escape($email_phone);
        $password    = escape($password);

        $query = "SELECT * FROM customers WHERE customer_email = '{$email_phone}' OR customer_phone = '{$email_phone}'";
        $select_query = mysqli_query($connection, $query);
        if (!$select_query){
            die("Failed " . mysqli_error($connection));
        }
        $row = mysqli_fetch_assoc($select_query);

            $db_id              = trim($row['customer_id']);
            $db_firstName       = trim($row['customer_first_name']);
            $db_lastName        = trim($row['customer_last_name']);
            $db_password        = trim($row['customer_password']);
            $db_phone           = trim($row['customer_phone']);
            $db_email           = trim($row['customer_email']);
        if (!strcmp($email_phone, $db_phone) || !strcmp($email_phone, $db_email) && password_verify($password, $db_password)){
            // if($remember == "on"){
            //     setcookie('customer_firstname', $db_firstName, time() + 1200, '/');
            // }
            $_SESSION['customer_firstname'] = $db_firstName;
            $_SESSION['customer_lastname']  = $db_lastName;
            redirect("index.php");
            //echo validation_errors("Welcome to labour ease");
        }
        else{
            echo validation_errors("email/phone or Password Wrong. Please try again.");
            return false;
        }
    }
}

function remember_me(){
    if (isset($_SESSION['customer_firstname']) || isset($_COOKIE['customer_firstname'])) {
            return true;
        }
        else{
           return false; 
        }
}
?>
