<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title></title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <?php
    include('conexao.php');
    $tipo = $_POST['tipo'];    

    if ($tipo == 'saldo') {
        echo"<br><br>Tipo de Consulta Escolhido: Saldo <br>";
        $sql ="select sum(case when tipo = 'entrada' then valor else 0 end) - 
              sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa";        

    } elseif ($tipo == 'saida') {
        echo"<br><br>Tipo de Consulta Escolhido: Saídas <br>";
        $sql ="select sum(valor) valor from fluxo_caixa where tipo = 'saida'";

    }elseif ($tipo == 'entrada') {
        echo"<br><br>Tipo de Consulta Escolhido: Entradas <br>";
        $sql ="select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";

    }

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    echo "Valor: $", $row['valor'], "<br>";
	?>
    <br>
    <div id="back">
        <a class="a" href="../html/consulta_fluxo_caixa.html">Voltar</a>
    </div>
</body>
</html>