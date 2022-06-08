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
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];


    $sql = "update fluxo_caixa set 
    data='" . $data . "',
    tipo='" . $tipo . "', 
    valor='" . $valor . "',
    historico='" . $historico . "', 
    cheque='" . $cheque . "'
    where id=" . $id;

    $result = mysqli_query($con, $sql);

    if($result){
        $ndata = explode('-',$data);
        echo "<p>Data: ", $ndata[2], "/", $ndata[1], "/", $ndata[0], "<br>";
        echo "Tipo: ", $tipo, "<br>";
        echo "Valor: ", $valor, "<br>";
        echo "Histórico: ", $historico, "<br>";
        echo "Cheque: ", $cheque, "<br></p>";
        echo "Dados alterados com sucesso.<br>";
    }else{
        echo "Erro ao alterar no banco de dados.<br>", mysqli_error($con);
    }
	?>
    <br>
    <div id="back">
        <a class="a" href="listar_fluxo_caixa.php">Voltar</a>
    </div>
</body>
</html>