<!DOCTYPE html>
<html>
<head>
	<title>Classes</title>
</head>
<body>
	<?php 
	/**
	class Autor
	 */
	class Autor	{
		private $nome;
		private $email;
		
		function __construct($nome, $email)
		{
			$this-> nome = $nome;
			$this-> email = $email;
		}
		public function GetNome(){
			echo "Nome: {$this -> nome} <br>";
		}
	}

	class Livro	{
		private $nome;
		private $listaAutores;
		private $preco;
		
		function __construct($nome, $listaAutores, $preco)
		{
			$this-> nome = $nome;
			$this-> listaAutores = $listaAutores;
			$this-> preco = $preco;
		}

		public function GetNome(){
			 echo $this -> nome;
		}
		public function GetAutores(){
			$this -> listaAutores;
		}
		public function GetNomesAutores(){
			 $listaAutores = array();

			 for ($i=0; $i <count($this->listaAutores) ; $i++) { 
			 	array_push($listaAutores, $this->listaAutores[$i]->GetNome());
			 }

			 return $listaAutores;
		}

		
	}
	$autor = new Autor("J.Saramago", "J.Saramago@email.com");
	$autor1 = new Autor("J.Saramago1", "J.Saramago1@email.com");
	$autor2 = new Autor("J.Saramago2", "J.Saramago2@email.com");
	$autor3 = new Autor("J.Saramago3", "J.Saramago3@email.com");

	$arrAutores= array($autor, $autor1, $autor2, $autor3);

	$livro = new Livro("A Cegueira", $arrAutores, 19.99);

	$livro -> GetNome();
	echo "<br>";

	$livro -> GetAutores();

	$livro -> GetNomesAutores();
	
	

	?>
</body>
</html>