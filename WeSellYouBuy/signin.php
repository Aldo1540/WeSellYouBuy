<!DOCTYPE html>
<html>
<head>
	<title>We Sell You Buy</title>
	<link rel="stylesheet" type="text/css" href="style/core.css">
	<link rel="stylesheet" type="text/css" href="style/signin.css">
</head>
<body>
	<?php include 'includes/signedOutHeader.php'; ?>
	<div class="logIn">
											<h1>Sign in </h1>
											<form method="post" action="includes/login.inc.php">
													<input type="text" name="Username" placeholder="Username"> <br />
													<input type="password" name="Password" placeholder="Password"><br />

													<input type="submit" name="login-submit" value="Submit">
											</form>
	</div>
	<!-- log in form in html to take a username and a password,
			 checks for $_SERVER["PHP _SELF"] expoits on data entry,
			 form submits  login information
	-->
</body>
</html>
