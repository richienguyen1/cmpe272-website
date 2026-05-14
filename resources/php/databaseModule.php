<?php
	//variables to set up database connection
	$DATABASE_HOSTNAME = "localhost";
	$DATABASE_USER = "root";
	$DATABASE_PASS = "";
	$DATABASE_DBNAME = "cmpe272website";
	
	//manage queries into database given a query (includes insert and retrieval)
	function queryDatabase($inputQuery) {
		
		try {
			global $DATABASE_HOSTNAME;
			global $DATABASE_USER;
			global $DATABASE_PASS;
			global $DATABASE_DBNAME;
			$mysqli = new mysqli($DATABASE_HOSTNAME, $DATABASE_USER, $DATABASE_PASS, $DATABASE_DBNAME);//set up mysqli connection
		
			$result = $mysqli->query($inputQuery);//run query
			$mysqli->close();//close connection
			return $result;
		} catch (Exception $e) {
			echo 'Error in queryDatabase() in databaseModule: ' . $e->getMessage();
		}
		
	}
	
?>