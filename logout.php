<?php
session_start();
include 'connect/connect.php';
session_destroy();
header("Location: login.php");
exit();
?>

