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
function validation_success($success_message){
    $alert_success_message = "
    <div class='alert alert-success alert-dismissible' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    <strong>Success!</strong>
    {$success_message}
    </div>
    ";
    return $alert_success_message;
}

//Add labour
function add_labour(){
    global $connection;
    if (isset($_POST['create_labour'])){
        $labour_cat_id       = clean($_POST['category']);
        $labour_first_name   = clean($_POST['first_name']);
        $labour_last_name    = clean($_POST['last_name']);
        $labour_govt_id      = clean($_POST['govt_id']);
        $labour_phone        = clean($_POST['phone_number']);
        $labour_state        = clean($_POST['state']);
        $labour_address      = clean($_POST['address']);
        $labour_email        = clean($_POST['email']);
        $labour_status       = clean($_POST['status']);
        $labour_charges      = clean($_POST['charges']);
        $labour_long_descript= clean($_POST['long_description']);
        $labour_short_descript= clean($_POST['short_description']);
        //$labour_date         = date("F j, Y");
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
        $query_labour  = "INSERT INTO tbl_labour(cat_id, labour_status) ";
        $query_labour .= "VALUES(?, ?)";
        $stmt = mysqli_prepare($connection, $query_labour);
        mysqli_stmt_bind_param($stmt, "ii", $labour_cat_id, $labour_status);
        $insert_query_labour = mysqli_stmt_execute($stmt);
        $sel = "SELECT LAST_INSERT_ID()";
        $stmt = '';
        $stmt = mysqli_prepare($connection,$sel);
        mysqli_stmt_bind_result($stmt,$labour_id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_fetch($stmt);
         //$labour = mysqli_fetch_row($labour_res);
         //echo ($labour[0]);
        //exit();
        

        if ($insert_query_labour){
            $query_labour_info  = "INSERT INTO tbl_labour_info(labour_id, first_name, last_name, adhar_or_election_id, labour_image, long_description, short_description, labour_charges) ";
            $query_labour_info .= "VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = '';
            $stmt = mysqli_prepare($connection, $query_labour_info);
            mysqli_stmt_bind_param($stmt, "ississsi", $labour_id, $labour_first_name, $labour_last_name, $labour_govt_id, $labour_image, $labour_long_descript, $labour_short_descript, $labour_charges);
            $insert_query_labour_info = mysqli_stmt_execute($stmt);
            //die("Query failed " . mysqli_error($connection));
            $query_labour_address  = "INSERT INTO tbl_labour_address(labour_id, labour_email, labour_phone, labour_address, labour_state) ";
            $query_labour_address .= "VALUES(?, ?, ?, ?, ?)";
            $stmt = '';
            $stmt = mysqli_prepare($connection, $query_labour_address);
            mysqli_stmt_bind_param($stmt, "issss", $labour_id, $labour_email, $labour_phone, $labour_address, $labour_state);
            $insert_query_labour_address = mysqli_stmt_execute($stmt);
            //print_r($stmt);
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
    $query = "SELECT * FROM tbl_category";
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

            echo validation_errors("This Field can't be empty");
        } else {
            $query = "INSERT INTO tbl_category(cat_name) ";
            $query .= "VALUES('{$cat_name}')";
            $create_category_query = mysqli_query($connection, $query);
            if (!$create_category_query) {

                die("Query failed " . mysqli_error($connection));
            } else {
                echo validation_success("Category saved successfully");
            }
        }
    }
}

function insert_sub_category(){

    global $connection;
    if (isset($_POST['submit_sub_category'])) {

        $sub_cat_name = $_POST['sub_cat_name'];
        $cat_id       = $_POST['category_name'];

        if ($sub_cat_name == "" || empty($sub_cat_name)) {

            echo validation_errors("Sub cat Field can't be empty");
        } else {
            $query = "INSERT INTO tbl_sub_category(cat_id,sub_cat_name) ";
            $query .= "VALUES('{$cat_id}','{$sub_cat_name}')";
            $create_category_query = mysqli_query($connection, $query);
            if (!$create_category_query) {

                die("Query failed " . mysqli_error($connection));
            } else {
                echo validation_success("Sub category saved successfully");
            }
        }
    }
}

function findAllCategories(){

    global $connection;
    $query = "SELECT * FROM tbl_category";
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

        move_uploaded_file($user_tmp_image, "../USER_IMAGES/$user_image");

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
        $username          = clean($_POST['cus_username']);
        $email             = clean($_POST['cus_email']);
        $phone             = clean($_POST['cus_phone_no']);
        $password          = clean($_POST['cus_password']);
        $conf_password     = clean($_POST['cus_conf_password']);
        $agree             = clean($_POST['cus_agree']);
        $encrypted_password= password_hash($password, PASSWORD_BCRYPT);
        // if ($agree != 1) {
        //     echo validation_errors("Please Accept our Terms and Conditions by clicking checkbox");
        //     return false;
        // }
        if (empty($username) || empty($email) || empty($phone)) {
            echo validation_errors("Fields can't be empty");
            return false;
        }
        if ($password != $conf_password) {
            echo validation_errors("Password does'nt match");
            return false;
        }
        $query_select = "SELECT * FROM customers";
        $select_cutomer = mysqli_query($connection, $query_select);
        var_dump($select_customer);
        while ($row = mysqli_fetch_assoc($select_customer)) {

            if ($username == trim($row['customer_username'])) {
                echo validation_errors("Sorry Username is already taken");
                return false;
            }
            if ($email == trim($row['customer_email'])) {
                echo validation_errors("Sorry Email is already registered");
                return false;
            }
            if ($phone == trim($row['customer_phone'])) {
                echo validation_errors("Sorry Phone number is already registered");
                return false;
            }
        }
        $query  = "INSERT INTO customers(customer_username,customer_email,customer_phone,customer_password)";
        $query .= "VALUES(?,?,?,?)";
        $stmt   = mysqli_prepare($connection,$query);
        mysqli_stmt_bind_param($stmt,"ssss", $username, $email, $phone, $encrypted_password);
        $query_result = mysqli_stmt_execute($stmt);
        if (!$query_result){

            die("Query failed " . mysqli_error($connection));
        }
        else{
            echo validation_success("Congratulations {$username}! your account has been created! You can Login now");
        }
    }
}

