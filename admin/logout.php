<?php
ob_start();
session_start();
?>

<?php

$_SESSION['admin_username'] = null;
$_SESSION['admin_firstname'] = null;
$_SESSION['admin_lastname'] = null;
$_SESSION['admin_user_role'] = null;

header("Location: index.php");
