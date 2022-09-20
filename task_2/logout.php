<?php session_start(); ?>

<?php
# Userid should unique.
# Name
# Password
# Email
# Mobile No
# Status 


$_SESSION['id'] = null;
$_SESSION['name'] = null;
$_SESSION['password'] = null;
$_SESSION['email'] = null;
$_SESSION['mobile_no'] = null;
$_SESSION['status'] = null;

header("Location: /demo/mysql/task_2/login.php");
?>
