<!DOCTYPE html>
<html>
<body>
<h1>Aula 09/03/2022</h1>
<h3>Operações 3</h3>
<?php
$nota =  7.5;
$freq = 65;
echo "nota - ", $nota;
echo "<br>";
echo "freq - ", $freq;
echo "<br>";
$aprovado = ($nota>7 and $freq>75);
echo "aval (apro) - ", var_export($aprovado);
echo "<br>";
$reprovado = ($nota>7 or $freq<75);
echo "aval (repro) - ", var_export($reprovado);
echo "<br>";

echo "<br>";
$nome =  "Maria";
$sobr = "Oliveira";
echo "nome: ", $nome;
echo "<br>";
echo "sobrenome: ", $sobr;
echo "<br>";
echo "completo: ", $nome." ".$sobr;
echo "<br>";

echo "<br>";
$sal = 222;
echo "salario = ", $sal;
echo "<br>";
echo "salario formatado = ", number_format($sal,2);

?>
</body>
</html>