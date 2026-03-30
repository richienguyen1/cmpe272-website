<?php
	//variables to set up database connection
	$DATABASE_HOSTNAME = "localhost";
	$DATABASE_USER = "root";
	$DATABASE_PASS = "";
	$DATABASE_DBNAME = "cmpe272website";
	
	//retrieve from database with a query and print each row
	function retrieveFromDatabase($inputQuery) {
		
		global $DATABASE_HOSTNAME;
		global $DATABASE_USER;
		global $DATABASE_PASS;
		global $DATABASE_DBNAME;
		$mysqli = new mysqli($DATABASE_HOSTNAME, $DATABASE_USER, $DATABASE_PASS, $DATABASE_DBNAME);//set up mysqli connection
		
		$result = $mysqli->query($inputQuery);//run query
		$mysqli->close();//close connection
		return $result;
		
	}
	
?>