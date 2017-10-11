<?php
ob_start();
session_start();
?>

<?php
if (isset($_SESSION['customer_username'])) {
	$_SESSION['customer_username'] = null;
	//$_SESSION['customer_lastname'] = null;
	header("Location: index.php");
}
 if(isset($_COOKIE['customer_username'])){
     unset($_COOKIE['customer_username']);
    setcookie('customer_username', '', time() - 1200, '/');
}
