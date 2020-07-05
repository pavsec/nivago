<!DOCTYPE html>
<html>
	<head>
		<title>Zadatak 1</title>
	</head>

	<body>
		<?php

		$f = "demo.xml";
		$xml = simplexml_load_file($f);
		
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


