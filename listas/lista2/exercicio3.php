<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 2 - 23/03/2022</h1>
	<p><strong>Exercício 3</strong></p>
	<?php
    for($i = 0; $i <= 200; $i++){  
        $div = 0;

        for($j = $i; $j >= 1; $j--){
            if (($i % $j) == 0){
                $div++;
            }
        }
        if ($div == 2)
        {
            echo "O número ", $i, " É SIM um número Primo. <br>";
        }else{
            echo "O número ", $i, " NÃO é um número Primo. <br>";
        }
    }
	?>
</body>
</html>
