<html>
<head>
	<!--Stylesheets-->
	<!--Eric Meyer's Brilliant CSS Reset 2.0-->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<!--Basic site-wide stylesheet for fonts, etc.-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!--"Branding" CSS for Colors and Logo information-->
	<link rel="stylesheet" type="text/css" href="css/kbia-brand.css">
	<title>Register for the Morning Edition News Quiz Contest</title>
</head>
<body>
	<div class="responsiveBody">
		<!--<div id="kbiaHeader"><img src="http://media.kbia.org.s3.amazonaws.com/evergreen/KBIA_main_reverse.png"></div>-->
		<h1>Register for the Morning Edition Quiz Giveaway</h1>
		<form action="post-morning.php" method="post">
			<ul class="form-list">
				<li><p>First Name:</p><input type="text" name="firstname"></li>
				<li><p>Last Name:</p><input type="text" name="lastname"></li>
				<li><p>Email:</p><input type="email" name="email"></li>
				<!--This next one is kinda neato. I can pass the number of questions gotten right (submitted in JS by a get on the previous page) through to the post page.-->
				<li><input type="hidden" name="right" value="<?php echo $_GET["right"]; ?>"></li>
				<li><input type="submit" name="submit"></li>
			</ul>
		</form>
	</div>
</body>
</html>