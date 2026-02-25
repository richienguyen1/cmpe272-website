<!DOCTYPE html>


<html>
	<head>
		<meta charset="UTF-8">
		<title>Contacts Page</title>
		<link href="./resources/css/index.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
		
		<div class = "menu">
			<?php require 'resources/php/nav_links.php'; ?>
		</div>
		
		<h1>Contacts Page</h1>
		<h3>header 3</h3>
		
		<div class = "contacts_body_text">
			<p>The following is the contact information of our employees at our company.</p>
			<p>Feel free to contact them if you have any questions or feedback for us.</p>
		
			<?php require 'resources/php/contacts_readFile.php'; ?>
		</div>
		
	</body>
</html>