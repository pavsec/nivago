<!DOCTYPE html>
<html>
	<head>
		<title>Zadatak 2</title>
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

		if (empty($_GET))
		{
			$years = "";
		}
		else if ($_GET['sort'] == "10-20")
		{
			$years = "WHERE godina >= 2010 AND godina <= 2020";
		}
		else if ($_GET['sort'] == "no") 
		{
			$years = "";
		}

		$q = mysqli_query($link, "SELECT ime, slika, unos, id FROM imenik ".$years." ORDER BY ime");
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
				echo "<td><form action=\"nameEdit.php\" method=\"post\">".
  					 "<label for=\"name\">Uredi ime:</label><br>".
  					 "<input type=\"text\" id=\"name\" name=\"name\" value=\"\"><br>".
  					 "<input type=\"hidden\" id=\"id\" name=\"id\" value=\"$row[3]\"><br>".
  			 		 "<input type=\"submit\" value=\"Uredi\">".
					 "</form></td>"; 
				echo "</tr>";
			}
			echo "</table>";

		}

		?>

		<br>
		<br>
		<a href="?sort=10-20" name="sort">Prikaži unose sa godinama u periodu 2010-2020</a> <br>
		<a href="?sort=no" name="noSort">Prikaži sve unose</a>
		</div>
	</body>
</html>


