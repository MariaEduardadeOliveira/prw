<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Aula 4 - 23/03/2022</h1>
	<p><strong>Condições 1 - if</strong></p>
	<?php
    $n1 = 7; //Primeira Nota
    $n2 = 8; //Segunda Nota
    $media = ($n1 + $n2)/2; //Média das Notas
    
    echo "Nota 1: ", $n1, "<br>";
    echo "Nota 2: ", $n2, "<br>";
    echo "Média: ", $media, "<br>";
    
    if($media >= 7) //Aprovado se média maior ou igual à 7
       echo "Você foi aprovado";
	?>
</body>
</html>