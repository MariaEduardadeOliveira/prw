<!DOCTYPE html>
<html>
<body>
<h1>Atividade Avaliativa - 13/04/2022</h1>
<p><strong>Exercício 2 - Repetição</strong></p>
<?php
$n1 = 4;
$n2 = 8;
$nurep = 1;

echo "(", $n1, " * ", $n2, ") = ";

do {
    $rep = "$n1";
    $rep = " $rep + $rep ";
    $nurep++;
    echo "+", $rep;
}while ($nurep <= $n2/2);

echo " = ", $n1 * $n2;
?>
</body>
</html>