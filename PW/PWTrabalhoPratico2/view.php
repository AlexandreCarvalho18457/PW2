<?php
	require("controller.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Exercicio prático 2</title>
</head>
<body>

		<!-- Form -->
	<?php
		if(isset($_GET["alterar"])){
			$action = "view.php?alterar=".$_GET["alterar"];
		}else{
			$action = "view.php";
		}
	?>


	<form method="POST" action="<?php echo $action ?>">
		<label for="primeiroNome"> Primeiro Nome: </label>
		<input type="text" name="primeiroNome" required value="<?php if(isset($dPessoa)){echo $dPessoa['primeiroNome'];} ?>"/>
		<br>
		<label for="ultimoNome"> Ultimo Nome: </label>
		<input type="text" name="ultimoNome" required value="<?php if(isset($dPessoa)){echo $dPessoa['ultimoNome'];} ?>"/>
		<br>
		<label for="anoNascimento"> Ano de Nascimento: </label>
		<input type="text" name="anoNascimento" required value="<?php if(isset($dPessoa)){echo $dPessoa['anoNascimento'];} ?>"/>
		<br>

		<?php if(isset($dPessoa)){ ?>
			<button>Atualizar</button>
		<?php }else{?>
			<button>Inserir</button>
		<?php} ?>
	</form>

		<!-- Search -->
	<form method="GET" action="view.php">
		<label for="txtPesquisa">Nome: </label>
		<input type="text" name="tPesquisa" required value="<? php if(isset($_GET['tPesquisa'])) {echo $_GET ['tPesquisa']; } ?>" />
		<button>Pesquisar</button>
		<?php
		if(isset($_GET["textoPesquisa"])){
			?>
				<a href="view.php">Clear</a>
			<?php
		}
	?>
	</form>

		<!-- Table -->
	<table border="1">
		<?php include("peopleList.php");?>
	</table>

</body>
</html>