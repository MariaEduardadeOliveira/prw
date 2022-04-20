<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 3 - 30/03/2022</h1>
	<p><strong>Exercício 4</strong></p>
	<?php
    $data = date("d/m/y");
    echo "data completa: ", $data, "<br>";
    
    $dia = substr($data, 0, 2);
    echo "dia: ", $dia, "<br>";

    $mes = substr($data, 3, 2);
    echo "mes: ", $mes, "<br>";

    $ano = substr($data, 6, 2);
    echo "ano: ", $ano;
	?>
</body>
</html>