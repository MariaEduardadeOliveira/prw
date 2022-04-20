<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <h1>Lista 4 - 30/03/2022</h1>
    <p><strong>Exercício 4</strong></p>
    <?php
    $ano = $_POST['ano'];

    if($ano%4 == 0 && $ano%100 != 0){
        echo "O ano ", $ano, " é SIM bissexto.";
    }else{
        echo "O ano ", $ano, " NÃO é bissexto.";
    }
	?>
</body>
</html>
