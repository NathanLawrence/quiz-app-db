<html>
<head>
	<!--Stylesheets-->
	<!--Eric Meyer's Brilliant CSS Reset 2.0-->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<!--Basic site-wide stylesheet for fonts, etc.-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!--"Branding" CSS for Colors and Logo information-->
	<link rel="stylesheet" type="text/css" href="css/kbia-brand.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<title>Register for the Morning Edition News Quiz Contest</title>
</head>
<body>
	<div class="container">
		<!--<div id="kbiaHeader"><img src="http://media.kbia.org.s3.amazonaws.com/evergreen/KBIA_main_reverse.png"></div>-->
		<h1>Register for the Morning Edition Quiz Giveaway</h1>
		<form class="form-horizontal" action="post-morning.php" method="post">
			<ul class="form-list">
				<li><div class="form-group"><label class="control-label col-sm-2" for="firstname">First Name:</label>
					<div class="col-sm-10"><input type="text" class="form-control" name="firstname"></div></div></li>
				<li><div class="form-group"><label class="control-label col-sm-2" for="lastname">Last Name:</label>
					<div class="col-sm-10"><input type="text" class="form-control" name="lastname"></div></div></li>
				<li><div class="form-group"><label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-10"><input type="email" class="form-control" name="email"></div></div></li>
				<!--This next one is kinda neato. I can pass the number of questions gotten right (submitted in JS by a get on the previous page) through to the post page.-->
				<li><input type="hidden" name="right" value="<?php echo $_GET["right"]; ?>"></li>
				<li><div class="form-group"><div class="col-sm-offset-2 col-sm-10"><input type="submit" class="btn btn-primary btn-lg" name="submit"></div></div></li>
			</ul>
		</form>
	</div>
</body>
</html>