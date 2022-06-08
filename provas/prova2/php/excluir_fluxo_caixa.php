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
    $id = $_GET['id'];

    $sql = "delete from fluxo_caixa where id='" . $id . "'";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "<br>Registro excluído com sucesso.<br>";
    }else{
        echo "<br>Erro ao tentar excluir registro no banco de dados.<br>", mysqli_error($con);
    }
	?>
    <br>
    <div id="back">
        <a class="a" href="listar_fluxo_caixa.php">Voltar</a>
    </div>
</body>
</html>