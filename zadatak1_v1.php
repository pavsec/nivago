<!DOCTYPE html>
<html>
	<head>
		<title>Zadatak 1</title>
	</head>

	<body>
		<?php

		$f = "http://www.elektroprofi.hr/api/demo.php";
		$content = file_get_contents($f);

		$date = array("&lt;date&gt;", "&lt;/date&gt;");
		$start = strpos($content, $date[0]);
		$end = strpos($content, $date[1]);
		$date_val = substr($content, ($start + strlen($date[0])), ($end - $start - strlen($date[1]) + 1));
		print("Date: " . $date_val . "<br>");

		$number = array("&lt;number&gt;", "&lt;/number&gt;");
		$start = strpos($content, $number[0]);
		$end = strpos($content, $number[1]);
		$number_val = substr($content, ($start + strlen($number[0])), ($end - $start - strlen($number[1]) + 1));
		$numbers = explode("/", $number_val);
		print("Numbers: ");
		foreach ($numbers as $n) 
		{
			print($n . " ");
		}

		$description = array("&lt;description&gt;", "&lt;/description&gt;");
		$start = strpos($content, $description[0]);
		$end = strpos($content, $description[1]);
		$description_val = substr($content, ($start + strlen($description[0])), ($end - $start - strlen($description[1]) + 1));
		print("<br>Description: " . $description_val . "<br>");
		?>
	</body>
</html>


