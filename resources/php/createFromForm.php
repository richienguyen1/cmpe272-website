<?php require 'databaseModule.php';
		
	extract($_POST);//reading post form from user page
	if (isset($_POST['UserCreationToken']) && $_POST['UserCreationToken'] === $_SESSION['UserCreationToken']) {//if user submitted creation form from user database page
		unset($_SESSION['UserCreationToken']);
		
		if (($Fname == null) or ($Lname == null) or ($Email == null) or ($HomeAddress == null)){
			die("Error: A required field is empty");
		}
		
		echo '<p>Your user creation form has been submitted to our database.
			<br>The table below shows the details inputted for the form:
			</p>';
		
		echo '
		<table style="text-align: center;">
			<tr>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Email Address</th>
				<th>Home Address</th>
				<th>Home Phone Number</th>
				<th>Cell Phone Number</th>
			</tr>
			<tr>
				<td>' . $Fname . '</td>
				<td>' . $Mname . '</td>
				<td>' . $Lname . '</td>
				<td>' . $Email . '</td>
				<td>' . $HomeAddress . '</td>
				<td>' . $HomePhone . '</td>
				<td>' . $CellPhone . '</td>
			</tr>
		</table>
		';//table containing input values
	
		//formatting for insert statement to include setting empty fields to NULL
		$Fname_Statement = "'" . $Fname . "'";
		if ($Mname == null) {$Mname_Statement = "NULL";} else {$Mname_Statement = "'" . $Mname . "'";}
		$Lname_Statement = "'" . $Lname . "'";
		$Email_Statement = "'" . $Email . "'";
		$HomeAddress_Statement = "'" . $HomeAddress . "'";
		if ($HomePhone == null) {$HomePhone_Statement = "NULL";} else {$HomePhone_Statement = "'" . $HomePhone . "'";}
		if ($CellPhone == null) {$CellPhone_Statement = "NULL";} else {$CellPhone_Statement = "'" . $CellPhone . "'";}
	
		$UserIDP1 = "" . $Fname[0] . $Lname[0];
		$UserIDP2 = "" . rand(1, 99);
		$UserID = $UserIDP1 . $UserIDP2 . bin2hex(random_bytes(8));//making a unique UserID
	
		$insertStatement = "
		INSERT INTO list_of_users (Fname, Mname, Lname, Email, HomeAddress, HomePhone, CellPhone, UserID)
		VALUES (
		". $Fname_Statement . ", 
		". $Mname_Statement . ", 
		". $Lname_Statement . ", 
		". $Email_Statement . ", 
		". $HomeAddress_Statement . ", 
		". $HomePhone_Statement . ", 
		". $CellPhone_Statement . ", 
		'". $UserID . "'
		)";//creating insert statement from values
		//print($insertStatement);
		$insertResult = queryDatabase($insertStatement);//adding to database
		if ($insertResult != False) {//if insert was successful
			print("<p>Successfully created and added user into database<br>Your User ID is " . $UserID . "</p>");
		}
		
	} else {//if this page is accessed through other means
		echo '<p>This page is meant to be accessed after filling out the user creation form for our database. Access the page <a href="../user.php">here</a>.</p>';
	}
	
?>