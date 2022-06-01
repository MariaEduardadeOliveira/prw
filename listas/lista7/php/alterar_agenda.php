<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = 'SELECT * FROM agenda where id_agenda =' . $id_agenda;    
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
    <h2 class="h2" align="center">Alterar as Agendas</h2>
    <hr align="tr">
    <?php 
    echo "<img class='foto' src='data:image/jpeg;base64," . 
    base64_encode($row["foto_blob"]) . "'/>";
    ?>
    <form class="letter" method="POST" action="alterar_agenda_exe.php" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td>Nome:</td>
                <td><input type="text" class="letter" name="nome" size="30" value="<?php echo $row['nome']?>"></td>
            </tr>
            <tr>
                <td>Apelido:</td>
                <td><input type="text" class="letter" name="apelido" size="30" value="<?php echo $row['apelido']?>"></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input type="text" class="letter" name="endereco" size="30" value="<?php echo $row['endereco']?>"></td>
            </tr>
            <tr>
                <td>Bairro:</td>
                <td><input type="text" class="letter" name="bairro" size="30" value="<?php echo $row['bairro']?>"></td>
            </tr>
            <tr>
                <td>Cidade:</td>
                <td><input type="text" class="letter" class="letter" name="cidade"size="30" value="<?php echo $row['cidade']?>"></td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td>
                    <select name="estado" class="letter" required size="1" value="<?php echo $row['estado']?>">
                        <option>AC</option>
                        <option>AL</option>
                        <option>AP</option>
                        <option>AM</option>
                        <option>BA</option>
                        <option>CE</option>
                        <option>DF</option>
                        <option>ES</option>
                        <option>GO</option>
                        <option>MA</option>
                        <option>MT</option>
                        <option>MS</option>
                        <option>MG</option>
                        <option>PA</option>
                        <option>PB</option>
                        <option>PR</option>
                        <option>PE</option>
                        <option>PI</option>
                        <option>RJ</option>
                        <option>RN</option>
                        <option>RS</option>
                        <option>RO</option>
                        <option>RR</option>
                        <option>SC</option>
                        <option>SP</option>
                        <option>SE</option>
                        <option>TO</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="tel" class="letter" name="telefone" size="30" value="<?php echo $row['telefone']?>"></td>
            </tr>
            <tr>
                <td>Celular:</td>
                <td><input type="tel" class="letter" name="celular" size="30" value="<?php echo $row['celular']?>"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" class="letter" name="email" size="30" value="<?php echo $row['email']?>"></td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
                <td></td>
                <td>
                    <input type="file" name="foto" id="foto" accept="image/*" size="30">
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
                <td><input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>"></td>
            </tr>
        </table>
    </form>
    <br>
    <a class="a" href="listar_agenda.php">Voltar</a>
</body>
</html>