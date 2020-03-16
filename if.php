<!DOCTYPE html>
<html>
<head>
	<title>Aula 9 e 10 Exercicio 1 </title>
</head>
<body>
	<?php
		echo date("l") . "<br>";

		$month =  date("F");
		
		if ($month =="Agosto") {
			echo "Está mesmo ";
			}else{
				echo "Não está tanto calor como em Agosto";
			}
		
	?>
</body>
</html>