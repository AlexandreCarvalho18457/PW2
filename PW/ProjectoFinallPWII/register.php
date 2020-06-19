<?php

//Conecção com base de dados
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'projectofinalpwii';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// Se ocurer um erro com a conecção, mostra o erro.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Verificar os dados submetidos, a função isset() verifica se os dados existem.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Não foi possivel obter os dados.
	exit('Please complete the registration form!');
}
// Verificar se os campos não estão vazios.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// se um ou mais campos estiverem vazios.
	exit('Please complete the registration form');
}

// Para verificar se o username não existe.
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    
    //Validação de email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        exit('Email is not valid!');
    }

    //validação de caracteres 
    if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
        exit('Username is not valid!');
    }

    //validação de tamanho da password
    if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        exit('Password must be between 5 and 20 characters long!');
    }                                       

	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Guardar resultado para verificar se a conta existe na base de dados.
	if ($stmt->num_rows > 0) {
		// Username já existe.
		echo 'Username exists, please choose another!';
	} else {


		// Inserir novo user na base de dados
if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
	
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
	$stmt->execute();
	echo 'You have successfully registered, you can now login!';
} else {
	// Erro durante a criação do statement.
	echo 'Could not prepare statement!';
}


	}
	$stmt->close();
} else {
	// Erro durante a criação do statement.
	echo 'Could not prepare statement!';
}
$con->close();
?>