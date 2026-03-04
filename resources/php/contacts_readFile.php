<?php
	$CONTACTS_FILE_PATH = 'resources/php/contacts.txt';//file to read
	
	$contactsFile = fopen($CONTACTS_FILE_PATH, "r") or die("Error: unable to open file");//open with possible error detection
	
	while (!feof($contactsFile)) {//continue until end of file
		$line = fgets($contactsFile);
		echo $line . "<br>";//print line + line break
	}
	
	fclose($contactsFile);
?>