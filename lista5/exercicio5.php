<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 5 - 06/04/2022</h1>
	<p><strong>Exercício 5</strong></p>
	<?php
	$text = $_POST['area'];
    echo "Frase completa: '", $text, "' <br>";


    $pal = explode(" ", $text);
    echo "<br>Frase separada em um vetor: <br>";
    for($i=0; $i<count($pal); $i++){
        echo "A palavra '", $pal[$i], "' se encontra na Posição ", $i, "<br>";
    }

    sort($pal);
    echo "<br>Frase separada em um vetor e em ordem alfabética: <br>";
    for($i=0; $i<count($pal); $i++){
        echo "A palavra '", $pal[$i], "' se encontra na Posição ", $i, "<br>";
    }

    $text = strtoupper($text);
    $pal = explode(" ", $text);
    sort($pal);
    echo "<br>Frase separada em um vetor, em ordem alfabética e em letras maiúsculas: <br>";
    for($i=0; $i<count($pal); $i++){
        echo "A palavra '", $pal[$i], "' se encontra na Posição ", $i, "<br>";
    }
	?>
</body>
</html>