<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 2 - 23/03/2022</h1>
	<p><strong>Exercício 3</strong></p>
	<?php
    //
    $div = 0;
    $count = 2;
    
    for($num=0; $num<=200; $num++){
        while($count < $num){
            if($num % $count == 0){
                echo "O número ", $num, " não é primo. <br>";
                $div++;
            }
            $count++;
        }
        if($div == 0){
            echo "O número ", $num, " é primo. <br>";
        }
    }
	?>
</body>
</html>
