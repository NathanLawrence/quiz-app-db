<html>
<head>
	<!--Stylesheets-->
	<!--Eric Meyer's Brilliant CSS Reset 2.0-->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<!--Basic site-wide stylesheet for fonts, etc.-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!--"Branding" CSS for Colors and Logo information-->
	<link rel="stylesheet" type="text/css" href="css/kbia-brand.css">
	<title>Thanks for Registering</title>
</head>
<body>
	<div class="responsiveBody">
		<?php 

			//Open the database. You will need to provide this file yourself. 
			require "opendb-things.php";

			//Get the data from the form and dump it into easier to use variables.
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$email = $_POST["email"];
			$right = $_POST["right"];

		 ?>
		<h1>Thanks for registering.</h1>
	</div>
</body>
</html>