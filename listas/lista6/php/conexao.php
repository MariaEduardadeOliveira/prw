<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title></title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
	<?php
    $hostname = "localhost";
    $port = 3307;
    $username = "root";
    $password = "";
    $database = "lista6";

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(mysqli_connect_errno()){
        echo "Erro ao conectar ao banco de dados T-T", mysqli_connect_error();
        exit;
    }
    echo "Banco de dados conectado com sucesso \o/";
	?>
</body>
</html>