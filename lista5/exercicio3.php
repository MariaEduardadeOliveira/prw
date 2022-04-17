<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista 5 - 06/04/2022</h1>
	<p><strong>Exercício 3</strong></p>
	<?php
	$login = $_POST['login'];
    $senha = $_POST['pass'];
    $users = array('Alice' => 'xer', 'João' => 'rty', 'Glória' => 'wsa');

    if(array_key_exists($login, $users)){
        if($users[$login] == $senha){
            echo "Acesso Permitido";
        }else{
            echo "Senha Inválida";
        }
    }else{
        echo "Usuário Não Encontrado";
    }
	?>
</body>
</html>