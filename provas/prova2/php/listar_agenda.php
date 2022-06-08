<?php
    include('conexao.php');
    $sql = 'select * from agenda';
    $result = mysqli_query($con, $sql);
  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title></title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h2 class="h2" align="center">Listagem de Agendas</h2>
    <table class="lista" align="center" border="1">
        <tr>
            <th>Código</th>
            <th>Foto</th>
            <th>Data</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>E-mail</th>
            <th>Excluir</th>
        </tr>

        <?php
            while($row = mysqli_fetch_array($result)){
                $data = explode('-',$row['dt_cadastro']);
                echo "<tr>";
                echo "<td>" . $row['id_agenda'] . "</td>";
                echo "<td><img class='lis_foto' src='data:image/jpeg;base64,"
                . base64_encode($row["foto_blob"]) . "'/></td>";
                echo "<td>" . $data[2].'/'.$data[1].'/'.$data[0] . "</td>";
                echo "<td><a id='link' class='a' href='alterar_agenda.php?id_agenda=" 
                . $row['id_agenda'] . "'>" . $row['nome'] . "</a></td>";
                echo "<td>" . $row['apelido'] . "</td>";
                echo "<td>" . $row['endereco'] . "</td>";
                echo "<td>" . $row['bairro'] . "</td>";
                echo "<td>" . $row['cidade'] . "</td>";
                echo "<td>" . $row['estado'] . "</td>";
                echo "<td>" . $row['telefone'] . "</td>";
                echo "<td>" . $row['celular'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td><a id='link' class='a' href='excluir_agenda.php?id_agenda=" 
                . $row['id_agenda'] . "'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <div id="back">
        <a class="a" href="index.php">Voltar</a>
    </div>
</body>
</html>