<?php require '../php/retrieveDatabase.php';
	
	$queryResult = retrieveFromDatabase("SELECT Fname, Lname FROM list_of_users");//retrieve from database
	foreach ($queryResult as $row) {
			
			echo json_encode($row);//print each row result as json
			print(", ");
		}
	
?>