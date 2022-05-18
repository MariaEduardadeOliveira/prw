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
    $id_agenda = $_GET['id_agenda'];

    $sql = "delete from agenda where id_agenda='" . $id_agenda . "'";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "<br>Registro excluído com sucesso.<br>";
    }else{
        echo "<br>Erro ao tentar excluir registro no banco de dados.<br>", mysqli_error($con);
    }
	?>
    <br>
    <a class="a" href="listar_agenda.php">Voltar</a>
</body>
</html>