<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 3 - 30/03/2022</h1>
	<p><strong>Exercício 2</strong></p>
	<?php
    $p = "Aurelio";
    echo "A palavra inicial era: ", $p, "<br>";

    $np = str_replace(["a", "e", "i", "o", "u"], "x", $p);
    echo "Agora, com suas vogais substituidas por 'x', temos: ", $np;
	?>
</body>
</html>