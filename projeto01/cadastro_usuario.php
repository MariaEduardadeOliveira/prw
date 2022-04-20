<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
    include('conexao.php');
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $fone_usuario = $_POST['fone_usuario'];

    echo "<p>Nome do usuário: ", $nome_usuario, "<br>";
    echo "E-mail: ", $email_usuario, "<br>";
    echo "Telefone: ", $fone_usuario, "</p>";
	?>
</body>
</html>