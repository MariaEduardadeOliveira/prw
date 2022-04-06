<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $users = array('fulano' => '123', 'ciclano' => '456');

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