<?php
    include('conexao.php');
    $sql = 'select * from usuario';
    $result = mysqli_query($con, $sql);
  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>LISTAGEM</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h2 class="h2" align="center">Listagem de Usuários</h2>
    <table class="lista" align="center" border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Excluir</th>
        </tr>

        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['id_usuario'] . "</td>";
                echo "<td><a class='a' href='altera_usuario.php?id_usuario=" 
                . $row['id_usuario'] . "'>" . $row['nome_usuario'] . "</a></td>";
                echo "<td>" . $row['email_usuario'] . "</td>";
                echo "<td>" . $row['fone_usuario'] . "</td>";
                echo "<td><a class='a' href='excluir_usuario.php?id_usuario=" 
                . $row['id_usuario'] . "'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <a class="a" href="index.php"><br>Voltar</a>
</body>
</html>