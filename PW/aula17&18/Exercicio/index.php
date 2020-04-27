 	<?php
		$link = mysqli_connect("localhost", "root", "", "pw2");

		if($link ===false){
			die("ERROR: Could not connect. " . mysql_connect_error());
		}

		$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
		$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
		$email = mysqli_real_escape_string($link, $_REQUEST['email']);

		$sql = "INSER INTO user ("
	?>

		<!DOCTYPE html>
 	<html>
 	<head>
 		<meta charset="utf-8">
 		<title>exercicio</title>
 	</head>
 	<body>
 	
 	
	<form action= "index.php" method=<?php echo $_SERVER["PHP_SELF"];?>>

	<p>
		<lable for="firstName">First Name:</label>
		<input type="text" name="first_name" id="firstName">
	</p>

	<p>
		<lable for="lastName">Last Name:</label>
		<input type="text" name="last_name" id="lastName">
	</p>

	<p>
		<lable for="emailAddress"email> Address:</label>
		<input type="text" name="email" id="emailAddress">
	</p>
	<input type="submit" value="Submit">

	</form>
	</body>
 	</html>