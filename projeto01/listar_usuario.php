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
</head>
<body>
    <h2>Listagem de Usuários</h2>
    <table align="center" border="1" width=500>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>

        <?php
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['id_usuario'] . "</td>";
        echo "<td>" . $row['nome_usuario'] . "</td>";
        echo "<td>" . $row['email_usuario'] . "</td>";
        echo "<td>" . $row['fone_usuario'] . "</td>";
        echo "</tr>";
    }
    ?>
    </table>
    <a href="index.php">Voltar</a>
</body>
</html>