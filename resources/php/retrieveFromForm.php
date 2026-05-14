<?php require 'databaseModule.php';
		
	extract($_POST);//reading post form from user page
	if (isset($_POST['UserSearchToken']) && $_POST['UserSearchToken'] === $_SESSION['UserSearchToken']) {//if user submitted search form from user database page
		unset($_SESSION['UserSearchToken']);
	
		echo '<p>The table shown below contains the following results from your search:</p>';
	
		if (strcmp($SEARCH_SELECT, "First Name") == 0) {//formatting input search select to database columns
			$COLUMN = "Fname";
		} else if (strcmp($SEARCH_SELECT, "Last Name") == 0) {
			$COLUMN = "Lname";
		} else if (strcmp($SEARCH_SELECT, "Email") == 0) {
			$COLUMN = "Email";
		} else if (strcmp($SEARCH_SELECT, "Home Phone Number") == 0) {
			$COLUMN = "HomePhone";
		} else if (strcmp($SEARCH_SELECT, "Cell Phone Number") == 0) {
			$COLUMN = "CellPhone";
		} else {
			$COLUMN = $SEARCH_TERM;
		}
		$queryStatement = "SELECT Fname, Mname, Lname, Email, HomePhone, CellPhone FROM list_of_users WHERE (" . $COLUMN . " LIKE '%" . $SEARCH_TERM . "%')";
		$queryResults = queryDatabase($queryStatement);
		$queryAmount = 0;//total amount of results
	
		print("<p><b>Field to search</b>: " . $SEARCH_SELECT . "<br>");
		print("<b>Search term</b>: " . $SEARCH_TERM . "</p>");
	
		echo '
		<table style="text-align: center;">
			<tr>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Email Address</th>
				<th>Home Phone Number</th>
				<th>Cell Phone Number</th>
			</tr>
		';//starting table format
	
		foreach ($queryResults as $row) {
			$queryAmount++;
			echo '
				<tr>
					<td>' . $row["Fname"] . '</td>
					<td>' . $row["Mname"] . '</td>
					<td>' . $row["Lname"] . '</td>
					<td>' . $row["Email"] . '</td>
					<td>' . $row["HomePhone"] . '</td>
					<td>' . $row["CellPhone"] . '</td>
				</tr>
			';//embed each result as a row
		}
	
		echo '
		</table>
		';//closing table
		echo '<p><b>Total amount of results: ' . $queryAmount . '</b></p>';
		
	} else {//if this page is accessed through other means
		echo '<p>This page is meant to be accessed after filling out the user search/retrieval form for our database. Access the page <a href="../user.php">here</a>.</p>';
	}
	
?>