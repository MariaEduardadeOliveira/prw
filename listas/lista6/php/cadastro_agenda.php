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
        $nome= $_POST['nome'];
        $apelido= $_POST['apelido'];
        $endereco= $_POST['endereco'];
        $bairro= $_POST['bairro'];
        $cidade= $_POST['cidade'];
        $estado= $_POST['estado'];
        $telefone= $_POST['telefone'];
        $celular= $_POST['celular'];
        $email= $_POST['email'];
        $dt_cadastro= date('d/m/Y');

        echo "<p>Nome: ", $nome, "<br>";
        echo "Apelido: ", $apelido, "<br>";
        echo "Endereço: ", $endereco, "<br>";
        echo "Bairro: ", $bairro, "<br>";
        echo "Cidade: ", $cidade, "<br>";
        echo "Estado: ", $estado, "<br>";
        echo "Telefone: ", $telefone, "<br>";
        echo "Celular: ", $celular, "<br>";
        echo "E-mail: ", $email, "<br>";
        echo "Data de Cadastro:", $dt_cadastro, "</p>";


        $sql = "insert into agenda (nome, apelido, endereco, bairro, cidade, 
                estado, telefone, celular, email, dt_cadastro)
                values ('" . $nome . "','" . $apelido . "','" . $endereco . "','" . 
                $bairro . "','" . $cidade . "','" . $estado . "','" . $telefone . "','" . 
                $celular . "','" . $email  . "','" . $dt_cadastro . "')";

        $result = mysqli_query($con, $sql);

        if($result){
            echo "Dados inseridos com sucesso. <br>";
        }else{
            echo "Erro ao inserir no banco de dados. <br>", mysqli_error($con);
        }
    ?>
    <a class="a" href="../php/index.php">Voltar</a>
</body>
</html>