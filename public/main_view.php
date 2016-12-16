<!DOCTYPE html>
<html>
<head>

	<title>Postibuff</title>

<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- to change color of notification bar -->
		<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#009688">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#009688">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#009688">

<!-- Shortcut icon -->
	<link rel="shortcut icon" href="images/shortcut_icon.png">

<!-- style -->
<style type="text/css">

	body{
		margin: 0;
		padding: 0;
		overflow: hidden;
		font-family: "Roboto", "Helvetica", "Arial", sans-serif;
	}

	.go-back{
		background-color: #009688;
		width: 100%;
		height: 50px;
	}

	.go-back a{
		color: white;
		padding: 10px;
		text-decoration: none;
		font-weight: 600;
	}

	.go-back a svg{
		margin: 10px 15px 0 15px;
	}

	.text-go-back{
		position: absolute;
		top: 15px;
	}

</style>

</head>
<body>

	<!-- go back tab -->
	<div class="go-back">
		<a href="places_temp.php">
		<?php include ('icons/back_arrow_icon.svg'); ?>
		<span class="text-go-back">Go Back</span></a>
	</div>

	<?php include ('../includes/files/360.php'); ?>
</body>
</html>