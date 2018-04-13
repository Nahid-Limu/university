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

	<link rel="stylesheet" type="text/css" href="css/eventreg.css">
	<link rel="stylesheet" type="text/css" href="css/column.css">
	<link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/styles.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/search.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="jquery-flash-master/jquery.flash.css"/> -->


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<!-- <script type="text/javascript" src="jquery-flash-master/jquery.flash.js"></script>
	-->
	
	
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
				<li class="selected-item"><a href="index.php">Home</a></li>
				<li><a href="courses.php">Course</a></li>
				
				<?php

				if (!isset($_SESSION['user_id'])) {


					echo '<li><a href="login.php">Login</a></li>';
				}

				?>

				<li><a href="contact.php">Contact</a></li>
				<li style="margin: 5px;"><input type="text" class="searchTerm" placeholder="What are you looking for?"><button type="submit" class="searchButton"><i class="fa fa-search"></i></button></li>
			</ul>

			<ul style="float: right;">
				<?php

				if (isset($_SESSION['user_id'])) {

					

					echo '<li data-toggle="modal" data-target="#popUpLogin">
					<a href="logout.php"><span class="glyphicon glyphicon-plus-sign"></span> Log Out</a>
					</li>';
				}

				?>
				

			</ul>

			<div class="clear"></div>

		</div>
	</nav>


	<div class="intro">
		<div class="width">

			<p style="text-align:center;margin-right: 15px;">
				<a href="#" class="button button-slider">
					<?php
					count_regEvent();
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
				<h2>Upcoming Event</h2>
				<p>
					<?php
					blog();
					?>
					
				</p>
			</div>
			<div class="column" style="background-color:#D6EAF8;">
				<h2>registration for Event</h2>


				<form class="form_div" id="eventForm" method="POST" action="">
					<p><input type="text" name="name" id="name" placeholder="Enter Name" required></p>
					<p><input type="text" name="email" id="email" placeholder="Enter Email" required></p>
					<p><input type="text" name="phn" id="phn" placeholder="Mobile No." required></p>

					<select name="event" id="event" required style="font-size: 15px;padding: 5px;margin-left: 0px; margin-bottom: 15px;border-radius: 10px;width: 50%">

						<option ><p>Select Event</p>
							<?php
							event_reg();
							?>
						</option>
					</select>
					
					<p><input type="submit"  id="submit" name="submit" value="Registration"></p>
				</form>

				<div class="alert alert-success pull-right" id="flash" style="display:none;">
					<strong>Event Added!</strong>
					<!-- <h3 id="data"></h3> -->
				</div>
				<div class="alert alert-success pull-right" id="error" style="display:none;">
					<strong>Plese Fill All Field</strong>
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

	<script >

		$("#eventForm").submit(function(e) {
			e.preventDefault();

			var name = $("#name").val();
			var email = $("#email").val();
			var phn = $("#phn").val();
			var event = $("#event").val();

			if ( name != '') {

				$.post("regEvent.php", {name:name, email:email, phn:phn, event:event}, function (data) {

					if (data == 'empty') {
						$('#error').fadeIn().css("display", "inline-block");
						setTimeout(function() {
							$('#error').fadeOut("slow");
						}, 2000 );
					}
					else{

						/*flash message*/
						$('#flash').fadeIn().css("display", "inline-block");
						setTimeout(function() {
							$('#flash').fadeOut("slow");
						}, 2000 );
						/* end flash message*/

						/*$('#data').html(data);*/
					}
					
				});

				

			}else{

				

			}
			
			
		})




	</script>


</body>

</html>

