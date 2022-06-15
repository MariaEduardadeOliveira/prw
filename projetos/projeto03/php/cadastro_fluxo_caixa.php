<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF$8">
	<title></title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <?php
        include('conexao.php');
        $data = $_POST['data'];
        $tipo = $_POST['tipo'];
        $valor = $_POST['valor'];
        $historico = $_POST['historico'];
        $cheque = $_POST['cheque'];

        $ndata = explode('-',$data);
        echo "<p>Data: ", $ndata[2], "/", $ndata[1], "/", $ndata[0], "<br>";
        if($tipo == 'entrada'){
            echo "Tipo: Entrada <br>";
        }elseif ($tipo == 'saida') {
            echo "Tipo: Saída <br>";
        }
        echo "Valor: $", $valor, "<br>";
        echo "Histórico: ", $historico, "<br>";
        echo "Cheque: ", $cheque, "</p>";

        $sql = "insert into fluxo_caixa (data, tipo, valor, historico, cheque)
                values ('" . $data . "','" . $tipo . "','" . $valor . "','" . 
                $historico . "','" . $cheque . "')";

        $result = mysqli_query($con, $sql);

        if($result){
            echo "Dados inseridos com sucesso. <br>";
        }else{
            echo "Erro ao inserir no banco de dados. <br>", mysqli_error($con);
        }
    ?>
    <br>
    <div id="back">
        <a class="a" href="index.php">Voltar</a>
    </div>
</body>
</html>
