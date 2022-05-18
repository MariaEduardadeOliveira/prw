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
    $id_agenda = $_POST['id_agenda'];
    $nome= $_POST['nome'];
    $apelido= $_POST['apelido'];
    $endereco= $_POST['endereco'];
    $bairro= $_POST['bairro'];
    $cidade= $_POST['cidade'];
    $estado= $_POST['estado'];
    $telefone= $_POST['telefone'];
    $celular= $_POST['celular'];
    $email= $_POST['email'];
    $dt_cadastro= date('Y-m-d');

    $sql = "update agenda set 
    nome='" . $nome . "',
    apelido='" . $apelido . "', 
    endereco='" . $endereco . "', 
    bairro='" . $bairro . "',
    cidade='" . $cidade . "',
    estado='" . $estado . "',
    telefone='" . $telefone . "',
    celular='" . $celular . "',
    email='" . $email . "', 
    dt_cadastro='". $dt_cadastro . "' 
    where id_agenda=" . $id_agenda;

    $result = mysqli_query($con, $sql);

    if($result){
        echo "<p>Nome: ", $nome, "<br>";
        echo "Apelido: ", $apelido, "<br>";
        echo "Endereço: ", $endereco, "<br>";
        echo "Bairro: ", $bairro, "<br>";
        echo "Cidade: ", $cidade, "<br>";
        echo "Estado: ", $estado, "<br>";
        echo "Telefone: ", $telefone, "<br>";
        echo "Celular: ", $celular, "<br>";
        echo "E-mail: ", $email, "<br>";
        echo "Data de Cadastro:", date('d/m/Y'), "<br></p>";
        echo "Dados alterados com sucesso.<br>";
    }else{
        echo "Erro ao alterar no banco de dados.<br>", mysqli_error($con);
    }
	?>
    <br>
    <a class="a" href="listar_agenda.php">Voltar</a>
</body>
</html>