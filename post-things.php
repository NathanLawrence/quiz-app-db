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

			//Open the database. You will need to provide this file yourself. Please provide a MySQLi connection named "$conn"
			require "opendb-things.php";

			//Get the data from the form and dump it into easier to use variables.
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$email = $_POST["email"];
			$right = $_POST["right"];

			//Form the MySQL command
			$cmd = "INSERT INTO entries (firstname,lastname,email,numright)
			VALUES ('{$firstname}','{$lastname}','{$email}','{$right}');";


			//Send the MySQL command
			if ( $conn -> query($cmd) === true ) {
				echo "<h1>Thanks for registering.</h1>";
			}
			else{
				echo "<h1>Error</h1><br>" . "<pre>{$cmd}</pre>" . "<br>" . $conn->error;
			}

			//Close the database.
			$conn -> close();


		 ?>
	</div>
</body>
</html>