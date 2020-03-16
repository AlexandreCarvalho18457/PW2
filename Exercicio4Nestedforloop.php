<!DOCTYPE html>
<html>
<head>
	<title>Aula 9 e 10 Exercicio 4</title>
</head>
<body>
	<?php
		echo "<table style='width:100%', border : 1px solid black, border-collapse: collapse;>";

	for ($i=1; $i <8; $i++) { 
		echo "<tr>";
		for ($j=1; $j < 8; $j++) { 
			$t = $i * $j;
			echo "<td>". $t . "</td>";
		}
		echo "</tr>";
	}

	?>
</body>
</html>