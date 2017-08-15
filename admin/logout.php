<?php
ob_start();
session_start();
?>

<?php

if (isset($_SESSION['admin_username'])) {
	$_SESSION['admin_username'] = null;
	$_SESSION['admin_firstname'] = null;
	$_SESSION['admin_lastname'] = null;
	$_SESSION['admin_user_role'] = null;
	header("Location: index.php");
}

if (isset($_SESSION['customer_firstname'])) {
	$_SESSION['customer_firstname'] = null;
	$_SESSION['customer_lastname'] = null;
	header("Location: ../index.php");
}
