<!DOCTYPE html>
<html>
	<head>
		<title>Zadatak 2</title>
	</head>

	<body>
		<?php

		$link = mysqli_connect("localhost", "root", "vertrigo", "imenik");

		if (mysqli_connect_errno()) 
		{
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}

		$q = mysqli_query($link, "SELECT ime, slika, unos FROM imenik WHERE godina >= 2010 AND godina <= 2020 ORDER BY ime");
		if (!$q)
		{
			print(mysqli_error($link));
		} 
		else
		{
			echo "<table border=\"1\" width=\"300px\" align=\"center\">";
			while ($row = mysqli_fetch_array($q))
			{
				echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "</tr>";
			}
			echo "</table";

		}

		?>
	</body>
</html>


