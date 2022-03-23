<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Aula 4 - 23/03/2022</h1>
	<p><strong>Condições 3 - switch case</strong></p>
	<?php
    $op = "a"; //Opção A
    
    //Abaixo Lista de Opções
    echo "Lista de Opções: <br>
       a - Abrir <br>
       f - Fechar <br>
       s - Salvar <br>
       default - Sair <br> <br>";
    
    echo "Opção Escolhida: ", $op, "<br>";

    switch($op){ //Caso Opção "...", Resultado "..."
    case "a": echo "Resultado: Abrir"; break;
    case "f": echo "Resultado: Fechar"; break;
    case "s": echo "Resultado: Salvar"; break;
    default: echo "Resultado: Sair"; break;
   }   
	?>
</body>
</html>