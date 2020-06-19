<?php

	//Ligação com a base de dados
	$mysql = new mysqli("localhost", "root", "","pw2");

	//Verificação
	if($mysql === false){
		die("Não foi possivel estabelecer ligação a base de dados! : "+ $mysql->connect_error);
	}else{
		echo "Ligação à base de dados estabelecida! <br><br>";
	}

	function inserirPessoa($firstName, $lastName, $birthDate){
		global $mysql;
		//criação do SQL
		$sql = "INSERT INTO pessoas (firstName, lastName, birthDate) VALUES ('".$firstName."', '".$lastName."', ".$birthDate.")";

		//Executar SQL
		if($mysql->query($sql)){
			echo "Sucesso na inserção de dados! <br><br>";
		}else{
			echo "Erro ao inserir dados: ". $mysql->error;
			echo "<br>";
			echo $sql;
		}
	}


	function alterarPessoa($firstName, $lastName, $birthDate, $id){
		global $mysql;

		//criação do SQL
		$sql = "UPDATE pessoas SET primeiroNome = '$firstName', ultimoNome = '$lastName', anoNascimento = '$birthDate' WHERE id=".$id;

		//Executar o SQL
		if($mysql->query($sql)){
			echo "Dados alterados! <br><br>";
			echo "<br> <br>";
			echo $sql;
		}

		header( "Location: view.php");
	
	}

	function eliminarPessoa($id){
		global $mysql;

		//Criar SQL de Eliminação
		$sql = "SELECT * FROM pessoas";

		//Executar SQL
		$lPessoas = $mysql->query($sql);

		if($lPessoas){
			echo "Dados consultados com sucesso! <br><br>";
		}else{
			echo "Erro na consulta de dados: ".$mysql->error;
			echo "<br> <br>";
			echo $sql;
		}
	}

	function listarPessoas(){
		global $mysql;
		global $lPessoas;


		//SQL para listar Pessoas
		$sql = "SELECT FROM * pessoas";

		//SQL
		$lPessoas = $mysql->query($sql);

		if($lPessoas){
			echo "Recolha com sucesso! <br><br>";
		}else{
			echo "Recolha sem Sucesso: ". $mysql->error;
			echo "<br><br>";
			echo $sql;
		}
	}

	function pesquisarPessoas($pesquisa){
		global $mysql;
		global $lPessoas;

		$sql = "SELECT * FROM pessoas WHERE primeiroNome LIKE '%".$pesquisa."%' OR ultimoNome LIKE '%".$pesquisa."%'";

		//SQL
		$lPessoas = $mysql->query($sql);

		if($lPessoas){
			echo "Dados adquiridos com sucesso! <br><br>";
		}else{
			echo "Dados adquiridos sem sucesso: ". $mysql->error;
			echo "<br><br>";
			echo $sql;
		}
	}

	function listarPessoa($id){
		global $mysql;
		global $dPessoa;

		//SQL Listar
		$sql = "SELECT * FROM pessoas WHERE id=" .$id;
		return $mysql->query($sql);
	}


?>