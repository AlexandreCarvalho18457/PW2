<!DOCTYPE html>
<html>
<head>
	<title>Aula 9 e 10 Exercicio 5</title>
</head>
<body>
	<?php

		$cidadesarr = array("Tokyo" ,"Mexico City", "New York City", "Munbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

		foreach ($cidadesarr as $city) {
			echo $city .", ";
		}

		echo "<br>";
		echo "<br>";

		arsort($cidadesarr);

		foreach ($cidadesarr as $city) {
			echo $city .", ";
		}

		echo "<br>";
		echo "<br>";

		array_push($cidadesarr, "Los Angeles", "Calcutta", "Osaka", "Beijing");

		asort($cidadesarr);

		foreach ($cidadesarr as $city) {
			echo $city .", ";
		}
	?>
</body>
</html>