<?php
include 'connect/connect.php';


//mysql_connect("localhost","root","") or die("Failed to Connect");
//mysql_select_db("university") or die("failed");

function user_count(){
	/*mysql_connect("localhost","root","") or die("Failed to Connect");
	mysql_select_db("university") or die("failed");*/
	/*$query = "";
	$usercount = mysql_query("SELECT * FROM student where password ='admin'") or die("Query failed");
	$count = mysql_num_rows($usercount);
	echo "CURRENT USER: ";
	echo $count;*/
	global $connection;
	$query = "SELECT * FROM student ";
	$usercount = mysqli_query($connection, $query);
	$count = mysqli_num_rows($usercount);
	echo "CURRENT STUDENT: ".$count;
}



function course_count(){
	/*mysql_connect("localhost","root","") or die("Failed to Connect");
	mysql_select_db("university") or die("failed");*/
	/*$usercount = mysql_query("SELECT * FROM course") or die("Query failed");
	$count = mysql_num_rows($usercount);
	echo "TOTAL COURSES: ";
	echo $count;*/

	global $connection;
	$query = "SELECT * FROM course";
	$usercount = mysqli_query($connection, $query);
	$count = mysqli_num_rows($usercount);
	echo "TOTAL COURSES: ".$count;


}

function blog(){
	/*mysql_connect("localhost","root","") or die("Failed to Connect");
	mysql_select_db("university") or die("failed");*/
	global $connection;
	$sql = "SELECT * FROM `blog` ORDER BY begin_date ASC";
	$records = mysqli_query($connection, $sql);

	while ($blog = mysqli_fetch_assoc($records)) {
		echo "EVENT NAME : ". $blog['name'];
		//echo "<h5>Event Name:<h6><h5>".$blog['name']."</h5>";
		echo "";
		echo "<br>";
		echo "<h5>Details: </h5>";
		echo "<h6>".$blog['details']."</h6>";
		echo "<br>";
		echo "<h5>Date: </h5>";
		echo "<h6>".$blog['begin_date']."</h6>";
		echo "<br>";
		echo '<hr style="border: 1px solid red">';
	}
}

function event_reg(){
	/*mysql_connect("localhost","root","") or die("Failed to Connect");
	mysql_select_db("university") or die("failed");*/
	global $connection;
	$sql = "SELECT * FROM blog order by id asc";
	$records = mysqli_query($connection, $sql);

	while ($blog = mysqli_fetch_assoc($records)) {
		echo "<option>";
		echo $blog['name'];
		echo "</option>";
		
	}
}

function course(){

	global $connection;
	$sql = "SELECT * FROM Course";
	$result = mysqli_query($connection, $sql);

	while ($row = mysqli_fetch_assoc($result)) {

		$name = $row['name'];
		echo '<option value=' .$name. '>'. $name .'</option>' ;
		
	}

}
function count_regCourse(){
	
	global $connection;
	$uid = $_SESSION['user_id'];
	$sql = "SELECT * FROM regcourse WHERE `uid` ='$uid'";
	$result = mysqli_query($connection, $sql);
	$row = mysqli_num_rows($result);

	echo "YOUR COURSES: ".$row;

}

function count_regEvent(){
	
	
	global $connection;
	$uid = $_SESSION['user_id'];
	$sql = "SELECT * FROM regEvent WHERE uid = '$uid' ";
	$result = mysqli_query($connection, $sql);
	$row = mysqli_num_rows($result);

	echo "YOUR Event: ".$row;

}

function course_img(){
	
	global $connection;
	$sql = "SELECT * FROM `course`";
	$result = mysqli_query($connection, $sql);

	while ($row = mysqli_fetch_assoc($result)) {

		$name = $row['name'];
		$img = $row['img'];
		$dis = $row['dis'];

		echo '<div class="col-md-4" style="margin-top:10px;">
			<div class="img__wrap">
				<img class="img__img" src="img/'. $img .'" />
				
				<div class="img__description">
					<h3 class="text-center">'. $name .'</h3>
					<p>'. $dis .'</p>
				</div>
			</div>
		</div>';
		
	}
}

?>