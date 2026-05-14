<?php session_start(); ?>
<!DOCTYPE html>
<!-- Placeholder page that runs the retrieveFromForm php code to retrieve database results from the user search form -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>User Search Result</title>
		<link href="./resources/css/index.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
		
		<div class = "menu">
			<?php require 'resources/php/nav_links.php'; ?>
		</div>
		
		<div class = "results">
			<?php require 'resources/php/retrieveFromForm.php'; ?>
		</div>
		
		<div class = "footer">
			<?php include 'resources/php/footer.php'; ?>
		</div>
		
	</body>
</html>