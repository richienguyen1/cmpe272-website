<?php
	//read a file line by line and print it given a file path as input
	function readFileByLine($filePath) {
	
		$fileToRead = fopen($filePath, "r") or die("Error: unable to open file");//open with possible error detection
	
		while (!feof($fileToRead)) {//continue until end of file
			$line = fgets($fileToRead);
			echo $line . "<br>";//print line + line break
		}
	
		fclose($fileToRead);
	}
	
?>