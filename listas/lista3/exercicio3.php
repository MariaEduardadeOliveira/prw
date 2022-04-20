<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 3 - 30/03/2022</h1>
	<p><strong>Exercício 3</strong></p>
	<?php
    $cep = "16200845";
    echo "Meu CEP é: ", $cep, "<br>";
    
    $ncep = substr($cep, 5);
    echo "Seus últimos 3 números são: ", $ncep;
	?>
</body>
</html>