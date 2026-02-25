<?php
	$CONTACTS_FILE_PATH = 'resources/php/contacts.txt';//file to read
	
	$contactLines = file($CONTACTS_FILE_PATH);
	
	foreach($contactLines as $line) {
		echo str_pad($line, 2, 0, STR_PAD_LEFT);
	}
			
?>