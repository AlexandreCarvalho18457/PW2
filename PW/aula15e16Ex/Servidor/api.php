<?php


	function CalcularIdade($anoNascimento){
		return 2020 - $anoNascimento;
	}

	if(isset($_POST["dataNascimento"]) && $_POST["dataNascimento"] != ""){

		$objJSON = $_POST["dataNascimento"];
		$obj = json_decode($objJSON);

		$objClient = new \stdClass();
		$objClient->idade = CalcularIdade($obj->anoNascimento);
		$clientJSON = json_encode($objClient);

		echo $clientJSON;
	}else{
		echo "NOT ALLOWED"
	}

?>
