<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
    include('conexao.php');
    $id_usuario = $_POST['id_usuario'];
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $fone_usuario = $_POST['fone_usuario'];

    $sql = "update usuario set 
    nome_usuario='" . $nome_usuario . "', 
    email_usuario='" . $email_usuario . "', 
    fone_usuario='". $fone_usuario . "' 
    where id_usuario=" . $id_usuario;

    $result = mysqli_query($con, $sql);

    if($result){
        echo "<p>Nome do usuário: ", $nome_usuario, "<br>";
        echo "E-mail: ", $email_usuario, "<br>";
        echo "Telefone: ", $fone_usuario, "<br> </p>";
        echo "Dados alterados com sucesso. <br>";
    }else{
        echo "Erro ao alterar no banco de dados.", mysqli_error($con);
    }
	?>
    <a class="a" href="listar_usuario.php">Voltar</a>
</body>
</html>