<!DOCTYPE html>
<!-- Page that retrieves the VISITED_PAGES cookie to show the 5 previously visited products -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Previously Visited Products</title>
		<link href="./resources/css/index.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
		
		<div class = "menu">
			<?php require 'resources/php/nav_links.php'; ?>
		</div>
		
		<h1>Previously Visited Products</h1>
		
		<p align = "center">
			<a href="/products.php" class="button-class">Back to Products/Services</a>
		</p>
		
		<p>
		Here is a list of products you have previously visited (maximum 5).
		</p>
		<?php
			if (isset($_COOKIE['VISITED_PAGES']) == true) {//if cookie/table exists
				print($_COOKIE['VISITED_PAGES']);
			} else {//if cookie/table does not exist
				print("Unable to retrieve previously visited pages");		
			}				
		?>
		
		<div class = "footer">
			<?php include 'resources/php/footer.php'; ?>
		</div>
		
	</body>
</html>