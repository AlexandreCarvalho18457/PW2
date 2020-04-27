<!DOCTYPE html>
<html>
<head>
	<title>Aula 9 e 10 Exercicio 7</title>
</head>
<body>
	<?php

	$arrCityCountryContinent = array(
		array("City" , "Country", "Continent" ),
		array("Tokyo" , "Japan", "Asia" ),
		array("Mexico City" , "Mexico", "North America" ),
		array("New York City," , "USA", "North America" ),
		array("Mumbai" , "India", "Asia" ),
		array("Seoul" , "Korea", "Asia" ),
		array("Shanghai" , "China", "Asia" ),
		array("Lagos" , "Nigeria", "Africa" ),
		array("Buenos Aires" , "Argentina", "South America" ),
		array("Cairo" , "Egypt", "Africa" ),
		array("London" , "UK", "Europe" ));
	
	echo "<table style='width:100%', border : 1px solid black>";
    foreach ($arrCityCountryContinent as $value) {
    echo "<tr><td>" . $value[0] . "</td>";
    echo "<td>" . $value[1] . "</td>";
    echo "<td>" . $value[2] . "</td></tr>";
    }
echo "</table>";

	?>
</body>
</html>