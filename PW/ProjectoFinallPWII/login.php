<?php
session_start();

//Conecção com base de dados
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'projectofinalpwii';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// Se ocurer um erro com a conecção, mostra o erro.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Verificar os dados submetidos, a função isset() verifica se os dados existem.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// se password ou username estiverem vazios.
	exit('Please fill both the username and password fields!');
}

// preparar o sql 
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Guardar resultado para verificar se a conta existe na base de dados.
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $password);
		$stmt->fetch();
		// conta existe, verificar password
		if (password_verify($_POST['password'], $password)) {
			//Criação de sessão.
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $id;
			echo 'Welcome ' . $_SESSION['name'] . '!';
		} else {
			echo 'Incorrect password!';
		}
	} else {
		echo 'Incorrect username!';
	}

	$stmt->close();
}
?>