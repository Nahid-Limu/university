<?php
session_start();
include 'connect/connect.php';

if (isset($_POST['login'])) {
	global $connection;
	$uname = $_POS['name'];
	$upass = $_POS['pass'];

	$query = "SELECT * FROM `user` WHERE name = '$uname' AND pass = '$upass';";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);

	if ($row['pass'] == $upass) {

        $_SESSION['user_id'] = $row['id'];
		header('Location: index.php' );
	}
	else{
		echo '<script>alert("User Name & Password Wrong")</script>';
	}
}
?>