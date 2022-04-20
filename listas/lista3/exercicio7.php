<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 3 - 30/03/2022</h1>
	<p><strong>Exercício 6</strong></p>
	<?php
    $il = "rb.ude.psfi.www";
    echo "Link Inverso: ", $il, "<br>";
    
    $cl = strrev($il);
    echo "Link Correto: <a href='https://www.ifsp.edu.br' target='_blank'> $cl </a>";
	?>
</body>
</html>