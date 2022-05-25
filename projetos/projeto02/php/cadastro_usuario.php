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

    echo "<p>Nome do usuário: ", $nome_usuario, "<br>";
    echo "E-mail: ", $email_usuario, "<br>";
    echo "Foto: ", $foto_nome, "<br>";
    echo "Telefone: ", $fone_usuario, "<br> </p>";

    $sql = "insert into usuario (nome_usuario, email_usuario, fone_usuario, foto_blob, foto_nome)
            values ('" . $nome_usuario . "', '" . $email_usuario . "', '" . $fone_usuario 
                    . "','" . $foto_blob . "','" . $foto_nome . "')";

    $result = mysqli_query($con, $sql);

    if($result){
        echo "Dados inseridos com sucesso.";
    }else{
        echo "Erro ao inserir no banco de dados.", mysqli_error($con);
    }
	?>
    <a class="a" href="index.php"><br>Voltar</a>
</body>
</html>