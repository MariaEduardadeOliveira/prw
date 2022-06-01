<?php
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = 'SELECT * FROM usuario where id_usuario =' . $id_usuario;    
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
	<title> CADASTRO</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h2 class="h2" align="center">Alterar os Dados - IFSP</h2>
    <hr align="tr">
    <?php 
    echo "<img class='foto' src='data:image/jpeg;base64," . 
    base64_encode($row["foto_blob"]) . "'/>";
    ?> 
    <form class="letter" method="POST" action="altera_usuario_exe.php" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td>Nome:</td>
                <td><input type="text" class="letter" name="nome_usuario" size="50" value="<?php echo $row['nome_usuario']?>"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" class="letter" name="email_usuario" size="50" value="<?php echo $row['email_usuario']?>"></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="text" class="letter" name="fone_usuario" size="30" value="<?php echo $row['fone_usuario']?>"></td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
                <td></td>
                <td>
                    <input type="file" name="foto_usuario" id="foto" accept="image/*" size="30">
                    <label for="foto" class="letter" id="foto">Selecione uma Imagem</label>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" id="enviar" class="letter" align="center" value="Enviar">
                    <label for="enviar" class="letter" id="enviar">Enviar</label>
                </td>
            </tr>
            <tr>
                <td><input name="id_usuario" type="hidden" value="<?php echo $row['id_usuario']?>"></td>
            </tr>
        </table>
    </form>
    <a class="a" href="listar_usuario.php">Voltar</a>
</body>
</html>