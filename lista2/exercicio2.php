<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 2 - 23/03/2022</h1>
	<p><strong>Exercício 2</strong></p>
	<?php
	$mes = 11;
    echo "Número: ", $mes, "<br>";
	
	if ($mes >= 1 && $mes <=12){
		switch ($mes){
			case '1':
				echo "Mês de Janeiro";
				break;
			case '2':
				echo "Mês de Fevereiro";
				break;
			case '3':
				echo "Mês de Março";
				break;
			case '4':
				echo "Mês de Abril";
				break;
			case '5':
				echo "Mês de Maio";
				break;
			case '6':
				echo "Mês de Junho";
				break;
			case '7':
				echo "Mês de Julho";
				break;
			case '8':
				echo "Mês de Agosto";
				break;
			case '9':
				echo "Mês de Setembro";
				break;
			case '10':
				echo "Mês de Outubro";
				break;
			case '11':
				echo "Mês de Novembro";
				break;
			case '12':
				echo "Mês de Dezembro";
				break;
		}
	}else{
		echo "Houve um erro de digitação.";
	}
	?>
</body>
</html>