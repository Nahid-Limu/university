<?php
session_start();
if (!isset($_SESSION['user_id'])) {

	header("Location: login.php");
}

include 'connect/connect.php';


if (!isset($_POST['name'])) {
	
	header("location: index.php");
	exit;
	
}
else{

	global $connection;
	$uid = $_SESSION['user_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phn = $_POST['phn'];
	$event = $_POST['event'];

	$query = "INSERT INTO `regevent` (`uid`, `name`, `email`, `phn`, `event`) VALUES ('$uid', '$name', '$email', '$phn', '$event') ";
		$result = mysqli_query($connection, $query);

		

	echo $name;
}


?>