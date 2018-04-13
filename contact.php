<?php
session_start();
if (!isset($_SESSION['user_id'])) {

	header("Location: login.php");
}
?>

<?php
include("function.php");
?>

<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>UNIVERSITY</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/contact.css"/>
	<link rel="stylesheet" type="text/css" href="css/eventreg.css">
	<link rel="stylesheet" type="text/css" href="css/column.css">
	<link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/styles.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/search.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>

	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<body>

	<header>
		<div class="width">
			<h1><a href="#">ONLINE<strong> UNIVERSITY</strong></a></h1>

		</div>
	</header>

	<nav id="mainnav">
		<div class="width">
			<ul>
				<li><img src="img/b.png" style="height: 50px; width: 90px; margin-right: 20px;"></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="courses.php">Course</a></li>
				
				<?php

				if (!isset($_SESSION['user_id'])) {


				 echo '<li><a href="login.php">Login</a></li>';
}

				?>

				<li class="selected-item"><a href="contact.php">Contact</a></li>
				
			</ul>

			<div class="clear"></div>
			
		</div>
	</nav>

	
	<div class="intro">
		<div class="width">
			
			<p style="text-align:center;margin-right: 15px;"><a href="#" class="button button-slider">
				<?php
				user_count();
				?>
			</a>
			<a href="#" class="button button-reversed button-slider">
				<?php
				course_count();
				?>
			</a>
		</p>
		
	</div>
</div>
<div class="blog" style="margin:20px;">
	

	<div class="row">
		<div class="column" style="background-color:#D6EAF8;">
			<h3 align="center">Contact Us</h3>
		<form action="" method="POST">
		<label>Name</label>
			<input name="name" placeholder="Ashley Peterson" type="text" width="100px;">
			<label>Email Id</label>
			<input name="email" placeholder="yourname@gmail.com" type="text">
			<label>Contact Number</label>
			<input name="contact" placeholder="123456789" type="text">
			<label>Message</label>
			<textarea cols="15" name="message" placeholder="Message" rows="10">
			</textarea>
			<input name="submit" type="submit" value="Send Message">

		</form>

	</div>



	<div class="column" style="background-color:#D6EAF8;">
		<h3 align="center">GOOGLE MAP</h3>
		<p style="width: 100%;height: auto;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7297.473972925096!2d90.38980953205999!3d23.863471584533762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c421fbb432d9%3A0xd73c6bb8eb9465b3!2z4Kah4KeN4Kav4Ka-4Kar4KeL4Kah4Ka_4KayIOCmh-CmqOCnjeCmn-CmvuCmsOCmqOCnjeCmr-CmvuCmtuCmqOCmvuCmsiDgpofgpongpqjgpr_gpq3gpr7gprDgp43gprjgpr_gpp_gpr_gprA!5e0!3m2!1sbn!2sbd!4v1523126805398" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
		
	</div>



</div>
</div>

</div>





<footer>
	<div class="footer-content width" >
		<ul>
			<li><h4>Useful Link</h4></li>
			<li><a href="#"><i class="fa fa-tree" style="margin-right: 5px;"></i>Jobsbd.com</a></li>
			<li><a href="#"><i class="fa fa-paper-plane" style="margin-right: 5px;"></i> Newsletter.com</a></li>
			<li><a href="#"><i class="fa fa-envelope" style="margin-right: 5px;"></i>Newspaper</a></li>
			<li><a href="#"><i class="fa fa-youtube" style="margin-right: 5px;"></i>Youtube.com </a></li>
			<li><a href="#"><i class="fa fa-user" style="margin-right: 5px;"></i>Facebook.com</a></li>
		</ul>
		
		
		<ul class="endfooter" style="float: right;">
			<li><h4>Permanent Address</h4></li>
			<li>Daffodil International University Permanent Campus Ashulia Model Town, Dattapara, Ashulia, Savar, Dhaka</li>
			<li> Cell: 01833-102806, 01847-140068</li>
			<li> E-mail: info@daffodilvarsity.edu.bd</li>
		</ul>
		
		<div class="clear"></div>
	</div>
	<div class="footer-bottom">
		<p>&copy; DAFFODIL 2018. <a href="#">Web Engineering Project</a> by Group-2</p>
	</div>
</footer>




</body>
</html>
<?php
if (isset($_POST['submit'])) {
		
	global $connection;
	//$uid = $_SESSION['user_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phn = $_POST['contact'];
	$msg = $_POST['message'];

	$query = "INSERT INTO `contac`( `name`, `emai`, `phn`, `msg`) VALUES ( '$name', '$email', '$phn ', '$msg')";
	$result = mysqli_query($connection, $query);

	if ($result) {
		
		echo '<script>alert("Message Sent")</script>';
		echo'<script>window.location="index.php";</script>';
	}
	}
?>