function login_customer(){
    global $connection;
    if (isset($_POST['lb_customer_login'])){

        if (empty($_POST['cus_username_phone']) && empty($_POST['cus_password'])) {
            echo validation_errors("Username/Phone or Password Can not be empty ");
            //redirect("login.php");
            return false;
        }
        $username_phone = clean($_POST['cus_username_phone']);
        $password       = clean($_POST['cus_password']);
        $remember       = clean($_POST['cus_remember']);

        $username_phone = escape($username_phone);
        $password       = escape($password);

        $query = "SELECT * FROM customers WHERE customer_username = '{$username_phone}' OR customer_phone = '{$username_phone}'";
        $select_query = mysqli_query($connection, $query);
        if (!$select_query){
            die("Failed " . mysqli_error($connection));
        }
        $row = mysqli_fetch_assoc($select_query);

            $db_id              = trim($row['customer_id']);
            $db_username        = trim($row['customer_username']);
            $db_password        = trim($row['customer_password']);
            $db_phone           = trim($row['customer_phone']);
        if (!strcmp($username_phone, $db_phone) || !strcmp($username_phone, $db_username) && password_verify($password, $db_password)){
            if($remember == "on"){
                setcookie('customer_firstname', $db_firstName, time() + 1200, '/');
            }
            $_SESSION['customer_username'] = $db_username;
            redirect("index.php");
            //echo validation_errors("Welcome to labour ease");
        }
        else{
            echo validation_errors("Username/Phone or Password Wrong. Please try again.");
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
