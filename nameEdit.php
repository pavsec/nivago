<!DOCTYPE html>
<html>
	<head>
		<title>Zadatak 2 - uredi ime</title>
	</head>

	<body>
		<div align="center">
		<?php

		$link = mysqli_connect("localhost", "root", "vertrigo", "imenik");

		if (mysqli_connect_errno()) 
		{
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}

		$newName = $_POST["name"];
		$id = $_POST["id"];

		$q = mysqli_query($link, "UPDATE imenik SET ime='$newName' WHERE id='$id'");
		if (!$q)
		{
			print(mysqli_error($link));
		} 
		else
		{
			echo "Ime uspješno promijenjeno<br>";
			echo "<a href=\"zadatak2.php\">Vrati se</a>";
		}

		?>
		</div>
	</body>
</html>


