<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
    $hostname = "localhost";
    $port = 3307;
    $username = "root";
    $password = "";
    $database = "projeto01";

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(mysqli_connect_errno()){
        echo "Erro ao conectar ao banco de dados %s\n", mysqli_connect_error();
        exit;
    }
    echo "Banco de dados conectado com sucesso \o/";
	?>
</body>
</html>