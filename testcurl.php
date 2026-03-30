<?php
	$OTHER_COMPANY_LINK_A = "https://dan-cmpe272.com/api/users.php";
	$OTHER_COMPANY_LINK_B = "https://myholidayshopping.com/api/names.php";
	$OTHER_COMPANY_LINK_C = "https://bryancortes.me/users.php?format=json";
	$OWN_COMPANY_API = "http://localhost/resources/api/apiUsers.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Company Sponsors</title>
		<link href="./resources/css/index.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
		
		<div class = "menu">
			<?php require 'resources/php/nav_links.php'; ?>
		</div>
		
		<h1>Company Sponsors</h1>
		
		<p>
		Below is a list of users from our company sponsors.<br>
		Also included is the names of people in our company.
		</p>
		
		<?php
			$curlLinkA = curl_init();
			curl_setopt($curlLinkA, CURLOPT_URL, $OTHER_COMPANY_LINK_A);
			curl_setopt($curlLinkA, CURLOPT_HEADER, 0);
			
			$curlLinkB = curl_init();
			curl_setopt($curlLinkB, CURLOPT_URL, $OTHER_COMPANY_LINK_B);
			curl_setopt($curlLinkB, CURLOPT_HEADER, 0);
			
			$curlLinkC = curl_init();
			curl_setopt($curlLinkC, CURLOPT_URL, $OTHER_COMPANY_LINK_C);
			curl_setopt($curlLinkC, CURLOPT_HEADER, 0);
			
			$curlLinkOwn = curl_init();
			curl_setopt($curlLinkOwn, CURLOPT_URL, $OWN_COMPANY_API);
			curl_setopt($curlLinkOwn, CURLOPT_HEADER, 0);
			
			curl_exec($curlLinkA);
			print("<br><br>");
			curl_exec($curlLinkB);
			print("<br><br>");
			curl_exec($curlLinkC);
			print("<br><br>");
			curl_exec($curlLinkOwn);
			print("<br><br>");
			
		?>
		
		<div class = "footer">
			<?php include 'resources/php/footer.php'; ?>
		</div>
		
	</body>
</html>