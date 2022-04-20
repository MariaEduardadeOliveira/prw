<!DOCTYPE html>
<html>
<body>
<h1>Atividade Avaliativa - 13/04/2022</h1>
<p><strong>Exercício 3 - Formulário e Condicional</strong></p>
<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ($altura * $altura);

echo "Uma pessoa de peso: ", $peso, "kg e altura: ", $altura, "m, tem como IMC: ", number_format($imc,2), "<br>";
echo "Logo, podemos classificar esta como: ";

if ($imc < 17) {
    echo "Muito abaixo do peso";
}elseif ($imc >= 17 && $imc < 18.5) {
    echo "Abaixo do peso";
}elseif ($imc >= 18.5 && $imc < 25) {
    echo "Peso normal";
}elseif ($imc >= 25 && $imc < 30) {
    echo "Acima do peso";
}elseif ($imc >= 30 && $imc < 35) {
    echo "Obesidade I";
}elseif ($imc >= 35 && $imc < 40) {
    echo "Obesidade II";
}else{
    echo "Obesidade III";
}
?>
</body>
</html>