<?php

	require("model.php");

	//inserir 
	if(isset($_REQUEST["primeiroNome"]) && $_REQUEST["ultimoNome"] && $_REQUEST["anoNascimento"]){
		//recolha de dados 
		$firstName = mysqli_real_escape_string($mysql, $_REQUEST["primeiroNome"]);
		$lastName = mysqli_real_escape_string($mysql, $_REQUEST["ultimoNome"]);
		$birthDate = mysqli_real_escape_string($mysql, $_REQUEST["anoNascimento"]);

		if(isset($_GET["alterar"])){
			//Update
			alterarPessoa($firstName, $lastName, $birthDate, $_GET["alterar"]);
		}else{
			//Insert
			inseirPessoa($firstName, $lastName, $birthDate);
		}
	}


	//Eliminar
	if(isset($_GET["eliminar"])){
		eliminarPessoa($_GET["eliminar"]);
	}

	//Alterar
	if(isset($_GET["alterar"])){
		$id = ($_GET["alterar"]);
		$dPessoa = listarPessoa($id)->fetch_assoc();
	}

	//Pesquisa
	if(isset($_GET["tPesquisa"])){
		$tPesquisa = mysqli_real_escape_string($mysql , $_REQUEST["tPesquisa"]);
		pesquisarPessoa($tPesquisa);
	}else{
		listarPessoas();
	}

	//Terminar Ligação
	$mysql->close();

?>
