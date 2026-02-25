<!DOCTYPE html>

<?php
	$CompanyName = "[Company Name]";
?>

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
		<h3>header 3</h3>
		<?php 
			echo '<p>Hello World</p>';
		?>
	</body>
</html>