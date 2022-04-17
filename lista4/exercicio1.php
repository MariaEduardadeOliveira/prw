<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 4 - 30/03/2022</h1>
	<p><strong>Exercício 1</strong></p>
	<?php
    $op = $_POST['op'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if($op == 1){
        $res = $num1 + $num2;
        echo "O resultado dessa soma é de: ", number_format($res,2);

    }elseif($op == 2){
        $res = $num1 - $num2;
        echo "O resultado dessa subtração é de: ", number_format($res,2);

    }elseif($op == 3){
        $res = $num1 / $num2;
        echo "O resultado dessa divisão é de: ", number_format($res,2);

    }else{
        $res = $num1 * $num2;
        echo "O resultado dessa multiplicação é de: ", number_format($res,2);
    }
	?>
</body>
</html>