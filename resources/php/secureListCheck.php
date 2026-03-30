<?php require 'resources/php/readFile.php';

	$USER_LIST_PATH = "resources/php/listofusers.txt";//file that contains users
		
	extract($_POST);//reading post form from secure page
	
	if (!$USERID || !$PASSWORD) {//if input fields are empty
		print("
		<b>User or password fields are empty</b>
		");
		die();
	}
	
	$fileList = fopen($USER_LIST_PATH, "r");
	$isUserVerified = false;//bool that checks if user is verified in files
	while (!feof($fileList) && (!$isUserVerified)) {
		$line = fgets($fileList, 1024);//get line
		$line = chop($line);//remove newline
		$fields = explode(", ", $line, 2);//split line from user and password with delimiter ", "
		
		if ($USERID == $fields[0]) {//if input user is in file
			$isUserVerified = true;
		}
		
		if ($isUserVerified == true) {//user is in file
			if (checkPassword($PASSWORD, $fields) == true) {//has corresponding password
				print("
				<b>Successfully logged in</b><br>
				<p>Below is a list of current website credentials for the users.</p>
				");
				readFileByLine($USER_LIST_PATH);//read user list file from external php code
				break;
			} else {//password does not match
				print("
				<b>Access denied due to invalid password</b>
				");
				break;
			}
		}
	}
	
	fclose($fileList);
	
	if (!$isUserVerified) {//user is not in list
		print("
		<b>Access denied since this user does not have permissions</b>
		");
	}
	
	function checkPassword($inputPass, $inputFile) {//check input string password with file password of array [username, password]
		if ($inputPass == $inputFile[1]) {
			return true;
		} else {
			return false;
		}
	}
	
?>