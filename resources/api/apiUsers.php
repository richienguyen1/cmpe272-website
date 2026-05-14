<?php require '../php/databaseModule.php';
	
	$userArray = array();
	$queryResult = queryDatabase("SELECT Fname, Lname FROM list_of_users");//retrieve from database
	foreach ($queryResult as $row) {
			array_push($userArray, $row);
		}

	$outputData = ["company" => "Plumbing Electronics Catalogue", "users" => $userArray];//formatted as company name, user array
	echo json_encode($outputData);
?>