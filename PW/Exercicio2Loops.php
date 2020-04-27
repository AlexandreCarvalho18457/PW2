<!DOCTYPE html>
<html>
<head>
	<title>Aula 9 e 10 Exercicio 2</title>
</head>
<body>
	<?php
		$w = 0;
		while ( $w <= 9) {
			$w++;
			echo "abc" . " ";
		}

		echo"<br>";
		echo"<br>";

		$d = 0;
		do{
			$d++;
			echo "wyz" . " ";
		}
		while($d <= 8);

		echo"<br>";
		echo"<br>";

		for ($f=1; $f <=9 ; $f++) { 
			echo $f . " ";
		}

		echo"<br>";
		echo"<br>";

		$feacharray= array("Item A", "Item B","Item C","Item F","Item E","Item F");
			echo "<ol>";
		foreach ($feacharray as $item) {
					echo "<li>". $item . "<br>" . "</li>";
				}		
			echo "</ol>";

	?>
</body>
</html>