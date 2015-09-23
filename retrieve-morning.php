<html>
<head>
	<!--Stylesheets-->
	<!--Eric Meyer's Brilliant CSS Reset 2.0-->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<!--Basic site-wide stylesheet for fonts, etc.-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!--"Branding" CSS for Colors and Logo information-->
	<link rel="stylesheet" type="text/css" href="css/kbia-brand.css">
	<title>Retrieve Data for the Morning Edition News Quiz</title>
</head>
<body>
	<?php 

	//Open the database. You will need to provide this file yourself. Please provide a MySQLi connection named "$conn"
	require "opendb-things.php";

	//Echo a complete list of all database items
	$sql = "SHOW COLUMNS FROM entries";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		echo $row['Field']."<br>";
	}

	 ?>
</body>
</html>