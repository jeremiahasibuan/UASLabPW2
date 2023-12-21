<?php
session_start();
$_SESSION['statuslogin'] = false;
session_destroy();
header("location: dashboard.php");
?>

