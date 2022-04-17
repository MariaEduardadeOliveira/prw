<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 4 - 30/03/2022</h1>
	<p><strong>Exercício 2</strong></p>
	<?php
    $text = $_POST['text'];
    $area = $_POST['area'];
    $box = $_POST['box'];
    $op = $_POST['op'];
    $menu = $_POST['menu'];

    echo "Texto: ", $text, "<br>";
    echo "Texto em Area: ", $area, "<br>";
    echo "Caixa de Opções: ", $box, "<br>";
    echo "Botão de Opções: ", $op, "<br>";
    echo "Menu: ", $menu;
	?>
</body>
</html>