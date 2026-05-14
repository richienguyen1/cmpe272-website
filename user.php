<?php session_start(); ?>
<!DOCTYPE html>
<!-- User database page that includes a form for creating a user and another form for searching the user database -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>User Database Page</title>
		<link href="./resources/css/index.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class = "menu">
			<?php require 'resources/php/nav_links.php'; ?>
		</div>
		
		<div class = "nonchanging">
			<h1>User Database Page</h1>
			<p>This page serves as user creation and user search forms for our user database.</p>
		</div>
		
		<div class = "user creation form">
			<?php $_SESSION['UserCreationToken'] = bin2hex(random_bytes(32)); ?>
			<form action = "userCreation.php" method = "post">
				<p>Create a user with the following fields.</p>
				<strong>First Name [required]</strong>
				<input size = "40" name = "Fname" required />
				<br>
				<strong>Middle Name</strong>
				<input size = "40" name = "Mname" />
				<br>
				<strong>Last Name [required]</strong>
				<input size = "40" name = "Lname" required />
				<br>
				<strong>Email Address [required]</strong>
				<input size = "40" name = "Email" required />
				<br>
				<strong>Home Address [required]</strong>
				<input size = "40" name = "HomeAddress" required />
				<br>
				<strong>Home Phone (format XXXXXXXXXX)</strong>
				<input size = "40" name = "HomePhone" />
				<br>
				<strong>Cell Phone (format XXXXXXXXXX)</strong>
				<input size = "40" name = "CellPhone" />
				<br>
				<input type = "hidden" name = "UserCreationToken" value = "<?php echo $_SESSION['UserCreationToken'];?>">
				<input type = "submit" name = "Submit" value = "Create User" />
			</form>
		</div>
		<br>
		
		<?php $_SESSION['UserSearchToken'] = bin2hex(random_bytes(32)); ?>
		<div class = "database search form">
			<p>Search for a user with the below form.<br>Note that leaving the Search Term field blank will return all users in the database.</p>
			<form action = "userSearch.php" method = "post">
				<p>
				Choose which field to search:
				<select name = "SEARCH_SELECT">
					<option selected = "selected">First Name</option>
					<option>Last Name</option>
					<option>Email</option>
					<option>Home Phone Number</option>
					<option>Cell Phone Number</option>
				</select>
				<br>
				<strong>Search Term</strong>
				<input size = "40" name = "SEARCH_TERM"/>
				</p>
				<input type = "hidden" name = "UserSearchToken" value = "<?php echo $_SESSION['UserSearchToken'];?>">
				<input type = "submit" name = "Submit" value = "Search Database" />
				
			</form>
		</div>
		
		<div class = "footer">
			<?php include 'resources/php/footer.php'; ?>
		</div>
		
	</body>
</html>