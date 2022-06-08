<?php
    include('conexao.php');
    $sql = 'select * from fluxo_caixa';
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
    <h2 class="h2" align="center">Listagem de Fluxo de Caixa</h2>
    <table class="lista" align="center" border="1">
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Histórico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>

        <?php
            while($row = mysqli_fetch_array($result)){
                $data = explode('-',$row['data']);
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $data[2].'/'.$data[1].'/'.$data[0] . "</td>";
                echo "<td>" . $row['tipo'] . "</td>";
                echo "<td>" . $row['valor'] . "</td>";
                echo "<td><a id='link' class='a' href='altera_fluxo_caixa.php?id=" 
                . $row['id'] . "'>" . $row['historico'] . "</a></td>";
                echo "<td>" . $row['cheque'] . "</td>";
                echo "<td><a id='link' class='a' href='excluir_fluxo_caixa.php?id=" 
                . $row['id'] . "'>Excluir</a></td>";
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