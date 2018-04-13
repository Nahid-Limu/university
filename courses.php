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
	<link rel="stylesheet" type="text/css" href="css/course.css"/>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
				<li class="selected-item"><a href="courses.php">Course</a></li>
				
				<?php

				if (!isset($_SESSION['user_id'])) {


				 echo '<li><a href="login.php">Login</a></li>';
}

				?>
				
				<li><a href="contact.php">Contact</a></li>
				<li style="margin: 5px;"><input type="text" class="searchTerm" placeholder="What are you looking for?"><button type="submit" class="searchButton"><i class="fa fa-search"></i></button></li>

			</ul>
			<ul class=login_btn>
				<?php

				if (isset($_SESSION['user_id'])) {

    echo '<li data-toggle="modal" data-target="#popUpLogin">
					<a href="#"><span class="glyphicon glyphicon-plus-sign"></span> Start Course</a>
				</li>';

				 echo '<li data-toggle="modal" data-target="#popUpLogin">
					<a href="logout.php"><span class="glyphicon glyphicon-plus-sign"></span> Log Out</a>
				</li>';
}

				?>
				

			</ul>

			<div class="clear" ></div>

		</div>
	</nav>

	<!-- Modal -->
	<div class="modal fade" id="popUpLogin" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">

					<form class="form-horizontal" id="loginForm" role="form" action="courseReg.php" method="POST">

						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i> Cosrse Name:</span>
							
							<select class="form-control" name="c_name" id="c_name">
                                            <option value="">--- Select Course ---</option>
                                            <?php
                                            course();
                                            ?>
                                            
                                        </select>                                       
						</div>


						<!-- <div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" id="password" name="password"  class="form-control" placeholder="password">
						</div>
 -->
						<div class="modal-footer">
							<button type="submit" name="start_btn" id="start_btn" class="btn btn-primary btn-block" ><i class="glyphicon glyphicon-check"></i>   Start</button>
						</div>
					</form>

				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-link text-center" data-dismiss="modal"><a href="">Click Here For SignUp....</a></button>
				</div> -->
			</div>
		</div>
	</div>


	<div class="intro">
		<div class="width">

			<p style="text-align:center;margin-right: 15px;"><a href="#" class="button button-slider">
				<?php
				user_count();
				?>
			</a>
			<a href="#" class="button button-reversed button-slider">
				<?php
				count_regCourse();
				?>
			</a>
		</p>

	</div>
</div>
<div class="blog" style="margin:20px;background-color:#D6EAF8;">





	<div class="row" >
		<?php

		course_img();

		?>
		
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
