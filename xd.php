<?php
	/*if(!empty($_POST["name"]) && !empty($_POST["comment"])) {
		print "Message is Saved!";

	}*/

	$name = $_POST['name'];

	if (!empty($name)) {
		echo $name;
	}
	else{
		echo "input first";
	}

?>