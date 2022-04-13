<!DOCTYPE html>
<html>
<body>
<h1>Atividade Avaliativa - 13/04/2022</h1>
<p><strong>Exercício 1 - Condicional</strong></p>
<?php
$sal = 350;
echo "O Salário desse Funcionário é de: $", $sal, "<br>";

if($sal <= 300){
    $just = $sal * 0.5;
    $sal = $sal + $just;
    echo "O Reajuste do Salário desse Funcionário é de 50%, ou seja: $", $just, "<br>";
    echo "Logo seu Novo Slário será de: $", $sal;
}else{
    $just = $sal * 0.3;
    $sal = $sal + $just;
    echo "O Reajuste do Salário desse Funcionário é de 30%, ou seja: $", $just, "<br>";
    echo "Logo seu Novo Slário será de: $", $sal;
}
?>
</body>
</html>