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
	require "opendb-morning.php";

	//Echo a complete list of all database items
	$cmd = "SELECT * FROM entries";
	$result = $conn -> query($cmd);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "Name: " . $row["firstname"]. " " . $row["lastname"]. . " - Email: " . $row["email"] . " - Score:" . $row["numright"] . "<br>";
	    }
	} 
	else {
	    echo "0 results";
	}
	
	$conn->close();

	 ?>
</body>
</html>