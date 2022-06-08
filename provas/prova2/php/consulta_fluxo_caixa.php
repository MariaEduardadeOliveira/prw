<?php
    include('conexao.php');
    $sql = 'SELECT * FROM fluxo_caixa';    
    $result = mysqli_query($con, $sql);
    /**if (!$result) {
        printf("Errormessage: %s\n", mysqli_error($con));
    }   **/ 
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title></title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <?php
    $consul = $_POST['consul'];
    $valor = $_POST['valor'];

    echo"<br>Tipo de Consulta Escolhido: ", $consul, "<br>";

    if ($consul == 'Saldo') {
        $sql ="select sum(case when tipo = 'Entrada' then valor else 0 end) - 
        select sum(case when tipo = 'Entrada' then valor else 0 end) as valor from fluxo_caixa";
        
        if($result){
            echo "Valor: ", $valor;
        }

    } elseif ($consul == 'Saídas') {
        $sql ="select sum(valor) valor from fluxo_caixa where tipo = 'Saída'";

        if($result){
            echo "Valor: ", $valor;
        }

    }elseif ($consul == 'Entradas') {
        $sql ="select sum(valor) valor from fluxo_caixa where tipo = 'Entrada'";

        if($result){
            echo "Valor: ", $valor;
        }
    }
	?>
    <br>
    <div id="back">
        <a class="a" href="../html/consulta_fluxo_caixa.html">Voltar</a>
    </div>
</body>
</html>