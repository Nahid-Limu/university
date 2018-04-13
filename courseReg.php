<?php
session_start();
if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
}

include 'connect/connect.php';


	if (isset($_POST['start_btn'])) {
		
		global $connection;
	$uid = $_SESSION['user_id'];
	$c_name = $_POST['c_name'];

	$query = "INSERT INTO `regCourse` (`uid`, `c_name`) VALUES ('$uid', '$c_name');";
	$result = mysqli_query($connection, $query);

	if ($result) {
		
		echo '<script>alert("Course Added")</script>';
		echo'<script>window.location="courses.php";</script>';
	}
	}



?>