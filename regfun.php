<?php
include 'connect/connect.php';

if (isset($_POST['reg'])) {
	global $connection;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$city = $_POST['city'];

	

	$query = "INSERT INTO `user`(`name`, `email`, `pass`, `city`) VALUES ('$name', '$email', '$pass', '$city')";
	$result = mysqli_query($connection, $query);

	if ($result) {

		
		//header('Location: login.php' );
		echo '<script>alert("Registation Success")</script>';
		echo'<script>window.location="login.php";</script>';

	}
	else{
		echo '<script>alert("Registation Failed ...!!!")</script>';
	}
}

?>