<!DOCTYPE html>
<!-- Placeholder page that runs the secureListCheck php code to validate the input user and password from the previous Secure page -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Secure Page Result</title>
		<link href="./resources/css/index.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
		
		<div class = "menu">
			<?php require 'resources/php/nav_links.php'; ?>
		</div>
		
		<div class = "results">
			<?php require 'resources/php/secureListCheck.php'; ?>
		</div>
		
		<div class = "footer">
			<?php include 'resources/php/footer.php'; ?>
		</div>
		
	</body>
</html>