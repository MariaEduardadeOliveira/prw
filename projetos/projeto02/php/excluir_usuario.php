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
    $id_usuario = $_GET['id_usuario'];

    $sql = "delete from usuario where id_usuario='" . $id_usuario . "'";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "Registro excluído com sucesso.";
    }else{
        echo "Erro ao tentar excluir registro no banco de dados.", mysqli_error($con);
    }
	?>
    <a class="a" href="listar_usuario.php"><br>Voltar</a>
</body>
</html>