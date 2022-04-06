<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 1 - 16/03/2022</h1>
	<p><strong>Exercício 3</strong></p>
	<?php
	$vmp = 80; //Velocidade Maxima Permitida, km/h
	$vmd = 100; //Velocidade Motorista Dirigia, km/h

	echo "Velocidade Maxima Permitida: ", $vmp, " km/h <br>";
	echo "Velocidade Motorista Dirigia: ", $vmd, " km/h <br>";

	if ($vmd > $vmp && $vmd <= ($vmp + ($vmp*0.1))){ // até 10%
		echo "Multa a ser paga: 50 reais";
	}elseif ($vmd <= ($vmp + ($vmp*0.2))){ // entre 10% e 20%
		echo "Multa a ser paga: 100 reais";
	}else{
		echo "Multa a ser Paga pelo Motorista: 200 reais"; 
	}
	?>
</body>
</html>