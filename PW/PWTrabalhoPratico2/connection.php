<?php

	//Ligação com a base de dados
	$mysql = new mysqli("localhost", "root", "","pw2");

	//Verificação
	if($mysql === false){
		die("Não foi possivel estabelecer ligação a base de dados! : "+ $mysql->connect_error);
	}else{
		echo "Ligação à base de dados estabelecida! <br><br>";
	}

?>
