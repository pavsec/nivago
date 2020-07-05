<!DOCTYPE html>
<html>
	<head>
		<title>Zadatak 1</title>
	</head>

	<body>
		<?php

		$f = "http://www.elektroprofi.hr/api/demo.php";
		$content = file_get_contents($f);
		$clean = strip_tags($content);
		$clean = htmlspecialchars_decode($clean);
		$xml = simplexml_load_string($clean);

		print("Date: " . $xml->SalesInvoice->date . "<br>");
		
		$numbers = explode("/", $xml->SalesInvoice->number);
		print("Numbers: ");
		foreach ($numbers as $n) 
		{
			print($n . " ");
		}

		print("<br>Description: " . $xml->SalesInvoice->Items->Item->description . "<br>");

		?>
	</body>
</html>


