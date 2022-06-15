<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = 'select * from fluxo_caixa where id=' . $id;    
    $result = mysqli_query($con, $sql);
    /**if (!$result) {
        printf("Errormessage: %s\n", mysqli_error($con));
    }   **/ 
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title></title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h2 class="h2" align="center">Alterar o Fluxo do Caixa</h2>
    <hr align="tr">
    <form class="letter" method="POST" action="altera_fluxo_caixa_exe.php">
        <table align="center">
            <tr>
                <br>
                <td>Data:</td>
                <td><input type="date" class="letter" name="data" value="<?php echo $row['data']?>"></td>
            </tr>
            <tr>
                <td>Tipo:</td>
                <td><input type="radio" class="letter" name="tipo" value="entrada">Entrada
                    <input type="radio" class="letter" name="tipo" value="saida">Saída
                </td>
            </tr>
            <tr>
                <td>Valor:</td>
                <td><input type="text" class="letter" name="valor" size="14" value="<?php echo $row['valor']?>"></td>
            </tr>
            <tr>
                <td>Histórico:</td>
                <td><input type="text" class="letter" name="historico" size="28" value="<?php echo $row['historico']?>"></td>
            </tr>
            <tr>
                <td>Cheque:</td>
                <td>
                    <select name="cheque" class="letter" required size="1" value="<?php echo $row['cheque']?>">
                        <option>Sim</option>
                        <option>Não</option>
                    </select>
                </td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" id="enviar" class="letter" align="center" value="Enviar">
                    <label for="enviar" class="letter" id="enviar">Enviar</label>
                </td>
            </tr>
            <tr>
                <td><input name="id" type="hidden" value="<?php echo $row['id']?>"></td>
            </tr>
        </table>
    </form>
    <br>
    <div id="back">
        <a class="a" href="listar_fluxo_caixa.php">Voltar</a>
    </div>
</body>
</html>