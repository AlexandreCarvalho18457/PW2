<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array</title>
</head>
<body>
	<?php
	$colors = array("Red", "Green", "Blue");
	var_dump($colors);
	echo "<br>";

	$colors_codes = array(
		"Red" => "#ff0000", 
		"Green" => "#00ff00", 
		"Blue" => "#0000ff"
	);
	var_dump($colors_codes);
	?>
</body>
</html>