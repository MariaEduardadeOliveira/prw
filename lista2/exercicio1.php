<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 2 - 23/03/2022</h1>
	<p><strong>Exercício 1</strong></p>
	<?php
	$num1 = 20; //Primeiro Número
	$num2 = 50;//Segundo Número
	$res1 = $num1%2; // Resto do Primeiro Número
	$res2 = $num2%2; //Resto do Segundo Número

    echo "Primeiro número: ", $num1, "<br>"; 
    echo "Segundo número: ", $num2, "<br>";

    //Se os Números são menos que 100 e Se os Números são Pares
	if ($num1 < 100 && $num2 < 100 && $res1 == 0 && $res2 == 0){ 
		$soma = $num1 + $num2;
		echo "A soma dos números é de: ", $soma;
	}
	?>
</body>
</html>