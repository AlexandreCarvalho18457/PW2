<!DOCTYPE html>
<html>
<head>
	<title>Aula 9 e 10 Exercicio 6</title>
</head>
<body>
	<?php

	$arrpaiscid = array("Japan" => "Tokyo", "Mexico" => "Mexico City", "USA" => "New York City", "India" => "Munbai", "Korea" => "Seoul", "China" => "Shanghai", "Nigeria" => "Lagos", "Argentina" => "Buenos Aires", "Egypt" => "Cairo", "England" => "London");

	echo array_search("Tokyo", $arrpaiscid) . " / ";
	echo $arrpaiscid["Japan"] . " <br> ";
	
	
	echo array_search("Mexico City", $arrpaiscid) . " / ";
	echo $arrpaiscid["Mexico"] . " <br>  ";
	
	echo array_search("New York City", $arrpaiscid) . " / ";
	echo $arrpaiscid["USA"] . " <br> ";
	
	echo array_search("Munbai", $arrpaiscid) . " / ";
	echo $arrpaiscid["India"] . " <br> ";
	
	echo array_search("Seoul", $arrpaiscid) . " / ";
	echo $arrpaiscid["Korea"] . " <br> ";
	
	echo array_search("Shanghai", $arrpaiscid) . " / ";
	echo $arrpaiscid["China"] . " <br> ";
	
	echo array_search("Lagos", $arrpaiscid) . " / ";
	echo $arrpaiscid["Nigeria"] . " <br> ";
	
	echo array_search("Buenos Aires", $arrpaiscid) . " / ";
	echo $arrpaiscid["Argentina"] . " <br> ";
	
	echo array_search("Cairo", $arrpaiscid) . " / ";
	echo $arrpaiscid["Egypt"] . " <br> "; 
	
	echo array_search("London", $arrpaiscid) . " / ";
	echo $arrpaiscid["England"] . "  <br>  ";
	

	?>
</body>
</html>