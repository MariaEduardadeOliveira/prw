<!DOCTYPE html>
<html>
<body>
<h1>Atividade Avaliativa - 13/04/2022</h1>
<p><strong>Exercício 4 - Formulário e Validação</strong></p>
<?php
$cliente = $_POST['cliente'];
$estado = $_POST['estado'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$sexo = $_POST['sexo'];
$saldo = $_POST['saldo'];
$total = $_POST['total'];
$error = 0;

echo "Nome do Cliente: ", $cliente, "<br>";
    echo "Estado: ", $estado, "<br>";
    echo "CPF: ", $cpf, "<br>";
    echo "RG: ", $rg, "<br>";
    echo "Sexo: ", $sexo, "<br>";
    echo "Saldo: ", $saldo, "<br>";
    echo "Total: ", $total, "<br>";

if(empty($cliente)){
    echo "Favor digitar seu nome.";
    $error = 1;
}
if(empty($cpf)){
    echo "Favor digitar seu CPF.";
    $error = 1;
}
if(empty($rg)){
    echo "Favor digitar seu RG.";
    $error = 1;
}

if($saldo < $total){
    echo "<p style='color: red;'>Saldo Insuficiente para Concluir Compra!</p>";
    $error = 1;
}else{
    $nosaldo = $saldo - $total;
    echo "Novo Saldo: ", $nosaldo, "<br>";
}

if($error==0){
    echo "Todos os dados foram digitados corretamente.";
}

?>
</body>
</html>