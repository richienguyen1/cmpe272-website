<!DOCTYPE html>
<!-- Landing/home page for website -->
<?php $CompanyName = "Plumbing Electronics Catalogue"; ?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Home Page</title>
		<link href="./resources/css/index.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
	
		<div class = "menu">
			<?php require 'resources/php/nav_links.php'; ?>
		</div>
		
		<h1>Welcome to <?php print("$CompanyName"); ?>!</h1>
		<p>We provide high quality plumbing equipment and cheap electronics for our customers to enjoy.</p>
		<p>Our website is currently under construction, so check back later for new offers and better experiences.</p>
		
		<div class = "footer">
			<?php include 'resources/php/footer.php'; ?>
		</div>
		
	</body>
</html>