<?php session_start(); ?>
<!DOCTYPE html>
<!-- Placeholder page that runs the createFromForm php code to add a user to the database -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>User Creation Result</title>
		<link href="./resources/css/index.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
		
		<div class = "menu">
			<?php require 'resources/php/nav_links.php'; ?>
		</div>
		
		<div class = "results">
			<?php require 'resources/php/createFromForm.php'; ?>
		</div>
		
		<div class = "footer">
			<?php include 'resources/php/footer.php'; ?>
		</div>
		
	</body>
</html>