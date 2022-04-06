<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Aula 6 - 06/04/2022</h1>
	<p><strong>Vetores 1 - Exemplos</strong></p>
	<?php
    //Exemplo de Vetor - Array
    $vetor = array(10,50,100,150,200);
    echo "Vetor - <strong>Array</strong> (10,50,100,150,200) <br>";
    echo "Vetor(2) - Array (exemplo): ", $vetor[2]."<br>";
    echo "<br>";

    //Exemplo de Vetor - Date
    $hoje = date("w");
    $diaSemana[0] = "Domingo";
    $diaSemana[1] = "Segunda-feira";
    $diaSemana[2] = "Terça-feira";
    $diaSemana[3] = "Quarta-feira";
    $diaSemana[4] = "Quinta-feira";
    $diaSemana[5] = "Sexta-feira";
    $diaSemana[6] = "Sábado";
    echo "A variável <strong>\$hoje</strong> contém o número: $hoje <br>";
    echo "Hoje é: $diaSemana[$hoje] <br>";
    echo "<br>";

    //Exemplo Vetor - Alunos
    echo "Exemplo Vetor - Alunos - Ordem do <strong>Array</strong> <br>";
    $alunos = array('José', 'João', 'Pedro', 'Maria', 'Alan');
    for($x=0; $x < count($alunos); $x++){
        echo "N° do aluno: ", $x+1, " e Nome do aluno: ", $alunos[$x], "<br>";
    }
    echo "<br>";

    //Exemplo Vetor - Alunos - Alfabético
    echo "Exemplo Vetor - Alunos - Ordem <strong>Alfabética</strong> <br>";
    sort($alunos);
    for($x=0; $x < count($alunos); $x++){
        echo "N° do aluno: ", $x+1, " e Nome do aluno: ", $alunos[$x], "<br>";
    }
    echo "<br>";

    //Exemplo Vetor - Alunos - Alfabético - Print
    echo "Exemplo Vetor - Alunos - Alfabético - <strong>Print</strong> <br>";
    print_r($alunos);
    echo "<br>";
    echo "<br>";

    //Exemplo Vetor - Alunos - Alfabético - Unset
    echo "Exemplo Vetor - Alunos - Alfabético - <strong>Unset</strong> <br>";
    unset($alunos[2]);
    print_r($alunos);
    echo "<br>";
    echo "<br>";

    //Exemplo Vetor - Alunos - Alfabético - Unset - Value
    echo "Exemplo Vetor - Alunos - Alfabético - Unset - <strong>Value</strong> <br>";
    $alunos = array_values($alunos);
    print_r($alunos);
    echo "<br>";
    ?>
</body>
</html>