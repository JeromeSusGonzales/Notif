<?php
	$conn = mysqli_connect("localhost", "root", "", "lms");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>