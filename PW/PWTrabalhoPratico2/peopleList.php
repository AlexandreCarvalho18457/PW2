<!--  List -->

<tr>
	<td>
		Primeiro Nome
	</td>
	<td>
		Ultimo Nome
	</td>
	<td>
		Ano Nascimento
	</td>
	<td>
		Eliminar
	</td>
	<td>
		Editar
	</td>
</tr>

<?php if($lPessoas->fetch_assoc()){?>
<tr>
	<td>
		?php echo $row['primeiroNome']; ?>
	</td>
	<td>
		?php echo $row['ultimoNome']; ?>
	</td>
	<td>
		?php echo $row['AnoNascimento']; ?>
	</td>
	<td>
		<a href="view.php?eliminar=<?php echo $row['id']; ?>">Eliminar</a>
	</td>
	<td>
		<a href="view.php?alterar=<?php echo $row['id']; ?>">Alterar</a>
	</td>
</tr>
<?php}
$lPessoas->free();
} ?>