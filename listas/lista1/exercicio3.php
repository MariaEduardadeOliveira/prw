<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 1 - 16/03/2022</h1>
	<p><strong>Exercício 3</strong></p>
	<?php
	$vmp = 80;
	$vmd = 100;

	echo "Velocidade Maxima Permitida: ", $vmp, " km/h <br>";
	echo "Velocidade Motorista Dirigia: ", $vmd, " km/h <br>";

	if ($vmd > $vmp && $vmd <= ($vmp + ($vmp*0.1))){
		echo "Multa a ser paga: 50 reais";
	}elseif ($vmd <= ($vmp + ($vmp*0.2))){
		echo "Multa a ser paga: 100 reais";
	}else{
		echo "Multa a ser Paga pelo Motorista: 200 reais"; 
	}
	?>
</body>
</html>