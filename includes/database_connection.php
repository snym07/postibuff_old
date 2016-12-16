<?php 
	// connection to postibuff database as root user
	$connection = mysqli_connect("localhost", "dbuser", "dbpassword", "postibuff");
	if (mysqli_connect_errno()) {
		die("Database connection failed " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
	}
?>