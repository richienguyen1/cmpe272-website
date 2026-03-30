<!DOCTYPE html>
<!-- Secure page that includes user and password input for test security access to a user list -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Secure Page</title>
		<link href="./resources/css/index.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
		
		<div class = "menu">
			<?php require 'resources/php/nav_links.php'; ?>
		</div>
		
		<div class = "nonchanging">
			<h1>Secure Page</h1>
		
			<p>
			This page requires admin access to view a list of the current users of this site.
			Please enter your login details below.
			</p>
		</div>
		
		<div class = "form">
			<form action = "securePageResult.php" method = "post">
				
				<strong>User ID</strong>
				<input size = "40" name = "USERID" />
				<br>
				<strong>Password</strong>
				<input size = "40" name = "PASSWORD" type = "password"/>
				<br>
				<input type = "submit" name = "Submit" value = "Submit" />
				
			</form>
		</div>
		
		<div class = "footer">
			<?php include 'resources/php/footer.php'; ?>
		</div>
		
	</body>
</html>