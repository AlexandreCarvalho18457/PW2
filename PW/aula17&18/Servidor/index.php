<?php 

	$mysqli = new mysqli("locahost", "root", "", "pw2");
	$mysqli->set_charset('uft8');

	if($mysqli === false){
		die("ERROR: Could not connect. " . $mysqli->connect_error);
	}

	echo "Connect Successfully. Host info: " . $mysqli->host_info;

	$mysqli->close();

	?>