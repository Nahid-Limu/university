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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
		<div class="blog" style="margin:20px;background-color:#D6EAF8;">
			

		
			    <div class="row">
					  <div class="column" style="background-color:#D6EAF8;">
					    
					  	<form class="form_div" method="POST" action="regfun.php">
					  	<h3>Registration First</h3>
						<p><input type="text" name="name" placeholder="Enter Name"></p>
						<p><input type="text" name="email" placeholder="Enter Email"></p>
						<p><input type="password" name="pass" placeholder="*******"></p>
						<p><input type="text" name="city" placeholder="City"></p>
						
						<p><input type="submit" name="reg" value="Registration"></p>
						</form>
					  </div>



					  <div class="column" style="background-color:#D6EAF8;">
					  <form class="form_div" method="POST" action="loginfun.php">
					  	<img src="img/lo.jpg" style="width: 100%; height: 60px; margin-bottom: 15px;">
						<p><input type="text" name="name" placeholder="Enter Email"></p>
						<p><input type="password" name="pass" placeholder="*******"></p>
						
						<p><input type="submit" name="login" onclick="" value="Sign in"></p>
						</form>
					    </div>



					  </div>
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
