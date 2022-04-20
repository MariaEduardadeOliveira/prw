<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 3 - 30/03/2022</h1>
	<p><strong>Exercício 5</strong></p>
	<?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    
    $data = date("d/m/y");
    echo "data completa: ", $data, "<br>";
    
    $semana = strftime("%A");
    echo "dia da semana: ", $semana;
	?>
</body>
</html>