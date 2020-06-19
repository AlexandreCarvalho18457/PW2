<?php

	session_start();
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="POST" action="nome.php">
  		<label for="name">Name:</label><br>
  		<input type="text" id="name" name="name"><br>
  		<input type="submit" value="Submit">
		</form>
			<?php 
				setcookie("name", "123", time()+30*24*60*60);
			?>
	</body>
	</html>


