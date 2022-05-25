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
    $id_usuario = $_POST['id_usuario'];
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $fone_usuario = $_POST['fone_usuario'];

    $foto_nome = $_FILES['foto_usuario']['name'];
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["foto_usuario"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png","gif");

    if(in_array($imageFileType,$extensions_arr)){        
        if(move_uploaded_file($_FILES['foto_usuario']['tmp_name'],$target_dir.$foto_nome)){
            $foto_blob = addslashes(file_get_contents($target_dir.$foto_nome));
        }
    }

    $sql = "update usuario set 
    nome_usuario='" . $nome_usuario . "', 
    email_usuario='" . $email_usuario . "', 
    fone_usuario='". $fone_usuario . "' 
    where id_usuario=" . $id_usuario;

    if(strlen($foto_nome)){
        $sql = "update usuario set
                nome_usuario='" . $nome_usuario . "',
                email_usuario='" . $email_usuario . "',
                fone_usuario='" . $fone_usuario . "',
                foto_blob='" . $foto_blob . "',
                foto_nome='" . $foto_nome . "'
                where id_usuario=" . $id_usuario;
    }else{
        $sql = "update usuario set
                nome_usuario='" . $nome_usuario . "',
                email_usuario='" . $email_usuario . "',
                fone_usuario='" . $fone_usuario . "'
                where id_usuario=" . $id_usuario;
    }

    $result = mysqli_query($con, $sql);

    if($result){
        echo "<p>Nome do usuário: ", $nome_usuario, "<br>";
        echo "E-mail: ", $email_usuario, "<br>";
        echo "Foto: ", $foto_nome, "<br>";
        echo "Telefone: ", $fone_usuario, "<br> </p>";
        echo "Dados alterados com sucesso.";
    }else{
        echo "Erro ao alterar no banco de dados.", mysqli_error($con);
    }
	?>
    <a class="a" href="listar_usuario.php"><br>Voltar</a>
</body>
</html>