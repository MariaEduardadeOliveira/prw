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
    <link rel="stylesheet" href="estilo.css">;
</head>
<body>
    <h2 class="h2" align="center">Cadastro de Clientes - IFSP</h2>
    <hr align="tr">
    <form method="POST" action="cadastro_usuario.php">
        <table align="center">
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome_usuario" size="50" value="<?php echo $row['nome_usuario']?>"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email_usuario" size="50" value="<?php echo $row['email_usuario']?>"></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="text" name="fone_usuario" size="30" value="<?php echo $row['fone_usuario']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" align="center" value="Enviar"></td>
            </tr>
        </table>
    </form>
    <a class="a" href="index.php">Voltar</a>
</body>
</html>