<?php
ob_start();
session_start();
?>

<?php
if (isset($_SESSION['customer_firstname'])) {
	$_SESSION['customer_firstname'] = null;
	$_SESSION['customer_lastname'] = null;
	header("Location: index.php");
}
