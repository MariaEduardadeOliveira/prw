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
        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $dt_cadastro = date('Y-m-d');

        $foto_nome = $_FILES['foto']['name'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $extensions_arr = array("jpg","jpeg","png","gif");

        if(in_array($imageFileType,$extensions_arr)){        
            if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$foto_nome)){
                $foto_blob = addslashes(file_get_contents($target_dir.$foto_nome));
            }
        }

        echo "<p id='response'>Nome: ", $nome, "<br>";
        echo "Apelido: ", $apelido, "<br>";
        echo "Endereço: ", $endereco, "<br>";
        echo "Bairro: ", $bairro, "<br>";
        echo "Cidade: ", $cidade, "<br>";
        echo "Estado: ", $estado, "<br>";
        echo "Telefone: ", $telefone, "<br>";
        echo "Celular: ", $celular, "<br>";
        echo "E-mail: ", $email, "<br>";
        echo "Foto: ", $foto_nome, "<br>";
        echo "Data de Cadastro: ", date('d/m/Y'), "</p>";


        $sql = "insert into agenda (nome, apelido, endereco, bairro, cidade, 
                estado, telefone, celular, email, dt_cadastro, foto_blob, foto_nome)
                values ('" . $nome . "','" . $apelido . "','" . $endereco . "','" . 
                $bairro . "','" . $cidade . "','" . $estado . "','" . $telefone . "','" . 
                $celular . "','" . $email  . "','" . $dt_cadastro . "','" . 
                $foto_blob . "','" . $foto_nome . "')";

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
