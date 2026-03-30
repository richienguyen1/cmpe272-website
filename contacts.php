<!DOCTYPE html>
<!-- Contacts page using readFile php code to read in contacts.txt file -->
<?php $CONTACTS_LIST = "resources/php/contacts.txt"; ?>

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
		
		<div class = "contacts_body_text">
			<p>
				The following is the contact information of our employees at our company.
				<br>
				Feel free to contact them if you have any questions or feedback for us.
			</p>
		
			<?php require 'resources/php/readFile.php';
				readFileByLine($CONTACTS_LIST);
			?>
		</div>
		
		<div class = "footer">
			<?php include 'resources/php/footer.php'; ?>
		</div>
		
	</body>
</html>